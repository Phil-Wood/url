<?php

require "../vendor/autoload.php";

use App\Core\Url;
use App\Core\Helper;

$url 		= new Url();

$full_url 	= $url->getUrl();
$url_parts	= $url->getUrlArray();
$scheme 	= $url->getScheme();
$host 		= $url->getHost();
$paths 		= $url->getPaths();
$query 		= $url->getQuery();

$helper 	= new Helper();

$helper->raw($full_url);
$helper->raw($urlParts);
$helper->raw($scheme);
$helper->raw($host);
$helper->raw($paths);
$helper->raw($query);