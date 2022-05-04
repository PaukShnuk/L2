<!DOCTYPE html>
<html >
<head>
<title>Фильтр авторизации</title>
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
<h2>Фильтр авторизации</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Фильтры авторизации отрабатывают до запуска остальных фильтров и вызова методов действий. Они реализуют интерфейс <code>IAuthorizationFilter</code>:</p>
<pre class="brush:c#;">
using System.Web.Mvc
{
    public interface IAuthorizationFilter
    {
        void OnAuthorization(AuthorizationContext filterContext);
    }
}
</pre>
<p>И если при получении запроса окажется, что к запрашиваемому действию контроллера применяется данный фильтр, то сначала срабатывает 
метод OnAuthorization данного интерфейса. И если фильтр одобрит запрос, то далее вызывается действие. Иначе действие не будет работать.</p>
<p>Для понимания работы фильтров авторизации рассмотрим стандартное приложение MVC по шаблону Internet Application, которое по 
умолчанию содержит всю логику авторизации и применение этого фильтра. В рамках данного раздела мы не будем подробно останавливаться на механизмах 
авторизации и аутентификации, лишь рассмотрим их в той мере, в какой они касаются фильтров авторизации.</p>
<p>Во-первых, откроем файл Web.config. Где-то в районе 22-23 строки вы увидите настройки аутентификации 
(Часто путают такие понятия как аутентификация и авторизация. Аутентификация представляет верификацию пользователя с помощью механизма 
ввода логина (имени пользователя/пароля и т.д.), а авторизация - это верификация тех действий, которые пользователь может совершать 
в отношении сайта. Обычно с авторизацией связывают систему разделения ролей.):</p>
<pre class="brush:xml;">
   &lt;authentication mode="Forms"&gt;
      &lt;forms loginUrl="~/Account/Login" timeout="2880" /&gt;
    &lt;/authentication&gt;
</pre>
<p>В данном случае указывается, что будет использоваться <strong>аутентификация форм</strong>. А в качестве пути, по которому можно произвести авторизацию на сайте, 
будет использоваться путь <span class="ii">/Account/Login</span> - то есть авторизовать вас или нет будет решать метод Login контроллера Account.</p>
<p>Атрибут <span class="bb">timeout</span> указывает время в минутах, которое пользователь может быть авторизован на сайте после успешной аутентификации.</p>
<p>Кроме аутентификации форм существует аутентификация Windows, однако ее можно использовать преимущественно в приложениях по шаблону Intranet 
Application, где для идентификации пользователей используются учетные записи Windows. Однако к Internet Application аутентификация Windows не применяется.</p>
<p>Также для аутентификации и авторизации нам необходима модель, с которой бы сопоставлялись учетные записи пользователей. В папке models вы 
можете увидеть файл AccountModels.cs, который по умолчанию содержит уже три модели - для регистрации (<b>RegisterModel</b>), 
логина (<b>LoginModel</b>) и смены пароля (<b>ChangePasswordModel</b>).</p>
<p>Весь процесс аутентификации выполняется контроллером <span class="bb">AccountController</span>, к которому применяется фильтр авторизации. Рассмотрим действие 
<span class="bb">Login</span>, которое и предназначено для аутентификации пользователя:</p>
<pre class="brush:c#;">
[AllowAnonymous]
public ActionResult Login(string returnUrl)
{
    ViewBag.ReturnUrl = returnUrl;
    return View();
}

//
// POST: /Account/Login

[HttpPost]
[AllowAnonymous]
[ValidateAntiForgeryToken]
public ActionResult Login(LoginModel model, string returnUrl)
{
    if (ModelState.IsValid && WebSecurity.Login(model.UserName, model.Password, persistCookie: model.RememberMe))
    {
                return RedirectToLocal(returnUrl);
    }

    // If we got this far, something failed, redisplay form
    ModelState.AddModelError("", "The user name or password provided is incorrect.");
    return View(model);
}
</pre>
<h3>Атрибут AllowAnonymous</h3>
<p>Во-первых, обратите внимание на атрибут <span class="bb">AllowAnonymous</span>, который установлен для большинства методов контроллера. Поскольку у нас к 
контроллеру применяется атрибут Authorize, то фреймворк сначала будет смотреть, есть ли у пользователя необходимые права для доступа к методу контроллера. 
Однако в этом случае мы попадаем в замкнутый круг - чтобы авторизоваться, надо обратиться к методу Login, но чтобы обратиться к этому методу, 
уже надо быть авторизованным. Поэтому применяется атрибут AllowAnonymous, который открывает публичный доступ к методу контроллера.</p>
<h3>Аутентификация</h3>
<p>Перейдем к POST-методу, где мы получаем введенные данные логина и пароля: первая часть конструкции <code>if (ModelState.IsValid</code> осуществляет валидацию полученной модели. 
А вторая часть конструкции - метод <code>WebSecurity.Login(model.UserName, model.Password, persistCookie: model.RememberMe)</code> получает логин и пароль пользователя и сравнивает 
их с теми пользователями, которые уже имеются. И если пользователь с такими данными существует, то пользователь аутентифицируется, и устанавливаются куки.</p>
<p>Если вы запустите приложение, вы можете зарегистрировать нового пользователя. И потом уже от его имени осуществлять вход на сайт.</p>
<img src="mvcpics/8.1.png" />
<p>Однако у нас пока по сути фильтр авторизации не применяется ни к чему, кроме контроллера AccountController. Поэтому откроем контроллер HomeController и 
к методу Index применим атрибут Authorize:</p>
<pre class="brush:c#;">
[Authorize]
public ActionResult Index()
{
	.............
}
</pre>
<p>В результате после запуска приложения мы попадем не на представление Index.cshtml, а на представление Login.cshtml. Так как фреймворк видит, 
что мы не аутентифицированы , и поэтому будет перенаправлять нас на метод Login контроллера Account, как определено в файле конфигурации проекта.</p>
<img src="mvcpics/8.2.png" />
<p>Лишь после удачного входа на сайт нам станет доступен ресурс Home/Index.</p>
<h3>Взаимодействие с БД</h3>
<p>Теперь еще один интересный вопрос - где это все сохраняется? Если вы посмотрите на файл конфигурации, то можете увидеть в секции 
<span class="bb">connectionStrings</span> настройки всех возможных подключений проекта к базам данных. По умолчанию создается подключение <span class="bb">DefaultConnection</span>. 
В моем случае оно выглядит так для проекта с названием <i>TestMvcApplication</i>, создаваемого в <u>Visual Studio 2012</u>:</p>
<pre class="brush:xml;">
&lt;connectionStrings&gt;
    &lt;add name="DefaultConnection" connectionString="Data Source=(LocalDb)\v11.0;Initial Catalog=aspnet-TestMvcApplication-20130423121813;Integrated Security=SSPI;
			AttachDBFilename=|DataDirectory|\aspnet-TestMvcApplication-20130423121813.mdf" providerName="System.Data.SqlClient" /&gt;
  &lt;/connectionStrings&gt;
</pre>
<p>Опреlеление строки подключения для <u>Visual Studio 2010</u> выглядело бы примерно так:</p>
<pre class="brush:xml;">
&lt;connectionStrings&gt;
    &lt;add name="DefaultConnection" providerName="System.Data.SqlClient" connectionString="Data Source=.\SQLEXPRESS;Initial Catalog=aspnet-Mvc4InternetApplication-20120828133008;Integrated Security=SSPI" /&gt;
  &lt;/connectionStrings&gt;
</pre>
<p>В Visual Studio 2012 при использовании шаблона Internet Application, содержащего инфраструктуру для работы с учетными записями, 
используется подход CodeFirst - то есть при первом обращении к моделям создается база данных в папке App_Data. Мы можем просмотреть 
БД, перейдя в окно Database Explorer (либо визуально мы модем увидеть ее в проводнике).</p>
<img src="mvcpics/8.7.1.png" />
<p>По имеющимся моделям в базе создается несколько таблиц, которые предназначены для хранения учетных данных, как пользователи, роли и т.д.</p>
<p>Таблица <span class="bb">UserProfile</span> содержит список пользователей, зарегистрированных для данного приложения.</p>
<img src="mvcpics/8.7.2.png" />
<p>Учетные данные для каждого пользователя, как например, пароль и другие, хранятся в таблице <span class="bb">webpages_Membership</span>, 
а таблица <span class="bb">webpages_Roles</span> содержит роли, определенные в системе. По умолчанию таблица не содержит каких-либо ролей, 
поэтому мы можем добавить их:</p>
<img src="mvcpics/8.7.3.png" />
<p>Затем поскольку непонятно, какой пользователь какую роль в системе выполняет, нам надо связать роли и пользователей. 
Для этого откроем таблицу <span class="bb">webpages_UsersInRoles</span> и сопоставим id пользователей с id ролей:</p>
<img src="mvcpics/8.7.4.png" />
<p>После этого мы можем использовать роли в приложении.</p>
<p>(В Visual Studio 2010 для определения и назначения ролей можно воспользоваться средством конфигурации ASP.NET Configuration, 
которое можно запустить, выбрав в меню Visual Studio пункт Project-&gt;ASP.NET Configuration)</p>
<h3>Использование ролей при авторизации</h3>
<p>Авторизация в mvc обладает большой гибкостью, так как мы можем настроить доступ к ресурсам сайта для отдельных пользователей или ролей. 
Для этого мы можем использовать два свойства атрибута AuthorizeAtribute:</p>
<ul>
	<li><p><span class="bb">Users</span> - содержит перечисление имен пользователей, которым разрешен вход</p></li>
	<li><p><span class="bb">Roles</span> - содержит перечисление имен ролей, которым разрешен вход</p></li>
</ul>
<p>Использование свойств Users и Roles:</p>
<pre class="brush:c#;">
[Authorize (Users="eugene, sergey")]
public ActionResult Index()
{
	.............
}
[Authorize (Roles="admin")]
public ActionResult Create()
{
	.............
}
[Authorize (Roles="admin, moderator", Users="eugene, sergey")]
public ActionResult Edit()
{
	.............
}
</pre>
<p>В случае если роли или пользователи не указаны, то доступ к методам контроллера имеет любой аутентифицированный пользователь.</p>
<h3>Создание собственного фильтра авторизации</h3>
<p>Выше мы посмотрели, как работает фильтр авторизации. Однако за кадром остались принципы работы данного фильтра. Для этого мы создадим свой фильтр.</p>
<p>В реальных приложениях не рекомендуется писать свой код или классы, которые призваны обеспечивать безопасность. Либо это должны делать 
высококвалифицированные разработчики. Поскольку нередко большинство взломов приходят от того, что программисты с малым опытом в данных вопросах 
создают не самый качественный код. Поэтому лучше полагаться на проверенные и протестированные стандартные реализации фреймворка MVC.</p>
<p>Наиболее простой и безопасный способ создания своего фильтра авторизации - это наследование класса от атрибута AuthorizeAtribute и переопределение 
метода AuthorizeCore:</p>
<pre class="brush:c#;">
using System;
using System.Web;
using System.Web.Mvc;

namespace Mvc4InternetApplication.Filters
{
    public class MyAuthorizedAttribute : AuthorizeAttribute
    {
        private string[] allowedUsers;
        private string[] allowedRoles;

        public MyAuthorizeAttribute(string[] users, string[] roles)
        {
            allowedUsers = users;
            allowedRoles = roles;
        }

        protected override bool AuthorizeCore(HttpContextBase httpContext)
        {
            return httpContext.Request.IsAuthenticated && 
                allowedUsers.Contains(httpContext.User.Identity.Name) && 
                Role(httpContext);
        }

        private bool Role(HttpContextBase httpContext)
        {
            if (allowedRoles.Length &gt; 0)
            {
                for (int i = 0; i &lt; allowedRoles.Length; i++)
                {
                    if (httpContext.User.IsInRole(allowedRoles[i]))
                        return true;
                }
                return false;
            }
            return true;
        }
    }
}
</pre>
<p>Массивы пользователей и ролей помогают провести детальную аутентификацию и авторизацию. 
(Хотя, как вы видели, у атрибута уже есть свойства Users и Roles.) С помощью объекта контекста HttpContextBase 
мы получаем все данные запроса и ответа, а также устанавливаем, является ли запрос аутентифицированным. Применение фильтра подобно применению 
стандартной версии:</p>
<pre class="brush:c#;">
[MyAuthorize (Roles="admin, moderator", Users="eugene, sergey")]
public ActionResult Edit()
{
	.............
}
</pre>
<p>Переопределение атрибута AuthorizeAtribute наиболее безопасный способ создания механизма авторизации, по сравнению, скажем, с реализацией в своем 
классе интерфейса IAuthorizationFilter. Поэтому в случаях, когда вам надо создать свой класс атрибута авторизации, рекомендуется именно этот способ.</p>
<p>Хотя в предыдущем примере переопределение по сути не имело смысла, однако все-таки может потребоваться реализация своего атрибута. 
Например, чтобы администраторам сервера сайта не приходилось каждый раз набирать пароль при входе на сайт, мы можем сделать следующую реализацию 
атрибута:</p>
<pre class="brush:c#;">
public class LocalAuthorizeAttribute : AuthorizeAttribute
{
    protected override bool AuthorizeCore(HttpContextBase httpContext)
    {
        return httpContext.Request.IsLocal || base.AuthorizeCore(httpContext);
    }
}
</pre>
<p>И также использовать роли и пользователей в приложении:</p>
<pre class="brush:c#;">
[LocalAuthorize (Roles="admin", Users="eugene, sergey")]
public ActionResult Edit()
{
	.............
}
</pre>
<p>Однако в этом случае заходить на сайт смогут не только указанные роли и пользователи, но и локальные пользователи для данной машины 
(что мы узнаем с помощью свойства <span class="bb">httpContext.Request.IsLocal</span>).</p>
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


<div class="nav"><p><a href="8.1.php">Назад</a><a href="./">Содержание</a><a href="8.3.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в ASP NET MVC</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/1.1.php">Особенности платформы ASP.NET MVC</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/1.2.php">Начало работы с ASP.NET MVC 4</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Создание первого приложения на ASP.NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.1.php">Создание проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.2.php">Создание контроллера и представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.3.php">Стилизация приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Контроллеры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.1.php">Основы контроллеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.2.php">Методы действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.3.php">Получение входных данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.4.php">Результаты действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.7.php">ViewResult</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.8.php">Переадресация и отправка кодов статуса и ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.9.php">Отправка файлов в ASP.NET MVC</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.5.php">HttpContext. Контекст запроса. Куки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.6.php">Асинхронные контроллеры и методы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Представления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.1.php">Введение в представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.2.php">Строго типизированные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.3.php">Движок представлений и Razor</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.4.php">Мастер-страницы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.5.php">Частичные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.6.php">HTML-хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.7.php">Работа с формами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.8.php">Строго типизированные хелперы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.1.php">Модели и БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.2.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.3.php">Шаблонные хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.4.php">Редактирование модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.9.php">Добавление и удаление модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.5.php">Шаблоны формирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.6.php">Модели со сложной структурой</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.8.php">Работа со сложными моделями</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.10.php">Модели со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.11.php">Работа с моделями со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.7.php">Передача данных в контроллер</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.2.php">Работа с маршрутами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.3.php">Создание ограничений для маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.4.php">Генерация исходящих адресов URL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.5.php">Области (Areas)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.6.php">Создание собственного обработчика маршрутов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Метаданные и валидация модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.1.php">Аннотации данных для отображения свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.2.php">Основы валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.3.php">Атрибуты валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.4.php">Валидация модели в контроллере</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.5.php">Отображение ошибок валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.6.php">Создание собственной логики валидации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Фильтры в ASP NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.1.php">Фильтры. Введение.</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.2.php">Фильтры авторизации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.3.php">Фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.4.php">Фильтры действий и результатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.5.php">Глобальные фильтры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.6.php">Дополнительные встроенные фильтры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Привязка модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.1.php">Введение в привязку моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.2.php">DefaultModelBinder</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.3.php">Явная привязка модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.4.php">Поставщики значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.5.php">Создание привязчика модели</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. jQuery и AJAX</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.1.php">Использование JavaScript/jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.2.php">Краткий обзор jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.3.php">Введение в AJAX</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.4.php">Ajax-Формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.5.php">Параметры объекта AjaxOptions</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.6.php">AJAX-ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.7.php">Формат JSON</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.8.php">AJAX-запросы с помощью jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.9.php">Работа с jQuery UI</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Авторизация и аутентификация в MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.1.php">Введение в авторизацию и аутентификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.2.php">Аутентификация Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.3.php">Аутентификация форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.4.php" >Авторизация в MVC 4 и SimpleMembershipProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.5.php" >Настройка использования SimpleMembershipProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.6.php" >Использование универсальных провайдеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.7.php" >Web Site Administration Tool</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.8.php" >Создание своих провайдеров членства и ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.9.php" >Переопределение провайдера членства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.10.php" >Переопределение провайдера ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.12.php" >Провайдер профилей и его переопределение</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.11.php" >OAuth-аутентификация</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Web API</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.1.php" >Введение в Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.2.php" >Создание и тестирование приложения Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.3.php" >Создание представления для Web API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Публикация приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.1.php" >Среда публикации и составные части приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.2.php" >Публикация на веб-сервере IIS</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.3.php" >Публикация на внешнем хостинге (на примере somee.com)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.4.php" >Добавление базы данных на хостинг somee.com</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.5.php" >Добавление файлов приложения на somee.com</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Мобильные приложения на ASP.NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.1.php" >Разработка мобильных приложений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.2.php" >Метатег Viewport</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.3.php" >Применение CSS в мобильных приложениях</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.4.php" >Создание мобильного приложения на ASP.NET MVC 4</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.5.php" >Режимы отображения DisplayMode</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Бандлы и минификация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/15.1.php" >Введение в бандлы и минификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/15.2.php" >Создание бандлов. Библиотеки из CDN</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Мультиязычный сайт и локализация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/16.1.php" >Введение в мультиязычные сайты. Ресурсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/16.2.php" >Логика мультиязычного сайта. Фильтр локализации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Работа с SignalR</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.1.php" >Введение в SignalR</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.2.php" >Первое приложение с SignalR</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.3.php" >Persistent Connection API</a></span></li>
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
	
	$("li:contains('Глава 8.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 8.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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