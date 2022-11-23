

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
          @else
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