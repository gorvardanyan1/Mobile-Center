<?php include 'db.php';

//////////////////////////////////// Select /////////////////////////////////////////////

function select($table, $id = NULL)
{
	global $db;
	if ($id != NULL) {
		$sql = "SELECT * FROM `$table` WHERE id=$id";
		$result = mysqli_query($db, $sql);
		return mysqli_fetch_object($result);
	} else {
		$sql = "SELECT * FROM `$table`";
		return mysqli_query($db, $sql);
	}
}

////////////////////////////////////// Insert ////////////////////////////////////////

function insert($table)
{
	global $db;
	// Write Code
	if (isset($_POST['insert'])) {
		$prodType = $_POST['type'];
		$prodName = $_POST['name'];
		$prodPrice = $_POST['price'];
		$prodModel = $_POST['model'];
		$prodImg = $_POST['img'];
		$prodInfo = $_POST['info'];


		$sql = "INSERT INTO `$table` (type,name,price,model,img,info) VALUES ('$prodType','$prodName','$prodPrice','$prodModel','$prodImg','$prodInfo')";


		$result = mysqli_query($db, $sql);
		if ($result) {
			echo '<div class="alert alert-success" role="alert">
			  Product is added successful
			</div>';
		} else {
			echo '<div class="alert alert-danger" role="alert">
		  Product not added, you have Error in your SQL Query
		</div>';
		}
	}
}

////////////////////////////////// Update ////////////////////////////////////////////////

function update($table, $id)
{
	global $db;
	$img = $_POST['imgold'];
	if (!empty($_POST['img'])) {
		$img = $_POST['img'];
	}
	// Write Code
	if (isset($_POST['update'])) {
		$prodType = $_POST['type'];
		$prodName = $_POST['name'];
		$prodPrice = $_POST['price'];
		$prodModel = $_POST['model'];
		// $prodImg = $_POST['img'];
		$prodInfo = $_POST['info'];

		$sql = "UPDATE `$table` SET type='$prodType' , name='$prodName' , price='$prodPrice' , model='$prodModel' , img='$img' , info='$prodInfo' WHERE id=$id";
		$result = mysqli_query($db, $sql);

		if ($result) {
			echo '<div class="alert alert-success" role="alert">
			  Product is successful updated
			</div>';
		} else {
			echo '<div class="alert alert-danger" role="alert">
		  Product not updated, you have Error in your SQL Query
		</div>';
		}
	}
}

///////////////////////////////////// Delete //////////////////////////////////////

if (isset($_GET['delete'])) {
	delete('products',$_GET['delete']);
}

function delete($table,$id){
	global $db;
	// Write Code

	$sql = "DELETE FROM `$table` WHERE id=$id";
	$result = mysqli_query($db,$sql);
	header('Location: index.php');
}
