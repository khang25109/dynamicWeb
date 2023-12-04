<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <div class="logo">
    <a href="index.php">
        <img class="logo" src="img/logo2.jpg" alt="">
    </a>
    </div>
        
    </header>

    <nav>
      <div class="search-area">
        <input type="text" id="search-box" placeholder="Enter search term">
        <button id="search-button">Search</button>
    </div>
    <div class="navbar">
        <a href="#">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Products 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">Organic Coffee</a>
              <a href="#">Premium Tea</a>
              <a href="#">Fancy Cookies</a>
            </div>
          </div> 
        <a href="#">Services</a>
        <div class="dropdown">
            <button class="dropbtn">About Us 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">About Our Company</a>
              <a href="#">Management Team</a>
              <a href="#">Careers</a>
            </div>
          </div> 
        <a href="#">Contact Us</a>
        <a href="signIn.php">Sign in</a>  
    </div>
    </nav>
   <div class="signIn">
      <div class="mem">Members Log-in</div>
      <div>Email:</div>
      <input class="password-input" type="text" placeholder="Enter email">
      <div>Password:</div>
      <input class="password-input" type="text" placeholder="Enter password">
      <div><input class="form-check-input" type="checkbox" name="remember"> Remember me</div>
      <button>Sign in</button>
    </div>
  </body>
  
</html>