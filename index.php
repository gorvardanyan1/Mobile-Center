<?php include './inc/header.php'; ?>
<div class="container-fluid" style="padding: 0px;">
    <?php include './inc/navigation.php'; ?>

    <?php include './inc/carousel.php'; ?>

    <?php include './inc/navigationBtt.php' ?>

    <div class="container d-flex justify-content-center flex-wrap">
        <?php include './action.php'; ?>
        <?php $products = select('products')  ?>
        <?php foreach ($products as $key => $value) : ?>
            <div class="d-flex justify-content-center mb-3 productDiv" style="margin-left: 15px;">
                <div class="card border border-info rounded " style="width: 15rem;height:400px">

                    <img src="./img/<?php echo $value['img'] ?>" alt="" class="card-img-top" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center m-0" style="height:40% ;"><?php echo $value['name'];
                                                            echo $value['model'] ?></h5>
                        <p class="card-text text-center m-0" style="height:20%; color:red"><?php echo $value['price'] ?>դր</p>
                        <a href="singlePage.php?id=<?php echo $value['id'] ?>" class="btn btn-primary" style="margin:0 auto;height:35%">See more</a>
                    </div>

                </div>
            </div>
        <?php endforeach ?>
    </div>


    <?php include './inc/footer.php' ?>