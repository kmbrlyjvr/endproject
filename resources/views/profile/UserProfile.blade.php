@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
    <h2 class="title">Your Profile</h2>
    <div class="profilecontainer">
        
            @foreach($users as $user)
                <h2><span class="highlightnude">{{ $user->name }}</span></h2>
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

        <a href="">Edit</a>
        <h2><span class="highlightnude">Orders</span></h2>
        <div class="tablecontainer">

            <table class="tableorders">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Address</th>
                        <th>Total (+ shipping)</th>

                        <th>Payment</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ json_decode($order->config)->type }}</td>
                        <td>{{ json_decode($order->config)->size }}</td>
                        <td>{{ $user->address }} {{ $user->zip }}</td>
                        <td></td>
                        <td>{{ $order->payment }}</td>
                        <td>{{ $order->created_at->format('d/m/Y') }}</td>
                        <td>{{ $order->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        
        </div>
    </div>
</div>
@endsection