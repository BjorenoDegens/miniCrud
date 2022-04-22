
<?php
session_start();
?>
<?php
    if($_SESSION["name"]) {
    ?>
    
<?php
    require_once ("connect.php");

    $sql = "SELECT * FROM gerechten";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylepage.css">
    <title>AdminPage</title>
</head>
<body>

    <header> 
        <img class="imgheader" src="/miniCrud/img/logo_465x320.png" alt="">
        <?php echo "Je bent ingelogd als " . $_SESSION['name'] . "."; ?>
    </header>
    <main>
    <button id="buttonForm">Add product</button>
    <form action="addProduct.php" method="post" id="formProduct" >
    <div class='tab'>
        <label>titel</label>
        <br>
        <input type="text" name="titel" />
    </div>
    <div class='tab'>
        <label>artiest</label>
        <br>
        <input type="text" name="artiest">
    </div>
    <div class='tab'>
        <label>genre</label>
        <br>
        <input type="text" name="genre">
    </div>
    <div class='tab'>
        <label>prijs</label>
        <br>
        <input type="number" name="prijs">
    </div>
    <div class='tab'>
        <label>voorraad</label>
        <br>
        <input type="text" name="voorraad">
    </div>
    <input type="submit" name="submit">
    </form>

    <?php foreach($result as $gerechten){
            ?>
            <form action="updatedelProduct.php" method="post">
        <div>
            <label>ID</label>
            <br>
            <input readonly name="ID" value="<?php echo $gerechten['ID']; ?>" />
        </div>
        <div>
            <label>titel</label>
            <br>
            <input type="text" name="titel" value="<?php echo $gerechten['titel']; ?>" />
        </div>
        <div>
            <label>prijs</label>
            <br>
            <input type="text" name="prijs" value="<?php echo $gerechten['prijs']; ?>" />
        </div>
        <div>
            <label>beschrijving</label>
            <br>
            <input type="text" name="beschrijving" value="<?php echo $gerechten['beschrijving']; ?>" />
        </div>
        <div>
            <label>afbeelding</label>
            <br>
            <input type="text" name="afbeelding" value="<?php echo $gerechten['afbeelding']; ?>" />
        </div>
        <div>
            <label>categorie</label>
            <br>
            <input type="text" name="categorie" value="<?php echo $gerechten['categorie']; ?>" />
        </div>
        <input type="submit" name="update" value="update"><input type="submit" name="delete" value="delete">
    </form>
        <?php
        }
        ?>
</main>
<footer>
    Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="uitloggen.php" tite="Logout">Logout.
        <script type="text/javascript">
            var theButton = document.getElementById('buttonForm');
    i=0;
    
    theButton.onclick = function() {
        if(i==0) {
            document.getElementById('formProduct').style.display='block';
        i=1;
    }    else {
        document.getElementById('formProduct').style.display='none';
        i=0;
    }
}
</script>
</body>
</html>
<?php
}else header('Location: inlog.php');
?></footer>