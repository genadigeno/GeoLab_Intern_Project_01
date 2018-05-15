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

<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="home.php">HOME</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="social.php">SOCIAL LINKS</a></li>
                <li><a href="subs.php">SUBSCRIBERS</a></li>
                <!--                <li class="dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                <!--                    <ul class="dropdown-menu">-->
                <!--                        <li><a href="#">HOME</a></li>-->
                <!--                        <li><a href="#">SERVICES</a></li>-->
                <!--                        <li><a href="#">SOCIAL LINKS</a></li>-->
                <!--                        <li><a href="#">SUBSCRIBERS</a></li>-->
                <!--                        <li role="separator" class="divider"></li>-->
                <!--                        <li><a href="#">One more separated link</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['name'])) { ?>
                    <li><a href="index.php">AdminPanel</a></li>
                    <li><a href="index.php?logout=yes">Log Out</a></li>
                <?php  } else  { ?>
                    <li><a href="index.php">Admin Page</a></li>
                <?php } ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Panel heading</div>
                <div class="panel-body">
                    <?php if (isset($_SESSION['name'])) { ?>
                        <!-- Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td style="width: 200px; height: auto;">Image</td>
                                    <td><a href=""><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                                    <td><a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php  } else  { ?>
                        <form class="form-horizontal" action="index.php" method="post">
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
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div>

<footer>
    <div style="display: table; margin: 0 auto;">

    </div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Optional JavaScript -->
<script>

</script>
</body>
</html>