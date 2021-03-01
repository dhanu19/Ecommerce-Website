
<form action="<?php echo base_url(); ?>Products/addProduct/" method="post">
    <label for="productName">Product Name:</label>
    <input type="text" name="productName" id="productName">
    <br>
    <br>
    Product Category: &nbsp; &nbsp;
    <input type="radio" id="tops" name="productCategory" value="tops">
    <label for="tops">Tops</label> &nbsp; &nbsp;
    <input type="radio" id="dress" name="productCategory" value="dress">
    <label for="dress">Dress</label> &nbsp; &nbsp;
    <input type="radio" id="jeans" name="productCategory" value="jeans">
    <label for="jeans">Jeans</label> &nbsp; &nbsp;
    <input type="radio" id="tshirt" name="productCategory" value="tshirt">
    <label for="tshirt">T-shirt</label> &nbsp; &nbsp;
    <br>
    <br>
    
    <label for="productPrice">Product Price:</label>
    <input type="number" name="productPrice" id="productPrice">
    <br>
    <br>
    <label for="productStock">Product Stock:</label>
    <input type="number" name="productStock" id="productStock">
    <br>
    <br>
    <!--
    <label for="productImage">Product Image:</label>
    <input type="image" src="<?php echo base_url(); ?>/uploads/product_imgs/img1.jpg" name="productImage" id="productImage">
    <br>
    <br>-->
    <input type = "submit" value="submit">
    
</form>


