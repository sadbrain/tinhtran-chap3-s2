<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
     
        $name = isset($_POST['name']) ?$_POST['name'] : "";
        $email = isset($_POST['email']) ?$_POST['email'] : "";
        $password = isset($_POST['password']) ?$_POST['password'] : "";
        $phone = isset($_POST['phone']) ?$_POST['phone'] : "";
        $message = isset($_POST['message']) ?$_POST['message'] : "";
        $province = isset($_POST['province']) ?$_POST['province'] : "";
        $subject = isset($_POST['subject']) ?$_POST['subject'] : [];
        $gender = isset($_POST['gender']) ?$_POST['gender'] : "";
    ?>
        <tr>
            <td><?php  echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $phone ?></td>
            <td><?php echo $message; ?></td>
            <td><?php echo $province; ?></td>
            <td>
                <?php 
         
                echo implode(" | ", $subject)
                ?>
            </td>
            <td><?php 
                    if($gender =="Female"){
                        // $url= "images/female.png";
                        echo "Female";
                    }else{
                        // $url= "images/male.png";
                        echo "male";
                    }
           ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>