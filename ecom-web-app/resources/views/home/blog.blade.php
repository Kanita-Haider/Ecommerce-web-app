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

    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
  
      .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 20px;
      }
  
      .blog-post {
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #ddd;
      }
  
      .blog-post:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
      }
  
      .blog-post h2 {
        font-size: 40px;
        margin-bottom: 25px;
      }
  
      .blog-post p {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 15px;
      }
  
      .blog-post img {
      display: block;
      max-width: 80%;
      height: auto;
      margin-bottom: 15px;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    </style>

  </head>


  @include ('home.header')
  <body>
  <section>

    <div class="container">
      <div class="blog-post">
        <h2>Blog Post Title 1</h2>
        <img src="project/img/product/f6.jpg" alt="Image 1">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id dolor vitae dolor pulvinar pharetra. Proin efficitur risus sit amet semper semper. Curabitur eu mauris eget ligula convallis efficitur.</p>
      </div>
  
      <div class="blog-post">
        <h2>Blog Post Title 2</h2>
        <img src="project/img/product/f5.jpg" alt="Image 1">
        <p>Etiam vulputate, lorem in aliquet congue, lectus metus finibus lorem, non posuere ipsum metus in lacus. Fusce cursus neque at tincidunt posuere. Suspendisse dignissim, lacus eu rutrum dignissim, enim leo cursus ipsum.</p>
      </div>
  
      <div class="blog-post">
        <h2>Blog Post Title 3</h2>
        <img src="project/img/product/f2.jpg" alt="Image 1">
        <p>Nunc non magna commodo, vestibulum ligula at, fermentum sem. Sed posuere libero quis dapibus laoreet. Sed ultricies tortor in justo posuere consectetur.</p>
      </div>
    </div>
  </section>
  @include ('home.footer')
    
  </body>
</html>
