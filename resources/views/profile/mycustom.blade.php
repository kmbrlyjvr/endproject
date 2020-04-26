@extends('layouts.master')
@section('container')

<div class="orderdesign">
        <img src="{{ route('order.renderSvgSession') }}"  width="600" height="600" alt="colored overall">
            <div class="pickcolor-history">
                <ul>
                    @foreach($orders as $order)
                        <h2>Color</h2>               
                    <p class="colorcode">{{ json_decode($order->config)->trouserColor }}</p>
                    <li class="colors-4 fadeIn" style="background-color: {{ json_decode($order->config)->trouserColor}}"></li>
                        <h2>Pocket Color</h2>
                    <p class="colorcode">{{ json_decode($order->config)->pocketColor}}</p>
                    <li class="colors-4 fadeIn" style="background-color: {{ json_decode($order->config)->pocketColor }}"></li>
                        <h2>Logo Color</h2>
                    <p class="colorcode">{{ json_decode($order->config)->logoColor}}</p>
                    <li class="colors-4 fadeIn" style="background-color: {{ json_decode($order->config)->logoColor }}"></li>
                    @endforeach
                </ul>
            </div>
        </div>
@endsection