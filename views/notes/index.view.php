<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <?php require base_path('views/partials/head.php') ?>  
    <?php require base_path('views/partials/banner.php') ?>  

    <style>
       button {
     padding: 15px 15px;
        font-size: 30px;
        background-color: #BB4A47;
        color: white;
        border-radius: 20px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 300px;
        font-family: "Edu NSW ACT Cursive", cursive;
        font-optical-sizing: auto;
        font-style: normal;
        box-shadow: rgba(195, 157, 132, 0.8) -10px 10px;
        border: 2px solid black; 
     
}

 button:hover {
      background-color: #b10c06ff;
    }
    

  a {
     padding: 5px 15px;
        font-size: 30px;
        background-color: #BB4A47;
        color: white;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 300px;
        font-family: "Edu NSW ACT Cursive", cursive;
        font-optical-sizing: auto;
        font-style: normal;
        box-shadow: rgba(195, 157, 132, 0.8) -10px 10px;
        border: 2px solid black; 
     
}

 a:hover {
      background-color: #b10c06ff;
    }
    
    </style>
    <main>
   <center> <p style="">
    <form action="/restart" method="post">
  <button type="submit">🔄 Restart</button>
</form> <br>

  <form action="/" method="post">
  <button type="submit">Go Home</button>
</form> <br> <br>

    <a href="/notes/create"> &nbsp; Level 1 &nbsp;</a> <br> <br>

     <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 1) { ?>
    <a href="/notes/create2"> &nbsp; Level 2  &nbsp;</a> <br><br>
    <?php } ?>

    <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 2) { ?>
    <a href="/notes/create3">  &nbsp; Level 3  &nbsp;</a> <br><br>
    <?php } ?>

     <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 3) { ?>
    <a href="/notes/create4">  &nbsp; Level 4  &nbsp;</a> <br><br>
     <?php } ?>

      <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 4) { ?>
    <a href="/notes/create5">  &nbsp; Level 5  &nbsp;</a><br><br>
<?php } ?>

     <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 5) { ?>
    <a href="/notes/create6"> &nbsp; Level 6  &nbsp;</a><br><br>
<?php } ?>

     <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 6) { ?>
    <a href="/notes/create7">  &nbsp; Level 7  &nbsp;</a><br><br>
<?php } ?>

     <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 7) { ?>
    <a href="/notes/create8">&nbsp Level 8 &nbsp</a><br><br>
<?php } ?>

     <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 8) { ?>
    <a href="/notes/create9">&nbsp Level 9 &nbsp</a><br><br>
<?php } ?>

     <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 9) { ?>
    <a href="/notes/create10">&nbsp Level 10 &nbsp</a><br><br>
    <?php } ?>

     <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 10) { ?>
    <a href="/notes/create11"> &nbsp Level 11 &nbsp</a><br><br>
<?php } ?>

 <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 11) { ?>
    <a href="/notes/create12"> &nbsp Level 12 &nbsp</a><br><br>
<?php } ?>

<?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 12) { ?>
    <a> More levels coming soon....</a><br><br>
<?php } ?>


   </p>
   </center>
</main>


     <?php require base_path('views/partials/footer.php') ?>  
 