<!DOCTYPE html>
<?php
include "db.php";
$id= $_GET['id'];
//echo $id;
$sql="select * FROM todo where id='$id'";
//var_dump($sql);
$rows = $db->query($sql);
$row = $rows->fetch_assoc();
//var_dump($row);

//echo $task;
if (isset($_POST['send'])):
   // echo "in";
$task=$_POST['task'];
$sql = "update todo set name ='$task' WHERE id='$id'";
echo $sql;
$db->query($sql);
header('location:index.php');
endif;
?>
<html lang="en-us" >
<head>
    <title>Todo</title>
    <link type="text/css" href="" rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="text-center">Update Todo List</h1>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form method="post" action="" >
                <div class="form-group">
                    <label>Task Name</label>
                    <input type="text" required name="task" class="form-control" value="<?php echo $row['name']; ?>">
                </div>
                <input type="submit" name="send" class="btn btn-success">
            </form>
        </div>
    </div>
</div>

</body>
</html>