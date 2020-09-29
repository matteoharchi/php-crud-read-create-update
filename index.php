<?php
include __DIR__ . '/partials/home/server.php';
include __DIR__ . '/partials/templates/header.php';
var_dump($results);
?>


    <body>
       <div class="container">
           <table>
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Numero Stanza</th>
                       <th>Floor</th>
                       <th></th>
                       <th></th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                <?php foreach($results as $room){?>
                   <tr>
                       <td><?php echo $room['id']?></td>
                       <td><?php echo $room['room_number']?></td>
                       <td><?php echo $room['floor']?></td>
                       <td> <a href="">VIEW</a></td>
                       <td> <a href="">UPDATE</a></td>
                       <td> <a href="">DELETE</a></td>
                   </tr>
               </tbody>
                <?php}?>
           </table>
       </div> 
    </body>
</html>
