<!DOCTYPE html>
<html >
<head>
<title>TypeScript | Создание и подключение модулей</title>
<meta charset="utf-8" />
<meta name="description" content="Создание и подключение модулей в TypeScript, типы модулей CommonJS и ESNext, ES2015 и ES2020, экспорт и импорт, загрузка модулей с помощью Node JS, rjyabueh">
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
<h2>Создание и подключение модулей</h2><div class="date">Последнее обновление: 19.05.2021</div>

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

<p>TypeScript поддерживает работу с модулями. Модули являются концепцией, привнесенной стандартом ES2015. Модули в некотором смысле похожи на пространства имен: они могут заключать различные классы, интерфейсы, 
функции, объекты. Модули выделяются в отдельные файлы, что позволяет сделать код приложения более ясным и чистым, и в то же время позволяет использовать 
модули в других приложения.</p>
<p>В TypeScript, как и в стандарте ECMAScript 2015, любой файл, который содержит выражения 
import или export верхнего уровня, рассматривается как модуль. Модули выполняются не в глобальном контексте, а в своей собственной области видимости. То есть переменные, функции, классы. интерфейсы и т.д., 
определенные внутри модуля, не доступны извне, пока они не будут явным образом экспортированы. А чтобы другой модуль мог их использовать, он должен их импортировать.</p>
<p>Если файл не содержит выражений import или export верхнего уровня, он рассматривается как обычный скрипт, содержимое которого доступно в глобальной области видимости. Такие файлы можно склеить в один с помощью параметра компиляции <span class="b">--outFile </span>, которому передается название выходного файла.</p>

<p>Чтобы сделать из простого скрипта модуль, достаточно добавить в файл</p>
<pre class="brush:ts;">
export {};
</pre>
<p>Этот модуль ничего не экспортирует, но тем не менее это модуль.</p>
<h3>Типы модулей</h3>
<p>Все модули имеют определенный формат и относятся к определенном типу. Всего мы можем использовать следующие типы модулей:</p>
<ul>
<li><p>AMD (Asynchronys Module Definition)</p></li>
<li><p>CommonJS (используется по умолчанию, если параметр <code>--target</code> равен "ES3" или "ES5")</p></li>
<li><p>UMD (Universal Module Definition)</p></li>
<li><p>System</p></li>
<li><p>ES 2015</p></li>
<li><p>ES 2020</p></li>
<li><p>ESNext</p></li>
</ul>
<p>Модули типов ES2015 и ES2020 практически одинаковы за тем исключение, что ES2020 имеет поддержку для динамического импорта и выражения импорта <code>import.meta</code>.</p>
<p>Рассмотрим модули на примере модулей типа ES2015/ES2020, поскольку это один из наиболее популярных типов (наряду с CommonJS), кроме того, этот тип модулей современные 
браузеры поддерживают по умолчанию.</p>

<h3>Определение модуля</h3>
<p>Определим простейший модуль. Для этого создадим файл <span class="b">message.ts</span>, в котором определим следующий код:</p>
<pre class="brush:ts;">
export default function hello() {
  console.log("Hello Typescript");
}
</pre>
<p>Здесь определена обычная функция <code>hello()</code>, которая выводит некоторое сообщение на консоль. Но она определена с ключевым словом <span class="b">export</span>, 
а это значит, что данный файл представляет модуль, а функцию <code>hello()</code> можно импортировать в другие модули.</p>
<p>Кроме того, здесь применяется ключевое слово <span class="b">default</span>, которое устанавливает тип, экспортируемый по умолчанию.</p>
<h3>Подключение модуля. Импорт</h3>
<p>Теперь подключим эту функцию в другой файл. Для этого возьмем файл <span class="b">main.ts</span>:</p>
<pre class="brush:ts;">
import hello from "./message.js";
hello();
</pre>
<p>Для подключения функционала из другого модуля применяется ключевое слово <span class="b">import</span>, после которого идут названия подключаемых 
компонентов - в данном случае функция hello. Затем после оператора <span class="b">from</span> указывается модуль, из которого идет импорт. В данном случае указываем 
"./message.js". В данном случае предполагается что оба скомпилированных модуля - main.js и message.js будут находиться в одной папке.</p>
<h3>Компиляция модуля</h3>
<p>При компиляции из командной строки или терминала для установки модуля необходимо передать соответствующее значение параметру <code>--module</code>:</p>
<div class="console"><pre class="consoletext">
tsc --module commonjs main.ts // для CommonJS
tsc --module amd main.ts // для AMD
tsc --module umd main.ts // для UMD
tsc --module system main.ts // для SytemJS
tsc --module esnext main.ts // для ESNext
</pre>
</div>
<p>В данном случае у нас оба модуля - main.ts и message.ts являются модулями ES, то есть в качестве типа модуля необходимо выбрать "ES2015", "ES2020" или 
"ESNext". Для данного конкретного случае не столь важно, какой именно из этих трех типов выбирать, поэтому выберем последний вариант.</p>
<p>Сначала перейдем в командной строке/консоли с помощью команды <span class="b">cd</span> к папке, где расположены файлы main.ts и message.ts. Так, в моем случае они расположены в папке 
<span class="b">c:\typescript</span></p>
<p>Далее для компиляции модулей введем команду:</p>
<div class="console">
<pre class="consoletext">
tsc main.ts --module esnext
</pre>
</div>
<img src="./pics/46.png" alt="Модули в TypeScript" />
<p>После этого в папке появятся файлы main.js и message.js.</p>
<img src="./pics/47.png" alt="Экспорт и импорт модулей в TypeScript" />
<h3>Загрузка модулей</h3>
<p>Для загрузки модулей определим в папке со скомпилированными файлами веб-страницу <span class="b">index.html</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Metanit.com&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Модули в TypeScript&lt;/h2&gt;
    &lt;script type="module" src="main.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Для загрузки главного модуля приложения - main.js определяется элемент <code>&lt;script&gt;</code>, у которого устанавливается атрибут <code>type="module"</code>.</p>
<p>Загрузка модулей производится через AJAX, поэтому скомпилированные модули должны быть размещены на веб-сервере. 
То есть у нас не получится просто кинуть страницу в веб-браузер, как, например, это было в первых темах. 
Поэтому прежде всего надо определиться с веб-сервером. Веб-сервер может быть любым. 
В данном случае воспользуемся самым демократичным вариантом - Node.js. Но опять же вместо node.js это может быть любая другая технология сервера - php, asp.net, python и т.д. либо какой-то определенный 
веб-сервер типа Apache или IIS.</p>
<p>Итак, создадим в папке с файлами модулей файл сервера. Пусть он будет называться <span class="b">server.js</span> и будет иметь следующий код:</p>
<pre class="brush:js;">
const http = require("http");
const fs = require("fs");
  
http.createServer(function(request, response){
      
    // получаем путь после слеша
    let filePath = request.url.substr(1);
	if(filePath == "") filePath = "index.html";	
    fs.readFile(filePath, function(error, data){
              
        if(error){
                  
            response.statusCode = 404;
            response.end("Resourse not found!");
        }   
        else{
			if(filePath.endsWith(".js")) response.setHeader("Content-Type", "text/javascript");
            response.end(data);
        }
    });
}).listen(3000, function(){
    console.log("Server started at 3000");
});
</pre>
<p>Это самый примитивный сервер, который отдает пользователю статические файлы. Для создания сервера применяется функция <code>http.createServer()</code>, 
а для считывания и отправки файлов - функция <code>fs.readFile()</code>. Если имя файла не указано, то отправляется файл <code>index.html</code>. 
Сервер будет запускаться по адресу http://localhost:3000/</p>
<p>Стоит отметить, что при отправке модулей js нам надо устанавливать mime-тип отправляемого контента в <code>"text/javascript"</code>:</p>
<pre class="brush:js;">if(filePath.endsWith(".js")) response.setHeader("Content-Type", "text/javascript");</pre>
<p>Структура финального проекта:</p>
<img src="./pics/24.png" alt="Загрузка модулей TypeScript" />
<p>Теперь запустим сервер с помощью команды</p>
<div class="console"><pre class="consoletext">node server.js</pre></div>
<img src="./pics/25.png" alt="Загрузка модулей в TypeScript и Node.js" />
<p>После запуска сервера мы можем перейти в браузере по адресу http://localhost:3000, нам отобразится страница, а в консоли браузера мы сможем увидеть 
результат работы нашего кода на typescript:</p>
<img src="./pics/26.png" alt="Загрузка модулей в TypeScript и Node.js" />
<h3>Конфигурация typescript</h3>
<p>Вместо того, чтобы указывать тип модуля в консоли при компиляции, можно использовать соответствующие параметры в файле конфигурации <span class="b">tsconfig.json</span>. 
Так, параметр <span class="b">module</span> задает тип модуля:</p>
<pre class="brush:ts;">
{
    "compilerOptions": {
		"noImplicitAny": true,
		"noEmitOnError": true,
		"strictNullChecks": true,
        "outFile": "main.js"
		
        "target": "es2015",
		"module": "esnext"
    }
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


<div class="nav"><p><a href="./3.6.php">Назад</a><a href="./">Содержание</a><a href="./3.8.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Введение в TypeScript</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.1.php">Что такое TypeScript</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.2.php">Установка и компиляция из командной строки</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.3.php">Первое приложение TypeScript в Visual Studio</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.4.php">Настройки компиляции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.5.php">Файл конфигурации tsconfig.json</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Основы TypeScript</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.1.php">Переменные и константы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.6.php">Параметры компиляции noEmitOnError и target</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.5.php">Типы данных</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.2.php">Функции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.3.php">Тип функции и стрелочные функции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.13.php">Объединения union</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.8.php">Null и undefined</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.7.php">Объекты</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.14.php">Псевдонимы типов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.4.php">Type assertion. Преобразование к типу</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.9.php">Массивы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.10.php">Кортежи</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.12.php">Неопределенный набор и наполнение параметров функции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.11.php">Перечисление enum</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.1.php">Классы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.2.php">Наследование.</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.12.php">Абстрактные классы, методы и поля</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.4.php">Модификаторы доступа</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.10.php">Методы доступа get и set</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.13.php">Статические поля и методы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.3.php">Интерфейсы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.9.php">Преобразование типов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.5.php">Обобщения</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.7.php">Миксины</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Модули и пространства имен</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.6.php">Пространства имен</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.11.php">Создание и подключение модулей</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.8.php">Работа с модулями</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Заголовочные файлы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/4.1.php">Работа с заголовочными файлами</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/4.2.php">Заголовочные файлы для популярных библиотек</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 6. Декораторы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.1.php">Декораторы классов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.2.php">Декораторы методов и их параметров</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.3.php">Декораторы свойств и методов доступа</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.4.php">Фабрики декораторов</a></span></li>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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