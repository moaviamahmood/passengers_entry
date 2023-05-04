<?php include('inc/header.php'); ?>
<div class="container">
    <a href="index.php" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>Back</a>
    <h2>Passengers Details</h2>
    <?php 
        $id=$_GET['id'];
        include('db.php');
        $query="SELECT * FROM tbl_users WHERE id=$id";
        $result= mysqli_query($connection,$query) or die ('error');
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row['id'];
                $name=$row['name'];
                $surname=$row['surname'];
                $mobile=$row['mobile'];
                $type=$row['type'];
            }
        }
    ?>
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th style="width: 10%;">Name</th>
                <td style="width: 90%;"><?php echo $name ?></td>
            </tr>
            <tr>
                <th style="width: 10%;">Surame</th>
                <td style="width: 90%;"><?php echo $surname ?></td>
            </tr>
            <tr>
                <th style="width: 10%;">Mobile</th>
                <td style="width: 90%;"><?php echo $mobile ?></td>
            </tr>
            <tr>
                <th style="width: 10%;">Type</th>
                <td style="width: 90%;"><?php echo $type ?></td>
            </tr>
        </table>
    </div>
</div>

<?php include('inc/footer.php'); ?>