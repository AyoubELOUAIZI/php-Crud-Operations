<?php include("dbcon.php"); ?>



<?php


    if(isset($_GET['id'])){
        $id = $_GET['id'];
    

    $myqueryyy="delete from `students` where `id` = '$id'";
    $resultee=mysqli_query($connection,$myqueryyy);

    if(!$resultee){
        die("Couldn't delete".mysqli_error());
    }else{
        header("Location:index.php?delete_msg=You have deleted the record.");
    }
}


?>