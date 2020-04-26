@extends('layouts.master')
@section('container')

<section class="defaultcontainer">
    <h2 class="title outer">Your Profile</h2>
    <div class="profilecontainer">
        
            @foreach($users as $user)
                <h2 style="color:var(--main);"><span class="highlightnude inner">{{ $user->name }}</span></h2>
                    <table class="tableprofile inner">
                            <tr>
                                <td>E-Mail</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $user->address }} | {{ $user->zip }} | {{ $user->country }}</td>
                            </tr>
                            <tr>
                                <td>Since</td>
                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                            </tr>
                    </table>
            @endforeach

        <a href="{{ route('profile.edit', $user->id) }}">Edit</a><br><br><br>


        <h2 style="color:var(--main);"><span class="highlightnude outer">Orders</span></h2>

        <br>
        <br>
            <div class="tablecontainer">
                <table class="tableorder inner">
                        @foreach($orders as $order)

                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Size</th>
                                    <th>Address</th>
                                    <th>Payment</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>{{ json_decode($order->config)->type }}</td>
                                <td>{{ json_decode($order->config)->size }}</td>
                                <td>{{ $user->address }} {{ $user->zip }}</td>
                                <td>{{ $order->payment }}</td>
                                <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                <td>{{ $order->status }}</td>
                            </tr>

                        @endforeach

                      </table>
                  </div>
              </div>
        </div>
</section>
@endsection