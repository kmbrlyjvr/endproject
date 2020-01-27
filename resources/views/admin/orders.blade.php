@extends('layouts.masterAdmin')
@section('container')

    <div class="area">  
            <h2>Orders</h2>

<div class="defaultcontainer">
        <div class="tableadmincontainer">

                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Product</th>
                            <th>Size</th>
                            <th>Address</th>
                            <th>Payment</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->user->name }}</a></td>
                            <td>{{ json_decode($order->config)->type }}</td>
                            <td>{{ json_decode($order->config)->size }}</td>
                            <td>{{ $order->user->address }} | {{ $order->user->zip }} | {{ $order->user->country}}</td>
                            <td>{{ $order->payment }}</td>
                            <td>{{ $order->created_at->format('d/m/Y') }}</td>
                            <td>{{ $order->status }}</td>
                            <td><a href="{{ route('admin.orderEdit', $order->user->id)}}">Edit</a></td>
                        @endforeach
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
    