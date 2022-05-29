<?php include './action.php'; ?>

<?php include './inc/header.php'; ?>
<?php include './inc/navigation.php'; ?>
<?php
$id =  $_GET['id'];
$product =  selectId('products', $id);
$img = $product->img;
$name = $product->name;
$model = $product->model;
$price = $product->price;
$info = $product->info;

?>
<div class="container">
    <div class="conatiner row">
        <div class="col-md-6">
            <img style="width: 100%;" src="./img/<?php echo $img; ?>" alt="">
        </div>
        <div class="container col-md-6">
            <h6 class="text-primary" style="font-size: 14px;">Name:</h6>
            <h3 class="text-secondary"  style="font-size: 30px ;"><?php echo $name ?></h3>
            <h6 class="text-primary" style="font-size: 14px;">Model</h6>
            <h3 class="text-secondary" style="font-size: 20px ;"><?php echo $model ?></h3>
            <h6 class="text-primary" style="font-size: 14px;">Price:</h6>
            <h3 class="text-danger" style="font-size: 17px ;"><?php echo $price ?>դր</h3>
            <h6 class="text-primary" style="font-size: 14px;">Info:</h6>
            <p><?php echo $info ?></p>
        </div>
    </div>
</div>



<?php include './inc/footer.php'; ?>