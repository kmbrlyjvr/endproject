@extends('layouts.master')
@section('container')

<div class="defaultcontainer">

    @if(session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif

        <h2 class="title">RECEIPT</h2>
        
        <div class="receipt">
                <img src="/svgs/logo.svg">
                <p>sinta vienna</p>
               <div class="receiptsmall"> 
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
        
                <p>SALAMAT (THANK YOU) FOR YOUR PURCHASE!
                    <br>COPYRIGHT SINTA 2019 VIENNA AUSTRIA &
                    PHILIPPINES
                </p>

                <a href="{{ route('home') }}">back to home</a>
            </div>
        
    
        </div>
        
        </div>
        
@endsection