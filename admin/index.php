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
                <div class="container-fuid">
                    <div class="alert alert-primary" role="alert">

                        <h4 class="alert-heading">Ծանուցում</h4>
                        <p>Սա քո կայքի Ադմին կառավարման համակարգն է: Այստեղից դու կարողես հեշտությամբ ավելացնել քո կայք ինֆորմացիա, ինչպես նաև հետագայում փոփոխես այդ ինֆորացիան և բնականաբար ջնջել այդ ինֆորմացիան:</p>
                        <hr>
                        <p class="mb-0">Սակայն այդ ամենը իրականացնելու համար դու պետք է կոդ գրես որ այդ ամենը աշխատի :)</p>
                        <hr>
                        <p class="mb-0">Դու քո admin թղթապանակի inc թղթապանակում ունես action.php ֆայլ: (admin/inc/action.php): Այդ ֆայլի մեջ կան 3-հատ ֆունկցիաներ որոնք դատարկեն: Դրանքեն ` insert, update, delete ֆունկցիաները: Այդ ֆունկցիաների մեջ դու պետք է համապատասխան կոդ գրես որպեսզի ամեն ֆունկցիան կարողանա կատարի իր գործողությունը:</p>
                        <hr>
                        <h4 class="alert-heading">Հիշեցում</h4>
                        <p class="mb-0">insert և update ֆունկցիաները ունեն համարժեք ֆայլեր insert.php և update.php: Ամեն մի ֆայլը իրենից ներկայացնում է form որը հարցում է ուղարկում $_POST-ի միջոցով: Որպեսզի տվյալների բազա կարողանաս ուղարկես input-ների մեջ գրված ինֆորմացիան , այն պետք է ստանաս նախ քո (inset,update) ֆունկցիաների մեջ,$_POST-ի միջոցով: Կարողես բացել insert.php և update.php-ն և ուսումնասիրել նրանց թե ոնց է ինֆորմացիան փոխանցվելու:</p>
                        <hr>
                        <p class="mb-0">Նկատեք որ Delete ֆունկցիան չունի համարժեք էջ: Այն աշխատում է ըստ $_GET հարցման:</p>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type</th>
                                            <th>Img</th>
                                            <th>Name</th>
                                            <th>Model</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type</th>
                                            <th>Img</th>
                                            <th>Name</th>
                                            <th>Model</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $products = select('products'); ?>
                                        <?php foreach ($products as $key => $value) : ?>
                                            <tr>
                                                <td><?php echo $value['id'] ?></td>
                                                <td><?php echo $value['type']?></td>
                                                <td><img src="../img/<?php echo $value['img'] ?>"></td>
                                                <td><?php echo $value['name'] ?></td>
                                                <td><?php echo $value['model'] ?></td>
                                                <td><?php echo $value['price'] ?>դր</td>
                                                <td>
                                                    <a href="update.php?id=<?php echo $value['id'] ?>" class="btn btn-success btn-circle">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="?delete=<?php echo $value['id'] ?>" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <?php include 'inc/footer.php'; ?>