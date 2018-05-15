<?php session_start(); ?>
<?php
spl_autoload_register(function ($className){
    include "../classes/".$className.".php";
});
?>

<?php
$admin = new Admin();
if (isset($_POST['name'])){
    $name = $_POST['name'];
    $password = $_POST['pass'];

    $admin->signAsAdmin($name, $password);
}
if (isset($_GET['logout'])){
    $admin->logout();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
</head>

<body>

<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="../index.php"><span>[</span>Car <i>Service</i><span>]</span></a></div>
<?php if (isset($_SESSION['name'])) { ?>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
        <ul class="br-sideleft-menu">
            <li class="br-menu-item">
                <a href="admin.php" class="br-menu-link active">
                    <i class="menu-item-icon icon  tx-24"></i>
                    <span class="menu-item-label">Dashboard</span>
                </a><!-- br-menu-link -->
            </li><!-- br-menu-item -->


            <li class="br-menu-item">
                <a href="home.php" class="br-menu-link">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                    <span class="menu-item-label">Home</span>
                </a><!-- br-menu-link -->
            </li><!-- br-menu-item -->
            <li class="br-menu-item">
                <a href="subs.php" class="br-menu-link">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">Subscribers</span>
                </a><!-- br-menu-link -->
            </li><!-- br-menu-item -->

            <li class="br-menu-item">
                <a href="services.php" class="br-menu-link">
                    <i class="menu-item-icon icon ion-ios-at-outline tx-24"></i>
                    <span class="menu-item-label">Services</span>
                </a>
            </li>
            <li class="br-menu-item">
                <a href="social.php" class="br-menu-link">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">Social Links</span>
                </a><!-- br-menu-link -->
            </li><!-- br-menu-item -->
        </ul><!-- br-sideleft-menu -->

        <br>
    </div><!-- br-sideleft -->
<?php } else { ?>
<?php } ?>
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <?php if (isset($_SESSION['name'])) { ?>
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">

        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down"><?=$_SESSION['name']?></span>
                    <img src="http://via.placeholder.com/500x500" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <div class="tx-center">
                        <a href=""><img src="http://via.placeholder.com/500x500" class="wd-80 rounded-circle" alt=""></a>
                        <h6 class="logged-fullname">Katherine P. Lumaad</h6>
                        <p>youremail@domain.com</p>
                    </div>
                    <hr>
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                        <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                        <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                        <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                        <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                        <li><a href="admin.php?logout=yes"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        <?php  } else  { ?>

        <?php } ?>
    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: MAIN PANEL ########## -->
<?php if (isset($_SESSION['name'])) { ?>

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <i class="icon ion-ios-filing-outline"></i>
            <div>
                <h4>Services</h4>
                <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
            </div>
        </div><!-- d-flex -->




        <div class="br-pagebody">
            <div class="row row-sm">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Add</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($admin->getServices() as $service) { ?>
                        <tr>
                            <td><?=$service['title'];?></td>
                            <td><a href=""><i class="fa fa-plus" aria-hidden="true"></i></a></td>
                            <td><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                            <td><a href=""  data-toggle="modal" data-target="#myModal" data-id="<?=$service['id'];?>"><i class="update fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><?=$service['title'];?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><?=$service['id'];?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>

                    </tbody>
                </table>
            </div><!-- row -->
        </div><!-- br-pagebody -->






        <footer class="br-footer" style="margin-top: 30%;">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2018.  All Rights Reserved.</div>
                <div>Attentively and carefully made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div>
<?php } else { ?>
    <div style="margin-top: 100px">
        <form class="form-horizontal" action="admin.php" method="post">
            <div style="display: table; width: 50%; margin: 0 auto;">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="enter" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php } ?>
<!-- ########## END: MAIN PANEL ########## -->

<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/popper.js/popper.js"></script>
<script src="../lib/bootstrap/bootstrap.js"></script>
<script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="../lib/moment/moment.js"></script>
<script src="../lib/jquery-ui/jquery-ui.js"></script>
<script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="../lib/peity/jquery.peity.js"></script>
<script src="../lib/d3/d3.js"></script>
<script src="../lib/rickshaw/rickshaw.min.js"></script>
<script src="../lib/Flot/jquery.flot.js"></script>
<script src="../lib/Flot/jquery.flot.resize.js"></script>
<script src="../lib/flot-spline/jquery.flot.spline.js"></script>
<script src="../lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="../lib/echarts/echarts.min.js"></script>
<script src="../lib/select2/js/select2.full.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCuWEQWfVkWfcUoSIZeGw5JioT9LVCwYkE"></script>
<script src="../lib/gmaps/gmaps.js"></script>

<script src="../js/bracket.js"></script>
<script src="../js/map.shiftworker.js"></script>
<script src="../js/ResizeSensor.js"></script>
<script src="../js/dashboard.js"></script>
<script>
    $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
            minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
            if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                // show only the icons and hide left menu label by default
                $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                $('body').addClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideUp();
            } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                $('body').removeClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideDown();
            }
        }
    });
</script>
</body>
</html>

