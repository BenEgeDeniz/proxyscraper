<?php 

/*

ProxyDB.NET Proxy Scraper

* Usage: scrapeProxy(proxy_type, amount)
* Description: This PHP function scrapes the type of proxy you want from proxydb.net. (You can scrape a maximum of 13 proxies. Scraped proxies will be the same until proxydb.net administration updates the proxies on the first page of the desired type.)

* Developer: TimberLock
* Developer Website: https://benegedeniz.com

WARNING! The creator ("TimberLock") of this function is not affiliated with proxydb.net nor the administration of proxydb.net.

WARNING 2! This function is licensed with CC BY-NC 3.0. You may NOT use this function commercially.

License Info: https://creativecommons.org/licenses/by-nc/3.0

*/

function scrapeProxy($type, $count)
{
	if ($count <= 13)
	{
		$ch = curl_init();  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, "http://proxydb.net/?protocol=" . $type);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_USERAGENT, "PHP Proxy Scraper");
		$prxData = curl_exec($ch);
		curl_close($ch);

		unset($ch);

		preg_match_all("#(\d{1,3}\.){3}\d{1,3}:\d{2,5}#", $prxData, $proxies);

		unset($prxData);

		$prxCount = 1;

		while ($prxCount < $count + 1)
		{
			$prxCount = $prxCount + 1;
			echo $proxies[0][$prxCount] . "<br>";
		}

		unset($prxCount, $proxies);
	}
	else
	{
		echo json_encode(["error" => "Proxy count limit exceeded. You can get maximum 13 proxies."]);
	}
}

?>