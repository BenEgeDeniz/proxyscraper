## PHP Proxy Scraper

**This PHP function scrapes the type of proxy you want from proxydb.net. 
(You can scrape a maximum of 13 proxies. Scraped proxies will be the same until proxydb.net administration updates the proxies on the first page of the desired type.)**

## Usage

    scrapeProxy(proxy_type, amount);

 Basic PHP Example:
 

    <?php
	
		include "scrapeProxy.php";

		scrapeProxy("socks5", 3);
		
	?>

This example will output 3 socks5 proxies from proxydb.net.

## Warnings

WARNING! The creator ("TimberLock") of this function is not affiliated with proxydb.net nor the administration of proxydb.net.

## License

This function is licensed with CC BY-NC 3.0. You may NOT use this function commercially.

License Info: https://creativecommons.org/licenses/by-nc/3.0
