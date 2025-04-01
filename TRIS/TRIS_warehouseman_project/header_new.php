<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>The Great Keksby</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="page-header">
      <div class="container">
        <div class="header-top clearfix">
          <div class="header-logo">
            <img src="img/logo.png" alt="The Great Keksby" width="205" height="55">
          </div>
          <ul class="main-nav clearfix">
            <li><a href="wh_shipment.html">Поставки</a></li>
            <li><a href="wh_orders.html">Заказы</a></li>
          </ul>
  			<?php if (isset($_SESSION['uid'])): ?>
  		  		<a class="btn btn-quick-order" href="login.php?exit=1">Выйти</a>
            <?php else: ?>
          		<a class="btn btn-quick-order" href="login.php">Войти</a>
            <?php endif; ?>
        </div>
      </div>
    </div>