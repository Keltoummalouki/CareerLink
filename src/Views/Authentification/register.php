<?php 

    require("../../../vendor/autoload.php");

    use App\Controllers\AuthController;

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["role"]) || empty($_POST["password"])) {
        } else {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            $password = $_POST["password"];
            
            if ($role === "") {
                header ("Location : ../authentification/register.php");
            } else {
                $authController = new AuthController();
                $authController->register($name, $email, $role, $password);
            }
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/styles/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="" aling="center">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Name" name="name" require>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" require>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Password" name="password" require autocomplete="off">
                <box-icon name='lock-alt' type='solid' ></box-icon>
            </div>
            <div class="input-box">
                <select class="input-select" for="role" name="role" require>
                <option value="">Role</option>
                <option value="2">Recruiter</option>
                <option value="3">Condidate</option>
                </select>
            </div>

            <button type="submit" class="btn" name="submit-btn">Register</button>

            <div class="register-link">
                <p>
                    Already have an account?
                    <a href="./login.php">Login</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>