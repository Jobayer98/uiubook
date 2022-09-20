<?php include 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>User</title>
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
        <div class="mt-3 mb-5">
            <button class='ui orange button'><a class='cus-btn' href="sellbook.php">Sell Book</a></button>
            <button class='ui orange button'><a class='cus-btn' href="exchangebook.php">Exchange Book</a></button>
        </div>
        <div>
            <h3>Your posted sell books</h3>
        </div>
        
        <?php
            include('config.php');

            $results = mysqli_query( $conn, "SELECT * FROM buybooks WHERE user_id=011191200" )
                or die("Can not execute query");

            echo "<table class='ui celled table'> \n";
            echo "<th>Book title </th><th>Author Name</th><th>Descriptions</th><th>Delete</th>\n";

            while( $rows = mysqli_fetch_array( $results ) ) {
                extract( $rows );
                echo "<tr>";
                echo "<td class='negative'> $Title </td>";
                echo "<td class='positive'> $AuthorName </td>";
                echo "<td class='negative'> $Description</td>";
                echo "<td class='positive'> <button class='btn btn-danger'><a class='cus-btn' href='deletebook.php?id=$BookID'>Delete</a></button></td>";
            }
            echo "</table> \n";
        ?>
    </div>

    <div class="container">
        <div class="mt-5 mb-3">
            <h3>Your posted exchange books</h3>
        </div>
        
        <?php
            include('config.php');

            $results = mysqli_query( $conn, "SELECT * FROM exchangebooks WHERE user_id=011191200")
                or die("Can not execute query");

            echo "<table class='ui celled table'> \n";
            echo "<th>Book title </th><th>Author Name</th><th>Descriptions</th><th>Delete</th>\n";

            while( $rows = mysqli_fetch_array( $results ) ) {
                extract( $rows );
                echo "<tr>";
                echo "<td class='negative'> $Title </td>";
                echo "<td class='positive'> $AuthorName </td>";
                echo "<td class='negative'> $Description</td>";
                echo "<td class='positive'> <button class='btn btn-danger'><a class='cus-btn' href='deletebook2.php?id=$BookID'>Delete</a></button></td>";
            }
            echo "</table> \n";
        ?>
    </div>
</body>
</html>

<?php include 'footer.php'; ?>