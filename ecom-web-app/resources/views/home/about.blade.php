<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script
      src="https://kit.fontawesome.com/0df4ee1a7f.js"
      crossorigin="anonymous"></script>
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="project/style.css" />
    <script src="script.js"></script>
  </head>
<body>

  @include ('home.header')
  <section>
    <section id="page-header" class="about-header">
      
        <h2>#knowUs</h2>
        
        <p>Lorem ipsum dolor sit amet, consectetur </p>
        <!--<button id="btn1"></button>
          <button id="btn2"></button>
          -->
        </section>
       <section id="about-head"class="section-p1">
          <img src="project/img/git/about/a6.jpg" alt="">
          <div>
            
              <h2>Who We Are?</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut obcaecati dolores id accusamus eveniet recusandae officia natus sed deserunt libero repudiandae facere laboriosam consequuntur quod ullam itaque earum quibusdam odio minima, autem molestias laborum sequi asperiores? Mollitia earum repellat repellendus expedita nisi, tenetur eaque fugit aperiam, et, pariatur a dicta.</p>
              
              <br><br>

              <marquee bgcolor="#ccc" loop="-1" scrollamount="4" width="100%" >Create stnning image with as much or as little control as you like thanks to achoice of basic and Creative modes</marquee>
          </div>
       </section>
      <section id="about-app"class="section-p1">
          <h1>Download Our <a href="#">App</a></h1>
          <div class="video">
  <video autoplay muted loop src="project/img/git/about/1.mp4"></video>
          </div>
      </section>
      <section id="feature" class="section-p1">
          <div id="fe-box">
            <img id="freeship" src="project/img/git/features/f1.png" alt="" />
            <h3>Shop Anywhere</h3>
          </div>
          <div id="fe-box">
            <img id="freeship" src="project/img/git/features/f2.png" alt="" />
            <h3>Free Shipping</h3>
          </div>
          <div id="fe-box">
            <img id="freeship" src="project/img/git/features/f3.png" alt="" />
            <h3>Return Policy</h3>
          </div>
          <div id="fe-box">
            <img id="freeship" src="project/img/git/features/f4.png" alt="" />
            <h3>Happy Sales</h3>
          </div>
          <div id="fe-box">
            <img id="freeship" src="project/img/git/features/f5.png" alt="" />
            <h3>24/7 Support</h3>
          </div>
        </section>
  </section>
  @include ('home.footer')
    
  </body>
</html>
