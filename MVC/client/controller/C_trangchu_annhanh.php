<?php
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    $product = $db->get_like('sanpham', 'name', $keyword);
} else {
    $product = $db->get('sanpham', array());
}

include 'view/V_trangchu_annhanh.php';