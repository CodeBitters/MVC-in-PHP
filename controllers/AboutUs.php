<?php
    class AboutUs extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public static function checkLogin(){
            self::createView('aboutUs');
            if(isset($_GET['submit'])){
                $userName=$_GET['userName'];
                $password=$_GET['password'];
                echo("Username: $userName password: $password ");
                $dbData=About_Us::getData();
                print_r($dbData);
            }
        }
    }
?>