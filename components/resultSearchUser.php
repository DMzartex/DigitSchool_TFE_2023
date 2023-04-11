<link rel="stylesheet" href="css/resultSearchUser.css">
<div class="container-fluid containerBottom">
    <div class="resultSearch">
        <div class="header_result">
            <div class="colHeader">
                <h1 class="txtCol">Id</h1>
            </div>
            <div class="colHeader">
                <h1 class="txtCol">Nom</h1>
            </div>
            <div class="colHeader">
                <h1 class="txtCol">Prénom</h1>
            </div>
            <div class="colHeader">
                <h1 class="txtCol">Email</h1>
            </div>
        </div>
        <?php if(isset($_SESSION['resultSearch'])):?>
            <?php foreach ($_SESSION['resultSearch'] as $result): ?>
                <div class="boxResultInfos">
                    <div class="colResult">
                        <?php if($stPage == "newFacture"): ?>
                            <a class="txtResult" <?php if(empty($_GET['id'])):?>
                                href="<?=$uri?>&id=<?=$result['studentId']?>"
                            <?php endif;?>><?=$result['studentId']?></a>
                        <?php endif;?>
                        <?php if($stPage == "newRemark"):?>
                            <a class="txtResult" <?php if(empty($_GET['idUserRem'])):?>
                                href="<?=$uri?>&idUserRem=<?=$result['studentId']?>"
                            <?php endif;?>><?=$result['studentId']?></a>
                        <?php endif;?>
                    </div>
                    <div class="colResult">
                        <h1 class="txtResult"><?=$result['name'] ?></h1>
                    </div>
                    <div class="colResult">
                        <h1 class="txtResult"><?=$result['firstName']?></h1>
                    </div>
                    <div class="colResult">
                        <h1 class="txtResult"><?=$result['email']?></h1>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>