<?php 

	if(isset($_POST['submit'])){
		// Email Validation
		if(empty($_POST['email'])){
			echo 'Email Required';
			echo '<br>';
		}else{
			echo htmlspecialchars($_POST['email']);
			echo '<br>';
		}
		// Title Validation
		if(empty($_POST['title'])){
			echo 'Title Required';
			echo '<br>';
		}else{
			echo htmlspecialchars($_POST['title']);
			echo '<br>';
		}
		// Ingredients Validation
		if(empty($_POST['ingredients'])){
			echo 'Ingredients Required';
			echo '<br>';
		}else{
			echo htmlspecialchars($_POST['ingredients']);
			echo '<br>';
		}
	}

	




	
	// Email validation
	// if(empty($_POST['email'])){
	// 	echo 'Email Required <br>';
	// } else{
	// 	echo htmlspecialchars($_POST['email']);
	// 	echo '<br>';
	// }
	// // Title validation
	// if(empty($_POST['title'])){
	// 	echo 'Title Required <br>';
	// } else{
	// 	echo htmlspecialchars($_POST['title']);
	// 	echo '<br>';
	// }
	// // Ingredients validation
	// if(empty($_POST['ingredients'])){
	// 	echo 'Ingredients Required <br>';
	// } else{
	// 	echo htmlspecialchars($_POST['ingredients']);
	// 	echo '<br>';
	// }
	
	// if(empty($_POST['email'])){
	// 	echo 'Email Required <br>';
	// } else {
	// 	$email = $_POST['email'];
	// 	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	// 		echo 'Email is not Valid <br>';
	// 	}
		// echo '<br>';
	// }
	// Title validation
	// if(empty($_POST['title'])){
	// 	echo 'Title Required <br>';
	// } else {
	// 	$title = $_POST['title'];
	// 	if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
	// 		echo 'Title must be letters and spaces only<br>';
	// 	}
	// }
	// Ingredients validation
// 	if(empty($_POST['ingredients'])){
// 		echo 'Ingredients Required <br>';
// 	} else {
// 		$ingredients = $_POST['ingredients'];
// 		if(!preg_match('/^[a-zA-Z\s]+(,\s?[a-zA-Z\s]*)*$/' , $ingredients)){
// 			echo 'Ingredients should Separated by Comma <br>';
// 		}
// 	}
// }


?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php');?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="index.php" method="POST">
			<label for="email">Your Email</label>
			<input type="text" id="email" name="email">
			<label for="title">Pizza Title</label>
			<input type="text" id="title" name="title">
			<label for="ingredients">Ingredients (comma separated)</label>
			<input type="text" id="ingredients" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php');?>

</html>




