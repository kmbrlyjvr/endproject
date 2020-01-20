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
                    <td>Adress</td>
                    <td>{{ $user->adress }} | {{ $user->zip }} | {{ $user->country }}</td>
                </tr>
                <tr>
                    <td>Since</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                </tr>
        </table>
        @endforeach
        <a href="">Edit</a>
        <h2><span class="highlightnude">Orders</span></h2>

    <div class="table">
        <table>
            <tbody>
                <tr>
                    <td>Product</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>(+ shipping)</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>