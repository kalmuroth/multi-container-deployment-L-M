<?php include('./header.php') ?>
<div class="alrazy-title" data-splitting>
    Nos SUPERBES Annonces
</div>
<!-- Script qui génére l'animation -->
<script src="https://unpkg.com/splitting@1.0.0/dist/splitting.js"></script>
<script>
    Splitting();
</script>
</br>
<div class="container pt-4">
    <table class="accueil">
        <tr>
            <td class="consulter"> <a href="./list_annonce.php">
                    <h3>Consulter toutes les annonces</h3>
                </a></td>
            <td class="ajouter"> <a href="./form_annonce.php">
                    <h3>Ajouter une annonce</h3>
                </a> </td>
        </tr>
    </table>
</div>
<div class="container pt-4">
    <h3>Nos 15 dernières annonces</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add_annonce.php" method="post">
            <div class="mb-3">
                <?php
                    $host = 'db';
                    // Database use name
                    $user = 'MYSQL_USER';
                    //database user password
                    $pass = 'MYSQL_PASSWORD';
                    // check the MySQL connection status
                    $conn = new mysqli($host, $user, $pass);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } else {
                        echo "Connected to MySQL server successfully!";
                    }
                ?>
            </div>
        </form>
    </div>
</div>
<?php include('./footer.php'); ?>