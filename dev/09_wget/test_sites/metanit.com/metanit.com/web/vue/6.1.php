<!DOCTYPE html>
<html >
<head>
<title>Vue 3 | Введение в маршрутизацию. Определение маршрутов</title>
<meta charset="utf-8" />
<meta name="description" content="Введение в маршрутизацию в Vue 3, библиотека vue-router, определение маршрутов, функция VueRouter.createRouter, компонент router-view">
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
<h1>Маршрутизация</h1><h2>Введение в маршрутизацию. Определение маршрутов</h2><div class="date">Последнее обновление: 04.11.2020</div>

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

<p>Одной из традиционных задач в веб-приложении является построение системы маршрутизации. Vue 3 
имеет полноценную систему маршрутизации, которая позволяет сопоставлять запросы к приложению с определенными компонентами. 
За маршрутизацию во Vue 3 отвечает специальная библиотека - <span class="b">vue-router</span>. Стоит отметить, что в Vue 3 и новой версии vue-router 
организация маршрутизации несколько изменилась по сравнению с предыдущей версий Vue 2 и vue-router. Этот аспект стоит учитывать при возможной миграции приложений со стаой версии фреймворка на новую.</p>
<p>Итак, создадим приложение, которое будет использовать маршруты. Для этого опрделим в каталоге проекта следующий файл <span class="b">index.html</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Маршрутизация во Vue 3&lt;/title&gt;
&lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="app"&gt;
	&lt;h1&gt;Vue Routing&lt;/h1&gt;
    &lt;router-view&gt;&lt;/router-view&gt;
&lt;/div&gt;
&lt;script src="https://unpkg.com/vue@next"&gt;&lt;/script&gt;
&lt;script src="https://unpkg.com/vue-router@next"&gt;&lt;/script&gt;
&lt;script&gt;
// компоненты, которые обрабатывают пути
const Home = { template: '&lt;h2&gt;Home Page&lt;/h2&gt;' }
const About = { template: '&lt;h2&gt;About Page&lt;/h2&gt;' }
 
// маршруты, сопоставленные с компонентами
const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About }
];
// создаем объект маршрутизатора
const router = VueRouter.createRouter({
  // предоставляем реализацию истории посещений
  history: VueRouter.createWebHistory(),
  routes,
});

const app = Vue.createApp({});
// указываем объекту приложения использовать объект маршрутизатора
app.use(router);	
app.mount('#app');
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Прежде всего чтобы использовать маршрутизацию в приложении, в начале файла подключается соответствующая библиотека vue-router:</p>
<pre class="brush:xml;">&lt;script src="https://unpkg.com/vue-router@next"&gt;&lt;/script&gt;</pre>
<p>Важно отметить, что в данном случае мы подключаем 4-ю версию данной библиотеки, которая призвана работать с Vue 3.</p>
<p>В коде javascript вначале определяются два компонента, которые будут обрабатывать запросы по определенным путям:</p>
<pre class="brush:js;">
const Home = { template: '&lt;h2&gt;Home Page&lt;/h2&gt;' }
const About = { template: '&lt;h2&gt;About Page&lt;/h2&gt;' }
</pre>
<p>Затем определяются маршруты, которые сопоставляют пути запроса и компоненты:</p>
<pre class="brush:js;">
const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About }
];
</pre>
<p>Каждый маршрут определяет свойство <span class="b">path</span>, которое представляет путь запроса, и свойство <span class="b">component</span> - компонент, 
который будет обрабатывать запрос по этому пути.</p>
<p>Таким образом, компонент Home будет обрабатывать запрос по пути "/", то есть по сути запрос к корню сайта. Компонент About обрабатывает 
запросы по пути "/about". Причем когда приложение получит запрос, то этот запрос будет последовательно сопоставляться со всеми маршрутами. Первый маршрут, у которого свойство path 
совпадет с путем запроса и будет выбран для обработки.</p>
<p>Затем создается объект маршрутизатора с помощью функции <span class="b">VueRouter.createRouter()</span>, которая поставляется библиотекой vue-router. 
Функция <code>VueRouter.createRouter()</code> в качестве параметра принимает объект с множеством опций, из которых нам необходимо установить как минимум две:</p>
<pre class="brush:js;">
const router = VueRouter.createRouter({
  history: VueRouter.createWebHistory(),
  routes,
});
</pre>
<p>Первая опция - <span class="b">history</span> указывает на режим навигации. В данном случае в качестве значения она принимает 
результат функции <span class="b">VueRouter.createWebHistory()</span>, которая устанавливает обычный режим навигации HTML5 (без хеш-символов #).</p>
<p>Вторая опция задает используемые маршруты. В данном случае это ранее определенные маршруты routes.</p>
<p>И в конце объект маршрутизатора передается в объекту приложения Vue с помощью метода <code>use()</code>:</p>
<pre class="brush:js;">app.use(router);</pre>
<p>И кроме того, в шаблоне приложения Vue помещается компонент router-view:</p>
<pre class="brush:xml;">&lt;router-view&gt;&lt;/router-view&gt;</pre>
<p>В этот элемент и будет рендериться выбранный для обработки запроса компонент.</p>
<p>Для полноценного использования маршрутизации предпочтительно запускать приложение Vue 3 на сервере, то есть просто кинуть страницу с 
кодом в браузер, за исключением отдельных случаев, у нас не получится. Поэтому для запуска будем использовать сервер. В данном случае 
я возьму Node.js, как наиболее демократичный вариант. Приложение будет очень небольшим, и для тех, кто не знаком с Node.js, я постараюсь 
максимально описать его работу. Но естественно каждый может выбрать какой-то свой предпочтительный сервер (IIS, Apache и т.д.) или технологию стороны сервера (ASP.NET, PHP, Django, Ruby, JakartaEE и т.д).</p>
<h3>Создание серверного приложения на Node.js</h3>
<p>Для начала естественно нужно установить Node.js. Как это сделать, описано в статье <a href="https://metanit.com/web/nodejs/1.1.php">Что такое Node JS. Начало работы</a>.</p>
<p>После установки Node.js в папке, где располагается файл index.html создадим новый файл <span class="b">app.js</span></p>
<img src="./pics/router1.2.png" alt="Приложение на Vue 3 в Node.js" />
<p>Определим в app.js следующий код:</p>
<pre class="brush:js;">
const http = require("http");
const fs = require("fs");
  
http.createServer((request, response) =&gt;{
      
    fs.readFile("index.html", function(error, data){
              
        if(error){
                  
            response.end("Ошибка при чтении файла!");
        }   
        else{
            response.end(data);
        }
    });
}).listen(3000, function(){
    console.log("Server started at 3000");
});
</pre>
<p>Что здесь происходит? Для получения запросов и отправки ответа по протоколу http нам необходим модуль <code>http</code>, а для считывания 
файла index.html с жесткого диска необходим модуль <code>fs</code>:</p>
<pre class="brush:js;">
const http = require("http");
const fs = require("fs");
</pre>
<p>Далее для пролушивания входящих запросов вызывается функция <code>http.createServer()</code>. В качестве параметра 
она принимает функцию обратного вызова, которая принимает два параметра: request и response. request содержит информацию о запросе, а 
response управляет ответом пользователю.</p>
<pre class="brush:js;">http.createServer((request, response) =&gt;{</pre>
<p>Далее функция <code>fs.readFile</code> считывает файл index.html - имя считываемого файла передается в качеств первого параметра. 
А второй параметр представляет функцию, которая вызывается после обращения к файлу.</p>
<pre class="brush:js;">fs.readFile("index.html", function(error, data){</pre>
<p>Считанные данные помещаются в парамер data и с помощью вызова метода <code>response.end(data);</code> отправляются клиенту. 
В итоге пользователь в своем браузере увидит страницу index.html.</p>
<p>Далее вызывается функция <code>listen()</code>, которая начинает прослушивание входящих запросов по порту 3000:</p>
<pre class="brush:js;">
listen(3000, function(){
    console.log("Server started at 3000");
})
</pre>
<p>Запустим файл app.js на выполнение. Для этого перейдем к командной строке/консоли с помощью команды <span class="b">cd</span> к папке 
проекта и для запуска приложения Node.js выполним команду</p>
<div class="console"><pre class="consoletext">node app.js</pre></div>
<img src="./pics/router1.1.png" alt="Запуск приложения на Vue 3 в Node.js" />
<p>После того на консоли появится сообщение от приложения "Server started at 3000", мы сможем обратиться к приложению по адресу localhost:3000/.</p>

<p>По умолчанию будет идти запрос к корню приложению, поэтому такой запрос будет обрабатываться компонентом Home:</p>
<img src="./pics/router1.png" alt="Маршрутизация в Vue 3" />
<p>А если мы обратимся по пути "/about", то запрос будет обработан компонентом About:</p>
<img src="./pics/router2.png" alt="Маршруты и VueRouter в Vue 3" />
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


<div class="nav"><p><a href="5.3.php">Назад</a><a href="./">Содержание</a><a href="6.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Основы Vue 3</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vue/1.1.php">Что такое Vue 3. Первое приложение</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.2.php">Объект Vue</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.3.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.4.php">Обработка событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.5.php">Двусторонняя привязка</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.6.php">Вычисляемые свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.7.php">Наблюдаемые свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.8.php">Привязка классов CSS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.9.php">Привязка стилей</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.11.php">refs и управление html-элементами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/1.10.php">Жизненный цикл Vue</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Условный рендеринг и работа с массивами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vue/2.1.php">Условный рендеринг. Директива v-if и v-show</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/2.2.php">Вывод массивов и директива v-for</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/2.3.php">Управление массивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/2.4.php">Фильтрация и сортировка массива</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Работа с формами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vue/3.1.php">Элементы input и textarea</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/3.2.php">Флажки (Checkbox)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/3.3.php">Переключатели (radiobutton)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/3.4.php">Список select</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/3.5.php">Модификаторы полей ввода</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Компоненты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vue/4.1.php">Создание компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.2.php">Локальная и глобальная регистрация компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.3.php">Состояние и поведение компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.4.php">Разделяемое состояние компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.5.php">Props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.6.php">Валидация свойств props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.7.php">Передача массивов и сложных объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.8.php">Родительские и дочерние компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.9.php">Получение состояния вложенного компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.10.php">Однонаправленный поток данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.11.php">Создание событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.12.php">Изменение внешних массивов и объектов в компонентах</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.13.php">Передача функций обратного вызова в компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.15.php">Взаимодействие между сестринскими компонентами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/4.14.php">Миксины</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Слоты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vue/5.1.php">Введение в слоты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/5.2.php">Именованные слоты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/5.3.php">Слоты с ограниченной областью видимости</a></span></li>
			
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/vue/6.1.php">Введение в маршрутизацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/6.2.php">Навигация и ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/6.3.php">Параметры маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/6.8.php">Обработка ошибки 404/Not found</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/6.4.php">Вложенные маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/6.5.php">Именованные маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/6.6.php">Именованные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/6.7.php">Переадресация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/vue/6.9.php">Программная навигация</a></span></li>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 6.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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