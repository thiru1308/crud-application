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
            width: 75%;
            min-height: 75vh;
        }
        a{
            text-decoration: none;
        }
        h1{
            text-align: center;
        }
        .scrollable-table{
            overflow-y: auto;
        }
        button{
            margin-right: 0.5rem;
        }

        @media screen and (max-width:1200px) {
            .card{
                width: 100%;
            }
            .edit{
                margin-bottom: 0.2rem;
            }
        }
        @media screen and (max-width:768px) { 
            .container{
                align-items: center;
            }
            .card{
                width: 100%;
                min-height: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                <h1>CRUD Application</h1>
            </div>
            <div class="card-body">
                <button class="btn btn-success"><a href="add.php" class="text-light">Add new student</a></button>
                <div class="scrollable-table">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("dbconn.php");
                            $sql = "SELECT * FROM student";
                            $result = mysqli_query($conn,$sql);
                            $id = 1;
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    $uid = $row["id"];
                                    $name = $row["name"];
                                    $address = $row["address"];
                                    $phone = $row["mobile"];
                        ?>
                                    <tr>
                                        <th scope="row"><?php echo $id ?></th>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $address ?></td>
                                        <td><?php echo $phone ?></td>
                                        <td>
                                            <button class="btn btn-success edit"><a href="edit.php?edit=<?php echo$uid ?>" class="text-light">Edit</a></button>
                                            <button class="btn btn-danger"><a href="delete.php?del=<?php echo$uid ?>" class="text-light">Delete</a></button>
                                        </td>
                                    </tr>
                                    <?php $id++; 
                                }
                            }
                            else{
                                echo "No data found!";
                            }
                            mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>