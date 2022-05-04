<!DOCTYPE html>
<html >
<head>
<title>Работа с хранилищем в ExtJS</title>
<meta charset="utf-8" />
<meta name="description" content="Загрузка данных модели через объект хранилища - Ext.data.Store и выполнение кросс-доменных запросов ajax">
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
<h2>Работа с хранилищем в ExtJS</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>В прошлом параграфе мы получали данные, обращаясь через прокси модели к определенному веб-ресурсу. Одним из простых методов загрузки данных в модель 
представляет использование объекта <b>Ext.data.Store</b>:</p>
<pre class="brush:js;">
 Ext.define('User', {
     extend: 'Ext.data.Model',
     fields: [
         {name: 'id',  type: 'int'},
		 {name: 'name', type: 'string'}
     ]
 });

 var myStore = Ext.create('Ext.data.Store', {
     model: 'User'
 });
</pre>
<p>Хранилище предназначено для хранения объектов модели. А тип модели указывается в свойстве <code>model</code>. В данном случае это 
ранее созданная модель User.</p>
<p>Также мы можем создать свое собственное хранилище, унаследовав его от <code>Ext.data.Store</code>:</p>
<pre class="brush:js;">
Ext.define('User', {
     extend: 'Ext.data.Model',
     fields: [
         {name: 'id',  type: 'int'},
		 {name: 'name', type: 'string'}
     ]
 });
Ext.define('UserStore', {
     extend: 'Ext.data.Store',
     model: 'User'
 });
 var myStore = Ext.create('UserStore');
</pre>
<h3>Добавление данных в хранилище</h3>
<p>Добавление данных производится с помощью метода add:</p>
<pre class="brush:js;">
 Ext.define('User', {
     extend: 'Ext.data.Model',
     fields: [
         {name: 'id',  type: 'int'},
		 {name: 'name', type: 'string'}
     ]
 });

 var myStore = Ext.create('Ext.data.Store', {
     model: 'User'
 });
 var user = Ext.create('User', {
     id: 1, name: 'Eugene'
 });
 myStore.add(user);
 alert(myStore.count());
</pre>
<p>Если вдруг нам надо добавить объект на определенное место в хранилище, то мы используем метод insert:</p>
<pre class="brush:js;">
var user = Ext.create('User', {
     id: 1, name: 'Eugene'
 });
 myStore.insert(0,user);
</pre>
<h3>Удаление данных из хранилища</h3>
<p>Удаление данных из хранилища производится методом remove и его модификациями:</p>
<pre class="brush:js;">
Ext.define('User', {
     extend: 'Ext.data.Model',
     fields: [
         {name: 'id',  type: 'int'},
		 {name: 'name', type: 'string'}
     ]
 });

 var myStore = Ext.create('Ext.data.Store', {
     model: 'User'
 });
 var user1 = Ext.create('User', {
     id: 1, name: 'Eugene'
 });
  myStore.add(user1);
 var user2 = Ext.create('User', {
     id: 2, name: 'Ivan'
 });
 myStore.add(user2);
 myStore.remove(user1); // удаление определенной модели
 myStore.removeAt(0); // удаление по индексу
 myStore.removeAll(); // удаление всех объектов из хранилища
</pre>
<h3>Получение данных из хранилища</h3>
<p>Получить объекты мы можем по индексу с помощью метода getAt, а также мы можем с помощью специальных методов извлечь первый и последний 
элементы:</p>
<pre class="brush:js;">
 var userFromStore = myStore.getAt(0); //получение по индексу в хранилище
 alert(userFromStore.get('name'));
 
 var i=3;
 // проверка на наличие элемента по индексу
 if(i&lt;myStore.count())
 {
	userFromStore = myStore.getAt(i);
	alert(userFromStore.get('name'));
 }
 
 var first = myStore.first(); //получение первого объекта
 var last = myStore.last(); // получение последнего объекта
 alert(first.get('name'));
 alert(last.get('name'));
</pre>
<p>Проверку на количество объектов в хранилище мы можем сделать с помощью метода <code>count</code>, которое возвращает кол-во объектов.</p>
<p>Также мы можем получить целый диапазон объектов с помощью метода getRange:</p>
<pre class="brush:js;">
var i=0;
  var j=1
 if(i&lt;myStore.count() && j&lt;myStore.count())
 {
	var users = myStore.getRange(i,j);
	Ext.each(users, function(record,index){
		alert((index+1)+'. '+record.get('name'));
	});
 }
</pre>
<p>Также мы просто можем перебрать все объекты хранилища:</p>
<pre class="brush:js;">
myStore.each(function(record,index){
		alert((index+1)+'. '+record.get('name'));
	});
</pre>
<h3>Загрузка данных с сервера</h3>
<pre class="brush:js;">
Ext.onReady(function(){      
      Ext.define('User', {
		extend: 'Ext.data.Model',
		fields: [
			{name: 'id',  type: 'int'},
			{name: 'name', type: 'string'}
		]
	});
	 Ext.define('UserStore', {
		extend: 'Ext.data.Store',
		model: 'User',
		proxy: {
			type: 'ajax',
			url: 'users.json'
		},
		autoLoad: true
	});
	var myStore = Ext.create('UserStore');
	myStore.load(function() {
		myStore.each(function(record){
			alert(record.get('name'));
		});
	});
});
</pre>
<p>В данном случае у нас простая модель - User и для загрузки данных в модель используется хранилище myStore. Чтобы ассоциировать хранилище с определенной моделью, 
мы указываем эту модель в параметре <code>model</code>. Далее опция <code>proxy</code> позволяет задать параметры загрузки, указав в свойстве 
<code>url</code> адрес, по которому будут загружаться данные.</p>
<p>Важную роль играет установка ридера (параметр <code>reader</code>), где мы говорим, что чтение загруженных данных будет производиться в формате 
json, а в качестве корневого узла будет выбран узел users (<code>reader: {type: 'json', root: 'users'}</code>). Далее мы посмотрим, что можно создать 
ридер также для данных в формате xml.</p>
<p>Файл users.json, находящийся на сервере, мог бы быть таким:</p>
<pre class="brush:js;">
[
	{
		"id": 1,
		"name": "Eugene"
	},{
		"id": 2,
		"name": "Ivan"
	}
]
</pre>
<p>Указанный у хранилища параметр <code>autoLoad: true</code> говорит о том, что загрузка данных с веб-ресурса будет происходить автоматически при загрузке страницы. 
Но мы также можем загрузить данные динамически, использовав метод load:</p>
<pre class="brush:js;">
myStore.load(function() {
		myStore.each(function(record){
			alert(record.get('name'));
		});
	});
</pre>
<p>Метод load принимает функцию, которая выполняется после выполнения запроса к ресурсу.</p>
<h3>Группировка данных</h3>
<p>Хранилище позволяет нам упорядочить данные по определенному типу:</p>
<pre class="brush:js;">
Ext.onReady(function(){
	Ext.define('User', {
     extend: 'Ext.data.Model',
     fields: [
         {name: 'id',  type: 'int'},
		 {name: 'name', type: 'string'}
     ]
 });

 var myStore = Ext.create('Ext.data.Store', {
     model: 'User',
	 groupers: [{
            property: 'name'
        }]
 });
 var user1 = Ext.create('User', {
     id: 1, name: 'Sasha'
 });
  myStore.add(user1);
 var user2 = Ext.create('User', {
     id: 2, name: 'Ivan'
 });
 myStore.add(user2);
 
  myStore.each(function(record,index){
		alert((index+1)+'. '+record.get('name'));
	});
});
</pre>
<p>В данном случае в определении хранилища мы добавили параметр <code>groupers</code>. В этот параметр определили элемент группировки по свойству 
<code>name</code>. Поэтому в данном случае первым будет выведен второй добавленный элемент, а не первый.</p>
<p>Альтернативой определения группировки в хранилище служит использование метода <code>group</code>:</p>
<pre class="brush:js;">
var myStore = Ext.create('Ext.data.Store', {
     model: 'User'
 });
 //..........................................
 myStore.group('name');
</pre>
<h3>Специальные методы хранилища</h3>
<p>Объекты хранилища также содержат пять специальных методов, выполняющих различные функции:</p>
<ul>
<li><p><span class="bb">count</span>: вычисляет количество данных в хранилище (<code>alert(myStore.count());</code>)</p></li>
<li><p><span class="bb">sum</span>: вычисляет сумму всех элементов, по которым проводится группировка (<code>alert(bookStore.sum('id'));</code>)</p></li>
<li><p><span class="bb">average</span>: вычисляет среднее арифметическое всех элементов, по которым проводится группировка (<code>alert(bookStore.average('id'));</code>)</p></li>
<li><p><span class="bb">min</span>: вычисляет минимальное значение из всех элементов, по которым проводится группировка(<code>alert(bookStore.min('id'));</code>)</p></li>
<li><p><span class="bb">max</span>: вычисляет максимальное значение из всех элементов, по которым проводится группировка(<code>alert(bookStore.max('id'));</code>)</p></li>
</ul>
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


<div class="nav"><p><a href="12.2.php">Назад</a><a href="./">Содержание</a><a href="12.6.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 12.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 12.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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