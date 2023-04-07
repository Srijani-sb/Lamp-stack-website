<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add your Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="container mt-5 text-white ">
            <h1>Register Now</h1>
            <form class="text-white" action="add.php" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Your Name" name="iname"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Your Email"  name="iemail"/>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <input type="feedback" class="form-control" placeholder="Your feedback" name="imessage"/>
                </div>
                <div class="form-group text-center">
                    <input type="submit" value="Add" class="text-center btn btn-success" name="btn">
                </div>
            </form>
        </div>
		<?php
           if(isset($_POST["btn"]))
           {
	       include("connect.php");
               $name=$_POST['iname'];
               $email=$_POST['iemail'];
               $event_name=$_POST['imessage'];
               $q="INSERT INTO event_database.event_list(name,email,event_name) values('$name', '$email','$event_name')";

               mysqli_query($con,$q);
               header("location:index.php");
            }
         ?>
    </body> 
</html>
