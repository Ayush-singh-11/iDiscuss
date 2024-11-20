<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    #ques {
        min-height: 433px;
    }
    </style>

    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>


    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <!-- Carousel(Slider) code from Bootstrap -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider-1.jpg" height="500" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-2.jpg" height="500" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-3.jpg" height="500" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Category container starts here -->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">iDiscuss - Browse Categories</h2>
        <div class="row my-4">

            <!-- Fetch all the categories -->
            <?php
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);

            // card code starts here.
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['category_id'];
                $cat = $row['category_name'];
                $desc = $row['category_description'];

                echo '
                        <div class="col-md-4 my-2">
                            <div class="card" style="width: 18rem;">
                                <img src="img/card-'.$id.'.jpg" class="card-img-top" height="190" alt="image for '.$cat.' category!">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><a href="threadlist.php?catid='.$id.'">'.$cat.'</a></h5>
                                    <p class="card-text text-center">'.substr($desc,0,50).'...</p>
                                    <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Threads</a>
                                </div>
                            </div>
                        </div>
                     '; 
            }
            ?>


        </div>

    </div>




    <?php include 'partials/_footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>