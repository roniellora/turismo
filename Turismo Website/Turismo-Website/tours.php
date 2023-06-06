<!DOCTYPE html> 
<html> 
<head>
    <meta charset="utf-8"> 
    <title>Turismo Website | tours</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head> 
<body>

<!-- nav start -->
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
<!-- nav end -->

<!-- search bar in tours -->
<main>
    <section id="tours"> 
    <h2>Tours</h2> 
    <form method="GET"> 
        <label for="search">Search:</label> 
        <input type="text" id="search" name="search"> 
        <input type="submit" value="Search">
    </form>
    <?php
        if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $xml = simplexml_load_file('xml/index.xml');
    $found = false;
    foreach ($xml->blog as $blog) {
        if (stripos($blog->title, $search) !== false) {
            echo '<div class="blog">';
            echo '<h3>' . $blog->title . '</h3>';
            echo '<p>' . $blog->content . '</p>';
            echo '<p><strong>Author:</strong> ' . $blog->author . '</p>';
            echo '<p><strong>Date:</strong> ' . $blog->date . '</p>';
            echo '</div>';
            $found = true;
        } 
}
if (!$found) {
    echo '<p>No blogs found.</p>'; 
}

// Display the search metadata
echo '<p>Showing results for search: ' . $search . '</p>';
 } else {
  $xml = simplexml_load_file('xml/index.xml');
    foreach ($xml->blog as $blog) {
        echo '<div class="blog">';
        echo '<h3>' . $blog->title . '</h3>';
        echo '<p>' . $blog->content . '</p>';
        echo '<p><strong>Author:</strong> ' . $blog->author . '</p>';
        echo '<p><strong>Date:</strong> ' . $blog->date . '</p>';
        echo '</div>';
    } 
}
    ?>

</body>
</html>