<?php
$insert = false;
if (isset($_POST['name'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if ($con->query($sql) == true) {
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="data:image/jpeg;base64,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" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to NIT Silchar US Trip form</h3>
            <p>Enter your details and submit this form to confirm your participation in the trip </p>
            <?php
            if ($insert == true) {
                echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
            }
            ?>
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="text" name="age" id="age" placeholder="Enter your Age">
                <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
                <button class="btn">Submit</button>
            </form>
    </div>
    <script src="index.js"></script>

</body>

</html>