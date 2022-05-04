<!DOCTYPE html>
<html >
<head>
<title>Работа с данными в D3.js</title>
<meta charset="utf-8" />
<meta name="description" content="">
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
<h1>Работа с данными</h1>
<h2>Привязка данных</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Ключевым аспектом библиотеки D3.js является работа с данными. Для добавления данных в элемент применяется метод <span class="bb">data()</span>. 
В качестве аргумента в этот метод передается массив объектов.</p>
<p>Например, у нас есть список ul, который мы заполняем с помощью метода data():</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;script src="http://d3js.org/d3.v3.min.js"&gt; &lt;/script&gt;
&lt;body&gt;
&lt;ul&gt;
&lt;li&gt;&lt;/li&gt;
&lt;li&gt;&lt;/li&gt;
&lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;script type="text/javascript"&gt;
var phones = ['iPhone 6', 'Samsung Galaxy S5', 'LG G4'];
d3.selectAll('li').data(phones).text( function(d){
return d;
});
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В результате мы получим наполненнный из массива список:</p>
<img src="pics/1.3.png" alt="Функция data в d2.js" />
<p>Метод <code>data()</code> устанавливает связи между элементами html и элементами массива, однако чтобы выполнить привязку между элементом массива 
и текстом элемента html, надо использовать функцию динамической модификации (dynamic modifier function). Она принимает два параметра: d - элемент 
массива, и i - индекс элемента. В данном случае нам индексы не существенны, поэтому здесь используется один параметр d.</p>
<p>Элементы массива выполняют роль данных, а элементы li, да и любые другие элементы html, являются визуальным представлением этих данных.</p>
<p>И хотя данный способ работает, но он очень ограничен. Например, что если мы получаем данные с сервера и заведомо не знаем, сколько будет элементов в списке. 
И если список ul будет содержать только один элемент li, а массив данных - больше одного, то в результате заполнится только один единственный элемент списка. Например:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;script src="http://d3js.org/d3.v3.min.js"&gt; &lt;/script&gt;
&lt;body&gt;
&lt;ul&gt;
&lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;script type="text/javascript"&gt;
var phones = ['iPhone 6', 'Samsung Galaxy S5', 'LG G4', 'MiPad 5'];
var phonesList=d3.select('ul').selectAll('li').data(phones).text( function(d){ return d; });
phonesList.enter().append('li').text( function(d){ return d; })
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Список ul здесь содержит только один элемент li, в то время как в массиве четыре элемента. Строка </p>
<pre class="brush:js;">var phonesList=d3.select('ul').selectAll('li')
							.data(phones).text( function(d){ return d; });</pre>
<p>Хотя и ассоциирует массив с элементом списка ul, но заполняет только первый и единственный элемент li. Чтобы ввести дополнительные элементы, 
нам надо использовать метод <code>enter()</code>. После этого метода мы можем добавить недостающие элементы с помощью метода append и также 
установить их содержимое.</p>
<p>Но на методе enter мы не остановимся, и перейдем к полноценному использованию паттерна <span class="bb">enter-update-exit</span>. Этот паттерн позволит нам 
избежать другой крайности, которая остается у выше приведенного решения. Так, если у нас в списке ul элементов li больше, чем элементов в массиве данных, 
то на странице мы увидим незаполненные элементы, хотя хотелось бы их вообще удалить.</p>
<p>Используем паттерн <span class="bb">enter-update-exit</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;script src="http://d3js.org/d3.v3.min.js"&gt; &lt;/script&gt;
&lt;body&gt;
&lt;ul&gt;
&lt;li&gt;&lt;/li&gt;
&lt;li&gt;&lt;/li&gt;
&lt;li&gt;&lt;/li&gt;
&lt;li&gt;&lt;/li&gt;
&lt;li&gt;&lt;/li&gt;
&lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;script type="text/javascript"&gt;
var phones = ['iPhone 6', 'Samsung Galaxy S5', 'LG G4', 'MiPad 5'];
// Enter
d3.select('ul').selectAll('li').data(phones).enter().append('li');
// Update
d3.select('ul').selectAll('li').data(phones).text( function(d){ return d; });
// Exit
d3.select('ul').selectAll('li').data(phones).exit().remove();
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<img src="pics/1.4.png" alt="enter and exit in d3.js" />
<p>Итак, в массиве у нас четыре элемента, а в списке ul - шесть, то есть два лишних. Вначале применяем блок <code>Enter</code>, где используется метод <code>enter()</code>. 
После этого метода определяется добавление недостающих элементов li: <code>.enter().append('li')</code>. Но когда выполнение скрипта дойдет ло этой строчки, 
то добавление не будет работать, так как у нас нет недостающих элементов li, а, наоборот, есть только лишние.</p>	
<p>Далее срабатывает блок <code>Update</code>. В нем производится обновление элементов li - установки их текста с помощью элементов из массива и 
функции <code>function(d){ return d; }</code>. Так как в массиве 4 элемента, то для первых четырех элементов из списка ul будет установлено текстовое содержимое. При этом 
два последних элемента окажутся пустыми.</p>
<p>Далее срабатывает блок <code>Exit</code>, суть которого в отсечении лишних элементов. Для этого используется метод <code>.exit()</code>, который определяет 
те элементы, которые не связаны с данными из массива. Затем идет удаление этих элементов с помощью метода <code>remove()</code></p>
<p>Таким образом, если данных в массиве больше, чем визуальных элементов в коде html, то срабатывает вызовы после метода <code>enter()</code>. 
Если же наоборот, данных в массиве меньше, чем элементов html, то срабатывают методы после вызова <code>exit()</code>. И вне зависимости от количества 
элементов будет работать обновление.</p>
<p>Разберем еще один более сложный пример:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;script src="http://d3js.org/d3.v3.min.js"&gt; &lt;/script&gt;
&lt;style&gt;
.item{
    margin-bottom: 7px;
    font-size: 15px;
    margin-right: 2px;
    min-height: 25px;
    min-width: 20px;
}
.data {
    background-color: steelblue;
    text-align: right;
    color: #f0f8ff;
	display:inline-block;
}
.name{
	display:inline-block;
	margin-left:5px;
}
&lt;/style&gt;
&lt;body&gt;

&lt;div class="diagram"&gt;&lt;/div&gt;

&lt;script type="text/javascript"&gt;
var phones = [ {name: 'iPhone 6', price: 64},
{name: 'Samsung Galaxy S5', price: 48},
{name: 'LG G4', price: 36},
{name : 'MiPad 5', price: 25}];

// Enter
d3.select('div.diagram').selectAll('div').data(phones).enter().append('div').attr('class', 'item')
.append('div').attr('class', 'data').append('span');

// Update
d3.select('div.diagram').selectAll('div.item').data(phones)
.select('div').style('width', function (d) { return (d.price * 3) + 'px';})
.select('span').text(function (d) { return d.price;});

d3.select('div.diagram').selectAll('div.item').data(phones).append('div').attr('class', 'name')
.text(function (d) {return d.name;});

// Exit
d3.select('div.diagram').selectAll('div.item').data(phones).exit().remove();
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь данные уже представлены сложными объектами с двумя свойствами.</p>	
<p>В блоке <code>Enter</code> к добавляемым блокам div также добавляются классы и вложенный элемент <code>span</code>.</p>
<p>В блоке <code>Update</code> с помощью функции <code>function(d){}</code> устанавливается как ширина блоков div, так и текстовое содержимое добавленного элемента <code>span</code>.</p>
<p>Также добавляется новый вложенный блок с текстом в виде названия модели телефона.</p>
<p>В  итоге все будет выглядеть так:</p>
<img src="pics/1.5.png" />
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


<div class="nav"><p><a href="1.2.php">Назад</a><a href="./">Содержание</a><a href="2.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в D3.js</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/d3js/1.1.php">Что такое D3.js?</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/1.2.php">Выборка элементов и операторы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Работа с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.1.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.2.php">Функции для работы с данными</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.3.php">Фильтрация данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.4.php">Сортировка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.5.php">Scale, Domain и Range</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Графические элементы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/d3js/3.1.php">Создание графических форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/3.2.php">Создание путей и групп объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/3.3.php">Трансформации и переходы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Графики и диаграммы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.1.php">Координатные оси</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.2.php">Даты и время на осях</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.3.php">Двумерные координаты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.4.php">Линейная диаграмма</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.5.php">Добавление к графику маркеров и текстовых меток</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.6.php">Диаграммы с областями</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.7.php">Интерполяция и сглаживание графиков</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.8.php">Несколько графиков в одной координатной системе</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.9.php">Гистограммы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.10.php">Гистограммы с нечисловыми данными</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.11.php">Круговые диаграммы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.12.php">Добавление легенды диаграммы</a></span></li>
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