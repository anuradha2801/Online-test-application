<?php
//all the variables defined here are accessible in all the files that include this one. parameters includes hosting server name(localhost), database user name(root), database password(''),database name(project).
$con= new mysqli('localhost','root','','project')or die("Could not connect to mysql".mysqli_error($con));
//admin login- Admin123@gmail.com password-12345
?>
