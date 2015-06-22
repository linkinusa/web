<?php
require_once(dirname(__FILE__) . '/app.php');


if($_POST){


   $keywords = $_POST['keywords'];
   
 
      redirect( WEB_ROOT . '/category.php?keywords='.$keywords);


}

