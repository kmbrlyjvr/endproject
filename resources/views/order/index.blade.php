@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
<h2 class="title">Cart</h2>

<div class="summary">

        <table>
            <tbody>
                <tr>
                    <td>NAME</td>
                    <td>username</td>
                </tr>
                <tr>
                    <td>DATETIME</td>
                    <td>00.00.2020 00:00PM</td>
                </tr>
                <tr>
                    <td>Trousers</td>
                    <td>Ryerson 001</td>
                    <td>IMAGE
                        
                    </td>

                </tr>
                <tr>
                    <td>Colors</td>
                    <td>002 Colors</td>
                </tr>
                <tr>
                    <td>SUBTOTAL</td>
                    <td>00,0€</td>
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
                    <td>PAYMENT</td>
                    <td>visa</td>
                </tr>
            </tbody>
        </table>

        @if(auth()->check())
        <button type="submit" class="trouser-save">Order now</button>
    @else
        <li> <a href="{{ route('auth.login')}}">login</a></li>
        <li> <a href="{{ route('auth.signup')}}">sign up</a></li>
    @endif
    </div>



</div>

</div>

@endsection





  