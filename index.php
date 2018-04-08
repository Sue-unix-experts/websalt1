<!DOCTYPE html>
<html>
  <head>
    <title>DrySalt TEST Website - not for production</title>
    <link href="slick.css" rel="stylesheet">
    <link href="slick-theme.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="jquery.min.js"></script>
  </head>
  <body>
    <section>
      <div class="container">
        <h1>DrySalt's obviously salted caramel</h1>
        <h3>running on <?php echo $_SERVER['SERVER_ADDR']; ?></h3>
      </div>
    </section>



    <section>
      <div class="slider">
        <div>
          <!-- picture from Deliciously Yum! -->
          <img src="SaltedChewyCaramels1.jpg" width="200" height="100">
        </div>
        <div>
          <!-- picture from Food Network! -->
          <img src="1459798109068.jpg" width="200" height="100">
        </div>
        <div>
          <!-- picture from Salt Revolution! -->
          <img src="Sea-Salt-Caramels-300x240.jpg" width="200" height="100">
        </div>
        <div>
          <!-- picture from SugarHero! -->
          <img src="salted-caramel-bars-1.jpg" width="200" height="100">
        </div>
      </div>
    </section>

    <!-- picture from pixabay -->
    <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="salt-lake-594606_1920.jpg" data-natural-width="1920" data-natural-height="1321"></div>

    <section>
      <div class="container">
        <p>We at DrySalt value caramel and provide awesome pictures of it ... that's what we do. Naturally powered by SaltStack!

      </div>
    </section>


    <footer>
      <div class="container">
	Copyright &copy; 2018 by WebSalt Inc. - the imaginary company for our <a href="https://sue2018.snow.nl">SUE 2018</a> workshop 
      </div>
    </footer>
    <script src="slick.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.slider').slick({
           infinite: false ,
           autoplay: true,
           autoplaySpeed: 2000,
           // the magic
           responsive: [{
               breakpoint: 1024,
               settings: {
                 slidesToShow: 3,
                 infinite: true
               }
             }, {
               breakpoint: 600,
                 settings: {
                 slidesToShow: 2,
                 dots: true
               }
             }, {
               breakpoint: 300,
               settings: "unslick" // destroys slick
             }]
        });
      });
    </script>
  </body>
</html>
