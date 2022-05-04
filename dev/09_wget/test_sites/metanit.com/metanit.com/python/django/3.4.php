<!DOCTYPE html>
<html >
<head>
<title>Django | Параметры строки запроса</title>
<meta charset="utf-8" />
<meta name="description" content="Параметры строки запроса в Django, и получение их значений в представлениях">
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
<h2>Параметры строки запроса</h2><div class="date">Последнее обновление: 19.02.2018</div>

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

<p>От параметров, которые передаются через адрес URL, следует отличать параметры, которые передаются через строку запроса. 
Например, в запросе <span class="ii">http://localhost/index/3/Tom/</span> два последних сегмента <code>3/Tom/</code> представляют 
параметры URL. А в запросе <span class="ii">http://localhost/index?id=3&name=Tom</span> те же самые значения 3 и Tom представляют параметры 
строки запроса.</p>
<p>Параметры строки запроса указывается после вопросительного знака ?. Каждый параметр предсталяет пару ключ-значение, напимер, в <code>id=3</code> : 
id - название или ключ параметра, а 3 - его значение. Параметры в строке запроса отделяются друг от друга знаком амперсанда.</p>
<p>Для получения параметров из строки запроса применяется метод <span class="b">request.GET.get()</span>.</p>
<p>Например, определим в файле <span class="b">views.py</span> следующие функции:</p>
<pre class="brush:py;">
from django.http import HttpResponse

def products(request, productid):
    category = request.GET.get("cat", "")
    output = "&lt;h2&gt;Product № {0}  Category: {1}&lt;/h2&gt;".format(productid, category)
    return HttpResponse(output)

def users(request):
    id = request.GET.get("id", 1)
    name = request.GET.get("name", "Tom")
    output = "&lt;h2&gt;User&lt;/h2&gt;&lt;h3&gt;id: {0}  name: {1}&lt;/h3&gt;".format(id, name)
    return HttpResponse(output)
</pre>
<p>Функция products принимает обычный параметра productid, который будет передаваться через URL. И также из строки запроса извлекается значение параметра 
<code>cat</code>: <code>request.GET.get("cat", "")</code> - первый аргумент функции - это название параметра строки запроса, значение которого надо извлечь, 
а второй аргумент - значение по умолчанию, если вдруг в строке запроса не оказалось подобного параметра.</p>
<p>В функции users из строки запроса извлекаются значения параметров id и name.</p>
<p>В файле <span class="b">urls.py</span> определим следующие маршруты:</p>
<pre class="brush:py;">
from django.urls import path
from firstapp import views

urlpatterns = [
    path('products/&lt;int:productid&gt;/', views.products),
    path('users/', views.users),
]
</pre>
<p>При обращении к приложению по адресу <span class="ii">http://127.0.0.1:8000/products/3/?cat=phones</span>, число 3 будет представлять параметр URL будет переходить в 
параметр productid, а <code>cat="phones"</code> будет представлять параметр cat строки запроса.</p>
<img src="pics/3.9.png" alt="Параметры строки запроса в Django" />
<p>А при обращении по адресу <span class="ii">http://127.0.0.1:8000/users/?name=Tom&id=5</span> значения Tom и 5 будет представлять соответственно параметры name и id:</p>
<img src="pics/3.10.png" alt="Query String Params in Django" />
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


<div class="nav"><p><a href="3.3.php">Назад</a><a href="./">Содержание</a><a href="3.5.php">Вперед</a></p></div></div>
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