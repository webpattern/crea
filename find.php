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

	<div style="width: 50%;" class="col-md-6">

  <form style="width: 50%;"  action="find.php" method="POST">
  	<p style="font-size: 20px; width: 100%; "><strong>Поиск по наименованию</strong></p>
   <p><input style="width: 150%; height: 40px; box-shadow: inset 0px 0px 7px 0px; border-radius: 7px;"
   type="search" name="find_name" placeholder="Поиск по товарам" value="<?php echo @$data['find_name']; ?>"> </p>
   <p>
   <button type="submit" name="find_item" >Найти</button>
   </p>
   
     <table style="width: 50%;"  class="table_item1" border="1">
   <caption style="width: 50%;"><?php echo '<div style="color: green;">Результат поиска по вашему запросу!</div>'; ?></caption>
	<tr><th style="padding: 6px;">ID</th><th style="padding: 6px;">Название</th><th style="padding: 6px;">Артикул</th>
	<th style="padding: 6px;">Описание</th><th style="padding: 6px;">Категория</th><th style="padding: 6px;">Стоймость</th>
	<th style="padding: 6px;">Колличество</th><th style="padding: 6px;">Изображение</th><th style="padding: 6px;">Удаление</th></tr>
	
	
		<?php
		
				//Поиск по наименованию
		$data_find_item = $_POST;
		if( isset( $_POST['find_item'] ) )  
		{
			if($data_find_item['find_name'] != '')
			{
				$errors = array();
				$item_find = R::find('newitems', 'pname = ?', array($data_find_item['find_name']));
				if($item_find == '')
				{
					$item_find = R::find('newitems', 'pname = ?', array($data_find_item['find_name']));
				}
			}
		}
		

		
	if(  !empty($item_find)  )
	{
			foreach($item_find as $values)
			{ 
			echo  '<tr><td style="padding: 6px;"> ' .$values['id'] .' </td><td style="padding: 6px;"> ' .$values['pname'] .' </td>
		<td style="padding: 6px;"> ' .$values['article'] .' </td><td style="padding: 6px;"> ' .$values['description'] .' </td>
		<td style="padding: 6px;"> ' .$values['category'] .' </td><td style="padding: 6px;"> ' .$values['price'] .' </td>
		<td style="padding: 6px;"> ' .$values['volume'] .' </td><td style="padding: 6px;">
		<img style="width: 100px; height: 65px;" src="img/'.$values['file_img'].'"></img></td>
		<td style="padding: 6px;"><button type="submit" name="delete_product">Удалить</button></td></tr></form> ';
			}
	}
	else 
	{
		echo 'Для поиска по товарам введите наименование!';
	}
		if( $item_find)
		{
		}
		else 
		{
			echo '<div style="color: red;">По вашему запросу совпадений не найдено!</div><hr>';
		}
	?>
	</table>
   
  </form>
  </div>