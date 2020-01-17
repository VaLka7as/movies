<link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
<script type="text/javascript" src="../js/jquery.slim.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">


<h2>Nauja kategorija</h2>
<?php
if(isset($_POST['saugoti'])) {
    $dsn = "mysql:host=$host;dbname=$db";
    try {
        $conn = new PDO($dsn, $username, $password);
        if ($conn) {
            try {
                $sql = "INSERT INTO zanrai (zanras) VALUES (?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$_POST['pavadinimas']]);
                echo "ok";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>



<form method="post">
    <div class="form-group">
        <label for="pavadinimas">pavadinimas</label>
        <input type="text" class="form-control" name="pavadinimas">
    </div>


    <button name="saugoti" type="submit" class="btn btn-primary">Saugoti</button>
</form>
