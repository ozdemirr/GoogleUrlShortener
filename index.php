<?php

require_once("GoogleUrlShortner.php");

/**
 * You can get instance without ApiKey but An API key is highly recommended
 * More Info : https://developers.google.com/url-shortener/v1/getting_started#shorten
 */
$googleUrlShortener = new GoogleUrlShortener();

/** string
 * a standard link to short
 */
//$link = "http://www.google.com";

/** gets string or array
 * Make it short
 * returns array
 */
//$short = $googleUrlShortener->shorten($link);

/** array
 * an array with full of links
 */
//$links = array(
//    "http://www.google.com",
//    "http://www.youtube.com"
//);

/** gets string or array
 * make them short
 * returns array
 */
//$shorts = $googleUrlShortener->shorten($links);

/** string
 * a shortUrl
 */
//$shortLink = "http://goo.gl/fbsS";

/** gets string or array
 * expand the shortUrl
 * return array
 * Look at https://developers.google.com/url-shortener/v1/url/get?#request for additional information values
 */
//$long = $googleUrlShortener->expand($shortLink);

/** array
 * an array with full of shortUrls
 */
//$shortLinks = array(
//    "http://goo.gl/fbsS"
//);

/** gets string or array
 * expand the shortUrls
 * returns array
 */
//$longs = $googleUrlShortener->expand($shortLinks);