<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SilverFoxy SnapShots</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">SilverFoxy SnapShots</div>
    <div class="address-bar">Bhilai | Chhattisgarh, India 490001 | 930-373-0451</div>
    
    <?php

    if (isset($_GET["logout"])) {

        if ($_GET["logout"] == "true") { ?>

            <div class="alert alert-sucess">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>You Have Been Loged out of the system</strong>
            </div>

    <?php
        }
    }
    ?>
    <!-- NAVIGATION-->
    <?php require_once 'nav.php';?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/img1.jfif" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/img2.jfif" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/img3.jfif" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">SilverFoxy SnapShots</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Alex Atom</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">HOW TO TAKE PHOTOS
                        <strong>USING ANDROID </strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/img3.jfif" alt="">
                    <hr class="visible-xs">
                    <p><h3>1. Capture Multiple Shots</h3></P><br>
                    <p>One of the best things about smartphone photography is that you can take as many photos as you want and there is no need to print them off to see the results. This makes it much easier to learn and improve from your results. Burst photos are good to use when using your smartphone for photography they allow you to capture multiple shots as your subject moves. Once you've taken a set of burst photos, you can then select the best shots.<br>
                    <p><h3>2. Learn What Your Camera Can Do</h3></p><br>
                    <p>Start by taking some time to find out exactly what your phone’s camera is capable of. Analyse the auto mode and look at how it focuses and takes an exposure to light, this is normally done by touching the screen where you want the focus point to be, but it’s good to check. 
                        Has the camera phone got the manual settings? If so, get to know them. Some cameras allow you to use more manual settings like white balance and shutter speed. These can help you to take even better photos when you know how to use them. To learn more about these parts of photography<br><p>
                    <p><h3>3. Stick to Outdoors and use natural light where possible</h3></p><br> 
                        <p>Very few smartphones can produce excellent indoor shots due to their small sensors. As such, it’s best to take photos outdoors in the proper lighting conditions to get better results. Lighting determines not only brightness and darkness, but also mood, tone and the atmosphere of the photo. Therefore, try and use natural light when taking photos on a smartphone.</p><br>
                    <p><h3>4. Avoid Digital Zoom</h3></p><br>
                        <P>Digital zoom nearly always produces poor results as it reduces the resolution of the image. Avoiding it is one of the basic photography tips for taking better photos. Optical zooms however are fine as they do not affect the quality of the photo and these are becoming more common on smartphones. If you only have a digital zoom then instead of using it, simply move closer to maintain the image quality.</p><br>
                    <p><h3>4. Use HDR</h3></p><br>
                        <p>HDR mode stands for High Dynamic Range, and it is increasingly common on many smartphones. It adds detail from the dark and light areas to provide better balanced exposure. In other words, it will stop the sky being too bright or the ground being too dark and really suits landscape photography. If there’s a big difference between the lightest and darkest parts of your scene, using the camera phone’s HDR function it’s a good option.<p><br>
                    <p><h3> 6. Use Editing Tools</h3></p>
                        <p>You have easy access to editing tools, whether in the camera phones built in editor, or by using more advanced phone apps like Adobe Lightroom or Photoshop. Using these apps you can crop and touch up your photos in seconds. And don’t forget here at The School of Photography we teach Lightroom, Photoshop and much more in our membership option.<br> <br>Such as <strong> Adobe Lightroom</strong>,<strong> Picsart</strong> ,<strong>Snapseed</strong>,etc. </p>
                </div>
            </div>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; SilverFoxy SnapShots 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
