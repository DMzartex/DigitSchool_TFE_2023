<?php
$messageFlash = $_SESSION['flashMessage'];
$color = $_SESSION['color'];
unset($_SESSION['flashMessage']);
unset($_SESSION['color']);

?>
<div class="alert alert-<?=$color?>" role="alert">
    <?=$messageFlash?>
</div>