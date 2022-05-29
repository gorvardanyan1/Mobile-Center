<?php include './inc/header.php'; ?>
<?php include './inc/navigation.php'; ?>
<?php $typeTr = $_GET['typeTr'];?>
<h1 class="text-center"><?php echo $typeTr ?></h1>
<div class="container d-flex justify-content-between flex-wrap">
    <?php include './action.php'; ?>
    <?php
    $type = $_GET['type'];
    
    $products = select('products', $type);
    ?>
  
    <?php foreach ($products as $key => $value) : ?>
        <div class="d-flex justify-content-center mb-3" style="margin-left: 15px;">
            <div class="card" style="width: 15rem;">

                <img src="./img/<?php echo $value['img'] ?>" alt="" class="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $value['name'];
                                                        echo $value['model'] ?></h5>
                    <p class="card-text text-center"><?php echo $value['price'] ?>դր</p>
                    <a href="singlePage.php?id=<?php echo $value['id'] ?>" class="btn btn-primary" style="margin:0 auto">See more</a>
                </div>

            </div>
        </div>
    <?php endforeach ?>






</div>


<?php include './inc/footer.php'; ?>