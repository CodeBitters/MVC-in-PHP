<?php
    class About_Us extends Model{
    public static function getData(){
        $result=Database::executeQuery("SELECT * FROM user");
        return $result;
    }
    public static function setData($userName,$password){
        $result=Database::executeQuery("INSERT INTO `user`(`Name`, `userName`, `password`) VALUES ('$userName','$userName','$password');");
        return $result;
    }
}
?>