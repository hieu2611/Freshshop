<?php 
   $category = "category";
   $new = "New category";
   $newName = "New";
   $editName = "Edit";
   $detName = "Delete";
   $count = 0;
   
   if (!empty($_GET['msg']) && $count = 0) {
     $msg = unserialize(urldecode($_GET['msg']));
     foreach ($msg as $key => $value) {
        echo "<script>
   alert('$value');
   </script>";
     }
   }
   ?>
   <style type="text/css" media="screen">
       .hover{
            cursor: pointer
       }
   </style>
<div class="card-body ">
   <div class="table-responsive" >
      <a class="nav-link collapsed" style=" cursor: pointer;" data-toggle="collapse" data-target="#<?php echo $category ?>"
         aria-expanded="true" aria-controls="<?php echo $category ?>">
      <i class="fa fa-plus"></i>
      <span>
      <?php  echo $newName; ?> 
      </span>
      </a>
      <div id="<?php echo $category ?>" class="collapse" aria-labelledby="headingUtilities"
         data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category:</h6>
            <form action="<?php echo BASE_URL ?>c/add" method="POST" accept-charset="utf-8">
               <input class="form-control" type="text" placeholder="Category product input" name="category" value="">
               <button type="submit" class="btn btn-success" style="margin: 5px 0px 0px 90%; padding: 5px 5px 5px 5px;"><?php echo $new ?></button>
            </form>
         </div>
      </div>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <table id="example" class="stripe row-border order-column" style="width:100%">
         <thead>
            <tr>
               <th>#</th>
               <th>Name Category</th>
               <th>Setting</th>
            </tr>
         </thead>
         <tbody>
            <?php 
               $i = 0;
               foreach ($data as $value) { 
               $i++;    
               ?>
            <tr>
               <form action="<?php echo BASE_URL ?>c/edit/<?php echo $value['id'] ?>" method="POST" accept-charset="utf-8">
                  <td width="3%"><?php echo $i ?></td>
                  <td><input type="text" class="form-control form-control-sm" value="<?php echo $value['nameCategory'] ?>" name="EditCategory"></td>
                  <td align="center"; width="15%">
                     <a class="collapsed collapse-horizontal hover" data-toggle="collapse" data-target="#btn-setting<?php echo $i ?>"
                        aria-expanded="true" aria-controls="btn-setting<?php echo $i ?>">
                     <i class="fa fa-cog"></i>
                     </a>
                     <div id="btn-setting<?php echo $i ?>" class="panel-collapse collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                           <button href="#" type="submit" class="btn btn-info"><?php echo $editName ?></button>
                           <a href="<?php echo BASE_URL ?>c/delete/<?php echo $value['id'] ?>" type="button" class="btn btn-danger"><?php echo $detName ?></a>
                        </div>
                     </div>
                  </td>
            </tr>
            </form>
            <?php } ?>      
         </tbody>
      </table>
   </div>
</div>