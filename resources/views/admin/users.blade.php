@extends('layouts.masterAdmin')
@section('container')

       <div class="area">  
            <h2>Userslist</h2>

<div class="defaultcontainer">

    <div class="tableadmincontainer">

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Address</th>

                <th>Registered since</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }} | {{ $user->zip }} | {{ $user->country }}</td>
                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                <td><a href="{{ route('admin.userEdit', $user->id)}}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
       </div>

 @endsection