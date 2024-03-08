<?php
    include("dbconn.php");
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];

        $sql = "INSERT INTO student(name,address,mobile) VALUES ('$name','$address','$phone')";

        try{
            mysqli_query($conn,$sql);
            header("location: index.php");
        }
        catch(mysqli_sql_exception){
            echo "Could not insert!";
        }
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container{
            margin: 5rem auto;
        }
        .card{
            height: 75vh;
            width: 75%;
        }
        form{
            width: 60%;
        }
        .form-group{
            margin-bottom: 1.5rem;
        }
        @media screen and (max-width: 768px) {
            .container{
                align-items: center;
            }
            .card{
                height: min-content;
                width: 100%;
            }
            form{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card">
            <div class="card-header text-center">
                <h1>CRUD Application</h1>
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <form action="add.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter the name">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control"
                        name="address" placeholder="Enter the address">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control"
                        name="phone" placeholder="Enter the phone">
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit" value="Add Student">
                </form>
            </div>
        </div>
    </div>
</body>
</html>