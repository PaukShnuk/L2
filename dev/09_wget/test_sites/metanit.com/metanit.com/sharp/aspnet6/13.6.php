<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core и C# | ClaimPrincipal и объекты Claim</title>
<meta charset="utf-8" />
<meta name="description" content="Классы ClaimPrincipal, ClaimsIdentity и Claim и их роль в аутентификации и авторизации в ASP.NET Core и C#, получение и установка данных пользователя">
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
<h2>ClaimPrincipal и объекты Claim</h2><div class="date">Последнее обновление: 11.01.2022</div>

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

<p>В прошлой теме был рассмотрен объект <code>HttpContext.User</code>, который представляет класс ClaimsPrincipal и который хранит данные пользователя в 
свойстве <code>Identity</code> в виде объекта <code>ClaimsIdentity</code>. Но что представляют сами данные пользователя? Для 
хранения различных данных пользователя во фреймворке ASP.NET Core определяются объекты claim.</p>
<p>Объекты <span class="b">claim</span> представляют некоторую информацию о пользователе, которую мы можем использовать для авторизации в приложении. Например, 
у пользователя может быть определенный возраст, город, страна проживания, любимая музыкальная группа и прочие признаки. И все эти признаки могут представлять 
отдельные объекты claim. И в зависимости от значения этих claim мы можем предоставлять пользователю доступ к тому или иному ресурсу. Таким образом, 
claims представляют более общий механизм авторизации нежели стандартные логины или роли, которые привязаны лишь к одному определенному признаку пользователя.</p>
<p>Каждый объект claim представляет класс <span class="b">Claim</span> из пространства имен <code>System.Security.Claims</code>, который определяет следующие свойства:</p>
<ul>
<li><p><span class="b">Issuer</span>: "издатель" или название системы, которая выдала данный claim</p></li>
<li><p><span class="b">Subject</span>: возвращает информацию о пользователе в виде объекта ClaimsIdentity</p></li>
<li><p><span class="b">Type</span>: возвращает тип объекта claim</p></li>
<li><p><span class="b">Value</span>: возвращает значение объекта claim</p></li>
</ul>
<h3>Создание Claim</h3>
<p>Для создания объекта Claim определено множество конструкторов, но чаще всего применяется следующая версия конструктора:</p>
<pre class="brush:c#;">public Claim(string type, string value)</pre>
<p>В качестве первого параметра в конструктор передается тип claima - это некоторая строка, которая, как правило, описывает назначение claima. 
В качестве второго параметра передается значение этого claima. Например, простейшее создание claima:</p>
<pre class="brush:c#;">var usernameClaim = new Claim(ClaimTypes.Name, "Tom");</pre>
<p>В качестве типов можно использовать встроенные константы, типа <code>ClaimTypes.Name</code>, 
которая имеет значение "http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name" и которая обычно применяется для установки имени пользователя (то, что потом мы 
сможем получить через свойство HttpContext.User.Identity.Name). И в данном случае этот claim будет иметь значение "Tom".</p>
<p>Все объекты claim, которые описывают пользователя, затем можно передать в виде коллекции в конструктор ClaimsIdentity:</p>
<pre class="brush:c#;">
var usernameClaim = new Claim(ClaimTypes.Name, "Tom");
var claims = new List&lt;Claim&gt; { usernameClaim };
var claimsIdentity = new ClaimsIdentity(claims, "Cookies");
</pre>
<p>Рассмотрим на небольшом примере:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Authentication.Cookies;
using System.Security.Claims;
using Microsoft.AspNetCore.Authentication;

var builder = WebApplication.CreateBuilder();

builder.Services.AddAuthentication(CookieAuthenticationDefaults.AuthenticationScheme)
    .AddCookie();

var app = builder.Build();

app.UseAuthentication();

app.MapGet("/login/{username}", async (string username, HttpContext context) =&gt;
{
    var claims = new List&lt;Claim&gt; { new (ClaimTypes.Name, username) };
    var claimsIdentity = new ClaimsIdentity(claims, "Cookies");
    var claimsPrincipal = new ClaimsPrincipal(claimsIdentity);
    await context.SignInAsync(claimsPrincipal);
    return $"Установлено имя {username}";
});
app.Map("/", (HttpContext context) =&gt;
{
    var user = context.User.Identity;
    if (user is not null && user.IsAuthenticated) 
        return $"UserName: {user.Name}";
    else return "Пользователь не аутентифицирован.";
});
app.MapGet("/logout", async (HttpContext context) =&gt;
{
    await context.SignOutAsync(CookieAuthenticationDefaults.AuthenticationScheme);
    return "Данные удалены";
});

app.Run();
</pre>
<p>В данном примере в конечной точке <code>app.MapGet("/login/{username}")</code> через параметр "username" получаем некоторое условное имя 
пользователя, создаем из него Claim, передаем его в ClaimsIdentity. В итоге после этот claim будет сохранен в аутентификационных куках. И 
когда в следующем запросе приложение получит эти аутентификационные куки, оно сможет извлечь эти данные и использовать их при создании объекта ClaimsPrincipal.</p>
<img src="./pics/13.13.png" alt="Установка Claim и HttpContext.User.Identity.Name в ASP.NET Core и C#" />
<p>Следует отметить, что по умолчанию значение claim с типом <code>ClaimTypes.Name</code> (либо <code>ClaimsIdentity.DefaultNameClaimType</code>) 
передается свойству HttpContext.User.Identity.Name.</p>
<h3>Управление объектами Claim</h3>
<p>Для работы с объектами Claim в классе ClaimsPrincipal есть следующие свойства и методы:</p>
<ul>
<li><p><span class="b">Claims</span>: свойство, которое возвращает набор ассоциированных с пользователем объектов claim</p></li>
<li><p><span class="b">FindAll(type) / FindAll(predicate)</span>: возвращает все объекты claim, которые соответствуют определенному типу или условию</p></li>
<li><p><span class="b">FindFirst(type) / FindFirst(predicate)</span>: возвращает первый объект claim, который соответствуют определенному типу или условию</p></li>
<li><p><span class="b">HasClaim(type, value) / HasClaim(predicate)</span>: возвращает значение <code>true</code>, если пользователь имеет claim определенного типа с определенным значением</p></li>
<li><p><span class="b">IsInRole(name)</span>: возвращает значение <code>true</code>, если пользователь принадлежит роли с названием name</p></li>
</ul>
<p>С помощью объекта <span class="b">ClaimsIdentity</span>, который возвращается свойством <code>User.Identity</code>, мы можем управлять объектами claim у текущего пользователя. 
В частности, класс ClaimsIdentity определяет следующие свойства и методы:</p>
<ul>
<li><p><span class="b">Claims</span>: свойство, которое возвращает набор ассоциированных с пользователем объектов claim</p></li>
<li><p><span class="b">AddClaim(claim)</span>: добавляет для пользователя объект claim</p></li>
<li><p><span class="b">AddClaims(claims)</span>: добавляет набор объектов claim</p></li>
<li><p><span class="b">FindAll(type) / FindAll(predicate)</span>: возвращает все объекты claim, которые соответствуют определенному типу или условию</p></li>
<li><p><span class="b">FindFirst(type) / FindFirst(predicate)</span>: возвращает первый объект claim, который соответствуют определенному типу или условию</p></li>
<li><p><span class="b">HasClaim(predicate)</span>: возвращает значение <code>true</code>, если пользователь имеет claim, соответствующий определенному условию</p></li>
<li><p><span class="b">RemoveClaim(claim)</span>: удаляет объект claim</p></li>
<li><p><span class="b">TryRemoveClaim(claim)</span>: удаляет объект claim и возвращает true при успешном удалении</p></li>
</ul>
<p>Например, определим у пользователя несколько объектов claim:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Authentication.Cookies;
using System.Security.Claims;
using Microsoft.AspNetCore.Authentication;

var builder = WebApplication.CreateBuilder();

builder.Services.AddAuthentication(CookieAuthenticationDefaults.AuthenticationScheme)
    .AddCookie();

var app = builder.Build();

app.UseAuthentication();

app.MapGet("/login", async (HttpContext context) =&gt;
{
    var username = "Tom";
    var company = "Microsoft";
    var phone = "+12345678901";

    var claims = new List&lt;Claim&gt; 
    { 
        new Claim (ClaimTypes.Name, username),
        new Claim ("company", company),
        new Claim(ClaimTypes.MobilePhone,phone)
    };
    var claimsIdentity = new ClaimsIdentity(claims, "Cookies");
    var claimsPrincipal = new ClaimsPrincipal(claimsIdentity);
    await context.SignInAsync(claimsPrincipal);
    return Results.Redirect("/");
});
app.Map("/", (HttpContext context) =&gt;
{
    // аналогично var username = context.User.Identity.Name
    var username = context.User.FindFirst(ClaimTypes.Name);
    var phone = context.User.FindFirst(ClaimTypes.MobilePhone);
    var company = context.User.FindFirst("company");
    return $"Name: {username?.Value}\nPhone: {phone?.Value}\nCompany: {company?.Value}";
});
app.MapGet("/logout", async (HttpContext context) =&gt;
{
    await context.SignOutAsync(CookieAuthenticationDefaults.AuthenticationScheme);
    return "Данные удалены";
});

app.Run();
</pre>
<p>В конечной точке <code>app.MapGet("/login")</code> в куки сохраняются объект ClaimsPrincipal с тремя объектами claims. Они представляют имя, компанию и телефон пользователя. 
Причем для добавления некоторых claim мы можем воспользоваться встроенными типами, как для имени или телефона пользователя:</p>
<pre class="brush:c#;">new Claim(ClaimTypes.MobilePhone,phone)</pre>
<p>Для других данных мы можем определить свои типы, просто передав какую-нибудь строку, как в случае с компанией:</p>
<pre class="brush:c#;">new Claim ("company", company),</pre>
<p>Затем в приложении при обработке запроса мы можем получить эти данные. Как в примере выше в конечной точке <code>app.Map("/")</code>:</p>
<pre class="brush:c#;">
var phone = context.User.FindFirst(ClaimTypes.MobilePhone);
var company = context.User.FindFirst("company");
</pre>
<p>В метод <code>FindFirst</code> передается тип claim. Стоит учитывать, что этот метод возвращает объект <code>Claim?</code>, то есть результатом метода 
может быть значение <span claim="b">null</span> (например, если пользователь не аутентифицирован или объект claim не установлен). 
Соответственно при обращении к значению claim необходимо проверять его на null.</p>
<p>Таким образом, после обращения по пути "/login" в куках будут сохранены данные пользователя:</p>
<img src="./pics/13.14.png" alt="установка и получение Claim у ClaimsPrincipal в ASP.NET Core и C#" />
<p>Если мы динамически решим добавить новый claim или удалить существующий, то после изменения claim необходимо заново пересоздавать объект ClaimsPrincipal и 
перезаписывать аутентификационные куки или jwt-токен, где эти данные храняться.</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Authentication.Cookies;
using System.Security.Claims;
using Microsoft.AspNetCore.Authentication;

var builder = WebApplication.CreateBuilder();

builder.Services.AddAuthentication(CookieAuthenticationDefaults.AuthenticationScheme)
    .AddCookie();

var app = builder.Build();

app.UseAuthentication();
// Добавление возраста
app.MapGet("/addage", async (HttpContext context) =&gt;
{
    if(context.User.Identity is ClaimsIdentity claimsIdentity)
    {
        claimsIdentity.AddClaim(new Claim("age", "37"));
        var claimsPrincipal = new ClaimsPrincipal(claimsIdentity);
        await context.SignInAsync(claimsPrincipal);
    }
    return Results.Redirect("/");
});
// удаление телефона
app.MapGet("/removephone", async (HttpContext context) =&gt;
{
    if (context.User.Identity is ClaimsIdentity claimsIdentity)
    {
        var phoneClaim = claimsIdentity.FindFirst(ClaimTypes.MobilePhone);
        // если claim успешно удален
        if(claimsIdentity.TryRemoveClaim(phoneClaim))
        {
            var claimsPrincipal = new ClaimsPrincipal(claimsIdentity);
            await context.SignInAsync(claimsPrincipal);
        }
    }
    return Results.Redirect("/");
});
app.MapGet("/login", async (HttpContext context) =&gt;
{
    var username = "Tom";
    var company = "Microsoft";
    var phone = "+12345678901";

    var claims = new List&lt;Claim&gt; 
    { 
        new Claim (ClaimTypes.Name, username),
        new Claim ("company", company),
        new Claim(ClaimTypes.MobilePhone,phone)
    };
    var claimsIdentity = new ClaimsIdentity(claims, "Cookies");
    var claimsPrincipal = new ClaimsPrincipal(claimsIdentity);
    await context.SignInAsync(claimsPrincipal);
    return Results.Redirect("/");
});
app.Map("/", (HttpContext context) =&gt;
{
    var username = context.User.FindFirst(ClaimTypes.Name);
    var phone = context.User.FindFirst(ClaimTypes.MobilePhone);
    var company = context.User.FindFirst("company");
    var age = context.User.FindFirst("age");
    return $"Name: {username?.Value}\nPhone: {phone?.Value}\n" +
    $"Company: {company?.Value}\nAge: {age?.Value}";
});
app.MapGet("/logout", async (HttpContext context) =&gt;
{
    await context.SignOutAsync(CookieAuthenticationDefaults.AuthenticationScheme);
    return "Данные удалены";
});

app.Run();
</pre>
<p>В данном случае конечная точка <code>app.MapGet("/removephone")</code> удаляет телефон, а <code>app.MapGet("/addage")</code> добавляет возвраст в claims</p>
<p>Если нам надо сохранить набор значений, то все они передаются по одному типу. Затем с помощью метода <code>FindAll()</code> можно получить список этих значений. 
Например, сохраним для пользователя набор иностранных языков:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Authentication.Cookies;
using System.Security.Claims;
using Microsoft.AspNetCore.Authentication;

var builder = WebApplication.CreateBuilder();

builder.Services.AddAuthentication(CookieAuthenticationDefaults.AuthenticationScheme)
    .AddCookie();

var app = builder.Build();

app.UseAuthentication();

app.MapGet("/login", async (HttpContext context) =&gt;
{
    var claims = new List&lt;Claim&gt; 
    { 
        new Claim (ClaimTypes.Name, "Tom"),
        new Claim ("languages", "English"),
        new Claim ("languages", "German"),
        new Claim ("languages", "Spanish")
    };
    var claimsIdentity = new ClaimsIdentity(claims, "Cookies");
    var claimsPrincipal = new ClaimsPrincipal(claimsIdentity);
    await context.SignInAsync(claimsPrincipal);
    return Results.Redirect("/");
});
app.Map("/", (HttpContext context) =&gt;
{
    var username = context.User.FindFirst(ClaimTypes.Name);
    var languages = context.User.FindAll("languages");
    // объединяем список claims в строку
    var languagesToString = "";
    foreach (var l in languages)
        languagesToString = $"{languagesToString} {l.Value}";    
    return $"Name: {username?.Value}\nLanguages: {languagesToString}";
});
app.MapGet("/logout", async (HttpContext context) =&gt;
{
    await context.SignOutAsync(CookieAuthenticationDefaults.AuthenticationScheme);
    return "Данные удалены";
});

app.Run();
</pre>
<img src="./pics/13.15.png" alt="сохранение в Claim массивов в ASP.NET Core и C#" />
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


<div class="nav"><p><a href="./13.5.php">Назад</a><a href="./">Содержание</a><a href="./13.7.php">Вперед</a></p></div></div>
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