<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="split-screen">
      <div class="right">
        <a class="title"  href="../homepage/index.php">Plantita.ph</a>
        <form action="">
          <section class="copy">
            <h2>Log in</h2>
            <p>Don't have an account yet? <a href="signup.php">Sign up</a></p>
            <div class="social-media">
              <a class="social-icon" href="google.com">
                <img src="images/google-logo.svg" alt="" />
                Log in with Google
              </a>
              <a class="social-icon" href="facebook.com">
                <img src="images/facebook-logo.svg" alt="facebook.com" />
                Log in with Facebook
              </a>
            </div>
            <div class="or-container">
              <div class="line 1"></div>
              <p>or</p>
              <div class="line 2"></div>
            </div>
          </section>
          <div class="input-container name">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" required/>
            <img class="input-icon" src="Images/person-icon.svg" alt="" />
          </div>
          <div class="input-container password">
            <label for="password">Password</label>
            <input
              id="password"
              name="password"
              type="password"
              required
            />
            <img class="input-icon" src="Images/lock-icon.svg" alt="" />
            <a onclick="showLetters()"><img class="show-btn" src="Images/eye-icon.svg" alt="" /></a>
          </div>
          <button class="signup-btn" type="submit">Login</button>
        </form>
      </div>
      
      <div class="left bg2">
        <section class="copy"></section>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
