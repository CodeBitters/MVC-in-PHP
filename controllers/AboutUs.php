<?php
    class AboutUs extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public static function checkLogin(){
            $readData=About_Us::getData();
            self::createView('aboutUs',$readData);
            if(isset($_GET['submit'])){
                $userName=$_GET['userName'];
                $password=$_GET['password'];

                echo("Username: $userName password: $password ");
                $executeData=About_Us::setData($userName,$password);
                print_r($executeData);
            }
        }
    }
?>