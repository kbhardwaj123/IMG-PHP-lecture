<?php
    phpinfo();
?>


<!-- boilerplate.................................................................. -->
<!DOCTYPE html>
<html>
<head> 
    <title>Sign Up Form</title>
</head>
<body>
    <h1>Sign Up Form</h1>
    
</body>
</html>

<!-- starting.................................................................. -->

<?php
    // $username = $_POST['username'];
    // $pass = $_POST['pass'];
    // $full = $_POST['full'];

    print_r($_POST);

?>

<!-- without validation............................................................ -->
<?php
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $full = $_POST['full'];

?>
<!DOCTYPE html>
<html>
<head> 
    <title>Sign Up Form</title>
</head>
<body>
    <h1>Sign Up Form</h1>
    <form action="proj.php" method="post">
        <table>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <?php echo $username ?>
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <?php echo $pass ?>
                </td>
            </tr>
            <tr>
                <td>
                    Full Name
                </td>
                <td>
                    <?php echo $full ?>
                </td>
            </tr>
            <!-- <tr>
                <td>
                    <input type="submit" value="Submit"/>
                </td>
            </tr> -->
        </table>
    </form>
    
</body>
</html>

<?php print_r($_POST); ?>

<!-- ......................................................................... -->
<!-- change action="" -->


<!-- without validation............................................................ -->
<?php
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $full = $_POST['full'];

    $err_username = $err_pass = $err_full = "";

        
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($username)) $err_username = "Field is required";
        if(empty($pass)) $err_pass = "Field is required";
        if(empty($full)) $err_full = "Field is required";
    }

?>
<!DOCTYPE html>
<html>
<head> 
    <title>Sign Up Form</title>
</head>
<body>
    <h1>Sign Up Form</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" size="30" /><span><?php echo $err_username ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="text" name="pass" size="30" /><span><?php echo $err_pass ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    Full Name
                </td>
                <td>
                    <input type="text" name="full" size="30" /><span><?php echo $err_full ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>

<?php if($_SERVER["REQUEST_METHOD"] == "POST") print_r($_POST); ?>










