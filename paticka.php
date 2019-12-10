        <!-- patička -->
        <div class="footer navbar navbar-light bg-light rounded">
            <p class="mb-0">
                Spolu s Czechitas jsme to s láskou upekli v LMC s.r.o.
                |
                Počet zhlédnutí blogu: <?php echo $pocetZhlednuti; ?>
                |
                Stránka zobrazena: <?php echo date('j. n. Y, H:i:s'); ?>
            </p>
            <!-- tlačítka na přihlášení / odhlášení -->
            <p class="mb-0 float-right">
                <?php if (!empty($_SESSION["admin"])) { ?>
                    <a href="odhlaseni.php" class="btn btn-danger btn-sm">odhlásit</a>
                <?php } else { ?>
                    <a href="prihlaseni.php" class="btn btn-info btn-sm">přihlásit</a>
                <?php } ?>
            </p>
        </div>
    </div>
</body>
</html>