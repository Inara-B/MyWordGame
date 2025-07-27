<!DOCTYPE html>
<html lang="en">
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
      background-image: url(https://www.shutterstock.com/image-vector/colorful-sketch-mixed-tropical-fruits-600nw-1064059826.jpg);
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
    textarea {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 2.5rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 3rem;
      box-sizing: border-box;
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
  <div style="position: relative; min-height: 100vh;">
  <div class="center-content">
    <div class="form-container">
      <form method="POST" action="/notes/create" style="display: flex; flex-direction: column; gap: 1rem;">
        <label for="body">&#x1F914 What will you guess? &#x1F914</label>
        <textarea id="body" name="body" rows="3" required placeholder="Write your answer here..." 
       
        ><?= $_POST['body'] ?? '' ?></textarea>

      <?php if (isset($errors['body'])) : ?>
    <p style="color: red;"><?= $errors['body'] ?></p>
<?php endif; ?>



        <button type="submit">Answer!</button>
      </form>
    </div>
  </div>

  <div class="dropdown" style="position: absolute; top: 0rem; right: 20rem;">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="color: #BB4A47; font-size: 2rem;" width: 100%;>
    &nbsp &nbsp 🔍 &nbsp Hints! &nbsp 🔎 &nbsp &nbsp<span class="caret"></span>
  </button>

  <ul class="dropdown-menu">
    <!-- Hint 1 -->
    <li class="dropdown-submenu">
      <a class="test" style="color: #BB4A47;" tabindex="-1" href="#">Hint 1 <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#" style="color: #BB4A47;">4 Letters</a></li>
      </ul>
    </li>

    <!-- Hint 2 -->
    <li class="dropdown-submenu">
      <a class="test" tabindex="-1" href="#" style="color: #BB4A47;">Hint 2 <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#" style="color: #BB4A47;">Green Fuzzy Shell</a></li>
      </ul>
    </li>

    <!-- Hint 3 -->
    <li class="dropdown-submenu">
      <a class="test" tabindex="-1" href="#" style="color: #BB4A47;">Hint 3 <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#" style="color: #BB4A47;">Bird native to New Zealand</a></li>
      </ul>
    </li>

    <!-- Answer -->
    <li class="dropdown-submenu">
      <a class="test" tabindex="-1" href="#" style="color: #BB4A47;">Answer <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#" style="color: #BB4A47;">Kiwi 🥝</a></li>
      </ul>
    </li>
  </ul>
</div>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>


<img style="position: absolute; top: 2rem; right: 5rem;" src="https://200c9cdc-4618-4763-b52b-d750b95d230a-00-1c8vy51b6y04r.picard.replit.dev/fruit.png" width="400">
</body>
</html>

  
      <?php require base_path('views/partials/footer.php') ?>  