<?php

require 'config/constants.php';


$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;

unset($_SESSION['signup-data']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog APP PHP & MYSQL</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

    <section class="form_section">
        <div class="container form_section-container">
            <h2>Sign Up</h2>
            <?php if (isset($_SESSION['signup'])) : ?>
                <div class="alert_message error">
                    <p>
                   <?= $_SESSION['signup'];
                    unset($_SESSION['signup']);
                        ?>
                    </p>
                </div>
            <?php endif ?>

            <form action="<?= ROOT_URL ?>signup_logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
                <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
                <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
                <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
                <input type="password" name="createpassword"  placeholder="Create Password">
                <input type="password" name="confirmpassword"  placeholder="Confirm Password">
                <div class="form_control">
                    <label for="avatar">User Avatar</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <button type="submit" name="submit" class="btn">Sign Up</button>
                <small>Already have an account?
                    <a href="<?= ROOT_URL ?>signin.php">Sign In</a></small>
            </form>
        </div>
    </section>


</body>

</html>