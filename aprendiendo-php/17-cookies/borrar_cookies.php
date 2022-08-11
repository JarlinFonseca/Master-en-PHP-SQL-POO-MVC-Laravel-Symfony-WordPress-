<?php

if(isset($_COOKIE['micookie'])){
     unset($_COOKIE['micookie']);   
     //Para caducar la cookie, en el time menos 100 la cookie estara vieja.
     setcookie('micookie','',time()-100);
}

header('Location:ver_cookies.php');

?>
