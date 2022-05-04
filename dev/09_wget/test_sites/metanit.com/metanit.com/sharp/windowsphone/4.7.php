<!DOCTYPE html>
<html >
<head>
<title>DatePicker и TimePicker в Windows Phone 8.1</title>
<meta charset="utf-8" />
<meta name="description" content="">
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
<h2>DatePicker и TimePicker</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<h3>DatePicker</h3>
<p>Для работы с датами используется элемент DatePicker:</p>
<pre class="brush:xml;">
&lt;DatePicker x:Name="datepicker1" Header="Выбрать дату" /&gt;
</pre>
<p>По умолчанию он использует англосаксонскую культуру и английский язык для отображения даты. Чтобы локализовать его представление, 
надо в файле манифеста приложения <i>Package.appxmanifest</i> изменить культуру на необходимую для приложения. Например, изменим на русскоязычную:</p>
<img src="pics/4.23.png" />
<p>Рядом с полем установки культуры по ссылке <i>More information</i> можно найти все возможные языковые установки для других культур.</p>
<p>При запуске приложения вначале отобразится текстовое поле, в котором будет отображаться по умолчанию текущая дата:</p>
<img src="pics/4.15.png" alt="DatePicker in Windows Phone 8.1" />
<p>Если мы нажмем на это поле, то нам будет предложено выбрать дату в трех выпадающих списках для месяца, дня и года:</p>
<img src="pics/4.16.png" />
<p>Мы можем настроить отображение отдельных столбцов. Например:</p>
<pre class="brush:xml;">
&lt;DatePicker x:Name="datepicker1" DayFormat="{}{day.integer} ({dayofweek.abbreviated})" MonthFormat="{}{month.full}" YearVisible="False" /&gt;
</pre>
<p>Свойства <span class="bb">DayFormat</span>, <span class="bb">MonthFormat</span> и <span class="bb">YearFormat</span> устанавливают формат отображения 
даты для дня, месяца, года соответственно. Мы можем скрыть одну из частей даты, например, установка свойства <code>YearVisible="False"</code> скрывает год, 
и нам будут доступны для выбора только день и месяц.</p>
<p>С помощью свойств <span class="bb">MaxYear/MinYear</span> мы можем ограничить диапазон выбираемых годов.</p>
<p>В то же время у элемента отсутствует возможность выбора формата всей даты в целом. Кроме того, ограничены возможности по локализации.</p>
<p>Для локализации для определенных календарей предназначено свойство <span class="bb">CalendarIdentifier</span>, которое может принимать следующие значения:</p>
<ul>
<li><p><code>GregorianCalendar</code>: григорианский календарь (по умолчанию)</p></li>
<li><p><code>HebrewCalendar</code>: еврейский календарь</p></li>
<li><p><code>HijriCalendar</code>: исламский календарь</p></li>
<li><p><code>JapaneseCalendar</code>: японский календарь</p></li>
<li><p><code>JulianCalendar</code>: юлианский календарь</p></li>
<li><p><code>KoreanCalendar</code>: корейский календарь</p></li>
<li><p><code>TaiwanCalendar</code>: тайваньский календарь</p></li>
<li><p><code>ThaiCalendar</code>: тайский календарь</p></li>
<li><p><code>UmAlQuraCalendar</code>: арабский календарь Ум Аль Кура</p></li>
</ul>
<p>Например, использование последнего календаря (<code>&lt;DatePicker CalendarIdentifier="UmAlQuraCalendar" /&gt;</code>) будет выглядеть следующим образом:</p>
<img src="pics/4.17.png" />
<p>Получить или установить выбранную дату в коде c# можно с помощью свойства <code>Date</code>:</p>
<pre class="brush:c#;">DateTime date = datepicker1.Date.Date;</pre>
<p>Так как свойство <code>datepicker1.Date</code> представляет тип <code>DateTimeOffset</code>, поэтому, чтобы получить из него объект DateTime, надо использовать вложенное свойство Date.</p>
<h3>TimePicker</h3>
<p>TimePicker представляет элемент для выбора времени:</p>
<pre class="brush:xml;">&lt;TimePicker x:Name="timerTick1" ClockIdentifier="24HourClock" /&gt;</pre>
<p>Свойство <span class="bb">ClockIdentifier</span> позволяет задать 12-часовой (значение <code>12HourClock</code>) или 24-часовой 
(значение <code>24HourClock</code>) формат времени.</p>
<p>Элемент отображает время в виде строки:</p>
<img src="pics/4.18.png" alt="TimePicker in Windows Phone 8.1" />
<p>По нажатию на это поле появляются возможности выбора времени:</p>
<img src="pics/4.19.png" />
<p>Получить (или установить) выбранное время в коде C# мы можем с помощью свойства <code>Time</code>:</p>
<pre class="brush:c#;">TimeSpan time = tickBox1.Time</pre>
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


<div class="nav"><p><a href="4.6.php">Назад</a><a href="./">Содержание</a><a href="4.8.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в разработку для Windows Phone 8.1</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/1.1.php">Установка и регистрация средств разработки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/1.2.php">Создание первого приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. XAML в Windows Phone 8.1</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/2.1.php">Основы языка XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/2.2.php">Файлы отделенного кода</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Компоновка и позиционирование элементов</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/3.1.php">Контейнер Grid</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/3.2.php">StackPanel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/3.3.php">Canvas</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.1.php">Свойства элементов управления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.2.php">Кнопки и текстовые поля</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.3.php">CheckBox и RadioButton</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.4.php">Всплывающие окна</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.5.php">ComboBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.6.php">ListBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.7.php">DatePicker и TimePicker</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.8.php">Slider и Progressbar</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.9.php">Flyout</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Ресурсы и стили</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/5.1.php">Ресурсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/5.2.php">Стили</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Приложение и его жизненный цикл</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/6.1.php">Роль класса App и жизненный цикл приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/6.2.php">Работа с жизненным циклом. Практика</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/6.3.php">Восстановление данных сессии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/6.4.php">Файл Package.appxmanifest</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Навигация в приложении</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/7.1.php">Введение в навигацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/7.2.php">Создание навигации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Привязка и контекст данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/8.1.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/8.2.php">Интерфейс INotifyPropertyChanged</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Шаблон WebView App</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/9.1.php">Описание шаблона</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/9.2.php">Изменение шаблона WebView App</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Шаблон Hub App</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/10.1.php">Описание шаблона</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/10.2.php">Приложение на основе шаблона Hub App</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder"><a href="//metanit.com/sharp/windowsphone/11.1.php">Глава 11. Сохранение данных</a></span></li>
	<li class="closed"><span class="folder"><a href="//metanit.com/sharp/windowsphone/12.1.php">Глава 12. Геолокация</a></span></li>
	<li class="closed"><span class="folder"><a href="//metanit.com/sharp/windowsphone/13.1.php">Глава 13. Локализация приложений</a></span></li>
	<li class="closed"><span class="folder">Глава 14. SQLite в Windows Phone 8.1</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/14.1.php">Работа с SQLite. Часть 1</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/14.2.php">Работа с SQLite. Часть 2</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/14.3.php">Работа с существующей БД SQLite</a></span></li>
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