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
        <main>
        <section class="user-login">
                <div class="container">
                        <h2>Login</h2>
                        <?php if (isset($_GET['error'])) { ?>
     		                <p class="error"><?php echo $_GET['error']; ?></p>
     	                <?php } ?>
                    <form action= "addcontact.php" method = "post">
                        <div class="form-group">
                        <label> Title </label>
                                <select name="title">
                                    <option value="">--Select--</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Ms">Ms</option>
                                </select>
                            <input type="firstname" name="firstname" id="firstname" placeholder="First Name" required>
                            <input type="lastname" name="lastname" id="lastname" placeholder="Last Name" required>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                            <input type="company" name="company" id="company" placeholder="Company" required>
                            <input type="telephone" name = "telephone" id = "telephone" placeholder = "Telephone" required>
                           
                                <label> Assigned to </label>
                                <select name="assigned_to">
                                    <option value="">--Select--</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            <input type="submit" class="btn" value="Add Contact" name="submit" />

                        </div>
                    </form>
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