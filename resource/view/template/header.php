<?php 
require_once __DIR__.'/../../../app/models/Menu.php ';

$db = new Menu();
$user = $db->get_menu_user();

$admin= $db->get_submenu();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $rutaCss ?>">
    <script src="https://kit.fontawesome.com/86e925a6b7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

</head>
<body>

<header class="zindex-fixed">
    <div class="container_header">
        <div class="container_logo_title">
             <a href="/index.php">
                <img class="logo"  src="resource/img/Logo.png" alt="logo"  id="logo"/>
             </a> 
            <p style="color:aliceblue">banner</p>
            
        </div>
        <div class="container_menu">
            <span class="menu_icon" id="menu"> <i class="fa fa-bars"></i> </span>
            <nav class="menu" style="    background-color: #082032;">
                <ul >
                    <?php foreach ($user as $menu) {?>                
                    <li> <a href="<?php  echo $menu['link'] ?>"><?php  echo $menu['nombre'] ?>  <span class="fa-solid fa-caret-down"> </span>
                    </a>
               
                    </li>

                    <?php }?>
                </ul>


            </nav>
        </div>
    </div>
</header>
    
