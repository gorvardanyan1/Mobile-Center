<?php include 'inc/header.php'; ?>
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
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                    <?php if (isset($_POST['insert'])) : ?>
                        <?php insert('products'); ?>
                        <meta http-equiv="refresh" content="2;insert.php" />
                    <?php endif ?>
                    <h1 class="h3 mb-4 text-gray-800">Add new product</h1>
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Հուշում</h4>
                        <p>Նկարը ավելացնելու համար անհրաաժեշտ է որ այդ նկարը գտնվի ձեր կայքի img թղթապանակի մեջ և նոր իրեն upload անեք, որպեսզի այն կարողանաք ավելացնել որպես ապրանքի նկար: </p>
                        <hr>
                        <p>Եթե փորձես ինֆորմացիան ուղարկել տվյալենրի բազա դատարկ, այսինքն առանց դաշտերը լրացնելու ապա այն կավելանա տվյալերի բազա որպես դատարկություն և կայքում ապրանքը կավելանա որպես դատարկ card:</p>
                        <hr>
                        <p class="mb-0">Փորձիր անել այնպես որ եթե դաշտը որը փորձես չլրացնել և դատարկ ուղարկել ապա քո կոդը դա թույլ չտա և զգուշացնի քեզ որ տվյալ դաշտը լրացնելը պարտադիր է: Այդ պրոցեսին անվանումեն Վալիդացիա - Validation</p>
                    </div>
                    <div class="alertDiv alert alert-danger" style="display: none;">
                        Լրացրեք բոլոր դաշտերը
                    </div>
                    <form name="Iform" class="user formCl" onsubmit="return validateFormInsert()" method="POST">
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
                                <input type="text" class="form-control form-control-user inputProd" id="exampleFirstName" placeholder="Product name" name="name">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user inputProd" id="exampleLastName" placeholder="Product price" name="price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user inputProd" id="exampleModel" placeholder="Product model" name="model">
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control form-control-user inputProd" id="exampleImage" placeholder="Product image" name="img">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="info"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block submitBtn" name="insert">Add Product</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
        </div>
        <script src="formConrol.js"></script>
        <!-- End of Main Content -->
        <?php include 'inc/footer.php'; ?>