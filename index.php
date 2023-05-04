<?php include('inc/header.php'); ?>
<div class="container">
    <a href="create.php" class="btn btn-primary">
        <i class="fa fa-user-plus" aria-hidden="true"></i>
    Add User </a>
    <form class="form-horizontal" action="index.php" method="POST">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Surname</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include ('db.php');
                                $query = "SELECT*FROM tbl_user";
                                $reselt = mysqli_query($connection,$query) or die ('error');
                                
                                if (mysqli_num_rows($reselt)>0) {
                                    while ($row=mysqli_fetch_assoc($reselt)) {
                                        $id=$row['id'];
                                        $name=$row['name'];
                                        $surname=$row['surname'];
                                        $mobile=$row['mobile'];
                                        $type=$row['type'];
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $id;?></th> 
                                            <td><?php echo $name;?></td>
                                            <td><?php echo $surname;?></td>
                                            <td><?php echo $mobile?></td>
                                            <td><?php echo $type ?></td>
                                            <td> 
                                                <a href="read.php?id=<?php echo $id;?>" class="btn btn-success btn-sm">
                                                <i class="fas fa-eye"></i> View </a>

                                                <a href="update.php?id=<?php echo $id;?>" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i> Edit </a>

                                                <a href="delete.php?id=<?php echo $id;?>" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Delete </a> 
                                            </td>
                                        </tr>
                                        <?php 

                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </form>
</div>
<?php include('inc/footer.php'); ?>