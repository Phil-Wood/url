<?php

require "../vendor/autoload.php";

use App\Core\Url;
use App\Core\Helper;

$routing 	= new Url();
$url 		= $routing->getUrl();
$urlParts	= $routing->getUrlArray();
$scheme 	= $routing->getScheme();
$host 		= $routing->getHost();
$paths 		= $routing->getPaths();
$query 		= $routing->getQuery();

$helper = new Helper();
$helper->raw($url);
$helper->raw($urlParts);
$helper->raw($scheme);
$helper->raw($host);
$helper->raw($paths);
$helper->raw($query);