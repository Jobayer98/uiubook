<?php include 'header.php'?>

<?php
    include 'config.php';

    error_reporting(0);

    $results = mysqli_query( $conn, "SELECT Title,AuthorName,Price FROM buybooks");

    $titles=array();
    $authors=array();
    $prices=array();
    while ($title = mysqli_fetch_array($results)) {
        extract($title);
        array_push($titles,$Title);
        array_push($authors,$AuthorName);
        array_push($prices,$Price);
    }

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Custom CSS -->

    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <title>UIU Book Exchange And Sell</title>

</head>

    <main>
        <section>
            <div class="container alignment">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Buy Books</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="see_buy.php" class="link-color float-right">View All</a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch">
                        <div class="card">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body align-items-stretch">
                                <h3><?php echo "$titles[0]"?></h3>
                                <p>Writer : <?php echo "$authors[0]"?></p>
                                <h5 class='price'><?php echo "$prices[0]"?>tk</h5>
                                <a class="btn btn-primary buy" href="#">Buy Now</a>
                                
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch">
                        <div class="card">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body align-items-stretch">
                                <h3><?php echo "$titles[1]"?></h3>
                                <p>Writer : <?php echo "$authors[1]"?></p>
                                <h5><?php echo "$prices[1]"?>tk</h5>
                                <a class="btn btn-primary" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch">
                        <div class="card">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body align-items-stretch">
                                <h3><?php echo "$titles[2]"?></h3>
                                <p>Writer : <?php echo "$authors[2]"?></p>
                                <h5><?php echo "$prices[2]"?>tk</h5>
                                <a class="btn btn-primary" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch">
                        <div class="card">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body align-items-stretch">
                                <h3><?php echo "$titles[4]"?></h3>
                                <p>Writer : <?php echo "$authors[4]"?></p>
                                <h5><?php echo "$prices[4]"?>tk</h5>
                                <a class="btn btn-primary" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section>
        <div class="container alignment">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                        <h2>Exchange Books</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="exchange.php" class="link-color float-right">View All</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body">
                                <h3>Book title</h3>
                                <p>Writer</p>
                                <a class="btn btn-primary" href="#">Exchange</a>
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body">
                                <h3>Book title</h3>
                                <p>Writer</p>
                                <a class="btn btn-primary" href="#">Exchange</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body">
                                <h3>Book title</h3>
                                <p>Writer</p>
                                <a class="btn btn-primary" href="#">Exchange</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body">
                                <h3>Book title</h3>
                                <p>Writer</p>
                                <a class="btn btn-primary" href="#">Exchange</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- <section>
        <div class="container alignment">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Best Books</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="#" class="link-color float-right">See More</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body">
                                <h3>Book title</h3>
                                <p>Writer</p>
                                <h5>Price: 00 tk</h5>
                                <a class="btn btn-primary" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body">
                                <h3>Book title</h3>
                                <p>Writer</p>
                                <h5>Price: 00 tk</h5>
                                <a class="btn btn-primary" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body">
                                <h3>Book title</h3>
                                <p>Writer</p>
                                <h5>Type: New</h5>
                                <a class="btn btn-primary" href="#">Exchange</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=1100&q=60"  alt="Card image cap">
                            <div class="card-body">
                                <h3>Book title</h3>
                                <p>Writer</p>
                                <h5>Type: New</h5>
                                <a class="btn btn-primary" href="#">Exchange</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->
    </main>

<?php include 'footer.php'; ?>

