<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@200&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-right.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/redo.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/play-stop-o.css' rel='stylesheet'> <link href='https://unpkg.com/css.gg@2.0.0/icons/css/printer.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-left.css' rel='stylesheet'>

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
        <a href="myWebPage.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Products 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="organicCoffee.html">Organic Coffee</a>
              <a href="tea.html">Premium Tea</a>
              <a href="#">Fancy Cookies</a>
            </div>
          </div> 
        <a href="services.html">Services</a>
        <div class="dropdown">
            <button class="dropbtn">About Us 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="organicCoffee.html">About Our Company</a>
              <a href="#">Management Team</a>
              <a href="careers.html">Careers</a>
            </div>
          </div> 
        <a href="contact.html">Contact Us</a>
        <a href="signIn.php">Sign in</a>  
    </div>
         
    </nav>
    <div class="sideBar">
        <div class="back">
            <i class="gg-arrow-left"></i>
        </div>
        <div class="forward">
            <i class="gg-arrow-right"></i>
        </div>
        <div class="print">
            <i class="gg-printer"></i>
        </div>
        <div class="stop">
            <i class="gg-play-stop-o"></i>
        </div>
        <div class="reload">
            <i class="gg-redo"></i>
        </div>
    </div>
    <main>
      <div class="content">
        <div class="homeMenu" >
            <p class="welcome">WELCOME</p>
            <p class="title">Start your day with a coffee</p>
            <p class="welcome2">ROASTED WITH LOVE</p>
            <p class="text">For the first time, the exclusive experience offered 
                by the Lamborghini Esperienza Giro program involved dreamlike locations 
                in Southeast Asia.
            </p>
            <div>
                <button class="orderBtn">Order Now</button>
            </div>
        </div>
        <div class="homeMenu2">
            <div class="displayMenu2">
                <div class="item1">
                
                    <div class="depr1">
                        <img class="imgItem" src="img/hotCoffee.jpg" alt="">
                        <p class="depTitle">Hot Coffee</p>
                        <p class="depContent">
                            You will be required to develop information 
                            architecture for an e-commerce website that meets company
                            requirements.
                        </p>
                        <p class="depMore">
                            <a class="more" href="organicCoffee.html">FIND OUT MORE &#8594;</a>
                        </p>
                        
                    </div>
                </div> 
                <div class="item2">
                    <div class="depr1">
                        <img class="imgItem" src="img/icedCoffee.jpg" alt="">
                        <p class="depTitle">Iced Coffee</p>
                        <p class="depContent">
                            You will be required to develop information 
                            architecture for an e-commerce website that meets company
                            requirements.
                        </p>
                        <p class="depMore">
                            <a class="more" href="organicCoffee.html">FIND OUT MORE &#8594;</a>
                        </p>
                        
                    </div>
                </div>
                <div class="item3">
                    <div class="depr1">
                        <img class="imgItem" src="img/milkShake.jpg" alt="">
                        <p class="depTitle">Milk Shake</p>
                        <p class="depContent">
                            You will be required to develop information 
                            architecture for an e-commerce website that meets company
                            requirements.
                        </p>
                        <p class="depMore">
                            <a class="more" href="organicCoffee.html">FIND OUT MORE &#8594;</a>
                        </p>
                        
                    </div>
                </div>    
            </div>
              
        </div>
        
      </div>
    
    </main>

    <footer>
        <p class="footerP">Minh Khang Nguyen &copy; 2023</p>
    </footer>
    
    <script>
        function Redirect(){
            window.location = "myWebPage.html";
        }
        document.getElementsByClassName("back").addEventListener("click", function() {
        window.history.back();
            });
    </script>
</body>

</html>