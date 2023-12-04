<?php include "templates/header.php" ?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
   
$name = isset($_POST['name']) ?$_POST['name'] : "";
$email = isset($_POST['email']) ?$_POST['email'] : "";
$password = isset($_POST['password']) ?$_POST['password'] : "";
$phone = isset($_POST['phone']) ?$_POST['phone'] : "";
$message = isset($_POST['message']) ?$_POST['message'] : "";

?>
    <li class="list-group-item"><?php echo $name; ?></li>
    <li class="list-group-item"><?php  echo $email  ?></li>
    <li class="list-group-item"><?php echo $password; ?></li>
    <li class="list-group-item"><?php   echo $phone; ?></li>
    <li class="list-group-item"><?php echo $message; ?></li>

</ul>
<?php include "templates/footer.php"?>