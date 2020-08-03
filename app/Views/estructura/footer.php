<body>
<div class="container">
    <div class="row">
    <a href="<?php echo base_url();?>/public/home/formulario" class="btn btn-primary" role="button">Nuevo</a>
    </div>
    <div class="row">


        <table  class="table">
        <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">deleted</th>
        <th scope="col">acciones</th> 
        </tr>
        <?php
        foreach($users as $user){
            echo "<tr  scope='row' >";
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['email']."</td>"; 
            echo "<td>";
            ?>
            <a href="<?php echo base_url();?>home/editar?id=<?php echo $user['id']; ?>" class="btn btn-warning" role="button">Editar</a>
            <a href="<?php echo base_url();?>home/borrar?id=<?php echo $user['id']; ?>" class="btn btn-danger" role="button">Eliminar</a>
            <?php
            echo "</td>";
            echo "</tr>";
          
        }
        ?>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>