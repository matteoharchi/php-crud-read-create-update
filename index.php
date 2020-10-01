<?php
include __DIR__ . '/partials/templates/header.php';
include __DIR__ . '/partials/home/server.php';
?>


       <div class="container">
       <!-- alert quando viene cancellata stanza, se id è vuoto fai comparire alert -->
       <?php if (!empty($_GET['roomId'])){
           $stanza_cancellata = $_GET['roomId'];?>
       <div class="alert bg-warning">
        <?php echo "hai cancellato la stanza numero $stanza_cancellata";?>
       </div>
       <?php } ?>

       <!-- table camere -->
           <table class="table table-dark">
               <thead>
                   <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Numero Stanza</th>
                       <th scope="col">Floor</th>
                       <th scope="col"></th>
                       <th scope="col"></th>
                       <th scope="col"></th>
                   </tr>
               </thead>
               <tbody>
                    <?php foreach ($results as $room) {?>
                   <tr>
                        <td><?php echo $room['id']?></td>
                        <td><?php echo $room['room_number']?></td>
                        <td><?php echo $room['floor']?></td>
                       <td> <a href="show.php?id=<?php echo $room['id']?>">VIEW</a></td>
                       <td> <a href="update.php?id=<?php echo $room['id']?>">UPDATE</a></td>
                       <td>
                           <form class="" action="partials/delete/server.php" method="post">
                               <input type="submit" name="" value="DELETE" class="btn btn-danger">
                               <input type="hidden" name="id" value="<?php echo $room['id']?>">
                           </form>
                       </td>
                   </tr>
                    <?php } ?>
               </tbody>

           </table>
       </div>
       <?php include __DIR__ .'/partials/templates/footer.php'?>

