</div>
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
            <a class="btn btn-primary" href="login.html">Logout</a>
         </div>
      </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'desctiption' );
</script>
<!-- Bootstrap core JavaScript-->
<script src="<?php BASE_URL ?>app/views/admin/js/jquery.min.js"></script>
<script src="<?php BASE_URL ?>app/views/admin/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php BASE_URL ?>app/views/admin/js/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php BASE_URL ?>app/views/admin/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="<?php BASE_URL ?>app/views/admin/js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?php BASE_URL ?>app/views/admin/js/chart-area-demo.js"></script>
<script src="<?php BASE_URL ?>app/views/admin/js/chart-pie-demo.js"></script>
<script src="<?php BASE_URL ?>app/views/admin/js/category.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


</body>
</html>