<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
    $uname=$_POST['uname'];
    $phno=$_POST['pnumber'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    if(empty($uname)){
        echo "<script>alert('Username cannot be empty')</script>";
    }
    else if(empty($phno)){
        echo "<script>alert('Phone number cannot be empty')</script>";
    }
     else if(empty($age)||$age<0){
        echo "<script>alert('Please enter your age')</script>";
    }
    else if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Please enter a valid email')</script>";
    }
    else if(empty($pass)){
        echo "<script>alert('Password cannot be empty')</script>";
    }
    else if($pass!=$cpass){
        echo "<script>alert('Passwords do not match')</script>";
    }
    else{
        $passc=password_hash($pass,PASSWORD_DEFAULT);
        $sql=$conn->prepare("insert into users (username,phone_no,age,email,password) values(?,?,?,?,?)");
        $sql->bind_param("ssiss",$uname,$phno,$age,$email,$passc);
        if($sql->execute()){
            header("Location:login.php");
        }
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>REGISTER</title>
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
            <h2><center>Register Here</center></h2>
            <div class="container p-4">
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
                    <label for="" class="form-label">Phone No:</label>
                    <input
                        type="tel"
                        class="form-control"
                        name="pnumber"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Age:</label>
                    <input
                        type="number"
                        class="form-control"
                        name="age"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="text"
                        class="form-control"
                        name="pass"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input
                        type="text"
                        class="form-control"
                        name="cpass"
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
                </button>
                <p>Already Registered!|<a href="login.php">Login</a></p></center>
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