<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dolphin CRM</title>
        <link rel="stylesheet" href="styles.css">
        
    </head>

    <body>
        <header>
            <div class="container">
                <h1>Dolphin CRM</h1>
            </div>
    
        </header>
        <aside>
        <!-- Sidebar -->
        <div id="sidebar-contents">
            <ul>
                <li id="home" class="sidebar-option active" data-number="1">
                    <img src="assets/home-24px.svg" alt="Home" />Home
                </li>
                <br>
                <li class="sidebar-option" data-number="2">
                    <img src="assets/person_add-24px.svg" alt="New Contact" />New Contact
                </li>
                <br>
                <li class="sidebar-option" data-number="3">
                    <img src="assets/add_circle-24px.svg" alt="Users" />Users
                </li>
                <br>
                <li id="logout">
                    <img src="assets/power_settings_new-24px.svg" alt="Logout" />Logout
                </li>
            </ul>
        </div>
    </aside>

        <main>
            <section class="add-user">
                <div class="container1">
                    <div class="title">New User</div>
                    <div class="content">
                        <form action="#"  method="post">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Firstname</span>
                                    <input type="text" placeholder="Enter your firstname" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Lastname</span>
                                    <input type="text" placeholder="Enter your lastname" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Email</span>
                                    <input type="text" placeholder="Enter your email" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Password</span>
                                    <input type="text" placeholder="Enter your password" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number,
                                    one uppercase and lowercase letter, and at least 8 or more characters" required>
                                </div>
                                <div class="Option">
                                    <span class="details">Role</span>
                                    <select id="priority" name="priority" required>
                                        <option value="Admin">Admin</option>
                                        <option value="Member">Member</option>
                                    </select>
                                </div>
                                <div class="button">
                                    <input type="save" value="save">
                                </div>
                            </div>
                        </form>
                    </div>
                
                    <!--form action="" method="post" name="form" onsubmit="return validated()">
                        <div class="form-group2">
                            <label for="firstname">First Name </label>
                            <input type="text" id="firstname" name="firstname" class="input-field" pattern="^[a-zA-Z]+$" title="Uppercase and/or lower case letters" required />
                            <label for="lastname">Last Name</label> 
                            <input type="text" id="lastname" name="lastname" class="input-field" pattern="^[a-zA-Z]+$" title="Uppercase and/or lower case letters" required />
                            <label for="password">Password</label>
                            <input type="password" class="input-field" name="password" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number,
                         one uppercase and lowercase letter, and at least 8 or more characters" required />
                             <label for="email">Email</label>
                             <input type="email" class="input-field" name="email" id="email2" required />
                             <label for="Role">Role</label>
                             <select id="priority" name="priority" required>
                                 <option value="Admin">Admin</option>
                                 <option value="Member">Member</option>
                                 
                                </select>

                             <input type="save" class="bttn" value="save" name="save" />
                            
                             <a href="dashboard.php" id="btn" value="Login"></a>
                        </div>
                        
                    </form-->

                    

                </div>
                

            </section>
        </main>
        <footer>
            <div class="container">
                <p>Copyright @ 2022 Dolphin CRM</p>
            </div>
        </footer>
    </body>
</html>