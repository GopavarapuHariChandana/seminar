<?php
include('connection/db.php');
    $Company=$_POST['Company'];
    $Description=$_POST['Description'];
    

    $query=mysqli_query($conn,"insert into company(companyname,des)values('$Company','$Description')");
    var_dump($query);
    if($query){
        echo "<div class='alert alert-success'>Data has been successfully inserted</div>";
    }else{
        echo "<div class='alert alert-danger'>some error please try again</div>";
    }
?>