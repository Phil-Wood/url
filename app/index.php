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

Helper::raw($full_url);
Helper::raw($url_parts);
Helper::raw($scheme);
Helper::raw($host);
Helper::raw($paths);
Helper::raw($query);
