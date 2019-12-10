<?php
require_once "hlavicka.php";

if (!empty($_SESSION["admin"])) {
?>
    <ul class="mt-3 mb-3">
    <?php foreach ($clanky as $id => $clanek) { ?>
        <li><a href="detail-editace.php?clanek=<?php echo $id; ?>"><?php echo $clanek["nadpis"]; ?></a></li>
    <?php } ?>
    </ul>

<?php } else { ?>
    <div class="mt-2 alert alert-danger" role="alert">Sem můžou jen přihlášení, tak se <a href="prihlaseni.php">přihlas</a>.</div>
<?php }

require_once "paticka.php";