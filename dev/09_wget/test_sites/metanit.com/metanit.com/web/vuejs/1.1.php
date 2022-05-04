<!DOCTYPE html>
<html >
<head>
<title>Vue.js | Введение и первое приложение</title>
<meta charset="utf-8" />
<meta name="description" content="Введение, основные особенности и начало работы с Vue.js, первое приложение">
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
<h1>Основы Vue.js</h1><h2>Что такое Vue.js. Первое приложение</h2><div class="date">Последнее обновление: 29.08.2017</div>

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

<p>Vue.js представляет современный прогрессивный фреймворк, написанный на языке JavaScript и предназначенный для создания веб-приложений клиентского уровня. 
Основная сфера применения данного фреймворка - это создание и организация пользовательского интерфейса.</p>
<p>Первый релиз фреймворка увидел свет в феврале 2014 года. Его создателем является Эван Ю (Evan You), который до этого работал в Google над AngularJS. С тех пор фреймфорк динамично 
развивается, его текущей версией является версия 2.3.</p>
<p>Официальный сайт фреймворка - <a href="https://vuejs.org/" rel="nofollow">https://vuejs.org/</a>, где можно найти непосредственно файлы фреймворка, а также 
сопроводительные материалы и документацию. Кроме того, сам проект доступен на github по адресу <a href="https://github.com/vuejs/vue" rel="nofollow">https://github.com/vuejs/vue</a>.</p>
<p>Vue.js имеет довольно небольшой размер - не более 20 кБ, и при этом обладает хорошей производительностью по сравнению с такими фреймворками как 
Angular или React. Поэтому неудивительно, что данный фреймворк в последнее время набирает обороты и становится все более популярным.</p>
<p>Одним из ключевых моментов в работе Vue.js является <span class="b">виртуальный DOM</span>. Структура веб-страницы, как правило, описывается с помощью DOM (Document Object Model), которая представляет организацию 
элементов html на странице. Для взаимодействия с DOM (добавления, изменения, удаления html-элементов) применяется JavaScript. 
Но когда мы пытаемся манипулировать html-элементами с помощью JavaScript, то мы можем столкнуться со 
снижением производительности, особенно при изменении большого количества элементов. А операции над элементами могут 
занять некоторое время, что неизбежно скажется на пользовательском опыте. Однако если бы мы работали из кода js с 
объектами JavaScript, то операции производились бы быстрее.</p>
<p>Для этого Vue.js использует виртуальный DOM. Виртуальный DOM представляет легковесную копию обычного DOM. Если приложению 
нужно узнать информацию о состоянии элементов, то происходит обращение к виртуальному DOM. Если данные, которые используются в приложении Vue.js, 
изменяются, то изменения вначале вносятся в виртуальный DOM. Потом Vue выбирает минимальный набор компонентов, для которых надо выполнить изменения на 
веб-странице, чтобы реальный DOM соответствовал виртуальному. Благодаря виртуальному DOM повышается производительность приложения.</p>
<p>Vue.js поддерживается всеми браузерами, которые совместимы с ECMAScript 5. На данный момент это все современные браузеры, в том числе IE11.</p>
<h3>Первое приложение</h3>
<p>Создадим первое приложение на Vue.js. Прежде всего нам надо подключить файлы фреймворка на веб-страницу. Все необходимые материалы для загрузки можно найти по адресу 
<a href="https://vuejs.org/v2/guide/installation.html" rel="nofollow">https://vuejs.org/v2/guide/installation.html</a>. С этой страницы можно загрузить файл фреймворка локально (доступен в двух вариантах: 
Production и Development).</p>
<img src="./pics/1.png" alt="Установка Vue.js" />
<p>Вместо использования локального файла мы можем загружать фреймворк из CDN по ссылке:</p>
<pre class="brush:js;">https://unpkg.com/vue</pre>
<p>Либо если используется Node.js, то можно установить Vue.js через пакетный менеджер npm с помощью команды:</p>
<pre class="brush:js;">npm install vue</pre>
<p>В данном случае будем использовать подключение файла из CDN. Для этого определим следующую веб-страницу:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Изучаем Vue.js&lt;/title&gt;
&lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="app"&gt;
    &lt;input type="text" v-on:input="setMessage" /&gt;
    &lt;p&gt;{{message}}&lt;/p&gt;
&lt;/div&gt;
&lt;script src="https://unpkg.com/vue"&gt;&lt;/script&gt;
&lt;script&gt;
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!'
        },
        methods: {
            setMessage: function(event){
                this.message = event.target.value;
            }
        }
    })
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Для создания объекта приложения в Vue.js применяется объект <span class="b">Vue</span>. Этот объект, во-первых, определяет 
корневой элемент приложения на веб-странице с помощью параметра <span class="b">el</span>:</p>
<pre class="brush:js;">el: '#app'</pre>
<p>То есть корневым элементом приложения будет элемент с id равным app.</p>
<p>Также объект определяет используемые данные через параметр <span class="b">data</span>:</p>
<pre class="brush:js;">
data: {
	message: 'Hello Vue!'
}
</pre>
<p>В данном случае определено только свойство message, которая хранит строку.</p>
<p>В элементе с id=app на веб-странице, используя двойные фигурные скобки мы можем вывести значение свойства message и более того связать участок веб-станицы с этим элементом.</p>
<pre class="brush:xml;">&lt;p&gt;{{message}}&lt;/p&gt;</pre>
<p>Последний параметр объекта Vue - <span class="b">methods</span> определяет действия, которые выполняются в приложении:</p>
<pre class="brush:js;">
methods: {
	setMessage: function(event){
		this.message = event.target.value;
	}
}
</pre>
<p>Здесь определен метод setMessage, который является обработчиком события ввода для элемента input на странице. Через параметр event в этот 
метод передается информация о событии. В частности, используя значение <code>event.target.value</code>, мы можем получить введенное пользователем значение 
и присвоить его переменной message. Для получения переменной message, которая была определена выше в параметра data, применяется ключевое слово <span class="b">this</span>.</p>
<p>А для связи элемента input с этим методом определяется атрибут <code>v-on:input="setMessage"</code>.</p>
<p>Теперь запустим веб-страницу в веб-браузере (можно просто кинуть веб-страницу в браузер):</p>
<img src="./pics/2.png" alt="Первое приложение на Vue.js" />
<p>И при вводе в текстовое поле будет автоматически изменяться значение, которое выводится на веб-страницу.</p>
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


<div class="nav"><p><a href="./">Содержание</a><a href="1.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Основы Vue.js</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.1.php">Что такое Vue.js. Первое приложение</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.2.php">Объект Vue</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.3.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.7.php">Шаблоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.4.php">Обработка событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.5.php">Двусторонняя привязка</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.6.php">Вычисляемые свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.8.php">Привязка классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.9.php">Привязка к стилям</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.10.php">Наблюдаемые свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.11.php">Работа с объектом Vue</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.12.php">refs и управление html-элементами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/1.13.php">Жизненный цикл Vue</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Условный рендеринг и работа с массивами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.1.php">Директива v-if</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.2.php">Директива v-show</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.3.php">v-for</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.4.php">Управление массивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/2.5.php">Фильтрация и сортировка массива</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Работа с формами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.1.php">Элементы input и textarea</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.2.php">Флажки (Checkbox)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.3.php">Переключатели (radiobutton)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.4.php">Список select</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/3.5.php">Модификаторы</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Компоненты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.1.php">Создание компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.2.php">Локальная и глобальная регистрация компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.3.php">Состояние и поведение компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.4.php">Разделяемое состояние компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.5.php">Props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.6.php">Валидация props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.7.php">Передача массивов и сложных объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.8.php">Родительские и дочерние компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.9.php">Получение состояния вложенного компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.10.php">Однонаправленный поток данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.11.php">Создание событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.12.php">Изменение внешних массивов и объектов в компонентах</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.13.php">Передача функций обратного вызова в компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.15.php">Взаимодействие между сестринскими компонентами. Шина событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/4.14.php">Миксины</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Слоты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/5.1.php">Введение в слоты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/5.2.php">Именованные слоты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/5.3.php">Слоты с ограниченной областью видимости</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Фильтры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/6.1.php">Глобальные и локальные фильтры</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Организация и сборка приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/7.1.php">Компоненты в отдельных файлах и Webpack</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/7.3.php">Vue-cli</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.2.php">Навигация и ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.3.php">Параметры маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.4.php">Вложенные маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.5.php">Именованные маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.6.php">Именованные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vuejs/8.7.php">Переадресация</a></span></li>
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
	
	$("li:contains('Глава 1.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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