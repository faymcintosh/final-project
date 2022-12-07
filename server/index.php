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
                    <form action= "login.php" method = "post">
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email" required>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                            <input type="submit" class="btn" value="Login" name="submit" />
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