<!DOCTYPE html>
<html >
<head>
<title>Django | Шаблоны</title>
<meta charset="utf-8" />
<meta name="description" content="Создание и использование шаблонов (templates) в веб-приложении на Python и Django">
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
<h1>Шаблоны</h1><h2>Создание и использование шаблонов</h2><div class="date">Последнее обновление: 21.02.2018</div>

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

<p>Шаблоны (template) отвечают за формирование внешнего вида приложения. Они предоставляют специальный синтаксис, который позволяет внедрять 
данные в код HTML.</p>
<p>Итак, в прошлых темах был создан следующий проект:</p>
<img src="pics/2.1.png" alt="Templates в Django" />
<p>Проект называется hello. И в нем определено одно приложение - firstapp.</p>
<p>Теперь добавим шаблоны. Для этого определим в корневой папке проекта новый каталог <span class="b">templates</span>. Вообще само имя каталога может быть любым, 
но, как правило, это именно templates. Теперь нам надо указать, что этот каталог будет использоваться в качестве хранилища шаблонов. Для этого откроем файл <span class="b">settings.py</span>. 
В этом файле настройка шаблонов произодится с помощью переменной <span class="b">TEMPLATES</span>:</p>
<pre class="brush:py;">
TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': [],
        'APP_DIRS': True,
        'OPTIONS': {
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',
            ],
        },
    },
]
</pre>
<p>Параметр <span class="b">DIRS</span> задает набор каталогов, которые хранят шаблоны. Но по умолчанию он пуст. Теперь изменим данный кусок кода следующим образом:</p>
<pre class="brush:py;">
TEMPLATE_DIR = os.path.join(BASE_DIR, "templates")

TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': [TEMPLATE_DIR,],
        'APP_DIRS': True,
        'OPTIONS': {
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',
            ],
        },
    },
]
</pre>
<img src="pics/2.2.png" alt="Настройка Templates в Django" />
<p>Затем в папке <span class="ii">templates</span> определим новый файл <span class="b">index.html</span> со следующим кодом:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Django&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome to Django!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>По сути это обычная веб-страница, которая содержит код html. Теперь используем эту страницу для отправки ответа пользователю. 
И для этого перейдем в приложении firstapp к файлу <span class="b">views.py</span>, который определяет функции для обработки запроса. Изменим этот файл следующим образом:</p>
<pre class="brush:py;">
from django.shortcuts import render

def index(request):
    return render(request, "index.html")
</pre>
<p>Из модуля <code>django.shortcuts</code> импортируется функция <span class="b">render</span>.</p>
<p>Функция index вызывает функцию render, которой передаются объект запроса request и путь к файлу шаблона в рамках папки templates - 
"index.html".</p>
<img src="pics/2.3.png" alt="Связь шаблона template и view в Django" />
<p>В файле <span class="b">urls.py</span> в главном проекте пропишем сопоставление функции index с запросом к корню веб-приложения:</p>
<pre class="brush:py;">
from django.contrib import admin
from django.urls import path
from firstapp import views

urlpatterns = [
    path('', views.index),
]
</pre>
<p>И запустим проект на выполнение и перейдем к приложению в браузере:</p>
<img src="pics/2.4.png" alt="Templates in Django" />
<p>Таким образом, мы можем передавать в шаблоны данные и возвращать пользователю динамически генерируемые веб-страницы.</p>
<p>Однако в проекте Django нередко бывает несколько приложений. И каждое из этих приложений может иметь свой набор шаблонов. Чтобы разграничить шаблоны для 
отдельных проектов, можно определять для шаблонов каждого приложения отдельный каталог. Например, в нашем случае у нас одно приложение - firstapp. 
Для него определим в папке <span class="b">templates</span> каталог <span class="b">firstapp</span> (по имени приложения). И в этом каталоге определим 
также файл <span class="b">home.html</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Django&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello from Home.html!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<img src="pics/2.11.png" alt="Шаблоны в Python и Django" />
<p>Теперь изменим файл <span class="b">views.py</span> в приложении:</p>
<pre class="brush:py;">
from django.shortcuts import render

def index(request):
    return render(request, "firstapp/home.html")
</pre>
<p>Стоит отметить, что теперь в пути к шаблону также указывается папка, в которой он находится: <code>"firstapp/index.html"</code>.</p>
<h3>TemplateResponse</h3>
<p>Выше для генерации шаблона применялась функция <span class="b">render()</span>, которая является наиболее распространенным вариантом. 
Однако также мы можем использовать класс <span class="b">TemplateResponse</span>:</p>
<pre class="brush:py;">
from django.template.response import TemplateResponse
 
def index(request):
    return TemplateResponse(request,  "firstapp/home.html")
</pre>
<p>Результат будет тот же самый.</p>
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


<div class="nav"><p><a href="3.5.php">Назад</a><a href="./">Содержание</a><a href="2.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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