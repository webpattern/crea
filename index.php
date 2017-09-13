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
<?php $dkr = $_SESSION[$pfe]; $vol_prod = $dataz['volume_product']; $vol_prod += $dkr['volume_product']; $_SESSION[$pfe] = $dataz; $dkr = $_SESSION[$pfe]; ?>
<?php } ?>
<?php } ?>
	
<?php $mass_id = R::getCol( 'SELECT id FROM newitems' ); ?>
<?php foreach($mass_id as $b) { $b = (' '.$b.' '); ?>
<?php if( isset($_SESSION[$b])) { ?>
<?php $mass_item = $_SESSION[$b]; ?>
<?php if($mass_item['name_pr'] != '') { ?>
<?php $_SESSION['sum'] += $mass_item['volume_product']; $sum_cart = $_SESSION['sum']; $mult = $mass_item['volume_product'] * $mass_item['price_pr']; $_SESSION['multiple_cart']  += $mult; $multiple_cart = $_SESSION['multiple_cart']; ?>
<tr><td style="color: steelblue; border-bottom: 1px solid black; text-transform: uppercase; font-weight: bold; font-family: Roboto Condensed, sans-serif; padding: 10px 0px 0px 0px; width: 35%;">
<a style="color: #478622;">'.@$mass_item['name_pr'].'</a><p style="color: teal; font-size: 10px; 	font-weight: bolder;"><span style="color: red;"> * </span>'.$mass_item['description_pr'].'<span style="color: red;"> * </span></p></td>
<td style="text-align: center;     border-bottom: 1px solid black;"><p>'.$mass_item['volume_product'].'</p>
<p>шт.</p></td>
<td style="text-align: center; border-bottom: 1px solid black;"><p>'.$mass_item['price_pr'].' руб.</p>
<p>цена</p></td>
<td style="text-align: center; border-bottom: 1px solid black;"><p>'.$mult.' руб.</p>
<p>итог</p></td><td style="text-align: center; border-bottom: 1px solid black;">
<form style="margin-top: 33%;" method="POST">
<input  type="text" style="display: none;" name="id_pr" value="'.$b.'">
<input  type="text" style="display: none;" name="name_pr" value="'.@$mass_item['name_pr'].'">
<button style="border-width: inherit; width: 33px; height: 32px; background-image: url(del1.ico); " type="submit" name="del_ses"></button>
</form></td></tr>';
<?php } ?>
<?php } ?>
<?php } ?>
</table>

		
<?php $sum_cart = $_SESSION['sum']; ?>
<?php if($sum_cart == null) { ?>
	<br><div style="font-family: Roboto Condensed, sans-serif; font-weight: bold; text-transform: uppercase;
	line-height: 5px; color: steelblue; margin: auto; margin-bottom: 25px;">
	<p>Ваша корзина пуста!</p></div>
	<div class="overnav" style="line-height: 1px; margin-bottom: 20px; background: #dddddd;">
<?php } else { ?>
	<br><div style="font-weight: 600; line-height: 1px; text-transform: uppercase; font-family: Roboto Condensed, sans-serif;">Количество '.$sum_cart.' шт.</div>
	<br><div style="font-weight: 600; line-height: 1.5px; margin-bottom: -15px; text-transform: uppercase;	font-family: Roboto Condensed, sans-serif;">Сумма '.$multiple_cart.' руб.</div><br>
	<a style="font-family: Roboto Condensed, sans-serif; font-weight: bold; text-transform: uppercase; padding: 11px 28px; color:  #f6f6ff; background-color: #589a42;line-height: 5;border: 1px solid gray; width: 80%; margin: auto; margin-bottom: 25px;" href="cart.php" title="">
	<img src="credit-card2.svg" style="width: 25px;    margin-bottom: 1px; margin-right: 15px;">Оформить заказ
	<img src="credit-card1.svg" style="width: 25px; margin-bottom: 1px; margin-left: 15px;"></a>
	<div class="overnav" style="line-height: 1px; margin-bottom: 6px; background: #dddddd;">';
<?php } ?>
<?php  //echo "<script>window.location.href='#target_wind'</script>"; ?>
	<a style="text-transform: uppercase; font-weight: bolder; color: #940f0f; font-family: 
	Roboto Condensed, sans-serif;" href="#" onClick="document.getElementById('cartvis').style.visibility =  'hidden'">
	<img src="up.ico" style="width: 25px; margin-bottom: 6px;">Свернуть корзину<img src="up.ico" style="width: 25px; margin-bottom: 6px;"></a></div>
	<a style="text-transform: uppercase; font-weight: bolder; color: #3283a9; font-family: Roboto Condensed, sans-serif;
	width: 20px;" href="#" onClick="document.getElementById('cartvis').style.visibility =  'hidden'">
	<img src="close.ico" style="width: 25px; margin-bottom: 6px;"></a>			
	</div>			
<a id="cartpush" class="butincart" href="#" onClick="document.getElementById('cartvis').style.visibility =  'visible'" >
<img src="cart.ico" style="width: 20px; height: 20px; margin-right: 15px;">Корзина <span style="color: #10ff19;">( </span><span id="cart-total">
<?php $sum_cart = $_SESSION['sum']; ?>
<?php if($sum_cart == null) { echo 0; } else { echo $sum_cart; } ?>
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
		
<?php if( isset($dataz['cart_sub'])) { ?>
<?php if($dataz['name_pr'] != '') { ?>
<?php echo  '<script>alert(" '.@$dataz['name_pr'].'Успешно добавлен в корзину! ");</script>'; ?>
<?php } ?> 
<?php } ?>
<?php if( isset($dataj['del_ses'])) { ?>
<?php echo  '<script>alert(" '.@$dataj['name_pr'].'Удален из корзины! ");</script>'; ?>
<?php } ?>

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
				<?php $datag = $_POST; ?>
				<?php if( isset($datag['cat_sub'])) { ?>
				<?php $_SESSION['category_name'] = $datag['cat_name']; ?>
				<?php echo '<script type="text/javascript">location.replace("catalog.php");</script>'; ?>
				<?php } ?>
				<?php $mass_category_all = R::getCol( 'SELECT category FROM newitems' ); ?>
				<?php $mass_category = array_unique($mass_category_all); ?>
				<?php if($mass_category != null) { ?>
				<?php foreach($mass_category as $item) { ?>
				<?php echo '<li><form method="POST" style="margin-bottom: auto;"><input type="text" style="display:none" name="cat_name" value="'.$item.'">
					<button style="width: 100%; border: 0px; background: rgba(255, 255, 255, 0);" type="submit" name="cat_sub"><a style="margin-left: -2.5%;">'.$item.'</a></button></form></li>'; ?>
				<?php	} ?>
				<?php } ?>
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
		<div class="page-container"> 
		<div class="mainPage">
		<div class="instawall" align="center">    
		<a style="padding: 0 auto;" href="http://yandex.ru" rel="gallery" title="1Category" data-url="">
		<img src="img/pic20.jpg" alt="1Category">
		<span class="instaName">1Category</span>
		</a>
		<a href="http://yandex.ru" rel="gallery"  title="1Category" data-url="">
		<img src="img/pic21.jpg" alt="1Category">
		<span class="instaName">2Category</span>
		</a>
		<a href="http://yandex.ru" rel="gallery"  title="1Category" data-url="">
		<img src="img/pic22.jpg" alt="1Category">
		<span class="instaName">3Category</span>
		</a>
		<a href="http://yandex.ru" rel="gallery"  title="1Category" data-url="">
		<img src="img/pic31.jpg" alt="1Category">
		<span class="instaName">4Category</span>
		</a>
		<a href="http://yandex.ru" rel="gallery"  title="1Category" data-url="">
		<img src="img/pic1.jpg" alt="1Category">
		<span class="instaName">5Category</span>
		</a>
		<a href="http://yandex.ru" rel="gallery"  title="1Category" data-url="">
		<img src="img/pic26.jpg" alt="1Category">
		<span class="instaName">6Category</span>
		</a>
		</div>   
		
		<embed src="audio/button-mp3.mp3" width="70" height="45" align="left" hidden="False" autostart="False" loop="True">
			<script language="JavaScript" src="audio_player/audio-player.js"></script>
			

	<section class="offerBlock text-center container">
	<h2 id="target_wind" style="background: #e6bd40; border-radius: 3px; height: 50px; padding-top: 12px;">\*_*/  CREA - Gallery  \*_*/</h2>
	<hr style="border: 1px solid #f3bb5d; width: 67%; box-shadow: 0px 0px 6px black; margin-bottom: 20px;">
	<hr style="border: 1px solid #f3bb5d; width: 55%; box-shadow: 0px 0px 6px black; margin-bottom: 20px;">
	<hr style="border: 1px solid #f3bb5d; width: 43%; box-shadow: 0px 0px 6px black; margin-bottom: 20px;">
	<a style="margin-bottom: 30px; font-size: 20px; text-transform: uppercase;" href="catalog.php" class="lookall">Смотреть всю коллекцию</a>
	
	
	<style>
	.but_in_cart {
	-moz-box-shadow:inset 0px 1px 0px 0px #fff6af;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fff6af;
	box-shadow:inset 0px 1px 0px 0px #fff6af;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffec64), color-stop(1, #ffab23));
	background:-moz-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-webkit-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-o-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-ms-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:linear-gradient(to bottom, #efce71 5%, #ffab23 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffec64', endColorstr='#ffab23',GradientType=0);
	background-color:#ffec64;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #ffaa22;
	display:inline-block;
	cursor:pointer;
	color:#333333;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 9px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffee66;
}
.but_in_cart:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffab23), color-stop(1, #ffec64));
	background:-moz-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-webkit-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-o-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-ms-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffab23', endColorstr='#ffec64',GradientType=0);
	background-color:#ffab23;
}
.but_in_cart:active {
	position:relative;
	top:1px;
}
</style>

	<div class="product-grid">

<?php $all_items  = R::find( 'newitems', ' id != 0 '); ?>
<?php foreach($all_items as $name_items) { ?>
<div class="col-md-3 col-sm-3 col-xs-6" ><div class="productItem text-center" ><div class="image zoomIn animated">
<a href="http://www.yandex.ru" title="Описание -' .$name_items['pname']. ' ">
<img style="width: 100px; height: 95px;" class="vmod" src="product/' .$name_items['file_img']. '" alt="Описание - ' .$name_items['pname']. ' "></a>
</div><div class="model">
<?php echo $name_items['pname']?> 
</div><div class="name">
<a href="http://www.yandex.ru" title="Описание - <?php echo $name_items['pname']; ?>">Описание - <?php echo $name_items['pname']; ?> 
</a></div><div class="price" itemprop="price">
<div class="old">100  <span class="currency">Р</span></div>
<div class="new">
<?php echo $name_items['price']; ?>   
<span class="currency">Р</span></div><div><form class="but_cart" method="POST">
 <input  style="display: none;" type="text" name="id_pr" value="<?php echo @$name_items['id']; ?>">
 <input  style="display: none;" type="text" name="name_pr" value="<?php echo @$name_items['pname']; ?>">
 <input  style="display: none;" type="text" name="description_pr" value="<?php echo @$name_items['description']; ?>">
 <input  style="display: none;" type="text" name="price_pr" value="<?php echo @$name_items['price']; ?>">
 <input  style="display: none;" type="text" name="img_pr" value="<?php echo @$name_items['file_img']; ?>">
 <input  style="display: none;" type="text" name="multipl_pr" value="1">
 <input  style="width: 34px; height: 22px; box-shadow: inset 0px 0px 5px #1d4c0e; border-radius: 3px; color: brown; text-shadow: 0px 0px 0px black;" type="number" name="volume_product" value="1">
 <span class="currency">Шт.</span>
 <button  class="but_in_cart" type="submit" name="cart_sub">В корзину </button> </form></div>';
<?php } else { ?>
<form class="but_cart" action="login.php" method="POST">
<button  type="submit" style="margin-left: 5px; margin-left: 5px; text-decoration: none; text-align: center; 
 color: #fffeee; text-shadow: 1px 0px 5px black; box-shadow: 0px 2px 12px black; border: solid 1px #286300;
border-radius: 2px; background-color: #36ff97; background-image: -webkit-linear-gradient(top, #36ff97 0%, #16586e 100%); 
opacity: 1;" name="cart_sub">В корзину </button></form> ';
<?php } ?>
</div>
</div>
</div>		
<?php } ?>
</div>   
</section>   
  <hr style="border: 1px solid #f3bb5d; width: 67%; box-shadow: 0px 0px 6px black; margin-bottom: 20px; margin-top: 20px;">
  
  	<!-- ТЕКСТ ПРО CREA -->
	  <section class="CreaText container text-center">
		<p class="txt">Crea Elit posuere curae; enim. Dapibus a luctus est integer placerat Dolor .<br>
		Mollis cubilia euismod habitasse eget risus aptent sem sem hac sociis quisque ultricies hac morbi Volutpat Ligula. <br>
		Aenean curabitur massa varius class curabitur cursus orci, iaculis magna nam cursus turpis accumsan nec dolor augue. </p>
	  </section>
	<!-- // ТЕКСТ ПРО CREA -->   
  
  <div style="background: darkgray;">
  <div style="width: 80%; padding-top: 50px; border-radius: 0px;" class='container'>

<div class="ism-slider" data-transition_type="zoom" data-play_type="loop" data-interval="3000" data-image_fx="zoompan" data-radio_type="thumbnail" id="my-slider">
  <ol>
    <li>
    <a href="" target="_self">
      <img src="ism/image/slides/city-691279_1280.jpg">
      <div class="ism-caption ism-caption-0" data-delay='200'>CREA - Pattern for life</div>
    </a>
    </li>
    <li>
      <img src="ism/image/slides/pool-720697_1280.jpg">
      <div class="ism-caption ism-caption-0" data-delay='200'>My CREA</div>
    </li>
    <li>
      <img src="ism/image/slides/taxi-cab-381233_1280.jpg">
      <div class="ism-caption ism-caption-0" data-delay='200'>CREA - The harmony of life</div>
    </li>
  </ol>
</div>
</div>


	<!-- ТЕКСТ ПРО CREA -->
	  <section class="creaText container text-center">
		<p class="txt">CREA rhoncus feugiat curabitur neque. Aliquet, suscipit. Ante, feugiat. Metus. Id gravida. Odio tristique quis quis. Et lobortis dolor luctus curae; urna consequat duis porttitor lobortis convallis nec cras laoreet sociosqu. Dolor sodales per Metus varius taciti semper posuere tristique orci et cubilia gravida phasellus amet ullamcorper. Id duis facilisi convallis malesuada nullam, egestas phasellus.
		Malesuada taciti enim suspendisse nulla consectetuer mollis. Volutpat magna viverra. Arcu torquent imperdiet senectus mollis luctus.</p>
	  </section>
	<!-- // ТЕКСТ ПРО CREA -->  
	
	  <hr style="border: 1px solid #f3bb5d; width: 67%; box-shadow: 0px 0px 6px black; margin-bottom: 40px;">
  

     <!-- ГЛАВНЫЙ ТЕКСТ ПРО CREA -->
	<section class="aboutCrea">
		<div class="container">
			<div class="col-md-5 col-sm-4 col-xs-12">
				<img class="im1" src="img/pic5.jpg" alt="">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<p class="txt">Crea - ultricies penatibus rutrum luctus ad quisque viverra ipsum dui. Habitasse ullamcorper felis montes turpis magna blandit dictumst malesuada pretium inceptos augue.
				Fermentum mattis elementum habitasse. Et volutpat magna sem in neque parturient dictumst ultrices porta lorem nunc taciti condimentum nonummy facilisi lobortis cursus facilisi euismod nunc.
				Sodales luctus egestas cubilia luctus hymenaeos class feugiat purus. Non leo ullamcorper pulvinar, tempor non ligula class. Phasellus. Ipsum risus duis turpis nulla ligula.</p>
				<a href="http://">CREA — Dream life</a>
			</div>
		</div>
	</section>
	<!-- // ГЛАВНЫЙ ТЕКСТ ПРО CREA -->     
       
	  
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