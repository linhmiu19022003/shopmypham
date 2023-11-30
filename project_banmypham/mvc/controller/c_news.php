<?php
ini_set('track_errors', 'on');
ini_set('display_errors', 'on');


//Lay du lieu theo id da duoc GET ve o tren
$blog = $db->get('blog', array());


require_once('./view/v_news.php');