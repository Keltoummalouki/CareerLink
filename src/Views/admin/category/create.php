<?php 

    require("../../../../vendor/autoload.php");

    use App\Controllers\CategoryController;

    
    if(isset($_POST["submit-btn"])) {
        if(empty($_POST["name"])) {
        } else {
            $name = $_POST["name"];
            
            if ($name === "") {
                header ("Location : ../admin/dashboard.php");
            } else {
                $categoryController = new CategoryController();
                $categoryController->createCategory($name);
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
    <title>Category</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="" aling="center">
            <h1>Add Category</h1>
            <div class="input-box">
                <input type="text" placeholder="Name" name="name" require>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <button type="submit" class="btn" name="submit-btn">Add</button>
        </form>
    </div>
</body>
</html>