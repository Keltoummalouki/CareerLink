<?php 

    require("../../../vendor/autoload.php");

    session_start();
    use App\Config\DatabaseConnection;
    
    $db = new DatabaseConnection();
    $connexion = $db->connect();

    if(isset($_POST['submit-btn'])) {
        if(!empty($_POST['name'])  AND !empty($_POST['email']) AND !empty($_POST['password'])){
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $password = sha1($_POST['password']);
                $insertMember = $connexion->prepare('INSERT INTO MEMBER(mamber.name,email,password,role_id) VALUES (?, ?, ?,? ');
                $insertMember->execute(array($name, $email, $password));

                $recupMember = $db->prepare('SELECT * FROM MEMBER join ROLE on role.id = member.role_id WHERE member.name = ? AND email = ? AND password = ?');
                if($recupMember) {
                    $auth->login($recupMember['id'], $recupMember['role']);
                } elseif ($recupMember['role'] === 'Recruiter') {
                    header('Location: ../recruiter/index.php');
                } else {
                    header('Location: ../candidate/index.php');
                }
                exit;
                } else {
                $error = "The password or Email is incorrect";
                }
                $recupMember->execute(array($name, $email, $password));
                if($recupMember->rowCount()>0){
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['id'] = $recupMember->fetch()['id'];

                }else{
                    echo "Your password or email is incorrect";
                }
        }else{
            echo "Please complete all fields!";
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
        <form method="POST" action="">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Name" name="name" required>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Password" name="password" required autocomplete="off">
                <box-icon name='lock-alt' type='solid' ></box-icon>
            </div>
            <div class="input-box">
                <select class="input-select" for="Role" require>
                <option value="">Role</option>
                <option value="2">Recruiter</option>
                <option value="3">Condidate</option>
                </select>
            </div>

            <button type="submit" class="btn" name="submit-btn">Login</button>

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