<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core и C# | Аутентификация с помощью JWT-токенов</title>
<meta charset="utf-8" />
<meta name="description" content="Аутентификация с помощью JWT-токенов в приложении ASP.NET Core и C#, конфигурация и генерация JWT-токена, метод AddJwtBearer и настройка токена, класс JwtSecurityToken">
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
<h2>Аутентификация с помощью JWT-токенов</h2><div class="date">Последнее обновление: 09.01.2022</div>

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

<p>Одним из подходов к авторизации и аутентификации в ASP.NET Core представляет механизм аутентификации и авторизации с помощью 
JWT-токенов. Что такое JWT-токен? JWT (или JSON Web Token) представляет собой веб-стандарт, который определяет способ передачи данных о 
пользователе в формате JSON в зашифрованном виде.</p>
<p>JWT-токен состоит из трех частей:</p>
<ul>
<li><p><span class="b">Header</span> - объект JSON, который содержит информацию о типе токена и алгоритме его шифрования</p></li>
<li><p><span class="b">Payload</span> - объект JSON, который содержит данные, нужные для авторизации пользователя</p></li>
<li><p><span class="b">Signature</span> - строка, которая создается с помощью секретного кода, Headera и Payload. Эта строка служит для верификации токена</p></li>
</ul>
<p>Для использования JWT-токенов в проект ASP.NET Core необходимо добавить Nuget-пакет <span class="b">Microsoft.AspNetCore.Authentication.JwtBearer</span>.</p>
<img src="./pics/13.1.png" alt="JWT Token in ASP.NET Core Minimal API и C#" />
<p>Сначала рассмотрим принцип генерации и отправки jwt-токена. Для этого в файле <span class="b">Program.cs</span> определим следующий код приложения:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Authentication.JwtBearer;
using Microsoft.AspNetCore.Authorization;
using Microsoft.IdentityModel.Tokens;
using System.IdentityModel.Tokens.Jwt;
using System.Security.Claims;
using System.Text;

var builder = WebApplication.CreateBuilder();

builder.Services.AddAuthorization();
builder.Services.AddAuthentication(JwtBearerDefaults.AuthenticationScheme)
    .AddJwtBearer(options =&gt;
    {
        options.TokenValidationParameters = new TokenValidationParameters
        {
            // указывает, будет ли валидироваться издатель при валидации токена
            ValidateIssuer = true,
            // строка, представляющая издателя
            ValidIssuer = AuthOptions.ISSUER,
            // будет ли валидироваться потребитель токена
            ValidateAudience = true,
            // установка потребителя токена
            ValidAudience = AuthOptions.AUDIENCE,
            // будет ли валидироваться время существования
            ValidateLifetime = true,
            // установка ключа безопасности
            IssuerSigningKey = AuthOptions.GetSymmetricSecurityKey(),
            // валидация ключа безопасности
            ValidateIssuerSigningKey = true,
         };
});
var app = builder.Build();

app.UseAuthentication();
app.UseAuthorization();

app.Map("/login/{username}", (string username) =&gt; 
{
    var claims = new List&lt;Claim&gt; {new Claim(ClaimTypes.Name, username) };
    // создаем JWT-токен
    var jwt = new JwtSecurityToken(
            issuer: AuthOptions.ISSUER,
            audience: AuthOptions.AUDIENCE,
            claims: claims,
            expires: DateTime.UtcNow.Add(TimeSpan.FromMinutes(2)),
            signingCredentials: new SigningCredentials(AuthOptions.GetSymmetricSecurityKey(), SecurityAlgorithms.HmacSha256));
           
    return new JwtSecurityTokenHandler().WriteToken(jwt);
});

app.Map("/data", [Authorize] () =&gt; new { message= "Hello World!" });

app.Run();

public class AuthOptions
{
    public const string ISSUER = "MyAuthServer"; // издатель токена
    public const string AUDIENCE = "MyAuthClient"; // потребитель токена
    const string KEY = "mysupersecret_secretkey!123";   // ключ для шифрации
    public static SymmetricSecurityKey GetSymmetricSecurityKey() =&gt; 
        new SymmetricSecurityKey(Encoding.UTF8.GetBytes(KEY));
}
</pre>
<p>Для описания некоторых настроек генерации токена в конце кода определен специальный класс <span class="b">AuthOptions</span>:</p>
<pre class="brush:c#;">
public class AuthOptions
{
    public const string ISSUER = "MyAuthServer"; // издатель токена
    public const string AUDIENCE = "MyAuthClient"; // потребитель токена
    const string KEY = "mysupersecret_secretkey!123";   // ключ для шифрации
    public static SymmetricSecurityKey GetSymmetricSecurityKey() =&gt; 
        new SymmetricSecurityKey(Encoding.UTF8.GetBytes(KEY));
}
</pre>
<p>Константа <code>ISSUER</code> представляет издателя токена. Здесь можно определить любое название.</p>
<p>Константа <code>AUDIENCE</code> представляет потребителя токена - опять же может быть любая строка, обычно это сайт, на котором применяется токен.</p>
<p>Константа <code>KEY</code> хранит ключ, который будет применяться для создания токена.</p>
<p>И метод <code>GetSymmetricSecurityKey()</code> возвращает ключ безопасности, который применяется для генерации токена. Для генерации токена 
нам необходим объект класса <span class="b">SecurityKey</span>. В качестве такого здесь выступает объект производного класса <span class="b">SymmetricSecurityKey</span>, 
в конструктор которого передается массив байт, созданный по секретному ключу.</p>
<p>Чтобы указать, что приложение для аутентификации будет использовать токена, в метод <span class="b">AddAuthentication()</span> передается значение константы 
<span class="b">JwtBearerDefaults.AuthenticationScheme</span>.</p>
<pre class="brush:c#;">builder.Services.AddAuthentication(JwtBearerDefaults.AuthenticationScheme)</pre>
<h4>Конфигурация и валидация токена</h4>
<p>С помощью метода <span class="b">AddJwtBearer()</span> в приложение добавляется конфигурация токена. Для конфигурации токена применяется 
объект <span class="b">JwtBearerOptions</span>, который позволяет с помощью свойств настроить работу с токеном. Данный объект имеет множество свойств. 
Здесь же использовано только свойство <span class="b">TokenValidationParameters</span>, которое задает параметры валидации токена.</p>
<pre class="brush:c#;">
builder.Services.AddAuthentication(JwtBearerDefaults.AuthenticationScheme)
    .AddJwtBearer(options =&gt;
    {
        options.TokenValidationParameters = new TokenValidationParameters
        {
            ValidateIssuer = true,
            ValidIssuer = AuthOptions.ISSUER,
            ValidateAudience = true,
            ValidAudience = AuthOptions.AUDIENCE,
            ValidateLifetime = true,
            IssuerSigningKey = AuthOptions.GetSymmetricSecurityKey(),
            ValidateIssuerSigningKey = true,
         };
});
</pre>
<p>Объект <span class="b">TokenValidationParameters</span> обладает множеством свойств, которые позволяют настроить различные аспекты валидации токена. В данном случае применяются следующие свойства:</p>
<ul>
<li><p><span class="b">ValidateIssuer</span>: указывает, будет ли валидироваться издатель при валидации токена</p></li>
<li><p><span class="b">ValidIssuer</span>: строка, которая представляет издателя токена</p></li>
<li><p><span class="b">ValidateAudience</span>: указывает, будет ли валидироваться потребитель токена</p></li>
<li><p><span class="b">ValidAudience</span>: строка, которая представляет потребителя токена</p></li>
<li><p><span class="b">ValidateLifetime</span>: указывает, будет ли валидироваться время существования</p></li>
<li><p><span class="b">IssuerSigningKey</span>: представляет ключ безопасности - объект SecurityKey, который будет применяться при генерации токена</p></li> 
<li><p><span class="b">ValidateIssuerSigningKey</span>: указывает, будет ли валидироваться ключ безопасности</p></li>
</ul>
<p>Здесь устанавливаются наиболее основные свойства. А вообще можно установить кучу других параметров, например, названия claims для ролей и логинов пользователя и т.д.</p>
<h3>Генерация токена</h3>
<p>Чтобы пользователь мог использовать токен, приложение должно отправить ему этот токен, а перед этим соответственно сгенерировать токен. 
И для генерации токена здесь предусмотрена типовая конечная точка "/login":</p>
<pre class="brush:c#;">
app.Map("/login/{username}", (string username) =&gt; 
{
    var claims = new List&lt;Claim&gt; {new Claim(ClaimTypes.Name, username) };
    var jwt = new JwtSecurityToken(
            issuer: AuthOptions.ISSUER,
            audience: AuthOptions.AUDIENCE,
            claims: claims,
            expires: DateTime.UtcNow.Add(TimeSpan.FromMinutes(2)), // время действия 2 минуты
            signingCredentials: new SigningCredentials(AuthOptions.GetSymmetricSecurityKey(), SecurityAlgorithms.HmacSha256));
           
    return new JwtSecurityTokenHandler().WriteToken(jwt);
});
</pre>
<p>Для простоты конечная точка через параметр маршрута "username" получает некоторый логин пользователя и применяет его для генерации токена. На данном этапе для простоты 
мы пока ничего не проверяем, валидный ли это логин, что это за логин, пока просто смотрим, как генерировать токен.</p>
<p>Для создания токена применяется конструктор <span class="b">JwtSecurityToken</span>. Одним из параметров служит список объектов Claim. Объекты Claim служат для хранения некоторых 
данных о пользователе, описывают пользователя. Затем эти данные можно применять для аутентификации. В данном случае добавляем в список один Claim, который хранит логин пользователя.</p>
<p>Затем собственно создаем JWT-токен, передавая в конструктор JwtSecurityToken соответствующие параметры. Обратите внимание, что для инициализации токена применяются 
все те же константы и ключ безопасности, которые определены в классе AuthOptions и которые использовались для конфигурации настроек 
в методе AddJwtBearer().</p>
<p>В конце посредством метода <code>JwtSecurityTokenHandler().WriteToken(jwt)</code> создается сам токен , который отправляется клиенту.</p>
<p>Для тестирования генерации токена обратимся к этой конечной точке:</p>
<img src="./pics/13.2.png" alt="Генерация токена JWT в ASP.NET Core и C#" />
<p>При обращении к конечной точке "/login" (например, по пути "/login/tom", где "tom" предствляет параметр "username") приложение сгенерирует нам jwt-токен, который нам необходимо отправлять 
для доступа к ресурсам приложения с защщенным доступом. Например, в коде также определена еще одна конечная точка "/data":</p>
<pre class="brush:c#;">app.Map("/data", [Authorize] (HttpContext context) =&gt; $"Hello World!");</pre>
<p>Она применяет атрибут <span class="b">Authorize</span>, соответственно доступ к ней ограничен только для аутентифицированных пользователей, которые имеют токен. 
Например, если мы попытаемся обратиться по пути "/data", мы столкнемся с ошибкой 401 (Unauthorized) - доступ не авторизован:</p>
<img src="./pics/13.3.png" alt="Ограничение доступа с помощью токена JWT в ASP.NET Core и C#" />
<p>Поэтому для обращения к этому ресурсу (и ко всем другим ресурсам, к которым имеют доступ только аутентифицированные пользователи) 
необходимо посылать полученный токен в запросе в заголовое <span class="b">Authorization</span>:</p>
<pre class="brush:c#;">
"Authorization": "Bearer " + token  // token - полученный ранее jwt-токен
</pre>
<p>В следующей статье рассмотрим, как применять токен для доступа к ресурсам.</p>
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


<div class="nav"><p><a href="./13.1.php">Назад</a><a href="./">Содержание</a><a href="./13.3.php">Вперед</a></p></div></div>
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