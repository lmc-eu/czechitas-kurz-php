        <!-- patička -->
        <div class="footer navbar navbar-light bg-light rounded">
            <p class="mb-0">
                Spolu s Czechitas jsme to s láskou upekli v LMC s.r.o.
                |
                Počet zhlédnutí blogu: <?php echo $pocetZhlednuti; ?>
                |
                Stránka vygenerována: <?php echo date('j. n. Y, H:i:s'); ?>
            </p>
            <?php if (!$uzivatelPrihlaseny) { ?>
                <p class="mb-0 float-right d-inline-block"><a href="prihlaseni.php">přihlásit</a></p>
            <?php } else { ?>
                <p class="mb-0 float-right d-inline-block"><a href="odhlasit.php">odhlásit</a></p>
            <?php } ?>
        </div>
    </div>
</body>
</html>