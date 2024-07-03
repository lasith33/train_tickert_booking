<?php
require('connection.php');

#for loging

if(isset($_POST['loging']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
    $count = $res->num_rows;

    if($count == 1){
        // Redirect to b.php with email as a query parameter
        header("Location: userloging.php?email=" . urlencode($email));
        exit();
    } else {
        echo "<script>
        alert('Invalid login credentials');
        </script>";
    }
}

#for registration
if (isset($_POST['register'])) {# check same email enter user
    $user_exit_query = "SELECT * FROM `users` WHERE `email`='$_POST[email]'";
    $result = mysqli_query($con, $user_exit_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) #it will be executed if username or email is alredy taken
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['email'] == $_POST['email']) {
                echo "
                <script>
                alert('This email is already taken');
                window.location.href='home.php';
                </script>
                ";
            }
        } 
        else #insert the data into database 
        {
            $query = "INSERT INTO `users`(`name`, `nic`, `email`, `phoneno`, `gender`, `password`) VALUES ('$_POST[name]','$_POST[nic]','$_POST[email]','$_POST[phoneno]','$_POST[gender]','$_POST[password]')";
            if (mysqli_query($con, $query)) {
                echo "
                <script>
                alert('Registration successful');
                window.location.href='home.php';
                </script>
                ";
            } else {
                echo "
                <script>
                alert('Registration failed');
                window.location.href='home.php';
                </script>
                ";
            }
        }
    } else {
        echo "
             <script>
             alert('Cannot run query');
             window.location.href='home.php';
             </script>
        ";
    }
}
?>
