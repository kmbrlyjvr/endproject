<?php
use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Blog::create([
            'title' => 'ALEALI MAY 2018',
            'text' => 'Aleali <span class="highlight">— pronounced uh.lay.ee, as she politely informs all on Instagram — is the world most famous female sneakerhead (well, since 90s-era Mel C). <br>Her track record includes being the second woman to collaborate with Jordan in its 34-year history, the first woman ever to design Jordan sneakers in both men and women  sizes and being a stylist to the likes of Kendrick Lamar and Tinashe. But what makes Aleali so enticing is her story of humble beginnings.
                            California born, Aleali May first entered the fashion industry whilst studying at Columbia College Chicago. At just 19 years old, she secured a part-time job at Louis Vuitton and was later hired by RSVP gallery — a Chicago-based boutique created by Virgil Abloh and Don C. Fast-forward seven years and the fashion triple threat (ambitiously juggling careers as a stylist, model and designer) is now lucky enough to count Virgil as a friend.
                            Just like Micheal Jordan himself, Aleali May is a poster girl for the power of a success-driven mindset. She oozes determination, has great zeal for sneaker culture and is confident enough to speak her mind. Spearheading a generation of women who are as engrossed by streetwear as their male counterparts; just one stalk of May’s Insta feed is enough to convince even the most sceptical that sneakers are as much as a women’s game as they are a man’s.                                                                                     
                            We caught up with ‘Her Airness’ (on the beach, as you do) to talk influences, achievements and all things Air Jordan.<br>
                            </span>',
            'bigtext' => '"Blending streetwear and high-end fashion gives a lot of kids inspiration that it’s not just one side or the other, you can do both."',
            'hero' => 'designers/alealiblog.jpg',
            'imagetwo' => 'imgs/alealitrouserportrait.jpg',
            'imagethree' => 'designers/alealijordan.jpg',
            'imagefour' => 'designers/alealicloseup.jpg',
        ]);

    }
}
