<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VETELIA</title>
	<link rel="stylesheet" href="css/jquery.fullPage.css">
	<link rel="stylesheet" href="css/iconos.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900,600italic|Armata' rel='stylesheet' type='text/css'>
</head>
<body>
<ul id="menunav">
    <div id="menu-close" class="btn-box"><a href="#"><i class="ico icon-cerrar"></i><span class="txt-btn">ATRÁS</span></a></div>
    <table>
        <td>
    <li class="menu-item" data-menuanchor="home" class="active"><a class="menu_btn" href="#home">HOME</a></li>
    <li class="menu-item" data-menuanchor="about"><a class="menu_btn" href="#about">ABOUT US</a></li>
    <li class="menu-item" data-menuanchor="products"><a class="menu_btn" href="#products">PRODUCTS</a></li>
    <li class="menu-item" data-menuanchor="price"><a class="menu_btn" href="#prices">PRICES</a></li>
    <li class="menu-subitem"><a class="menu_btn" href="#">BLOG</a></li>
    <li class="menu-subitem"><a class="menu_btn" href="#">STORE</a></li>
    <li class="menu-subitem"><a class="menu_btn" href="#">CONTACT</a></li>
        </td>
    </table>
</ul>

<div id="menu-open" class="btn-box"><a href="#"><i class="ico icon-menu"></i><span class="txt-btn">MENÚ</span></a></div>

<div id="fullpage">
    <section id="inicio" class="section" data-menuanchor="home">
        <img id="logo" src="assets/logo.png" alt="">
        <div class="down"><a href="#about" data-menuanchor="about"><i class="icoflecha icon-flecha"></i></a></div>
    </section>
    <section class="section" data-menuanchor="about">ABOUT</section>
    <section class="section" data-menuanchor="products">PRODUCTS</section>
    <section class="section" data-menuanchor="colors">COLORS</section>
    <section class="section" data-menuanchor="price">PRICE</section>
    <section class="section" data-menuanchor="contact">CONTACT</section>
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.fullPage.js"></script>
<script src="js/vendors/jquery.easings.min.js"></script>
<script src="js/base.js"></script>
<script>
    $('#fullpage').fullpage({
    	anchors:['home', 'about','products','colors','price','contact','blank'],
    	menu: '#menunav',
    	autoScrolling: false
    });
</script>
</body>
</html>