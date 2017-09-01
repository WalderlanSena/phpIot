<?php
/**
 *  Phpuino - Manipulando porta serial arduino com php, atraves de leitura via streams
 *  @version: v1.0.0
 *  @author: Walderlan Sena <eu@walderlan.xyz>
 *  @copyright: Walderlan Sena - 2017
 */

require_once "../vendor/autoload.php";

$app = new \Core\Phpuino();
$app->setPort("/dev/ttyACM0","r+");

$write = new \Core\Write($app);
$write->write("on");
