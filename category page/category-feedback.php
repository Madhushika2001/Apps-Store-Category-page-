<?php require('category-feedback.php'); ?>

<?php


//connect to database
     $connection = mysqli_connect('localhost' , 'root' , '' , 'category-feedback');


//check connection
     if (mysqli_connect_error())
        {
          die('database connection failed'. mysqli_connect_error());
        }

     else 
       {
         echo 'connection successfully';
       }


//catch data
     $Name = $_POST['nm'];
     $Message = $_POST['msg'];


//insert data
     $sql = "insert into category_feedback (Name,Message) values ('$Name','$Message')";


	 
//check data inserted
     if ($connection = query($sql)== TRUE)
        {
	  echo 'new record inserted';
	}
     else 
        {
	  echo 'error'.$sql."<br>".$connection = error;
        }

		  
     $connection = close();

	 
?>
<?php mysqli_close ($connetion); ?>