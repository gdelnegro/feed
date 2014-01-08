<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
	$rss = new DOMDocument();
	$rss->load('http://agilmotoboy.com.br/blog/feed/');
        
        $xml = simplexml_import_dom($rss);
        
	$feed = array();
        $slashNS = "http://purl.org/rss/1.0/modules/slash/";

	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}    
	$limit = 3;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
                $cat = $feed[$x]['cat'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		echo $link;
		echo 'Postado em '.$date.'';
		echo ''.$description.'';
	}
        ?>
    </body>
</html>
