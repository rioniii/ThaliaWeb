<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Thalia Online Shop | buy Books, eBooks, Toys etc. | Thalia </title> 

    <link rel="stylesheet" href="First.css">
    <link rel="website icon" type="png" href="C:\Users\online\OneDrive\Desktop\Fotot\Untitled.png">
</head>
<body>
    <?php echo "Hi"?>
    <nav>
        <a href="Main.html"> 
            <img class="thaliaLogo" src="C:\Users\online\OneDrive\Desktop\Fotot\Screenshot 2023-11-16 221803.png" alt="Thalia" height="10%" width="15%">
        </a>

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Title, author, keyword, ISBN">

            <button class="search-button" type="submit" onclick="funksioniSearch()" >
            </button>


        </div>

        <div class="div-items">
            <img id="img-items" src="C:\Users\online\OneDrive\Desktop\Fotot\Screenshot 2023-11-18 211537.png" alt="items">
            <ul class="Items">
                <li>On Site </li>
                <li>My Account</li>
                <li>Wish List </li>
                <li>Shopping Cart</li>
            </ul>
        </div>

        <form action="action_page.php" method="post">
          
            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" id="username" placeholder="Enter Username" name="uname" required><br>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" id="password" placeholder="Enter Password" name="psw" required><br><br>
          
              <button type="submit">Login</button><br>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label><br>
            </div>
          
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>


        <ul class="Librat">
            <li>Books</li>
            <li>eBooks</li>
            <li>Audiobooks</li>
            <li>Toys</li>
            <li>Stationery</li>
            <li>Calendar</li>               
            <li>Coupon</li>

        </ul>
    </nav>

    <script>
        let username = document.getElementById("username").value;
        let password = douciment.getElementById("password").value;

        
        
        var usernameRegex = /^[^\s@]+@[^\s@]+[^\s@]+$/; 
        if(!nameRegex.test(username)){
            pop('Please enter a valid username');
            return false
        }

        var passwordRegex = /^[a-zA-z\s]+$/;
        if(!passwordRegex.test(password)){
            pop('Please enter a valid password');
            return false
        }

        if(password.length < 6 ){
            pop('Password must contain at least 6 characters');
            return false;
        }



    </script>
</body>
</html>