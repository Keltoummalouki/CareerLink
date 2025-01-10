<?php 

    require("../../../../vendor/autoload.php");

    use App\Controllers\OfferController;

    
    if(isset($_POST["submit-btn"])) {
        if(empty($_POST["name"])) {
        } else {
            $name = $_POST["name"];
            $title = $_POST["title"];
            $salary = $_POST["salary"];
            $location = $_POST["location"];
            $category = $_POST["category"];
            $tag = $_POST["tag"];
            
            if ($category === "") {
                echo 'Please ...';
            } else {
                $offerController = new OfferController();
                $offerController->createOffre($name,$title,$salary,$location,$caregory,$tag);
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
    <title>Offer</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="" aling="center">
            <h1>Add Offer</h1>
            <div class="input-box">
                <input type="text" placeholder="Name" name="name" require>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Title" name="title" require>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="number" placeholder="Salary" name="salary" require >
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Location" name="location" require>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                
            </div>
            <div class="input-box">
                
            </div>
            <button type="submit" class="btn" name="submit-btn">Add</button>
        </form>
    </div>
</body>
</html>