<link rel="stylesheet" href="css/retard/retard.css">

<div class="containerMain">
    <div class="boxContentPage">
        <div class="boxTitle">
            <h1 class="Title">Listing des <span class="textGreen">retards</span></h1>
        </div>

        <?php if($_SESSION['role'] == "educator" || $_SESSION['role'] == "teacher"): ?>
        <div class="boxSearchUser">
            <?php require_once 'components/searchBar.php'?>
        </div>
        <?php endif; ?>
        <?php if($_SESSION['role'] == "parent"): ?>
        <div class="boxFiltreEnfant">
            <?php require_once 'forms/SelectStudentForms.php'?>
        </div>
        <?php endif; ?>
        <div class="containerMainRetard">
            <div class="containerRetardJustified">
                <h1 class="titleRetard textGreen">Retard justifiés</h1>
                <?php if(isset($resultRetard)): ?>
                    <?php foreach ($resultRetard as $retardJustified): ?>
                        <?php if($retardJustified['type'] == "Justified"): ?>
                            <div class="retard">
                                <p class="txtInfoRetard textGreen"><?=$retardJustified['type']?></p>
                                <p class="txtInfoRetard"><?=$retardJustified['cause']?></p>
                                <p class="txtInfoRetard"><?=$retardJustified['date']?></p>
                                <p class="txtInfoRetard"><?= $retardJustified['signature']?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="containerRetardUnjustified">
                <h1 class="titleRetard textGreen">Retard injustifiés</h1>
                <?php if(isset($resultRetard)): ?>
                    <?php foreach ($resultRetard as $retardUnjustified): ?>
                        <?php if($retardUnjustified['type'] == "Unjustified"): ?>
                            <div class="retard">
                                <p class="txtInfoRetard txtRed"><?=$retardJustified['type']?></p>
                                <p class="txtInfoRetard"><?=$retardJustified['cause']?></p>
                                <p class="txtInfoRetard"><?=$retardJustified['date']?></p>
                                <p class="txtInfoRetard"><?= $retardJustified['signature']?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>