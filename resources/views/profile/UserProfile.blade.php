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
                                <td>{{ $user->adress }} | {{ $user->zip }} | {{ $user->country }}</td>
                            </tr>
                            <tr>
                                <td>Since</td>
                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                            </tr>
                    </table>
            @endforeach

        <a href="{{ route('profile.edit', $user->id) }}">Edit</a>
        <h2><span class="highlightnude">Orders</span></h2>

            <table class="tableorders">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Total (+ shipping)</th>
                        <th>Address</th>
                        <th>Payment</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->user_name}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        </div>
    </div>
</div>