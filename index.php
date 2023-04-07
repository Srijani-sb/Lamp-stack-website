<?php
    include("connect.php");
        $q= "select * from event_database.event_list";
        $query=mysqli_query($con,$q);
?>
  
<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>Feedback Form</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
    <link rel="stylesheet" 
        href="./style.css">
</head>
  
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 text-white text-center">
                <h1 class="text-white"  >List</h1>
                <a class="btn btn-info"  href="add.php">Register</a>
            </div>
        </div>
  
	        
        <div class="row mt-4">
            <?php
                while ($qq=mysqli_fetch_array($query)) 
                {
            ?>
  
            <div class="col-lg-4">
                <div class="card" style="background-color:rgba(255,255,255,0.7);">
                    <div class="card-body">
                        <h5 class="card-title">
                        Name:    <?php echo $qq['name']; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2">
                        Email:  <?php echo    $qq['email']; ?>
                        </h6>
                         <h6 class="card-subtitle mb-2">
                        Feedback:    <?php echo 
                           $qq['event_name']; ?>
                        </h6>

                        <a href=
                        "delete.php?student_id=<?php echo $qq['student_id']; ?>" 
                            class="card-link btn btn-danger btn-sm ">
                            Delete
                        </a>
                        <a href=
                        "update.php?id=<?php echo $qq['student_id']; ?>" 
                            class="card-link btn btn-success btn-sm">
                            Update
                        </a>
                    </div>
                </div><br>
            </div>
            <?php
            }
            ?>

      </div>
    </div>
</body>
  
</html>
