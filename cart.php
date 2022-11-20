<div class="container">
    <div class="bg-dark">
        <h3 class="text-center">Cart</h3>
    </div>
    <div >
        <table class="table table-striped">
        <thead>
                <tr>
                    <th>Tên</th>
                    <th>Hình</th>
                    <th>Số lượng</th>
                    <th>Tổng giá</th>
                    <th>Xóa</th>
                    <th colspan="2">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>xe 1</td>
                    <td>
                        <img style="width:80px; height: 80px; object-fit: contain;" src="./Asset/Picture/logo.jpg" alt="">
                    </td>
                    
                    <td><input type="text" name="qty" class="form-input w-50"></td>
                  
                    <td><?php echo"200/-"?></td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                    
                    <td>
                        <input type="submit" value="Update" name="update_cart" class="bg-info p-2 border-0 my-2 px-2">
                        <input type="submit" value="Remove" name="remove_cart" class="bg-info p-2 border-0">

                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex">
            <h4 class="px-3">Tổng: <strong class="text-info"><?php echo "giá????" ?>/-</strong></h4>
           
            <a href="#"><button class="bg-info p-2 border-0 mx-4">Continue Shopping</button></a>
            <a href="#"><button class="bg-info p-2 border-0">Checkout</button></a>
            
        </div>
    </div>
</div>