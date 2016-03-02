<!-- Add your HTML Here  -->
<?php

/** Make sure that the WordPress bootstrap has run before continuing. */
require( dirname(__FILE__) . '/wp-load.php' );
// Redirect to https login if forced to use SSL
if ( force_ssl_admin() && ! is_ssl() ) {
	if ( 0 === strpos($_SERVER['REQUEST_URI'], 'http') ) {
		wp_redirect( set_url_scheme( $_SERVER['REQUEST_URI'], 'https' ) );
		exit();
	} else {
		wp_redirect( 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
		exit();
	}
}
	<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title>name</title>
	

		<style type="text/css">html{background-color: transparent;}</style>
	<link rel="stylesheet" href="./view.css" >
	
	</head>

<body>
<!--

// Соединяемся, выбираем базу данных
$link = mysql_connect('mysql.hostinger.com.ua', 'u450252009_admin', 'QdMWc5XJGfPg')
    or die('Не удалось соединиться: ' . mysql_error());
echo 'Соединение успешно установлено';
mysql_select_db('u450252009_autom') or die('Не удалось выбрать базу данных');

// Выполняем SQL-запрос
$query = 'SELECT * FROM my_table';
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

// Выводим результаты в html
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Освобождаем память от результата
mysql_free_result($result);

// Закрываем соединение
mysql_close($link);

-->

<div class="header">Site  </div>
  <div class="clr"></div>
  <div class="choser" >
    <select>
 		 <option value="volvo">Volvo</option>
  		<option value="saab">Saab</option>
 		 <option value="opel">Opel</option>
 		 <option value="audi">Audi</option>
	</select>
     <select>
 		 <option value="volvo">Volvo</option>
  		<option value="saab">Saab</option>
 		 <option value="opel">Opel</option>
 		 <option value="audi">Audi</option>
	</select>
  </div>
  <div class="clr"></div>
 
  <div class="imag"><img src="" alt="Image" style="width:70%;"> </div>

  <div class="clr"></div>
  
	<div class="butlr" > 
    <button> '<' </button> 
    <button> '>' </button>
	</div>
  
  <div class="footr"> 
    <p>    Help    </p>
  </div>
  
</body>

</html>

?>