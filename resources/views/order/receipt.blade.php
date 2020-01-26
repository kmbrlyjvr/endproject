@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
    <h2 class="title">RECEIPT</h2>
 
    <div class="receipt">
        <img src="/svgs/logo.svg">
            <div class="receiptsmall"> 
                                
                @if(session('status'))
                <div class="status" style="visibility:hidden;">
                    {{ session('status') }}
                </div>
                @endif

                <table>
                    <tbody>
                        <tr>
                            <td>NAME</td>
                            <td></td>
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
        
                <p style="color:var(--main); text-align:center;">
                        <span style="font-size: 12px; text-align:center; color:var(--black); text-transform:uppercase;">© 2018 Sinta Philippines/Austria</span>
                        <br><span class="highlightnude">SALAMAT (THANK YOU) FOR YOUR PURCHASE!</span></p>
                <a class="button" href="{{ route('home') }}">back to home</a>
         </div>
    </div>
</div>
        
@endsection