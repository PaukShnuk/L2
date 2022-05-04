<!DOCTYPE html>
<html >
<head>
<title>Реляционные базы данных | Первая нормальная форма</title>
<meta charset="utf-8" />
<meta name="description" content="Первая нормальная форма реляционных баз данных, алгоритм ее применения">
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
<h2>Первая нормальная форма</h2><div class="date">Последнее обновление: 02.07.2017</div>

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

<p>Первая нормальная форма предполагает, что таблица не должна содержать повторяющихся столбцов или таких столбцов, которые 
содержат наборы значений. Ненормализованная таблица в этом случае может содержать одну или несколько повторяющихся групп данных. 
Повторяющаяся группа - это группа из одного или нескольких атрибутов таблицы, в которой возможно наличие нескольких значений для ключевого атрибута таблицы.</p>
<p>Итогом применения первой формы должно стать наличие для одного атрибута сущности только одного столбца в таблице, который при этом должен содержать скалярное значение.</p>

<p>Есть два похода к переходу к ненормализованной таблицы к первой нормальной форме. Первый способ называется выравниванием или flattaning. Он предполагает 
декомпозицию строки с повторяющимися группами данных, при котором для каждой повторяющейся группы создается своя строка. Полученная в результате 
таблица будет содержать атомарные значения для каждого из атрибутов. Хотя в то же время этот подход увеличит избыточность данных.</p>

<p>Второй подход предполагает, что один атрибут или группа атрибутов назначаются ключом ненормализованной таблицы, а затем повторяющиеся группы удаляются из таблицы 
и помещаются в отдельную таблицу вместе с копиями ключа из исходной таблицы.</p>
<p>Рассмотрим применение нормализации на примере. Пусть у нас есть система, которая описывается следующей информацией:</p>
<pre class="brush:js;">
Том посещает курс по математике, который преподает Смит. Дата записи 11/06/2017.
Сэм посещает курс по алгоритмам, которые преподает Адамс. Дата записи 12/06/2017.
Боб посещает курс по математике, который преподает Смит. Дата записи 13/06/2017.
Том посещает курс по языку JavaScript, который преподает Адамс. Дата записи 14/06/2017.
Сэм имеет два электронных адреса: sam@gmail.com и sam@hotmail.com.
В университете может быть только один курс с определенным именем. Один преподаватель может преподавать несколько курсов.
</pre>
<p>Вначале определим ненормализованную таблицу StudentCourses, которая содержит всю эту информацию:</p>
<img src="pics/4.png" alt="Нормализация базы данных" />
<!--<table class="btb">
<tr><td>StudentId</td><td>Name</td><td>Emails</td><td>Course1</td><td>Date1</td><td>TeacherId1</td><td>Teacher1</td><td>Course2</td><td>Date2</td><td>TeacherId2</td><td>Teacher2</td></tr>
<tr><td>1</td><td>Том</td><td></td><td>Математика</td><td>11/06/2017</td><td>1</td><td>Смит</td><td>JavaScript</td><td>14/06/2017</td><td>2</td><td>Адамс</td></tr>
<tr><td>2</td><td>Сэм</td><td>sam@gmail.com</br>sam@hotmail.com</td><td>Алгоритмы</td><td>12/06/2017</td><td>2</td><td>Адамс</td><td></td><td></td><td></td><td></td></tr>
<tr><td>3</td><td>Боб</td><td></td><td>Математика</td><td>13/06/2017</td><td>1</td><td>Смит</td><td></td><td></td><td></td><td></td></tr>
</table>-->
<p>Для каждого студента определен уникальный идентификатор StudentId, а также атрибут Name (имя), Emails (все электронные адреса), 
Course1 /Course2(курс), Date1/Date2 (дата поступления), Teacher1/Teacher2 (преподаватель). Также чтобы различать преподавателей (так как теоретически 
могут быть преподаватели с одной и той же фамилией), добавлен атрибут TeacherId1/TeacherId2. Для курсов такой идентификатор не требуется, так как в нашем случае название курса уникально.</p>
<p>Поскольку Том записан сразу на два курса, то несколько атрибутов пришлось дублировать. Но что будет, когда Том в стремлении получить никому не нужные сертификаты 
запишется еще на десяток курсов?</p>
<p>Эта таблица представляет прекрасный пример отклонения от первой нормальной формы. В первую очередь мы видим группу повторяющихся атрибутов, 
которые представляют данные по одному курсу: Course, Date, TeacherId, Teacher. Эти атрибуты представляют повторяющуюся группу, 
которую можно условно назвать StudentCourse.</p>
<p>StudentCourse = (Course, Date, TeacherId, Teacher)</p>
<p>Вторая проблема - атрибут Emails содержит набор электронных адресов. Фактически этот атрибут также образует повторяющуюся группу.</p>
<p>Для избавления от первой повторяющейся группы атрибутов применим первый подход: создадим для каждой повторяющейся группы отдельную строку.</p>
<table class="btb">
<tr><td>StudentId</td><td>Name</td><td>Emails</td><td>CourseId</td><td>Course</td><td>Date</td><td>TeacherId</td><td>Teacher</td></tr>
<tr><td>1</td><td>Том</td><td></td><td>1</td><td>Математика</td><td>11/06/2017</td><td>1</td><td>Смит</td></tr>
<tr><td>1</td><td>Том</td><td></td><td>2</td><td>JavaScript</td><td>14/06/2017</td><td>2</td><td>Адамс</td></tr>
<tr><td>2</td><td>Сэм</td><td>sam@gmail.com</br>sam@hotmail.com</td><td>3</td><td>Алгоритмы</td><td>12/06/2017</td><td>2</td><td>Адамс</td></tr>
<tr><td>3</td><td>Боб</td><td></td><td>1</td><td>Математика</td><td>13/06/2017</td><td>1</td><td>Смит</td></tr>
</table>
<p>В данном случае увеличилась избыточность данных, но тем не менее мы избавились от повторяющейся группы. Также следует отметить, 
что теперь атрибут StudentId не может использоваться в качестве первичного ключа. И в данном случае просматривается только один потенциальный ключ, который и будет использоваться 
в качестве первичного - это сразу два столбца StudentId и Course. Но название курса - не лучший ключ, если учитывать, что это название может редактироваться и изменяться. 
Поэтому для каждого курса добавлен еще один атрибут - CourseId - уникальной номер курса, который вместе с StudentId составляет первичный ключ. Хотя в принципе может было бы и оставить в качестве части первичного ключа имя курса с учетом, что оно уникально.</p>
<p>Для избавления от второй повторяющейся группы - атрибута Emails применим второй подход: вынесение этой группы с копией ключа в отдельную таблицу. Для этого определим таблицу Emails:</p>
<table class="btb">
<tr><td>Email</td><td>StudentId</td></tr>
<tr><td>sam@gmail.com</td><td>2</td></tr>
<tr><td>sam@hotmail.com</td><td>2</td></tr>
</table>
<p>Так как электронный адрес в принципе уникален, то его можно сделать первичным ключом.</p>
<p>Таким образом, таблицы Emails с таблицей StudentCourses будет связана связью один ко многим (один студент - много электронных адресов). 
И в этом случае таблица StudentCourses сократится следующим образом:</p>
<table class="btb">
<tr><td>StudentId</td><td>Name</td><td>CourseId</td><td>Course</td><td>Date</td><td>TeacherId</td><td>Teacher</td></tr>
<tr><td>1</td><td>Том</td><td>1</td><td>Математика</td><td>11/06/2017</td><td>1</td><td>Смит</td></tr>
<tr><td>1</td><td>Том</td><td>2</td><td>JavaScript</td><td>14/06/2017</td><td>2</td><td>Адамс</td></tr>
<tr><td>2</td><td>Сэм</td><td>3</td><td>Алгоритмы</td><td>12/06/2017</td><td>2</td><td>Адамс</td></tr>
<tr><td>3</td><td>Боб</td><td>1</td><td>Математика</td><td>13/06/2017</td><td>1</td><td>Смит</td></tr>
</table>
<p>Теперь у нас нет повторяющихся столбцов, но увеличилась избыточность данных, так как для студента Том определено уже две строки в таблице, и соответственно Id 
повторяется. Но тем не менее 1-я нормальная форма применена.</p>
<p>В принципе можно отметить, что если повторяющиеся группы содержат уникальные значения для каждой строки таблицы (как в случае с электронными адресами), 
то мы имеем дело с потенциальной связью один ко многим. Если же повторяющиеся группы содержат неуникальные значения, которые могут иметь разные строки таблицы 
(как в случае с атрибутами курсов), то это скрывается потенциальная связь многие ко многим.</p>
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


<div class="nav"><p><a href="2.1.php">Назад</a><a href="./">Содержание</a><a href="2.3.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Основы проектирования баз данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/tutorial/1.1.php">Создание базы данных и таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/tutorial/1.2.php">Ключи</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/tutorial/1.3.php">Внешние ключи и связи</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Нормализация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/tutorial/2.1.php">Функциональная зависимость</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/tutorial/2.2.php">Первая нормальная форма</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/tutorial/2.3.php">Вторая нормальная форма</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/tutorial/2.4.php">Третья нормальная форма</a></span></li>
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
	$("li:contains('Глава 2.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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