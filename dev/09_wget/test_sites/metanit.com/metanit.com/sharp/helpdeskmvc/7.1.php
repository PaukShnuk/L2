<!DOCTYPE html>
<html >
<head>
<title>Мастер-страницы в HelpDesk</title>
<meta charset="utf-8" />
<meta name="description" content="Создание мастер-страницы для приложения helpdesk на asp.net mvc, создания выпадающего меню и его стилизация">
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
<h1>Мастер-страницы</h1>
<h2>Создание мастер-страницы и выпадающее меню</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Сейчас у нас различные группы пользователей могу обращаться к различным контроллерам и их действиям. Но обращаться, как сейчас, из адресной строки браузера, 
вбивая там адрес, навреное, не очень удобно, и хотелось бы какое-нибудь меню. И это меню бы содержала ссылки на все доступные для данной группы разделы.</p>
<p>При создании меню следует учитывать, что нам надо создать фактически четыре разных меню (для каждой группы пользователей) и в зависимости от роли 
пользователя вывести нужное меню на страницу.</p>
<p>Итак, перейдем к нашей мастер-странице <i>_Layout.chtml</i> и изменим стандартный код на следующий:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;@ViewBag.Title&lt;/title&gt;
    @Styles.Render("~/Content/css")
    @Scripts.Render("~/bundles/modernizr")
    
&lt;/head&gt;
&lt;body&gt;
    &lt;!-- В зависимости от роли пользователя устанавливаем определенное меню --&gt;
    @if (ViewContext.HttpContext.User.IsInRole("Администратор"))
    {
        &lt;h2&gt;Меню администратора: вы вошли как superadmin&lt;/h2&gt;
            &lt;div class="menu"&gt;
                &lt;ul&gt;
                    &lt;li&gt;&lt;a class="hide"&gt;Справочники&lt;/a&gt;
                        &lt;ul class="submenu"&gt;
                            &lt;li&gt;@Html.ActionLink("Отделы", "Departments", "Service")&lt;/li&gt;
                            &lt;li&gt;@Html.ActionLink("Активы", "Activ", "Service")&lt;/li&gt;
                            &lt;li&gt;@Html.ActionLink("Категории", "Categories", "Service")&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="hide"&gt;Заявки&lt;/a&gt;
                        &lt;ul class="submenu"&gt;
                            &lt;li&gt;@Html.ActionLink("Мои заявки", "Index", "Request")&lt;/li&gt;
                            &lt;li&gt;@Html.ActionLink("Все заявки", "RequestList", "Request")&lt;/li&gt;
                            &lt;li&gt;@Html.ActionLink("Новая", "Create", "Request")&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a class="hide"&gt;Пользователи&lt;/a&gt;
                        &lt;ul class="submenu"&gt;
                            &lt;li&gt;@Html.ActionLink("Добавление", "Create", "User")&lt;/li&gt;
                            &lt;li&gt;@Html.ActionLink("Просмотр", "Index", "User")&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;
                    &lt;li&gt;@Html.ActionLink("Выйти", "LogOff", "Account")&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt; 
    }
    else if (ViewContext.HttpContext.User.IsInRole("Модератор"))
    { 
        &lt;h2&gt;Меню диспетчера&lt;/h2&gt;
             &lt;div class="menu"&gt;
                &lt;ul&gt;
                    &lt;li&gt;&lt;a class="hide"&gt;Заявки&lt;/a&gt;
                        &lt;ul class="submenu"&gt;
                            &lt;li&gt;@Html.ActionLink("Мои заявки", "Index", "Request")&lt;/li&gt;
                            &lt;li&gt;@Html.ActionLink("Распределить", "Distribute", "Request")&lt;/li&gt;
                            &lt;li&gt;@Html.ActionLink("Новая", "Create", "Request")&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;
                    &lt;li&gt;@Html.ActionLink("Пользователи", "Index", "User")&lt;/li&gt;
                    &lt;li&gt;@Html.ActionLink("Выйти", "LogOff", "Account")&lt;/li&gt;
                &lt;/ul&gt;
         &lt;/div&gt;
    }
    else if (ViewContext.HttpContext.User.IsInRole("Исполнитель"))
    {
        &lt;h2&gt;Меню исполнителя&lt;/h2&gt;
             &lt;div class="menu"&gt;
                &lt;ul&gt;
                    &lt;li&gt;&lt;a class="hide"&gt;Заявки&lt;/a&gt;
                        &lt;ul class="submenu"&gt;
                            &lt;li&gt;@Html.ActionLink("Мои заявки", "Index", "Request")&lt;/li&gt;
                            &lt;li&gt;@Html.ActionLink("Изменить статус", "ChangeStatus", "Request")&lt;/li&gt;
                            &lt;li&gt;@Html.ActionLink("Новая", "Create", "Request")&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;
                    &lt;li&gt;@Html.ActionLink("Пользователи", "Index", "User")&lt;/li&gt;
                    &lt;li&gt;@Html.ActionLink("Выйти", "LogOff", "Account")&lt;/li&gt;
                &lt;/ul&gt;
         &lt;/div&gt;
    }
    else if (ViewContext.HttpContext.User.IsInRole("Пользователь"))
    {
        &lt;h2&gt;Приветствую, @ViewContext.HttpContext.User.Identity.Name&lt;/h2&gt;
            &lt;div class="menu"&gt;
                &lt;ul&gt;
                    &lt;li&gt;@Html.ActionLink("Подать заявку", "Create", "Request")&lt;/li&gt;
                    &lt;li&gt;@Html.ActionLink("Мои заявки", "Index", "Request")&lt;/li&gt;
                    &lt;li&gt;@Html.ActionLink("Выйти", "LogOff", "Account")&lt;/li&gt;
                &lt;/ul&gt;
         &lt;/div&gt;
    }

    @RenderBody()

    @Scripts.Render("~/bundles/jquery")
    @RenderSection("scripts", required: false)
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Как и в контроллере, в представлении мы можем получить контекст запроса через объект <b>ViewContext</b> и затем через него проверить принадлежность 
пользователя определенной роли: <code>ViewContext.HttpContext.User.IsInRole("Администратор")</code>. И если эта принадлежность имеет место, 
то выводим в представлении соответствующее меню.</p>
<p>Ну и в конце нам надо как-то стилизовать меню. Добавим в файл <i>Site.css</i> следующие нехитрые определения стилей:</p>
<pre class="brush:xml;">
/* Меню */
.menu {
    font-family: Arial, Sans-Serif; 
    width:99%; 
    height:50px; 
    position:relative;
    z-index:100;
}
.menu ul li a, .menu ul li a:visited {
    display:block; 
    text-decoration:none;
    width:104px; 
    max-height:100px; 
    text-align:center; 
    color:#fff; 
    border:1px solid #fff; 
    background:silver; 
    line-height:30px; 
    font-size:13px; 
    overflow:hidden; 
    vertical-align: middle;
}
.menu ul {
    padding:0; 
    margin:0; 
    list-style: none;
}
.menu ul li {
    float:left; 
    position:relative;
    vertical-align: middle;
}
.menu ul li ul {
    display: none;
    opacity:0.8;
}

.menu ul li:hover a {
    color:#fff; 
    background:grey;
}
.menu ul li:hover ul {
    display:block; 
    position:absolute; 
    top:25px; 
    left:0;
    width:105px;
}
.menu ul li:hover ul li a.hide {
    background:#6a3; 
    color:#fff;
}
.menu ul li:hover ul li:hover a.hide {
    background:grey; 
    color:#000;
}
.menu ul li:hover ul li ul {
    display: none;
}
.menu ul li:hover ul li a {
    display:block; 
    background:#ddd; 
    color:#000;
}
.menu ul li:hover ul li a:hover {
    background:grey; 
    color:#000;
}
.menu ul li:hover ul li:hover ul {
    display:block; 
    position:absolute; 
    left:105px; 
    top:0;
}
.menu ul li:hover ul li:hover ul.left {
    left:-105px;
}
</pre>
<p>В итоге у нас получится следующее меню:</p>
<img src="pics/25.png" />
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


<div class="nav"><p><a href="6.7.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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