<?php 
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
      <a class="nav-link collapsed" style=" cursor: pointer;" href="<?php echo BASE_URL?>add"
         aria-expanded="true" aria-controls="<?php echo $category ?>">
      <i class="fa fa-plus"></i>
      <span>
     		New
      </span>

      </a>
      
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <table id="example" class="stripe row-border order-column" style="width:100%">
         <thead>
            <tr>
               <th>#</th>
               <th>Name Product</th>
               <th>Image Product</th>
               <th>Description</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Setting</th>
            </tr>
         </thead>
         <tbody>
           <?php 
              $i = 0;
              foreach ($product as $value) {
              $i+=1;
            ?>
            <tr>
                <td width="10px"><a href="<?php echo BASE_URL ?>edit?id=<?php echo $value['idProduct'] ?>" class="hover"><i class="fa fa-eye"></a></i></td> 
                <td width="200px"><?php echo $value['nameProduct'] ?></td> 
                <td width="100px"><img class="rounded"  src="<?php echo BASE_URL ?>public/uploads/imageProductAdmin/<?php echo $value['imageProduct'] ?>" style="max-width: 200px; height: 130px;"></td>
                <td width="300px"><?php echo substr($value['description'] , 0,200).'...' ?></td> 
                <td width="100px"> $<?php echo " ". $value['priceProduct'] ?></td> 
                <td width="100px" <?php if($value['quantity'] == 0) echo 'style="color: red;"' ?>><?php echo $value['quantity'] ?></td> 
                <td width="100px"><a href="<?php echo BASE_URL ?>p/delete/<?php echo $value['idProduct'] ?>" type="button" class="btn-a-X" data-mdb-ripple-color="dark">X</a></td> 
            </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
</div>

