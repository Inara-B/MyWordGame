<!DOCTYPE html>
<html lang="en">
    <?php 
    $username = $_SESSION['username'] ?? null;
$email = $_SESSION['email'] ?? null;
$level = $_SESSION['level'] ?? 1;
 ?>
     <?php require base_path('views/partials/head.php') ?>  

    <?php require base_path('views/partials/banner.php') ?>  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>POST Form</title>
  <style>
body {
     background-color: Linen;
}
.dropdown-submenu {
  position: relative;
  font-family: 'Segoe UI', sans-serif;
  color: #BB4A47;
   font-size: 2rem;
   
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 50%;
  margin-top: -1px;
  float: right;
  display: none;
  position: absolute;
  font-family: 'Segoe UI', sans-serif;
  color: #BB4A47;
  font-size: 2rem;
}
a {
  font-family: 'Segoe UI', sans-serif;
color: #BB4A47;
}
    body {
      background-image: url();
      min-height: 100vh;
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    .center-content {
      min-height: 50vh;
      display: flex;
      margin-left: 10rem;
    }

    .form-container {
      background: white;
      padding: 2rem 1.5rem;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 800px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: stretch;
    }

    h2 {
      margin-top: 0;
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 2.5rem;
      font-weight: 600;
      color: #BB4A47;
      font-size: 3rem;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 80%;
      padding: 0.75rem;
      margin-bottom: 2.5rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 3rem;
      box-sizing: border-box;
      margin-right: 10%;
      margin-left: 10%;
    }

    button {
      width: 100%;
      padding: 0.75rem;
      background:#BB4A47;
      color: linen;
      font-size: 3rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #8f3a37ff;
    }
  </style>
</head>
<body>

<script>
function Home() {
      window.location.href = "/";
    }
    </script>
<?php if ($username && $email): ?>
    <p style=" color: #BB4A47; font-family: Edu NSW ACT Cursive, cursive; font-size: 20px;">Welcome, <strong><?= htmlspecialchars($username) ?></strong> (<?= htmlspecialchars($email) ?>)</p>

     <button onclick="Home()">Home</button>
     
    <form method="POST" action="/logout">
        <button type="submit">Logout</button>
    </form>



<form method="POST" action="/delete_account" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
         <button type="submit" style="background: #BB4A47; color: linen; padding: 1rem; font-size: 1.5rem; border-radius: 8px; border:none; cursor:pointer; font-size: 3rem;">
             Delete My Account
         </button>
     </form>


    <h2 style="margin-top: 2rem; color: #BB4A47; font-family: Edu NSW ACT Cursive, cursive; font-size: 50px;">Your Completed Levels</h2>

     <?php if ($level >= 1): ?>
    <p style="color:green;  font-size: 2rem;">✅ You reached Level 1!</p>
<?php else: ?>
    <p style="color:red;  font-size: 2rem;">⛔ You haven't completed Level 1 yet.</p>
<?php endif; ?>

 <?php if ($level >= 2): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 2!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 2 yet.</p>
<?php endif; ?>

    <?php if ($level >= 3): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 3!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 3 yet.</p>
<?php endif; ?>

 <?php if ($level >= 4): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 4!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 4 yet.</p>
<?php endif; ?>

<?php if ($level >= 5): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 5!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 5 yet.</p>
<?php endif; ?>

<?php if ($level >= 6): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 6!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 6 yet.</p>
<?php endif; ?>

<?php if ($level >= 7): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 7!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 7 yet.</p>
<?php endif; ?>

<?php if ($level >= 8): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 8!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 8 yet.</p>
<?php endif; ?>

<?php if ($level >= 9): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 9!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 9 yet.</p>
<?php endif; ?>

<?php if ($level >= 10): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 10!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 10 yet.</p>
<?php endif; ?>

<?php if ($level >= 11): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 11!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 11 yet.</p>
<?php endif; ?>

<?php if ($level >= 12): ?>
    <p style="color:green; font-size: 2rem;">✅ You reached Level 12!</p>
<?php else: ?>
    <p style="color:red; font-size: 2rem;">⛔ You haven't completed Level 12 yet.</p>
<?php endif; ?>


<?php if (count($progress) > 0): ?>
    <h2 style="margin-top: 2rem; color: #BB4A47; font-family: 'Edu NSW ACT Cursive', cursive; font-size: 3rem; text-align: center;">
        Your Level Stats
    </h2>

    <table style="
        width: 90%;
        margin: 2rem auto;
        border-collapse: collapse;
        font-size: 2rem;
        font-family: 'Segoe UI', sans-serif;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
    ">
        <thead style="background-color: #BB4A47; color: white;">
            <tr>
                <th style="padding: 1rem; text-align: center;">Level</th>
                <th style="padding: 1rem; text-align: center;">Guesses</th>
                <th style="padding: 1rem; text-align: center;">Completed At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($progress as $row): ?>
                <tr style="background-color: #fff; text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 1rem;"><?= htmlspecialchars($row['level_name']) ?></td>
                    <td style="padding: 1rem;"><?= $row['guesses'] ?></td>
                    <td style="padding: 1rem;"><?= $row['completed_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p style="text-align: center; font-size: 2rem; color: #BB4A47;">No progress yet—go complete some levels!</p>
<?php endif; ?>

<?php else: ?>
    <h2 style="color: #BB4A47;">Login to View Your Progress</h2>
    <form method="POST" action="/login">
        <label for="username" style="margin-left: 10%;">Name:</label>
        <input type="text" name="username" required><br><br>

        <label for="email" style="margin-left: 10%;">Email:</label>
        <input type="email" name="email" required><br><br>

        <button type="submit">Login</button>
</form> <br> <br>
    </form>
<?php endif; ?>



</body>
</html>

  
      <?php require base_path('views/partials/footer.php') ?>  