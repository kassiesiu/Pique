<html>

<head>
    <title>
        <?php echo $pageTitle; ?>
    </title>
    <link rel="stylesheet" href="_css/main.css" type="text/css">
    <link rel="stylesheet" href="_css/physics.css" type="text/css">
    <link rel="stylesheet" href="_css/reset.css" type="text/css">

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>


    <script type="text/javascript">

$(document).ready(function(){
   var scroll_start = 0;
   var startchange = $('.container');
   var offset = startchange.offset();
   $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {

          $('.nav a').css ( 'color', 'black');
          $('.header').css({
              'background-color' : 'white',
          });
          $('.nav a:hover').css ( 'color', '#f4ba5f');
          $('.logo').css ('background-image', 'url("logo.png")');

       } else {
          $('.header').css('background-color', 'transparent');
          $('.nav a').css ( 'color', 'white');
          $('.logo').css ('background-image', 'url("logo-2.png")');
       }
   });
});

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

    </script>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,900" type="text/css">
</head>

<body>

    <div class="header">

    <div class="logo"></div>

        <ul class="nav">

            <li class=""><a href="index.php">Home</a></li>
            <li><a href="physics.php">Physics</a></li>
            <li><a href="animation.php">Animation</a></li>
            <li><a href="http://www.swcta.net">SWCTA</a></li>

        </ul>

    </div>


