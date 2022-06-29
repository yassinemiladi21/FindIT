<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>FindIT</title>
    <link rel="stylesheet" href="style.css" />
  </head> 
  <body>

    <div class="login" style="z-index: 1; opacity: 1">
      <h1>LOGIN</h1>
      <form method="POST">
        <div class="text">
          <input type="text" id="user" name="user" required />
          <span></span>
          <label for="user">Username</label>
        </div>
        <div class="text">
          <input type="password" name="pwd" id="pwd" required />
          <span></span>
          <label for="pwd">Password</label>
        </div>
        <input type="submit" name="submit" value="Connect"/>

        <div class="signup-text">
          Not a member ? <a href="#" onclick="change1()">Sign Up</a>
        </div>
      </form>
    </div>
    </div>

    <script src="insc.js"></script>
  </body>
</html>