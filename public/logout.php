<?php 

 $past = time() - 100; 

 //this makes the time in the past to destroy the cookie 

 setcookie(ID_my_site, gone, $past); 

 setcookie(Key_my_site, gone, $past); 

 setcookie('student', gone, $past);

 header("Location: index.php"); 

 ?> 