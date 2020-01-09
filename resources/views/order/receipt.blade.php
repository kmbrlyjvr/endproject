@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
        <h2>RECEIPT</h2>
        
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
        
                <p>SALAMAT (THANK YOU) FOR YOUR PURCHASE!
                    <br>COPYRIGHT SINTA 2019 VIENNA AUSTRIA &
                    PHILIPPINES
        
                </p>
            </div>
        
    
        </div>
        
        </div>
        
@endsection