<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./CSS/search_popup.css">
</head>
<body class="body">

<!-- Trigger/Open The SearchFilter -->
<!-- <button id="myBtn">Search</button> -->

<!-- The SearchFilter -->
<div id="mySearchFilter" class="SearchFilter">

  <!-- SearchFilter content -->
  <div class="SearchFilter-content">
    <div class="SearchFilter-body">
        <div class="search">
            <form class="search-form" action="index.php" method="GET">
                <div class="SearchFilter-header">
                    <span class="close">&times;</span>
                    <h2>Bộ lọc tìm kiếm</h2>
                </div>
                
                <div class="LoaiXe">
                    <p>Loại xe</p>
                    <div class="radio_loaixe">
                        <input type="radio" hidden id="tatcaloai" name="LoaiXe" value="" checked>
                        <label for="tatcaloai">Tất cả</label>
                        
                        <input type="radio" hidden id="xeso" name="LoaiXe" value="1">
                        <label for="xeso">Xe số</label>
                        
                        <input type="radio" hidden id="tayga" name="LoaiXe" value="2">
                        <label for="tayga">Xe tay ga</label>
                        
                        <input type="radio" hidden id="phankhoilon" name="LoaiXe" value="3">
                        <label for="phankhoilon">Xe phân khối lớn</label>
                    </div>
                </div>

                <div class="HangXe">
                    <p>Hãng xe</p>
                    <div class="radio_hangxe">
                        <input type="radio" hidden id="tatcahang" name="HangXe" value="" checked>
                        <label for="tatcahang">Tất cả</label>
                        
                        <input type="radio" hidden id="honda" name="HangXe" value="1">
                        <label for="honda">Honda</label>
                        
                        <input type="radio" hidden id="suzuki" name="HangXe" value="2">
                        <label for="suzuki">Suzuki</label>
                        
                        <input type="radio" hidden id="yamaha" name="HangXe" value="3">
                        <label for="yamaha">Yamaha</label>
                        
                        <input type="radio" hidden id="sym" name="HangXe" value="4">
                        <label for="sym">SYM</label>
                    </div>
                </div>
                
                <div class="range">
                    <p>Khoảng giá</p>
                    <div class="price_slider">
                        <output id="out_price">10.000.000 đ</output><br>
                        <input type="range" min="10000000" max="250000000" value="10000000" step="1000000" id="in_price" name="giaban"
                            oninput="out_price.value=(value == 10000000) ? '10.000.000 đ' : '10.000.000 đ - ' + parseInt(in_price.value, 10).toLocaleString() + ' đ'"><br>
                    </div>

                    <p>Năm sản xuất</p>
                    <div class="year_slider">
                        <output id="out_year">2018</output>
                        <input type="range" min="2018" max="2022" value="2018" name="namsx" oninput="out_year.value=(value == 2018) ? value : '2018 - ' + value">
                    </div>

                    <p>Phân khối</p>
                    <div class="cc_slider">
                        <output id="out_cc">50cc</output>
                        <input type="range" min="50" max="2000" step="25" value="50" name="phankhoi" oninput="out_cc.value = (value == 50) ? '50cc' : '50cc - ' + value + 'cc'">
                    </div>
                </div>
                <div class="MauXe">
                    <p>Màu xe</p>
                    <details class="color_multiple_select">
                        <summary>Chọn màu sắc...</summary>
                        <div class="multiple-select-dropdown">
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Trắng">
                                <span class="color_content">Trắng</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Đen">
                                <span class="color_content">Đen</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Đỏ">
                                <span class="color_content">Đỏ</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Xanh">
                                <span class="color_content">Xanh</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Xám">
                                <span class="color_content">Xám</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Vàng">
                                <span class="color_content">Vàng</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Bạc">
                                <span class="color_content">Bạc</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Đồng">
                                <span class="color_content">Đồng</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Hồng">
                                <span class="color_content">Hồng</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Cam">
                                <span class="color_content">Cam</span>
                            </label>
                            <label>
                                <input type="checkbox" hidden name="MauSac[]" value="Nâu">
                                <span class="color_content">Nâu</span>
                            </label>
                        </div>
                    </details>
                </div>
                
                <div class="btnFilter">
                    <input type="submit" name="Filter" value="Lọc sản phẩm">
                </div>
                
            </form>
        </div>
    </div>
  </div>

</div>

<script src="./JS/search_popup.js"></script>

</body>
</html>
