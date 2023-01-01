<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>
<?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        
        $myquery="SELECT * FROM `students` where `id`='$id'";
        $myresult=mysqli_query($connection,$myquery);
        if(!$myresult){
        die("query Failed".mysqli_error());
        }else{       
            $row=mysqli_fetch_assoc($myresult);
            #print_r($row);            
        }
    }
?>
<?php
            if(isset($_POST['update_students'])){

                if(isset($_GET['id_new'])){
                    $idnew=$_GET['id_new'];
                }
              $fname=  $_POST['f_name'];
              $lname=  $_POST['l_name'];
              $age=  $_POST['age'];

              $queryy="update `students` set `first_name`='$fname',`last_name`='$lname',`age`='$age' where `id`='$idnew'";
                $myresultt=mysqli_query($connection,$queryy);
        if(!$myresultt){
        die("query Failed".mysqli_error());
            }else{
                header('location:index.php?update_msg=You have successfully updated the data');
            }
        }
            ?>
<form action="update_page_1.php?id_new=<?php echo $id;?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']?>">
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age']?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_students" value="UPDATE"></input>
</form>

<?php include("footer.php"); ?>