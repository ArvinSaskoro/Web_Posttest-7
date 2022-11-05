<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARVIN 048</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="form/form.css">
    <script src="scripts.js defer"></script>

     
  </head>

  <body>
    <header>
      <div class="fcontainer">
        <i class="bi bi-brightness-high-fill" id=""toggleDark></i>
        
        <div class="header-left">
          <img class="logo" src="assets/logo.png" alt="logo web">
          <h2>Game</h2>
          <h2 class="red">Website</h2>
        </div>

        <div class="header-right">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About me</a></li>
          </ul>
        </div>
      </div>
    </header>

    <div class="wrapper">   
        <div class="container">
            <div class="content">
                <div class="box-create">
                    <div class="card-main">
                        <div class="login-header">Form Create New Account</div>
                        <div class="login-body">
                            <form class="form-login" method="POST" action="form.php">
                                <label class="form-label">Name</label>
                                <input type="text" 
                                name="name" 
                                placeholder="your name..."
                                class="form-input">
                                <label class="form-label">Email</label>
                                <input type="email" 
                                name="email" 
                                placeholder="google@gmail.com"
                                class="form-input">
                                <label class="form-label">Password</label>
                                <input type="password" 
                                name="password" 
                                class="form-input">
                                <label class="form-label">Phone number</label>
                                <input type="tel"
                                pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" 
                                name="Phone number" 
                                placeholder="0000-0000-0000"
                                class="form-input">
                          
                                <input type="submit" class="submit" value="Create Account">
                                <button href="login-acc.php"><a class="back" href="login-acc.php" class="">Back</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>

    <footer>
      <div class="container">
        <p>by M. Arvin Saskoro</p>
        <p>2109106048</p>
        <p>© 2022. All rights reserved</p>
      </div>
    </footer>

  </body>
</html>