<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Validate the username and password (you can replace this with your own validation logic)
    if ($email == "Email" && $password == "password") {
        // Set the user type and greeting based on the email
        $userType = "Admin";
        $greeting = "Welcome, Admin!";
    } elseif ($email == "Email" && $password == "password") {
        $userType = "User";
        $greeting = "Welcome, User!";
    } else {
        // Invalid username or password, display an error message
        echo "Invalid username or password";
        exit;
    }
        // Display success message for 3 seconds and redirect to index.php
        echo '<script>
        setTimeout(function(){
            window.location.href = "index.php";
        }, 3000);
      </script>';
echo "Login successful. Redirecting...";
exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="form-box">
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>

            <form id="loginForm" action="login.php" method="post" onsubmit="return validateLoginForm()">
                <div class="input-box">
                    <input type="text" class="input-field" name="Email" id="loginEmail" placeholder="Username or Email">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="Password" id="loginPassword" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Submit">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check">
                        <label for="login-check">Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    // Display the user type and greeting if the username and password are correct
    if (isset($userType) && isset($greeting)) {
        echo "<p>User Type: " . $userType . "</p>";
        echo "<p>" . $greeting . "</p>";
    }
    ?>
</body>

</html>