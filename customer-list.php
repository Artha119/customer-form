<?php

include 'header.php';
include 'mysql_connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container">
    <br>
    <h4>Customer Form</h4>
    <hr>

    <table class="table table-hover">
        <thead>
        <tr>
            <td>Nic</td>
            <td>Name</td>
            <td>Address</td>
            <td>Salary</td>
            <td>Options</td>
        </tr>
        </thead>
        <tbody>
        <?php

        $sql="SELECT * FROM customer";
        $result=mysqli_query($con,$sql);
        if($result){
            while ($raw=mysqli_fetch_assoc($result)){
                $nic=$raw['nic'];
                $name=$raw['name'];
                $address=$raw['address'];
                $salary=$raw['salary'];

                echo '
                <tr>
                <td>'.$nic.'</td>
                <td>'.$name.'</td>
                <td>'.$address.'</td>
                <td>'.$salary.'</td>
                <td><a href="customer-update.php?customerNic='.$nic.'" class="btn btn-success btn-sm">Update</a>
        <a href="customer-delete.php?customerNic='.$nic.'" class="btn btn-danger btn-sm">Delete</a></td>   
                </tr>
                ';

            }
        }

        ?>



        </tbody>
    </table>

</div>
</body>
</html>
