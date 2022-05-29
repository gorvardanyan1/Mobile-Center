
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../index.php">Logout</a>
        </div>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="importantMessage" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="importantMessageLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importantMessageLabel">Կարևոր է</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <p>Այստեղ դու կհանդիպես Ծանուցումներ և Հուշումներ: ՊԱՐՏԱԴԻՐ կկարդաս դրանք որպեսզի կարողանաս կատարել քո առջև դրված առաջադրանքը:</p>
        <hr>
        <h5>Մակարդակն կանցնի այն ուսանողը, որը կկատարի մինիմալ 5 առաջադրանքները</h5>
        <hr>
        <p>Երկրորդ անգամ չեմ կրկնելու: </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">Չեմ կարդա</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal">Լավ Կկարդամ</button>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    // Check if user saw the modal
    var key = 'hadModal',
        hadModal = localStorage.getItem(key);

    // Show the modal only if new user
    if (!hadModal) {
        $('#importantMessage').modal('show');
    }

    // If modal is displayed, store that in localStorage
    $('#importantMessage').on('shown.bs.modal', function () {
        localStorage.setItem(key, true);
    })
});
</script>

</body>

</html>