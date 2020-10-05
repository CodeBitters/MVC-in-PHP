<?php
    class Database{
        private static $server="localhost";
        private static $user="root";
        private static $password="";
        private static $database="testdb";
        
        private static function connect(){
            $conn = new mysqli(self::$server,self::$user,self::$password,self::$database);
            if ($conn -> connect_errno) {
                echo $conn -> connect_error;
                exit();
            }
            return $conn;
        }

        public static function executeQuery($sqlQuery){
            $result = self::connect()->query($sqlQuery);
            $data = array();
            foreach ($result as $row) {
                $data[] = $row;
            }
            return ($data);
        }
}
?>