<?php
$server = "localhost";
$username = "root" ;
$password = "" ;
$dbname = "task" ;

$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn) {
    ?>
    <script>
        // alert("Connection success");
    </script>
    <?php
}

else {
    ?>
    <script>
        alert("Connection failed");
    </script>
    <?php
}
?>