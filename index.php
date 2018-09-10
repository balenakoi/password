<?php
if(isset($_POST['cle']) AND $_POST['cle'] == 'karashin')  // if the password is good
{
  ?>
   <img src="img/graphic.jpg">
   <?php
 }
 else {
   echo "le mot de pass est incorrect";
 }
?>
