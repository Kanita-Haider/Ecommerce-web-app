

 <section id="header">
      <a href="#"><img src="project/Img/git/logo.png" class="logo" alt="logo"</a>
      <div>
        <ul id="navbar">
          <li><a  class="{{ request()->is('/') ? 'active' : '' }}" href="{{url('/')}}">Home</a></li>
          <li><a class="{{ request()->is('view_shop') ? 'active' : '' }}" href="{{url('view_shop')}}">Shop</a></li>
          <li><a class="{{ request()->is('blog') ? 'active' : '' }}" href="{{url('blog')}}">Blog</a></li>
          <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="{{url('about')}}">About</a></li>
          <li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{url('contact')}}">Contact Us</a></li>
         
          @if (Route::has('login'))
          @auth
          <x-app-layout>
          </x-app-layout>
          @else
          <li>
            <a class="{{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}"><i class="fa-solid fa-user"></i></a>
          </li>
          @endauth
          @endif
          <li>
            <a class="{{ request()->is('view_cart') ? 'active' : '' }}" href="{{url('view_cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
        </ul>
      </div>
    </section>