<?php include 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        .cus-btn{
            text-decoration: none;
            color: #fff;
        }
        .cus-btn:hover{
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="mt-3 mb-5">Add Your Sell's Book</h3>
        <form class="ui form" action="add.php" method="post" enctype="multipart/form-data">
            <div class="field eight wide">
                <label>Book title</label>
                <div class="field">
                    <input type="text" name="title" placeholder="Book's name" required>
                </div>
                <label>Author Name</label>
                <div class="field">
                    <input type="text" name="author" placeholder="Author name" required>
                </div>
                <label>Price</label>
                <div class="field">
                    <input type="num" name="price" placeholder="" required>
                </div>
                <label>Descriptions</label>
                <div class="field">
                    <input type="text" name="desc" placeholder="" required>
                </div>
                <label for="">Categories</label>
                <div class="field">
                    <input type="text" name="cate" placeholder="CSE,EEE,.." required>
                </div>
                <label for="">Upload image</label>
                <div class="form-group">
                    <input class="form-control" type="file" name="uploadfile" value="" >
                </div>
                <br>
                <div class="form-group">
                    <button class="ui orange button" type="submit" name="save">Add</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>



<?php
    // include 'config.php';
    // error_reporting(0);
    
    // $msg = "";
    
    // // If upload button is clicked ...
    // if (isset($_POST['upload'])) {
    
    //     $filename = $_FILES["uploadfile"]["name"];
    //     $tempname = $_FILES["uploadfile"]["tmp_name"];
    //     $folder = "./img/" . $filename;
    
    //     $db = mysqli_connect("localhost", "root", "", "uiubookstore");
    
    //     // Get all the submitted data from the form
    //     $sql = "INSERT INTO buybooks (filename) VALUES ('$filename')";
    
    //     // Execute query
    //     mysqli_query($db, $sql);
    
    //     // Now let's move the uploaded image into the folder: image
    //     if (move_uploaded_file($tempname, $folder)) {
    //         // echo "<h3>  Image uploaded successfully!</h3>";
    //     } else {
    //         echo "<h3>  Failed to upload image!</h3>";
    //     }
    // }
?>

<?php include 'footer.php'; ?>