@extends('layouts.master')
@section('container')

<section class="defaultcontainer">
<h2 class="title outer">Cart Summary</h2>

<!-- RETURN (BACK) BUTTON -->
<a href="{{ URL::previous() }}" class="back_button">Back</a> 

<div class="summary">


    <div class="img-magnifier-container svgrenderorder">
        <img class="summaryimage inner" id="summaryimg"   src="{{ route('order.renderSvgSession') }}"  width="600" height="600" alt="colored overall">
    </div>

    <div class="summarytable inner">
        <table>
            <tbody>
                <tr>
                    <td>Item</td>
                    <td>{{ $order['type'] }}</td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>{{ $order['size'] }}</td>
                </tr>
                <tr>
                    <td>SUBTOTAL</td>
                    <td>{{ $item->price }}€</td>
                </tr>
                <tr>
                    <td>SHIPPING</td>
                    <td>{{ $shipping->price }}€</td>
                </tr>
                <tr>
                    <td style="color:var(--nude);">GRANDTOTAL</td>
                    <td style="color:var(--nude); font-size: 25px;">{{ $total }}€</td>
                </tr>
                <tr>
                    <td>PAYMENT</td>
                    <td><select name="payment" class="custompayment">
                        <option value="default">Please Select</option>
                            <option value="Visa">Visa</option>
                            <option value="Paypal">Paypal</option>
                    </select></td>
                </tr>
                       
                 <tr>
                    <td>
                        @if(auth()->check())
                            <a class="button" href="{{ route('order.receipt') }}">Order</a>
                            @else
                            <p> Please
                             <a href="{{ route('auth.login')}}">login</a>
                             or
                             <a href="{{ route('auth.signup')}}">sign up</a>
                             to complete your order
                            </p>
                            @endif
                        </td>
                    </tr>
            </tbody>
        </table>

    </div>
</div>
</section>
<script>

/* MAGNIFIER from w3schools */

function magnify(summaryimg, zoom) {
      var img, glass, w, h, bw;
      img = document.getElementById(summaryimg);
    
      /* Create magnifier glass: */
      glass = document.createElement("DIV");
      glass.setAttribute("class", "img-magnifier-glass");
    
      /* Insert magnifier glass: */
      img.parentElement.insertBefore(glass, img);
    
      /* Set background properties for the magnifier glass: */
      glass.style.backgroundImage = "url('" + img.src + "')";
      glass.style.backgroundRepeat = "no-repeat";
      glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
      bw = 3;
      w = glass.offsetWidth / 2;
      h = glass.offsetHeight / 2;
    
      /* Execute a function when someone moves the magnifier glass over the image: */
      glass.addEventListener("mousemove", moveMagnifier);
      img.addEventListener("mousemove", moveMagnifier);
    
      /*and also for touch screens:*/
      glass.addEventListener("touchmove", moveMagnifier);
      img.addEventListener("touchmove", moveMagnifier);
      function moveMagnifier(e) {
        var pos, x, y;
        /* Prevent any other actions that may occur when moving over the image */
        e.preventDefault();
        /* Get the cursor's x and y positions: */
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /* Prevent the magnifier glass from being positioned outside the image: */
        if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
        if (x < w / zoom) {x = w / zoom;}
        if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
        if (y < h / zoom) {y = h / zoom;}
        /* Set the position of the magnifier glass: */
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        /* Display what the magnifier glass "sees": */
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
      }
    
      function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        /* Get the x and y positions of the image: */
        a = img.getBoundingClientRect();
        /* Calculate the cursor's x and y coordinates, relative to the image: */
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /* Consider any page scrolling: */
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {x : x, y : y};
      }

    }
    
    magnify("summaryimg", 2);

</script>

@endsection





  