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
<form action="<?php echo BASE_URL ?>add/addproduct" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<div class="container">
   <table class="" border="0">
      <thead>
         <tr>
            <th colspan="3"><label for="usr">Product Name:</label><span class="required">*</span>
               <input type="text" class="form-control" id="usr" placeholder="Product name input" required name="nameProduct">
            </th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><label for="#">Price:</label>
               <input class="form-control" type=number step=0.01 placeholder="0.0" min="0.1" required name="priceProduct" />
            </td>
            <td>
               <div class="col-span-6">
                  <label for="#">Infomation:</label> 
                  <label style="margin: 0% 0px 0px 33%" for="#">Quantity:</label>
                  </br> 
                  <select id = "country" name = "infomation">
                     <option value = "1">New</option>
                     <option value = "2">Sale</option>
                     <option value = "3">Old</option>
                  </select>
                  <input class="country" type=number step=1 placeholder="0" min="1" required name="quantity" />
               </div>
            </td>
            <td rowspan="2"><img id="blah" src="https://img.lovepik.com/element/40169/3356.png_860.png" alt="your image" style="max-width: 200px; max-height:100px" /></td>
         </tr>
         <tr>
            <td>
               <label for="#">Category Product:</label> 
               </br> 
               <select class = "form-control" name = "category">
                  <?php foreach ($category as $value): ?>
                   <option value="<?php echo $value['id'] ?>"><?php echo $value['nameCategory'] ?></option>
                   <?php endforeach ?>
               </select>
            </td>
            <td><label for="#">Image:</label> 
               </br> <input type='file' onchange="readURL(this);" required name="image_product" />
            </td>
         </tr>
         <tr>
            <td colspan="3"><label for="desctiption">Desctiption Product</label>
               <textarea class="form-control" id="desctiption" rows="9" style="resize: none" placeholder="Desctiption product input" required name="desctiptionProduct"></textarea>
            </td>
         </tr>
         <tr><td colspan="3"><hr class="sidebar-divider"></td></tr>
            
         <tr><td colspan="3">
            <a href="<?php echo BASE_URL ?>p" type="button" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success">Add</button>
            <button href="#" type="reset" class="btn btn-info">Refresh</button>
         </td></tr>
      </tbody>
   </table>
</div>
</form>
 