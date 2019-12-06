<h2>Visi filmai</h2>


<?php
$dsn= "mysql:host=$host;dbname=$db";
try {
    $conn = new PDO($dsn, $username, $password);
    if ($conn) {
        $stmt = $conn->query("SELECT * FROM filmai");
        $filmai = $stmt->fetchALL();
        ?>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Pavadinimas</td>
                <td>Rezisierius</td>
                <td>Metai</td>
                <td>Reitingas</td>
                <td>Aprasymas</td>
            </tr>

            <?php
            foreach ($filmai as $filmas):?>
                <tr>
                    <td><?= $filmas['id']; ?></td>
                    <td><?= $filmas['pavadinimas']; ?></td>
                    <td><?= $filmas['rezisierius']; ?></td>
                    <td><?= $filmas['metai']; ?></td>
                    <td><?= $filmas['reitingas']; ?></td>
                    <td><?= $filmas['aprasymas']; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>


        <?php
    }
}
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>