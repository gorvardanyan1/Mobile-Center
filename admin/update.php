<?php include 'inc/header.php'; ?>
<?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo '<meta http-equiv="refresh" content="0;index.php"/> ';
}
$id = $_GET['id'];
$product = select('products',$id);
?>
<!-- Page Wrapper -->
<div id="wrapper">

    <?php include 'inc/sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <?php include 'inc/navbar.php'; ?>

            <!-- Begin Page Content -->
            <div class="container">
                <h1 class="h3 mb-4 text-gray-800">Update product</h1>
                <div class="alert alert-warning" role="alert">
                      <h4 class="alert-heading">Հուշում</h4>
                      <p>Եթե ինֆորմացիան թարմացնել առանց նկարը փոփոխելու, ապա նկարը տվյալենրի բազայում չի փոփոխվի չնայած ինֆորմացիան թարմացնելու ժամանակ նկարի անունը չի երևում:</p>
                      <hr>
                      <p class="mb-0">Եթե ցանկանումես այնպես անել որ նկարը երևա դու քո update.php ֆայլում պետքե նկարի թեգ ավելացնես և $product->img -ի միջոցով այն պատկերես այստեղ, ինչպես արվել է մնացած ինֆորմացիայի դեպքում:</p>
                    </div>
                <?php if (isset($_POST['update'])):?>
                    <?php update('products',$product->id); ?>
                    <meta http-equiv="refresh" content="2;update.php?id=<?php echo $product->id ?>"/> 
                <?php endif ?>
                <div class="alertDiv alert alert-danger" style="display: none;">
                        Լրացրեք բոլոր դաշտերը
                    </div>
                <form name="Uform" class="user" onsubmit="return validateFormUpdate()" method="POST">
                    <div class="form-group row">
                   
                        <div class="col-sm-4 mb-3 mb-sm-0">
                                <select name="type" id="inputState" class="form-control">
                                    <option selected>Phone</option>
                                    <option>Tablet</option>
                                    <option>Smart Watch</option>
                                    <option>TV</option>
                                    <option>PC</option>
                                </select>
                            </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                            placeholder="Product name" name="name" value="<?php echo $product->name ?>">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-user" id="exampleLastName"
                            placeholder="Product price" name="price" value="<?php echo $product->price ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleModel"
                            placeholder="Product model" name="model" value="<?php echo $product->model ?>">
                        </div>
                        <div class="col-sm-6">
                            <input type="hidden" name="imgold" value="<?php echo $product->img ?>">
                            <input type="file" class="form-control form-control-user" id="exampleImage"
                            placeholder="Product price" name="img">
                        </div>
                    </div>
                    <div class="form-group">
                            <textarea class="form-control" name="info"><?php echo $product->info ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="update">Update</button>
                </form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="formConrol.js"></script>
        <!-- End of Main Content -->
        <?php include 'inc/footer.php'; ?>