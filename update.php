<?php
    include("connect.php");
    if(isset($_POST['btn']))
    {
        $name=$_POST['iname'];
        $email=$_POST['iemail'];
        $event_name=$_POST['imessage'];
        $id = $_GET['id'];
        $q= "update event_database.event_list  set name='$name', email='$email', 
        event_name='$event_name' where student_id=$id";
        $query=mysqli_query($con,$q);
        header('location:index.php');
    }
    else if(isset($_GET['student_id'])) 
    {
        $q = "SELECT * FROM event_database.event_list  WHERE Id='".$_GET['student_id']."'";
        $query=mysqli_query($con,$q);
        $res= mysqli_fetch_array($query);
    }
?>
<html>
<head>
    <meta http-equiv="Content-Type"
        content="text/html; charset=UTF-8">
    <title>Update Details</title>
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head> 
<body>
    <div class="container mt-5">
        <h1 class="text-white"  >Update Details </h1>
        <form method="post">
            <div class="form-group text-white">
                <label>Name</label>
                <input type="text" 
                    class="form-control" 
                    name="iname" 
                    placeholder="Your Name" 
                   
            </div>
  
            <div class="form-group">
                <label>Email </label>
                <input type="email" 
                    class="form-control" 
                    name="iemail" 
                    placeholder="Your Email" 
  
            </div>
  
            <div class="form-group">
                <label>Event Name</label>
                <select class="form-control" name="imessage">
			<input type="message" 
                    class="form-control" 
                    name="imessage" 
                    placeholder="Your feedback" 
            </div>

            <div class="form-group text-center">
                <input type="submit" value="Update" 
                    name="btn" class="btn btn-success">
            </div>
        </form>
    </div>
</body>
  
</html>
