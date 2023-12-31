<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginprojrtcss.css">
    <title>SIGN UP</title>
    <script language="javascript">
        function verif(){
            if(document.getElementById("tx1").value==""){alert("please enter your username");return false;}
            if(document.getElementById("pass1").value==""){alert("please enter your password");return false;}
        }

    </script>
</head>
<body>
    <form action="login.php" method="POST"><h1>LOGIN</h1>
    <input type="text" id="tx1" placeholder="username">
   
    <input type="password" id="pass1" placeholder="Password">
  
    <input type="submit" class="login" value="LOGIN" onclick="verif()">
    </form>
    <?php
    if(isset($_POST['login'] )){
        $login=$_POST['tx1'];
        $pass=$_POST['pass1'];
        $conn = mysqli_connect('localhost','root','','projetdev');
        $sql = "SELECT password FROM inscription WHERE login = '$login'";
        $resultat = $connexion->query($sql);
        if ($resultat->num_rows > 0) {
         
            $l1 = $resultat->fetch_assoc();
            $motdepassebasededonnees = $l1['password'];
         
            if (password_verify($pass, $motdepassebasededonnees)) {
                echo "Connexion réussie !";
                
            } else {
                echo "Mot de passe incorrect.";
            }
        } else {
            echo "Utilisateur non trouvé.";
        }
    }
    
    
    
    ?>
    
    
    
</body>
</html>