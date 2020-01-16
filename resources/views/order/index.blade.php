@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
<h2 class="title">Cart</h2>

<div class="summary">

        <table>
            <tbody>
                <tr>
                    <td>Trousers</td>
                    <td>Ryerson 001</td>
                    <img style="width: 100px;" src="{{ route('order.renderSvgSession') }}" />
                    </tr>
                <tr>
                    <td>NAME</td>
                    <td>users name</td>
                </tr>
                <tr>
                    <td>DATETIME</td>
                    <td>00.00.2020</td>
                </tr>
                <tr>
                    <td>SUBTOTAL</td>
                    <td></td>
                </tr>
                <tr>
                    <td>SHIPPING</td>
                    <td>00,0€</td>
                </tr>
                <tr>
                    <td>GRANDTOTAL</td>
                    <td>00,0€</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>00,0€</td>
                </tr>
                <tr>
                    <td>PAYMENT</td>
                    <td>PayPal</td>
                </tr>
            </tbody>
        </table>

    <div class="orderlogin">
    @if(auth()->check())
    <a href="{{ route('order.receipt') }}">Order now</a>
    @else
     <a href="{{ route('auth.login')}}">login</a>
     <a href="{{ route('auth.signup')}}">sign up</a>
    @endif
    </div>



</div>

</div>

@endsection





  