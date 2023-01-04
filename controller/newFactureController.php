<?php
if(isset($_POST['role'])){

    $_SESSION['roleSearchBar'] = $_POST['role'];
    if(!empty($_POST['nameFirstName'])){
        $_SESSION['userSearchBar'] = $_POST['nameFirstName'];
        $arr = explode(' ',$_SESSION['userSearchBar']);
        $roleName = $_SESSION['roleSearchBar']."Name";
        $roleFirstName = $_SESSION['roleSearchBar']."FirstName";
        $roleEmail = $_SESSION['roleSearchBar']."Email";

        var_dump($arr[0]);
        var_dump($arr[1]);
        var_dump($roleName);
        var_dump($_SESSION['roleSearchBar']);
        var_dump($_SESSION['userSearchBar']);
    }
}