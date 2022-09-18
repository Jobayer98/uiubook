<?php include 'header.php'?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>Buy Books</title>
    <style>
        .buy {
            padding: 8px 16px;
            border-radius: 5px;
            color: #fff;
            background-color: #ff922b;
        }
        .buy:hover{
            color: #fff;
            background-color: #f68b20;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row gy-4 my-3">
            
            <?php
                include 'config.php';

                error_reporting(0);

                $query ="SELECT Title,AuthorName FROM exchangebooks WHERE Category = 'BBA' ";
                $query_run = mysqli_query($conn, $query);

                $check_result = mysqli_num_rows($query_run) > 0;

                if($check_result){
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                                <div class="card" id="custom">
                                    <img src="img/bg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php  echo $row['Title']; ?></h3>
                                        <p class="card-text">Writer : <?php echo $row['AuthorName']; ?></p>
                                        <a class="buy" href="#">Exchange</a>                                        
                                    </div>
                                </div>
                            </div>

                        <?php
                    }
                }else{
                    echo "No result found";
                }
            ?> 
        </div>
        <div class="row gy-4 my-3">
            
            <?php
                include 'config.php';

                error_reporting(0);

                $query ="SELECT Title,AuthorName FROM buybooks WHERE Category = 'BBA' ";
                $query_run = mysqli_query($conn, $query);

                $check_result = mysqli_num_rows($query_run) > 0;

                if($check_result){
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                                <div class="card" id="custom">
                                    <img src="img/bg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php  echo $row['Title']; ?></h3>
                                        <p class="card-text">Writer : <?php echo $row['AuthorName']; ?></p>
                                        <h5 class='price'><?php echo $row['Price']; ?>tk</h5>
                                        <a class="buy" href="#">Buy Now</a>                                        
                                    </div>
                                </div>
                            </div>

                        <?php
                    }
                }else{
                    echo "No result found";
                }
            ?>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>

