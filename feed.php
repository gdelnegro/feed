<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getRSS($url){
    
    $rss = new DOMDocument();
	$rss->load($url);
        
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
		
                echo '<h3>'.$title.'</h3>';
                echo $link;
		echo '<span> Postado em '.$date.'</span>';
		echo '<p>'.$description.'</p>';
                
                echo"<br>";
	}
        
        
        $linkNoticia = $feed[0]['link'];
        
        global $linkNoticia;
}

function getNoticia(){
    $html=  file_get_contents('http://agilmotoboy.com.br/blog/prefeito-haddad-acaba-com-a-motofaixa/');
        $noticia = new DOMDocument();
        $noticia->validateOnParse = false;
        $noticia->loadHTML('<?xml encoding="UTF-8">'.$html);
        
        $posts = $noticia->getElementsByTagName('article');
        
        while($post = $posts->item($i++)){
            $postagem = $noticia->saveHTML($post);
        }
        
        return $postagem;
}
                
        
        

