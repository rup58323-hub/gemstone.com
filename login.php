<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    // Securely fetch username and password from POST data
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Corrected SQL query syntax (fix 'form' to 'from')
    $sql = "SELECT * FROM logex WHERE username='$uname' AND password='$password'";

    // Execute the query
    $que = mysqli_query($conn, $sql);

    // Check if there are matching rows
    if (mysqli_num_rows($que) > 0) {
        // Successful login
        echo "<script>alert('Login successful!')</script>";
        echo "<script>window.open('home.html', '_self')</script>";
    } else {
        // Invalid login
        echo "<script>alert('Invalid username or password!')</script>";
    }
}
?>
