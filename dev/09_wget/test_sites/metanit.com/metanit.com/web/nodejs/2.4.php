<!DOCTYPE html>
<html >
<head>
<title>Node.JS | NPM. Package.json. Установка модулей. Определение команд</title>
<meta charset="utf-8" />
<meta name="description" content="Пакетный менеджер NPM и установка сторонних модулей в Node.js, файл package.json, семантическое версионирование, определение и выполенние команд, npm run">
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
<h2>NPM. Package.json. Установка модулей. Определение команд</h2><div class="date">Последнее обновление: 23.01.2020</div>

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

<p>Кроме встроенных и кастомных модулей Node.js существует огромный пласт различных библиотек и фреймворков, разнообразных утилит, которые создаются 
сторонними производителями и которые также можно использовать в проекте, например, express, grunt, gulp и так далее. И они тоже нам доступны в рамках Node.js. 
Чтобы удобнее было работать со всеми сторонними решениями, они распространяются в виде пакетов. Пакет по сути представляет набор функциональностей.</p>
<p>Для автоматизации установки и обновления пакетов, как правило, применяются систему управления пакетами или менеджеры. Непосредственно в Node.js для 
этой цели используется пакетный менеджер <a href="https://www.npmjs.com" rel="nofollow">NPM</a> (Node Package Manager). NPM по умолчанию устанавливается вместе с Node.js, поэтому ничего доустанавливать не требуется. Но можно обновить установленную версию до самой последней. Для этого 
в командной строке/терминале надо запустить следующую команду:</p>
<div class="console">
<pre class="consoletext">
npm install npm@latest -g
</pre>
</div>
<p>Чтобы узнать текущую версию npm, в командной строке/терминале надо ввести следующую команду:</p>
<div class="console">
<pre class="consoletext">
npm -v
</pre>
</div>
<p>Для нас менеджер npm важен в том плане, что с его помощью легко управлять пакетами. К примеру, создадим на жестком диске новую папку <span class="ii">modulesapp</span> 
(В моем случае папка будет находиться по пути <span class="ii">C:\node\modulesapp</span>).</p>

<p>Если в дальнейшем нам больше не потребуется express, то мы его можем удалить следующей командой:</p>
<div class="console">
<pre class="consoletext">
npm uninstall express
</pre>
</div>
<h3>Файл package.json</h3>
<p>Для более удобного управления конфигурацией и пакетами приложения в npm применяется файл конфигурации <span class="b">package.json</span>. 
Так, добавим в папку проекта modulesapp новый файл <span class="ii">package.json</span>:</p>
<pre class="brush:js;">
{
  "name": "modulesapp",
  "version": "1.0.0"
}
</pre>
<p>Здесь определены только две секции: имя проекта - modulesapp и его версия - 1.0.0. Это минимально необходимое определение файла package.json. Данный файл может 
включать гораздо больше секций. Подробнее можно посмотреть в <a href="https://docs.npmjs.com/getting-started/using-a-package.json" rel="nofollow">документации</a>.</p>
<p>Далее для примера установим в проект <span class="b">express</span>. Express представляет легковесный веб-фреймворк для упрощения работы с Node.js. 
В данном случае мы не будем пока подробно рассматривать фреймворк Express, так как это отдельная большая тема. А используем его лишь для того, чтобы 
понять, как устанавливаются сторонние модули в проект.</p>
<p>Для установки функциональности Express в проект вначале перейдем к папке проекта с помощью команды <span class="b">cd</span>. Затем введем команду</p>
<div class="console">
<pre class="consoletext">
npm install express
</pre>
</div>
<img src="pics/2.4.png" alt="NPM в Node.js" />
<p>После установки express в папке проекта modulesapp появится подпапка <span class="b">node_modules</span>, в которой будут хранится все установленные внешние модули. В частности, 
в подкаталоге <span class="ii">node_modules/express</span> будут располагаться файлы фреймворка Express.</p>
<p>И после выполнения команды, если мы откроем файл <span class="ii">package.json</span>, то мы увидим информацию о пакете:</p>
<pre class="brush:js;">
{
  "name": "modulesapp",
  "version": "1.0.0",
  "dependencies": {
    "express": "^4.17.1"
  }
}
</pre>
<p>Информация обо всех добавляемых пакетах, которые используются при работе приложения, добавляется в секцию <span class="b">dependencies</span>.</p>
<p>Используем добавленный пакет express и для этого определим файл простейшего сервера. Для этого в корневую папку проекта modulesapp добавим новый файл <span class="ii">app.js</span>:</p>
<pre class="brush:js;">
// получаем модуль Express
const express = require("express");
// создаем приложение
const app = express();

// устанавливаем обработчик для маршрута "/"
app.get("/", function(request, response){

	response.end("Hello from Express!");
});
// начинаем прослушивание подключений на 3000 порту
app.listen(3000);
</pre>
<p>Первая строка получает установленный модуль express, а вторая создает объект приложения.</p>
<p>В Express мы можем связать обработку запросов с определенными маршрутами. Например, "/" - представляет главную страницу или корневой маршрут. Для обработки запроса 
вызывается функция <code>app.get()</code>. Первый параметр функции - маршрут, а второй - функция, которая будет обрабатывать запрос по этому маршруту.</p>
<p>И чтобы сервер начал прослушивать подключения, надо вызвать метод <code>app.listen()</code>, в который передается номер порта.</p>
<p>Запустим сервер командой <code>node app.js</code>:</p>
<img src="pics/2.5.png" alt="Установка Express в Node.js" />
<p>И в адресной строке браузера введем адрес <span class="ii">http://localhost:3000/</span>:</p>
<img src="pics/2.6.png" alt="Запуск сервера Express на Node.js" />
<h3>Добавление множества пакетов</h3>
<p>Файл <span class="ii">package.json</span> играет большую роль и может облегчить работу с пакетами в различных ситуациях. 
Например, мы планируем использовать множество пакетов. Но вводить для установки каждого пакета в консоли соответствующую команду не очнь удобно. 
В этом случае мы можем определить все пакеты в файле package.json и потом одной командой их установить.</p>
<p>Например, изменим файл package.json следующим образом:</p>
<pre class="brush:js;">
{
  "name": "modulesapp",
  "version": "1.0.0",
  "dependencies": {
    "express": "^4.17.1",
    "react": "^16.9.0",
    "react-dom": "^16.9.0"
  }
}
</pre>
<p>Здесь добавлены определения двух пакетов, которые представляют библиотеку React.</p>
<p>Затем для загрузки всех пакетов выполнить команду</p>
<div class="console">
<pre class="consoletext">
npm install
</pre>
</div>
<p>Эта команда возьмет определение всех пакетов из секций dependencies и загрузит их в проект. Если пакет с нужной версией уже есть проекте, как в данном случае express, то 
по новой он не загружается.</p>
<h3>devDependencies</h3>
<p>Кроме пакетов, которые применяются в приложении, когда оно запущено и находится в рабочем состояни, например, express, то есть в 
состоянии "production", есть еще пакеты, которые применяются при разработке приложения и его тестировании. Такие пакеты, как правило, 
добавляются в другую секцию - <span class="b">devDependencies</span>.</p>
<p>Например, загрузим  в проект пакет <span class="b">jasmine-node</span>, который используется для тестирования приложения:</p>
<div class="console">
<pre class="consoletext">
npm install jasmine-node --save-dev
</pre>
</div>
<p>Флаг <code>--save-dev</code> указывается, что информацию о пакете следует сохранить именно в секции devDependencies файла package.json:</p>
<pre class="brush:js;">
{
  "name": "modulesapp",
  "version": "1.0.0",
  "dependencies": {
    "express": "^4.17.1",
    "react": "^16.9.0",
    "react-dom": "^16.9.0"
  },
  "devDependencies": {
    "jasmine-node": "^3.0.0"
  }
}
</pre>
<h3>Удаление пакетов</h3>
<p>Для удаления пакетов используется команда <code>npm uninstall</code>. Например:</p>
<div class="console">
<pre class="consoletext">
npm uninstall express
</pre>
</div>
<p>При этом не важно, где располагается информация о пакете - в секции dependencies или devDependencies, пакет удаляется из любой из этих секций.</p>
<p>Если нам надо удалить не один пакет, а несколько, то мы можем удалить их определение из файла package.json и ввести команду 
<span class="b">npm install</span>, и удаленые из package.js пакеты также будут удалены из папки node_modules.</p>
<p>Например, изменим файл package.json следующим образом:</p>
<pre class="brush:js;">
{
  "name": "modulesapp",
  "version": "1.0.0",
  "dependencies": {
  }
}
</pre>
<p>Здесь больше нет определения никаких пакетов. И введем команду</p>
<div class="console">
<pre class="consoletext">
npm install
</pre>
</div>
<p>Причем мы также можем одновременно некоторые пакеты добавлять в package.json, а некоторые, наоборот, удалять. И при выполнении 
команды <span class="b">npm install</span> пакетный менеджер новые пакеты установит, а удаленные из package.json пакеты удалит.</p>
<h3>Семантическое версионирование</h3>
<p>При определении версии пакета применяется семантическое версионирование. Номер версии, как правило, задается в следующем формате "major.minor.patch". 
Если в приложении или пакете обнаружен какой-то баг и он исправляется, то увеличивается на единицу число "patch". Если в пакет добавляется какая-то новая функциональность, которая совместима 
с предыдущей версией пакета, то это небольшое изменение, и увеличивается число "minor". Если же в пакет вносятся какие-то большие изменения, которые несовместимы с предыдущей версией, то увеличивается 
число "major". То есть глядя на разные версии пакетов, мы можем предположить, насколько велики в них различия.</p>
<p>В примере с express версия пакета содержала, кроме того, дополнительный символ карет: "^4.14.0". Этот символ означает, что при установке пакета в проект с 
помощью команды <code>npm install</code> будет устанавливаться последняя доступная версия от 4.14.0. Фактически это будет последняя доступная версия в промежутке 
от 4.14.0 до 5.0.0 (&gt;=4.14.0 и &lt;5.0.0).</p>
<h3>Команды npm</h3>
<p>NPM позволяет определять в файле package.json команды, которые выполняют определенные действия. 
Например, определим следующий файл <span class="b">app.js</span>:</p>
<pre class="brush:js;">
let name = process.argv[2];
let age = process.argv[3];

console.log("name: " + name);
console.log("age: " + age);
</pre>
<p>В данном случае мы получаем переданные при запуске приложению параметры.</p>
<p>И определим следующий файл <span class="b">package.json</span>:</p>
<pre class="brush:js;">
{
  "name": "modulesapp",
  "version": "1.0.0",
  "scripts" : {
	"start" : "node app.js",
	"dev" : "node app.js Tom 26"
  }
}
</pre>
<p>Здесь добавлена секция <span class="b">scripts</span>, которая определяет две команды. 
Вообще команд может быть много в соответствии с целями и задачами разработчика.</p>
<p>Первая команда называется <span class="b">start</span>. Она по сути выполняет команду <code>node app.js</code>, которая выполняет код в файле 
app.js</p>
<p>Вторая команда назвывается <span class="b">dev</span>. Она также выполняет тот же файл, но при этом также передает ему два параметра.</p>
<p>Названия команд могут быть произвольными. Но здесь надо учитывать один момент. Есть условно говоря есть зарезервированные 
названия для команд, 
например, <code>start</code>, <code>test</code>, <code>run</code> и ряд других. Их не очень много. И как раз первая команда из выше определенного файла 
package.json называется start. И для выполнения подобных команд в терминале/командной строке надо выполнить команду</p>
<pre class="brush:js;">npm [название_команды]</pre>
<p>Например, для запуска команды <code>start</code></p>
<pre class="brush:js;">npm start</pre>
<p>Команды с остальными названия, как например, "dev" в вышеопределенном файле, запускаются так:</p>
<pre class="brush:js;">npm run [название_команды]</pre>
<p>Например, последовательно выполним обе команды:</p>
<img src="pics/2.24.png" alt="Выполнение скриптов npm" />

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


<div class="nav"><p><a href="2.5.php">Назад</a><a href="./">Содержание</a><a href="2.6.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в  Node.js</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/1.1.php">Что такое Node.js. Начало работы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/1.2.php">Первое приложение</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы работы с Node.js</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.1.php">Модули</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.2.php">Работа с модулями</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.3.php">Объект global и глобальные переменные</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.5.php">Передача параметров приложению</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.4.php">NPM. Package.json. Установка модулей. Определение команд</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.6.php">Nodemon</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.7.php">Асинхронность в Node.js</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.8.php">Работа с файлами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.9.php">События</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.10.php">Stream</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.11.php">Pipe</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Сервер</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/3.1.php">Создание сервера</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/3.4.php">Отправка файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/3.2.php">Получение данных от клиента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/3.3.php">Шаблоны</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Express</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.1.php">Начало работы с Express</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.2.php">Конвейер обработки запроса и middleware</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.12.php">Отправка ответа</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.4.php">Статические файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.3.php">Маршрутизация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.13.php">Переадресация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.14.php">Передача данных приложению. Параметры строки запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.5.php">POST-запросы и отправка форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.15.php">Параметры маршрута</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.16.php">Router</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.6.php">JSON и AJAX</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.7.php">Представления и движок представлений Handlebars</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.8.php">Частичные представления в Handlebars</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.19.php">Layout в Handlebars</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.9.php">Хелперы в Handlebars</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.10.php">Движок EJS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.17.php">Движок Pug</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.18.php">Частичные представления и layout в Pug</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.11.php">Создание API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Тестирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/5.1.php">Mocha</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/5.2.php">Assert</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/5.3.php">Тестирование Express</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/5.4.php">Организация тестов и метод describe</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Node.js и MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.1.php">Начало работы с MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.2.php">Добавление данных в MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.10.php">Получение данных в MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.3.php">Удаление документов в MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.4.php">Обновление документов в MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.5.php">Express и MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.6.php">Mongoose</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.7.php">Определение схемы в Mongoose</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.8.php">CRUD в Mongoose</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.9.php">Express и Mongoose</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. MySQL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.1.php">Подключение к MySQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.2.php">Выполнение запросов к MySQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.3.php">Promise API</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.4.php">Основные операции с данными</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.5.php">Пулы подключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.6.php">MySQL и Express</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Sequelize</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.1.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.2.php">Определение моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.3.php">Запросы к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.4.php">Sequelize и Express</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.5.php">Связь один-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.6.php">Связь один-к-одному</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.7.php">Связь многие-ко-многим</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Паттерн MVC</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/7.1.php">Контроллеры</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/7.2.php">Модели и представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/7.3.php">Связь с базой данных MongoDB</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Загрузка файлов</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/10.1.php">Загрузка файлов с помощью multer</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/10.2.php">Настройка multer</a></span></li>
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