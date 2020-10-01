<?php
    include __DIR__ . '/partials/templates/header.php';
?>
<div class="container">
  <form action= "partials/create/server.php" method= "post">
    <div class="form-group">
      <label for="roomNumber">Numero della Stanza:</label>
      <input type="text"  name= "roomNumber">
    </div>
    <div class="form-group">
      <label for="floor">Piano:</label>
      <input type="text"  name= "floor">
    </div>
    <div class="form-group">
      <label for="beds">Letti:</label>
      <input type="text"  name= "beds">
    </div>
    <div class="form-group">
      <input type="hidden"  name= "id">
    </div>
    <div class="edit">
      <input type="submit"  class='bg-primary'  value="Insert">
    </div>

  </form>

</div>

<?php include __DIR__ .'/partials/templates/footer.php';?>