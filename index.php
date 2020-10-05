<!-- index file -->
<?php 
    require_once('router.php'); 
    function __autoload($className){
        require_once "./classes/$className.php";
    }

?>