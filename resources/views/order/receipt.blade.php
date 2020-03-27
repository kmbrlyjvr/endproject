@extends('layouts.master')
@section('container')

<section class="defaultcontainer">
    <h2 class="title outer">RECEIPT</h2>
 
    <div class="receipt">
        <img class="inner" src="/svgs/logo.svg" alt="sinta logo"><br><br><br>
            <div class="receiptsmall inner"> 
                                
                  <!--  @if(session('status'))
                    <div class="status" style="visibility:hidden;">
                        {{ session('status') }}
                    </div>
                    @endif-->

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
                <span style="font-size: 12px; text-align:center; color:var(--black); text-transform:uppercase;">© 2018 Sinta Philippines/Austria</span>

         </div>
         <p style="color:var(--main); text-align:center;">
                <br><span class="highlightnude">SALAMAT (THANK YOU) FOR YOUR PURCHASE!</span></p>

         <a class="" href="{{ route('home') }}">back to home</a>

    </div>
</section>
        
@endsection