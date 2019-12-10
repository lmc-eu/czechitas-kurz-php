<?php require_once "hlavicka.php"; ?>

        <!-- přihlašovací formulář -->
        <form class="form-signin" action="prihlas-me.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Prosím přihlaste se</h1>
            <label for="jmeno">Uživatelské jméno</label>
            <input type="text" name="jmeno" id="jmeno" class="form-control" placeholder="uživatelské jméno" required autofocus>
            <label for="heslo" class="mt-2">Heslo</label>
            <input type="password" name="heslo" id="heslo" class="form-control mb-4" placeholder="heslo" required>
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Přihlásit" />
        </form>

<?php require_once "paticka.php"; ?>