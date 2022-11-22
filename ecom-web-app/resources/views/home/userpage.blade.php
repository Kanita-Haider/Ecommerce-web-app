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
    <script src="project/script.js"></script>
    
  </head>

  <body>
    <section id="header">
      <a href="#"><img src="project/Img/git/logo.png" class="logo" alt="logo"</a>
      <div>
        <ul id="navbar">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="shop.html">Shop</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          @if (Route::has('login'))
          @auth
           <x-app-layout>
          </x-app-layout>
          <li>
            <a href="{{ route('login') }}"><i class="fa-solid fa-user"></i></a>
          </li>
          @endauth
          @endif
          <li>
            <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
        </ul>
      </div>
    </section>

    <section id="hero">
      <h3 >Tade-in-Offer</h3>
      <h2 style="font-size: 50px;
    line-height: 64px;
    color: #222;">Super Value Deals</h2>
      <h1 style="font-size: 50px;
    line-height: 64px;
    #088178;">On All Products</h1>
      <p>Save more with Coupons & up to 70% off!</p>
      <!--<button id="btn1"></button>
        <button id="btn2"></button>
        -->
      <div class="arrow-icon">
        <a href=""><img src="project/Img/back-arrow.png" class="btn" /></a>
        <a href=""> <img src="project/Img/next-arrow.png" /></a>
      </div>
    </section>

    <section id="feature" class="section-p1">
      <div id="fe-box">
        <img id="freeship" src="project/Img/shopping.jpg" alt="" />
        <h3>Shop Anywhere</h3>
      </div>
      <div id="fe-box">
        <img id="freeship" src="project/Img/free shipping green.jpg" alt="" />
        <h3>Free Shipping</h3>
      </div>
      <div id="fe-box">
        <img id="freeship" src="project/Img/onlineorder.jpg" alt="" />
        <h3>Return Policy</h3>
      </div>
      <div id="fe-box">
        <img id="freeship" src="project/Img/8449757_3916946.jpg" alt="" />
        <h3>Happy Sales</h3>
      </div>
      <div id="fe-box">
        <img id="freeship" src="project/Img/support.jpg" alt="" />
        <h3>24/7 Support</h3>
      </div>
    </section>

    <section id="product1" class="section-p1">
      <h2>New Arrivals</h2>
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

    <section id="banner">
      <h4>Repair Services</h4>
      <h2>Up to <span>70% off</span> - All t-shirts & Accesssories</h2>
      <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1" name="New Arrivals">
      <h2>Featured Products</h2>
      <p>Mens Collections New Modern Design</p>
      <div class="pro-container">
        <div class="pro">
          <img src="project/Img/git/products/n1.jpg" />
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
          <img src="project/Img/git/products/n2.jpg" />
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
          <img src="project/Img/git/products/n3.jpg" />
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
          <img src="project/Img/git/products/n4.jpg" />
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
          <img src="project/Img/git/products/n5.jpg" />
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
          <img src="project/Img/git/products/n6.jpg" />
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
          <img src="project/Img/git/products/n7.jpg" />
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
          <img src="project/Img/git/products/n8.jpg" />
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

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 Get 1 Free</h2>
            <span>The best Classic Dress is on Sale at Cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Spring/Summer</h4>
            <h2>Upcomming Season</h2>
            <span>The best Classic Dress is on Sale at Cara</span>
            <button class="white">Collection</button>
        </div>
    </section>
    
    <section id="banner3">
        <div class="banner-box">
            <h2>Seasonal Sale</h2>
            <h3>Winter Collection -50% </h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>Seasonal Sale</h2>
            <h3>Winter Collection -50% </h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>Seasonal Sale</h2>
            <h3>Winter Collection -50% </h3>
        </div>
    </section>
    <section class="newsletter" >
        <div class="newstext" >
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail Updates about our latest Shop and<span>Special offers.</span></p>
        </div>
        <div class="form" >
            <input type="text" placeholder="Your Email Address">
            <button>Sign Up</button>
        </div>
    </section>
    
  </body>
</html>



