
<?php
if ($_SESSION['login'] != "1")
    {
        header('Location: login.php');
        exit();
    } 
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
        <?php echo "Je bent ingelogd als " . $_SESSION['login-naam'] . "."; ?>
    </header>
    <main>
    <button id="some_id">Add product</button>


    <form action="addProduct.php" method="post" id="some_form" display="none">
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
</main>
<footer><a href="uitloggen.php">Uitloggen</a></footer>
    <script type="text/javascript">
    var theButton = document.getElementById('some_id');
    i=0;
    
    theButton.onclick = function() {
        if(i==0) {
        document.getElementById('some_form').style.display='none';
        i=1;
    }    else {
        document.getElementById('some_form').style.display='block';
        i=0;
    }
    }
    // theButton.onclick = function() { 
    //     document.getElementById('some_form').style.display='none';   
    // }
    
</script>
</body>
</html>