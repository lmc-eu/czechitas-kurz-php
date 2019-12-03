<!-- přihlašovací formulář -->
<form class="form-signin" action="prihlas-me.php" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Prosím přihlašte se</h1>
    <label for="jmeno" class="sr-only">Uživatelské jméno</label>
    <input type="text" name="jmeno" id="jmeno" class="form-control" placeholder="uživ. jméno" required autofocus>
    <label for="heslo" class="sr-only">Heslo</label>
    <input type="password" name="heslo" id="heslo" class="form-control" placeholder="heslo" required>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Přihlásit" />
</form>