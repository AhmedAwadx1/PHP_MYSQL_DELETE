<?php
$conn = mysqli_connect("localhost", "root", "", "route_c43_one");
if (isset($_GET['submit'])&& isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validate the ID
    if (!is_numeric($id)) {
        $errors[] = "ID must be a number";
    } else {
      
        $query = "SELECT id FROM users WHERE id=$id";
        $res = mysqli_query($conn, $query);


        if (mysqli_num_rows($res) == 1) {
            $query = "DELETE FROM users WHERE id = $id";
            $res = mysqli_query($conn, $query);
            if ($res) {
                $_SESSION['success'] = "User deleted successfully";
                
                
            }
        } else {
            echo "Error deleting user";
        }
    }
} else {
    header("location:deleteform.php");
}
