<?php 
    // require 'db.php';

    // if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    //     $name = $_POST['name'];
    //     $contact_num = $_POST['contact_num'];
    //     $email = $_POST['email'];

    //     $sql = "INSERT into users(name, contact, email) VALUES ('".$name."', '".$contact_num."', '".$email."')";
    //     if ($conn->query($sql)) {
    //         echo "User added!";
    //     } else {
    //         echo "Error: " . $conn->error;
    //     }
    // }
?>

<form method="post">
    Name: <input type="text" name="name" />
    Contact Number: <input type="text" name="contact_num" />
    Email: <input type="text" name="email"/>
    <button type="submit">Add User</button>
</form>
