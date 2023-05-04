<?php
    include ('db.php');
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $mobile=$_POST['mobile'];
        $type=$_POST['type'];

        if ($name!='' && $surname!='' && $mobile!='' && $type!='' )
        {
            $sql = "INSERT INTO tbl_users (name,surname,mobile,type) VALUES ('$name','$surname','$mobile','$type')";

            $query = $connection -> query($sql);

            if ($query)
            {
                $msg = "Record saved successfully";
            }

            else
            {
                echo 'error!';
            }
        }
        else
        {
            $msg="All fields must be filled";
        }

    }

?>
<?php include('inc/header.php'); ?>
<div class="container">
    <a href="index.php" class="btn btn-primary">
    <i class="fa fa-home" aria-hidden="true"></i> Back </a>

    <h2>Add Passenger</h2>

    <forrm class="form-horizontal" method="POST" action="create.php">
        <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <label class="control-lable">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <label class="control-lable">Surname</label>
                    <input type="text" class="form-control" name="surname" placeholder="Surname">
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-lable">Mobile</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="form-group">
                <div class="col-md-6">
                    <label class="control-lebel">Type</label>
                    <select class="form-control" name="type">
                        <option value="secect">Select</option>
                        <option value="patient">patient</option>
                        <option value="hospital staff">Hospital Staff</option>
                        <option value="visitor">Visitor</option>
                    </select>
                </div>
                <div class="col-md-6"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <?php if(isset($_POST['submit'])) ?> 
                    <div class="alert alert-dismissible alert-warning">
                        <?php echo $msg; ?>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                       <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
        
       


    </forrm>
</div>

<?php include('inc/footer.php'); ?>