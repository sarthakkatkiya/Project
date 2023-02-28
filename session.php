<?php 

session_start();

if(!$_SESSION['islogin'] == true){
    echo "<script>window.location = 'login.php'</script>";  
}

?>
