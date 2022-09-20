<?php

    $link = mysqli_connect("localhost", "root", "", "uiubookstore");

      if (isset($_POST['save'])) {

        $title = mysqli_real_escape_string($link, $_REQUEST['title']);
        $author = mysqli_real_escape_string($link, $_REQUEST['author']);
        $price = mysqli_real_escape_string($link, $_REQUEST['price']);
        $desc = mysqli_real_escape_string($link, $_REQUEST['desc']);
        $cate = mysqli_real_escape_string($link, $_REQUEST['cate']);
    
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./img/" . $filename;
    

        $sql = "INSERT INTO buybooks (Title, AuthorName, Price,filename, Description, Category) VALUES ('$title', '$author', '$price','$filename', '$desc', '$cate')";

        mysqli_query($link, $sql);

        mysqli_close($link);

        echo"<h3>Successfully added</h3>";
        echo "<button><a href=user.php>User</a></button>";
        
      }



// include('config.php');
// include('security.php');

// if (isset($_POST['save'])){
//     $title = $_POST['title'];
//     $author = $_POST['author'];
//     $price = $_POST['price'];
//     $desc = $_POST['desc'];
//     $cate = $_POST['cate'];
//     $img = $_FILES["uploadfile"]['title'];

//     if(file_exists("img/" . $_FILES["uploadfile"]["title"])){
//         $store = $_FILES["uploadfile"]["title"];
//         $_SESSION['status'] = "Image already exists. '.$store.'";
//         header('Location: user.php');
//     }else{
//         $query = "INSERT INTO buybooks(`Title`,`AuthorName`,`Price`,`filename`,`Description`, `Category`) VALUES ('$title','$author','$price','$img','$desc','$cate')";
//         $query_run = mysqli_query($conn, $query);

//         if($query_run){
//             move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "img/".$_FILES["uploadfile"]["title"]);
//             $_SESSION['success'] = "Book Added";
//             header('Location: user.php');
//         }else{
//             $_SESSION['success'] = "Book Not Added";
//             header('Location: user.php');
//         }
//     }
// }
?>