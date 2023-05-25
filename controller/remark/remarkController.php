<?php
$uri = $_SERVER['REQUEST_URI'];

    if($uri == "/DigitSchool_TFE_2023/index.php?/templates/remark/remark"){
    $stPage = "remark";
    if($_SESSION['role'] == "student" || $_SESSION['role'] == "teacher" || $_SESSION['role'] == "educator"){
        // Récupèration de la liste des cours
        if($_SESSION['role'] == "student"){
            $_SESSION['listCours'] = getCoursByStudentId($conn,$_SESSION['userId']);
        // Sinon l'utilisateur est un teacher
        }else{
            if(isset($_POST['inputSearch'])){
                $_SESSION['idStudentSearchRem'] = htmlspecialchars($_POST['inputSearch']);
                $_SESSION['listCours'] = getCoursByStudentId($conn,$_SESSION['idStudentSearchRem']);
            }

        }
        // Vérification pour savoir si l'étudiant ou le professeur à bien séléctionné un filtre pour afficher les remarques.
        if(isset($_POST['selectCours'])){
            // assignation du contenu du filtre de la variable post dans la variable cours
            $cours = $_POST['selectCours'];
            // Si cours est différent de none alors je peux effectuer la fonction qui permet de récupèrer les remarques
            if($cours != "none"){
                // Récupération des remarques
                if($_SESSION['role'] == "student"){
                    $_SESSION['resultRemark']  = getRemarkByCoursId($conn,$cours,$_SESSION['userId']);
                }else{
                    $_SESSION['resultRemark']  = getRemarkByCoursId($conn,$cours,$_SESSION['idStudentSearchRem']);
                }
            }
        }
        // l'utilisateur connecté est un parent.
    }else if($_SESSION['role'] == "parent"){
        // Récupération de ou des id des étudiants par apport à l'id du parent
        $_SESSION['idStudent_parent'] = getIdStudent_Parent($conn,$_SESSION['userId']);
        // Récupération des noms des étudiants par rapport aux id trouvé par la fonction getIdStudent_Parent()
        $_SESSION['nameStudent'] = getNameStudent($conn);
        // Vérifier si les filtres pour le select des remarques sont remplies.
        if(isset($_POST['selectStudent'])){
            $_SESSION['listCours'] = getCoursByStudentId($conn,$_POST['selectStudent']);
            $_SESSION['studentSelect'] = $_POST['selectStudent'];
        }
        if(isset($_POST['selectCours'])){
            // remplissage de la session resultRemark avec les informations des remarques trouvé par rapport aux filtres séléctionné par le parent.
            $_SESSION['resultRemark'] = getRemarkFilter($conn,$_SESSION['studentSelect'],$_POST['selectCours']);
        }

    }// Si aucun des rôle dans les conditions du dessus ne correspond alors j'affiche le template d'erreur.
    // Require pour afficher le contenu de la page remark
    require_once 'templates/remark/remark.php';
}