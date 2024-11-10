<?php
$name = htmlspecialchars($_POST['name']);
$birthday = htmlspecialchars($_POST['birthday']);
$age = htmlspecialchars($_POST['age']);
$address = htmlspecialchars($_POST['address']);
$email = htmlspecialchars($_POST['email']);
$gender = htmlspecialchars($_POST['gender']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Membership Confirmation</h1>
    <p>Thank you for becoming a member!</p>
    <ul>
        <li><strong>Name:</strong> <?php echo $name; ?></li>
        <li><strong>Birthday:</strong> <?php echo $birthday; ?></li>
        <li><strong>Age:</strong> <?php echo $age; ?></li>
        <li><strong>Address:</strong> <?php echo $address; ?></li>
        <li><strong>Email:</strong> <?php echo $email; ?></li>
        <li><strong>Gender:</strong> <?php echo $gender; ?></li>
    </ul>
    <p>Your membership fee of 1000 pesos has been processed.</p>
</body>
</html>
