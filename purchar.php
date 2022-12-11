<?php
include('./function/common_function.php');
?>
<div class="p-2">
    <div class="d-flex flex-row flex-1 justify-content-around">
        <div class="w-full border text-center btn mx-1 btn-secondary flex-fill">
            <a href="user.php?purchar&type=-3">Tất cả</a>
        </div>
        <div class="w-full border text-center btn mx-1 btn-secondary flex-fill">
            <a href="user.php?purchar&type=-2">Chờ xác nhận</a>
        </div>
        <div class="w-full border text-center btn mx-1 btn-secondary flex-fill">
            <a href="user.php?purchar&type=0">Đang giao</a>
        </div>
        <div class="w-full border text-center btn mx-1 btn-secondary flex-fill">
            <a href="user.php?purchar&type=1">Đã giao</a>
        </div>
        <div class="w-full border text-center btn mx-1 btn-secondary flex-fill">
            <a href="user.php?purchar&type=-1">Đã hủy</a>
        </div>
    </div>
</div>
<div>
    <?php
        if(isset($_GET['type']))
        {
            if($_GET['type']==-3)
            {
                don_mua_tatca();
            }
            if($_GET['type']==-2)
            {
                don_mua(-2);
            }
            if($_GET['type']==0)
            {
                don_mua(0);
            }
            if($_GET['type']==1)
            {
                don_mua(1);
            }
            if($_GET['type']==-1)
            {
                don_mua(-1);
            }        
        }       
    ?>
</div>