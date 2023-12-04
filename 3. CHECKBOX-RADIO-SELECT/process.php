<?php // HEADER 
include_once "templates/header.php";
?>
<?php
$province = isset($_POST['province']) ? $_POST['province'] : "";
$subject = isset($_POST['subject']) ? $_POST['subject'] : [];
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
?>
<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $province ?></h2>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php
        if ($gender == "Female") {
            $url = "images/female.png";
        } else {
            $url = "images/male.png";
        }

        ?>
        <img style="width:100px; height:100px;" src="<?= $url ?>">
    </div>
</div>
<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">

        <?php
        foreach ($subject as $value) {
            echo "<button type='button' class='btn btn-primary' style='margin-right: 5px;'> $value </button>";
        }
        ?>
    </div>
</div>

<?php // FOOTER 
include_once "templates/footer.php";
?>