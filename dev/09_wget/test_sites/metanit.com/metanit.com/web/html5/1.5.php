<!DOCTYPE html>
<html >
<head>
<title>HTML5 | Элемент head и метаданные веб-страницы</title>
<meta charset="utf-8" />
<meta name="description" content="Элемент head в HTML5, определение метаданных веб-страницы, заголовок и кодировка html-документа">
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
<h1>Элементы в HTML5</h1><div class="date">Последнее обновление: 08.04.2016</div>

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

<img src="https://metanit.com/metanit-front.jpg" id="jmw" style="cursor:pointer;" />
</div>

<p>Основная часть документа html, фактически все, что мы увидим в своем браузере при загрузке веб-страницы, располагается между тегами 
<span class="b">&lt;body&gt;</span> и <span class="b">&lt;/body&gt;</span>. Здесь размещаются большинство элементов html.</p>
<p>Хотя большинство элементов в HTML5 остаются теми же, что и в ранних версиях, но несколько изменился способ их использования. Рассмотрим базовые элементы HTML5, 
их предназначение и использование.</p>
<h2>Элемент head и метаданные веб-страницы</h2>
<p>Как правило, одним из первых элементов html-документа является элемент <span class="b">head</span>, задача которого состоит в установке метаданных страницы и ряда сопроводительной информации. 
Метаданные содержат информацию о html-документе.</p>
<h3>Заголовок</h3>
<p>Для установки заголовка документа, который отображается на вкладке браузера, используется элемент <span class="b">title</span></p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset="utf-8"&gt;
		&lt;title&gt;Элемент title&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;p&gt;Содержание документа HTML5&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;
</pre>
<img src="pics/1.5.png" alt="Заголовок в html" />
<h3>Элемент base</h3>
<p>Элемент <code>base</code> позволяет указать базовый адрес, относительно которого устанавливаются другие адреса, используемые в документе:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;base href="content/"&gt;
		&lt;meta charset="utf-8"&gt;
		&lt;title&gt;Элемент base&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;a href="newpage.html"&gt;Перейти&lt;/a&gt;
	&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Хотя для ссылки в качестве адреса указана страница newpage.html, но фактически ее адресом будет <i>content/newpage.html</i>. То есть в 
одной папке с текущей страницей должна быть подпапка content, в которой должен находится файл <i>newpage.html</i></p>
<p>Можно также указывать полный адрес:</p>
<pre class="brush:xml;">
&lt;base href="http://www.microsoft.com/"&gt;
</pre>
<p>В это случае ссылка будет вести по адресу <i>http://www.microsoft.com/newpage.html</i></p>
<h3>Элемент meta</h3>
<p>Элемент <span class="b">meta</span> определяет метаданные документа.</p>
<p>Чтобы документ корректно отображал текст, необходимо задать кодировку с помощью атрибута <span class="b">charset</span>. Рекомендуемой 
кодировкой является utf-8:<p>
<pre class="brush:xml;">
&lt;meta charset="utf-8"&gt;
</pre>
<p>При этом надо помнить, что указанная  элементе <code>meta</code> кодировка должна совпадать с кодировкой самого документа. Как правило, текстовый редактор позволяет 
указать кодировку документа. Если мы хотим ориентироваться на utf-8, то в настройках текстового редактора надо выбирать <span class="b">UTF-8 w/o BOM</span>. 
Например, выбор кодировки в Notepad++:</p>
<img src="pics/1.3.png" alt="Установка кодировки html-файла" />
<p>Элемент <code>meta</code> также имеет два атрибута: <code>name</code> и </code>content</code>. Атрибут <code>name</code> содержит имя метаданных, а <code>content</code> - их значение.</p>
<p>По умолчанию в HTML определены пять типов метаданных:</p>
<ul>
<li><p><span class="b">application name</span>: название веб-приложения, частью которого является данный документ</p></li>
<li><p><span class="b">author</span>: автор документа</p></li>
<li><p><span class="b">description</span>: краткое описание документа</p></li>
<li><p><span class="b">generator</span>: название программы, которая сгенерировала данный документ</p></li>
<li><p><span class="b">keywords</span>: ключевые слова документа</p></li>
</ul>
<p>Надо отметить, что наиболее актуальным является тип <code>description</code>. Его значение поисковики часто используют в качестве аннотации к документу 
в поисковой выдаче.</p>
<p>Добавим в документ ряд элементов meta:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset="utf-8"&gt;
		&lt;base href="content/"&gt;
		&lt;title&gt;Элемент title&lt;/title&gt;
		&lt;meta name="description" content="Первый документ HTML5"&gt;
		&lt;meta name="author" content="Bill Gates"&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;a href="newpage.html"&gt;Содержание документа HTML5&lt;/a&gt;
	&lt;/body&gt;
&lt;/html&gt;
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


<div class="nav"><p><a href="1.4.php">Назад</a><a href="./">Содержание</a><a href="2.1.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в HTML5</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/1.1.php">Что такое HTML</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/1.2.php">Элементы и атрибуты</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/1.3.php">Создание документа</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/1.4.php">Разновидности синтаксиса</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Элементы в HTML5</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/1.5.php">Элемент head и метаданные веб-страницы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.1.php">Элементы группировки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.2.php">Заголовки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.3.php">Форматирование текста</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.4.php">Работа с изображениями</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.5.php">Списки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.6.php">Элемент details</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.7.php">Список определений</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.8.php">Таблицы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.9.php">Ссылки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.10.php">Элементы figure и figcaption</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/2.11.php">Фреймы</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Работа с формами</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/3.1.php">Формы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.2.php">Элементы форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.3.php">Кнопки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.4.php">Текстовые поля</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.5.php">Метки и автофокус</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.6.php">Элементы для ввода чисел</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.7.php">Флажки и переключатели</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.8.php">Элементы для ввода цвета, url, email, телефона</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.9.php">Элементы для ввода даты и времени</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.10.php">Отправка файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.11.php">Список select</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.12.php">Textarea</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.13.php">Валидация форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/3.14.php">Элементы fieldset и legend</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Семантическая структура страницы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/4.1.php">Элемент article</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.2.php">Элемент section</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.3.php">Элемент nav</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.4.php">Элементы header, footer и address</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.5.php">Элемент aside</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/4.6.php">Элемент main</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Основы CSS3. Селекторы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/5.1.php">Введение в стили</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.2.php">Селекторы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.3.php">Селекторы потомков</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.4.php">Селекторы дочерних элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.8.php">Селекторы элементов одного уровня</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.5.php">Псевдоклассы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.11.php">Псевдоклассы дочерних элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.12.php">Псевдоклассы форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.6.php">Псевдоэлементы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.7.php">Селекторы атрибутов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.9.php">Наследование стилей</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.10.php">Каскадность стилей</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/5.13.php">Псевдоклассы :is() и :where()</a></span></li>
			</ul>
		</li>
		
		<li class="closed"><span class="folder">Глава 6. Основы CSS3. Свойства</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/6.1.php">Цвет в CSS</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.2.php">Стилизация шрифтов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.3.php">Внешние шрифты</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.4.php">Высота шрифта</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.5.php">Форматирование текста</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.6.php">Стилизация абзацев</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.7.php">Стилизация списков</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.8.php">Стилизация таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.9.php">Блочная модель</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.10.php">Внешние отступы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.11.php">Внутренние отступы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.12.php">Границы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.13.php">Размеры элементов. Box-sizing</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.14.php">Фон элемента</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.15.php">Создание тени у элемента</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.16.php">Контуры элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.17.php">Обтекание элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.18.php">Прокрутка элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.19.php">Линейный градиент</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.20.php">Радиальный градиент</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/6.21.php">Стилизация элемента details</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Создание макета страницы и верстка</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/8.1.php">Блочная верстка. Часть 1</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.2.php">Блочная верстка. Часть 2</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.3.php">Вложенные плавающие блоки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.4.php">Выравнивание столбцов по высоте</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.5.php">Свойство display</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.6.php">Создание панели навигации</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.7.php">Выравнивание плавающих элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.8.php">Создание простейшего макета</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.9.php">Позиционирование</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/8.10.php">Фиксированное позиционирование</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 8. Трансформации, переходы и анимации</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/9.1.php">Трансформации</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/9.2.php">Переходы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/9.3.php">Анимация</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 9. Адаптивный дизайн</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/11.1.php">Введение в адаптивный дизайн</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/11.2.php">Метатег Viewport</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/11.3.php">Media Query в CSS</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 10. Мультимедиа</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/7.1.php">Видео</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/7.2.php">Аудио</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/7.3.php">Media API. Управление видео из JavaScript</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 11. Canvas</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/10.1.php">Доступ к canvas и рисование прямоугольников</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.9.php">Настройка рисования</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.2.php">Фоновые изображения</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.3.php">Создание градиента</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.4.php">Рисование текста</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.5.php">Рисование фигур</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.6.php">Рисование изображений</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.7.php">Добавление теней</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.8.php">Редактирование пикселей</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.10.php">Трансформации</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/10.11.php">Рисование мышью</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 12. Flexbox</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/12.1.php">Что такое Flexbox. Flex Container</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.2.php">Направление flex-direction</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.3.php">flex-wrap</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.4.php">flex-flow. Порядок элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.5.php">Выравнивание элементов. justify-content</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.6.php">Выравнивание элементов. align-items и align-self</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.7.php">Выравнивание строк и столбцов. align-content</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.8.php">Управление элементами. flex-basis, flex-shrink и flex-grow</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.9.php">Многоколоночный дизайн на Flexbox</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/12.10.php">Макет страницы на Flexbox</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 13. Grid Layout</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/13.1.php">Что такое Grid Layout. Grid Container</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.2.php">Строки и столбцы</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.3.php">Функция repeat и свойство grid</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.4.php">Размеры строк и столбцов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.5.php">Отступы между столбцами и строками</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.6.php">Позиционирование элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.7.php">Наложение элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.8.php">Направление и порядок элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.9.php">Именованные grid-линии</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.10.php">Именованные grid-линии и функция repeat</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.11.php">Области грида</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/13.12.php">Макет страницы в Grid Layout</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 14. Переменные в CSS</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/html5/14.1.php">Стилизация с помощью переменных</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/14.2.php">Создание тем CSS с помощью переменных</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/html5/14.3.php">Стили CSS как хранилище данных</a></span></li>
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