<?php header("Content-Type: text/html; charset=utf-8"); ?>
<?php require "db.php"; ?>
<?php error_reporting(E_ALL & ~E_NOTICE); ?>

<html dir="ltr" lang="ru" class="">
<head>
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
		<script type="text/javascript" src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
		<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
	<style type="text/css"></style><style type="text/css"></style><style id="style-1-cropbar-clipper"></style>
	
</head>

	<body id="home">
	
			<audio preload="auto" id="sound-1"><source src="audio/kap1.mp3"></audio>
			<audio preload="auto" id="sound-2" ><source src="audio/ouy.mp3"></audio>
			<audio id="sound-link" preload="auto" ><source src="audio/bom1.mp3"></audio>
	
		<div id="top" class="overnav">
			<div class="container">
				<div class="col-md-4 col-sm-4 col-xs-12 text-center phoneBlock"> 
				<img src="phone.ico" style="    width: 35px; ">
                    <i class="phone"></i> <a href="tel:+7-777-777-7777">+7-777-777-7777</a> 
                </div>
				<div id="welcome" class="col-md-4 col-sm-4 col-xs-12 text-center"> 
				
					<img src="log.ico" style="width: 35px; margin-right: 5px;">
                    <?php if( isset( $_SESSION['logged_user'])) : ?>
					<span class="loginBlock"><?php echo $_SESSION['logged_user'] ->email; ?></span> 
					<a href="logout.php">Выйти</a></p>
					<?php else : ?>
                    <span class="loginBlock"><a href="login.php">Войти в личный кабинет</a></span> 
					<?php endif; ?>
					
                </div>
				
	<div class="col-md-4 col-sm-4 col-xs-12 text-center">
	<div class="cart">	
	<div id="cartvis" class="contentincart col-md-6 col-sm-6 col-xs-12 text-center" 
	style="visibility: hidden; background: #dedede; position: absolute; z-index: 10;  box-shadow: inset 0px 0px 3px grey;
	width: 130%; margin-top: 46px; border-radius: 3px; border: 1px solid gray; 6px; margin-left: -43%;     padding-top: 10px;">
	<table class="tableitem" style="border-bottom: 1px solid black; font-weight: 600; margin-top: 15px; margin: auto; width: 90%; ">


<?php $dataj = $_POST; $_SESSION['sum']  = 0; $_SESSION['multiple_cart']  = 0; ?>
<?php if( isset($dataj['del_ses'])) { ?>
<?php $bi = $dataj['id_pr']; ?>
<?php if( isset($_SESSION[$bi])) { ?>
<?php $_SESSION[$bi] = array(); ?>
<?php } ?>
<?php } ?>
	
<?php $dataz = $_POST; ?>
<?php if( isset($dataz['cart_sub'])) { ?>
<?php $pfe = $dataz['id_pr']; ?>
<?php if( !isset($_SESSION[$pfe])) { ?>
<?php $_SESSION[$pfe] = $dataz; $dkr = $_SESSION[$pfe]; $_SESSION[$pfe] = $dataz; $dkr = $_SESSION[$pfe]; ?>
<?php } else { ?>
<?php $dkr = $_SESSION[$pfe]; $vol_prod = $dataz['volume_product']; $vol_prod += $dkr['volume_product']; ?>
<?php $_SESSION[$pfe] = $dataz; $dkr = $_SESSION[$pfe]; ?>
<?php } ?>
<?php } ?>
	
<?php $mass_id = R::getCol( 'SELECT id FROM newitems' ); ?>
<?php foreach($mass_id as $b) { ?>
<?php $b = (' '.$b.' '); ?>
<?php if( isset($_SESSION[$b])) { ?>
<?php $mass_item = $_SESSION[$b]; ?>
<?php if($mass_item['name_pr'] != '') { ?>
<?php $_SESSION['sum'] += $mass_item['volume_product']; $sum_cart = $_SESSION['sum']; ?>
<?php $mult = $mass_item['volume_product'] * $mass_item['price_pr']; $_SESSION['multiple_cart']  += $mult; ?>
<?php $multiple_cart = $_SESSION['multiple_cart']; ?>
<tr><td style="color: steelblue; border-bottom: 1px solid black; text-transform: uppercase; 
font-weight: bold; font-family: Roboto Condensed, sans-serif; padding: 10px 0px 0px 0px; width: 35%;">
<a style="color: #478622;"><?php echo @$mass_item['name_pr']; ?></a><p style="color: teal; font-size: 10px; 	font-weight: bolder;"><span style="color: red;"> * </span><?php echo $mass_item['description_pr']; ?><span style="color: red;"> * </span></p></td>
<td style="text-align: center;     border-bottom: 1px solid black;"><p><?php echo $mass_item['volume_product']; ?></p>
<p>шт.</p></td>
<td style="text-align: center; border-bottom: 1px solid black;"><p><?php echo $mass_item['price_pr']; ?> руб.</p>
<p>цена</p></td>
<td style="text-align: center; border-bottom: 1px solid black;"><p><?php echo $mult; ?> руб.</p>
<p>итог</p></td><td style="text-align: center; border-bottom: 1px solid black;">
<form style="margin-top: 33%;" method="POST">
<input  type="text" style="display: none;" name="id_pr" value="<?php echo $b; ?>">
<input  type="text" style="display: none;" name="name_pr" value="<?php echo @$mass_item['name_pr']; ?>">
<button style="border-width: inherit; width: 33px; height: 32px; background-image: url(del1.ico); " type="submit" name="del_ses"></button>
	</form></td></tr>
<?php } ?>
<?php } ?>
<?php } ?>
</table>

		
<?php $sum_cart = $_SESSION['sum'];
			if($sum_cart == null)
			{
				echo '<br><div style="font-family: Roboto Condensed, sans-serif; font-weight: bold; text-transform: uppercase;
				line-height: 5px; color: steelblue; margin: auto; margin-bottom: 25px;">
				<p>Ваша корзина пуста!</p></div><div class="overnav" style="line-height: 1px; margin-bottom: 20px; background: #dddddd;">';
			}
			else
			{
				echo '<br><div style="font-weight: 600; line-height: 1px; text-transform: uppercase; 
				font-family: Roboto Condensed, sans-serif;">Количество '.$sum_cart.' шт.</div>
				<br><div style="font-weight: 600; line-height: 1.5px; 
				margin-bottom: -15px; text-transform: uppercase;	font-family: Roboto Condensed, sans-serif;">Сумма '.$multiple_cart.' руб.</div><br>
				<a style="font-family: Roboto Condensed, sans-serif; font-weight: bold; text-transform: uppercase; padding: 11px 28px; color:  #f6f6ff; background-color: #589a42;
				line-height: 5;border: 1px solid gray; width: 80%; margin: auto; margin-bottom: 25px;" href="cart.php" title="">
				<img src="credit-card2.svg" style="width: 25px;    margin-bottom: 1px; margin-right: 15px;">Оформить заказ
				<img src="credit-card1.svg" style="width: 25px; margin-bottom: 1px; margin-left: 15px;"></a>
				<div class="overnav" style="line-height: 1px; margin-bottom: 6px; background: #dddddd;">';
			}
			
			echo "<script>window.location.href='#target_wind'</script>";

 ?>
				<a style="text-transform: uppercase; font-weight: bolder; color: #940f0f; font-family: 
				Roboto Condensed, sans-serif;" href="#" onClick="document.getElementById('cartvis').style.visibility =  'hidden'">
				<img src="up.ico" style="width: 25px; margin-bottom: 6px;">Свернуть корзину<img src="up.ico" style="width: 25px; margin-bottom: 6px;"></a></div>

				<a style="text-transform: uppercase; font-weight: bolder; color: #3283a9; font-family: Roboto Condensed, sans-serif;
				width: 20px;" href="#" onClick="document.getElementById('cartvis').style.visibility =  'hidden'">
				<img src="close.ico" style="width: 25px; margin-bottom: 6px;"></a>
				
</div>			
						
						<a id="cartpush" class="butincart" href="#" onClick="document.getElementById('cartvis').style.visibility =  'visible'" >
						<img src="cart.ico" style="width: 20px; height: 20px; margin-right: 15px;">Корзина <span style="color: #10ff19;">( </span>
						<span id="cart-total">
						
						<?php 
						$sum_cart = $_SESSION['sum'];
						if($sum_cart == null)
						{
							echo 0;
						}
						else
						{
						echo $sum_cart;
						}?>
						
						</span><span style="color: #10ff19;"> )</span></a> 
						
					</div>
				</div>
			</div>
		</div>
		
<style>
.logo{overflow:hidden; width: 220px; height: 110px;}
 
 .logo img { -moz-transition: all 1s ease-out; -o-transition: all 1s ease-out;-webkit-transition: all 1s ease-out;}

.logo img:hover{-webkit-transform: scale(1.1); -moz-transform: scale(1.1); -o-transform: scale(1.1);}
</style>
		
<?php 
if( isset($dataz['cart_sub']))
{
	if($dataz['name_pr'] != '')
	{
			echo  '<script>alert(" '.@$dataz['name_pr'].'Успешно добавлен в корзину! ");</script>';

	}
}
if( isset($dataj['del_ses']))
{
	echo  '<script>alert(" '.@$dataj['name_pr'].'Удален из корзины! ");</script>';
}

?>
<!--Шапка с логотипом и меню-->
    	<header style="	height: 250px; background-size: cover; background-image: url(img/pic32.jpg); opacity: 1; 
	background-position: 0% 64%; border-top: 1px solid #836040;" id="header" class="header">
			<div class="container">
				<div class="col-md-4 col-sm-4 col-xs-6"> 
						<a style="border-bottom: 0px; padding-left: 15px;padding-right: 15px;" href="/" class="logo" title="Crea - the harmony of life"> 
						<img src="cre3.png" title="Crea - The harmony of life" alt="Crea - the harmony of life"></a> 
				</div>
				
					<section class="intro"></section>
				<div class="col-md-8 col-sm-8 col-xs-10">

	<ul id="nav">
		<li>
			<a href="index.php" title="Вернуться на главную страницу">Главная</a>
		</li>
		
		<li>
			<a href="catalog.php" title="Каталог">Каталог</a>
		</li>
		
		<li>
			<a href="#" title="Категории товаров">Категории</a>
				<ul>
				
				<?php
					$datag = $_POST;
					if( isset($datag['cat_sub']))
					{
					$_SESSION['category_name'] = $datag['cat_name'];
					echo '<script type="text/javascript">location.replace("catalog.php");</script>';

					}
				
					$mass_category_all = R::getCol( 'SELECT category FROM newitems' );
					$mass_category = array_unique($mass_category_all);
					if($mass_category != null)
					{
						foreach($mass_category as $item)
						{
							echo '<li><form method="POST" style="margin-bottom: auto;">
							<input type="text" style="display: none" name="cat_name" value="'.$item.'">
							<button style="width: 100%; border: 0px; background: rgba(255, 255, 255, 0);" type="submit" name="cat_sub">
							<a style="margin-left: -2.5%;">'.$item.'</a></button></form></li>';
						}
					}
				?>
			</ul>
		</li>
		
		<li>
			<a href="#" title="Информация о компании">О нас</a>
			<ul>
				<li><a href="#">Продукты</a></li>
				<li><a href="#">Команда</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#" title="Как с нами связаться">Контакты</a>
			<ul>
				<li><a href="#">График работы</a></li>
				<li><a href="#">Местоположение</a></li>
			</ul>
		</li>
	</ul>
			
			</div>
			</div>
		</header>
<!--//Шапка с логотипом и меню-->	


		<div id="notification"></div> 
        <div class="page-container"> 


<div class="container" xmlns:v="http://rdf.data-vocabulary.org/#">
  <ul class="breadcrumb prod col-md-12" itemprop="breadcrumb">
    <li typeof="v:Breadcrumb">
      <a style="font-size:  13px;" rel="v:url" property="v:title" href="index.php">Главная</a>
      <span class="divider"></span>
    </li>
    <li typeof="v:Breadcrumb">
      <a style="font-size:  13px;" rel="v:url" property="v:title" href="cart.php">Оформление заказа</a>
      <span class="divider"></span>
    </li>
  </ul>
  
  <div class="row checkoutPage">
    <h1 class="col-md-12"><strong>ОФОРМЛЕНИЕ ЗАКАЗА</strong></h1>
        <!--КОНТАКТНАЯ ИНФОРМАЦИЯ -->
        <div class="col-md-6">
          <h2>Контактная информация</h2>
          <div class="form-group">
            <label>ФИО</label>
            <input type="text" class="form-control req" value="" name="name">
          </div>
          <div class="form-group">
            <label>Телефон</label>
            <input type="text" class="form-control checkout_phone req" value="" name="phone">
          </div>
          <div class="form-group">
            <label>Эл. почта</label>
            <input type="text" class="form-control req" value="" name="email">
          </div>
           <a href="/login">Уже совершали у нас покупку?</a> 
        </div>
        
        <!--АДРЕС ДОСТАВКИ -->
        <div class="col-md-6">
          <h2>Адрес доставки</h2>
          <div class="form-group">
            <label>Индекс</label>
            <input type="text" class="form-control checkout_index req" name="zipcode" value="">
          </div>
          <div class="form-group">
            <label>Страна:</label>
            <select rel="ocity" class="form-control" country="country"><option value="1">Беларусь</option></select>
            <img src="/i/loader.gif" width="32" class="hide">
          </div>
          <div class="form-group">
            <label>Область / Регион:</label>
            <select name="zone_id" class="form-control" region="region" rel="ocity"><option value="1">Выберите регион</option>
			<option value="1">Минская обл.</option><option value="2">Брестская обл.</option><option value="3">Гродненская обл.</option>
			<option value="4">Гомельская обл.</option><option value="5">Могилевская обл.</option><option value="6">Витебская обл.</option></select>
            <img src="/i/loader.gif" width="32" class="hide">
          </div>
          <div class="form-group">
            <label>Город</label>
            <select name="cityId" class="form-control checkout_city" city="city" rel="ocity" cityid="1">
			<option value="-1">Выберите город</option><option value="1">Минск</option><option value="2">Брест</option>
			<option value="3">Витебск</option><option value="4">Гродно</option><option value="5">Могилев</option>
			<option value="6">Гомель</option>
			</select>
            <img src="/i/loader.gif" width="32" class="hide">
          </div>
          <div class="form-group">
            <label>Адрес <span>(Например: ул. Вавилова, д.13, кв.15)</span></label>
            <input type="text" class="form-control req" name="address" value="">
          </div>
        </div>
    
        <!--СПОСОБЫ ДОСТАВКИ-->
        <div class="col-md-6 radioSelect" id="deliveries">
          <h2>Способ доставки</h2>
            
                <div class="radio">
                  <input onclick="setOrderDelivery(6);" type="radio" name="optionsShip" id="optionsShip6" value="6">
                  <label for="optionsShip6">Почта <span id="shipDesc"></span></label>
                </div>
            
                <div class="radio">
                  <input onclick="setOrderDelivery(5);" type="radio" name="optionsShip" id="optionsShip5" value="5" checked="checked">
                  <label for="optionsShip5">Бесплатная доставка курьером <span id="shipDesc"></span></label>
                </div>
            
        </div>
        
        <!--СПОСОБЫ ОПЛАТЫ-->
        <div class="col-md-6 radioSelect" id="payments"> 
          <h2>Способ оплаты</h2>
          <!-- order.getAvailablePaymentSettings -->
          
          <div class="radio">
            <input type="radio" name="optionsPay" id="optionsPay7" value="7">
            <label for="optionsPay7"> <img src="http://u.jawi.ru/images/ABCE69CBF1/319/XHZOKDCCKF.png" alt="Robokassa (VISA, MasterCard, WebMoney, Яндекс.Деньги и др.)"> </label>
          </div>
          
          <div class="radio">
            <input type="radio" name="optionsPay" id="optionsPay8" value="8" checked="checked">
            <label for="optionsPay8"> Оплата при доставке </label>
          </div>
          
        </div>
        
		

		<style>
		.checkout__table_container td, p
		{
			    font-family: 'Roboto Condensed', sans-serif;
				line-height: 2;
				font-size: 20px;
		}
		
		.checkout__table_container td
		{
			border: 1px solid;
		}
		
		.title_tab td 
		{
			font-weight: bolder;
			background-color: #ddc784;
		}
		
		</style>
		
        <!-- ВАШ ЗАКАЗ -->
        <div class="col-md-12 checkout__table_container">
          <h2>ВАШ ЗАКАЗ</h2>
          <table class="table table-bordered checkout__table">
            <tbody><tr class="title_tab">
              <td>Товар</td>
              <td>Цена</td>
              <td>Количество</td>
              <td>Итого</td>
              <td>Удалить</td>
            </tr>
		    
			
	<?php
	$dataj = $_POST;
	
	$_SESSION['sum']  = 0;
	$_SESSION['multiple_cart']  = 0;
	if( isset($dataj['del_ses']))
	{
		$bi = $dataj['id_pr'];
		if( isset($_SESSION[$bi]))
		{
			$_SESSION[$bi] = array();
		}
	}
	
	$dataz = $_POST;
	if( isset($dataz['cart_sub']))
	{
		$pfe = $dataz['id_pr'];
		if( !isset($_SESSION[$pfe]))
		{
			$_SESSION[$pfe] = $dataz;
			$dkr = $_SESSION[$pfe];
			$_SESSION[$pfe] = $dataz;
			$dkr = $_SESSION[$pfe];
		}
		else
		{
			$dkr = $_SESSION[$pfe];
			$dataz['volume_product'] += $dkr['volume_product'];
			$_SESSION[$pfe] = $dataz;
			$dkr = $_SESSION[$pfe];
		}
	}
	
	$mass_id = R::getCol( 'SELECT id FROM newitems' );
	foreach($mass_id as $b)
	{
		$b = (' '.$b.' ');
		if( isset($_SESSION[$b]))
		{
			$mass_item = $_SESSION[$b];
			if($mass_item['name_pr'] != '')
			{
				$_SESSION['sum'] += $mass_item['volume_product'];
				$sum_cart = $_SESSION['sum'];
				$mult = $mass_item['volume_product'] * $mass_item['price_pr'];
				$_SESSION['multiple_cart']  += $mult;
				$multiple_cart = $_SESSION['multiple_cart'];
			echo '<tr><td style="color: steelblue; text-transform: uppercase; font-weight: bold; padding: 10px 0px 0px 30px; ">
			<a style="color: #478622; font-size: 18px;">'.$mass_item['name_pr'].'</a><p style="font-size: 10px; color: teal;  margin-top: 12px;">
			<span style="color: red;"> * </span>'.$mass_item['description_pr'].'<span style="color: red;"> * </span></p></td>
			<td td style="text-align: center; "><p style="width: 100%;    font-size: 20px; margin-top: 14px;">'.$mass_item['price_pr'].' руб.</p>
			<p style="width: 100%;    font-size: 20px ;margin-top: 14px;">цена</p></td>
			<td style="text-align: center; "><p style="width: 100%;    font-size: 20px; margin-top: 14px;">'.$mass_item['volume_product'].'</p>
			<p style=" width: 100%;   font-size: 20px; margin-top: 14px;">шт.</p></td>
			<td style="text-align: center;"><p style="width: 100%;    font-size: 20px; margin-top: 14px;">'.$mult.' руб.</p>
			<p style="width: 100%;    font-size: 20px; margin-top: 14px;">итог</p></td><td style="text-align: center;">
			<form style="margin-top: 33%;" method="POST">
			<input  type="text" style="display: none;" name="id_pr" value="'.$b.'">
			<input  type="text" style="display: none;" name="name_pr" value="'.$mass_item['name_pr'].'">
			<button style="border-width: inherit; width: 33px; height: 32px; background-image: url(del1.ico); " type="submit" name="del_ses"></button>
	</form></td></tr>';
			}
		}
	}
?>
			

			<tr class="checkout__cart_hr hide"><td colspan="6"></td></tr><tr class="checkout__cart_hr"><td colspan="6"><hr></td></tr><tr>
            </tr>
           
            <tr>
              <td colspan="4" class="checkout__cart_total">
                Итого к оплате:
              </td>
              <td id="total" colspan="2" class="checkout__cart_price">
			  <?php
					echo '<p style="font-weight: bold;">'.$multiple_cart .' руб.</p>';
			  ?>
              </td>
            </tr>
          </tbody></table>
		  
                    

            <tr>
              <td colspan="4" id="deliveryName" class="checkout__cart_ship">
              Бесплатная доставка курьером
              </td>
              <td colspan="2" id="deliveryCost" class="checkout__cart_price">
               0 руб. 
              </td>
            </tr>
           
    
            <tr>
              <td colspan="4" class="checkout__cart_total">
                Итого к оплате:
              </td>
              <td id="total" colspan="2" class="checkout__cart_price">
                11200 руб.
              </td>
            </tr>
          </tbody></table>
        </div>
        
        
            <div class="col-md-12 checkout__comment">
        
              <div class="form-group">
              <h2>Комментарий к заказу</h2>
                <textarea name="comment" class="form-control" placeholder="Напишите ваши пожелания к заказу"></textarea>
          </div>
        </div>
        <!-- ОФОРМЛЕНИЕ ЗАКАЗА -->
    
        <div class="col-md-12 checkout__submit">
          <div class="checkboxConfirm">
            <div class="radio">
              <input id="agreement" name="option" value="1" type="checkbox">
              <label for="agreement">Я прочитал <a href="#" data-toggle="modal" data-target="#spModal">Правила и условия</a> и согласен с условиями</label>
            </div>
          </div>
          <input style="background: yellowgreen;" id="confirmBtn" class="btn btn-lg" value="ОФОРМИТЬ ЗАКАЗ" type="submit" onclick="return preConfirm();">
        </div>
  </div>
</div>
    </div> 
		
    
<!-- ССЫЛКИ НА СОЦСЕТИ -->

       <div class="socialRow col-xs-12 col-sm-12 col-md-12">
       	<a href="http://instagram.com/" style="color: teal;" class="instagram" target="_blank">instagram</a>
       	<a href="https://twitter.com/" style="color: steelblue;" class="twitter" target="_blank">twitter</a>
       	<a href="https://plus.google.com/" style="color: sienna;" class="google" target="_blank">google+</a>
       	<a href="http://www.facebook.com/" style="color: purple;" class="facebook" target="_blank">facebook</a>
       	<a href="https://vk.com/" style="color: seagreen;" class="vk" target="_blank">vkontakte</a>
       </div>

<!-- // ССЫЛКИ НА СОЦСЕТИ -->      

    
  </div>
</div>
        </div> 
		
            <footer style="background-image: url(img/pic23.jpg);">
      <div class="container">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>ПОМОЩЬ</h2>
          <ul id="for_a">
            <li><a id="for_a" href="http://creashop.ru/оплата_и_доставка">Оплата и доставка</a></li>
            <li><a id="for_a" href="http://creashop.ru/правила_и_условия">Правила и условия</a></li>
            <li><a id="for_a" href="http://creashop.ru/контакты">Контакты</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>ОТВЕТИМ НА ВОПРОСЫ</h2>
		  <ul id="for_a">
          <li><a style="font-size: 18px; font-weight: bolder; color: #d6b2d6;" id="for_a" href="tel:+7-777-777-7777">+7-777-777-7777</a></li> 
		  <li><a style="font-size: 18px; font-weight: bolder; color: #53efbe;" id="for_a" href="tel:+5-555-555-5555">+5-555-555-5555</a></li>
          <li><a id="for_a" href="mailto:mail@creashop.ru">mail@creashop.com</a></li>
		  </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>ГРАФИК РАБОТЫ</h2>
		  <ul id="for_a">
          <li><a style="font-size: 18px; font-weight: bolder;" id="for_a" href="tel:">Пн-Пт: с 10:00 до 18:00</a></li>
          <li><a id="for_a" href="tel:">В выходные дни заявки принимаются исключительно в электронном виде.</a></li>
		  </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Споcобы оплаты</h2>
		  <ul id="for_a">
          <li><a id="for_a" href="tel:">Вы можете оплатить товары наличными при получении  или одним из указанных способов.</a></li>
		  </ul>
          <!--<img src="" alt="VISA">
          <img src="" alt="MASTERCARD">
          <img src="" alt="ЯНДЕКС.ДЕНЬГИ">
          <img src="" alt="WEBMONEY">-->
        </div>
      </div>
    </footer>
    <div class="officialdealer text-center">
      <span>Crea — The harmony of life © 2016</span>
    </div>
	
</body>
</html>