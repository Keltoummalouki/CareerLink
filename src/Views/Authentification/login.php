<?php 

    require("../../../vendor/autoload.php");

    use App\config\DatabaseConnection;
    use App\Classes\SessionManager;
    use App\Classes\AuthManager;

    $db = new DatabaseConnection();
    $connexion = $db->connect();

    $session = new SessionManager();
    $auth = new AuthManager($session);

    $email = ''; //bach mayb9awch Undefined
    $password = '';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = isset($_POST['email']) ? trim($_POST['email']) : ''; // hna ghaytbdlo ila dakhlhom
        $password = isset($_POST['password']) ? $_POST['password'] : '';
    }
    
    $query = 'SELECT * FROM MEMBER JOIN ROLE ON role.id = member.role_id WHERE email = ? AND password = ?';
    $stmt = $connexion->prepare($query);
    
    if (!empty($email) && !empty($password)) {
        $stmt->execute([$email, $password]);
        $member = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($member) {
            $auth->login($member['id'], $member['role']);
    
            if ($member['role'] === 'Admin') {
                header('Location: ../admin/dashboard.php');
            } elseif ($member['role'] === 'Recruiter') {
                header('Location: ../recruiter/index.php');
            } else {
                header('Location: ../candidate/index.php');
            }
            exit;
        } else {
            $error = "The password or Email is incorrect.";
        }
    } else {
        $error = "Please fill in all fields.";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/styles/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Password" name="password" required autocomplete="off">
                <box-icon name='lock-alt' type='solid' ></box-icon>
            </div>
            <div class="remember-me">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forget password?</a>
            </div>

            <button type="submit" class="btn" name="submit-btn">Login</button>

            <div class="register-link">
                <p>
                    D'ont have an account? 
                    <a href="./register.php">Register</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>