<!DOCTYPE html>
<html >
<head>
<title>CSS3 | Псевдоклассы дочерних элементов</title>
<meta charset="utf-8" />
<meta name="description" content="Псевдоклассы дочерних элементов в CSS 3, селекторы :first-child, :last-child, :nth-child">
<meta name="viewport" content="width=device-width">
<link href='//metanit.com/style35.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">

<div id="header">
<div id="logo">
<a class="logoTitle" href="/" title="На главную">METANIT.COM</a>
<div class="logoDefinition">Сайт о программировании</div> 
</div>

<div class="socbtns">
<ul>
<li><a title="Посмотреть меню" rel="nofollow" class="fa fa-lg fa-bars"></a></li>
<li><a href="//metanit.com/donations.php" title="Помощь сайту" rel="nofollow" class="fa fa-lg fa-usd"></a></li>
<li><a href="https://vk.com/metanit" title="Группа в ВКонтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a href="https://twitter.com/Eugene225" title="Твиттер" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a href="https://www.facebook.com/metanitcom"  rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
<li><a href="https://www.youtube.com/user/Eugene22584/" title="Канал сайта на Youtube" rel="nofollow" class="fa fa-lg fa-youtube"></a></li>
<li><a href="https://t.me/metanit" title="Телеграмм" class="fa fa-lg fa-tel"></a></li>
<li><i id="toggle-theme" class="fa fa-lg fa-adjust"></i></li>
</ul>
</div>

<div id="search" class="transp">
<form action="https://www.google.ru" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3716042175333627:1096498938" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" />
    <input type="submit" name="sa" value="Найти" />
  </div>
</form>
</div>
<div class="icon-vk"></div>
<div id="magnifying-glass"></div>

<div class="menuButton" id="menuButton">
	<span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</div>

<div id="menu" class="menu">
<ul class="mainmenu">
   <li><a href="//metanit.com/news/">Новости</a></li>
   <li><a href="//metanit.com/sharp/">C#</a></li>
   <li><a href="//metanit.com/java/">Java</a></li>
   <li><a href="//metanit.com/web/">WEB</a></li>
   <li><a href="//metanit.com/python/">Python</a></li>
   <li><a href="//metanit.com/cpp/">C/C++</a></li>
   <li><a href="//metanit.com/sql/">SQL</a></li>
   <li><a href="//metanit.com/nosql/mongodb/">MongoDB</a></li>
   <li><a href="//metanit.com/go/">Go</a></li>
   <li><a href="//metanit.com/visualbasic/tutorial/">VB.NET</a></li>
   <li><a href="//metanit.com/swift/tutorial/">Swift</a></li>
   <li><a href="//metanit.com/kotlin/">Kotlin</a></li>
   <li><a href="//metanit.com/dart/">Dart</a></li>
   <li><a href="//metanit.com/php/">PHP</a></li>
   <li><a href="//metanit.com/rust/">Rust</a></li>
   <li><a href="//metanit.com/f/">F#</a></li>
</ul>
</div>
</div>
<div id="content_right"> 
<div id="content_right_inner"> 
<div id="content_center"> 
<div id="menC" class="menC">
<div class="articleText" id="articleText">
<h2>Псевдоклассы дочерних элементов</h2><div class="date">Последнее обновление: 21.04.2016</div>

<div class="socBlock">
<div class="share soctop">
<ul>
<li><a title="Поделиться в Вконтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a title="Поделиться в Одноклассниках" rel="nofollow" class="fa fa-lg fa-odnoklassniki"></a></li>
<li><a title="Поделиться в Твиттере" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a  rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
</ul>
</div>

</div>

<div style="margin-top:23px;margin-left:5px;">

<img src="https://metanit.com/metanit-front.jpg" id="jmw" style="cursor:pointer;" />
</div>

<p>Особую группу псевдоклассов образуют псевдоклассы, которые позволяют выбрать определенные дочерние элементы:</p>
<ul>
<li><p><span class="b">:first-child</span>: представляет элемент, который является первым дочерним элементом</p></li>
<li><p><span class="b">:last-child</span>: представляет элемент, который является последним дочерним элементом</p></li>
<li><p><span class="b">:only-child</span>: представляет элемент, который является единственным дочерним элементом в каком-нибудь контейнере</p></li>
<li><p><span class="b">:only-of-type</span>: выбирает элемент, который является единственным элементом определенного типа (тега) в каком-нибудь контейнере</p></li>
<li><p><span class="b">:nth-child(n)</span>: представляет дочерний элемент, который имеет определенный номер n, например, второй дочерний элемент</p></li>
<li><p><span class="b">:nth-last-child(n)</span>: представляет дочерний элемент, который имеет определенный номер n, начиная с конца</p></li>
<li><p><span class="b">:nth-of-type(n)</span>: выбирает дочерний элемент определенного типа, который имеет определенный номер</p></li>
<li><p><span class="b">:nth-last-of-type(n)</span>: выбирает дочерний элемент определенного типа, который имеет определенный номер, начиная с конца</p></li>
</ul>
<h3>Псевдокласс first-child</h3>
<p>Используем псевдокласс first-child для выбора первых ссылок в блоках:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;Селекторы в CSS3&lt;/title&gt;
        &lt;style&gt;
			a:first-child{
			
				color: red;
			}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;h3&gt;Планшеты&lt;/h3&gt;
		&lt;div&gt;
			&lt;a&gt;Microsoft Surface Pro 4&lt;/a&gt;&lt;br/&gt;
			&lt;a&gt;Apple iPad Pro&lt;/a&gt;&lt;br/&gt;
			&lt;a&gt;ASUS ZenPad Z380KL&lt;/a&gt;
		&lt;/div&gt;
		&lt;h3&gt;Смартфоны&lt;/h3&gt;
		&lt;div&gt;
			&lt;p&gt;Топ-смартфоны 2016&lt;/p&gt;
			&lt;a&gt;Samsung Galaxy S7&lt;/a&gt;&lt;br/&gt;
			&lt;a&gt;Apple iPhone SE&lt;/a&gt;&lt;br/&gt;
			&lt;a&gt;Huawei P9&lt;/a&gt;
		&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<img src="pics/4.15.png" alt="Селектор first-child в CSS 3" />
<p>Стиль по селектору <code>a:first-child</code> применяется к ссылке, если она является первым дочерним элементом любого элемента.</p>
<p>В первом блоке элемент ссылки является первым дочерним элементом, поэтому к нему применяется определенный стиль.</p>
<p>А во втором блоке первым элементом является параграф, поэтому ни к одной ссылке не применяется стиль.</p>
<h3>Псевдокласс last-child</h3>
<p>Используем псевдокласс <code>last-child</code>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;Селекторы в CSS3&lt;/title&gt;
        &lt;style&gt;
			a:last-child{
			
				color: blue;
			}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;h3&gt;Смартфоны&lt;/h3&gt;
		&lt;div&gt;
			&lt;a&gt;Samsung Galaxy S7&lt;/a&gt;&lt;br/&gt;
			&lt;a&gt;Apple iPhone SE&lt;/a&gt;&lt;br/&gt;
			&lt;a&gt;Huawei P9&lt;/a&gt;
		&lt;/div&gt;
		&lt;h3&gt;Планшеты&lt;/h3&gt;
		&lt;div&gt;
			&lt;a&gt;Microsoft Surface Pro 4&lt;/a&gt;&lt;br/&gt;
			&lt;a&gt;Apple iPad Pro&lt;/a&gt;&lt;br/&gt;
			&lt;a&gt;ASUS ZenPad Z380KL&lt;/a&gt;
			&lt;p&gt;Данные за 2016&lt;/p&gt;
		&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>	
<img src="pics/4.16.png" alt="Селектор last-child в CSS 3" />
<p>Селектор <code>a:last-child</code> определяет стиль для ссылок, которые являются последними дочерними элементами.</p>
<p>В первом блоке как раз последним дочерним элементом является ссылка. А вот во втором последним дочерним элементом является параграф, поэтому во 
втором блоке стиль не применяется ни к одной из ссылок.</p>
<h3>Селектор only-child</h3>
<p>Селектор <span class="b">:only-child</span> выбирает элементы, которые являются единственными дочерними элементами в контейнерах:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;Селекторы в CSS3&lt;/title&gt;
        &lt;style&gt;
		p:only-child{
			color:red;
		}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;h2&gt;Заголовок&lt;/h2&gt;
		&lt;div&gt;
			&lt;p&gt;Текст1&lt;/p&gt;
		&lt;/div&gt;
		&lt;div&gt;
			&lt;p&gt;Текст2&lt;/p&gt;
			&lt;p&gt;Текст3&lt;/p&gt;
		&lt;/div&gt;
		&lt;div&gt;
			&lt;p&gt;Текст4&lt;/p&gt;
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Параграфы с текстами "Текст1" и "Текст4" являются единственными дочерними элементами в своих внешних контейнерах, поэтому к ним применяется стиль - красный цвет шрифта.</p>
<img src="pics/4.69.png" alt="Селектор only-child в CSS 3" />
<h3>Псевдокласс only-of-type</h3>
<p>Псевдокласс only-of-type выбирает элемент, который является единственным элементом определенного типа в контейнере. Например, единственный элемент div, при этом 
элементов других типов в этом же контейнере может быть сколько угодно.</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;Селекторы в CSS3&lt;/title&gt;
        &lt;style&gt;
		span:only-of-type{
		
			color: green;	/* зеленый цвет */
		}
		p:only-of-type{
		
			color: red;	/* красный цвет */
		}
		div:only-of-type{
		
			color: blue;	/* синий цвет */
		}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;div&gt;
			Header
		&lt;/div&gt;
		&lt;p&gt;Единственный параграф и &lt;span&gt;элемент спан&lt;/span&gt;&lt;/p&gt;
		&lt;div&gt;
			Footer
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Хотя для элементов div определен стиль, он не будет применяться, так как в контейнере body находится два элемента div, а не один. Зато в body есть 
только один элемент p, поэтому он получит стилизацию. И также в контейнере p есть только один элемент span, поэтому он также будет стилизован.</p>
<img src="pics/4.70.png" alt="Псевдокласс only-of-type в CSS 3" />
<h3>Псевдокласс nth-child</h3>
<p>Псевдокласс <span class="b">nth-child</span> позволяет стилизовать каждый второй, третий элемент, только четные или только нечетные элементы и т.д.</p>
<p>Например, стилизуем четные и нечетные строки таблицы:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;Селекторы в CSS3&lt;/title&gt;
        &lt;style&gt;
			tr:nth-child(odd) { background-color: #bbb; }
			tr:nth-child(even) { background-color: #fff; }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;h3&gt;Смартфоны&lt;/h3&gt;
		&lt;table&gt;
			&lt;tr&gt;&lt;td&gt;Samsung&lt;/td&gt;&lt;td&gt;Galaxy S7 Edge&lt;/td&gt;&lt;td&gt;60000&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td&gt;Apple&lt;/td&gt;&lt;td&gt;iPhone SE&lt;/td&gt;&lt;td&gt;39000&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td&gt;Microsoft&lt;/td&gt;&lt;td&gt;Lumia 650&lt;/td&gt;&lt;td&gt;13500&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td&gt;Alcatel&lt;/td&gt;&lt;td&gt;Idol S4&lt;/td&gt;&lt;td&gt;30000&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td&gt;Huawei&lt;/td&gt;&lt;td&gt;P9&lt;/td&gt;&lt;td&gt;60000&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td&gt;HTC&lt;/td&gt;&lt;td&gt;HTC 10&lt;/td&gt;&lt;td&gt;50000&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td&gt;Meizu&lt;/td&gt;&lt;td&gt;Pro 6&lt;/td&gt;&lt;td&gt;40000&lt;/td&gt;&lt;/tr&gt;
			&lt;tr&gt;&lt;td&gt;Xiaomi&lt;/td&gt;&lt;td&gt;Mi5&lt;/td&gt;&lt;td&gt;35000&lt;/td&gt;&lt;/tr&gt;
		&lt;/table&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<img src="pics/4.17.png" alt="Селектор nth-child в CSS 3" />
<p>Чтобы определить стиль для нечетных элементов, в селектор передается значение "odd":</p>
<pre class="brush:css;">tr:nth-child(odd){} </pre>
<p>Для стилизации четных элементов в селектор передается значение "even":</p>
<pre class="brush:css;">tr:nth-child(even){} </pre>
<p>Также в этот селектор мы можем передать номер стилизуемого элемента:</p>
<pre class="brush:css;">tr:nth-child(3) { background-color: #bbb; }</pre>
<p>В данном случае стилизуется третья строка.</p>
<p>Еще одну возможность представляет использование заменителя для номера, который выражается буквой <span class="b">n</span>:</p>
<pre class="brush:css;">tr:nth-child(2n+1) { background-color: #bbb; }</pre>
<p>Здесь стиль применяется к каждой второй нечетной строке.</p>
<p>Число перед n (в данном случае 2) представляет тот дочерний элемент, который будет выделен следующим. Число, которое идет после знака плюс, 
показывают, с какого элемента нужно начинать выделение, то есть, +1 означает, что нужно начинать с первого дочернего элемента.</p>
<p>Таким образом, в данном случае выделение начинается с 1-го элемента, а следующим выделяется 2 * 1 + 1 = 3-й элемент, далее 2 * 2 + 1 = 5-й элемент и так далее.</p>
<p>К примеру, если мы хотим выделить каждый третий элемент, начиная со второго, то мы могли бы написать:</p>
<pre class="brush:css;">tr:nth-child(3n+2) { background-color: #bbb; }</pre>
<img src="pics/4.18.png" alt="Селектор nth-child в CSS" />
<p>Псевдокласс <span class="b">:nth-last-child</span> по сути предоставляет ту же самую функциональность, только отсчет элементов идет не с начала, а с конца:</p>
<pre class="brush:css;">
tr:nth-last-child(2) { 
	background-color: #bbb; /* 2 строка с конца, то есть предпоследняя  */
}
tr:nth-last-child(2n+1) {  
	background-color: #eee; /* нечетные строки, начиная с конца  */
}
</pre>
<img src="pics/4.77.png" alt="Псевдокласс nth-last-child в CSS 3" />
<h3>Псевдокласс nth-of-type</h3>
<p>Псевдокласс <span class="b">:nth-of-type</span> позволяет выбрать дочерний элемент определенного типа по определенному номеру:</p>
<pre class="brush:css;">
tr:nth-of-type(2) { 
	background-color: #bbb;
}
</pre>
<p>Аналогично работает псевдокласс <span class="b">nth-last-of-type</span>, только теперь отсчет элементов идет с конца:</p>
<pre class="brush:css;">
tr:nth-last-of-type(2n) { 
	background-color: #bbb;
}
</pre>
<div style="margin-top:25px;clear:both;">
<style>
.metanit-rect { width: 300px; height: 250px; }
@media(min-width: 500px) { .metanit-rect { width: 336px; height: 280px; } }
@media(min-width: 760px) { .metanit-rect { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .metanit-rect { width: 336px; height: 280px;  } }
@media(min-width: 1122px) { .metanit-rect{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .metanit-rect{ width: 970px; height: 90px;} }
</style>
<!-- metanit_rect -->
<ins class="adsbygoogle metanit-rect"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="3119477283"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


<div class="nav"><p><a href="5.5.php">Назад</a><a href="./">Содержание</a><a href="5.12.php">Вперед</a></p></div></div>
<div class="socBlock">
<div class="share socbottom">
<ul>
<li><a title="Поделиться в Вконтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a title="Поделиться в Одноклассниках" rel="nofollow" class="fa fa-lg fa-odnoklassniki"></a></li>
<li><a title="Поделиться в Твиттере" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
</ul>
</div>
</div>

<style>
.commentABl { margin: 25px 0px 15px 0px;}
@media(min-width: 860px) { .commentABl { margin: 35px 10px 15px 15px;  } }
</style>
<div class="commentABl" style="clear:both;">
<ins class="adsbygoogle metanit-rect"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="3119477283"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<script>const ap = 1845270558;</script>
<script async type='text/javascript' src='//metanit.com/js/lisrc4.js'></script>

<div id="disqus_thread" style="margin-left:8px;margin-right:8px;clear:both;"></div>
<script type="text/javascript">
var disqus_shortname = 'metanitcom';
(function() {
var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
</script>

</div>
</div> 
<div id="menR" class="menR">
<style>
.meta-vert { width: 300px; height: 250px; }
@media(min-width: 500px) { .meta-vert { width: 336px; height: 280px; } }
@media(min-width: 1000px) { .meta-vert { width: 160px; height: 600px; } }
</style>
<!-- meta_vert -->
<ins class="adsbygoogle meta-vert"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="4596210485"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<style>
.dn {font-size:12.5px;margin:3px;}
.dh{font-weight:bold;margin-left:2px;}
</style>
<div class="dn">
<div class="dh">Помощь сайту</div>
<div class="dh">YooMoney</div>
<ul>
<li>410011174743222</li>
</ul>
<div class="dh">Перевод на карту</div>
<ul>
<li>Номер карты: 4048415020898850</li>
<li>Номер карты: 4890494751804113</li>
</ul>
</div>

</div>
</div>
</div> 
<div class="menT" id="menT"><ul id="browser" class="filetree"> 
		<li class="closed"><span class="folder">Глава 1. Введение в HTML5</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/1.1.php">Что такое HTML</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/1.2.php">Элементы и атрибуты</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/1.3.php">Создание документа</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/1.4.php">Разновидности синтаксиса</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Элементы в HTML5</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/1.5.php">Элемент head и метаданные веб-страницы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.1.php">Элементы группировки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.2.php">Заголовки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.3.php">Форматирование текста</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.4.php">Работа с изображениями</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.5.php">Списки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.6.php">Элемент details</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.7.php">Список определений</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.8.php">Таблицы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.9.php">Ссылки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.10.php">Элементы figure и figcaption</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.11.php">Фреймы</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Работа с формами</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/3.1.php">Формы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.2.php">Элементы форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.3.php">Кнопки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.4.php">Текстовые поля</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.5.php">Метки и автофокус</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.6.php">Элементы для ввода чисел</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.7.php">Флажки и переключатели</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.8.php">Элементы для ввода цвета, url, email, телефона</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.9.php">Элементы для ввода даты и времени</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.10.php">Отправка файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.11.php">Список select</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.12.php">Textarea</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.13.php">Валидация форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.14.php">Элементы fieldset и legend</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Семантическая структура страницы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/4.1.php">Элемент article</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.2.php">Элемент section</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.3.php">Элемент nav</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.4.php">Элементы header, footer и address</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.5.php">Элемент aside</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.6.php">Элемент main</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Основы CSS3. Селекторы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/5.1.php">Введение в стили</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.2.php">Селекторы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.3.php">Селекторы потомков</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.4.php">Селекторы дочерних элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.8.php">Селекторы элементов одного уровня</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.5.php">Псевдоклассы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.11.php">Псевдоклассы дочерних элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.12.php">Псевдоклассы форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.6.php">Псевдоэлементы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.7.php">Селекторы атрибутов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.9.php">Наследование стилей</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.10.php">Каскадность стилей</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.13.php">Псевдоклассы :is() и :where()</a></span></li>
			</ul>
		</li>
		
		<li class="closed"><span class="folder">Глава 6. Основы CSS3. Свойства</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/6.1.php">Цвет в CSS</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.2.php">Стилизация шрифтов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.3.php">Внешние шрифты</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.4.php">Высота шрифта</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.5.php">Форматирование текста</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.6.php">Стилизация абзацев</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.7.php">Стилизация списков</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.8.php">Стилизация таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.9.php">Блочная модель</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.10.php">Внешние отступы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.11.php">Внутренние отступы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.12.php">Границы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.13.php">Размеры элементов. Box-sizing</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.14.php">Фон элемента</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.15.php">Создание тени у элемента</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.16.php">Контуры элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.17.php">Обтекание элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.18.php">Прокрутка элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.19.php">Линейный градиент</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.20.php">Радиальный градиент</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.21.php">Стилизация элемента details</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Создание макета страницы и верстка</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/8.1.php">Блочная верстка. Часть 1</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.2.php">Блочная верстка. Часть 2</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.3.php">Вложенные плавающие блоки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.4.php">Выравнивание столбцов по высоте</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.5.php">Свойство display</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.6.php">Создание панели навигации</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.7.php">Выравнивание плавающих элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.8.php">Создание простейшего макета</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.9.php">Позиционирование</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.10.php">Фиксированное позиционирование</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 8. Трансформации, переходы и анимации</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/9.1.php">Трансформации</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/9.2.php">Переходы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/9.3.php">Анимация</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 9. Адаптивный дизайн</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/11.1.php">Введение в адаптивный дизайн</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/11.2.php">Метатег Viewport</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/11.3.php">Media Query в CSS</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 10. Мультимедиа</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/7.1.php">Видео</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/7.2.php">Аудио</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/7.3.php">Media API. Управление видео из JavaScript</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 11. Canvas</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/10.1.php">Доступ к canvas и рисование прямоугольников</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.9.php">Настройка рисования</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.2.php">Фоновые изображения</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.3.php">Создание градиента</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.4.php">Рисование текста</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.5.php">Рисование фигур</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.6.php">Рисование изображений</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.7.php">Добавление теней</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.8.php">Редактирование пикселей</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.10.php">Трансформации</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.11.php">Рисование мышью</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 12. Flexbox</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/12.1.php">Что такое Flexbox. Flex Container</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.2.php">Направление flex-direction</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.3.php">flex-wrap</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.4.php">flex-flow. Порядок элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.5.php">Выравнивание элементов. justify-content</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.6.php">Выравнивание элементов. align-items и align-self</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.7.php">Выравнивание строк и столбцов. align-content</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.8.php">Управление элементами. flex-basis, flex-shrink и flex-grow</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.9.php">Многоколоночный дизайн на Flexbox</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.10.php">Макет страницы на Flexbox</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 13. Grid Layout</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/13.1.php">Что такое Grid Layout. Grid Container</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.2.php">Строки и столбцы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.3.php">Функция repeat и свойство grid</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.4.php">Размеры строк и столбцов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.5.php">Отступы между столбцами и строками</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.6.php">Позиционирование элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.7.php">Наложение элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.8.php">Направление и порядок элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.9.php">Именованные grid-линии</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.10.php">Именованные grid-линии и функция repeat</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.11.php">Области грида</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.12.php">Макет страницы в Grid Layout</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 14. Переменные в CSS</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/14.1.php">Стилизация с помощью переменных</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/14.2.php">Создание тем CSS с помощью переменных</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/14.3.php">Стили CSS как хранилище данных</a></span></li>
			</ul>
		</li>
	</ul></div>
<div id="footer">

<div class="bootomLinks">
<a href="https://vk.com/metanit" title="Присоединиться к группе вконтакте" rel="nofollow">
Вконтакте</a>|
<a href="https://twitter.com/Eugene225" title="Подписаться на твит-ленту" rel="nofollow">
Twitter</a>|
<a href="https://www.youtube.com/user/Eugene22584/" title="Подписаться на канал на youtube" rel="nofollow">
Канал сайта на youtube</a>|
<a href="//metanit.com/donations.php" rel="nofollow">Помощь сайту</a>
</div>
<p>Контакты для связи: metanit22@mail.ru</p>
<p>Copyright &copy; metanit.com, 2012-2022. Все права защищены.</p>
</div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>
const original = { open: XMLHttpRequest.prototype.open};
XMLHttpRequest.prototype.open = function (method, url) {
 
  if(url.includes("tempest.services.disqus.com")) return false;
  return original.open.apply(this, arguments);
};
</script>
<script type='text/javascript' src='//metanit.com/js/jquery.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/jquery.treeview.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/syntax12.js'></script>
<script type='text/javascript'>SyntaxHighlighter.all();</script>
<script>
$(function() { 
	$("#menuButton").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $('.mainmenu');
          if (mainmenu.hasClass('open')) { 
            mainmenu.removeClass('open');
          }
          else {
            mainmenu.addClass('open');
          }
        });
	$('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open');
			  $(this).children('span').removeClass('open');
			  $(this).children('span').addClass('close');
            }
            else {
              $(this).siblings('ul').addClass('open');
			  $(this).children('span').removeClass('close');
			  $(this).children('span').addClass('open');
            }
          });
  $("#toggle-theme").on("click", function() {
		if(document.documentElement.hasAttribute("theme")){
			document.documentElement.removeAttribute("theme");
			document.cookie="theme=1;expires=Mon, 19 Feb 2001 12:00:00 UTC;path=/;";
		}
		else{
			document.documentElement.setAttribute("theme", "dark");
			var expire = new Date();
			expire.setHours(expire.getHours() + 7);
			document.cookie="theme=1;expires=" + expire.toUTCString() + ";path=/;";
		}
	});
	$('#magnifying-glass').on('click', function() {
            if ($('#search').hasClass('transp')) {
              $('#search').removeClass('transp').show();
            }
            else {
              $('#search').addClass('transp').hide();
            }
          });
		  
	$('#browser').treeview();$('#navigation').treeview({persist: 'location',collapsed: true, unique: true});
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава .')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава .')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
	var url = "//metanit.com" + location.pathname;
	
	$('.file a[href="' + url + '"]').addClass('aMItem').parent().addClass('aMItem').closest('li.collapsable').find('span.folder').addClass('aMItem');
	
	$(".fa-bars").on('click', function() {
		$(".menT").toggleClass("menTOpened");
		$("#content_right_inner").toggleClass("contentRightInnerOpened");
	});

    $('#jma').on('click', function() {
            window.open("https://c"+"lck.r" +"u/en89y").focus();
          });
    $('#jmw').on('click', function() {
            window.open("https://c"+"lck.r"+"u/en89V").focus();
          });
	$(".share .fa-vk").attr('onclick','window.open("http://vk.com/share.php?url=' + window.location.href+'","Поделиться в ВКОНТАКТЕ","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-odnoklassniki").attr('onclick','window.open("https://connect.ok.ru/offer?url=' + window.location.href+'","Поделиться в Одноклассниках","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-twitter").attr('onclick','window.open("http://twitter.com/share?url=' + window.location.href+'","Поделиться в Твиттере","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-facebook").attr('onclick','window.open("http://www.facebook.com/sharer.php?u=' + window.location.href +'","Поделиться","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
});
</script>
<script>
window.onload= function(){
	setMenC();
};
window.onresize= function(){
	setMenC();
};

function setMenC(){
	if(window.innerWidth >859){
			
		var h = document.getElementById("articleText").clientHeight;
		document.getElementById("menT").style.maxHeight=h + "px";
	}
}
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35780297-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-35780297-1');
</script>

<script async defer type="text/javascript" src="https://www.google.ru/coop/cse/brand?form=cse-search-box&amp;lang=ru"></script>
</body>
</html>