<!DOCTYPE html>
<html >
<head>
<title>Фильтры исключений | ASP.NET MVC 5</title>
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
<h2>Фильтры исключений</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Фильтры исключений срабатывают, если при выполнении метода действия будет выброшено необработанное исключение.</p>
<p>С одной стороны, мы могли поместить всю логику выполнения метода в блок try...catch и отследить исключение. Однако область работы фильтров 
исключения несколько шире. Они позволяют отследить не только исключения, возникающие в самом методе, но исключения, генерируемые 
результатами действий, а также другими применяемыми к данному действию фильтрами. В этом и состоит мощь данного типа фильтров.</p>
<p>Все фильтры исключений должны применять интерфейс <span class="bb">IExceptionFilter</span>:</p>
<pre class="brush:c#;">
public interface IExceptionFilter
{
	void OnException(ExceptionContext filterContext);
}
</pre>
<p>И если вдруг приложение выбрасывает необрабатываемое исключение, то фильтр вызывает метод <code>OnException</code>.</p>
<p>Передаваемый в этот метод параметр - <code>ExceptionContext</code> является объектом, производным от <code>ControllerContext</code>. 
Поэтому из него можно извлечь как специфичную для фильтра информацию, так и общую информацию о запросе.</p>
<p>В частности класс ExceptionContext обладает следующими свойствами, которые позволяют получить информацию об исключении:</p>
<table class="tab">
<tr class="tabhead"><td><p>Свойство</p></td><td><p>Тип</p></td><td><p>Описание</p></td></tr>
<tr><td><p>ActionDescriptor</p></td><td><p>ActionDescriptor</p></td><td><p>Содержит информацию о методе действия, на котором было выброшено исключение</p></td></tr>
<tr><td><p>Exception</p></td><td><p>Exception</p></td><td><p>Представляет само необработанное исключение</p></td></tr>
<tr><td><p>ExceptionHandled</p></td><td><p>bool</p></td><td><p>Значение, показывающее, считается ли исключение обработанным. Если мы на фильтре помечаем 
его значение в true, то исключение считается обработанным</p></td></tr>
<tr><td><p>Result</p></td><td><p>ActionResult</p></td><td><p>Результат метода действия, к которому применяется фильтр исключения</p></td></tr>
</table>
<p>С помощью свойства <code>Exception</code> мы можем получить доступ к выбрасываемому исключению.</p>
<p>Установив свойство <code>ExceptionHandled</code> в true, фильтр тем самым помечает исключение как обработанное.</p>
<p>С помощью свойства <code>Result</code> фильтр управляет результатом действий. Общераспространенной практикой в данном случае является 
перенаправление пользователя на страницу ошибки или отображение ошибки на экране.</p>
<p>Теперь создадим простенький фильтр, который будет обрабатывать исключение <code>IndexOutOfRangeException</code>:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Filters.Filters
{
    public class IndexException : FilterAttribute, IExceptionFilter
    {

        public void OnException(ExceptionContext exceptionContext)
        {
            if (!exceptionContext.ExceptionHandled && exceptionContext.Exception is IndexOutOfRangeException)
            {
                exceptionContext.Result = new RedirectResult("/Content/ExceptionFound.html");
                exceptionContext.ExceptionHandled = true;
            }
        }
    }
}
</pre>
<p>Здесь в методе <code>OnException</code> первым делом мы проверяем, не установлено ли значение свойства <code>ExceptionHandled</code>. 
Если оно установлено в true, следовательно, какой-то другой фильтр исключений уже обработал данное исключение. Также проверяется тип исключения. 
Поскольку мы ловим в данном случае только исключения типа <code>IndexOutOfRangeException</code>, следовательно, нас только они интересуют.</p>
<p>Далее мы устанавливаем результат метода, к которому применен фильтр. Предполагается, что в проекте в каталоге Content у нас находится 
некоторая страница <i>ExceptionFound.html</i>, которая отображает пользователю сообщение об ошибке.</p>
<p>В данном случае важно пометить исключение как обработанное: <code>exceptionContext.ExceptionHandled = true</code>. Иначе, если мы этого не сделаем, 
то мы можем увидеть в браузере все диагностическое сообщение об ошибке, которое обычно посылает фреймворк в ответ клиенту.</p>
<p>Пример использования:</p>
<pre class="brush:c#;">
[IndexException]
public ActionResult Index()
{
    int[] mas = new int[2];
    mas[6] = 4;
    return View();
}
</pre>
<p>В данном случае метод Index выбросит необработанное исключение, и оно будет объектом типа <code>IndexOutOfRangeException</code>, а 
пользователь будет перенаправлен на страницу <span class="ii">ExceptionFound.html</span>.</p>
<p>Подобным образом мы можем обработать и другие типы исключений.</p>
<h3>HandleErrorAttribute. Встроенная обработка исключений.</h3>
<p>Создавать свои фильтры исключений необязательно, так как во фреймворке имеется встроенная реализация интерфейса IExceptionFilter - 
атрибут HandleErrorAttribute. Он имеет ряд свойств, с помощью которых мы можем произвести гибкую настройку фильтра:</p>
<table class="tab">
<tr class="tabhead"><td><p>Свойство</p></td><td><p>Тип</p></td><td><p>Описание</p></td></tr>
<tr><td><p>ExceptionType</p></td><td><p>Type</p></td><td><p>Представляет тип обрабатываемого исключения. По умолчанию используется 
<code>System.Exception</code></p></td></tr>
<tr><td><p>View</p></td><td><p>string</p></td><td><p>Имя представления, которое рендерится данным фильтром. Если значение не задано, 
то по умолчанию используются следующие пути: <span class="ii">/Views/Имя_контроллера/Error.cshtml</span> или <span class="ii">/Views/Shared/Error.cshtml</span></p></td></tr>
<tr><td><p>Master</p></td><td><p>string</p></td><td><p>Имя используемой мастер-страницы</p></td></tr>
</table>
<p>При обработке исключения фильтр исключений посылает статусный код HTTP 500 и генерирует указанное в свойстве View представление. Например, 
используем предыдущий пример с фильтром исключений, применив встроенную реализацию:</p>
<pre class="brush:c#;">
[HandleError(ExceptionType = typeof(System.IndexOutOfRangeException), View = "ExceptionFound")]
public ActionResult About()
{
    int[] mas = new int[2];
    mas[6] = 4;
    return View();
}
</pre>
<p>В данном случае очевидно, что на строке <code>mas[6] = 4;</code> будет выброшено исключение. В режиме отладки у вас приостановится выполнение программы, 
тогда вы можете нажать на кнопку Continue на панели инструментов. Здесь опять мы обрабатываем исключение типа IndexOutOfRangeException, и при возникновении такового генерируем в ответ 
представление <span class="ii">ExceptionFound.cshtml</span>. Данное представление должно находиться в проекте в каталоге <span class="ii">Views/Имя_контроллера/</span>.</p>
<p>Сразу надо сказать, что если вы хотите при разработке видеть обрабатываемые фильтром HandleErrorAttribute, то надо включить данную функциональность в файле 
конфигурации <i>web.config</i> с помощью тега <code>&lt;customErrors mode="On"  /&gt;</code>:</p>
<pre class="brush:xml;">
&lt;system.web&gt;
    &lt;customErrors mode="On"  /&gt;
	
	&lt;!-- далее остальное содержание узла system.web --&gt;
&lt;/system.web&gt;
</pre>
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


<div class="nav"><p><a href="./8.3.php">Назад</a><a href="./">Содержание</a><a href="./8.5.php">Вперед</a></p></div></div>
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
<ul><li><span class="file"><a href="1.1.php">Особенности ASP.NET MVC. Что нового в MVC 5</a></span></li>
<li><span class="file"><a href="1.2.php">Начало работы с ASP.NET MVC 5</a></span></li></ul>
</li>
<li class="closed"><span class="folder">Глава 2. Создание первого приложения ASP.NET MVC 5</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/2.1.php">Создание проекта</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/2.2.php">Создание контроллера и представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/2.3.php">Стилизация приложения</a></span></li>
	</ul>
</li>
	<li class="closed"><span class="folder">Глава 3. Контроллеры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.1.php">Основы контроллеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.2.php">Методы действий и их параметры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.3.php">Результаты действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.4.php">ViewResult и генерация представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.5.php">Переадресация и отправка кодов статуса и ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.6.php">Отправка файлов в ASP.NET MVC 5</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.7.php">Контекст запроса HttpContext. Куки. Сессии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.8.php">Асинхронные методы в ASP.NET MVC 5</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Представления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.1.php">Введение в представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.2.php">Строго типизированные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.3.php">Мастер-страницы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.4.php">Частичные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.5.php">HTML-хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.6.php">Работа с формами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.7.php">Строго типизированные хелперы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.1.php">Модели и БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.2.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.3.php">Шаблонные хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.4.php">Редактирование данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.5.php">Добавление и удаление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.6.php">Шаблоны формирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.7.php">Модели со сложной структурой</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.8.php">Работа со сложными моделями</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.9.php">Модели со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.10.php">Работа с моделями со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.11.php">Передача массивов и сложных данных в контроллер</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.12.php">Миграция баз данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.13.php">Создание пагинации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.14.php">Переопределение шаблонов формирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.15.php">Переопределение шаблонов отображения и редактирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.16.php">Фильтрация данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.17.php">Domain Model и View Model</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.18.php">Управление иерархическими данными</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.2.php">Работа с маршрутами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.3.php">Создание ограничений для маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.4.php">Генерация исходящих адресов URL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.5.php">Области в ASP.NET MVC 5</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.6.php">Создание собственного обработчика маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.7.php">Атрибуты маршрутизации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.8.php">Маршрутизация и вложенные ресурсы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Метаданные и валидация модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.1.php">Аннотации данных для отображения свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.2.php">Основы валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.3.php">Атрибуты валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.4.php">Валидация модели в контроллере</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.5.php">Отображение ошибок валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.6.php">Создание собственной логики валидации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Фильтры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.1.php">Фильтры в ASP.NET MVC 5</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.2.php">Фильтры аутентификации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.3.php">Фильтры авторизации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.4.php">Фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.5.php">Фильтры действий и результатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.8.php">Примеры фильтров действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.6.php">Глобальные фильтры и переопределение фильтров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.7.php">Дополнительные встроенные фильтры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.9.php">Логгирование исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Привязка модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.1.php">Введение в привязку моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.2.php">DefaultModelBinder</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.3.php">Явная привязка модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.4.php">Поставщики значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.5.php">Создание привязчика модели</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. JavaScript и AJAX</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.1.php">Использование JavaScript</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.2.php">Введение в AJAX</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.3.php">Ajax-Формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.4.php">Параметры объекта AjaxOptions</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.5.php">AJAX-ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.6.php">Формат JSON</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.7.php">AJAX-запросы с помощью jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.8.php">Создание чата на AJAX и jQuery. Часть 1</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.9.php">Создание чата на AJAX и jQuery. Часть 2</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. OWIN и Katana</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/11.1.php">Введение в OWIN и Katana</a></span></li>
		</ul>
	</li>			
	<li class="closed"><span class="folder">Глава 12. Авторизация и аутентификация в MVC 5</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.1.php">ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.14.php">Базовые классы AspNet Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.2.php">Авторизация через внешние сервисы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.3.php">Переопределение системы AspNet Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.4.php">Работа с ролями в AspNet Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.5.php">Аутентификация форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.6.php">Использование объектов Claim</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.7.php">Настройка валидации пароля в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.13.php">Валидация пользователя в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.8.php">Подтверждение Email в ASP.NET Identity 2.0</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.9.php">Подтверждение телефона по SMS в ASP.NET Identity 2.0</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.10.php">Сброс пароля в ASP.NET Identity 2.0</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.11.php">Универсальные провайдеры в MVC 5</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.12.php">Переопределение универсальных провайдеров. Провайдер ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.15.php">Создание приложения с ASP.NET Identity с нуля</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.16.php">Регистрация и создание пользователей в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.17.php">Авторизация пользователей в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.18.php">Редактирование и удаление пользователей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.19.php">Добавление ролей в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.20.php">Аутентификация OWIN и ClaimsIdentity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.21.php">Авторизация на основе Claims</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Бандлы и минификация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/13.1.php" >Введение в бандлы и минификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/13.2.php" >Создание бандлов. Библиотеки из CDN</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Bootstrap в ASP.NET MVC 5</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.1.php">Введение в Bootstrap</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.2.php">Позиционирование элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.3.php">Компоненты Bootstrap</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.4.php">Работа с формами в Bootstrap</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.5.php">Работа с таблицами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.6.php">Модальные окна</a></span></li>
		</ul>
	</li>
<li class="closed"><span class="folder">Глава 16. SignalR 2</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.1.php">Введение в SignalR 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.2.php">Первое приложение с SignalR 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.3.php">Persistent Connection API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.4.php">Рисовалка на SignalR</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.5.php">Push-уведомления</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 17. Работа с jQuery UI и визуальными элементами</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.1.php">jQuery UI и Autocomplete</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.2.php">Диалоговые окна и CRUD-интерфейс</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.8.php">Валидация в диалоговых окнах</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.3.php">Грид JqGrid в ASP.NET MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.4.php">Пагинация в JqGrid</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.5.php">Поиск по таблице в JqGrid</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.6.php">CRUD-операции в JqGrid</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.7.php">Постраничный вывод</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.9.php">Использование Datepicker jQuery</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.10.php">Локализация дат</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 18. Тестирование веб-приложений</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.1.php">Введение в тестирование. Test-Driven Development</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.2.php">Создание проекта для юнит-тестов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.3.php">Создание юнит-тестов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.4.php">Слабосвязанные объекты и тестирование работы с БД</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.5.php">Фреймворк Moq</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.6.php">Тестирование создания модели и переадресации</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 19. Управление жизненным циклом приложения</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.1.php">Жизненный цикл приложения и запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.2.php">Модули</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.3.php">Создание собственного модуля</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.4.php">Взаимодействие между модулями. События модулей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.5.php">HTTP-обработчики. Создание обработчиков</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.6.php">Создание асинхронных HTTP-обработчиков</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.7.php">Переопределение HTTP-обработчика</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.8.php">Выполнение действий по таймеру</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 20. Кэширование в ASP.NET MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.1.php">Атрибут OutputCache</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.2.php">Параметры кэширования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.3.php">Профили кэширования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.4.php">Динамическое управление кэшем</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.5.php">Кэширование статического контента</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.6.php">MemoryCache</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 21. Внедрение зависимостей в ASP.NET MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.1.php">Инверсия управления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.2.php">IoC-контейнер Ninject</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.3.php">Внедрение зависимостей с параметрами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.4.php">IoC-контейнер Autofac</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.5.php">IoC-контейнер Castle Windsor</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 22. URL Rewriting</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/22.1.php">Введение в URL Rewriting</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/22.2.php">Переменные сервера и обратные ссылки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/22.3.php">Примеры правил URL Rewriting</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 23. Архитектура приложений</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.1.php">Onion-архитектура. Часть 1</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.2.php">Onion-архитектура. Часть 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.3.php">Паттерн Unit of Work</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.4.php">AutoMapper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.5.php">Многоуровневая архитектура</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.6.php">Монолитная архитектура</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.7.php">Data Access Layer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.8.php">Business Logic Layer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.9.php">Presentation Layer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.10.php">ASP.NET Identity в многоуровневой архитектуре. Часть 1</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.11.php">ASP.NET Identity в многоуровневой архитектуре. Часть 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.12.php">ASP.NET Identity в многоуровневой архитектуре. Часть 3</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 24. Дополнительные статьи</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.1.php">Действия по расписанию и Quartz.NET</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.2.php">Настройка страниц ошибок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.3.php">Удаленное тестирование приложения</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.4.php">Приложение на Angular 2/8</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.5.php">Генерация Sitemap.xml</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.6.php">Загрузка файлов на сервер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.7.php">Локализация чисел decimal</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.8.php">Загрузка файлов в БД</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.9.php">Работа конвейера веб-сервера IIS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.10.php">Жизненный цикл приложения</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.11.php">Подгрузка с прокруткой списка в MVC и Web API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.12.php">Загрузка файла через AJAX в MVC и Web API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.13.php">Динамическая загрузка списка по выбору из другого списка</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.14.php">PostgreSQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.15.php">Сжатие изображений с помощью ImageResizer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.16.php">Архивация файлов на лету</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.17.php">Работа с MySQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.18.php">Dapper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.19.php">Динамическая локализация</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 25. React.JS</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/25.1.php">Подключение React в ASP.NET MVC 5</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/25.2.php">Взаимодействие React.JS и ASP.NET</a></span></li>
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