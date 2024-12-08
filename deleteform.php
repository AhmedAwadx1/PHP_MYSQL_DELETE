<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c2yuxvTF0iWRrP91cGz0jh9hsPF4dTEHfmJea306A5bKKGmXd4NOqHCEqg36Hn" crossorigin="anonymous">
</head>
<body>
    <?php
    $conn=mysqli_connect("localhost","root","","route_c43_one");
    if (isset($_GET['id']) ) {
        $id=$_GET['id'];
        $query="SELECT id FROM `users` WHERE id=$id" ;
        $result=mysqli_query($conn,$query);
        if (mysqli_num_rows($result)==1) {
           $user= mysqli_fetch_assoc($result);
        }else{
            echo"there is an error";
        }

        

    }
    
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="delete.php?id=<?php echo $id?>" method="get">
                    <div class="mb-3">
                        <label for="idInput" class="form-label">ID</label>
                        <input type="text" class="form-control" id="idInput" name="id" value="<?= $user['id']?>"  placeholder="Enter ID" >

                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C89scLLqNg5lcjyzRdTvhWVrH3vrQ63F9yKbXR7h44lRK98nslD1PpoIJNKtp6bqg7h" crossorigin="anonymous"></script>
</body>
</html>




