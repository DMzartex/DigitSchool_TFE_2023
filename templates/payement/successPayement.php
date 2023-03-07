<link rel="stylesheet" href="css/successPayement.css">


<?php if($_SESSION['root']): ?>
<div class="mainLoader">
    <div class="div-txtLoader"><h1 class="txtLoader textGreen">Paiment accepté <span><i class="fas fa-check"></i></span></h1></div>
    <div class="loader"></div>
</div>
<?php endif; ?>

<?php

var_dump($_SESSION['root']);

