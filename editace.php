<?php
require_once 'hlavicka.php';

if (empty($_SESSION["admin"])) {
    header("Location: index.php");
}

if (isset($_GET["clanek"])) {
    $zobrazitClanek = (int) $_GET["clanek"];
}

if (!empty($_POST)) {
        // nepřišel parametr clanek, vytvoříme nový článek
        $autori = explode(",", $_POST["autori"]);

        ulozNovyClanek($_POST["nadpis"], $_POST["perex"], $_POST["obsah"], $autori);

        header("Location: index.php");  
}

?>

<form method="POST">
  <div class="form-group">
    <label for="nadpis">Nadpis</label>
    <input type="text" class="form-control" id="nadpis" name="nadpis">
  </div>
  <div class="form-group">
    <label for="perex">Perex</label>
    <textarea class="form-control" id="perex" name="perex" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="obsah">Obsah</label>
    <textarea class="form-control" id="obsah" name="obsah" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="autori">Autoři (oddělení čárkou)</label>
    <input type="text" class="form-control" id="autori" name="autori">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Uložit</button>
</form>

<?php
require_once 'paticka.php';