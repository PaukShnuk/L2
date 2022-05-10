<!DOCTYPE html>
<html >
<head>
<title>Knockout | Вычисляемые объекты. Функция ko.computed</title>
<meta charset="utf-8" />
<meta name="description" content="Функция ko.computed в KnockoutJS, динамическое создание привязанных объектов">
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
<h2>Вычисляемые объекты. Функция ko.computed</h2><div class="date">Последнее обновление: 17.05.2016</div>

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

<p>Иногда требуется осуществить привязку не к одному объекту из ViewModel, а к какому-то объекту, который вычисляется динамически. Например, пусть у нас есть 
модель, которая представляет человека:</p>
<pre class="brush:xml;">
&lt;p&gt;&lt;span data-bind="text: name"&gt;&lt;/span&gt; &lt;span data-bind="text: surname"&gt;&lt;/span&gt;&lt;/p&gt;
&lt;script&gt;
var personViewModel = {
	name: ko.observable("Том"),
	surname: ko.observable("Джонс")
};
ko.applyBindings(personViewModel);
&lt;/script&gt;
</pre>
<p>Если нам надо использовать данные о человеке - имя и фамилию вместе, то есть полное имя, как единое целое, то нам надо создать функцию, которая будет 
соединить имя и фамилию. Для этого надо создать вычисляемый наблюдаемый объект с помощью метода <span class="b">ko.computed()</span>:</p>
<pre class="brush:xml;">
&lt;p&gt;Полное имя: &lt;span data-bind="text: fullName"&gt;&lt;/span&gt;&lt;/p&gt;
&lt;script&gt;

function PersonViewModel() {
	var self = this;
    self.firstName = ko.observable("Том");
    self.lastName = ko.observable("Джонс");
	self.fullName = ko.computed(function() {
        return self.firstName() + " " + self.lastName();
    });
};

var person = new PersonViewModel();
ko.applyBindings(person);
&lt;/script&gt;
</pre>
<p>Прежде всего вместо простого объекта JavaSctipt используется функция конструктора, которая создает объект ViewModel.</p>
<p>Во-первых, в данном случае применяется распространенный прием, который позволяет не отслеживать ссылку на объект, представленную ключевым словом 
<code>this</code>. Если конструктор объекта ViewModel копирует ссылку на <code>this</code> в другую переменную (обычно называется <span class="b">self</span>), 
то затем эту переменную можно использовать для доступа к ViewModel внутри конструктора:</p>
<p>Во-вторых, после того, как ViewModel оказывается привязана к представлению, Knockout выполняет вычисляемую функцию в методе <code>ko.computed()</code> и возвращает 
результат. Если в функции применяются наблюдаемые объекты observable (как в данном случае), то функция подписывается на изменения в этих наблюдаемых объектах. 
И при наличии изменений Knockout синхронно обновляет значение вычисляемой функции. Рассмотрим этот момент на примере:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;title&gt;Привязка в KnockoutJS&lt;/title&gt;
&lt;script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/knockout/knockout-3.4.0.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;p&gt;Полное имя: &lt;span data-bind="text: fullName"&gt;&lt;/span&gt;&lt;/p&gt;
&lt;button id="updateBtn"&gt;Update&lt;/button&gt;
&lt;script&gt;
function PersonViewModel() {
	var self = this;
    self.firstName = ko.observable("Том");
    self.lastName = ko.observable("Джонс");
	self.fullName = ko.computed(function() {
        return self.firstName() + " " + self.lastName();
    });
};
var person = new PersonViewModel();
ko.applyBindings(person);

var updateBtn = document.getElementById("updateBtn");
updateBtn.addEventListener("click", function (e) {
	
    person.firstName("Боб");
});
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь добавлена кнопка, при нажатии на которую будет изменяться значение поля <code>firstName</code>. Это в свою очередь заставит обновить возвращаемое 
значение функцию <code>fullName</code>, и соответственно обновится и тот текст, который выводится на html-страницу:</p>
<img src="pics/12.png" alt="Computed observables in Knockout" />
<h3>Pure computed functions</h3>
<p>Если вычисляемые функции просто вычисляют и возвращают некоторое значение, которое основано на наблюдаемых значениях observable, то в этом 
случае лучше определить подобные функции с помощью метода <code>ko.pureComputed()</code>, а не через метод <code>ko.computed()</code>. Например:</p>
<pre class="brush:xml;">
&lt;p&gt;Полное имя: &lt;span data-bind="text: fullName"&gt;&lt;/span&gt;&lt;/p&gt;
&lt;script&gt;
function PersonViewModel() {
	var self = this;
    self.firstName = ko.observable("Том");
    self.lastName = ko.observable("Джонс");
	self.fullName = ko.pureComputed(function() {
        return self.firstName() + " " + self.lastName();
    });
};
var person = new PersonViewModel();
ko.applyBindings(person);
&lt;/script&gt;
</pre>
<p>Фактически мы имеем тот же самый результат, что и при применении обычных вычисляемых функций, создаваемых с помощью <code>ko.computed()</code>. В чем же тогда отличие?</p>
<p>Подобные функции, создаваемые методом <code>ko.pureComputed()</code>, увеличивают производительность, предупреждают возможные утечки памяти. Подобная оптимизация 
возможна благодаря тому, что эти функции не отслеживают изменения в свойствах, если подписчики на эти изменения отсутствуют..</p>
<p>pureComputed-функции автоматически переключаются между двумя состояниями в зависимости от того, имеют они подписчиков на изменение значений или нет:</p>
<ul>
<li><p>Состояние <span class="b">sleeping</span>. Если функция не имеет подписчиков, то для нее удаляется все подписки на отслеживание ее зависимостей, то есть ссылки на всех используемых наблюдаемых объектов. 
Фактически функция "засыпает". Но если во время этого состояния возникнет попытка чтения значения pureComputed-функции, то ее значение автоматически обновляется, если значения 
зависимостей были изменены.</p></li>
<li><p>Состояние <span class="b">listening</span>. Если функция имеет подписчиков, она находится в состоянии listening. 
В этот состоянии функция отслеживает изменения зависимостей и при наличии изменений 
автоматически обновляет возвращаемое значение. В общем ведет себя подобно функции,создаваемой с помощью <code>ko.computed()</code></p></li>
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


<div class="nav"><p><a href="2.5.php">Назад</a><a href="./">Содержание</a><a href="2.7.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в KnockoutJS</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/knockout/1.1.php">Что такое KnockoutJS</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/1.2.php">Паттерн MVVM и синтаксис привязки</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Основы привязки</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.1.php">Наблюдаемые объекты</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.2.php">Формы привязки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.3.php">Привязка массивов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.4.php">Наблюдаемый массив. Операции с массивами</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.5.php">Обратные вызовы привязки foreach</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.6.php">Вычисляемые объекты. Функция ko.computed</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.7.php">Привязка if и ifnot</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.8.php">Контекст привязки и привязка with</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Работа с формами</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.1.php">Привязка value и textInput</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.2.php">Привязка checked</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.3.php">Привязка options</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.4.php">События форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.5.php">Событие click</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.6.php">Событие submit</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Взаимодействие с сервером</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/knockout/4.1.php">Сериализация объектов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/4.2.php">Отправка запроса и получение ответа</a></span></li>
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