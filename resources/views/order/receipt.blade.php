@extends('layouts.master')
@section('container')

<section class="defaultcontainer">
    <h2 class="title outer">YOUR CUSTOMISED ITEM</h2>
 
    <div class="receipt">
        <!--  @if(session('status'))
        <div class="status" style="visibility:hidden;">
            {{ session('status') }}
        </div>
        @endif-->

        <br>      
        <br>      
        <br>
        <br>
        <span class="highlightnude thankyou" style="color:var(--main);">SALAMAT (THANK YOU) FOR YOUR PURCHASE!</span>            

    <div class="orderdesign">

    <img src="{{ route('order.renderSvgSession') }}"  width="600" height="600" alt="colored overall">
        <div class="pickcolor-history">
            <ul>
                    <h2>Color</h2>               
                <p class="colorcode">{{ json_decode($order->config)->trouserColor }}</p>
                <li class="colors-4 fadeIn" style="background-color: {{ json_decode($order->config)->trouserColor}}"></li>
                    <h2>Pocket Color</h2>
                <p class="colorcode">{{ json_decode($order->config)->pocketColor}}</p>
                <li class="colors-4 fadeIn" style="background-color: {{ json_decode($order->config)->pocketColor }}"></li>
                    <h2>Logo Color</h2>
                <p class="colorcode">{{ json_decode($order->config)->logoColor}}</p>
                <li class="colors-4 fadeIn" style="background-color: {{ json_decode($order->config)->logoColor }}"></li>
                    <h2>Belt Color</h2>
                <p class="colorcode">{{ json_decode($order->config)->beltColor}}</p>
                <li class="colors-4 fadeIn" style="background-color: {{ json_decode($order->config)->beltColor}}"></li>
            </ul>
        </div>
    </div>


    <div class="receiptdetails">
        <h2>RECEIPT</h2>
           
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
                <a class="" href="{{ route('home') }}">back to home</a>
         </div>
    </div>
</div>
</section>
        
@endsection