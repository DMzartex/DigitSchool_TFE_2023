<link rel="stylesheet" href="css/retard/newRetard.css">
<div class="containerNewRetard">
    <?php if($_SESSION['role'] == "educator"): ?>
        <div class="newRmSearchBarContent">
            <?php require_once 'components/searchBar.php'?>
        </div>
    <?php endif; ?>
    <?php require_once 'forms/retard/retardForm.php'?>
</div>