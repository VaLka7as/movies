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
$pavadinimas = $filmai['pavadinimas'];

?>
<h2>Ištrinti filmą? "<?=$pavadinimas?>"</h2>
<form method="post">
    <div class="form-group text-center">
        <button name="taip" type="submit" class="btn btn-primary btn-lg">Taip</button>
        <button name="ne" type="submit" formaction="?page=visi" class="btn btn-primary btn-lg">Ne</button>
    </div>
</form>
<?php
if(isset($_POST['taip'])) {
    try {
        $id = $_GET['id'];
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM filmai WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    catch(PDOException $e){

    }
}
?>
