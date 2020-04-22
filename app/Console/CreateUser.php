<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {name?} {email?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // https://laravel.com/docs/5.8/artisan#writing-commands

        $name = $this->argument('name') ?: $this->ask('Whats your name?');
        $email = $this->argument('email') ?: $this->ask('Whats your email?');
        $password = $this->secret('What is the password?');

        $user = User::where('email', $email)->first();

        if ($user) {

            $this->error('User already exists');
            return;
        }

        User::create(compact('name', 'email', 'password'));

        $this->info('User created!');

        $headers = ['Name', 'Email'];
        $users = User::all(['name', 'email'])->toArray();

        $this->table($headers, $users);
    }
}
