<?php
include 'connect.php';
session_start();

$signUpError = "";
$signInError = "";

// Handle Sign Up
if (isset($_POST['signUp'])) {
    $firstName = trim($_POST['fName']);
    $lastName = trim($_POST['lName']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validation
    if (!preg_match("/^[a-zA-Z ]+$/", $firstName)) {
        $signUpError = "First name should contain only letters and spaces.";
    } else if (!preg_match("/^[a-zA-Z ]+$/", $lastName)) {
        $signUpError = "Last name should contain only letters and spaces.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $signUpError = "Invalid email format.";
    } else if (!preg_match("/^[a-zA-Z0-9]+$/", $password)) {
        $signUpError = "Password must be alphanumeric only.";
    } else if ($password !== $confirmPassword) {
        $signUpError = "Password and Confirm Password do not match.";
    } else {
        // Check if email already exists
        $checkEmail = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($checkEmail);
        if ($result->num_rows > 0) {
            $signUpError = "Email Address Already Exists!";
        } else {
            $hashedPassword = md5($password);
            $insertQuery = "INSERT INTO users (firstName, lastName, email, password)
                            VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";
            if ($conn->query($insertQuery) === TRUE) {
                header("Location: index.php?registered=true");
                exit();
            } else {
                $signUpError = "Error: " . $conn->error;
            }
        }
    }
}

// Handle Sign In
if (isset($_POST['signIn'])) {
    $email = trim($_POST['email']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: homepage.php");
        exit();
    } else {
        $signInError = "Incorrect Email or Password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login / Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .error-message {
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <section id="header">
                <a href="homepage.php"><img src="assets/24Carat.png" class="logo" alt=""></a>
                <div class="mainmenu">
                    <ul id="navbar">
                        <li><a class="active" href="homepage.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="index.php">Log out</a></li>
                        <li class="lg-bag"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    </ul>
                </div>
            </section>
        </nav>
    </header>

    <!-- Sign Up Form -->
    <div class="container" id="signup" style="display: <?= !empty($signUpError) ? 'block' : 'none' ?>;">
        <h1 class="form-title">Create your account</h1>

        <?php if (!empty($signUpError)) : ?>
            <div class="error-message" style="color: red; margin-bottom: 10px;">
                <?= $signUpError ?>
            </div>
        <?php endif; ?>

        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password"
                    required>
                <label for="confirmPassword">Confirm Password</label>
            </div>

            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>

        <div class="links">
            <p>Already have an account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <!-- Sign In Form -->
    <div class="container" id="signIn" style="display: <?= !empty($signUpError) ? 'none' : 'block' ?>;">
        <h1 class="form-title">Sign In</h1>

        <?php if (!empty($signInError)) : ?>
            <div class="error-message" style="color: red; margin-bottom: 10px;">
                <?= $signInError ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['registered'])) : ?>
            <div class="error-message" style="color: green; margin-bottom: 10px;">Registration successful! Please log in.
            </div>
        <?php endif; ?>

        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="emailSignIn" placeholder="Email" required>
                <label for="emailSignIn">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="passwordSignIn" placeholder="Password" required>
                <label for="passwordSignIn">Password</label>
            </div>

            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>

        <div class="links">
            <p>Don't have an account?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>

    <script>
        document.getElementById("signUpButton").addEventListener("click", function() {
            document.getElementById("signup").style.display = "block";
            document.getElementById("signIn").style.display = "none";
        });
        document.getElementById("signInButton").addEventListener("click", function() {
            document.getElementById("signup").style.display = "none";
            document.getElementById("signIn").style.display = "block";
        });
    </script>

</body>

</html>