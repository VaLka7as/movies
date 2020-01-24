<?php $dsn = "mysql:host=$host;dbname=$db";
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
<h1>Pridėti Filmą</h1>
<form method="post">
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Filmo Pavadinimas" name="pavadinimas">
    </div>
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Režisierius" name="rezisierius">
    </div>
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Metai" name="metai">
    </div>
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Reitingas" name="reitingas">
    </div>
    <div class="form-group">
        <input type="text" class="form-control shadow" placeholder="Aprašymas" name="aprasymas">
    </div>
    <div class="form-group shadow">
        <select class="custom-select" name="zanras">
            <option selected disabled> Pasirinkite Žanrą</option>
            <?php foreach ($zanrai as $zanras) { ?>
            <option><?=$zanras['pavadinimas']?></option>
    <?php } ?>
        </select>
    </div>
    <div>
    <button name="siusti" type="submit" class="btn btn-primary mb-2">Pateikti</button>
    </div>
</form>
<?php
if(isset($_POST['siusti'])) {
    try{
        $dsn = "mysql:host=$host;dbname=$db";
        $conn = new PDO($dsn, $username, $password);
        if($conn){
            try{
                $sql = "INSERT INTO filmai (pavadinimas, rezisierius, metai, reitingas, aprasymas, zanrai) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$_POST['pavadinimas'], $_POST['rezisierius'], $_POST['metai'], $_POST['reitingas'], $_POST['aprasymas'], $_POST['zanras']]);
            }
            catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    } catch (PDOException $e){
        echo $e->getMessage();
    }
}
