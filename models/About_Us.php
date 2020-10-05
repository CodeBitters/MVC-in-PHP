<?php
    class About_Us extends Model{
    public static function getData(){
        $result=Database::executeQuery("SELECT * FROM user");
        return $result;
    }
}
?>