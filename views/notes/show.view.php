<!DOCTYPE html>
<html lang="en">

  <?php require base_path('views/partials/head.php') ?>  
  <?php require base_path('views/partials/banner.php') ?>   

  <main>

<p> </p>
<!-- converts html to its html entity -->
        <p> 
        <a href ="/notes">Go back...</a>
  </p>

  <p><?= htmlspecialchars($note['body']) ?></p>
        </main>

     <?php require base_path('views/partials/footer.php') ?>
 