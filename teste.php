<?php
header('Content-Type: text/html; charset=UTF-8');
#error_reporting(E_ALL);
#ini_set('display_errors', 1);

require 'simple_html_dom.php';

function DOMinnerHTML($element) 
{ 
    $innerHTML = ""; 
    $children = $element->childNodes; 
    foreach ($children as $child) 
    { 
        $tmp_dom = new DOMDocument(); 
        $tmp_dom->appendChild($tmp_dom->importNode($child, true)); 
        $innerHTML.=trim($tmp_dom->saveHTML()); 
    } 
    return $innerHTML; 
} 


        
        
        $html='<div id="main">

		<div id="primary">
			<div id="content" role="main">

				
					<nav id="nav-single">
						<h3 class="assistive-text">Navegação de Posts</h3>
						<span class="nav-previous"><a href="http://agilmotoboy.com.br/blog/ministro-do-trabalho-e-emprego-recepciona-o-sindimotosp/" rel="prev"><span class="meta-nav">&larr;</span> Anterior</a></span>
						<span class="nav-next"></span>
					</nav><!-- #nav-single -->

					
<article id="post-354" class="post-354 post type-post status-publish format-standard hentry category-noticia-reportagens tag-motofaixa tag-prefeitura">
	<header class="entry-header">
		<h1 class="entry-title">Prefeito Haddad acaba com a motofaixa</h1>

				<div class="entry-meta">
			<span class="sep">Publicado em </span><a href="http://agilmotoboy.com.br/blog/prefeito-haddad-acaba-com-a-motofaixa/" title="2:58 pm" rel="bookmark"><time class="entry-date" datetime="2013-11-19T14:58:24+00:00">19/11/2013</time></a><span class="by-author"> <span class="sep"> por </span> <span class="author vcard"><a class="url fn n" href="http://agilmotoboy.com.br/blog/author/press/" title="Ver todos os posts de entregador" rel="author">entregador</a></span></span>		</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

	<div class="entry-content">
		<div>
<p>&#8230;Por entender que elas são úteis e diminuíram sim, os acidentes na Avenida Sumaré e na Rua Vergueiro.</p>
<p>A prefeitura alega que elas não atenderam as expectativas de diminuição de acidentes, porém,<strong> <span style="color: #003366;">com apenas duas motofaixas é impossível isso acontecer.</span></strong></p>
<p><a href="http://agilmotoboy.com.br/blog/wp-content/uploads/2013/11/prefeitura-apagam-sinalizacao-da-motofaixa.jpg"><img class="alignright size-medium wp-image-356" alt="prefeitura-apagam-sinalizacao-da-motofaixa" src="http://agilmotoboy.com.br/blog/wp-content/uploads/2013/11/prefeitura-apagam-sinalizacao-da-motofaixa-300x156.jpg" width="314" height="189" /></a>&#8220;É necessário mais, e não, a extinção delas&#8221;, diz Gilberto Almeida dos Santos, presidente do SindimotoSP, que ainda alega que as motofaixas agilizam o tempo de entrega dos motofretistas.</p>
<p>Gil ainda afirma que, caso a prefeitura não recue nessa decisão, uma grande paralisação em São Paulo pode acontecer por parte dos insatisfeitos.</p>
<p>Fonte: <a href="http://www.gilsindimotosp.blogspot.com.br/2013/11/sindimotosp-nao-concorda-com-fim-das.html">Imprensa SindimotoSP</a></p>
</div>
			</div><!-- .entry-content -->

	<footer class="entry-meta">
		Esse post foi publicado em <a href="http://agilmotoboy.com.br/blog/category/noticia-reportagens/" title="Ver todos os posts em Noticias e Reportagens" rel="category tag">Noticias e Reportagens</a> e marcado <a href="http://agilmotoboy.com.br/blog/tag/motofaixa/" rel="tag">motofaixa</a>, <a href="http://agilmotoboy.com.br/blog/tag/prefeitura/" rel="tag">prefeitura</a> por <a href="http://agilmotoboy.com.br/blog/author/press/">entregador</a>. Guardar <a href="http://agilmotoboy.com.br/blog/prefeito-haddad-acaba-com-a-motofaixa/" title="Link permanente para Prefeito Haddad acaba com a motofaixa" rel="bookmark">link permanente</a>.		
			</footer><!-- .entry-meta -->
</article><!-- #post-354 -->';
        
        
        
      #$page = file_get_contents('http://agilmotoboy.com.br/blog/prefeito-haddad-acaba-com-a-motofaixa/');  
 #       $classname = 'entry-content';
#$dom = new DOMDocument;
#$dom->loadHTML($page);
#$xpath = new DOMXPath($dom);
#$results = $xpath->query("//*[@class='" . $classname . "']");

#$books = $dom->getElementsByTagName('article');
#foreach ($books as $book) {
#    echo $book->nodeValue, PHP_EOL;
#}

#if ($results->length > 0) {
#    echo $review = $results->item(0)->nodeValue;
#}
        
        
        
       /* 
        $doc = new DOMDocument();
$doc -> loadHTML($page);
$divs = $doc->getElementsByTagName('article');
foreach($divs as $div) {
    if ($div->getAttribute('class') === 'entry-content') {
        $innerHtml = DOMinnerHTML($div);
        echo '<article>' . $innerHtml . '</article>';
    }
}
*/
      
      
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