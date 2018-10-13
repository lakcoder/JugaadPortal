<?php
$name = $_POST['name'];
$pass = $_POST['pass'];

if( isset($name) || isset($pass) )
{
    if( empty($name) ) {
        die ("ERROR: Please enter username!");
    }
    if( empty($pass) ) {
        die ("ERROR: Please enter password!");
    }


    if( $name == "ecell" && $pass == "Jugaad2k18" )
    {
        // Authentication successful - Set session
        session_start();
        $_SESSION['auth'] = 1;
        setcookie("username", $_POST['name'], time()+(84600*30));
        header('Location: database.php');
        exit;
    }
    else {
        echo "ERROR: Incorrect username or password!";
    }
}


// If no submission, display login form
else {
?>
    <html>
    <head></head>
    <body>
    <center>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Username: <input type="text" name="name" value="<?php echo $_COOKIE['username']; ?>">
    <p />
    Password: <input type="password" name="pass">
    <p />
    <input type="submit" name="submit" value="Log In">
    </center>
    </body>
    </html>
<?php
}
?>


