<?php
/* Smarty version 3.1.32, created on 2018-07-10 20:13:11
  from '/home/hoork/Документы/TestJob/site/mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b44cd07c07c86_52087681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c24f76d77065bbc7261a9ca329e55cdd44a3036' => 
    array (
      0 => '/home/hoork/Документы/TestJob/site/mail.tpl',
      1 => 1531235584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b44cd07c07c86_52087681 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<style type="text/css">
		body{
			font-family: 'Roboto', sans-serif;
			color: white;
			background-color: #455175;
		}
		a{
			text-decoration: none;
			color: white;
		}

		.half > *{
			display: inline-block;
			width: 49%;
		}

		.wrapper{
			margin-left: 121px;
			margin-top: 35px;
			width: 640px;
		}

		.header{
			margin-bottom: 18px;
		}

		.logo{
			font-size: 26px;
			font-weight: bold;
		}
		.links{
			word-spacing: 0px;
			text-align: center;
			vertical-align: middle;
			font-size: 13px;
			padding-bottom: 3px;
		}
		.links > a:not(:last-child){
			margin-right: 14px;
			text-align: right;
		}

		.mainBlock{
			color: black;
			background-color: white;
			padding: 35px 25px;
			padding-bottom: 20px;
		}

		.mainBlock > *{
			font-size: 14px;
			margin-bottom: 10px;
		}
		.headline{
			text-align: center;
			margin: 20px 0px;
		}
		.bigHeadline{	
			font-size: 24px;
		}

		.smallHeadline{
			font-size: 12px;
			font-weight: bold;
			margin-top: 0px;
		}

		
		.tariffs > *{
			display: inline-block;
			width: 158px;
			text-align: center;
			font-size: 16px;

			border: 1px solid #e3e6ee;

			padding: 0px 27px;
		}

		/*Обрезаем первый и последний блок*/
		.tariffs > div:first-child{
			padding-right: 0px;
		}
		.tariffs > div:nth-child(2){
			height: 290px;
		}
		.tariffs > div:last-child{
			padding-left: 0px
		}

		/*Зеленый текст блока "Победитель"*/
		.tariffs > div:last-child > div:first-child{
			color: #508d27;
		}
		.tariffs > div:last-child > a > div{
			background-color: #508d27;
		}

		.tariffs > div > div:first-child{
			font-size: 20px;
			color:  #455175;
			margin: 28px 0px;
		}
		.tariffs > div{
			margin-top: 10px;
		}
		.tariffs > div > div:nth-child(2){
			margin: 15px 0px;
			padding: 15px 0px;
			border: 1px solid #e3e6ee;
			border-right: none;
			border-left: none;
		}
		.tariffs > div:nth-child(2){
			position: relative;
			top: -15px;
		}
		.tariffs > div:nth-child(2) > a{
			position: relative;
			top: 25px;
		}

		.tariffs > div > a{
			text-align: center;
			padding-top: 50px;
		}
		.tariffs > div > a > div{
			padding-top: 15px;
			margin-top: 24px;
			margin-bottom: 24px;
			margin-left: 6px;
			background-color: #455175;
			border-radius: 25px;
			height: 30px;
			width: 150px;
			text-align: center;
			vertical-align: middle;
		}

		.managerInfo > div:first-child{
			margin: 9px 0px;
			font-weight: bold;
		}
		.managerInfo > div:nth-child(2){
			font-weight: bold;
		}

		.helpCenter{
			background-blend-mode: overlay;
			background-position: center;
			margin-top: 5px;
			padding: 35px 60px;
			text-align: center;
			background-color: rgba(0,0,0,.7);
			background-image: url("https://imgur.com/download/oJtjSVL");
		}

		.helpCenter > div:first-child{
			margin-top: 0px;
		}

		.helpCenter > div:nth-child(2){
			margin-bottom: 40px;
			font-size: 14px;
		}

		.helpCenter > div:last-child > a > div{
			display: inline-block;
			padding-top: 15px;
			width: 180px;
			height: 35px;
			background-color: #508d27;
			border-radius: 4px;

		}

		.footer{
			margin-top: 10px;
		}
		.footer > div{
			text-align: center;
			font-size: 14px;
		}
		.footer > div:nth-child(3) > a > div{
			display: inline-block;
			border: 1px solid white;
			border-radius: 5px;

			padding: 10px 17px;
		}
		.footer > div:nth-child(3){
			margin-top: 18px;
			margin-bottom: 15px;
		}
		.footer > div:last-child{
			padding-top: 10px;
			border-top: 1px solid #e3e6ee;

			text-decoration: underline;
			text-decoration-style: dashed;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="header half">
			<div class="logo">ИнитПро</div>
			<div class="links">
				<a href="http://example.com/">Как начать учавствовать в торгах?</a><a href="http://example.com/">Тарифы</a><a href="http://example.com/">Вход</a>
			</div>
		</div>
		<div class="mainBlock">
			<div><?php echo $_smarty_tpl->tpl_vars['clientName']->value;?>
, добрый день</div>
			<div>Напоминаем, что доступ к системе поиска тендеров заканчивается 31.05.2016</div>

			<div class="bigHeadline headline">Популярные тарифы</div>

			<div class="tariffs">
				<div> 
					<div>Стандарт 6</div>
					<div>10 900 руб.</div>
					<div>6 месяцев</div>
					<a href="http://example.com/"><div>Заказать</div></a>
				</div><div>
					<div>Стандарт 12</div>
					<div>19 900 руб.</div>
					<div>12 месяцев</div>
					<a href="http://example.com/"><div>Заказать</div></a>
				</div><div>
					<div>Победитель</div>
					<div>29 900 руб.</div>
					<div>12 месяцев</div>
					<a href="http://example.com/"><div>Заказать</div></a>
				</div>
			</div>


			<div class="smallHeadline headline">Если вы уже продлили договор - можете проигнорировать это письмо.</div>

			<div class="managerInfo">
				<div>С уважением,</div>
				<div><?php echo $_smarty_tpl->tpl_vars['managerName']->value;?>
</div>
				<div><?php echo $_smarty_tpl->tpl_vars['managerJob']->value;?>
</div>
				<div>ООО «ИнитГрупп»</div>
				<div>сот. <?php echo $_smarty_tpl->tpl_vars['managerPhone']->value;?>
</div>
				<div>т. 8 (342) 259-48-55</div>
				<div><?php echo $_smarty_tpl->tpl_vars['managerEmail']->value;?>
</div>
				<div>www.initpro.ru</div>
			</div>
		</div>

		<div class="helpCenter">
			<div class="headline bigHeadline">Подробные инструкции</div>
			<div >Мы продолжаем совершенствовать наш сервис, постоянно улучшая эффективность работы с ним. Поэтому мы создали место, где вы можете посмотреть, как работает та или иная функция, какие настройки существуют и что для этого нужно сделать.</div>
			<div>
				<a href="http://example.com/">
					<div>Справочный центр</div>
				</a>
			</div>
		</div>
		<div class="footer">
			<div>Остались вопросы или нужна помощь с настройкой?</div>
			<div>Закажите обратный звонок нашим специалистам</div>
			<div><a href="http://example.com/"><div>Обратный звонок</div></a></div>
			<div><a href="http://example.com/">Нажмите здесь, чтобы отписаться от рассылки</a></div>
		</div>
	</div>
</body>
</html><?php }
}
