<?php include "templates/header.php"?>
<?php
    $color = isset($_POST['color']) ?$_POST['color'] : "";
    $range = isset($_POST['range']) ?$_POST['range'] : "";
    $date = isset($_POST['date']) ?$_POST['date'] : "";
    
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo $color ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo $range ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo $date?></span>
    </div>

<?php include "templates/footer.php"?>