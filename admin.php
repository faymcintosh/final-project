<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dolphin CRM</title>
        <link rel="stylesheet" href="styles_home.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>

    <body>
    <header>
            <div class="container">
                <h1>Dolphin CRM</h1>
            </div>
          </header>
          <main>
          <div class="wrapper">
               <div class="sidebar">
                    <ul>
                         <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                         <li><a href="#"><i class="fas fa-user"></i>Users</a></li> 
                         <li><a href="#"><i class="fas fa-address-book"></i>New Contact</a></li>
                         <li><a href onclick="logout.php"><i class="fas fa-door-open"></i>Log Out</a></li>
                    </ul> 
                </div>
            </div>

        <main>
            <section class="add-user">
            <div class="header">DashBoard <button class="btn"><i class="fa fa-plus"></i> Add Contact </button></div>  

                    <div class="content">
                        <form action="adduser.php"  method="post">
                            <div class="user-details">
                            <input type="email" name="email" id="email" placeholder="Email" required>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                            <input type="submit" class="btn" value="Login" name="submit" />
                            </div>
                        </form>
                    </div>
                
                

            </section>
</main>
</main>
        <footer>
            <div class="container">
                <p>Copyright @ 2022 Dolphin CRM</p>
            </div>
        </footer>
    </body>
</html>