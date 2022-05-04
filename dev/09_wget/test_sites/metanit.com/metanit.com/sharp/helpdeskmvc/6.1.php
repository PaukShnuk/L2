<!DOCTYPE html>
<html >
<head>
<title>Система подачи заявок. RequestController в HelpDesk</title>
<meta charset="utf-8" />
<meta name="description" content="Создание контроллера RequestController, который в приложении helpdesk на asp.net mvc управляет системой заявок, подача заявок">
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
<h1>Система подачи заявок. RequestController</h1>
<h2>Создание системы заявок</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Центральным объектом в системе helpdesk является заявка на обслуживание, сообщение о проблеме, что-то поломалось, что-то работает не так. 
При построении системы надо разграничить права и круг действий всех возможных ролей в системе. Итак, все группы пользователей у нас смогут создавать 
новые заявки. Далее все группы пользователей могут смотреть список своих заявок, а администратор может смотреть все заявки.</p>
<p>Кроме того, модератору добавляется функция распределять все новые заявки по исполнителям. А исполнители могут просматривать список назначенных 
заявок и изменять их статус - вплоть до самого завершения.</p>
<p>Итак, добавим контроллер <b>RequestController</b>, который у нас будет управлять системой заявок:</p>
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
	[Authorize]
    public class RequestController : Controller
    {
        HelpdeskContext db = new HelpdeskContext();
		public ActionResult Index()
        {
			return View();
		}
    }
}
</pre>
<p>Также используем атрибут <code>[Authorize]</code>, чтобы запретить неавторизированный доступ. Метод Index мы потом изменим - он у нас буде выводить 
все заявки для текущего пользователя. А пока настроим маршрутизацию, чтобы при обращении к приложению по умолчанию шло обращение к этому методу.</p>
<p>Перейдем в проекте в папку App_Start и откроем в ней файл <i>RouteConfig.cs</i>, который содержит определение маршрутов. Сейчас в нем есть 
класс <code>RouteConfig</code>, который выглядит следующим образом:</p>
<pre class="brush:c#;">
public class RouteConfig
{
    public static void RegisterRoutes(RouteCollection routes)
    {
        routes.IgnoreRoute("{resource}.axd/{*pathInfo}");

        routes.MapRoute(
            name: "Default",
            url: "{controller}/{action}/{id}",
            defaults: new { controller = "Home", action = "Index", id = UrlParameter.Optional }
        );
    }
}
</pre>
<p>Параметр <code>defaults</code> в методе <code>routes.MapRoute</code> указывает на маршрут по умолчанию. В данном случае по умолчанию 
приложение обращается к методу Index контроллера Home. Теперь изменим название контроллера на Request: 
<code>defaults: new { controller = "Request", action = "Index", id = UrlParameter.Optional }</code></p>
<p>Также необходимо, чтобы при удачном логине в методе Login контроллера Account также был предусмотрен редирект на метод Index контроллера 
RequestController, а не контроллера HomeController.</p>
<p>Теперь по умолчанию при логине пользователь сразу будет попадать на страницу со своим заявками.</p>

<h3>Добавление заявки</h3>
<p>Теперь добавим первую общую для всех групп функциональность - создание новой заявки. Итак, добавим в контроллер следующий метод Create:</p> 
<pre class="brush:c#;">
[HttpGet]
public ActionResult Create()
{
    // получаем текущего пользователя
    User user = db.Users.Where(m =&gt; m.Login == HttpContext.User.Identity.Name).FirstOrDefault();
    if (user != null)
    {
        // получаем набор кабинетов для департамента, в котором работает пользователь
        var cabs = from cab in db.Activs
                    where cab.DepartmentId == user.DepartmentId
                    select cab;
        ViewBag.Cabs = new SelectList(cabs, "Id", "CabNumber");

        ViewBag.Categories = new SelectList(db.Categories, "Id", "Name");

        return View();
    }
    return RedirectToAction("LogOff", "Account");
}

// Создание новой заявки
[HttpPost]
public ActionResult Create(Request request, HttpPostedFileBase error)
{
    // получаем текущего пользователя
    User user = db.Users.Where(m =&gt; m.Login == HttpContext.User.Identity.Name).FirstOrDefault();
    if(user==null)
    {
        return RedirectToAction("LogOff", "Account");
    }
    if (ModelState.IsValid)
    {
        // указываем статус Открыта у заявки
        request.Status = (int)RequestStatus.Open;
        //получаем время открытия
        DateTime current = DateTime.Now;

        //Создаем запись о жизненном цикле заявки
        Lifecycle newLifecycle = new Lifecycle() { Opened = current };
        request.Lifecycle = newLifecycle;

        //Добавляем жизненный цикл заявки
        db.Lifecycles.Add(newLifecycle);

        // указываем пользователя заявки
        request.UserId = user.Id;

        // если получен файл
        if (error != null)
        {
            // Получаем расширение
            string ext = error.FileName.Substring(error.FileName.LastIndexOf('.'));
            // сохраняем файл по определенному пути на сервере
            string path = current.ToString("dd/MM/yyyy H:mm:ss").Replace(":", "_").Replace("/", ".") + ext;
            error.SaveAs(Server.MapPath("~/Files/" + path));
            request.File = path;
        }
        //Добавляем заявку
        db.Requests.Add(request);
        db.SaveChanges();

        return RedirectToAction("Index");
    }
    return View(request);
}
</pre>
<p>В get-версии метода Create сначала получаем текущего пользователя через объект HttpContext.User.Identity. Если пользователь по какой-то причине 
не определен, делаем логаут. Если же определен, получаем кабинеты департамента пользователя, а также категории проблем и передаем из в представление через 
ViewBag.</p>
<p>В post-версии мы получаем два параметра: Request (сам объект заявки) и HttpPostedFileBase (данный объект у нас представляет переданный вместе с 
заявкой файл с ошибкой, например, какое-нибудь изображение).</p>
<p>В самом методе мы также получаем опять же текущего пользователя и его id устанавливаем у заявки. Устанавливаем ее статус, объект жизненного цикла и 
сохраняем переданный файл, если он, конечно же, был передан. При этом сохранение идет в папку Files, которая должна быть в проекте в приложения. 
Для этого мы можем добавить папку Files  в наш проект, а при развертывании приложения также не надо забывать, что финальное приложение также должно содержать 
данную папку. В этой папке будут храниться переданные файлы, и для каждого файла имя будет образовано от времени передачи. И после всех этих 
этапов заявка попадает в базу данных.</p>
<p>И создадим представление Create, которое будет выглядеть следующим образом:</p>
<pre class="brush:xml;">
@model HelpDeskTrain.Models.Request

@{
    ViewBag.Title = "Создать заявку";
}

&lt;h2&gt;Cоздать заявку&lt;/h2&gt;

@using (Html.BeginForm("Create", "Request", FormMethod.Post, new { enctype = "multipart/form-data" }))
{
    @Html.ValidationSummary(true)
    &lt;fieldset&gt;
        &lt;legend&gt;Новая заявка&lt;/legend&gt;
        &lt;div class="editor-label"&gt;
            @Html.LabelFor(model =&gt; model.Name)
        &lt;/div&gt;
        &lt;div class="editor-field"&gt;
            @Html.EditorFor(model =&gt; model.Name)
            @Html.ValidationMessageFor(model =&gt; model.Name)
        &lt;/div&gt;

        &lt;div class="editor-label"&gt;
            @Html.LabelFor(model =&gt; model.Description)
        &lt;/div&gt;
        &lt;div class="editor-field"&gt;
            @Html.EditorFor(model =&gt; model.Description)
            @Html.ValidationMessageFor(model =&gt; model.Description)
        &lt;/div&gt;

        &lt;div class="editor-label"&gt;
            @Html.LabelFor(model =&gt; model.Priority)
        &lt;/div&gt;
        &lt;div class="editor-field"&gt;
             @Html.DropDownListFor(model =&gt; model.Priority, new[] { new SelectListItem() { Text = "Низкий", Value = "1" }, 
        new SelectListItem() { Text = "Средний", Value = "2" }, new SelectListItem() { Text = "Высокий", Value = "3" }, 
        new SelectListItem() { Text = "Критичный", Value = "4" }})
            @Html.ValidationMessageFor(model =&gt; model.Priority)
        &lt;/div&gt;

        &lt;div class="editor-label"&gt;
            @Html.LabelFor(model =&gt; model.ActivId)
        &lt;/div&gt;
        &lt;div class="editor-field"&gt;
            @Html.DropDownListFor(model =&gt; model.ActivId, ViewBag.Cabs as SelectList)
            @Html.ValidationMessageFor(model =&gt; model.ActivId)
        &lt;/div&gt;

        &lt;div class="editor-label"&gt;
            @Html.LabelFor(model =&gt; model.CategoryId)
        &lt;/div&gt;
        &lt;div class="editor-field"&gt;
            @Html.DropDownListFor(model =&gt; model.CategoryId, ViewBag.Categories as SelectList)
            @Html.ValidationMessageFor(model =&gt; model.CategoryId)
        &lt;/div&gt;
        
        &lt;div class="editor-label"&gt;
            @Html.LabelFor(model =&gt; model.File)
        &lt;/div&gt;
        &lt;div class="editor-field"&gt;
           &lt;input type="file" id="error" name="error" /&gt;
        &lt;/div&gt;

        &lt;div class="editor-label"&gt;
            @Html.LabelFor(model =&gt; model.Comment)
        &lt;/div&gt;
        &lt;div class="editor-field"&gt;
            @Html.EditorFor(model =&gt; model.Comment)
            @Html.ValidationMessageFor(model =&gt; model.Comment)
        &lt;/div&gt;

        &lt;p&gt;
            &lt;input type="submit" value="Сохранить заявку" /&gt;
        &lt;/p&gt;
    &lt;/fieldset&gt;
}

@section Scripts {
    @Scripts.Render("~/bundles/jqueryval")
}
</pre>
<img src="pics/20.png" />
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


<div class="nav"><p><a href="5.3.php">Назад</a><a href="./">Содержание</a><a href="6.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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