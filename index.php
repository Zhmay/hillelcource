<?php
require_once 'vendor/autoload.php';

use Core\Router;
use Lib\DB\Connector;
use Lib\DB\Select;

$connector = new Connector();
$con = $connector->getConnect();
$add = $con->prepare("INSERT INTO users (name, age) VALUES ('Bogdan', 30)");
$remove = $con->prepare("DELETE FROM posts WHERE (posts.id = 3)");
$update = $con->prepare("UPDATE `posts` SET `detail` = 'update text here 1' WHERE `posts`.`id` = 3;");

$select = new Select();
//$select->setFieldNames('name');
$select->setTableNames('users');

var_dump($select->getSqlString());


//$select = $con->prepare('SELECT * FROM posts', array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
//$select->execute();
//$posts = $select->fetchAll(PDO::FETCH_ASSOC);

//echo '<pre>';
//print_r($posts);
//echo '</pre>';

//$router = new Router();
//$router->run();