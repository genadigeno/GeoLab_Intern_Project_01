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

    public function make_slide_indicators()
    {
        $sql = "SELECT * FROM slider";
        $output = '';
        $count = 0;
        $result = $this->connect()->query($sql);

        while($row = $result->fetch_array())
        {
            if($count == 0)
            {
                $output .= ' <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li> ';
            }
            else
            {
                $output .= ' <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li> ';
            }
            $count = $count + 1;
        }
        return $output;
    }

    public function make_slides(){
        $sql = "SELECT * FROM slider";
        $output = '';
        $count = 0;
        $result = $this->connect()->query($sql);

        while($row = $result->fetch_array())
        {
            if($count == 0)
            {
                $output .= '<div class="item active">';
            }
            else
            {
                $output .= '<div class="item">';
            }
            $output .= '
                       <img src="images/'.$row["filename"].'" alt="'.$row["title"].'" />
                       <div class="carousel-caption">
                        <h3>'.$row["title"].'</h3>
                       </div>
                      </div>
                      ';
            $count = $count + 1;
        }
        return $output;
    }

    public function sendMail($name, $email, $subject, $text, $gender){}
}