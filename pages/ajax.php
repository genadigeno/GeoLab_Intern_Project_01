
<?php
spl_autoload_register(function ($className){
    include "../classes/".$className.".php";
});
?>

<?php
    $admin = new Admin();
    $social_id = $_GET['id'];
    echo json_encode($admin->getSocialById($social_id));
?>