<?php
    class About_Us{
    public static function getData(){
        $result=Database::executeQuery("root","","SELECT * FROM user");
        return $result;
    }
    public static function setData($userName,$password){
        $result=Database::executeQuery("root","","INSERT INTO `user`(`Name`, `userName`, `password`) VALUES ('$userName','$userName','$password');");
        return $result;
    }
}
?>