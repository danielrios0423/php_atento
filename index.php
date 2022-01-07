<?php
    include("connection.php");
    $users = "SELECT * FROM users";
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
    <div class= 'container-fluid mt-5' >
        <form class="form-inline d-flex justify-content-center" action= "insert.php" method="post">            
            <div class="d-flex justify-content-between">   
                <div class="form-group mb-2">
                    <a href="">Nombre</a>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                <input name="nombre" class="form-control" id="inputname2" placeholder="Nombre">
                </div>
            </div>
        
            <div class="d-flex justify-content-between">   
                <div class="form-group mb-2 ml-2">
                    <a href="">Email</a>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                <input name="email" class="form-control" id="inputname2" placeholder="Email">
                </div>
            </div>

            <div class="d-flex justify-content-between">   
                <div class="form-group mb-2 ml-2">
                    <a href="">Password</a>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                <input name="password" class="form-control" id="inputname2" placeholder="Password">
                </div>
            </div>

            <div class="d-flex justify-content-between ">   
                
                <button name="insert" type="submit" class="btn btn-primary mb-2">Insertar</button>
            </div>        
        </form>
        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actualizar / Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php $result = mysqli_query($conexion, $users);
                while($row = mysqli_fetch_assoc($result)){?>
                <tr>                    
                    <th ><?php echo $row["id"];?></th>                    
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["password"];?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row["id"];?>"> Editar</a>  <!-- Por la URL paso el id que quiero mostrar-->
                        <a href="delate.php?id=<?php echo $row["id"];?>">| Eliminar</a>
                    </td>

                    <?php } mysqli_free_result($resultado); ?>
                </tr>            
            </tbody>
        </table>
    </div>
    

    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>