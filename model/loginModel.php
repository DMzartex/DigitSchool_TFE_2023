<?php
function connectUser($conn){
    if(!empty($_POST['mailLogin'] && $_POST['passLogin'] && $_POST['role'])){
        if($_POST['role'] != "none"){
            if(filter_var($_POST['mailLogin'],FILTER_VALIDATE_EMAIL)){
                $email = trim($_POST['mailLogin']);
                $email = stripslashes($email);
                $email = htmlspecialchars($email);
                $roleEmail = $_POST['role']."Email";
                $roleId = $_POST['role']."Id";
                $stmtEmail = $conn->prepare("SELECT * FROM $_POST[role] WHERE $roleEmail='$email'");
                $stmtEmail->execute();
                $user = $stmtEmail->fetch();
                if($user){
                    $_SESSION['userId'] = $user[$roleId];
                    $rolePassword = $_POST['role']."Password";
                    $password = htmlspecialchars($_POST['passLogin']);
                    $stmtPassword = $conn->prepare("SELECT $rolePassword FROM $_POST[role] WHERE $roleEmail='$email'");
                    $stmtPassword->execute();
                    $userPassword = $stmtPassword->fetch();
                    $hash = $userPassword[$rolePassword];
                    $passwordVerify = password_verify($password,$hash);
                    if($passwordVerify){
                        $_SESSION['role'] = htmlspecialchars($_POST['role']);
                        $_SESSION['isLogin'] = true;
                        header('Location:/DigitSchool_TFE_2023/index.php?/templates/users/workSpace.php');
                    }else{
                        echo 'Votre mot de passe est incorrect !';
                    }
                }else{
                    echo"L'email entré est incorrect";
                }
            }else{
                echo"L'email n'est pas au bon format !";
            }
        }else{
            echo'Vous devez choisir un rôle';
        }
    }else{
        echo'Vous devez remplir tout les champs.';
    }
}

function disconnect(){
    unset($_SESSION['isLogin']);
    unset($_SESSION['role']);
    header('Location:/DigitSchool_TFE_2023/index.php?/templates/login/login.php');
}

?>