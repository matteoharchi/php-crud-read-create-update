<?php
    include __DIR__ . '/partials/templates/header.php';
    include __DIR__ .'/partials/update/server.php';
?>
<div class="container">
  <form action= "partials/update/server-edit.php" method= "post">
    <div class="form-group">
      <label for="roomNumber">Numero della Stanza:</label>
      <input type="text"  name= "roomNumber" value="<?php echo $row['room_number']?>">
    </div>
    <div class="form-group">
      <label for="floor">Piano:</label>
      <input type="text"  name= "floor" value="<?php echo $row['floor']?>">
    </div>
    <div class="form-group">
      <label for="beds">Letti:</label>
      <input type="text"  name= "beds" value="<?php echo $row['beds']?>">
    </div>
    <div class="form-group">
      <input type="hidden"  name= "id" value="<?php echo $row['id']?>">
    </div>
    <div class="edit">
      <input type="submit"  class='bg-primary'  name= "beds" value="Modifica">
    </div>

  </form>

</div>

<?php include __DIR__ .'/partials/templates/footer.php';?>