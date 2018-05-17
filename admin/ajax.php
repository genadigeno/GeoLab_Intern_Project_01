
<?php
spl_autoload_register(function ($className){
    include "../classes/".$className.".php";
});
?>

<?php
    $admin = new Admin();

    if (isset($_GET['social_id'])){

        $social_id = $_GET['social_id'];

        echo json_encode($admin->getSocialById($social_id));
    }
    if (isset($_GET['service_id'])){

        $service_id = $_GET['service_id'];

        echo json_encode($admin->getServicesById($service_id));
    }
    if (isset($_GET['slider_id'])){

        $slider_id = $_GET['slider_id'];

        echo json_encode($admin->getSliderById($slider_id));
    }
?>