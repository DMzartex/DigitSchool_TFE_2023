
<link rel="stylesheet" href="css/modif/modifFacture.css">
<div class="MainModifFacture">
    <?php if(isset($_SESSION['flashMessage'])): ?>
        <?php require_once 'components/alertFlashMessage.php'?>
    <?php endif; ?>
    <div class="boxFormModifFacture">
        <?php require_once 'forms/modif/modifFactureForms.php';?>
    </div>
</div>


