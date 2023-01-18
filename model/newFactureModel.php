<?php
function getUser($conn,$arr){
    $stmt = $conn->prepare("select $_SESSION[roleIdSearch],firstName,name,email FROM $_SESSION[roleSearchBar] where firstName = :firstName AND name = :name");
    $stmt->execute([
        'firstName'=>$arr[1],
        'name'=>$arr[0]
    ]);
    $users = $stmt->fetchAll();
    return $users;
};

function getInfoForm($conn,$id){
    $stmt = $conn->prepare("SELECT name, firstName, adress, postalCode FROM $_SESSION[roleSearchBar] where $_SESSION[roleIdSearch] = :id");
    $stmt->execute([
        'id'=>$id
    ]);
    $infoForm = $stmt->fetchAll();
    return $infoForm;
};

function createFacture($conn){
        $query = "insert into facture (name, factureFirstNameDesti, factureAdressDesti, facturePostalCodeDesti,factureCommunication,factureMontant,secretaryID, '$roleId')
                values  (:factureNameDesti,:factureFirstNameDesti,:factureAdressDesti,:facturePostalCodeDesti,:factureCommunication,:factureMontant,:secretaryId,:'$roleId')";
        $ajoute = $conn->prepare($query);
        $ajoute->execute([
            'factureNameDesti' => htmlentities($_POST['nameDesti']),
            'factureFirstNameDesti' => htmlentities($_POST['firstNameDesti']),
            'factureAdressDesti' => htmlentities($_POST['addrDesti']),
            'facturePostalCodeDesti' => htmlentities($_POST['postalCodeDesti']),
            'factureCommunication' => htmlentities($_POST['communicationFacture']),
            'factureMontant' => htmlentities($_POST['montantFacture']),
            'secretaryId' => $_SESSION['userId'],
            $roleId => $_GET['id']
        ]);
}

