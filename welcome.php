<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="project";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
// session_start();
// if(isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
   
//     exit;
// }

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>VTU Calculator </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="sgpa Calculator, Calculator, cgpa Calculator, VTU, cbcs,non cbcs" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="static/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="static/css/style.css" rel='stylesheet' type='text/css' />
     <!-- font-awesome icons -->
    <link  href="static/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- pop up box -->
	<link href="static/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="static/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="static/css/owl.theme.css" type="text/css" media="all">
	
</head>
<body>
    <!-- header -->
    
    <header>
       
        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h1>
                           VTU Calculator
                        </h1>
                    <button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav text-center ml-auto">
                          
                          <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                              <a class="hover-fill" aria-pressed="false" href="sgpa.html" data-txthover="SGPA CALCULATOR">SGPA CALCULATOR</a>
                          </li>
                          <li class="nav-item">
                              <a class="hover-fill" aria-pressed="false" href="calc/cgpa.html" data-txthover="CGPA CALCULATOR">CGPA CALCULATOR</a>
                          </li>
                        </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- //header -->
    <!-- banner -->

      <br> <br>
      <br> 
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
        
        <div >                  
                             <ul class=" text-center  ">
                          <li class="   ">
                              <a class="hover-fill" aria-pressed="false" href="sgpa.html" data-txthover="SGPA CALCULATOR" style="font-size:50px">SGPA CALCULATOR</a>
                          </li>
                          <br>
                          <br>
                          <li class="  mt-4">
                              <a class="hover-fill" aria-pressed="false" href="calc/cgpa.html" data-txthover="CGPA CALCULATOR"style=" font-size:50px">CGPA CALCULATOR</a>
                          </li>
                        </ul>
    
    </div>
    

    <!-- js -->
    <script src="static/js/jquery-2.2.3.min.js"></script>
	<!--pop-up-box -->
	<script src="static/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript">
    document.getElementById('cgpac').onsubmit = function() {
        var percentage;
        var g = document.getElementById('gpa').value;
        percentage = (g-0.75)*10;
       
    };
  </script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->
    <!-- start-smooth-scrolling -->
    <script src="static/js/move-top.js" ></script>
    <script src="static/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
	 <!-- carousel -->
    <script src="static/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->


    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
             var defaults = {
            	 containerID: 'toTop', // fading element id
            	 containerHoverID: 'toTopHover', // fading element hover id
            	 scrollSpeed: 1200,
            	 easingType: 'linear'
             };
             */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="static/js/SmoothScroll.min.js"></script>
    <script src="static/js/bootstrap.js"></script>
</body>
</html>
