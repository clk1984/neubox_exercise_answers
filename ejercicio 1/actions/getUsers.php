<?php
     require_once '../database.php';
     require_once '../request.php';
     require_once '../conf.php';


   $db = new request();
   $row  = $db->show();

?>