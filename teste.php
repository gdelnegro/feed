<?php
    
$doc = new DOMDocument();
$doc->validateOnParse = false; 
$doc->loadHTMLFile('http://agilmotoboy.com.br/blog/prefeito-haddad-acaba-com-a-motofaixa/');

$tables = $doc->getElementsByTagName('article');
 
$i = 0;
while($table = $tables->item($i++))
{
    echo $doc->saveHTML($table);
}

?>