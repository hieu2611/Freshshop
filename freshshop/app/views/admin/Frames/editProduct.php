<style type="text/css">
   table{
   border-collapse:collapse;
   width:100%;
   }
   th, td{
   text-align:left;
   padding:10px;
   }
   #country {
   width: 50%;
   padding: 5px 10px;
   border: 1px dashed blue;
   border-radius: 4px;
   background-color: #66CC99;
   }
   .country{
   width: 40%;
   padding: 5px 10px;
   border: 0.5px dotted green;
   border-radius: 4px;
   }
</style>

<?php 
	foreach ($product as $value) {
		
	}
 ?>
<form action="<?php echo BASE_URL ?>edit/editProduct/<?php echo $value['idProduct'] ?>" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<div class="container">
   <table class="" border="0">
      <thead>
         <tr>
            <th colspan="3"><label for="usr">Product Name:</label><span class="required">*</span>
               <input type="text" class="form-control" id="usr" placeholder="Product name input" required name="nameProduct" value="<?php echo $value['nameProduct'] ?>">
            </th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><label for="#">Price:</label>
               <input class="form-control" type=number step=0.01 placeholder="0.0" min="0.1" required name="priceProduct" value="<?php echo $value['priceProduct'] ?>" />
            </td>
            <td>
               <div class="col-span-6">
                  <label for="#">Infomation:</label> 
                  <label style="margin: 0% 0px 0px 33%" for="#">Quantity:</label>
                  </br> 
                  <select id = "country" name = "infomation">
                  	<?php if($value['information'] == 1){ ?>
                     <option selected value = "1">New</option>
                     <option value = "2">Sale</option>
                     <option value = "3">Old</option>
                 	<?php }else if($value['information'] == 2){ ?>
                     <option value = "1">New</option>
                     <option selected value = "2">Sale</option>
                     <option value = "3">Old</option>
                 	<?php }else if($value['information'] == 3){ ?>
                     <option value = "1">New</option>
                     <option value = "2">Sale</option>
                     <option selected value = "3">Old</option>
                 	<?php } ?>
                  </select>
                  <input class="country" type=number step=1 placeholder="0" min="1" required name="quantity" value="<?php echo $value['quantity'] ?>" />
               </div>
            </td>
            <td rowspan="2"><img id="blah" src="<?php echo BASE_URL ?>public/uploads/imageProductAdmin/<?php echo $value['imageProduct'] ?>" alt="your image" style="max-width: 200px; max-height:100px" /></td>
         </tr>
         <tr>
            <td>
               <label for="#">Category Product:</label> 
               </br> 
               <select class = "form-control" name = "category">
               	<?php foreach ($category as $cate) { ?>
                   <option <?php if($cate['id'] == $value['id']){ echo 'selected';} ?> value="<?php echo $cate['id'] ?>"><?php echo $cate['nameCategory'] ?></option>
               	<?php } ?>
               </select>
            </td>
            <td><label for="#">Image:</label> 
               </br> <input type='file' onchange="readURL(this);" name="image_product" />
            </td>
         </tr>
         <tr>
            <td colspan="3"><label for="desctiption">Desctiption Product</label>
               <textarea class="form-control" id="desctiption" rows="9" style="resize: none" placeholder="Desctiption product input" required name="desctiptionProduct"><?php echo $value['description'] ?></textarea>
            </td>
         </tr>
         <tr><td colspan="3"><hr class="sidebar-divider"></td></tr>
            
         <tr><td colspan="3">
            <a href="<?php echo BASE_URL ?>p" type="button" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success">Edit</button>
            <button href="#" type="reset" class="btn btn-info" disabled>Refresh</button>
         </td></tr>
      </tbody>
   </table>
</div>
</form>
 