<!DOCTYPE html>
<html >
<head>
<title>Django | Типы полей формы</title>
<meta charset="utf-8" />
<meta name="description" content="Типы полей форм Django, типы CharField, ChoiceField, IntegerField, DecimalField, DateField, DateTimeField, ввода данных в форму">
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
<h2>Типы полей формы</h2><div class="date">Последнее обновление: 23.02.2018</div>

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

<p>В формах Django мы можем использовать следующие классы для создания полей форм:</p>
<ul>
<li><p><span class="b">forms.BooleanField</span>: создает поле <code>&lt;input type="checkbox" &gt;</code>. Возвращает значение Boolean: 
True - если флажок отмечен и False - если флажок не отмечен.</p></li>
<li><p><span class="b">forms.NullBooleanField</span>: создает следующую разметку:</p>
<pre class="brush:xml;">
&lt;select&gt;
&lt;option value="1" selected="selected"&gt;Unknown&lt;/option&gt;
&lt;option value="2"&gt;Yes&lt;/option&gt;
&lt;option value="3"&gt;No&lt;/option&gt;
&lt;/select&gt;
</pre>
</li>
<li><p><span class="b">forms.CharField</span>: предназначен для ввода текста и создает следующую разметку:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>
<li><p><span class="b">forms.EmailField</span>: предназначен для ввода адреса электронной почты и создает следующую разметку:</p>
<pre class="brush:xml;">
&lt;input type="email"&gt;
</pre>
</li>
<li><p><span class="b">forms.GenericIPAddressField</span>: предназначен для ввода IP-адреса в формате IP4v или IP6v и создает следующую разметку:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>
<li><p><span class="b">forms.RegexField (regex="регулярное_выражение")</span>: предназначен для ввода текста, который должен соответствовать определенному регулярному выражению. Создает текстовое поле:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>
<li><p><span class="b">forms.SlugField()</span>: предназначен для ввода текста, который условно называется "slug", то есть последовательность 
символов в нижнем регистре, чисел, дефисов и знаков подчеркивания. Создает текстовое поле:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>
<li><p><span class="b">forms.URLField()</span>: предназначен для ввода ссылок. Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="url"&gt;
</pre>
</li>
<li><p><span class="b">forms.UUIDField()</span>: предназначен для ввода UUID (универсального уникального идентификатора). Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>
<li><p><span class="b">forms.ComboField(fields=[field1, field2,..])</span>: аналогичен обычному текстовому полю за тем исключением, 
что требует, чтобы вводимый текст соответствовал требованиям тех полей, которые передаются через параметр fields. Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>
<li><p><span class="b">forms.MultiValueField(fields=[field1, field2,..])</span>: предназначен для создания сложных компоновок, состоящих из нескольких полей.</p>
</li>
<li><p><span class="b">forms.FilePathField(path="каталог файлов")</span>: создает список select, который содержит все папки и файлы в определенном каталоге:</p>
<pre class="brush:xml;">
&lt;select&gt;
  &lt;option value="folder/file1"&gt;folder/file1&lt;/option&gt;
  &lt;option value="folder/file2"&gt;folder/file2&lt;/option&gt;
  &lt;option value="folder/file3"&gt;folder/file3&lt;/option&gt;
  //.............................................
&lt;/select&gt;
</pre>
</li>
<li><p><span class="b">forms.FileField()</span>: предназначен для выбора файла. Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="file"&gt;
</pre>
</li>
<li><p><span class="b">forms.ImageField()</span>: предназначен также для выбора файла, но при этом добавляет ряд дополнительных возможностей. Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="file"&gt;
</pre>
</li>
<li><p><span class="b">forms.DateField()</span>: предназначен установки даты. В создаваемое поле вводится текст, который может быть сконвертирован в дату, например, 
<code>2017-12-25</code> или <code>11/25/17</code>. 
Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>

<li><p><span class="b">forms.TimeField()</span>: предназначен ввода времени, например, <code>14:30:59</code> или <code>14:30</code>. Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>

<li><p><span class="b">forms.DateTimeField()</span>: предназначен ввода даты и времени, например, <code>2017-12-25 14:30:59</code> или <code>11/25/17 14:30</code>. Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>

<li><p><span class="b">forms.DurationField()</span>: предназначен временного промежутка. Вводимый текст должен соответствовать формату "DD HH:MM:SS", 
например, <code>2 1:10:20</code> (2 дня 1 час 10 минут 20 секунд). Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="text"&gt;
</pre>
</li>

<li><p><span class="b">forms.SplitDateTimeField()</span>: создает два текстовых поля для ввода соответственно даты и времени:</p>
<pre class="brush:xml;">
&lt;input type="text" name="_0" &gt;
&lt;input type="text" name="_1" &gt;
</pre>
</li>

<li><p><span class="b">forms.IntegerField()</span>: предназначен для ввода чисел. Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="number"&gt;
</pre>
</li>
<li><p><span class="b">forms.DecimalField()</span>: предназначен для ввода чисел. Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="number"&gt;
</pre>
</li>
<li><p><span class="b">forms.FloatField()</span>: предназначен для ввода чисел. Создает следующее поле:</p>
<pre class="brush:xml;">
&lt;input type="number"&gt;
</pre>
</li>

<li><p><span class="b">forms.ChoiceField(choises=кортеж_кортежей)</span>: генерирует список select, каждый из его элементов формируется на основе отдельного кортежа. 
Например, следующее поле:</p>
<pre class="brush:py;">
forms.ChoiceField(choices=((1, "English"), (2, "German"), (3, "French")))
</pre>
<p>будет генерировать следующую разметку:</p>
<pre class="brush:xml;">
&lt;select&gt;
	&lt;option value="1"&gt;English&lt;/option&gt;
	&lt;option value="2"&gt;German&lt;/option&gt;
	&lt;option value="3"&gt;French&lt;/option&gt;
&lt;/select&gt;
</pre>
</li>
<li><p><span class="b">forms.TypedChoiceField(choises=кортеж_кортежей, coerce=функция_преобразования, empty_value=None)</span>: также 
генерирует список select на основе кортежа. Однако дополнительно принимает функцию преобразования, которая преобразует каждый элемент. И также 
принимает параметр empty_value, который указывает на значение по умолчанию.</p>
</li>

<li><p><span class="b">forms.MultipleChoiceField(choises=кортеж_кортежей)</span>: также генерирует список select на основе кортежа, как и 
forms.ChoiceField, добавляя к создаваемому полю атрибут <code>multiple="multiple"</code>. То есть список поддерживает множественный выбор.</p>
</li>
<li><p><span class="b">forms.TypedMultipleChoiceField(choises=кортеж_кортежей, coerce=функция_преобразования, empty_value=None)</span>: аналог 
<code>forms.TypedChoiceField</code> для списка с множественным выбором.</p>
</li>
</ul>
<h3>Виджеты Django</h3>
<p>Выше рассмотренные поля при генерации разметки используют определенные виджеты из пакета <span class="b">forms.widgets</span>. Например, класс 
CharField использует виджет <code>forms.widgets.TextInput</code>, а ChoiceField использует <code>forms.widgets.Select</code>. Но есть ряд виджетов, 
которые по умолчанию не используются полями форм, но тем не менее мы их можем задействовать:</p>
<ul>
<li><p><span class="b">PasswordInput</span>: генерирует поле для ввода пароля <code>&lt;input type="password" &gt;</code></p></li>
<li><p><span class="b">HiddenInput</span>: генерирует скрытое поле <code>&lt;input type="hidden" &gt;</code></p></li>
<li><p><span class="b">MultipleHiddenInput</span>: генерирует набор скрытых полей</p></li>
<li><p><span class="b">TextArea</span>: генерирует многострочное текстовое поле <code>&lt;textarea&gt;&lt;/textarea&gt;</code></p></li>
<li><p><span class="b">RadioSelect</span>: генерирует список переключателей (радиокнопок) <code>&lt;input type="radio" &gt;</code></p></li>
<li><p><span class="b">CheckboxSelectMultiple</span>: генерирует список флажков <code>&lt;input type="checkbox" &gt;</code></p></li>
<li><p><span class="b">TimeInput</span>: генерирует поле для ввода времени (например, <code>12:41</code> или <code>12:41:32</code>)</p></li>
<li><p><span class="b">SelectDateWidget</span>: генерирует три поля select для выбора дня, месяца и года</p></li>
<li><p><span class="b">SplitHiddenDateTimeWidget</span>: использует скрытое поле для хранения даты и времени</p></li>
<li><p><span class="b">FileInput</span>: генерирует поле для выбора файла</p></li>
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


<div class="nav"><p><a href="4.1.php">Назад</a><a href="./">Содержание</a><a href="4.3.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Django</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/1.1.php">Что такое Django</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/1.2.php">Установка и настройка Django</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/1.3.php">Создание первого проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/1.4.php">Создание первого приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Представления и маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/3.1.php">Обработка запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.2.php">Определение маршрутов и функции path и re_path</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.3.php">Параметры представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.4.php">Параметры строки запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.5.php">Переадресация и отправка статусных кодов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Шаблоны</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/2.1.php">Создание и использование шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.3.php">Передача данных в шаблоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.2.php">Статические файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.4.php">TemplateView</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.5.php">Конфигурация шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.6.php">Расширение шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.7.php">Встроенные теги</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Формы Django</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/4.1.php">Определение форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.2.php">Типы полей формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.3.php">Настройка формы и ее полей</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.4.php">Валидация данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.5.php">Детальная настройка полей формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.6.php">Стилизация полей форм</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/5.1.php">Создание моделей и миграции базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.2.php">Типы полей моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.3.php">CRUD. Операции с моделями</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.4.php">Создание и получение объектов модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.5.php">Редактирование и удаление объектов модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.6.php">Отношение один ко многим (One to Many)</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.7.php">Отношение многие ко многим (Many to Many)</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.8.php">Отношение один к одному (One to one)</a></span></li>
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