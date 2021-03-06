<?php
include_once ("app/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="M_Adnan">
    <title>PAVSHOP - Multipurpose eCommerce HTML5 Template</title>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/ionicons.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>

    <!-- Online Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

=
<!-- Wrap -->
<div id="wrap">

    <!-- header -->
    <header>
        <div class="sticky">
            <div class="container">

                <!-- Logo -->
                <div class="logo"> <a href="index.html"><img class="img-responsive" src="images/logo.png" alt="" ></a> </div>
                <nav class="navbar ownmenu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
                    </div>

                    <!-- NAV Bar -->
                    <div class="collapse navbar-collapse" id="nav-open-btn">
                        <ul class="nav">
                            <li class="dropdown "> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Home</a></li>
                            <li class="dropdown"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Pages</a></li>
                            <li> <a href="about-us_01.html">About </a> </li>
                            <li class="dropdown"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Designer</a></li>
                            <li class="dropdown megamenu"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">store</a></li>
                            <li> <a href="contact.html"> contact</a> </li>
                        </ul>
                    </div>


                    <!-- Nav Right "ICON"-->
                    <div class="nav-right">
                        <ul class="navbar-right">

                            <!-- USER INFO -->
                            <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i class="icon-user"></i> </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <h6>HELLO! Jhon Smith</h6>
                                    </li>
                                    <li><a href="#">MY CART</a></li>
                                    <li><a href="#">ACCOUNT INFO</a></li>
                                    <li><a href="#">LOG OUT</a></li>
                                </ul>
                            </li>



                            <!-- USER BASKET -->
                            <li class="dropdown user-basket"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="icon-basket-loaded"></i> </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="media-left">
                                            <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/cart-img-1.jpg" alt="..."> </a> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">WOOD CHAIR</h6>
                                            <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                                    </li>
                                    <li>
                                        <div class="media-left">
                                            <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/cart-img-2.jpg" alt="..."> </a> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">WOOD STOOL</h6>
                                            <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                                    </li>
                                    <li>
                                        <h5 class="text-center">SUBTOTAL: 258.00 USD</h5>
                                    </li>
                                    <li class="margin-0">
                                        <div class="row">
                                            <div class="col-xs-6"> <a href="shopping-cart.html" class="btn">VIEW CART</a></div>
                                            <div class="col-xs-6 "> <a href="checkout.html" class="btn">CHECK OUT</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>



                            <!-- SEARCH BAR -->
                            <li class="dropdown"> <a href="javascript:void(0);" class="search-open"><i class=" icon-magnifier"></i></a>
                                <div class="search-inside animated bounceInUp"> <i class="icon-close search-close"></i>
                                    <div class="search-overlay"></div>
                                    <div class="position-center-center">
                                        <div class="search">
                                            <form>
                                                <input type="search" placeholder="Search Shop">
                                                <button type="submit"><i class="icon-check"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>





    <!-- Content -->
    <div id="content">

        <!-- Popular Products -->
        <section class="shop-page padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="item-display">
                    <div class="row">
                        <div class="col-xs-6"> <span class="product-num">Showing 1 - 10 of 30 products</span> </div>

                        <!-- Products Select -->
                        <div class="col-xs-6">
                            <div class="pull-right">

                                <!-- Short By -->
                                <select class="selectpicker">
                                    <option>Short By</option>
                                    <option>Short By</option>
                                    <option>Short By</option>
                                </select>
                                <!-- Filter By -->
                                <select class="selectpicker">
                                    <option>Filter By</option>
                                    <option>Short By</option>
                                    <option>Short By</option>
                                </select>

                                <!-- GRID & LIST -->
                                <a href="#." class="grid-style"><i class="icon-grid"></i></a> <a href="#." class="list-style"><i class="icon-list"></i></a> </div>
                        </div>
                    </div>
                </div>

                <!-- Popular Item Slide -->
                <div class="papular-block row">
                    <?php
                    $items = $db->query("SELECT * FROM item");

                    foreach ($items AS  $item) {
                        ?>
                        <!-- Item -->
                        <div class="col-md-3">
                            <div class="item">
                                <!-- Item img -->
                                <div class="item-img"><img class="img-1" src="images/product-2-1.jpg" alt=""> <img
                                            class="img-2" src="images/product-2.jpg" alt="">

                                </div>
                                <!-- Item Name -->
                                <div class="item-name"><a href="#."><?php echo $item['name'] . "-" . $item['color']?></a>
                                    <p>Size : <?php echo $item['size']?></p>
                                </div>
                                <!-- Price -->
                                <span class="price"><small>$</small><?php echo $item['price']?></span></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>


                <!-- About -->
                <section class="small-about padding-top-150 padding-bottom-150">
                    <div class="container">

                        <!-- Main Heading -->
                        <div class="heading text-center">
                            <h4>about PAVSHOP</h4>
                            <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odio luctus non. Nulla lacinia,
                                eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
                        </div>
                        <!-- Social Icons -->
                        <ul class="social_icons">
                            <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                            <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                            <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                            <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                        </ul>
                    </div>
                </section>


            </div>

            <!--======= FOOTER =========-->
            <footer>
                <div class="container">

                    <!-- ABOUT Location -->
                    <div class="col-md-3">
                        <div class="about-footer"> <img class="margin-bottom-30" src="images/logo-foot.png" alt="" >

                        </div>
                    </div>

                    <div class="col-md-3">
                        <p><i class="icon-pointer"></i> Street No. 12, Newyork 12, <br>
                            MD - 123, USA.</p>
                    </div>

                    <div class="col-md-3">

                        <p><i class="icon-call-end"></i> 1.800.123.456789</p>
                        <p><i class="icon-envelope"></i> info@PAVSHOP.com</p>
                    </div>

                </div>

            </footer>

            <!--======= RIGHTS =========-->

    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/own-menu.js"></script>
    <script src="js/jquery.lighter.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main.js"></script>
</body>
</html>