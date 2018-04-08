<!DOCTYPE html>
<html>
  <head>
    <title>DrySalt TEST Website - not for production</title>
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
    <section>
      <div class="container">
        <h1>DrySalt's obviously salted caramel</h1>
        <h3>running on <?php echo $_SERVER['SERVER_ADDR']; ?></h3>
      </div>
    </section>


    <section>
      <div class="container">
        <p>We at DrySalt value caramel and provide awesome pictures of it ... that's what we do. Naturally powered by SaltStack!

      </div>
    </section>

    <div class="boxed">
      <div class="bss-slides slides">
        <!-- pictures from https://www.cookingclassy.com/salted-caramel-sauce-step-step-pictures/ -->
        <figure>
          <img src="salted-caramel-sauce-10.jpg" width="100%" />
          <figcaption>Add ingredients</figcaption>
        </figure>
        <figure>
          <img src="salted-caramel-sauce-11.jpg" width="100%" />
          <figcaption>Melt the sugar</figcaption>
        </figure>
        <figure>
          <img src="salted-caramel-sauce-12.jpg" width="100%" />
          <figcaption>Watch the temperature, color is good, burning isn't</figcaption>
        </figure>
        <figure>
          <img src="salted-caramel-sauce-25.jpg" width="100%" />
          <figcaption>At this nice coloing, lower temperature and add butter</figcaption>
        </figure>
        <figure>
          <img src="salted-caramel-sauce-23.jpg" width="100%" />
          <figcaption>Add butter, careful it will rise up (lower temperature when it does)</figcaption>
        </figure>
        <figure>
          <img src="salted-caramel-sauce-22.jpg" width="100%" />
          <figcaption>Add double cream</figcaption>
        </figure>
        <figure>
          <img src="salted-caramel-sauce-21.jpg" width="100%" />
          <figcaption>Add shaved salt-flakes and stir</figcaption>
        </figure>
        <figure>
          <img src="salted-caramel-sauce-9-768x1152.jpg" width="100%" />
          <figcaption>Enjoy!</figcaption>
        </figure>
      </div>
    </div>



    <footer>
      <div class="container">
	Copyright &copy; 2018 by WebSalt Inc. - the imaginary company for our <a href="https://sue2018.snow.nl">SUE 2018</a> workshop 
      </div>
    </footer>
    <script src="better-simple-slideshow.js"></script>
    <script type="text/javascript">
      var opts = {
        auto : { 
                // speed to advance slides at. accepts number of milliseconds
                speed : 2500, 
                // pause advancing on mouseover? accepts boolean
                pauseOnHover : false 
            },
            // show fullscreen toggle? accepts boolean
            fullScreen : true, 
            // support swiping on touch devices? accepts boolean, requires hammer.js
            swipe : false 
        };
      makeBSS('.slides',opts);
    </script>
  </body>
</html>
