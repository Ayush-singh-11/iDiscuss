<?php

session_start();

echo '
    <nav class="navbar navbar-expand-lg text-light bg-dark navbar-dark" style="height: 70px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/iDiscuss">iDiscuss</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="/iDiscuss">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Top Categories
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark"   aria-labelledby="navbarDropdown">';
                        $sql = "SELECT category_name, category_id FROM `categories` LIMIT 5";
                        $result = mysqli_query($conn, $sql); 
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<li><a class="dropdown-item" href="threadlist.php?catid='. $row['category_id']. '">' . $row['category_name']. '</a></li>'; 
                        }  
                        echo '</ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="contact.php" >Contact</a>
                                </li>
                             </ul>';


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '<form class="d-flex" role="search" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                    </form>
                    <p class="text-light my-0 mx-2">Welcome ' . $_SESSION['useremail'] . ' </p>
                    <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>';
} else {
    echo '<div class="my-2">
                <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>

                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>
                </div>';
}

echo  '</div>
        </div>
    </nav>';

    
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
    echo '<div class="position-fixed w-100 top-0 start-50 translate-middle-x" style="z-index: 1050; padding: 15px;">
              <div class="alert alert-success alert-dismissible fade show text-center" role="alert" id="success-alert" style="max-width: 500px; margin: auto;">
                  <strong>Success!</strong>You can now login
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        </div>';
}