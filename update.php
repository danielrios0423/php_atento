<?php
    include("connection.php");
    $id = $_GET['id'];
    $users = "SELECT * FROM users WHERE id = '$id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Formulario</title>
</head>

<body>

<form class="form-inline d-flex justify-content-center" action= "update_post.php" method="post">  
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php $result = mysqli_query($conexion, $users);
            while($row = mysqli_fetch_assoc($result)){?>
            <tr>               
                <th>
                    <input type="text" class="table" value="<?php echo $row["name"];?>" name="name">
                </th>
                <th>
                    <input type="text" class="table" value="<?php echo $row["email"];?>" name="email">
                </th>
                <th>
                    <input type="text" class="table" value="<?php echo $row["password"];?>" name="password">
                    <div class="d-flex justify-content-end ">                      
                        <button name="update" type="submit" class="btn btn-primary mb-2">Actualizar</button>
                        <input type="hidden" class="table" value="<?php echo $row["id"];?>" name="id">
                    </div>   
                </th>

                <?php } mysqli_free_result($resultado); ?>
                
            </tr>            
        </tbody>
    </table>
</form>


</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>