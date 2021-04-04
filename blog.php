<?php
//Intiallize Sesssion
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - SilverFoxy SnapShots</title>

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

    <!-- NAVIGATION-->
    <?php require_once 'nav.php';?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                <h2 class="text-center">Welcome<?php echo" "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">SilverFoxy SnapShots
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/img4.jfif" alt="">
                    <h2>Mountains
                        <br>
                        <small>Seotember 27, 2020</small>
                    </h2>
                    <p></p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/img5.jfif" alt="">
                    <h2>Tree
                        <br>
                        <small>Febuary 14, 2020</small>
                    </h2>
                    <p></p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/img6.jfif" alt="">
                    <h2>Forest
                        <br>
                        <small>March 13, 2020</small>
                    </h2>
                    <p></p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    <!--Modal 1-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal Content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Mountains</h4>
        </div>
        <div class="modal-body">
            <p>This photo was taken on My Birthday,So it is very close to my heart. </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="byn btn-default" data-dismiss="modal">Close </button>
        </div>
    </div>
    </div>
    </div>

    <!--Modal 2-->
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal Content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tree</h4>
        </div>
        <div class="modal-body">
            <p>This photo was clicked in the valentine's day.<br> As this day is ccelebrated as the day of love, you can see the nature is spreading love with is beautiful natural lighting</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="byn btn-default" data-dismiss="modal">Close </button>
        </div>
    </div>
    </div>
    </div>

    <!--Modal 3-->
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal Content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Forest</h4>
        </div>
        <div class="modal-body">
            <p>This photo was clicked during sunset. I was in a treak when i saw this beautiful sunset from between the woods . It was very magical experience , ther was birds in the sunset sky going back to their home with there family.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="byn btn-default" data-dismiss="modal">Close </button>
        </div>
    </div>
    </div>
    </div>

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

</body>

</html>

<?php 

    } else {
        header("location:login.php");
    }
?>