

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>FindIT</title>
    <link rel="stylesheet" href="style.css" />
  </head> 
  <body>
    <div class="container">
    <div class="desc">
      <div>
    <h1 class="title"><i>FindIT</i></h1>
    <p>FindIT is a platform that connects individuals and/or professionals who publish an ad made up of text and photos to offer the sale of new or second-hand products, a rental or a service in exchange of compensation.</p>
     </div>
    <!-- <div class="image"><img src="img/bg.png" alt="" class="img-responsive"></div>  -->
   
    <div class="images">
      
      <div class="image"><img src="img/img1.png" alt="" class="img-responsive" style=""></div>
      <div class="image"><img src="img/img3.png" alt="" class="img-responsive" style="width:18rem" ></div>
      <div class="image"><img src="img/img2.png" alt="" class="img-responsive" style="width:11rem"></div>


    </div>
  </div>
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