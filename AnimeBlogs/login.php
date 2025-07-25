<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']==="POST"){
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];

    $sql=$conn->prepare("select id,password from users where username=?");
    $sql->bind_param("s",$uname);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($id,$password);

    if($sql->fetch()&& password_verify($pass,$password)){
        $_SESSION["username"]=$uname;
        $_SESSION["id"]=$id;
        header("Location:Home.php");
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
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
            <!-- place navbar here -->
        </header>
        <main>
            <h2><center>Login</center></h2>
            <div class="container">
                 <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Username:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="uname"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="pass"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <br>
                <center><button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button><small>  If not registered?|<a href="register.php">register</a></small>
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
