<?php 

include "./connection.php";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn,$sql);
    
    
    if (mysqli_num_rows($result)) {

        $row_data = mysqli_fetch_assoc($result) ;

        $pass_decode = password_verify($password,$row_data['password']) ;

        if ($pass_decode) {
        ?>
        <script>
            alert("Logged In successfully!");
            location.replace("../home.php");
        </script>
        <?php
    }

    else {
        ?>
        <script>
            alert("Email or password incorrect!");
            location.replace("../index.html");
        </script>
        <?php
    }
}

else {
    ?>
    <script>
        alert("Invalid Email");
        location.replace("../index.html");
    </script>
    <?php
}

}

?>