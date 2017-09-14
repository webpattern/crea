<?php $datan = $_POST; $datas = $datan['id_del']; echo "$datas"; ?>
<?php $del_i = $data['delete_product']; ?>
<?php $Connect = mysqli_connect('localhost', 'root', '', 'auto_reg'); ?>
<?php $Query = mysqli_query($Connect, "DELETE FROM `newitems` WHERE `id` = $datas ") ; ?>