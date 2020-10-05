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
                // $dbData1=About_Us::getData();
                // print_r($dbData1);
                $dbData2=About_Us::setData($userName,$password);
                print_r($dbData2);
            }
        }
    }
?>