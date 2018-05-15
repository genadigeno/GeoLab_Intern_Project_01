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
        echo "<script>window.location = 'admin.php'</script>";
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

    public function getSubscribers(){
        $subscribers = " SELECT * FROM subscribers ";
        if($result = $this->connect()->query($subscribers)){
            while ($row = $result->fetch_assoc()){
                $subs[] = $row;
            }
            return $subs;
        }else{
            echo "Subs Err";
        }
    }

    public function getSocial(){
        $socials = " SELECT * FROM social ";
        if($result = $this->connect()->query($socials)){
            while ($row = $result->fetch_assoc()){
                $social[] = $row;
            }
            return $social;
        }else{
            echo "social Err";
        }
    }
    public function getSocialById($id){
        $socials = " SELECT * FROM social WHERE id= '$id'";
        if($result = $this->connect()->query($socials)){
            $social = $result->fetch_assoc();
            return $social;
        }
    }
    public function editSocial(){}

    public function getServices(){
        $service = " SELECT * FROM services ";
        if($result = $this->connect()->query($service)){
            while ($row = $result->fetch_assoc()){
                $services[] = $row;
            }
            return $services;
        }else{
            echo "service Err";
        }
    }
    public function editServices(){}
    public function addServices(){}
    public function deleteServices(){}

    public function getSlider(){
        $slider = " SELECT * FROM slider ";
        if($result = $this->connect()->query($slider)){
            while ($row = $result->fetch_assoc()){
                $sliders[] = $row;
            }
            return $sliders;
        }else{
            echo "slider Err";
        }
    }
    public function editSlider(){}
    public function addSlider(){}
    public function deleteSlider(){}
}