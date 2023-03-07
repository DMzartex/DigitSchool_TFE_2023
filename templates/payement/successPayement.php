<?php if($_SESSION['paymentOk']): ?>
<link rel="stylesheet" href="css/successPayement.css">
<div class="mainLoader">
    <div class="div-txtLoader"><h1 class="txtLoader textGreen">Paiment accepté <span><i class="fas fa-check"></i></span></h1></div>
    <div class="loader"></div>
</div>
<?php endif; ?>
<?php
var_dump($_SESSION['payload']);
