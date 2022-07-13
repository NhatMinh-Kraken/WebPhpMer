<?php
    include('config.php');

    $sql_lietke_loaiphukien_1 = "SELECT * FROM loaiphukienbody ORDER BY IdLoaiPhuKienBody ASC";
    $query_lietke_loaiphukien_1 = mysqli_query($mysqli,$sql_lietke_loaiphukien_1);
    

    $sql_lietke_loaiphukien_2 = "SELECT * FROM loaiphukienbaove ORDER BY IdLoaiPhuKienBaoVe ASC";
    $query_lietke_loaiphukien_2 = mysqli_query($mysqli,$sql_lietke_loaiphukien_2);
    

    $sql_lietke_loaiphukien_3 = "SELECT * FROM loaiphukientiennghi ORDER BY IdLoaiPhuKienTienNghi ASC";
    $query_lietke_loaiphukien_3 = mysqli_query($mysqli,$sql_lietke_loaiphukien_3);
    

    $sql_lietke_loaiphukien_4 = "SELECT * FROM loaiphukientrangtri ORDER BY IdLoaiPhuKienTrangTri ASC";
    $query_lietke_loaiphukien_4 = mysqli_query($mysqli,$sql_lietke_loaiphukien_4);
    

    $sql_lietke_loaiphukien_5 = "SELECT * FROM loaiphukienmamxe ORDER BY IdLoaiPhuKienMamXe ASC";
    $query_lietke_loaiphukien_5 = mysqli_query($mysqli,$sql_lietke_loaiphukien_5);
    
?>

<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Phụ Kiện Mercesde-Benz, Chất Lượng, Uy Tín Đặt Lên Hàng Đầu
                        </h1>
                    </div>
                    <div class="sidebar sidebar-Accesory" id="sidebar">
                        <ul class="nav-item-menu">
                            <li class="nav-item menu-items nav-items">
                                <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienBody"
                                    aria-expanded="false" aria-controls="LoaiPhuKienBody">
                                    <span class="menu-icon">
                                        <i class="mdi mdi-table-large"></i>
                                    </span>
                                    <span class="menu-title">Phụ Kiện Body</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <?php
                                    while($row1 = mysqli_fetch_array($query_lietke_loaiphukien_1))
                                    {
                                ?>
                                <div class="collapse" id="LoaiPhuKienBody">
                                    <ul class="nav flex-column nav-assesory">

                                        <li class="nav-item">
                                            <?php echo $row1['TenLoaiPhuKienBody']; ?>
                                            <span class="Muc-TieuDe-trangthai-Accesory">
                                                <a href="?action=View-Type-Accesory1&idaccesory=<?php echo $row1['IdLoaiPhuKienBody'] ?>"
                                                    class="button-laithu-link-1"><i class="bi-list-ol"></i>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <?php    
                                    }
                                ?>
                            </li>
                            <div class="NganCach"></div>

                            <li class="nav-item menu-items nav-items">
                                <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienBaoVe"
                                    aria-expanded="false" aria-controls="LoaiPhuKienBaoVe">
                                    <span class="menu-icon">
                                        <i class="mdi mdi-table-large"></i>
                                    </span>
                                    <span class="menu-title">Phụ Kiện Bảo Vệ</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <?php
                                    while($row2 = mysqli_fetch_array($query_lietke_loaiphukien_2))
                                    {
                                ?>
                                <div class="collapse" id="LoaiPhuKienBaoVe">

                                    <ul class="nav flex-column nav-assesory">
                                        <li class="nav-item ">
                                            <?php echo $row2['TenLoaiPhuKienBaoVe']; ?>
                                            <span class="Muc-TieuDe-trangthai-Accesory">
                                                <a href="?action=View-Type-Accesory2&idaccesory=<?php echo $row2['IdLoaiPhuKienBaoVe'] ?>"
                                                    class="button-laithu-link-1"><i class="bi-list-ol"></i>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <?php    
                                    }
                                ?>
                            </li>


                            <div class="NganCach"></div>
                            <li class="nav-item menu-items nav-items">
                                <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienTienNghi"
                                    aria-expanded="false" aria-controls="LoaiPhuKienTienNghi">
                                    <span class="menu-icon">
                                        <i class="mdi mdi-table-large"></i>
                                    </span>
                                    <span class="menu-title">Phụ Kiện Tiện Nghi</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <?php
                                    while($row3 = mysqli_fetch_array($query_lietke_loaiphukien_3))
                                    {
                                ?>
                                <div class="collapse" id="LoaiPhuKienTienNghi">

                                    <ul class="nav flex-column nav-assesory">
                                        <li class="nav-item">
                                            <?php echo $row3['TenLoaiPhuKienTienNghi']; ?>
                                            <span class="Muc-TieuDe-trangthai-Accesory">
                                                <a href="?action=View-Type-Accesory3&idaccesory=<?php echo $row3['IdLoaiPhuKienTienNghi'] ?>"
                                                    class="button-laithu-link-1"><i class="bi-list-ol"></i></a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <?php    
                                    }
                                ?>
                            </li>

                            <div class="NganCach"></div>

                            <li class="nav-item menu-items nav-items">
                                <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienTrangTri"
                                    aria-expanded="false" aria-controls="LoaiPhuKienTrangTri">
                                    <span class="menu-icon">
                                        <i class="mdi mdi-table-large"></i>
                                    </span>
                                    <span class="menu-title">Phụ Kiện Trang Trí</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <?php
                                    while($row4 = mysqli_fetch_array($query_lietke_loaiphukien_4))
                                    {
                                ?>
                                <div class="collapse" id="LoaiPhuKienTrangTri">

                                    <ul class="nav flex-column nav-assesory">
                                        <li class="nav-item">
                                            <?php echo $row4['TenLoaiPhuKienTrangTri']; ?>
                                            <span class="Muc-TieuDe-trangthai-Accesory">
                                                <a href="?action=View-Type-Accesory4&idaccesory=<?php echo $row4['IdLoaiPhuKienTrangTri'] ?>"
                                                    class="button-laithu-link-1"><i class="bi-list-ol"></i></a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <?php    
                                    }
                                ?>
                            </li>

                            <div class="NganCach"></div>

                            <li class="nav-item menu-items nav-items">
                                <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienMamXe"
                                    aria-expanded="false" aria-controls="LoaiPhuKienMamXe">
                                    <span class="menu-icon">
                                        <i class="mdi mdi-table-large"></i>
                                    </span>
                                    <span class="menu-title">Phụ Kiện Mâm Xe</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <?php
                                    while($row5 = mysqli_fetch_array($query_lietke_loaiphukien_5))
                                    {
                                ?>
                                <div class="collapse" id="LoaiPhuKienMamXe">

                                    <ul class="nav flex-column nav-assesory">
                                        <li class="nav-item">
                                            <?php echo $row5['TenLoaiPhuKienMamXe']; ?>
                                            <span class="Muc-TieuDe-trangthai-Accesory">
                                                <a href="?action=View-Type-Accesory5&idaccesory=<?php echo $row5['IdLoaiPhuKienMamXe'] ?>"
                                                    class="button-laithu-link-1"><i class="bi-list-ol"></i></a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <?php    
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>