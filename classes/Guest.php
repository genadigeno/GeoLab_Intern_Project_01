<?php
/**
 * Created by PhpStorm.
 * User: GENO
 * Date: 5/13/2018
 * Time: 11:19
 */

class Guest extends Database
{
    public function getSocial(){
        $sql = "SELECT * FROM social";
        if ($result = $this->connect()->query($sql)){

            while ($row = $result->fetch_assoc()){
                $social[] = $row;
            }

            return @$social;
        }
        else{
            echo "Request Error";
        }
    }
    public function getServices(){
        $sql = "SELECT * FROM services";
        if ($result = $this->connect()->query($sql)){

            while ($row = $result->fetch_assoc()){
                $social[] = $row;
            }

            return @$social;
        }
        else{
            echo "Request Error";
        }
    }

    public function getSlider(){
        $sql = "SELECT * FROM slider";
        if ($result = $this->connect()->query($sql)){

            while ($row = $result->fetch_assoc()){
                $slider[] = $row;
            }

            return @$slider;
        }
        else{
            echo "Request Error";
        }
    }

    public function sendMail($name, $email, $subject, $text, $gender){}
}