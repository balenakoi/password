<?php
if(isset($_POST['cle']) AND $_POST['cle'] == 'karashin')  // if the password is good
{
  ?>
   <img src="img/graphic.jpg">
   <?php
 }
 else {
   header('Location: info.php');
 }
?>
