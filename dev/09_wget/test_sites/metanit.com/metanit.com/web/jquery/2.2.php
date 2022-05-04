<!DOCTYPE html>
<html >
<head>
<title>Фильтры jQuery</title>
<meta charset="utf-8" />
<meta name="description" content="Использование фильтров jQuery, базовые фильтры even, odd, last, first. Доступ к содержимому элементов. Работа с полями формы">
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
<h2>Фильтры jQuery</h2><div class="date">Последнее обновление: 1.11.2015</div>

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
<style>
.footer-adaptive { width: 300px; height: 250px; }
@media(min-width: 480px) { .footer-adaptive { width: 468px; height: 60px; } }
@media(min-width: 760px) { .footer-adaptive { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .footer-adaptive { width: 468px; height: 60px;  } }
@media(min-width: 1122px) { .footer-adaptive{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .footer-adaptive { width: 970px; height: 90px;} }
</style>
<!-- footer_adaptive -->
<ins class="adsbygoogle footer-adaptive"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="9659512088"></ins>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<p>В дополнение к селекторам применяются фильтры. Фильтры позволяют отфильтровать найденные элементы по определенному принципу.</p> 
<p>Применять фильтры также просто, как и селекторы. Например, мы можем получить элементы только с четными индексами:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Мир jQuery&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;table&gt;
&lt;tr&gt;&lt;td&gt;Слово&lt;/td&gt;&lt;td&gt;Перевод&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;Cabbage&lt;/td&gt;&lt;td&gt;Капуста&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;Carrot&lt;/td&gt;&lt;td&gt;Морковь&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;Potato&lt;/td&gt;&lt;td&gt;Картофель&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;Tomato&lt;/td&gt;&lt;td&gt;Помидор&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;

&lt;script src="jquery-1.10.1.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript"&gt;
jQuery(document).ready(function(){

	$("tr:even").css('background-color', 'silver');
});
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>У нас есть таблица, и мы хотим выделить цветом все четные строки. В этом случае мы применяем фильтр <code>:even</code>. Фильтр ставится после селектора: <code>$("tr:even")</code>. 
В результате все четные строки будут окрашены серым цветом:</p>
<img src="pics/2.4.png" />
<p>Поскольку нумерация объектов начинается с нуля, то поэтому первая строка будет нулевой и, таким образом, попадает в число четных.</p>
<p>Можно выделить следующий набор базовых фильтров:</p>
<table class="tab">
<tr class="tabhead"><td><p>Фильтр</p></td><td><p>Описание</p></td></tr>
<tr><td><p>:eq(n)</p></td><td><p>Выбирает n-й элемент выборки (нумерация начинается с нуля)</p></td></tr>
<tr><td><p>:even</p></td><td><p>Выбирает элементы с четными номерами</p></td></tr>
<tr><td><p>:odd</p></td><td><p>Выбирает элементы с нечетными номерами</p></td></tr>
<tr><td><p>:first</p></td><td><p>Выбирает первый элемент выборки</p></td></tr>
<tr><td><p>:last</p></td><td><p>Выбирает последний элемент выборки</p></td></tr>
<tr><td><p>:gt(n)</p></td><td><p>Выбирает все элементы с номером, большим n</p></td></tr>
<tr><td><p>:lt(n)</p></td><td><p>Выбирает все элементы с номером, меньшим n</p></td></tr>
<tr><td><p>:header</p></td><td><p>Выбирает все заголовки (h1, h2, h3)</p></td></tr>
<tr><td><p>:not(селектор)</p></td><td><p>Выбирает все элементы, которые не соответствуют селектору, указанному в скобках. Например, 
выражение <code>$("tr:not(.even)")</code> выберет все строки, у которых атрибут class не равен even.</p></td></tr>
</table>
<p>Специальный род фильтров - фильтры контента обеспечивают доступ к элементам, имеющим определенное содержимое:</p>
<table class="tab">
<tr class="tabhead"><td><p>Фильтр</p></td><td><p>Описание</p></td></tr>
<tr><td><p>:contains('text')</p></td><td><p>Получает все элементы, которые содержат текст <code>text.</code>.</p></td></tr>
<tr><td><p>:has('селектор')</p></td><td><p>Получает все элементы, которые содержат хотя бы один дочерний элемент, соответствующий селектору</p></td></tr>
<tr><td><p>:empty</p></td><td><p>Получает все элементы, которые не имеют дочерних элементов</p></td></tr>
<tr><td><p>:first-child</p></td><td><p>Получает все элементы, которые являются первыми дочерними элементами в своих родителях</p></td></tr>
<tr><td><p>:last-child</p></td><td><p>Получает все элементы, которые являются последними дочерними элементами в своих родителях</p></td></tr>
<tr><td><p>:nth-child(n)</p></td><td><p>Получает все элементы, которые являются n-ными элементами в своих родителях (нумерация идет с единицы)</p></td></tr>
<tr><td><p>:nth-child(even)</p></td><td><p>Получает все элементы, которые являются четными элементами в своих родителях (нумерация идет с единицы). Так, в предыдущем примере с таблицей выражение <code>$("tr:nth-child(even)")</code> будет получать все те же элементы, что и выражение <code>$("tr:odd")</code></p></td></tr>
<tr><td><p>:nth-child(odd)</p></td><td><p>Получает все элементы, которые являются нечетными элементами в своих родителях (нумерация идет с единицы)</p></td></tr>
<tr><td><p>:only-child</p></td><td><p>Получает все элементы, которые являются единственными дочерними элементами в своих родителях</p></td></tr>
<tr><td><p>:parent</p></td><td><p>Получает все элементы, которые имеют, как минимум, один дочерний элемент</p></td></tr>
</table>
<p>Например, если мы хотим получить все элементы, содержащие текст <code>Капуста</code>, мы можем применить следующее выражение: <code>$(":contains('Капуста')")</code>. 
Либо мы можем с помощью селекторов конкретизировать поиск, например, вести выборку только в строках: <code>$("tr:contains('Капуста')")</code></p>
<p>И третья группа фильтров позволяют получить определенные элементы html-форм или используют их атрибуты:</p>
<table class="tab">
<tbody><tr class="tabhead"><td><p>Фильтр</p></td><td><p>Описание</p></td></tr>
<tr><td><p>:button</p></td><td><p>Получает все элементы <code>button</code> и элементы <code>input</code> с типом <code>button</code></p></td></tr>
<tr><td><p>:checkbox</p></td><td><p>Получает все элементы <code>checkbox</code></p></td></tr>
<tr><td><p>:checked</p></td><td><p>Получает все отмеченные элементы <code>checkbox</code> и <code>radio</code></p></td></tr>
<tr><td><p>:disabled</p></td><td><p>Получает все элементы, которые находятся в неактивном состоянии</p></td></tr>
<tr><td><p>:enabled</p></td><td><p>Получает все элементы, которые находятся в активном состоянии</p></td></tr>
<tr><td><p>:file</p></td><td><p>Получает все элементы file (<code>input type='file'</code>)</p></td></tr>
<tr><td><p>:input</p></td><td><p>Получает все элементы <code>input</code></p></td></tr>
<tr><td><p>:hidden</p></td><td><p>Получает все скрытые элементы</p></td></tr>
<tr><td><p>:password</p></td><td><p>Получает все элементы <code>password</code></p></td></tr>
<tr><td><p>:radio</p></td><td><p>Получает все элементы <code>radio</code></p></td></tr>
<tr><td><p>:reset</p></td><td><p>Получает все элементы <code>reset</code></p></td></tr>
<tr><td><p>:selected</p></td><td><p>Получает все отмеченные элементы <code>option</code></p></td></tr>
<tr><td><p>:submit</p></td><td><p>Получает все элементы <code>input</code> с типом <code>submit</code></p></td></tr>
<tr><td><p>:text</p></td><td><p>Получает все элементы <code>input</code> с типом <code>text</code></p></td></tr>
<tr><td><p>:visible</p></td><td><p>Получает только видимые элементы</p></td></tr>
</tbody></table>
<p>Мы можем комбинировать в одном выражении несколько селекторов и фильтров: <code>$('#results:odd:has('img')')</code>. В данном случае 
мы выбираем все нечетные элементы с <code>id="results"</code>, которые содержат элементы <code>img</code>, то есть изображения.</p>
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


<div class="nav"><p><a href="2.1.php">Назад</a><a href="./">Содержание</a><a href="2.3.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Введение в jQuery</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/1.1.php">Начало работы с jQuery</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/1.2.php">Функция jQuery</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Выборка элементов</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.1.php">Cелекторы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.2.php">Фильтры jQuery</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.3.php">Работа с выборкой</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.4.php">Фильтрация выборки</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.5.php">Поиск в выборке</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.6.php">Навигация по странице</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Манипуляция элементами в jQuery</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/3.1.php">Атрибуты и свойства элементов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/3.2.php">Изменение стилей CSS</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/3.3.php">Использование классов в jQuery</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/3.4.php">Содержимое элементов</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Работа со структурой страницы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.1.php">Создание и добавление дочерних элементов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.2.php">Обертывание элементов. Метод wrap</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.3.php">Добавление сестринских элементов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.4.php">Замена элементов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.5.php">Удаление элементов</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. События jQuery</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.1.php">Регистрация и удаление обработчиков событий</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.2.php">Параметры обработчика. Объект Event</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.3.php">Всплытие событий</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.4.php">Методы delegate и on</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.5.php">Метод trigger</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.6.php">Специальные методы для обработки событий</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 6. Технология AJAX</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.1.php">Введение в AJAX</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.2.php">Метод load</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.3.php">GET-запросы. Метод get</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.4.php">Объект jqXHR</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.5.php">POST-запросы. Метод post</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.6.php">Получение данных JSON. Метод getJSON</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.7.php">Подгрузка скриптов. Метод getScript</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.8.php">Низкоуровневые запросы. Метод ajax</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.9.php">Глобальные события ajax</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Эффекты и анимация в jQuery</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/7.1.php">Базовые эффекты</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/7.2.php">Эффекты скольжения</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/7.3.php">Эффекты прозрачности</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/7.4.php">Создание анимации. Метод animate</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 8. jQuery UI</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.1.php">Введение в jQuery UI</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.2.php">Виджет button</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.3.php">Виджет progressbar</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.4.php">Виджет слайдер jQuery</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.5.php">Виджет Accordion</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.6.php">Виджет Autocomplete. Автозаполнение</a></span></li>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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