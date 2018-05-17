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

    } //Done
    public function logout(){
        session_destroy();
        echo "<script>window.location = 'index.php'</script>";
    } //Done


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
    } //Done


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
    } //Done


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
    } //Done

    public function getSocialById($id){
        $socials = " SELECT * FROM social WHERE id= '$id'";
        if($result = $this->connect()->query($socials)){
            $social = $result->fetch_assoc();
            return $social;
        }
    } //Done

    public function editSocial($id, $url){

        $sql = "UPDATE social SET url = '$url' WHERE id = '$id'";

        if ($this->connect()->query($sql)){
            echo "<script>alert('Success Social')</script>";
        }else{
            echo "<script>alert('Error Social')</script>";
        }
    } //Done


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
    } //Done

    public function getServicesById($id){
        $services = " SELECT * FROM services WHERE id= '$id'";
        if($result = $this->connect()->query($services)){
            $services = $result->fetch_assoc();
            return $services;
        }
    } //Done

    public function editServices($id, $name, $filename){
        $sql = "UPDATE services SET title = '$name', filename = '$filename' WHERE id = '$id'";
        if ($this->connect()->query($sql)){
            echo "<script>alert('Success Edited')</script>";
        }else{
            echo "<script>alert('Error Editing')</script>";
        }
    } //Done

    public function addServices($title, $filename){

        $sql = "INSERT INTO services(title, filename) VALUES('$title', '$filename')";

        if ($this->connect()->query($sql)){
            echo "<script>alert('Success Services')</script>";
        }else{
            echo "<script>alert('Added Services')</script>";
        }
    } //Done

    public function deleteServices($id){

        $sql = "SELECT * FROM services WHERE id = '$id'";

        if($result = $this->connect()->query($sql)){
            while ($row = $result->fetch_assoc()){
                $fileName = $row;
            }
            $fileName = $fileName['filename'];

            $rootPath = $_SERVER['DOCUMENT_ROOT'];
            $folder = $rootPath."/geolab1/images/";

            if(unlink($folder.$fileName)){
                echo "<script>alert('Deleted File')</script>";
            }else{
                echo "<script>alert('Deleting File Error')</script>";
            }
        }

        $sql2 = "DELETE FROM services WHERE id = '$id'";

        if ($this->connect()->query($sql2)){
            echo "<script>alert('Deleted from DataBase')</script>";
        }else{
            echo "<script>alert('Delete err')</script>";
        }


    } //Done


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
    } //Done

    public function getSliderById($id){
        $slider = " SELECT * FROM slider WHERE id= '$id'";
        if($result = $this->connect()->query($slider)){
            $slider = $result->fetch_assoc();
            return $slider;
        }
    }

    public function editSlider($id, $name, $filename, $date){
        $sql = "UPDATE slider SET name = '$name', filename = '$filename', date = '$date' WHERE id = '$id'";
        if ($this->connect()->query($sql)){
            echo "<script>alert('Success Edited')</script>";
        }else{
            echo "<script>alert('Error Editing')</script>";
        }
    }

    public function addSlider($title, $baseName, $date){
        $sql = "INSERT INTO slider(name, filename, date) VALUES('$title', '$baseName', '$date')";

        if ($this->connect()->query($sql)){
            echo "<script>alert('Success Services')</script>";
        }else{
            echo "<script>alert('Added Slider')</script>";
        }
    } //Done

    public function deleteSlider($id){
        $sql = "SELECT * FROM slider WHERE id = '$id'";

        if($result = $this->connect()->query($sql)){
            while ($row = $result->fetch_assoc()){
                $fileName = $row;
            }
            $fileName = $fileName['filename'];

            $rootPath = $_SERVER['DOCUMENT_ROOT'];
            $folder = $rootPath."/geolab1/images/";

            if(unlink($folder.$fileName)){
                echo "<script>alert('Deleted File')</script>";
            }else{
                echo "<script>alert('Deleting File Error')</script>";
            }
        }

        $sql2 = "DELETE FROM slider WHERE id = '$id'";

        if ($this->connect()->query($sql2)){
            echo "<script>alert('Deleted from DataBase')</script>";
        }else{
            echo "<script>alert('Delete err')</script>";
        }
    }

    public function deleteImage($id){
        $sql = "SELECT * FROM slider WHERE id = '$id'";

        if($result = $this->connect()->query($sql)){
            while ($row = $result->fetch_assoc()){
                $fileName = $row;
            }
            $fileName = $fileName['filename'];

            $rootPath = $_SERVER['DOCUMENT_ROOT'];
            $folder = $rootPath."/geolab1/images/";

            if(unlink($folder.$fileName)){
                return true;
            }else{
                echo "<script>alert('Deleting File Error From images folder')</script>";
            }
        }
    }
}