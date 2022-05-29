<?php
    $Name=$_POST["Name"];
    $Source=$_POST["Source"];
    $Destination=$_POST["Destination"];
    $Date=$_POST["Date"];

    $conn = mysqli_connect('localhost','root',"",'railway reservation system') or
     die("could not connect" . mysqli_error());

	$sql = "insert into bookticket values('$Name','$Source','$Destination','$Date')";

    $userCreated = mysqli_query($conn,$sql);
	if($userCreated == true){
        mysqli_close($conn);
		echo "Successfully created account";
        header('Location:view.html');
    }
	else{
		echo "Error" . mysqli_errno();
	    mysqli_close($conn);
    }
    header("Location: WP PROJECT.html")
?>