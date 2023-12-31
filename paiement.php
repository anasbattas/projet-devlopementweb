<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de paiement électronique</title>
    <link rel="stylesheet" href="paiement.css">

</head>
<body>
    <div class="container">
        <h2>Formulaire de paiement électronique</h2>
        <form action="" method="POST">
            <div class="form-group" >
                <label for="nom">Nom du titulaire</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="numero">Numéro de carte</label>
                <input type="text" id="numero" name="numero" required>
            </div>
            <div class="form-group">
                <label for="date">Date d'expiration</label>
                <input type="text" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="cryptogramme">Cryptogramme visuel (CVV)</label>
                <input type="text" id="cryptogramme" name="cryptogramme" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Effectuer le paiement</button>
            </div>
        </form>
    </div>
    <?php 
    if(isset($_POST['submit'])){
    $fullname=$_POST['nom'];
    $numero=$_POST['numero'];
    $date=$_POST['date'];
    $cryptogramme=$_POST['cryptogramme'];
    
    $conn = mysqli_connect('localhost','root','','projetdev');
    
    $sql= "INSERT INTO paiement(nom, numerocarte, datepaiemant,cryptogramme) VALUES ('$fullname','$numero','$date',' $cryptogramme')";
    mysqli_query($conn,$sql);}

    ?>
    
</body>

</html>