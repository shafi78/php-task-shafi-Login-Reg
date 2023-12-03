<?php
include "./connection.php" ;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_password = $_POST['password'];
    $hash_password = password_hash($user_password,PASSWORD_DEFAULT);
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "insert into users(name,email,password,address,phone) values('$name','$email','$hash_password','$address','$phone')";

    $result = mysqli_query($conn,$sql);

    if ($result) {
        ?>
        <script>
            alert("Data inserted successfully");
            location.replace("../index.html");
        </script>
        <?php
    }

    else {
        ?>
        <script>
            alert("Something went wrong. Please try again!");
            location.replace("../reg.html");
        </script>
        <?php
    }
}

?>