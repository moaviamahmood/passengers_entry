<?php
    include('db.php');

    if(isset($_POST['Update Passrnger']))
    {
        $id=$row['id'];
        $name=$row['name'];
        $surname=$row['surname'];
        $mobile=$row['mobile'];
        $type=$row['type'];

        if($name!='' && $surname!='' && $mobile!='' && $type!='')
        {
            $sql="UPDATE tbl_users SET username= '$name', surname='$surname', mobile='$mobile', type='$type' where id= '$user_id' ";
            $query = $connection -> query($sql);

            if($query)
            {
                header('Location:index.php');
            }

            else
            {
                echo 'Error';
            }
        }

        else
        {
            $msg="Every field must be filled";
        }

    }
?>
<?php include('inc/header.php'); ?>

    <div class="container">

    <a href="index.php" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>Back</a>
    <h2>Update Passengers Details</h2>

        <?php
            $id=$_GET['id'];
            include ('db.php');
            $query="SELECT * FROM tbl_user WHERE id=$id";
            $reselt=mysqli_query($connection,$query) or die ('error');
            if (mysqli_num_rows($reselt)>0)
            {
                while($row=mysqli_fetch_assoc($reselt))
                {
                    $id=$row['id'];
                    $name=$row['name'];
                    $surname=$row['surname'];
                    $mobile=$row['mobile'];
                    $type=$row['type'];
                }
            }

        ?>

        <form class="form-horizontal" method="POST" action="update.php">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label"></label>
                        <input type="text" class="form-control" value="<?php echo $name;?>" name="name" placeholder="name">
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label"></label>
                        <input type="text" class="form-control" value="<?php echo $surname;?>" name="surname" placeholder="surname">
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label"></label>
                        <input type="text" class="form-control" value="<?php echo $mobile;?>" name="mobile" placeholder="mobile">
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label"></label>
                        <input type="text" class="form-control" value="<?php echo $type;?>" name="type" placeholder="type">
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="submit" name="Update Passrnger" value="UPDATE PASSENGER" class="btn btn-primary">
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

        </form>
    </div>
<?php include('inc/footer.php'); ?>