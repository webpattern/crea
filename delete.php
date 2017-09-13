<?php
		$datan = $_POST;
		$datas = $datan['id_del'];
		echo "$datas";
		$del_i = $data['delete_product'];
		$Connect = mysqli_connect('localhost', 'root', '', 'auto_reg');
		$Query = mysqli_query($Connect, "DELETE FROM `newitems` WHERE `id` = $datas ") ;



?>