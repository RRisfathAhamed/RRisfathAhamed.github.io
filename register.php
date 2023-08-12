<?php
// Include database configuration
require_once "config.php";

// Define variables and initialize with empty values
$firstname = $lastname = $email = $password = "";
$firstname_err = $lastname_err = $email_err = $password_err = "";

// Process registration form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate firstname
    if (empty(trim($_POST["Firstname"]))) {
        $firstname_err = "Please enter your firstname.";
    } else {
        $firstname = trim($_POST["Firstname"]);
    }

    // Validate lastname
    if (empty(trim($_POST["Lastname"]))) {
        $lastname_err = "Please enter your lastname.";
    } else {
        $lastname = trim($_POST["Lastname"]);
    }

    // Validate email
    if (empty(trim($_POST["Email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["Email"]);
    }
    

    // Validate password
    if (empty(trim($_POST["Password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["Password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["Password"]);
    }
    

    // Check input errors before inserting into database
    if (empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (firstname, lastname, email, password, usertype) VALUES (?, ?, ?, ?, 'user')";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_firstname, $param_lastname, $param_email, $param_password);

            // Set parameters
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to the login page after successful registration
                header("refresh:2; url=form.php");
                echo "Registration successful. Redirecting to the Login page...";
                
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $mysqli->close();
}
?>