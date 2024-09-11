<?php
session_start();
include 'header.php';
include 'sidebar.php';
?>

<div class="content" id="main-content">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $file = $page . '.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo "Page not found.";
        }
    } else {
        include 'dashboard.php';
    }
    ?>
</div>

<script src="js/script.js"></script>