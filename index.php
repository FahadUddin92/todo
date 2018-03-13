<!DOCTYPE html>
<?php
include "db.php";

$sql = "SELECT * FROM  todo";
$rows=$db->query($sql);

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
            <h1 class="text-center">Todo List</h1>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success">Add task</button>
                    
                    <thead>
                    <tr>
                        <!--<th>No</th>-->
                        <th>Task</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        foreach($rows as $row){
                           // echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['name']."</td>";
                      ?>
                        <td class="col-md-1"><button type="button" class="btn btn-success pull-right "><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
                        <td class="col-md-1"><button type="button" class="btn btn-danger pull-right">
                                <a href="delete.php?id=<?php echo $row['id'];?>">Delete</button></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Task</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="add.php" >
                            <div class="form-group">
                            <label>Task Name</label>
                            <input type="text" required name="task" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>