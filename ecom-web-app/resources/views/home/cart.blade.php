
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script
      src="https://kit.fontawesome.com/0df4ee1a7f.js"
      crossorigin="anonymous"
    ></script>
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="project/style.css" />
    <script src="script.js"></script>

    <style type="text/css">
      #normal{
          margin-top: 15px;
      font-size: 14px;
      font-weight: 600;
      padding: 10px 30px;
      color: #000;
      background-color: #fff;
      border-radius: 4px;
      cursor: pointer;
      border: none;
      outline: none;
      transition: 0.2s;
  }
      </style>
    
  </head>

  <body>
    @include ('home.header')

    <section id="page-header">
      
      <h2>#cart</h2>
      
      <p>Add your coupon code & SAVE upto 70%!</p>
      <!--<button id="btn1"></button>
        <button id="btn2"></button>
        -->
      </section>

      <section id="cart" class="section-p1">
        <table width="100%">
          <thead>
            <tr>
              <td>Remove</td>
              <td>Image</td>
              <td>Product Title</td>
              <td>Price</td>
              <td>Quantity</td>
            </tr>
          </thead>
          <tbody>

<?php $totalprice=0; ?>

@foreach($cart as $cart)

            <tr>
              <td><a href="{{url('remove_cart',$cart->id)}}"><i class="far fa-times-circle"></i></a></td>
              <td><img src="/product/{{$cart->image}}"></td>
              <td>{{$cart->product_title}}</td>
              <td>{{$cart->price}}</td>
              <td>{{$cart->quantity}}</td>
               
            </tr>
            <?php $totalprice=$totalprice+ $cart->price; ?>
@endforeach           
            
           
          </tbody>
        </table>
      </section>
<section id="cart-add" class="section-p1">
  <div id="coupon">
    <h3>Apply Coupon</h3>
    <div>
      <input type="text" placeholder="Enter Your Coupon">
      <button class="normal">Apply</button>
    </div>
    
  </div>
  <div id="Subtotal">
    <h3>Cart Total</h3>
    <table>
      <tr>
        <td>Order Id</td>
        <td>{{$cart->id}}</td>
      </tr>
      <tr>
        <td>Customer Name</td>
        <td>{{$cart->name}}</td>
      </tr>
      <tr>
        <td>Address</td>
        <td>{{$cart->address}}</td>
      </tr>

      <tr>
        <td>Phone</td>
        <td>{{$cart->phone}}</td>
      </tr>

      <tr>
        <td>Cart Subtotal</td>
        <td>{{$totalprice}}</td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td>Free</td>
      </tr>
      <tr>
        <td><strong>Total</strong></td>
        <td><strong>{{$totalprice}}</strong></td>
      </tr>
    </table>

    <h3>Proceed to checkout</h3>
    <a style=" background:#088178;color: #fff;"  id="normal" href="{{url('cash_on')}}" > Cash on Delivery</a>
     <a style=" background:#088178;color: #fff;" id="normal"  >Pay Using Card</a>
    


  </div>
  
</section>
    
    
@include ('home.footer')

    
  </body>
</html>
