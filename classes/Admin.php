<?php
/**
 * Created by PhpStorm.
 * User: GENO
 * Date: 5/13/2018
 * Time: 10:00
 */

class Admin extends Database
{
    public function signAsAdmin($name, $password){

        $sql = "SELECT * FROM admin WHERE adminName = '$name' AND AdminPassword = '$password'";

        if($result = $this->connect()->query($sql)){
            if ($result->num_rows == 1){
                @session_start();

                $admin = $result->fetch_assoc();

                $_SESSION['id'] = $admin['id'];
                $_SESSION['name'] = $admin['adminName'];

                echo "Login Success";
            }
        }
        else{
            echo "Login Err";
        }

    }
    public function logout(){
        session_destroy();
        echo "<script>window.location = 'index.php'</script>";
    }

    public function getDashboard(){
        $subscribers = " SELECT * FROM subscribers ";
        $services = " SELECT * FROM services ";
        $slider = " SELECT * FROM slider ";

        if($result1 = $this->connect()->query($subscribers)){
            $subscribers =  $result1->num_rows;
        }
        if($result2 = $this->connect()->query($services)){
            $services =  $result2->num_rows;
        }
        if($result3 = $this->connect()->query($slider)){
            $slider =  $result3->num_rows;
        }

        return $dashboard = ['subs' => $subscribers, 'services' => $services, 'slider' => $slider];
//        return $dashboard = ['subs' => $subscribers];
    }

    public function getSubscribers(){}

    public function getSocial(){}
    public function editSocial(){}

    public function getServices(){}
    public function editServices(){}
    public function addServices(){}
    public function deleteServices(){}

    public function getSlider(){}
    public function editSlider(){}
    public function addSlider(){}
    public function deleteSlider(){}
}