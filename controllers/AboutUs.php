<?php
    class AboutUs extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public static function checkLogin(){
            // call a model function
            $readData=About_Us::getData();
            //create a view
            self::createView('aboutUs',$readData);
            if(isset($_GET['submit'])){
                $userName=$_GET['userName'];
                $password=$_GET['password'];
                echo("Username: $userName password: $password ");
                // call a model function
                $executeData=About_Us::setData($userName,$password);
                print_r($executeData);
            }
        }
    }
?>