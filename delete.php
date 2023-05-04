<?php
    include('db.php');
    $user_id = $_GET['id'];
    $sql = "DELETE FROM tbl_users WHERE id=$user_id";
    $query = $connection->query($sql);
    if($query)
    {
        header('locaation: index.php');
    }
?>