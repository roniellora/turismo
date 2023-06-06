<?php
// start session
session_start();

// load XML file 
$xml = simplexml_load_file("xml/index.xml") or die("Error: Cannot create object");

// to handle carriage return character
$xml= simplexml_load_string(str_replace('&#13;', '',
file_get_contents('xml/index.xml')));

// function to add new blog entry 
function add_blog_entry ($xml) {
    $blog = $xml->addChild("blog");
    $blog->addChild("title", $_POST['title']);
    $blog->addChild("author", $_POST['author']); 
    $blog->addChild("date", $_POST['date']);
    $blog->addChild("content", $_POST['content']);
    $xml->asXML('xml/index.xml');
}

// function to delete blog entry
function delete_blog_entry($xml, $id) {
    unset($xml->blog[$id]); 
    $xml->asXML('xml/index.xml');
}   

//function to edit blog entry
function edit_blog_entry($xml, $id) { 
    $blog = $xml->blog[$id];
    $blog->title = $_POST['title'];
    $blog->author = $_POST['author'];
    $blog->date = $_POST['date'];
    $blog->content = $_POST['content'];
    $xml->asXML('xml/index.xml');
}

// check if form is submitted for adding or editing blog entry
if(isset($_POST['submit'])) {
    if(isset($_POST['edit'])) { 
        edit_blog_entry($xml, $_POST['edit']); 
        $_SESSION['message'] = "Blog entry edited successfully!";
    } else {
        add_blog_entry($xml);
        $_SESSION['message'] = "New blog entry added successfully!"; 
    }
    header("Location: admin.php");
    exit(); // terminate script after redirection
}

// check if delete button is clicked
if(isset($_POST['delete'])) { 
    delete_blog_entry($xml, $_POST['delete']);
    $_SESSION["message"] = "Blog entry deleted successfully!"; 
    header("Location: admin.php");
    exit(); // terminate script after redirection
}
?>

<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8"> 
    <title>Turismo Website | admin page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head> 
<body>

<!-- blog entries start -->
    <div class="container"> 
        <h1>Blog Entries</h1>

        <table>
            <h2>Add New Blog</h2> 
        <form method="POST" action="">
            <label>Title</label><br>
            <input type="text" name="title" required> <br>
            <label>Author</label><br>
            <input type="text" name="author" required><br>
            <label>Date</label> <br>
            <input type="date" name="date" required><br>
            <label>Content</label><br>
            <textarea name="content" required></textarea><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
            <theads>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($xml->blog as $blog) { ?> 
                    <tr>
                        <td><?php echo $blog->title; ?></td>
                        <td><?php echo $blog->author; ?></td>
                        <td><?php echo $blog->date; ?></td>
                        <td><?php echo $blog->content; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<!-- blog entries end -->

</body> 
</html>