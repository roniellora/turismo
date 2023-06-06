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

<!-- contact process form -->
<form id='contact'>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  // Create an XML document
  $xml = new DOMDocument('1.0', 'UTF-8');
  $root = $xml->createElement('contact');
  $xml->appendChild($root);

  $nameElement = $xml->createElement('name', $name);
  $root->appendChild($nameElement);

  $emailElement = $xml->createElement('email', $email);
  $root->appendChild($emailElement);

  $commentElement = $xml->createElement('message', $comment);
  $root->appendChild($commentElement);

  // Save the XML document to a file
  $xml->save('xml/submit.xml');

  echo 'Thank you for messaging us!';
}
?>


</body>
</html>