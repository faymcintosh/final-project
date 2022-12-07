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
                         <li><a href="#"><i class="fas fa-door-open"></i>Log Out</a></li>
                    </ul> 
    </div>
    <div class="main_content">
        <div class="header">DashBoard <button class="btn"><i class="fa fa-plus"></i> Add Contact </button></div>  
        <div class="info">
        <form action= "adduser.php" method = "post">
          <p>
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" placeholder="Jane" required>
          </p>
          <p>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" placeholder="Doe" required>
          </p>
          <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>
         </p>
         <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
         </p>
         <p>
            <label for="roles">Role</label>
            <select name="role" id="role">
            <option value="member">Member</option>
            <option value="admin">Admin</option>
            </select>
        </p>
         </form>
      </div>
    </div>
</div>
</main>
</body>
</html