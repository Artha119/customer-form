<?php
include 'header.php';
include 'mysql_connect.php';


if (isset($_POST['submit'])){
    $nic=$_POST['nic'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];

    echo $nic . "OK";
    //prepared statement
    $sql="INSERT INTO `customer` (nic,name,address,salary) 
    VALUES('$nic','$name','$address','$salary')";

    $result=mysqli_query($con,$sql);
    if ($result){
        echo "Customer was Saved!";
    }
}

?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Customer</title>
</head>
<body>
<form method="post">
    <div class="container">
        <br>
        <h4>Customer Form</h4>
        <hr>
        <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label for="nic">NIC</label>
                <input type="text" name="nic" id="nic" class="form-control" required>
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label for="nic">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="nic">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="nic">Salary</label>
                    <input type="number" name="salary" id="salary" class="form-control" required>
                </div>
            </div>

            <div class="col-12">
                <br>
                <input type="submit" class="btn btn-primary col-12" value="Save Customer"/>

                </div>
            </div>
        </div>
    </div>
</form>


</body>
</html>
