<!DOCTYPE html>
<html >
<head>
<title>Работа с элементами DOM в ExtJS</title>
<meta charset="utf-8" />
<meta name="description" content="Взаимодействие с элементами DOM, их получение с помощью функции Ext.get, выборка и изменение, а также добавление новых элементов на веь-страницу">
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
<h1>Работа с элементами DOM</h1><div class="date">Последнее обновление: 1.11.2015</div>

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

<h3>Выборка элемента и метод Ext.get</h3>
<p>Для взаимодействия с элементами DOM в Ext JS имеется класс-обертка <strong>Ext.Element</strong>. Он предоставляет ряд методов, которые позволяют 
управлять элементами DOM. Так, с помощью метода <code>Ext.get</code> можно получить ссылку на элемент. Этот метод в качестве параметра может принимать 
id элемента, элемент DOM или объект <code>Ext.Element</code>. Например, у нас на веб-странице есть элемент <code>&lt;div id='mainBody'&gt;&lt;/div&gt;</code></p>
<p>Тогда мы можем получить этот элемент так:</p>
<pre class="brush:js;">
	var mainId = Ext.get('mainBody');
	alert('ID основного элемента DIV: ' + mainId.id);
</pre>
<p>При передачи в качестве параметра ID, Ext JS использует метод <code>document.getElementById</code> для получения нужного элемента.</p>
<h3>Выборка нескольких элементов</h3>
<P>Метод Ext.get позволяет выбрать только одни элемент. Чтобы выбрать несколько элементов, нужно использовать методы <code>Ext.select</code> или 
<code>Ext.query</code></P>
<h4>Ext.select</h4>
<p>Метод <code>Ext.select</code> извлекает из DOM набор элемент на основании селекторов CSS и возвращает объект <code>Ext.CompositeElement</code> 
и <code>Ext.CompositeElementLite</code></p>
<p>Возьмем к примеру следующую разметку:</p>
<pre class="brush:xml;">
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Hello Ext&lt;/title&gt;
    &lt;link rel="stylesheet" type="text/css" href="../extjs/resources/css/ext-all.css"&gt;
    &lt;script type="text/javascript" src="../extjs/ext-all.js"&gt;&lt;/script&gt;
    &lt;script&gt;
		Ext.onReady(function(){
			var elements = Ext.select('div#text');
			elements.hide();
        });
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="content"&gt;
    &lt;div id="text1"&gt;Текст1&lt;/div&gt;
    &lt;div class="t2" &gt;Текст2&lt;/div&gt;
    &lt;div id="text2"&gt;Текст3&lt;/div&gt;
    &lt;div class="t2" &gt;Текст4&lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Тогда чтобы скрыть элементы div c <code>id="text1"</code> мы можем использовать такое выражение:</p>
<pre class="brush:js;">
	var elements = Ext.select('div#text1');
	elements.hide();
</pre>
<p>Метод <code>Ext.select</code> принимает в качестве параметра селектор CSS, по которому будет производиться выборка. В данном случае 
используется id=text и тег элемента div. Мы также можем обращаться по классу или комбинировать селекторы в запросе:</p>
<pre class="brush:js;">
	var elements = Ext.select('div .t2');
	elements.hide();
</pre>
<p>Метод <code>Ext.select</code> может принимать также два дополнительных необязательных параметра. Первый необязательный параметр представляет 
булевое значение. Если оно равно <code>true</code>, то для каждого узла DOM создавать свой объект <code>Ext.Element</code>, а метод возвращает 
объект <code>Ext.CompositeElement</code>. Если же параметр равен <code>false</code>, то возвращается объект <code>Ext.CompositeElementLite</code></p>
<p>Второй необязательный параметр представляет корневой элемент, с которого начинается поиск элементов. Он может принимать либо ID, либо объект <code>Ext.Element</code>.</p>
<h4>Ext.query</h4>
<p>Этот метод подобен <code>Ext.select</code> - он также принимает css-селекторы для поиска элементов. Отличие заключается в том, что не создается 
никаких объектов-оберток для найденных элементов DOM, что ведет к большей производительности.</p>
<h3>Переход по элементам DOM</h3>
<p>Для перехода по элементам DOM </p>
<p>Используя вышеуказанные методы, мы можем получить отдельные объекты выборки. Для этого используем метод <code>item</code>:</p>
<pre class="brush:js;">
	var elements = Ext.select('div').item(1);
	alert(elements.dom.innerHTML);
</pre>
<p>Метод <code>item</code> принимает в качестве параметра индекс элемента в найденном наборе (индексы начинаются с 0). Получив элемент, можно производить 
над ним манипуляции. Например получить его содержание.</p>
<p>Используя методы <code>prev</code> и <code>next</code>, можно получить предыдущий и следующий элементы из структуры DOM. Например:</p>
<pre class="brush:js;">
	var element = Ext.select('div#text2').item(0);
	alert(element.dom.innerHTML); //выведет 'Текст3'
	var el = element.next();
	alert(el.dom.innerHTML); //выведет 'Текст4'
	el = element.prev();
	alert(el.dom.innerHTML); //выведет 'Текст2'
</pre>
<p>Также мы можем получить доступ к первому и последнему дочерним элементам внутри некоторого элемента.</p>
<pre class="brush:js;">
	var element = Ext.get('content');
	var el = element.first();
	alert(el.dom.innerHTML); //выведет 'Текст1'
	el = element.last();
	alert(el.dom.innerHTML); //выведет 'Текст4'
</pre>
<p>Мы можем уточнить параметры поиска, указав в методах <code>first/last/prev/next</code> определенные css-селекторы:</p>
<pre class="brush:js;">
	var element = Ext.get('content');
	el = element.last('div');
	alert(el.dom.innerHTML); //выведет 'Текст4'
</pre>
<p>С помощью метода <code>parent</code> мы можем получить родительский элемент для данного элемента:</p>
<pre class="brush:js;">el = element.last('div').parent();</pre>
<p>А метод <code>child</code> позволяет по указанному селектору получить первый дочерний элемент:</p>
<pre class="brush:js;">var element = Ext.get('content');
	var el = element.child('div#text1');</pre>
	
<h3>Манипуляция элементами DOM </h3>
<h4>Изменение стиля</h4>
<p>Кроме поиска элементов мы можем производить с ними определенные преобразования. Например, с помощью метода <code>setStyle</code> мы можем изменять 
стиль:</p>
<pre class="brush:js;">
	var element = Ext.get('content');
	var el = element.child('div#text1');
	el.setStyle('color', 'red');
	element.setStyle({
		'font-family': 'Verdana',
		'font-size': '13px',
		'background-color': 'silver',
	});
</pre>
<p>В Ext JS есть альтернативная форма записи:</p>
<pre class="brush:js;">
	element.setStyle({
		fontFamily: 'Verdana',
		fontSize: '13px',
		backgroundColor: 'silver',
	});
</pre>
<p>Оба примера идентичны, просто в данном случае мы отбрасываем дефис в имени свойства и делаем первую букву после дефиса заглавной.</p>
<p>Либо мы можем добавить данному элементу класс, если, конечно, данный класс у нас определен на странице:</p>
<pre class="brush:js;">
	element.addClass('header');
</pre>
<h4>Изменениe контента</h4>
<p>Кроме стилевых особенностей мы можем поменять содержимое элемента:</p>
<pre class="brush:js;">
element.update('&lt;b&gt;Hello World!&lt;/b&gt;')
</pre>
<p>Фактически в данном случае мы изменяем у элемента свойство <code>innerHTML</code>.</p>
<h4>Создание новых элементов DOM</h4>
<p>Используя класс <b>Ext.DomHelper</b>, мы можем добавлять в определенные элементы:</p>
<pre class="brush:js;">
	var body = Ext.get('content'); // определяем id родительского элемента для вставки
	// определяем новый элемент
	var newElement = {
		tag: 'h2',
		html: 'Заголовок'
	};
	// добавление
	var createdElement = Ext.DomHelper.append(body, newElement);
</pre>
<p>Здесь класс Ext.core.DomHelper использует метод append для добавления нового элемента в конец элемента DOM. Для нового элемента мы можем определить следующие 
параметры:</p>
<ul>
	<li><p><code>tag</code>: представляет тег элемента (в данном случае h2)</p></li>
	<li><p><code>children</code>: представляет все дочерние элементы данного элемента. Они определяются подобным образом в виде безымянных объектов 
	и имеют те же свойства</p></li>
	<li><p><code>cls</code>: представляет класс элемента</p></li>
	<li><p><code>html</code>: представляет html-разметку элемента</p></li>
</ul>
<p>Так, мы можем добавить таким образом новый элемент, содержащий сложную структуру, к примеру, список:</p>
<pre class="brush:js;">
Ext.onReady(function(){
		
	var body = Ext.get('content');
	
	var newElement = {
		tag: 'ol',
		cls: 'listClass',
		children: [{
			tag: 'li',
			html: 'Первый'
		},{
			tag: 'li',
			html: 'Второй'
		}]
	};
	var createdElement = Ext.DomHelper.append(body, newElement);
});
</pre>
<p>Мы можем добавлять не только отдельные элементы, но и просто строковое представление данных элементов. Так, предыдущий пример будет эквивалентен следующему:</p>
<pre class="brush:js;">Ext.core.DomHelper.append(body, '&lt;h2&gt;Заголовок&lt;/h2&gt;');</pre>
<p>Добавление с помощью метода <code>append</code> не исчерпывает все возможности по вставке новых элементов. Так, мы можем методы <code>insertBefore</code> и 
<code>insertAfter</code>, чтобы конкретизировать позицию вставки:</p>
<pre class="brush:js;">
	Ext.DomHelper.insertBefore(body.first(), newElement);
	Ext.DomHelper.insertAfter(body.first(), newElement);
</pre>
<p>Здесь мы получаем первый элемент и вставляем новый элемент перед ним - то есть на первое место и после него.</p>
<h4>Использование шаблонов</h4>
<p>Альтернативой выше приведенным методам вставки элементов является добавление через шаблоны:</p>
<pre class="brush:js;">
	var body = Ext.get('content');
	var templ = Ext.DomHelper.createTemplate({
		tag: 'h2',
		html: '{header}'
	});
	templ.append(body, {header:'Привет мир!'});
</pre>
<p>Здесь сначала мы генерируем шаблон с помощью свойства <code>createTemplate</code>. В шаблоне определяется плейсхолдер (в данном случае <code>header</code>), 
на место которого потом будет подставляться содержимое. Затем мы используем соответствующий метод (append/insertBefore/insertAfter) для добавления элемента. 
Этот метод в качестве первого параметра принимает id элемента или сам элемент, в который добавляем. Второй параметр вставляет на место плейсхолдера 
контент.</p>
<h4>Замена содержимого элемента</h4>
<p>Кроме вставки мы можем изменять содержимое элемента. Для этого у класса Ext.DomHelper используется метод <code>overwrite</code>. 
Его действие подобно выше рассмотренному методу update. Например, нам надо заменить содержимое элемента с id=content:</p>
<pre class="brush:js;">
	var body = Ext.get('content');
	
	var newElement = {
		tag: 'ol',
		cls: 'listClass',
		children: [{
			tag: 'li',
			html: 'Первый'
		},{
			tag: 'li',
			html: 'Второй'
		}]
	};
	var newElement = Ext.DomHelper.overwrite(body, newElement);
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


<div class="nav"><p><a href="2.9.php">Назад</a><a href="./">Содержание</a><a href="4.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/1.1.php">Общий обзор фреймворка Ext JS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/1.2.php">Создание первого приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/1.3.php">Ext.application и Ext.onReady</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Система классов в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.1.php">Определение и использование классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.2.php">Конструкторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.3.php">Параметр Config</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.4.php">Статические члены класса и секция Static</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.5.php">Наследование в Ext JS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.6.php">Миксин-классы (Mixin)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.7.php">Динамическая загрузка классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.8.php">Singleton</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.9.php">Псевдонимы классов</a></span></li>
		</ul>
	</li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/3.php">Глава 3. Работа с элементами DOM</a></span></li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/4.php">Глава 4. Обработка событий элементов и компонентов</a></span></li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/5.php">Глава 5. Анимация в Ext JS</a></span></li>
	<li class="closed"><span class="folder">Глава 6. Компоновка в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.1.php">Введение в контейнеры</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.2.php">Компоновка FitLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.3.php">Компоновка VBoxLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.4.php">Компоновка HBoxLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.5.php">Компоновка ColumnLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.6.php">Аккордеоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.7.php">Компоновка BorderLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.8.php">Компоновка CardLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.9.php">Анкорная компоновка</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Компоненты в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.1.php">Основы компонентов Ext JS 4</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.2.php">Жизненный цикл компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.3.php">Контейнер Viewport</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.4.php">Компонент Window. Создание окон</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.5.php">Компонент Ext.Panel</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.6.php">Ext.tree.Panel. Деревья</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.7.php">Панель вкладок</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.8.php">Ext.Button</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.9.php">Флажки и переключатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.10.php">Выбор дат. Ext.form.field.Date</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.11.php">Ext.form.field.Spinner</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.12.php">Слайдер в Ext JS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.13.php">Combobox в Ext JS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.14.php">Ext.form.field.HtmlEditor</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.15.php">Текстовые поля в ExtJS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.16.php">Тулбар</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.17.php">Создание меню</a></span></li>
		</ul>
	</li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/8.php">Глава 8. Работа с датами в ExtJS 4</a></span></li>
	<li class="closed"><span class="folder">Глава 9. AJAX и JSON в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/9.1.php">Получение данных в формате JSON</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/9.2.php">Получение данных XML в ExtJS 4</a></span></li>
		</ul>
	</li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/10.php">Глава 10. Ext.XTemplate</a></span></li>
	<li class="closed"><span class="folder">Глава 11. Работа с формами в ExtJS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.1.php">Создание форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.2.php">Заполнение формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.3.php">Отправка данных формы на сервер</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.4.php">Валидация полей формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.5.php">Загрузка файлов на сервер</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Работа с данными в ExtJS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.1.php">Создание моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.5.php">Валидация полей модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.4.php">Связь нескольких моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.2.php">Загрузка и сохранение моделей с помощью прокси</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.3.php">Работа с хранилищем в ExtJS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.6.php">Ридеры хранилища</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.7.php">Взаимодействие с Local Storage HTML5</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Таблицы и Ext.grid.Panel</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.1.php">Ext.grid.Panel и отображение данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.2.php">Работа со столбцами Ext.grid.Panel</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.3.php">Рендеринг столбцов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.4.php">Выбор модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.5.php">Редактирование в гриде</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.6.php">Постраничный вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.7.php">Группировка в гриде</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Архитектура приложения и MVC</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/14.1.php">Архитектура MVC. Создание проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/14.2.php">Создание моделей и хранилища</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/14.3.php">Создание представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/14.4.php">Создание контроллеров</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Рисование в ExtJS и диаграммы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.1.php">Введение в рисование. Спрайты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.2.php">Взаимодействие со спрайтами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.3.php">Диаграммы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.4.php">Диаграмма с областями</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.5.php">Гистограммы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.6.php">Линейный график</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.7.php">Круговая диаграмма</a></span></li>
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
	
	$("li:contains('Глава .')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава .')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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