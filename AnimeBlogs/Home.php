<?php
include 'db.php';
if(!isset($_SESSION["id"])){
    header("Location:login.php");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark bg-black p-4"
            >
                <div class="container">
                    <h4 style="color:white">Welcome...<?php echo $_SESSION["username"];?>|</h4>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" href="Home.php" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="dashboard.php" aria-current="page"
                                    >Dashboard
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                                <li class="nav-item">
                                <a class="nav-link active" href="addAnime.php" aria-current="page"
                                    >Add
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                           <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="logout.php"
                            role="button"
                            >Log Out</a
                           >
                        </form>
                    </div>
                </div>
            </nav> 
        </header>
        <main>
            <div
                class="container p-2 pt-4"width="600px" height="400px"
            >
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="First slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="1"
                        aria-label="Second slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="2"
                        aria-label="Third slide"
                    ></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img
                            src="images/img1.webp"
                            class="w-100 d-block"
                            alt="First slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="images/img2.webp"
                            class="w-100 d-block"
                            alt="Second slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="images/img3.jpg"
                            class="w-100 d-block"
                            alt="Third slide"
                        />
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> 
            </div>
            <div
                class="container"
            >
            <div class="card-group">
                <div class="card m-2">
                    <img
                        class="card-img-top"
                        src="images/card1.jpg"
                        alt="Card image cap"
                    />
                    <div class="card-body">
                        <h4 class="card-title">Anime 1</h4>
                        <p class="card-text">Want more? Click here</p>
                    </div>
                    <a
                        name=""
                        id=""
                        class="btn btn-danger"
                        href="addAnime.php"
                        role="button"
                        >Add</a
                    >  
                </div>
                <div class="card m-2">
                    <img
                        class="card-img-top"
                        src="images/card1.jpg"
                        alt="Card image cap"
                    />
                    <div class="card-body">
                        <h4 class="card-title">Anime 2</h4>
                        <p class="card-text">Want more? Click here</p>
                    </div>
                    <a
                        name=""
                        id=""
                        class="btn btn-danger"
                        href="addAnime.php"
                        role="button"
                        >Add</a
                    >
                </div>
                <div class="card m-2">
                    <img
                        class="card-img-top"
                        src="images/card1.jpg"
                        alt="Card image cap"
                    />
                    <div class="card-body">
                        <h4 class="card-title">Anime 3</h4>
                        <p class="card-text">Want more? Click here</p>
                    </div>
                    <a
                        name=""
                        id=""
                        class="btn btn-danger"
                        href="addAnime.php"
                        role="button"
                        >Add</a
                    >
                </div>  
            </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
