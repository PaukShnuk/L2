<!DOCTYPE html>
<html >
<head>
<title>Создание справочников. ServiceController в HelpDesk</title>
<meta charset="utf-8" />
<meta name="description" content="Добавление в приложение HelpDesk на asp.net mvc справочников, которые содержат вспомогательную информацию">
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
<h1>Создание справочников. ServiceController</h1>
<h2>Создание справочников</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Кроме модели User, которая имеет дело с пользователями, у нас есть ряд дополнительных моделей, которые играют некую вспомогательную роль, 
описывают некоторую дополнительную информацию. Например, модель Category описывает категорию проблемы, модель Department описывает отдел, в котором 
работает человек. Эти модели не являются центральными для системы, в отличие от классов User или Request, однако все равно нужны нам для описания 
полной информации об объектах.</p>
<p>Вся подобная информация будет организована в виде справочников, которые будет заполнять администратор и которые будут доступны только ему.</p>
<p>Начнем с создания справочника для отделов. Добавим в проект новый контроллер <b>ServiceController</b>. Удалим из него автоматически сгенерированный 
метод Index. Он нам не нужен. И добавим методы для управления отделами (то есть моделью Department):</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Data.Entity;
using System.Web;
using System.Web.Mvc;
using HelpDeskTrain.Models;

namespace HelpDeskTrain.Controllers
{
	[Authorize (Roles="Администратор")]
    public class ServiceController : Controller
    {
        HelpdeskContext db = new HelpdeskContext();
        
        [HttpGet]
        public ActionResult Departments()
        {
            ViewBag.Departments=db.Departments;
            return View();
        }

        //Добавление отдела с последующим их отображением
        [HttpPost]
        public ActionResult Departments(Department depo)
        {
            if (ModelState.IsValid)
            {
                db.Departments.Add(depo);
                db.SaveChanges();
            }
            ViewBag.Departments = db.Departments;
            return View(depo);
        }
        // Удаление отдела по id
        public ActionResult DeleteDepartment(int id)
        {
            Department depo = db.Departments.Find(id);
            db.Departments.Remove(depo);
            db.SaveChanges();
            return RedirectToAction("Departments");
        }
    }
}
</pre>
<p>Во-первых, так как данный контроллер будет виден только администратору, то мы используем атрибут <code>[Authorize (Roles="Администратор")]</code>.</p>
<p>Поскольку в предполагаемой задаче нам надо на одном представлении и выводить все отделы,  в то же время на этом же представлении 
должна быть форма для создания нового объекта Department, то у нас тут есть два способа. Первый способ заключается в типизации представления моделью 
<code>IEnumerable&lt;Department&gt;</code>, так как из контроллера в представление передаем список отделов в качестве модели, а из представления на контроллер мы тогда посылаем значение string для названия отдела и в контроллере проверяем корректность 
этого значения. Второй способ состоит в том, что мы типизируем представление моделью <code>Department</code> и ее передаем в post-метод для создания 
нового объекта, а сам список для вывода из контроллера в представление передаем через ViewBag. Воспользуемся вторым способом.</p>
<p>Здесь простые действия на просмотр списка отделов, их добавление и удаление. При желание можно еще добавить редактирование. Теперь добавим 
для действия Departments представление <i>Departments.cshtml</i>:</p>
<pre class="brush:xml;">
@model Department
@using HelpDeskTrain.Models
@{
    ViewBag.Title = "Отделы";
}
&lt;h2&gt;Отделы&lt;/h2&gt;
@using (Html.BeginForm())
{
    @Html.ValidationSummary(true)
    &lt;fieldset&gt;
        &lt;legend&gt;Новый отдел&lt;/legend&gt;
        &lt;div class="editor-label"&gt;
            @Html.LabelFor(model =&gt; model.Name)
        &lt;/div&gt;
        &lt;div class="editor-field"&gt;
            @Html.EditorFor(model =&gt; model.Name)
            @Html.ValidationMessageFor(model =&gt; model.Name)
        &lt;/div&gt;

        &lt;p&gt;&lt;input type="submit" value="Учесть" /&gt;&lt;/p&gt;
    &lt;/fieldset&gt;
}
&lt;table&gt;
@foreach (Department item in ViewBag.Departments)
{
    &lt;tr&gt;
        &lt;td&gt;@item.Id&lt;/td&gt;
        &lt;td&gt;@item.Name&lt;/td&gt;
        &lt;td&gt;@Html.ActionLink("Удалить", "DeleteDepartment", new { id=item.Id })&lt;/td&gt;
    &lt;/tr&gt;
}
&lt;/table&gt;
</pre>
<img src="pics/16.png" />
<br>
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


<div class="nav"><p><a href="4.4.php">Назад</a><a href="./">Содержание</a><a href="5.2.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Создание приложения на mvc 4</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/1.1.php">Введение</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Выделение сущностей и создание БД</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/2.1.php">Выделение сущностей</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/2.2.php">Создание БД и контекста данных</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Создание системы авторизации</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/3.1.php">Создание провайдера ролей</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/3.2.php">Создание контроллера AccountController</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Управление пользователями. UserController</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/4.1.php">Создание контроллера UserContoller</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/4.2.php">Создание пользователей</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/4.3.php">Редактирование и удаление пользователей</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/4.4.php">Фильтрация пользователей</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Создание справочников. ServiceController</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/5.1.php">Создание справочников</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/5.2.php">Создание активов</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/5.3.php">Создание категорий заявок</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 6. Система подачи заявок. RequestController</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.1.php">Создание системы заявок</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.2.php">Просмотр заявок</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.3.php">Создание всплывающих окон</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.4.php">Удаление заявок и загрузка файлов</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.5.php">Просмотр админом всех заявок</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.6.php">Модерирование заявок модератором</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.7.php">Работа исполнителей</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Мастер-страницы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/7.1.php">Создание мастер-страницы и выпадающее меню</a></span></li>
					</ul>
				</li>
	</ul>	</div>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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