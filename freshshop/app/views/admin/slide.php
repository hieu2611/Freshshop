<?php 
   $i = 0;
   foreach ($slide as $value) {
   $i++;
   ?>
<form action="<?php echo BASE_URL ?>slide/editSlide?id=<?php echo $value['idSlide'] ?>" method="GET" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-sm-6 col-xs-12 special-grid best-seller">
            <div class="products-single fix">
               <label for="usr">Slide <?php echo $i ?>:</label>
               <div class="box-img-hover">
                  <img src="<?php echo BASE_URL ?>public/uploads/imageSlideAdmin/<?php echo $value['image'] ?>" class="img-fluid" alt="Image" id="image<?php echo $i ?>">
                  <div class="mask-icon">
                     <ul>
                        <li><button type="submit" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-edit"></i></button></li>
                        <li><a href="#" data-toggle="collapse" data-target="#slide<?php echo $i ?>" aria-expanded="true" aria-controls="sldie" data-placement="right" title="View"><i class="fas fa-expand-arrows-alt"></i></a></li>
                     </ul>
                     <input type="file" onchange="read(this);">
                     <a class="cart" href="<?php echo BASE_URL ?>slide/delete?id=<?php echo $value['idSlide'] ?>"><i class="fas fa-minus-circle"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-8 col-sm-6 col-xs-12 special-grid best-seller">
            <div id="slide<?php echo $i ?>" class="collapse" aria-labelledby="headingUtilities"
               data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Content Image <?php echo $i ?>:</h6>
                  <textarea class="form-control" id="desctiption<?php echo $i ?>" rows="9" style="resize: none" placeholder="Content slide" required name="content"><?php echo $value['comment'] ?></textarea>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>
<?php } ?>
<form action="<?php echo BASE_URL ?>slide/addSlide" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<div class="container">
   <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12 special-grid best-seller">
         <div class="products-single fix">
            <label for="usr">Add Slide:</label>
            <div class="box-img-hover">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_pLOQDEZ0eSssxzsh7caGE1wBcsioTE3B-w&usqp=CAU" class="img-fluid" alt="Image" id="image99" name="add">
               <div class="mask-icon">
                  <ul>
                     <li><button type="submit" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-plus"></i></button></li>
                     <li><a href="<?php echo BASE_URL ?>addSlide" data-toggle="collapse" data-target="#slide" aria-expanded="true" aria-controls="sldie" data-placement="right" title="View"><i class="fas fa-expand-arrows-alt"></i></a></li>
                  </ul>
                  <input type="file" onchange="readAdd(this);" name="imageSlide">
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-8 col-sm-6 col-xs-12 special-grid best-seller">
         <div id="slide" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
               <h6 class="collapse-header">Content Image <?php echo $i ?>:</h6>
               <textarea class="form-control" id="desctiption0" rows="9" style="resize: none" placeholder="Content Image Slide" required name="content"></textarea>
            </div>
         </div>
      </div>
   </div>
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
   <?php for ($k = 0; $k <= 99; $k++) { ?>
   function read(input) {
     if (input.files && input.files[0]) {
         var reader = new FileReader();
   
         reader.onload = function (e) {
             $('#image<?php echo $k ?>')
                 .attr('src', e.target.result)
                 .width(150)
                 .height(200);
         };
   
         reader.readAsDataURL(input.files[0]);
     }
   }
   <?php } ?>
   function readAdd(input) {
     if (input.files && input.files[0]) {
         var reader = new FileReader();
   
         reader.onload = function (e) {
             $('#add')
                 .attr('src', e.target.result)
                 .width(150)
                 .height(200);
         };
   
         reader.readAsDataURL(input.files[0]);
     }
   }
</script>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<?php for ($n = 0; $n < 99; $n++) { ?>
<script type="text/javascript">
   CKEDITOR.replace( 'desctiption<?php echo $n ?>' );
</script>
<?php } ?>