<?php
    include('config.php');

    $sql_lietke_loaiphukien_1 = "SELECT * FROM chitietphukien, loaiphukienbaove WHERE chitietphukien.IdLoaiPhuKienBaoVe = loaiphukienbaove.IdLoaiPhuKienBaoVe";
    $query_lietke_loaiphukien_1 = mysqli_query($mysqli,$sql_lietke_loaiphukien_1);
    
?>

<div class="main-content-wrap">

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
                            <a class="nav-link nav-link-bg" data-toggle="collapse" href="#LoaiPhuKienBaoVe"
                                aria-expanded="false" aria-controls="LoaiPhuKienBaoVe">
                                <span class="menu-icon">
                                    <i class="mdi mdi-table-large"></i>
                                </span>
                                <span class="menu-title">Phụ Kiện Bảo Vệ</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <?php
                                    while($row1 = mysqli_fetch_array($query_lietke_loaiphukien_1))
                                    {
                                ?>
                            <div class="collapse" id="LoaiPhuKienBaoVe">
                                <div class="container">
                                    <div class="row">
                                        <ul class="nav flex-column nav-assesory">
                                            <li class="nav-item nav-item-namee">
                                                <div class="nav-item-name1">
                                                    <?php echo $row1['TenChiTietPhuKien']; ?>
                                                </div>
                                                
                                                <span class="Muc-TieuDe-trangthai-Accesory1">
                                                    <a href="?action=Default-Accesory2&idaccesory=<?php echo $row1['IdChiTietPhuKien'] ?>" class="button-laithu-link-01"><i class="bi bi-eye"></i></a>
                                                    <a href="?action=Edit-Accesory-BaoVe&idaccesory=<?php echo $row1['IdChiTietPhuKien'] ?>"
                                                        class="button-laithu-link-01"><i class="bi bi-pencil"></i></a>
                                                    <a href="XuLyXoaPhuKien2.php?idaccesory=<?php echo $row1['IdChiTietPhuKien'] ?>"
                                                        class="button-laithu-link-01"><i class="bi bi-trash"></i>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

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