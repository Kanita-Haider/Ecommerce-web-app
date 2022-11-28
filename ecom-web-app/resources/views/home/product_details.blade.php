
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
    <script src="project/script.js"></script>
    
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

    
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
          <img   src="/product/{{$product->image}}"  width="100%" id="MainImg" alt="">
          </div>
        </div>
  
        <div class="single-pro-details">
          <h6>Home / {{$product->catagory}}</h6>
          <h4>{{$product->title}}</h4>
          <h2>Tk. {{$product->price}}</h2>

          <form action="{{url('add_cart',$product->id)}}" method="POST">

            @csrf

          <select>
            <option>Select Size</option>
             <option>XL</option>
             <option>XXL</option> 
             <option>Small</option>
              <option>Large</option>
          </select>
          <input type="number" name="quantity"value="1" min="1">
          
          <div>
          <input style="width: 100px; background:#088178;color: #fff;"
                    id="normal" type="submit" value="Add to cart">  
        </div>   

        </form>

          <h4>Product Details</h4>
          <SPAN>{{$product->description}}</SPAN>
        </div>
      </section>

    

    <section id="product1" class="section-p1">
      <k2>New Arrivals</k2>
      <p>Winter Collections New Modern Design</p>
      <div class="pro-container">
        <div class="pro">
          <img src="project/Img/product/f7.jpg" />
          <div class="des">
            <span>Nocturne</span>
            <h5>Vibrant Pullover Hooded Jacket</h5>
            <div class="Star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>$78</h4>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
        </div>
        <div class="pro">
          <img src="project/Img/product/f6.jpg" />
          <div class="des">
            <span>Nocturne</span>
            <h5>Vibrant Pullover Hooded Jacket</h5>
            <div class="Star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>$78</h4>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
        </div>
        <div class="pro">
          <img src="project/Img/product/f2.jpg" />
          <div class="des">
            <span>Nocturne</span>
            <h5>Vibrant Pullover Hooded Jacket</h5>
            <div class="Star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>$78</h4>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
        </div>
        <div class="pro">
          <img src="project/Img/product/f1.jpg" />
          <div class="des">
            <span>Nocturne</span>
            <h5>Vibrant Pullover Hooded Jacket</h5>
            <div class="Star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>$78</h4>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
        </div>
        <div class="pro">
          <img src="project/Img/product/f3.jpg" />
          <div class="des">
            <span>Nocturne</span>
            <h5>Vibrant Pullover Hooded Jacket</h5>
            <div class="Star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>$78</h4>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
        </div>
        <div class="pro">
          <img src="project/Img/product/f4.jpg" />
          <div class="des">
            <span>Nocturne</span>
            <h5>Vibrant Pullover Hooded Jacket</h5>
            <div class="Star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>$78</h4>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
        </div>
        <div class="pro">
          <img src="project/Img/product/f5.jpg" />
          <div class="des">
            <span>Nocturne</span>
            <h5>Vibrant Pullover Hooded Jacket</h5>
            <div class="Star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>$78</h4>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
        </div>
        <div class="pro">
          <img src="project/Img/product/f7.jpg" />
          <div class="des">
            <span>Nocturne</span>
            <h5>Vibrant Pullover Hooded Jacket</h5>
            <div class="Star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>$78</h4>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
        </div>
      </div>
    </section>

    


    
    
   
    
 

  @include ('home.footer')
    
  </body>
</html>



