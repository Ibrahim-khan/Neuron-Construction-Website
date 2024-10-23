<div style = "margin-top: 200px; text-align:center; font-weight: bold">
<?php
//Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "construction_nce";

$conn = new mysqli($servername, $username, $password, $dbname);

//Connection Checking
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	echo "";
}

if (isset($_POST['submit'])) {
     $name=$_POST['name'];
      $email=$_POST['email'];
       $phone=$_POST['phone'];
        $subject=$_POST['subject'];
         $message=$_POST['message'];

   
        //Info Saving into Database
        
        $sql = "INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
		(Null, '$name', '$email', '$phone', '$subject', '$message')";

        if($conn->query($sql) === TRUE) {
            echo "contact successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
}

$conn->close();
?>

</div>