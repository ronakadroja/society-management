    <?php
    
    include "dbconn.php";
    if(isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $message = mysqli_real_escape_string($conn,$_POST['msg']);
        $sql = "insert into contactus(email,message) values('$email','$message')";
        $run = mysqli_query($conn,$sql);
        if($run)
        {
            
            header("location:index.php");
        }
        else
        {
            echo "<script>alert('Sorry! Your feedback is not posted.');</script>";
        }
       
    }
    ?>
