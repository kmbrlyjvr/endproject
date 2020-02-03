@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
    <h2 class="title">Your Profile</h2>
    <div class="profilecontainer">
        
            @foreach($users as $user)
                <h2 style="color:var(--main);" ><span class="highlightnude">{{ $user->name }}</span></h2>
                    <table class="tableprofile">
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


        <h2 style="color:var(--main);"><span class="highlightnude">Orders</span></h2>

            <div class="tablecontainer">
                <table class="tableprofile">
                        @foreach($orders as $order)

                        <tr>
                            <td>Product</td>
                            <td>{{ json_decode($order->config)->type }}</td>
                        </tr>

                        <tr>
                            <td>Size</td>
                            <td>{{ json_decode($order->config)->size }}</td>
                        </tr>

                        <tr>
                            <td>Address</td>
                            <td>{{ $user->address }} {{ $user->zip }}</td>
                        </tr>

                        <tr>
                            <td>Payment</td>
                            <td>{{ $order->payment }}</td>
                        </tr>

                        <tr>
                            <td>Date</td>
                            <td>{{ $order->created_at->format('d/m/Y') }}</td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td>{{ $order->status }}</td>
                        </tr>
                        @endforeach

                      </table>
                  </div>
              </div>
        </div>
    </div>
@endsection