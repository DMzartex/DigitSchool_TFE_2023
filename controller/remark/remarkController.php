<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/remarque/remarque"){
    $selectSearchBar = false;
    if($_SESSION['role'] == "secretary"){
        if(!empty($_POST['role'])){
            if(!empty($_POST['inputSearch'])){
                $_SESSION['roleSearchBar'] = $_POST['role'];
                $_SESSION['roleIdSearch']  = $_POST['role'].'Id';
                $matricule = $_POST['inputSearch'];
                if(ctype_digit($matricule)){
                    $id = $matricule;
                    $result = getRemark($conn,$id);
                    if(!empty($result)){
                        var_dump($result);
                    }else{
                        echo 'Il n y a pas de factures pour cet utilisateur';
                    }
                }else{
                    echo "L'input ne ne contient pas uniquement des chiffres";
                }
            }
        }
    }elseif ($_SESSION['role'] == "student"){
        $_SESSION['roleIdSearch']  = "student"."Id";
        $id = $_SESSION['userId'];
        $result = getRemark($conn,$id);
        if(!empty($result)){
            var_dump($result);
        }else{
            echo "Vous n'avez pas de factures.";
        }

    }else{
        $id = $_SESSION['userId'];
        $_SESSION['idStudent_parent'] = getIdStudent_Parent($conn,$id);
        $_SESSION['resultNameStudent'] = getNameStudent($conn);
        var_dump($_SESSION['idStudent_parent']);
        require_once 'components/selectStudent.php';
        var_dump($_SESSION['resultNameStudent']);
        // faire un select avec la possiblité de choisir un des ces enfants et afficher les remarques.
    }

    require_once 'templates/remarque/remarque.php';
}