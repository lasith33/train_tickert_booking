<?php

require('connection.php');
    if (isset($_POST['submit'])){
        $query = "INSERT INTO `booking`(`name`, `from`, `to`, `count`, `date`, `class`) VALUES ('$_POST[name]','$_POST[from]','$_POST[to]','$_POST[count]','$_POST[date]','$_POST[class]')";
        if (mysqli_query($con, $query)) {
            echo "
            <script>
            alert('Booking successful');
            window.location.href='home.php';
            </script>
            ";
        }
    }
?>