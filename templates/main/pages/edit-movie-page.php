<?php

$dsn= "mysql:host=$host;dbname=$db";
$id = $_GET['id'];
try {
    $conn = new PDO($dsn, $username, $password);
    if ($conn) {
        $stmt = $conn->query("SELECT * FROM filmai WHERE id =$id");
        $filmai = $stmt->fetch();
}
}catch (PDOException $e){
        echo $e->getMessage();
}
try {
    $conn = new PDO($dsn, $username, $password);
    if ($conn)
        try {
            $stmt = $conn->query("SELECT * FROM zanrai");
            $zanrai = $stmt->fetchAll();

        } catch (PDOException $e){
            echo $e->getMessage();
        }
} catch (PDOException $e){
    echo $e->getMessage();
}
?>

<form method="post">
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Filmo Pavadinimas" name="pavadinimas" value="<?=$filmai['pavadinimas']?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Režisierius" name="rezisierius" value="<?=$filmai['rezisierius']?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Metai" name="metai" value="<?=$filmai['metai']?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Reitingas" name="reitingas" value="<?=$filmai['reitingas']?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Aprašymas" name="aprasymas" value="<?=$filmai['aprasymas']?>">
    </div>
    <div class="form-group shadow">
        <select class="custom-select" name="zanras">
            <option selected disabled> Pasirinkite Žanrą</option>
            <?php foreach ($zanrai as $zanras) { ?>
                <option><?=$zanras['pavadinimas']?></option>
            <?php } ?>
        </select>
    </div>
    <button name="siusti" type="submit" class="btn btn-primary shadow-sm">Pateikti</button>
</form>

<?php
if(isset($_POST['siusti'])) {
    try {
    $pavadinimas = $_POST['pavadinimas'];
    $rezisierius = $_POST['rezisierius'];
    $metai = $_POST['metai'];
    $reitingas = $_POST['reitingas'];
    $aprasymas = $_POST['aprasymas'];
    $zanras = $_POST['zanras'];

    $dsn= "mysql:host=$host;dbname=$db";

    $conn = new PDO($dsn, $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "Update filmai SET pavadinimas = '$pavadinimas', rezisierius = '$rezisierius', metai = '$metai', reitingas = '$reitingas', aprasymas = '$aprasymas', zanrai = '$zanras' WHERE id =$id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    } catch (PDOException $e) {

    }


}