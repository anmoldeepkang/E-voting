<title>AADHAAR Voting</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!--<script type="text/javascript" src="js/html5shiv.js"></script>
<script type="text/javascript" src="js/respond.min.js"></script>-->
<header class="main__header">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-header">
                <h1 class="navbar-brand"><a href="index.php">ADHAAR Voting</a></h1>
                <a href="#" class="submenu">Menus</a> </div>
            <div class="menuBar">
                <ul class="menu">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="dropdown"><a href="constituencylogin.php">Constituency</a>
                    </li>
                    <li><a href="public_viewcand_state.php">Candidates</a></li>
                    <?php
                    include "connection.php";
                    $d=date('Y-m-d');
                    $dd="select * from voting_date";
                    $result=mysqli_query($conn,$dd);
                    $row=mysqli_fetch_array($result);
                    if($d==$row[0]) {
                        ?>
                        <li><a href="voter_login.php">Vote Now</a></li>
                    <?php
                    }
                    ?>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</header>
<section class="slider">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active"> <img data-src="img/evm.jpg" alt="first slide" src="img/evm.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <br>
                        <br>
                        <br><br><br><br><br><br><br>
                        <?php
                        include "connection.php";
                        $d=date('Y-m-d');
                        $dd="select * from voting_date";
                        $result=mysqli_query($conn,$dd);
                        $row=mysqli_fetch_array($result);
                        if($d==$row[0]) {
                            ?>
                            <p><a class="btn btn-default btn-lg" href="voter_login.php" role="button">Vote Now</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="item"> <img data-src="img/1.jpg" alt="second slide" src="img/1.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <br>
                        <br>
                        <br><br><br><br><br><br><br>
                        <?php
                        include "connection.php";
                        $d=date('Y-m-d');
                        $dd="select * from voting_date";
                        $result=mysqli_query($conn,$dd);
                        $row=mysqli_fetch_array($result);
                        if($d==$row[0]) {
                            ?>
                            <p><a class="btn btn-default btn-lg" href="voter_login.php" role="button">Vote Now</a></p>
                        <?php

                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="item"> <img data-src="img/voters.jpg" alt="third slide" src="img/voters.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <br>
                        <br>
                        <br><br><br><br><br><br><br>
                        <?php
                        include "connection.php";
                        $d=date('Y-m-d');
                        $dd="select * from voting_date";
                        $result=mysqli_query($conn,$dd);
                        $row=mysqli_fetch_array($result);
                        if($d==$row[0]) {
                            ?>
                            <p><a class="btn btn-default btn-lg" href="voter_login.php" role="button">Vote Now</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="item"> <img data-src="img/parliament1.jpg" alt="second slide" src="img/parliament1.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <br>
                        <br>
                        <br><br><br><br><br><br><br>
                        <?php
                        include "connection.php";
                        $d=date('Y-m-d');
                        $dd="select * from voting_date";
                        $result=mysqli_query($conn,$dd);
                        $row=mysqli_fetch_array($result);
                        if($d==$row[0]) {
                            ?>
                            <p><a class="btn btn-default btn-lg" href="voter_login.php" role="button">Vote Now</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a> </div>
</section>
<!--end of slider section-->
<section class="main__middle__container homepage">
   <div class="main_content">