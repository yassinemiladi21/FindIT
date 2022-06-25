

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>FindIT</title>
    <link rel="stylesheet" href="style.css" />
  </head> 
  <body>
    <h1 class="title"><i>FindIT</i></h1>
    <div class="login" style="z-index: 1; opacity: 1">
      <h1>LOGIN</h1>
      <form method="POST">
        <div class="text">
          <input type="number" id="user" name="usern" required />
          <span></span>
          <label for="user">Username</label>
        </div>
        <div class="text">
          <input type="password" name="pwd" id="pass" required />
          <span></span>
          <label for="pass">Password</label>
        </div>
        <input type="submit" name="Submit1" value="Connect"/>

        <div class="signup-text">
          Not a member ? <a href="#" onclick="change1()">Sign Up</a>
        </div>
      </form>
    </div>

     <div class="signup" style="z-index: 0; opacity: 0">
      <h1>S'inscrire</h1>
      <form action="send.php" method="post">
        <div class="text">
          <input type="text" name="nom" id="fname" required />
          <span></span>
          <label for="fname">Nom</label>
        </div>
        <div class="text">
          <input type="text" name="prenom" id="lname" required />
          <span></span>
          <label for="lname">Prenom</label>
        </div>
        <div class="text">
          <input type="number" name="cinuser" id="cin" required />
          <span></span>
          <label for="cin">CIN</label>
        </div>
        <div class="choose">
          <select name="role" id="ce">
            <option value="chauffeur">Chauffeur</option>
            <option value="etudiant">Etudiant</option>
          </select>
        </div>
        <div class="text">
          <input type="text" name="username" id="user" required />
          <span></span>
          <label for="user">Username</label>
        </div>
        <div class="text">
          <input type="password" name="pwdcreate" id="passc" required />
          <span></span>
          <label for="pass">Mot de passe</label>
        </div>
        <input type="submit" value="S'inscrire" />
        <div class="login-text">
          Deja un membre ? <a href="#" onclick="change2()">Se connecter</a>
        </div>
      </form>
    </div>

    <script src="insc.js"></script>
  </body>
</html>