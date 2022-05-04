<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core и C# | Авторизация на основе Claims</title>
<meta charset="utf-8" />
<meta name="description" content="Авторизация на основе Claims (Claims-based authorization) в ASP.NET Core и C#, получение и установка данных пользователя">
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
<h2>Авторизация на основе Claims</h2><div class="date">Последнее обновление: 12.01.2022</div>

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

<p>Атрибут Authorize легко позволяет разграничить доступ в зависимости от роли, однако для создания авторизации 
функциональности ролей бывает недостаточно. Например, что если мы хотим разграничить доступ на основе 
возраста пользователя или каких-то других признаков. Для этого применяется авторизация на основе claims. Собственно авторизация на основе ролей фактически представляет 
частный случай авторизации на основе claims, так как роль это тот же объект Claim, имеющий тип <code>ClaimsIdentity.DefaultRoleClaimType</code>.</p>
<p>Для авторизации на основе claims используются <span class="b">политики (policy)</span>. Политика представляет набор ограничений, которым должен соответствовать 
пользователь для доступа к ресурсу.</p>
<p>Все применяемые политики добавляются в приложение с помощью метода <code>builder.Services.AddAuthorization()</code>. 
Этот метод устанавливает политики с помощью объекта <span class="b">AuthorizationOptions</span>. Например:</p>
<pre class="brush:c#;">
builder.Services.AddAuthorization(opts =&gt; {
    
    opts.AddPolicy("OnlyForMicrosoft", policy =&gt; {
        policy.RequireClaim("company", "Microsoft");
    });
});
</pre>
<p>В данном случае добавляется политика с именем "OnlyForMicrosoft". И она требует обязательной установки для текущего пользователя объекта Claim с 
типом "company" и значением "Microsoft". Если для пользователя не будет установлено подобного объекта Claim, то такой пользователь не будет соответствовать политике.</p>
<p>Для управления политиками в классе AuthorizationOptions определены следующие свойства и методы:</p>
<ul>
<li><p><span class="b">DefaultPolicy</span>: возвращает политику по умолчанию, которая используется, когда атрибут Authorize применяется без параметров</p></li>
<li><p><span class="b">AddPolicy(name, policyBuilder)</span>: добавляет политику</p></li>
<li><p><span class="b">GetPolicy(name)</span>: возвращает политику по имени</p></li>
</ul>
<p>Ключевым методом здесь является <code>AddPolicy()</code>. Первый параметр метода представляет название политики, а второй - делегат, который с помощью 
объекта <span class="b">AuthorizationPolicyBuilder</span> позволяет создать политику по определенным условиям. Для создания политики могут применяться 
следующие методы класса AuthorizationPolicyBuilder:</p>
<ul>
<li><p><span class="b">RequireAuthenticatedUser()</span>: пользователь обязательно должен быть аутентифицирован для соответствия политике</p></li>
<li><p><span class="b">RequireClaim(type)</span>: для пользователя должен быть установлен claim с типом type. Причем не важно, какое значение будет иметь этот claim, главное, его наличие</p></li>
<li><p><span class="b">RequireClaim(type, values)</span>: для пользователя должен быть установлен claim с типом type. Но теперь claim должен в качестве значения иметь одно из значений из массива values.</p></li>
<li><p><span class="b">RequireRole(roles)</span>: пользователь должен принадлежать к одной из ролей из массива roles</p></li>
<li><p><span class="b">RequireUserName(name)</span>: для соответствия политике пользователь должен иметь ник (логин) name</p></li>
<li><p><span class="b">RequireAssertion(handler)</span>: запрос должен соответствовать условию, которое устанавливается с помощью делегата handler</p></li>
<li><p><span class="b">AddRequirements(requirement)</span>: позволяет добавить кастомное ограничение requirement, если имеющихся недостаточно</p></li>
</ul>
<p>Фактически данные методы задают ограничения, которым должен соответствовать пользователь, обращающийся к приложению. После установки ограничений политики в 
атрибуте Authorize можем их применять для разграничения доступа:</p>
<pre class="brush:c#;">[Authorize(Policy = "OnlyForMicrosoft")]</pre>
<p>Для установки политики у атрибута AuthorizeAttribute применяется свойство <span class="b">Policy</span>. Оно указывает на название политики, которой 
должны соответствовать пользователи.</p>
<h3>Применение авторизации на основе Claims</h3>
<p>Допустим, у нас есть следующий класс, который представляет пользователя:</p>
<pre class="brush:c#;">
record class Person(string Email, string Password, string City, string Company);
</pre>
<p>У класса Person кроме свойств для хранения email и пароля также определено свойство City для хранения города и свойство Company для хранения компании 
пользователя.</p>
<p>Определим в приложении авторизацию на основе свойств City и Company. Для этого изменим код файла <span class="b">Program.cs</span> следующим 
образом:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Authentication.Cookies;
using System.Security.Claims;
using Microsoft.AspNetCore.Authentication;
using Microsoft.AspNetCore.Authorization;

var people = new List&lt;Person&gt; 
{ 
    new Person("tom@gmail.com", "12345", "London", "Microsoft"),
    new Person("bob@gmail.com", "55555", "Лондон", "Google"),
    new Person("sam@gmail.com", "11111", "Berlin", "Microsoft")
};

var builder = WebApplication.CreateBuilder();
builder.Services.AddAuthentication(CookieAuthenticationDefaults.AuthenticationScheme)
    .AddCookie(options =&gt;
    {
        options.LoginPath = "/login";
        options.AccessDeniedPath = "/login";
    });
builder.Services.AddAuthorization(opts =&gt; {

    opts.AddPolicy("OnlyForLondon", policy =&gt; {
        policy.RequireClaim(ClaimTypes.Locality, "Лондон", "London");
    });
    opts.AddPolicy("OnlyForMicrosoft", policy =&gt; {
        policy.RequireClaim("company", "Microsoft");
    });
});

var app = builder.Build();

app.UseAuthentication();
app.UseAuthorization();

app.MapGet("/login", async (HttpContext context) =&gt;
{
    context.Response.ContentType = "text/html; charset=utf-8";
    // html-форма для ввода логина/пароля
    string loginForm = @"&lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
        &lt;meta charset='utf-8' /&gt;
        &lt;title&gt;METANIT.COM&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;Login Form&lt;/h2&gt;
        &lt;form method='post'&gt;
            &lt;p&gt;
                &lt;label&gt;Email&lt;/label&gt;&lt;br /&gt;
                &lt;input name='email' /&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;label&gt;Password&lt;/label&gt;&lt;br /&gt;
                &lt;input type='password' name='password' /&gt;
            &lt;/p&gt;
            &lt;input type='submit' value='Login' /&gt;
        &lt;/form&gt;
    &lt;/body&gt;
    &lt;/html&gt;";
await context.Response.WriteAsync(loginForm);
});

app.MapPost("/login", async (string? returnUrl, HttpContext context) =&gt;
{
    // получаем из формы email и пароль
    var form = context.Request.Form;
    // если email и/или пароль не установлены, посылаем статусный код ошибки 400
    if (!form.ContainsKey("email") || !form.ContainsKey("password"))
        return Results.BadRequest("Email и/или пароль не установлены");
    string email = form["email"];
    string password = form["password"];

    // находим пользователя 
    Person? person = people.FirstOrDefault(p =&gt; p.Email == email && p.Password == password);
    // если пользователь не найден, отправляем статусный код 401
    if (person is null) return Results.Unauthorized();
    var claims = new List&lt;Claim&gt;
    {
        new Claim(ClaimTypes.Name, person.Email),
        new Claim(ClaimTypes.Locality, person.City),
        new Claim("company", person.Company)
    };
    var claimsIdentity = new ClaimsIdentity(claims, "Cookies");
    var claimsPrincipal = new ClaimsPrincipal(claimsIdentity);
    await context.SignInAsync(claimsPrincipal);
    return Results.Redirect(returnUrl ?? "/");
});
// доступ только для City = London
app.Map("/london", [Authorize(Policy = "OnlyForLondon")]() =&gt; "You are living in London");

// доступ только для Company = Microsoft
app.Map("/microsoft", [Authorize(Policy = "OnlyForMicrosoft")]() =&gt; "You are working in Microsoft");

app.Map("/", [Authorize](HttpContext context) =&gt;
{
    var login = context.User.FindFirst(ClaimTypes.Name);
    var city = context.User.FindFirst(ClaimTypes.Locality);
    var company = context.User.FindFirst("company");
    return $"Name: {login?.Value}\nCity: {city?.Value}\nCompany: {company?.Value}";
});
app.MapGet("/logout", async (HttpContext context) =&gt;
{
    await context.SignOutAsync(CookieAuthenticationDefaults.AuthenticationScheme);
    return "Данные удалены";
});

app.Run();

record class Person(string Email, string Password, string City, string Company);
</pre>
<p>Здесь для тестирования механизма авторизации на основе Claims определена условная бд - список пользователей people:</p>
<pre class="brush:c#;">
var people = new List&lt;Person&gt; 
{ 
    new Person("tom@gmail.com", "12345", "London", "Microsoft"),
    new Person("bob@gmail.com", "55555", "Лондон", "Google"),
    new Person("sam@gmail.com", "11111", "Berlin", "Microsoft")
};
</pre>
<p>Для настройки авторизации в зависимости от данных пользователя в делегате в методе AddAuthorization устанавливаются две политики доступа - "OnlyForLondon" и "OnlyForMicrosoft":</p>
<pre class="brush:c#;">
builder.Services.AddAuthorization(opts =&gt; {

    opts.AddPolicy("OnlyForLondon", policy =&gt; {
        policy.RequireClaim(ClaimTypes.Locality, "Лондон", "London");
    });
    opts.AddPolicy("OnlyForMicrosoft", policy =&gt; {
        policy.RequireClaim("company", "Microsoft");
    });
});
</pre>
<p>Политика "OnlyForLondon" требует, чтобы claim с типом <code>ClaimTypes.Locality</code> имел значение "London" или "Лондон". 
Если значений много, то мы их можем перечислить через запятую. Вторая политика - "OnlyForMicrosoft" требует наличия Claim с типом 
"company" и значением "Microsoft".</p>

<p>Для входа пользователей в приложение определена конечная точка <code>app.MapGet("/login")</code>, которая обрабатывает 
GET-запросы по пути "/login" и отправляет пользователям форму для ввода логина и пароля.</p>
<p>После заполнения и отправки формы логина данные в POST-запросе получает конечная точка <code>app.MapPost("/login")</code>, 
которая получает логин и пароль и по них находит пользователя в списке people. Значения свойств найденного пользователя добавляются в список claims:</p>
<pre class="brush:c#;">
var claims = new List&lt;Claim&gt;
{
	new Claim(ClaimTypes.Name, person.Email),
    new Claim(ClaimTypes.Locality, person.City),
    new Claim("company", person.Company)
};
var claimsIdentity = new ClaimsIdentity(claims, "Cookies");
var claimsPrincipal = new ClaimsPrincipal(claimsIdentity);
</pre>
<p>Благодаря этому инфраструктура ASP.NET Core сможет получить значения claims с типами <code>ClaimTypes.Locality</code> и 
<code>"company"</code> (то есть соответственно город и компанию пользователей) и на их основе решить, предоставлять ли доступ пользователю к ресурсам приложения, 
которые используют политику доступа на основе этих Claim.</p>
<p>Для тестирования политик доступа определены две конечных точки:</p>
<pre class="brush:c#;">
// доступ только для City = London
app.Map("/london", [Authorize(Policy = "OnlyForLondon")]() =&gt; "You are living in London");

// доступ только для Company = Microsoft
app.Map("/microsoft", [Authorize(Policy = "OnlyForMicrosoft")]() =&gt; "You are working in Microsoft");
</pre>
<p>Здесь доступ по пути <code>"/london"</code> имеют только те пользователи, которые удовлетворяют политике "OnlyForLondon". 
А ресурс <code>"/microsoft"</code> доступен только для пользователей, соответствующих политике "OnlyForMicrosoft".</p>
<p>Запустим проект и залогинимся, используя данные одного из пользователей из списка people:</p>
<img src="./pics/13.19.png" alt="Авторизация на основе Claims в ASP.NET Core и C#" />
<p>И если пользователь живет в Лондоне, то он имеет доступ по пути "/london". Аналогично если пользователь работает в Microsoft, 
он имеет доступ по пути "/microsoft":</p>
<img src="./pics/13.20.png" alt="Claims based authorization in ASP.NET Core и C#" />
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


<div class="nav"><p><a href="./13.7.php">Назад</a><a href="./">Содержание</a><a href="./13.9.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в ASP.NET Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/1.1.php">Что такое ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/1.2.php">Начало работы с ASP.NET Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы в ASP.NET Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.1.php">Создание и запуск приложения. WebApplication и WebApplicationBuilder</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.2.php">Конвейер обработки запроса и middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.3.php">Метод Run и определение терминального middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.4.php">HttpResponse. Отправка ответа</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.5.php">HttpRequest. Получение данных запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.6.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.8.php">Отправка форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.9.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.10.php">Отправка и получение json</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.11.php">Создание простейшего API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.12.php">Загрузка файлов на сервер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.7.php">Метод Use</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.13.php">Создание ветки конвейера. UseWhen и MapWhen</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.14.php">Метод Map</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.15.php">Классы middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.16.php">Построение конвейера обработки запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.17.php">IWebHostEnvironment и окружение</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Dependency Injection</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.1.php">Внедрение зависимостей и IServiceCollection</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.2.php">Создание сервисов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.3.php">Получение зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.4.php">Жизненный цикл зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.5.php">Применение сервисов в классах middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.6.php">Scoped-сервисы в singleton-объектах</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.7.php">Множественная регистрация сервисов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Маршрутизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.1.php">Конечные точки. Метод Map</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.2.php">Параметры маршрута</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.3.php">Ограничения маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.4.php">Создание ограничений маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.5.php">Передача зависимостей в конечные точки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.6.php">Сопоставление запроса с конечной точкой</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.7.php">Сочетание конечных точек с другими middleware</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Статические файлы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/5.1.php">Установка каталога статических файлов. UseStaticFiles</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/5.2.php">Работа со статическими файлами</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Конфигурация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.1.php">Основы конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.2.php">Нефайловые провайдеры конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.3.php">Конфигурация в файлах JSON, XML и Ini</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.4.php">Конфигурация по умолчанию и объединение конфигураций</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.5.php">Анализ конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.6.php">Создание провайдера конфгурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.7.php">Проекция конфигурации на классы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.8.php">Передача конфигурации через IOptions</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Логгирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.1.php">Ведение лога и ILogger</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.2.php">Фабрика логгера и провайдеры логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.3.php">Конфигурация и фильтрация логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.4.php">Создание провайдера логгирования</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. Состояние приложения. Куки. Сессии</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/8.1.php">HttpContext.Items</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/8.2.php">Куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/8.3.php">Сессии</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Обработка ошибок</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/9.1.php">Обработка исключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/9.2.php">Обработка ошибок HTTP</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Results API</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.1.php">Введение в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.2.php">Отправка текста и json в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.3.php">Переадресация в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.4.php">Отправка статусных кодов в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.5.php">Отправка файлов в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.6.php">Определение своего типа IResult</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 11. Web API</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/11.1.php">Пример приложения Web API</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 12. Работа с базой данных и Entity Framework</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/12.1.php">Подключение Entity Framework</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/12.2.php">Основные операции с данными в Entity Framework Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 13. Аутентификация и авторизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.1.php">Введение в аутентификацию и авторизацию</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.2.php">Аутентификация с помощью JWT-токенов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.3.php">Авторизация с помощью JWT-токенов в клиенте JavaScript</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.4.php">Аутентификация с помощью куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.5.php">HttpContext.User, ClaimPrincipal и ClaimsIdentity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.6.php">ClaimPrincipal и объекты Claim</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.7.php">Авторизация по ролям</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.8.php">Авторизация на основе Claims</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.9.php">Создание ограничений для авторизации</a></span></li>
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
	
	$("li:contains('Глава 13.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 13.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 13.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 13.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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