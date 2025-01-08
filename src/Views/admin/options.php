<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Options</title>
    <style>
        body {
            background-color: var(--background-color4);
            max-width: 100%;
            overflow-x: hidden;
        }
        .add-btn {
            height: 35px;
            width: 100px;
            border-radius: 8px;
            background-color: #5500cb;
            color: white;
            font-size: 15px;
            font-weight: bold;
            border: none;
            cursor: pointer;

        }
        .add-btn a{
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <button class="add-btn"><a href="./offer/create.php">Add Offer</a></button>
        <button class="add-btn"><a href="./category/create.php">Add Category</a></button>
        <button class="add-btn"><a href="./tag/create.php">Add Tag</a></button>
    </div>
</body>
</html>