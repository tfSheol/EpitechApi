<?php

$epitech = new Epitech();

    if (isset($_POST['login']) && isset($_POST['password']) || isset($_SESSION['user'])) {
        if ($epitech->connect($_POST['login'], $_POST['password']) == true || isset($_SESSION['user'])) {
            // test code log
        }
    }