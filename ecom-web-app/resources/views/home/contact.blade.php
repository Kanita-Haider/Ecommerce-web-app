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
    <section id="page-header">


        <h2>Leave a Message, We Love to hear from you!</h2>


        <p>Lorem ipsum dolor sit amet, consectetur </p>
        <!--<button id="btn1"></button>
        <button id="btn2"></button>
        -->
    </section>
   
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>

            <div>
                <li>
                    <i class="fa-regular fa-map"></i>
                    <p>International Islamic University Chittagong Kumira, Chattogram-4318, Bangladesh</p>
                </li>
                <li>
                    <i class="fa-regular fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fa-regular fa-clock"></i>
                    <p>Monday to Saturday: 9.00am to 16.pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.3021407128253!2d91.72220569999999!3d22.4928444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd173206f0309%3A0x7753a7342b1613b5!2sIIUC%20Female%20Academic%20Building%203!5e0!3m2!1sen!2sbd!4v1686751653555!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name ="" id="" cols="80" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        
        
        </form>
<div class="people">
<div>
    <img src="project/Img/git/people/1.png" alt="">
    <p><span>John Doe</span>Senior marketing Manager<br>Phone: + 000 123 000 77 88<br>Email: contact@example.com</p>
</div>
<div>
    <img src="project/Img/git/people/2.png" alt="">
    <p><span>Willian Smith</span>Senior marketing Manager<br>Phone: + 000 123 000 77 88<br>Email: contact@example.com</p>
</div>
<div>
    <img src="project/Img/git/people/3.png" alt="">
    <p><span>Emma Stone</span>Senior marketing Manager<br>Phone: + 000 123 000 77 88<br>Email: contact@example.com</p>
</div>
</div>
    </section>
   


  </section>
  @include ('home.footer')
    
  </body>
</html>
