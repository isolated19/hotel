<?php 
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
    <?php require('inc/link.php');?>
</head>
<body class="bg-light" >
    <?php require('inc/header.php');?>

    <div class="container-fluid" id="main-content" >
        <div class="row">
            
        </div>
    </div>

<?php 
    require('inc/script.php');
   
?>
</body>
</html>