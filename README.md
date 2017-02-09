# URL

A simple php7.1 class to set and get the current full url and it's parts ( app/core/url.php ). 


### Prerequisites

```
PHP 7.1
```

## Usage

```php
$url 		= new Url();

$full_url 	= $url->getUrl();
$url_parts	= $url->getUrlArray();
$scheme 	= $url->getScheme();
$host 		= $url->getHost();
$paths 		= $url->getPaths();
$query 		= $url->getQuery();
```

## Built With

* [Composer](https://getcomposer.org/) - Dependency Management

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* [Peter](https://css-tricks.com/snippets/php/get-current-page-url/#comment-1604248)
