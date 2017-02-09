<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Big Ears Festival</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="queries.css">

    <!-- Start Slick Slider -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

    </head>
    <body>

<!-- Start Header -->
    <div class="row imgbox fullWidth">
      <div class="small-12 medium-7 large-7 columns">
        <img id = "logo" src="slices/big-ears-2016-logo.png" width = "100%">
      </div>

      <div class="medium-1 large-1 columns">
        <img id = "line" src="slices/gradient-repeater.jpg" >
      </div>

      <div class="small-12 medium-4 large-4 columns">
        <div class="single-item slider">
          <div>
            <img src="slices/sample-quote1.png">
          </div>

          <div>
            <img src="slices/sample-quote2.png">
          </div>

          <div>
            <img src="slices/sample-quote3.png">
          </div>
        </div>

        <div class = "arrowBox">
          <div class="prev"></div>
          <div class="next"></div>
        </div>
      </div>
    </div>

    <div class = "row buttonBox">
      <div class = "small-12 medium-6 large-6 columns">
        <a href = "#"><img class = "right" src = "slices/buy-2016-pre-sale-tickets.png" onmouseover="this.src='slices/buy-2016-pre-sale-tickets-hover.png'" onmouseout="this.src='slices/buy-2016-pre-sale-tickets.png'"></a>
      </div>    

      <div class = "small-12 medium-6 large-6 columns">
        <a href = "#"><img src = "slices/see-last-years-event.png" onmouseover="this.src='slices/see-last-years-event-hover.png'" onmouseout="this.src='slices/see-last-years-event.png'"></a>
      </div>
    </div>

    <div class = "row">
      <div class = "medium-2 large-2 columns birds">
        <img src = "slices/big-ears-bird-left.png">
      </div>

      <div class = "medium-2 large-2 columns birds">
        <img src = "slices/big-ears-bird-right.png">
      </div>
    </div>



<!-- Start body -->
    <div class="row">
      <div class="small-8 medium-5 large-5 columns">
        <h1>Festival News</h1>
      </div>
    </div>

    <div class="row">
      <div class="small-12  medium-5 large-5 columns">
        <h3><a href = "#">Big Ears 2016 Artists Announced</a></h3>
          <p>Quostecta quostecta eaqui bla quis dolupta
           nones vendam nones et as nonsequamus...</p>
          <hr> 
      </div>
    </div>


    <div class="row">
      <div class="small-12 medium-5 large-5 columns">
        <h3><a href = "#">Top Events to See at Big Ears 2016</a> </h3>
        <p>Explant quostecta eaqui bla quis vendam nones
           et as nonsequamus molore...</p>
          <hr>
      </div>
    </div>

    <div class="row">
      <div class="small-12 medium-5 large-5 columns">
        <h3><a href = "#">10 Visual Artists to Catch at Big Ears Festival</a></h3>
          <p>Nones quostecta eaqui bla quis dolupta vendam
          nones et as nonsequamus molore...</p> 
          <hr>
      </div>

      <div class="small-12  medium-7 large-7 columns">
        <iframe class = "video" width="560" height="315" src="https://www.youtube.com/embed/9eIufXCizK4?rel=0&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

  <footer>
    <div class="row footerimg fullWidth">
      <div class = "small-12 medium-4 large-4 columns">
        <h1>Stay Connected</h1>
      </div>


    <?php
     if (isset($_REQUEST['email']))  {
      $admin_email = "jmills@thinkpyxl.com";
      $email = $_REQUEST['email'];
      mail($admin_email, "Thanks for signing up!", "You are receiving this email because Josh's Test Project Worked.", "From:" . $email);
      }
      
      //if email isn't filled out, do nothing
      else  {
    ?>
      <form>
        <div class = "small-12 medium-5 large-5 columns">
          <div class="row collapse">
            <div class="small-10 columns">
              <input class = "address" name="email" type="text" placeholder="Email Address">
            </div>

            <div class="small-2 columns buttonAddress">
              <input type="submit" value="Sign Up" class="button postfix address">
            </div>
        </div>
        </div>
    </form>

  <?php
  }
?>

      <div class = "small-12 medium-3 large-3 columns">
        <img class = "social" src = "slices/big-ears-facebook@2x.png" onmouseover="this.src='slices/big-ears-facebook-hover@2x.png'" onmouseout="this.src='slices/big-ears-facebook@2x.png'">
        <img class = "social" src = "slices/big-ears-instagram@2x.png" onmouseover="this.src='slices/big-ears-instagram-hover@2x.png'" onmouseout="this.src='slices/big-ears-instagram@2x.png'">
        <img class = "social" src = "slices/big-ears-twitter@2x.png" onmouseover="this.src='slices/big-ears-twitter-hover@2x.png'" onmouseout="this.src='slices/big-ears-twitter@2x.png'">
      </div>
  </div>
</footer>

  
    <script src="https://use.typekit.net/uxc6ivz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).on('ready', function() {
      $(".single-item").slick({
        infinite: true,
        arrows: false,
        autoplay: true
      });

      $('.prev').click(function(){
      $('.slider').slick('slickPrev');
      })

      $('.next').click(function(){
      $('.slider').slick('slickNext');
      })
    });
  </script>
  </body>
</html>
