<?php 

include "process2.php";
?>
<?php
    if(isset($_SESSION['message'])):?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>Update|Dave</title>
</head>
<body>
	
<center>
		<h2>Data Update Form</h2>
		<form action="update.php" method="post">
		  <fieldset>
		    <legend>Personal information:</legend>
		   <label for="firstname">First name:</label>
		   <input type="hidden" name="id" value="<?php echo $id; ?>"> 
		    <br>
		    <input type="text" name="firstName" value="<?php echo $firstname; ?>">
		    <br>
		    <label for="lastname">Last name:</label> <br>
		    <input type="text" name="lastName" value="<?php echo $lastname; ?>">
		    <br>
		    <label for="address">Address:</label>
			 <br>
		    <input type="text" name="address" value="<?php echo $address; ?>">
		    <br>
		    <label for="gender">Gender:</label>
			<br>
			<br>
		    <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male
		    <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female
		    <br><br>
			
		  </fieldset>
	
		<div class="col-auto">

			
			<?php 
                if ($update == true):
            ?>
		    <button type="submit" class="btn btn-primary mb-3" value="update"  name="update"> Update </button>
			<?php endif;?>
			</form>
			</div>
		<br>
		<div class="col-auto">
		<form action="view.php">
    <button type="submit" class="btn btn-primary mb-3">View All Data</button>
  </div>


		</center>

</body>
</html>


	






