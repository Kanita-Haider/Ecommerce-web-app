
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script
      src="https://kit.fontawesome.com/0df4ee1a7f.js"
      crossorigin="anonymous"
    ></script>
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="project/style.css" />
    <script src="script.js"></script>
  </head>

  <body>
   
    @include ('home.header')

    <section id="page-header">
      
      <h2>#stayhome</h2>
      
      <p>Save more with Coupons & up to 70% off!</p>
      <!--<button id="btn1"></button>
        <button id="btn2"></button>
        -->
      </section>

      
      <section id="product1" class="section-p1" name="New Arrivals">
        <k2>Featured Collections</k2>
        <p>  New Modern Design</p>
        <div class="pro-container">

          @foreach($product as $product)

          <div class="pro">
            <a href="{{url('product_details',$product->id)}}">
            <img src="/product/{{$product->image}}" />
            <div class="des">
              <span>{{$product->title}}</span>
              <h5>{{$product->description}}</h5>
              <div class="Star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h4>Tk. {{$product->price}}</h4>
              <form>
              <a><i class="fa-solid fa-cart-shopping cart"></i></a>

            </form>
            </div>
            </a>
          </div>

          @endforeach
          
         
        </div>
      </section>
    
    @include ('home.footer')

    
  </body>
</html>
