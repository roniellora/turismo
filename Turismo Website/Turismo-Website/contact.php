<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Turismo Website| contact</title>
</head>
<body>

<!-- navbar start -->
<nav class="navbar navbar-expand-sm">
  <h1>Turismo Website</h1> 
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="tours.php">blog/tours</a>
            <li class="nav-item">
            <a class="nav-link" href="gallery.php">gallery</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contact.php">contact</a>
        </ul>
        </div>
    </div>
</nav>
<!-- navbar end -->

<!-- contact-form start -->
<form method= "POST" action="processform.php" onsubmit="return validateForm()" id='contact'>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"required>
  </div>
  <label for="comment">Comments:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>

  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
<button type="submit" class="btn btn-primary">Submit</button>
<!-- contact-form end -->

<!-- check if the form has been filled up -->
<script>
function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var comment = document.getElementById("comment").value;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }

  if (email == "") {
    alert("Email must be filled out");
    return false;
  }

  if (comment == "") {
    alert("Comment must be filled out");
    return false;
  }

  return true;
}

</form>
</body>
</html>