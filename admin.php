<?php
    header("Content-Type: text/html; charset=utf-8");
	require "db.php";
?>

<html dir="ltr" lang="ru" class="">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/i/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/i/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/i/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/i/apple-touch-icon-precomposed.png">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
<meta name="google-site-verification" content="9lqEq-Pxx4PsSTJhtBISephTTK-wDTrvJIzTcRB6U6M">
<title>CREA</title>
<meta name="description" content="Crea">
<meta name="keywords" content="Crea">
<meta name="robots" content="all">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
<link href="favicon.png" rel="icon">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
.container { width: 1384px; margin: auto; padding-top: 1em; }
.container .ism-slider { margin-left: auto; margin-right: auto; }
</style>

<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.2.min.js"></script>

<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src=""></script>



<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
<style type="text/css"></style><style type="text/css"></style><style id="style-1-cropbar-clipper"></style>

</head>

<?php
	$datacolor = $_POST;
	if( isset($datacolor['update_color']))
	{
		$color_page = $datacolor['color'];
	}
?>
<body style="background-color: <?php echo $color_page ?>">

<div style="width: 30%;" class="col-md-4">
<?php

	$data = $_POST;
	if( isset($data['create_product']))
	{
		$errors = array();
		if( ($data['pname']) == '' )
		{
			$errors[] = 'Введите наименование товара!';
 		}
		
		if( ($data['article']) == '' )
		{
			$errors[] = 'Введите артикул!';
 		}
		
		if($data['description'] == '' )
		{
			$errors[] = 'Введите описание товара!';
 		}
		
		if($data['category']  == '')
		{
			$errors[] = 'Введите категорию товара';
 		}
		
		if($data['price']  == '')
		{
			$errors[] = 'Введите стоймость товара';
 		}
		
		if($data['volume']  == '')
		{
			$errors[] = 'Введите колличество товара';
 		}
		
		if(  empty($errors)  )
		{
			// все хорошо можно регистрировать
			$product = R::dispense('newitems');
			$product ->pname = $data['pname'];
			$product ->article = $data['article'];
			$product ->description = $data['description'];
			$product ->category = $data['category'];
			$product ->price = $data['price'];
			$product ->volume = $data['volume'];
			$product ->file_img = $data['file_img'];
			R::store($product);
				echo '<div style="color: green;">Товар успешно добавлен!</div><hr>';
 		} else
		{
			echo '<div style="color: red;">' .array_shift($errors) .'</div><hr>';
		}
		
	}
		//Удаление товаров
		if( isset( $_POST['delete_product'] ) )  
		{
			$datan = $_POST;
			$datas = $datan['id_del'];
			$del_i = $data['delete_product'];
			$Connect = mysqli_connect('localhost', 'id1136765_root', '1504940er', 'id1136765_auto_reg');
			$Query = mysqli_query($Connect, "DELETE FROM `newitems` WHERE `id` = $datas ") ;
		}
		

		
		//Изменение товаров по ID
		$data_update = $_POST;
		if( isset( $_POST['update_product'] ) )  
		{
		$errors = array();
		$item_find = R::findOne('newitems', 'id = ?', array($data_update['idu']));
			if( $item_find)
			{
				if($data_update['pnameu'] != ''){
					$item_find ->pname = $data_update['pnameu'];
					R::store( $item_find );
				}
				if($data_update['articleu'] != ''){
					$item_find ->article = $data_update['articleu'];
					R::store( $item_find );
				}
				if($data_update['descriptionu'] != ''){
					$item_find ->description = $data_update['descriptionu'];
					R::store( $item_find );
				}
				if($data_update['categoryu'] != ''){
					$item_find ->category = $data_update['categoryu'];
					R::store( $item_find );
				}
				if($data_update['priceu'] != ''){
					$item_find ->price = $data_update['priceu'];
					R::store( $item_find );
				}
				if($data_update['volumeu'] != ''){
					$item_find ->volume = $data_update['volumeu'];
					R::store( $item_find );
				}
				if($data_update['file_imgu'] != ''){
					$item_find ->file_img = $data_update['file_imgu'];
					R::store( $item_find );
				}

			}
			else
			{
				$errors[] = 'Товар с таким ID не найден!';
			}
			
			if(  ! empty($errors)  )
			{
				echo '<div style="color: red;">' .array_shift($errors) .'</div><hr>';
			}
			
		}
		

?>


<form style="width: 100%;" class="col-md-4" action="admin.php" method="POST">
<p style="font-size: 20px;"><strong>Создание товара</strong></p>
<p>
		<p><strong> Наименование товара</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;"  style="width: 35%;" type="text" name="pname" value="<?php echo @$data['pname']; ?>">
</p>

<p>
		<p><strong> Артикул</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="text" name="article" value="<?php echo @$data['article']; ?>">
</p>

<p>
		<p><strong> Описание</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="textarea" name="description" value="<?php echo @$data['description']; ?>">
</p>

<p>
		<p><strong> Категория</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="text" name="category" value="<?php echo @$data['category']; ?>">
</p>

<p>
		<p><strong> Стоймость</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="float" name="price" value="<?php echo @$data['price']; ?>">
</p>

<p>
		<p><strong> Количество</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="number" name="volume" value="<?php echo @$data['volume']; ?>">
</p>
<p>
		<p><strong> Файл</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="file" name="file_img" accept="image/*" value="<?php echo @$data['file_img']; ?>">
</p>
<p>
	<button type="submit" name="create_product">Добавить товар</button>
</p>

</form>

<hr style="border: 1px solid gray; width: 100%;">


<form style="width: 100%; " class="col-md-4" action="admin.php" method="POST">
<p style="font-size: 20px;"><strong>Изменение товара</strong></p>

<p>
		<p><strong> ID товара</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;"  style="width: 35%;" type="number" name="idu" value="<?php echo @$data_update['idu']; ?>">
</p>
<p>
		<p><strong> Наименование товара</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;"  style="width: 35%;" type="text" name="pnameu" value="<?php echo @$data_update['pnameu']; ?>">
</p>

<p>
		<p><strong> Артикул</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="text" name="articleu" value="<?php echo @$data_update['articleu']; ?>">
</p>

<p>
		<p><strong> Описание</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="textarea" name="descriptionu" value="<?php echo @$data_update['descriptionu']; ?>">
</p>

<p>
		<p><strong> Категория</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="text" name="categoryu" value="<?php echo @$data_update['categoryu']; ?>">
</p>

<p>
		<p><strong> Стоймость</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="text" name="priceu" value="<?php echo @$data_update['priceu']; ?>">
</p>

<p>
		<p><strong> Количество</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="number" name="volumeu" value="<?php echo @$data_update['volumeu']; ?>">
</p>
<p>
		<p><strong> Файл</strong></p>
		<input  style="width: 95%;  border-radius: 5px;     box-shadow: inset 0px 0px 6px black;" type="file" name="file_imgu" accept="image/*" value="<?php echo @$data['file_imgu']; ?>">
</p>

<p>
	<button type="submit" name="update_product">Изменить</button>
</p>

</form>
</div>




	

  
	<div style="width: 50%;" class="col-md-6">
	
	<table class="table_item" border="1">
	<caption><p style="font-size: 20px;"><strong>Все товары</strong></p></caption>
	<tr><th style="padding: 6px;">ID</th><th style="padding: 6px;">Название</th><th style="padding: 6px;">Артикул</th>
	<th style="padding: 6px;">Описание</th><th style="padding: 6px;">Категория</th><th style="padding: 6px;">Стоймость</th>
	<th style="padding: 6px;">Колличество</th><th style="padding: 6px;">Изображение</th><th style="padding: 6px;">Удаление</th></tr>
   
<?php
		$all_items  = R::find( 'newitems', ' id != 0 ');
		foreach($all_items as $value) {

		echo '<form action="admin.php" method="POST"> ';
		$id_item = $value['id'];
		?>
	<input  style="width: 95%; display: none;" type="number" name="id_del"  value="<?php  echo $id_item; ?>">
	<?php
		echo  '<tr><td style="padding: 6px;"> ' .$value['id'] .' </td><td style="padding: 6px;"> ' .$value['pname'] .' </td>
		<td style="padding: 6px;"> ' .$value['article'] .' </td><td style="padding: 6px;"> ' .$value['description'] .' </td>
		<td style="padding: 6px;"> ' .$value['category'] .' </td><td style="padding: 6px;"> ' .$value['price'] .' </td>
		<td style="padding: 6px;"> ' .$value['volume'] .' </td><td style="padding: 6px;"><img style="width: 100px; height: 65px;" src="product/'.$value['file_img'].'"></img></td>
		<td style="padding: 6px;"><button type="submit" name="delete_product">Удалить</button></td></tr></form> ';
		
		}
?>

<div id="welcome" class="col-md-4 col-sm-4 col-xs-12 text-center"> 
<span class="loginBlock"><a style="font-size: 16px;" href="find.php">Поиск по наименованию</a></span> 
</div>
	
<hr style="border: 1px solid gray; width: 100%;">

<form style="width: 100%; margin: 50px; " class="col-md-3" action="admin.php" method="POST">
<p style="font-size: 20px;"><strong>Изменение цвета сайта</strong></p>
<p>
		<p><strong> Цвет</strong></p>
		<input  style="width: 40%;" type="color" name="color" >
		</p>
		<p>
		<button type="submit" name="update_color">Изменить</button>
		</p>
</p>
</form>

<hr style="border: 1px solid gray; width: 100%;">

<p style="font-size: 20px; margin: 50px;"><strong>Категории</strong></p>




	 <menu type="context" style="color: gray; " >
	<ol>
<?php

$kdf = R::getCol( 'SELECT category FROM newitems' );
$massie  = array_unique($kdf);
foreach($massie as $valuef)
 {
	 echo '<li>' .$valuef. '</li>';
 }

?>
		</ol>
		</menu>
		
</div>
</body>
