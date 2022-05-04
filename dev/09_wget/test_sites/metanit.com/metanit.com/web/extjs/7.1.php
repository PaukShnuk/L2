<!DOCTYPE html>
<html >
<head>
<title>Компоненты в Ext JS 4</title>
<meta charset="utf-8" />
<meta name="description" content="Введение в использование компонентов в Ext JS 4, их основные свойства и методы">
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
<h1>Компоненты в Ext JS 4</h1>
<h2>Основы компонентов Ext JS 4</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Весь пользовательский интерфейс в Ext JS 4 создается из специальных виджетов - компонентов. Все компоненты представляют собой подклассы 
класса <b>Ext.Component</b>. Данный класс и отвечает за создание, рендеринг, позиционирование и удаление компонентов.</p>
<p>Но компоненты сами по себе не могут существовать. Все они помещаются в некоторый контейнер. Контейнер представляет специальный компонент, 
который может включать другие компоненты. Стандартная, но не обязательная, иерархия компонентов может начинаться с класса <strong>Viewport</strong>, 
который затем включает остальные контейнеры и компоненты.</p>
<p>Каждый контейнер имеет свойство <span class="bb">items</span>, в котором можно установить дочерние элементы. Например, 
установим для контейнера Viewport две внутренних панели:</p>
<pre class="brush:js;">
Ext.onReady(function(){
	var childPanel1 = Ext.create('Ext.panel.Panel', {
		title: 'Панель 1',
		html: 'Внутренняя панель 1'
	});
	
	var childPanel2 = Ext.create('Ext.panel.Panel', {
		title: 'Панель 2',
		html: 'Внутренняя панель 2'
	});

	Ext.create('Ext.container.Viewport', {
		items: [ childPanel1, childPanel2 ]
	});
});
</pre>
<h3>XType и псевдонимы классов</h3>
<p>Каждый компонент имеет алиас или псевдоним, который употребляется вместо имени класса при его создании объекта. Для этого 
у объекта устанавливается свойство <b>xtype</b>. Обычно классы имеют похожие псевдонимы, например, у класса Ext.panel.Panel псевдоним 
'panel', а у класса Ext.Button псевдоним 'button'. Псевдонимы всех классов можно посмотреть в официальной документации по Ext JS 4.</p>
<p>Для чего они нужны? Перепишем вышеуказанный пример с использованием псевдонимов:</p>
<pre class="brush:js;">
Ext.onReady(function(){
	Ext.create('Ext.container.Viewport', {
    items: [{
			xtype: 'panel',
			title: 'Панель 1',
			html: 'Внутренняя панель 1'
		},
		{
			xtype: 'panel',
			title: 'Панель 2',
			html: 'Внутренняя панель 2'
	}]
});
});
</pre>
<p>Таким образом, мы можем указать вместо полного имени класса краткий псевдоним. Это позволяет нам создавать более чистый код.</p>
<h3>Рендеринг компонентов</h3>
<p>Класс <code>Ext.Component</code> поддерживает две модели рендеринга: прямую (direct) и ленивую (lazy).</p>
<p>Прямой рендеринг происходит, когда компонент создается с указанием атрибута <code>renderTo</code> или <code>applyTo</code>.</p>
<p>Атрибут <code>renderTo</code> содержит ссылку на место, где будет происходить рендеринг компонента. Например:</p>
<pre class="brush:js;">
Ext.onReady(function(){
	Ext.create('Ext.Panel', {
            title: 'Приложение Ext JS 4',
			width: 300,
			height: 200,
			renderTo: Ext.getBody()
        });
});
</pre>
<p>Выражение <code>Ext.getBody()</code> показывает, что панель будет рендерится в элементе body структуры DOM. Мы также могли бы использовать 
аналогичное выражение <code>renderTo: document.body</code>. Либо мы можем указать id любого элемента веб-страницы, в который хотим поместить компонент:</p>
<pre class="brush:js;">
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Hello Ext&lt;/title&gt;
    &lt;link rel="stylesheet" type="text/css" href="../extjs/resources/css/ext-all.css"&gt;
    &lt;script type="text/javascript" src="../extjs/ext-debug.js"&gt;&lt;/script&gt;
	&lt;script&gt;
Ext.onReady(function(){
var bigPannel=Ext.create('Ext.Panel', {
            title: 'Приложение Ext JS 4',
			width: 300,
			height: 200,
			renderTo:'tiptop'
        });
});
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="tiptop" style="margin-top:50; margin-left:50; width:300; height:300;"&gt;&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Так рендеринг компонента будет производится сразу же после своего создания.</p>
<p>"Ленивый" или отложенный рендеринг предполагает, что мы сначала создаем компонент, а рендерим его уже по ходу:</p>
<pre class="brush:js;">
Ext.onReady(function(){
	var bigPannel=Ext.create('Ext.Panel', {
            title: 'Приложение Ext JS 4',
			width: 300,
			height: 200
        });
//...тут остальной код
bigPannel.render(document.body);
//или рендеринг в элемент по id &lt;div id="tiptop" ...
//bigPannel.render('tiptop');
});
</pre>
<p>Однако следует помнить, что мы не можем применить рендеринг, чтобы вложить один компонент Ext JS в другой. Для этого надо использовать свойство 
<code>items</code> контейнера-компонента, как было показано в начале главы.</p>
<h3>Добавление и удаление элементов</h3>
<p>В предыдущих примерах мы использовали свойство <code>items</code>, чтобы добавить в контейнер другие компоненты. Однако есть и другие способы, 
кроме того, может возникнуть необходимость добавить компоненты динамически в процессе выполнения кода.</p>
<p>Добавление компонентов в контейнер мы можем произвести с помощью методов <code>add</code> и <code>insert</code>. Метод add просто добавляет компонент 
в конец массива <code>items</code> контейнера:</p>
<pre class="brush:js;">
Ext.onReady(function(){
var bigPannel=Ext.create('Ext.Panel', {
            title: 'Приложение Ext JS 4',
			width: 300,
			height: 200,
			id : 'bigPannel',
			renderTo: Ext.getBody()
        });
	Ext.getCmp('bigPannel').add({
			title: 'Внутренняя панель',
			width: 100,
			height: 100,
			html:'Привет мир!'
	});
});
</pre>
<p>Здесь мы указываем у контейнера свойство <code>id</code>, по которому мы можем взаимодействовать с этим элементом. Так, метод 
<code>Ext.getCmp(id).add</code> получает id контейнера и добавляет в него новый компонент.</p>
<p>Похожим образом действует метод <code>insert</code>, только он вставляет элемент по указанному индексу:</p>
<pre class="brush:js;">
Ext.onReady(function(){
var bigPannel=Ext.create('Ext.Panel', {
            title: 'Приложение Ext JS 4',
			width: 300,
			height: 200,
			id : 'bigPannel',
			renderTo: Ext.getBody()
        });
	Ext.getCmp('bigPannel').insert(0, {
			title: 'Панель 1',
			width: 200,
			height: 80,
			html:'Панель 1'
	});
	Ext.getCmp('bigPannel').insert(0, {
			title: 'Панель 2',
			width: 200,
			height: 80,
			html:'Панель 2'
	});
});
</pre>
<p>Здесь мы создаем две панели, первая панель вставляется по индексу 0 - то есть на первое место. Потом мы также на первое место вставляем вторую панель, 
поэтому первая панель перемещается на второе место и в контейнере будет находиться ниже второй панели:</p>
<img src="pics/insert_components.png" />
<p>Удаление компонентов из контейнера производится с помощью метода <code>remove</code>, который принимает два параметра: первый (обязательный) - 
id компонента или ссылку на компонент, который надо удалить, и второй (необязательный) указывает, нужно ли при этом вызывать метод <code>destroy</code> у удаляемого компонента. Например:</p>
<pre class="brush:js;">
var newPannel=Ext.create('Ext.Panel', {
			title: 'panel1'
			width: 300,
			height: 200,
			id : 'bigPannel'
        });
//.....прочая логика приложения
// удаляем по id
Ext.getCmp('bigPannel').remove('panel1');
// удаляем по ссылке
Ext.getCmp('bigPannel').remove(newPannel);
</pre>
<p>Второй параметр метода remove нередко употребляется для того, чтобы удалить компонент из одного контейнера и поместить его в новый контейнер, 
ведь при этом нам не нужно удалять элемент из приложения совсем, поэтому и метод destroy тут не нужен:</p>
<pre class="brush:js;">
var newPannel=getCmp('panel1');
// удаляем с одной панели
Ext.getCmp('bigPannel').remove(newPannel, false);
// и добавляем в другой контейнер у которого id='newContainer'
Ext.getCmp('newContainer').add(newPannel);
</pre>
<h3>Отображение и скрытие элементов</h3>
<p>Чтобы скрыть и отобразить компонент, используются методы <code>hide</code> и <code>show</code> соответственно:</p>
<pre class="brush:js;">
var bigPannel=Ext.create('Ext.Panel', {
            title: 'Приложение Ext JS 4',
			width: 300,
			height: 200,
			id : 'bigPannel',
			renderTo: Ext.getBody()
        });
		bigPannel.hide(); // скрываем компонент
		bigPannel.show(); // отображаем компонент
</pre>
<h4>hideMode</h4>
<p>Это свойство управляет, как компонент будет скрыт в структуре DOM. Оно может иметь три значения:</p>
<ul>
<li><p><b>'display'</b> - в этом случае при сокрытии элемента он получает значение стиля <code>display: none</code> (используется по умолчанию)</p></li>
<li><p><b>'visibility'</b> - компонент скрывается с помощью стиля <code>visibility: hidden</code></p></li>
<li><p><b>'offsets'</b> - компонент скрывается с помощью абсолютного позиционирования вне видимой области документа</p></li>
</ul>
<h4>hidden</h4>
<p>Если это свойство компонента имеет значение <code>true</code>, то элемент будет скрыт при создании</p>
<h3>Размеры</h3>
<p>Размеры компонента задаются свойствами <code>width</code> и <code>height</code>, для которых указывается значение в пикселях</p>
<h3>html</h3>
<p>Это свойство указывает на содержание компонента. Оно может принимать значение либо строки, либо отдельного объекта: <code>html: '&lt;b;gt;Текст&lt;/b&gt;'</code>.</p>
<h3>Позиционирование</h3>
<p>С помощью свойства <code>margin</code> можно задать отступ от внешней границы контейнера. Мы можем задать лишь одно число, 
которое будет использоваться для отступов во всех четырех направлениях, либо указать строку отступов: <code>margin: '10 20 0 50'</code>.</p>
<p>Чтобы позиционировать контент внутри компонента, используется свойство <code>padding</code>. Его действие аналогично свойству margin.</p>
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


<div class="nav"><p><a href="6.9.php">Назад</a><a href="./">Содержание</a><a href="7.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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