<?php
$html = file_get_contents("http://southpointecapital.com/news/");

$doc = new DOMDocument();
$doc->loadHTML($html);    
$selector = new DOMXPath($doc);
$result = $selector->query('//input[@id="_wpnonce"]');
/*
<input id="_wpnonce" value="abuscar" />
*/

// loop through all found items
foreach($result as $node) {
    echo $node->getAttribute('value');
    /*
    print aBuscar
    */
}
?>