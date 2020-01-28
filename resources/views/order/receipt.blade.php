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
                            @foreach($users as $user)
                            <td>NAME</td>
                            <td>{{ $user->name }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>DATETIME</td>
                            <td>{{ $order->created_at->format('d/m/Y') }}</td>
                        </tr>
                        <tr>
                            <td>Trousers</td>
                            <td>{{ json_decode($order->config)->type }}</td>
                        </tr>
                        <tr>
                            <td>SUBTOTAL</td>
                            <td>{{ $item->price }}€</td>
                        </tr>
                        <tr>
                            <td>SHIPPING</td>
                            <td>{{ $shipping->price }}€</td>
                        </tr>
                        <tr style="color:var(--nude);">
                            <td>GRANDTOTAL</td>
                            <td>{{ $total }}€</td>
                        </tr>
                        <tr>
                            <td>PAYMENT</td>
                            <td>{{ $order->payment }}</td>
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