<!DOCTYPE html>
<html >
<head>
<title>PHP | Установка веб-сервера Apache на Windows</title>
<meta charset="utf-8" />
<meta name="description" content="Установка веб-сервера Apache и PHP 8 на Windows, настройка конфигурации, httpd.conf и httpd.exe, phpinfo, запуск простейшего скрипта на php, php_module">
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
<h2>Установка веб-сервера Apache</h2><div class="date">Последнее обновление: 26.02.2021</div>

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

<p>Для работы с PHP нам потребуется веб-сервер. Обычно в связке с PHP применяется веб-сервер Apache. Официальный 
сайт проекта - <a href="https://httpd.apache.org/" rel="nofollow">https://httpd.apache.org/</a>. Там же можно найти всю подробную информацию о релизах, скачать исходный код. 
Однако официальный сайт не предоставляет готовых сборок для ОС Windows.</p>
<p>Перед установкой Apache следует отметить, что если наша ОС Windows, то в системе должны быть установлен пакет для C++, который можно найти по адресу 
<a href="https://aka.ms/vs/16/release/VC_redist.x64.exe" rel="nofollow">для 64-битной</a> и <a href="https://aka.ms/vs/16/release/VC_redist.x86.exe" rel="nofollow">для 32-битной</a>.</p>
<p>Итак, если нашей ОС является Windows, перейдем на сайт <a href="http://www.apachelounge.com/download/" rel="nofollow">http://www.apachelounge.com/</a>, который предоставляет дистрибутивы Apache для Windows:</p>
<img src="./pics/1.3.png" alt="Загрузка веб-сервера Apache" />
<p>В подпункте <code>Apache 2.4 binaries VS16</code> выберем последнюю версию дистрибутива сервера. На странице загрузок мы можем 
найти две версии пакета Apache - для 64-битных систем и для 32-битных.</p>
<p>После загрузки пакета с Apache распакуем загруженный архив. В нем найдем папку непосредственно с файлами веб-сервера - каталог <span class="ii">Apache24</span>. 
Переместим данный каталог на диск C, чтобы полный путь к каталогу составлял <span class="b">C:/Apache24</span>.</p>
<h3>Запуск Apache</h3>
<p>В распакованном архиве в папке <span class="b">bin</span> найдем файл <span class="b">httpd.exe</span></p>
<img src="./pics/1.4.png" alt="Запуск веб-сервера Apache" />
<p>Это исполняемый файл сервера. Запустим его. Нам должна открыться следующая консоль:</p>
<img src="./pics/1.5.png" alt="веб-сервер Apache httpd.exe" />
<p>Пока работает это приложение, мы можем обращаться к серверу. Для его тестирования введем в веб-браузере адрес 
<span class="b">http:\localhost</span>. После этого веб-браузер должен отобразить следующую страницу:</p>
<img src="./pics/1.6.png" alt="it works в веб-сервере Apache" />
<p>Эта страница символизирует, что наш веб-сервер работает, и мы можем с ним работать.</p>
<h3>Конфигурация веб-сервера</h3>
<p>Теперь проведем конфигурацию сервера, чтобы связать его с ранее установленным интерпретатором PHP.. Для этого найдем в папке веб-сервера 
в каталоге <span class="b">conf</span> (то есть <span class="b">C:\Apache24\conf</span> ) файл <span class="b">httpd.conf</span></p>
<img src="./pics/1.7.png" alt="конфигурация веб-сервера Apache и связь с PHP" />
<p>Откроем этот файл в текстовом редакторе. <span class="b">httpd.conf</span> настраивает поведение веб-сервера. 
Мы не будем подобно затрагивать его описания, а только лишь произведем небольшие изменения, которые потребуются нам для работы с PHP.</p>
<p>Прежде всего подключим PHP. Для этого нам надо подключить модуль php, предназначенный для работы с apache. В частности, в папке 
php мы можем найти файл <span class="b">php8apache2_4.dll</span>:</p>
<img src="./pics/1.8.png" alt="php8apache2_4.dll и веб-сервер Apache и связь с PHP" />
<p>Для подключения php найдем в файле <span class="b">httpd.conf</span> конец блока загрузки модулей <span class="b">LoadModule</span></p>
<pre class="brush:php;">
//......................
#LoadModule vhost_alias_module modules/mod_vhost_alias.so
#LoadModule watchdog_module modules/mod_watchdog.so
#LoadModule xml2enc_module modules/mod_xml2enc.so
</pre>
<p>И в конце этого блока добавим строчки</p>
<pre class="brush:php;">
LoadModule php_module "C:/php/php8apache2_4.dll"
PHPIniDir "C:/php"
</pre>
<p>Далее укажем место, где у нас будут храниться сайты. Для этого создадим, например, на диске С каталог <span class="b">localhost</span>. Затем найдем в файле httpd.conf 
строку</p>
<pre class="brush:php;">
DocumentRoot "${SRVROOT}/htdocs"
&lt;Directory "${SRVROOT}/htdocs"&gt;</pre>
<p>По умолчанию в качестве хранилища документов используется каталог "c:/Apache24/htdocs". Заменим эту строку на следующую:</p>
<pre class="brush:php;">
DocumentRoot "c:/localhost"
&lt;Directory "c:/localhost"&gt;
</pre>
<p>Изменим пути файлам, в которые будут заноситься сведения об ошибках или посещении сайта. Для этого найдем строку</p>
<pre class="brush:php;">ErrorLog "logs/error.log"</pre>
<p>И заменим ее на</p>
<pre class="brush:php;">ErrorLog "c:/localhost/error.log"</pre>
<p>Далее найдем строку</p>
<pre class="brush:php;">CustomLog "logs/access.log" common</pre>
<p>И заменим ее на</p>
<pre class="brush:php;">CustomLog "c:/localhost/access.log" common</pre>
<p>Таким образом, файл <code>error.log</code>, в который записываются ошибки, и файл <code>access.log</code>, в который заносятся все 
данные о посещении веб-сайта, будут располагаться в папке c:/localhost.</p>
<p>Затем найдем строчку:<p>
<pre class="brush:php;">#ServerName www.example.com:80</pre>
<p>И заменим ее на</p>
<pre class="brush:php;">ServerName localhost</pre>

<p>Далее найдем блок <code>&lt;IfModule mime_module&gt;</code>:</p>
<pre class="brush:php;">
&lt;IfModule mime_module&gt;
    #
    # TypesConfig points to the file containing the list of mappings from
    # filename extension to MIME-type.
    #
    TypesConfig conf/mime.types
</pre>
<p>И под строкой <code>&lt;IfModule mime_module&gt;</code> добавим две строчки:</p>
<pre class="brush:php;">
AddType application/x-httpd-php .php
AddType application/x-httpd-php-source .phps
</pre>
<p>То есть должно получиться:</p>
<pre class="brush:php;">
&lt;IfModule mime_module&gt;
	AddType application/x-httpd-php .php
	AddType application/x-httpd-php-source .phps
    #
    # TypesConfig points to the file containing the list of mappings from
    # filename extension to MIME-type.
    #
    TypesConfig conf/mime.types
</pre>
<p>В данном случае мы добавили поддержку для файлов с расширением <code>.php</code> и <code>.phps</code>.</p>
<p>И в конце найдем блок <code>&lt;IfModule dir_module&gt;</code>:</p>
<pre class="brush:php;">
&lt;IfModule dir_module&gt;
    DirectoryIndex index.html
&lt;/IfModule&gt;
</pre>
<p>И заменим его на следующий:</p>
<pre class="brush:php;">
&lt;IfModule dir_module&gt;
	DirectoryIndex index.html index.php
&lt;/IfModule&gt;
</pre>
<p>В данном случае мы определяем файлы, которые будут выполняться при обращении к корню файла или каталога. То есть по сути определяем главные страницы 
веб-сайта: index.html и index.php.</p>
<p>Это минимально необходимая конфигурация, которая нужна для работы с PHP.</p>
<p>Теперь наша задача - убедиться, что php подключен и работает правильно. Для этого перейдем в папку <span class="b">c:/localhost</span>, которую мы создали для хранения 
файлов веб-сервера, и добавим в нее обычный текстовый файл. Переименуем его в <span class="b">index.php</span> и внесем в него следующее содержание:</p>
<pre class="brush:php;">
&lt;?php
phpinfo();
?&gt;
</pre>
<p>В данном случае мы создали простейший скрипт, который выводит общую информацию о PHP.</p>
<p>Теперь заново запустим файл <span class="b">httpd.exe</span> и обратимся к этому скрипту, набрав в строке браузера 
адрес <span class="b">http://localhost/index.php</span></p>
<img src="./pics/1.9.png" alt="phpinfo" />
<p>Что тут произошло? При обращении к сайту на локальной машине в качестве адреса указывается <span class="b">http://localhost</span>. 
Затем указывается имя ресурса, к которому идет обращение. В данном случае в качестве ресурса используется файл 
<span class="b">index.php</span>. И так как в файле httpd.conf в качестве хранилища документов веб-сервера указан каталог <span class="b">C:\localhost</span>, то именно в этом каталоге и будет 
веб-сервер будет производить поиск нужных файлов.</p>
<p>И поскольку выше при конфигурировании мы указали, что в качестве главной страницы может использоваться файл <span class="b">index.php</span>, то мы можем также обратиться к 
этому ресурсу просто <span class="b">http://localhost/</span></p>
<p>Таким образом, теперь мы можем создавать свои сайты на php.</p>
<h3>Установка веб-сервера в качестве службы</h3>
<p>Если мы часто работаем с веб-сервером, в том числе для программиррования на PHP, то постоянно запускать таким образом сервер, 
может быть утомительно. И в качестве альтернативы мы можем установить Apache в качестве службы Windows. 
Для этого запустим командную строку Windows от имени администратора и установим Apache в качестве службы с помощью команды:</p>
<div class="console"><pre class="consoletext">C:\Apache24\bin\httpd.exe -k install</pre></div>
<img src="./pics/1.10.png" alt="Установка Apache и PHP" />
<p>То есть в данном случае прописываем полный путь к файлу httpd.exe (C:\Apache24\bin\httpd.exe) и далее указываем команду на установку службы <code>-k install</code>.</p>
<p>Если установка завершится удачно, то в командная строка отобразит сообщение "The Apache2.4 service is successfully installed". Также будет проведено тестирование сервера.</p>
<p>После установки службы убедимся, что она запущена</p>
<img src="./pics/1.11.png" alt="Установка Apache и PHP в качестве службы Windows" />

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


<div class="nav"><p><a href="./1.2.php">Назад</a><a href="./">Содержание</a><a href="./1.5.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в PHP</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.1.php">Общий обзор языка программирования PHP</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.2.php">Установка PHP</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.3.php">Установка веб-сервера Apache</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.5.php">Установка веб-сервера Apache и PHP на Mac OS</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.4.php">Первый сайт на PHP</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Основы PHP</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.1.php">Основы синтаксиса</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.2.php">Переменные</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.3.php">Типы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.6.php">Операции в PHP</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.7.php">Конструкция if..else и тернарная операция</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.14.php">Конструкции switch и match</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.8.php">Циклы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.12.php">Массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.15.php">Ассоциативные массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.16.php">Многомерные массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.9.php">Функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.17.php">Параметры функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.18.php">Возвращение значений и оператор return</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.19.php">Анонимные функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.20.php">Замыкания / Closure</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.21.php">Стрелочные функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.22.php">Генераторы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.24.php">Ссылки</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.10.php">Область видимости переменной</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.4.php">Константы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.23.php">Проверка существования переменной</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.5.php">Получение и установка типа переменной. Преобразование типов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.13.php">Операции с массивами</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Отправка данных на сервер</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.2.php">Получение данных из строки запроса. GET-запросы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.1.php">Отправка форм. POST-запросы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.5.php">Безопасность данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.6.php">Отправка массивов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.3.php">Работа с полями ввода форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.4.php">Пример обработки форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.4.php">Отправка файлов на сервер</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.1.php">Объекты и классы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.5.php">Конструкторы и деструкторы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.6.php">Анонимные классы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.2.php">Наследование</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.3.php">Модификаторы доступа</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.4.php">Статические методы и свойства</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.7.php">Интерфейсы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.8.php">Абстрактные классы и методы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.9.php">Traits</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.10.php">Копирование объектов классов</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Базовые возможности PHP</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.11.php">Подключение внешних файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.4.php">Пространства имен</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.5.php">Типизация данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.1.php">Работа со строками</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.2.php">Работа с cookie</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.3.php">Сессии</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. Обработка исключений</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/8.1.php">Конструкция try catch finally</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/8.2.php">Генерация исключений</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Работа с файловой системой</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.1.php">Чтение и запись файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.2.php">Управление файлами и каталогами</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.3.php">Блокировка файла. Функция flock</a></span></li>
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