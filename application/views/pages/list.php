<!-- DISPLAY PRODUCTS -->
<?php $count = 1;?>
<div class="container">
    <div class="container">
        <div>Add products - 
        <button class="btn_addproducts"><a href="<?php echo base_url(); ?>addproducts">Add</a>
        </div>
        <hr>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Total</th>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category</th>
                <th scope="col">Quantity</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!empty($products)) {
                        foreach($products as $product){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $count++;?></th>
                                <td><?php echo $product['product_id']?></td>
                                <td><?php echo $product['productName']?></td>
                                <td><?php echo $product['productCategory']?></td>
                                <td><?php echo $product['productPrice']?></td>
                                <td><?php echo $product['productStock']?></td>
                                <td>
                                    <a href="<?php echo base_url().'Products/editProduct/'.$product['product_id'] ?>" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url().'Products/deleteProduct/'.$product['product_id'] ?>" class="btn btn-primary">Delete</a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                            <tr>
                                <td colspan="6">Records not found </td>
                            </tr>
                        <?php }?>
            </tbody>
        </table>
        
    </div>
</div>