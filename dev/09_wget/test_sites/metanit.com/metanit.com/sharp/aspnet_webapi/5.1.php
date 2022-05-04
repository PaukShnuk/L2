<!DOCTYPE html>
<html >
<head>
<title>Аутентификация и авторизация в ASP.NET Web API</title>
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
<h1>Аутентификация и авторизация</h1>
<div class="date">Последнее обновление: 29.10.2015</div>

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

<h3>Введение в аутентификацию и авторизацию</h3>
<p>Аутентификация и авторизация в Web API имеет некоторые особенности в отличие от ASP.NET MVC. Здесь фактически нам доступны три вида аутентификации: 
стандартная через куки, через внешние сервисы и аутентификация с помощью токена.</p>
<p>В то же время Web API и ASP.NET MVC имеют ряд общих моментов.</p>
<p>Так, для ограничения доступа можно применять встроенную реализацию атрибута авторизации - AuthorizeAttribute, который находится в пространстве имен 
System.Web.Http. Он одновременно проверяет, аутентифицирован ли пользователь в системе, и также проверяет права пользователя на доступ к данному 
ресурсу (если данный ресурс подразумевает доступ только для определенных ролей иили пользователей). Если пользователь неаутентифицирован, то система посылает в ответ клиенту статусный код 401 (Unauthorized).</p>
<p>В Web API при аутентификации пользователя на сервере создается объект <span class="bb">IPrincipal</span>:</p>
<pre class="brush:c#;">
public interface IPrincipal
{
    IIdentity Identity { get; }
	bool IsInRole(string role);
}
</pre>
<p>Свойство Identity хранит информацию о клиенте:</p>
<pre class="brush:c#;">
public interface IIdentity
{
    // Тип аутентификации
    string AuthenticationType { get; }
    // атунтифицирован ли пользователь
    bool IsAuthenticated { get; }
    //Имя текущего пользователя 
	string Name { get; }
}
</pre>
<P>Данный объект IPrincipal затем прикрепляется сервером к текущему потоку обработки запроса с помощью установки свойства 
<span class="bb">Thread.CurrentPrincipal</span>. При успешной аутентификации пользователя у объекта IPrincipal устанавливается свойство <code>Identity.IsAuthenticated</code> равным <code>true</code>.</p>

<h2>Авторизация на основе токенов</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p>
<p>Авторизация на основе токенов состоит из нескольких компонентов:</p>
<ul>
<li><p>Клиент, который обращается к веб-сервису. Может представлять собой веб-браузер, мобильное приложение, десктопное приложение</p></li>
<li><p>Веб-сервис, к ресурсу которого обращается клиент</p></li>
<li><p>Токен доступа (access token), наличие которого дает доступ к ресурсам веб-сервиса</p></li>
<li><p>Bearer-токен - специальный вид токена доступа</p></li>
<li><p>Сервер авторизации, который выдает токены доступа клиенту</p></li>
</ul>
<p>Весь процес аутентификации выглядит следующим образом:</p>
<img src="pics/accesstoken.png" alt="Получение токена доступа в Oath2" />
<ol>
<li><p>Пользователь вводит данные авторизации (логин, пароль) и нажимает на кнопку отправки</p></li>
<li><p>Клиент (веб-браузер) отправляет данные серверу авторизации</p></li>
<li><p>Сервер авторизации аутентифицирует пользователя и возвращает токен доступа</p></li>
<li><p>Для доступа к ресурсу веб-сервиса клиент добавляет в запрос ранее полученный токен доступа</p></li>
</ol>
<p>Хотя выше сервер авторизации и веб-сервис, но в реальности они могут быть объединены, как это и происходит в приложении Web API:</p>
<img src="pics/accesstoken2.png" alt="Получение токена доступа в ASP.NET Web API" />
<p>Web API применяет спецификацию Oath2, которая описывает механизм аутентификации на основе токенов. Конкретную реализацию этой спецификации 
представляют компоненты OWIN, благодаря которым и производит генерация токенов, их выдача клиенту и их дальнейшая валидация. 
Поэтому при создании приложения Web API нам не надо самим реализовывать сервер авторизации, все эти детали, а досточно взять готовый механизм, 
который предоставляет ASP.NET</p>
<p>Посмотрим на примере, что представляет собой аутентификация токенов. Для этого создадим новый проект Web API с типом аутентификации <span class="bb">Individual User Accounts</span>:</p>
<img src="pics/accesstoken4.png" alt="Аутентификация в ASP.NET Web API" />
<p>Какие узловые моменты этого проекта?</p>
<ul>
<li><p><span class="bb">AccountController</span>: контроллер, который содержит ряд методов и функциональностей для управления учетными записями (регистрация, вход на сайт и т.д.)</p></li>
<li><p><span class="bb">IdentityModels.cs</span>: файл содержит определение модели пользователей ApplicationUser и контекста данных</p></li>
<li><p><span class="bb">IdentityConfig.cs</span>: содержит определение класса <span class="bb">ApplicationUserManager</span>, который используется для управления пользователями</p></li>
<li><p><span class="bb">ApplicationOAuthProvider</span>: провайдер авторизации, который обеспечивает связь с компонентами OWIN. Он содержит два метода, один 
из которых - <span class="bb">GrantResourceOwnerCredentials()</span> как раз используется для генерации токена</p></li>
<li><p><span class="bb">Startup.Auth.cs</span>: содержит настройки инфраструктуры OWIN</p>
<p>Непосредственно к использованию токенов относится следующая часть файла:</p>
<pre class="brush:c#;">
PublicClientId = "self";

OAuthOptions = new OAuthAuthorizationServerOptions
{
	// устанавливает URL, по которому клиент будет получать токен
    TokenEndpointPath = new PathString("/Token"),
	// указывает на вышеопределенный провайдер авторизации
    Provider = new ApplicationOAuthProvider(PublicClientId),
    AuthorizeEndpointPath = new PathString("/api/Account/ExternalLogin"),
    AccessTokenExpireTimeSpan = TimeSpan.FromDays(14),
    AllowInsecureHttp = true
};
// включает в приложении функциональность токенов
app.UseOAuthBearerTokens(OAuthOptions);
</pre>
<p>Параметр <code>TokenEndpointPath</code> указывает на маршрут для получения токена</p>
<p>Параметр <code>Provider</code> указывает на провайдер авторизации</p>
<p>Параметр <code>AuthorizeEndpointPath</code> указывает на маршрут, по которому будет перенаправляться пользователь для авторизации. Должен начинаться со слеша.</p>
</li>
<li><p><span class="bb">WebApiConfig.cs</span>. В методе <code>Register</code> происходит настройка  аутентификации Web API, чтобы она 
использовала только аутентификацию токенов:</p>
<pre class="brush:c#;">
config.SuppressDefaultHostAuthentication();
config.Filters.Add(new HostAuthenticationFilter(OAuthDefaults.AuthenticationType));
</pre>
<p>Класс <code>HostAuthenticationFilter</code> подключает аутентификацию токенов, а метод <code>SuppressDefaultHostAuthentication()</code> 
указывает Web API игнорировать любую аутентификацию, которая происходит до того, как обработка запроса достигнет конвейера Web API. Это позволяет отключить 
атуентификацию на основе кук, и тем самым защитить приложение от CSRF-атак.</p>
</li>
</ul>
<p>Теперь разберем два момента: получение и валидацию токена. Если требуется получить токен:</p>
<ol>
<li><p>Клиент обращается к ресурсу <i>/Token</i> для получения токена</p></li>
<li><p>Если в пришедшем запросе есть заголовок "grant_type" и он имеет значение "password", то система вызывает метод <code>GrantResourceOwnerCredentials()</code> у провайдера авторизации ApplicationOAuthProvider</p></li>
<li><p>Провайдер авторизации обращается к классу ApplicationUserManager для валидации поступивших данных (логина и пароля) и по ним создает объект claims identity</p></li>
<li><p>Если валидация прошла успешно, то провайдер авторизации создает аутентификационный тикет, который применяется для генерации токена</p></li>
</ol>
<p>Если клиент обращается к защищенному атрибутом Authorize ресурсу с имеющимся токеном:</p>
<ol>
<li><p>Фильтр HostAuthentication обращается к компонентам OAuth для валидации токена</p></li>
<li><p>Компоненты OAuth пытаются восстановить по токену объект claims identity</p></li>
<li><p>Затем фильтр авторизации смотрит, имеет ли права доступа пользователь, который представлен восстановленным объектом claims identity</p></li>
<li><p>Если все прошло успешно, пользователь получает доступ к ресурсу, иначе ему отправляется статусный код 401 (Unauthorized)</p></li>
</ol>
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


<div class="nav"><p><a href="4.5.php">Назад</a><a href="./">Содержание</a><a href="5.2.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Web API 2 в ASP.NET</span>
<ul>
	<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/1.1.php">Введение в Web API 2</a></span></li>
	<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/1.2.php">Создание приложения Web API</a></span></li>
	<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/1.3.php">Создание представления для Web API</a></span></li>
	<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/1.4.php">Основные пространства имен и конфигурация Web API</a></span></li>
	<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/1.5.php">Конвейер в ASP.NET Web API</a></span></li>
</ul>
</li>
	<li class="closed"><span class="folder">Глава 2. Контроллеры и обработка запросов</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.1.php">Введение в контроллеры Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.2.php">Обработка запроса контроллером</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.3.php">Результаты методов. HttpResponseMessage и IHttpActionResult</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.4.php">Определение формата ответа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.5.php">Форматировщики медиа-типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.6.php">Привязка модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.7.php">Отправка массивов и сложных данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.8.php">Куки в Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.9.php">Валидация</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/2.10.php">Кроссдоменные запросы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/3.1.php">Система маршрутизации в Web Api</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/3.2.php">Ограничения маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/3.3.php">Атрибуты маршрутизации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Фильтры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/4.1.php">Фильтры аутентификации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/4.2.php">Фильтры авторизации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/4.3.php">Фильтры действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/4.4.php">Фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/4.5.php">Переопределение фильтров и глобальные фильтры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Аутентификация и авторизация в Web API</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/5.1.php">Авторизация на основе токенов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/5.2.php">Регистрация, авторизация, получение и использование токена</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/aspnet_webapi/5.3.php">Создание десктопного клиента на C# для Web API</a></span></li>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 5.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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