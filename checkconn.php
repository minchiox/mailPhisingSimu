<?php
    if (isset($_SESSION["nome"])) {
        header('Location: inbox.php');
        exit();
    }
?>