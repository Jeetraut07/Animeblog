<?php
include 'db.php';
if(!isset($_SESSION['id'])){
    header("Location:login.php");
    exit;
}
if($_SERVER['REQUEST_METHOD']==="POST"){
    $title=$_POST["title"];
    $name=$_POST["name"];
    $content=$_POST["content"];
    $image_name=$_FILES['image']['name'];
    $user_id=$_SESSION['id'];
    move_uploaded_file($_FILES['image']['tmp_name'],"uploads/$image_name");

    $sql=$conn->prepare("insert into anime(title,name,content,image,user_id)values(?,?,?,?,?)");
    $sql->bind_param("ssssi",$title,$name,$content,$image_name,$user_id);
    $sql->execute();
    header("Location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            <div class="container-sm p-4">
                <form method="post" enctype="multipart/form-data">
                   <div class="mb-3">
                    <label for="" class="form-label">Name:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                   </div>
                   <form method="post" enctype="multipart/form-data">
                   <div class="mb-3">
                    <label for="" class="form-label">Title:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                   </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Content:</label>
                        <textarea class="form-control" name="content" id="" rows="3"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <input type="file" name="image" id="">
                    </div>
                     <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
                </form>
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
</body>
</html>