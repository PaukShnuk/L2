<!DOCTYPE html>
<html >
<head>
<title>Регистрация, авторизация, использование токена в ASP.NET Web API</title>
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
<h2>Регистрация, авторизация, получение и использование токена</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p>
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

<p>Рассмотрев теоретические основы применения токена, теперь используем концепцию токенов в практическом примере.</p>
<p>Возьмем стандартный проект Web API с типом аутентификации Individual User Accounts. В нем по умолчанию есть контроллер AccountController, 
который содержит ряд методов, в том числе метод для регистрации:</p>
<pre class="brush:c#;">
[AllowAnonymous]
[Route("Register")]
public async Task&lt;IHttpActionResult&gt; Register(RegisterBindingModel model)
{
    if (!ModelState.IsValid)
    {
        return BadRequest(ModelState);
    }
	var user = new ApplicationUser() { UserName = model.Email, Email = model.Email };

    IdentityResult result = await UserManager.CreateAsync(user, model.Password);

    if (!result.Succeeded)
    {
        return GetErrorResult(result);
    }

    return Ok();
}
</pre>
<p>Если переданные данные проходят валидацию, то методом <code>UserManager.CreateAsync()</code> создается и добавляется в базу данных новый пользователь.</p>
<p>Метод регистрации у нас есть, но по умолчанию нет никакой формы html. Поэтому изменим код представления Index.cshtml следующим образом:</p>
<pre class="brush:xml;">
&lt;div&gt;
    &lt;label&gt;Введите email&lt;/label&gt;&lt;br /&gt;
    &lt;input type="email" id="email" /&gt; &lt;br /&gt;&lt;br /&gt;
    &lt;label&gt;Введите пароль&lt;/label&gt;&lt;br /&gt;
    &lt;input type="password" id="password" /&gt;&lt;br /&gt;&lt;br /&gt;
    &lt;label&gt;Подтвердите пароль&lt;/label&gt;&lt;br /&gt;
    &lt;input type="password" id="confirmpassword" /&gt;&lt;br /&gt;&lt;br /&gt;
    &lt;input type="submit" id="submit" value="Регистрация" /&gt;
&lt;/div&gt;
@section scripts{
&lt;script type="text/javascript"&gt;
    $(function () {
        $('#submit').click(function (e) {
            e.preventDefault();
            var data = {
                Email: $('#email').val(),
                Password: $('#password').val(),
                ConfirmPassword: $('#confirmpassword').val()
            };

            $.ajax({
                type: 'POST',
                url: '/api/Account/Register',
                contentType: 'application/json; charset=utf-8',
                data: JSON.stringify(data)
            }).success(function (data) {
                alert("Регистрация пройдена");
            }).fail(function (data) {
                alert("В процесе регистрации возникла ошибка");
            });
        });
    })
&lt;/script&gt;
    }
</pre>
<img src="pics/accesstoken5.png" alt="Регистрация в Web API" />
<p>После успешной регистрации данные попадают в базу данных в таблицу AspNetUsers. Теперь нам надо войти на сайт. В отличие от ASP.NET MVC здесь нет 
традиционного логина. Вся суть логина в данном случае будет заключаться в получении токена, который даст нам доступ к ресурсам сайта. Для этого в 
представление Index.cshtml добавим специальный блок для входа на сайт:</p>
<pre class="brush:xml;">
&lt;div class="userInfo" style="display:none;"&gt;
    &lt;p&gt;Вы вошли как: &lt;span class="userName"&gt;&lt;/span&gt;&lt;/p&gt;
    &lt;input type="button" value="Выйти" id="logOut" /&gt;
&lt;/div&gt;
&lt;div class="loginForm"&gt;
    &lt;h3&gt;Вход на сайт&lt;/h3&gt;
    &lt;label&gt;Введите email&lt;/label&gt;&lt;br /&gt;
    &lt;input type="email" id="emailLogin" /&gt; &lt;br /&gt;&lt;br /&gt;
    &lt;label&gt;Введите пароль&lt;/label&gt;&lt;br /&gt;
    &lt;input type="password" id="passwordLogin" /&gt;&lt;br /&gt;&lt;br /&gt;
    &lt;input type="submit" id="submitLogin" value="Логин" /&gt;
&lt;/div&gt;
@section scripts{
&lt;script type="text/javascript"&gt;
    $(function () {
        //...........................

        var tokenKey = "tokenInfo";
        $('#submitLogin').click(function (e) {
            e.preventDefault();
            var loginData = {
                grant_type: 'password',
                username: $('#emailLogin').val(),
                password: $('#passwordLogin').val()
            };

            $.ajax({
                type: 'POST',
                url: '/Token',
                data: loginData
            }).success(function (data) {
                $('.userName').text(data.userName);
                $('.userInfo').css('display', 'block');
                $('.loginForm').css('display', 'none');
                // сохраняем в хранилище sessionStorage токен доступа
                sessionStorage.setItem(tokenKey, data.access_token);
                console.log(data.access_token);
            }).fail(function (data) {
                alert('При логине возникла ошибка');
            });
        });

        $('#logOut').click(function (e) {
            e.preventDefault();
            sessionStorage.removeItem(tokenKey);
        });
    })
&lt;/script&gt;
    }
</pre>
<img src="pics/accesstoken6.png" />
<img src="pics/accesstoken7.png" />
<p>Я добавил два блока. Первый невидимый для вывода информации о вошедшем пользователе и ссылкой выхода. Второй - собственно для логина.</p>
<p>По нажатию формируется js-объект:</p>
<pre class="brush:js;">
var loginData = {
    grant_type: 'password',
    username: $('#emailLogin').val(),
    password: $('#passwordLogin').val()
};
</pre>
<p>Он будет отправляться методом POST на адрес '/Token'. Поскольку за обработку запросов по этому маршруту отвечает провайдер авторизации, 
то данные запроса будут обрабатываться методом GrantResourceOwnerCredentials(), по результатам работы которого будет формироваться токен.</p>
<p>Ответом сервера в случае удачной аутентификации будет примерно следующий объект:</p>
<pre class="brush:js;">
{ 
	access_token: "u3XOCYV91f2P6odbceNIY_BnkfSpN7gQwzknsRi_.......0iRPlHYNMEES9", 
	token_type: "bearer", 
	expires_in: 1209599, 
	userName: "metanit22@mail.ru", 
	.issued: "Sat, 07 Mar 2015 21:42:16 GMT", 
	.expires: "Sat, 21 Mar 2015 21:42:16 GMT" 
}
</pre>
<p>Параметр <code>access_token</code> как раз и будет представлять токен доступа. Также в объекте передается дополнительная информация о периоде действия токена, 
нике пользователя и тип токена.</p>
<p>Для того, чтобы в коде js данный токен в дальнейшем был доступен, то он сохраняется в хранилище sessionStorage.</p>
<h3>Использование токена</h3>
<p>По умолчанию в проекте Web API  уже есть контроллер ValuesController с автосгенерированным кодом. Добавим в нему атрибут Authorize:</p>
<pre class="brush:c#;">
[Authorize]
public class ValuesController : ApiController
{
    public IEnumerable&lt;string&gt; Get()
    {
        return new string[] { "value1", "value2" };
    }
}
</pre>
<p>Добавим в представление Index.cshtml какой-либо функционал для оптравки запроса к методу get данного контроллера. Для целей тестирования 
я просто определю кнопку для отправки запроса и буду выводить полученный результат в всплывающем окне:</p>
<pre class="brush:xml;">
&lt;div&gt;
    &lt;input type="submit" id="getItemsButton" value="Получить данные" /&gt;
&lt;/div&gt;
@section scripts{
&lt;script type="text/javascript"&gt;
$(function () {
		var tokenKey = "tokenInfo";
		//..................................
        $('#getItemsButton').click(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'GET',
                url: '/api/values/',
                beforeSend: function (xhr) {
                    
                    var token = sessionStorage.getItem(tokenKey);
                    xhr.setRequestHeader("Authorization", "Bearer " + token);
                },
                success: function (data) {
                    alert(data);
                },
                fail: function (data) {
                    alert(data);
                }
            });
        });
    })
&lt;/script&gt;
}
</pre>
<p>Чтобы отправить токен, нам нужно настроить в запросе заголовок Authorization:</p>
<pre class="brush:js;">
beforeSend: function (xhr) {
                    
    var token = sessionStorage.getItem(tokenKey);
    xhr.setRequestHeader("Authorization", "Bearer " + token);
}
</pre>
<p>По ранее сохраненному ключу получаем из хранилища sessionStorage токен и формируем заголовок.</p>
<p>Теперь после получения токена мы можем осуществить запрос к методу Get контроллера HomeController:</p>
<img src="pics/accesstoken8.png" alt="Get Access Token in Web API" />
<p>В то же время если мы попытаемся напрямую через запрос в адресной строке обратиться к этому методу, то у нас ничего не получится, так как мы не передали токен доступа:</p>
<img src="pics/accesstoken9.png" alt="Set Access Token in Web API" />
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


<div class="nav"><p><a href="5.1.php">Назад</a><a href="./">Содержание</a><a href="5.3.php">Вперед</a></p></div></div>
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