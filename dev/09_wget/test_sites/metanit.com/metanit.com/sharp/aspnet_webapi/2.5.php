<!DOCTYPE html>
<html >
<head>
<title>Форматировщики медиа-типов в ASP.NET Web API</title>
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
<h2>Форматировщики медиа-типов</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p>
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

<p>Форматировщики медиа-типов отвечают за сериализацию данных для их отправки клиенту. WebApi имеет несколько встроенных форматировщиков. 
Однако мы не ограничены только этими двумя типами и при желании может создать свой, заточенный под определенные нужды. Все форматировщики содержатся в коллекции <code>HttpConfiguration.Formatters</code>. 
Эта коллекция представляет объект <code>MediaTypeFormatterCollection</code> и предоставляет прямой доступ к встроенным форматировщикам медиа-типов 
с помощью следующих свойств:</p>
<ul>
<li><p><span class="bb">FormUrlEncodedFormatter</span>: возвращает объкт <code>FormUrlEncodedMediaTypeFormatter</code>, который парсит 
данные формы в процессе привязки модели</p></li>
<li><p><span class="bb">JsonFormatter</span>: возвращает объект <code>JsonMediaTypeFormatter</code>, который сериализует данные в формат JSON</p></li>
<li><p><span class="bb">XmlFormatter</span>: возвращает объект <code>XmlMediaTypeFormatter</code>, который сериализует данные в формат xml</p></li>
</ul>
<p>Пространство имен <code>System.Net.Http.Formatting</code> также включает еще один класс форматировщика - "BsonMediaTypeFormatter", который управляет 
сериализацией в формат BSON. Однако в данный момент реализация поддержки спецификации BSON слабо реализована в клиентах. Поэтому по умолчанию данный 
форматировщик отключен.</p>
<p>Создадим свой класс форматировщика ответа. Для этого определим в проекте для Web Api специальную папку Util, в которую добавим следующий класс 
BookFormatter:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.IO;
using System.Net;
using System.Net.Http;
using System.Net.Http.Formatting;
using System.Net.Http.Headers;
using System.Text;
using System.Threading.Tasks;
using WebApiApp.Models;

namespace WebApiApp.Util
{
    class BookFormatter : MediaTypeFormatter
    {
        public BookFormatter()
        {
            SupportedMediaTypes.Add(new MediaTypeHeaderValue("application/x-books"));
        }
        public override bool CanReadType(Type type)
        {
            return type == typeof(Book) || type == typeof(IEnumerable&lt;Book&gt;);
        }
        public override bool CanWriteType(Type type)
        {
            return type == typeof(Book) || type == typeof(IEnumerable&lt;Book&gt;);
        }
        public override async Task WriteToStreamAsync(Type type, object value,
                Stream writeStream, HttpContent content, TransportContext transportContext)
        {
            List&lt;string&gt; booksString = new List&lt;string&gt;();
            IEnumerable&lt;Book&gt; books = value is Book ? new Book[]  { (Book)value } : (IEnumerable&lt;Book&gt;)value;
            foreach (Book b in books)
            {
                booksString.Add(string.Format("{0},{1},{2}", b.Id, b.Name, b.Year));
            }
            StreamWriter writer = new StreamWriter(writeStream);
            await writer.WriteAsync(string.Join(",", booksString));
            writer.Flush();
        }
    }
}
</pre>
<p>Для создания форматировщика нам надо унаследовать класс от <span class="bb">MediaTypeFormatter</span> и переопределить ряд его методов.</p>
<p>В конструкторе форматировщика добавляется новый медиа-тип:</p>
<pre class="brush:c#;">
SupportedMediaTypes.Add(new MediaTypeHeaderValue("application/x-books"));
</pre>
<p>Форматировщик поддерживает коллекцию <code>SupportedMediaTypes</code>, которая определяет набор mime-типов - объектов <span class="bb">MediaTypeHeaderValue</span>, 
которые используются в заголовках при взаимодействии клиента и сервера. MIME-тип задается по принципу <code>type/subtype</code>. Для личных mime-типов перед подтипом указывается префикс <i>x.</i></p>
<p>Также переопределяем методы CanReadType и CanWriteType. Метод <code>CanReadType</code> участвует в привязке моделей, а метод 
<code>CanWriteType</code> позволяет указать, может ли данный форматировщик сериализовать объект данного типа. Форматировщик будет отвечать за работу 
с типом Book, поэтому он будет обрабатывать те данные, которые представляют либо единичный объект Book, либо коллекцию этих объектов.</p>
<p>Сама сериализация данных производится в асинхронном методе <code>WriteToStreamAsync</code>, который принимает пять параметров:</p>
<ul>
<li><p><span class="bb">type</span>: тип сериализуемого объекта</p></li>
<li><p><span class="bb">value</span>: сам объект для сериализации</p></li>
<li><p><span class="bb">writeStream</span>: поток, в который будет сериализоваться ответ</p></li>
<li><p><span class="bb">content</span>: объект, предоставляющий доступ к заголовкам ответа</p></li>
<li><p><span class="bb">transportContext</span>: объект, предоставляющий информацию об используемом сетевом транспорте</p></li>
</ul>
<p>Суть метода <code>WriteToStreamAsync</code> - составление из значений отдельных свойств модели строки, в которой все эти значения разделены запятыми. 
Данный способ сериализации очень примитивен и приводится только в целях демонстрации.</p>
<p>В конце список строк записывается в поток методом <code>WriteAsync()</code>, при этом нам не надо закрывать поток.</p>
<p>После создания форматировщика его надо зарегистрировать в файле WebApiConfig.cs:</p>
<pre class="brush:c#;">
public static class WebApiConfig
{
    public static void Register(HttpConfiguration config)
    {
        config.Routes.MapHttpRoute(
            name: "DefaultApi",
            routeTemplate: "api/{controller}/{id}",
            defaults: new { id = RouteParameter.Optional }
        );
		
		// добавление форматировщика
        config.Formatters.Add(new BookFormatter());
    }
}
</pre>
<p>Добавление происходит в коллекцию форматировщиков Formatters, которая определена у объекта конфигурации HttpConfiguration.</p>
<p>На уровне контроллера нам менять ничего не надо, методы, как и раньше, отдают клиенту объекты:</p>
<pre class="brush:c#;">
public IEnumerable&lt;Book&gt; Get()
{
    IEnumerable&lt;Book&gt; books = new List&lt;Book&gt; 
    { 
        new Book {Id=1, Name="Война и мир", Year=1863},
        new Book {Id=2, Name="Отцы и дети", Year=1862},
        new Book {Id=3, Name="Евгений Онегин", Year=1831},
    };
    return books;
}
</pre>
<p>И теперь надо настроить получение данных в представлении:</p>
<pre class="brush:xml;">
&lt;div id="tableBlock"&gt;&lt;/div&gt;

@section scripts
{
    &lt;script type="text/javascript"&gt;
    $(document).ready(function () {

        GetAllBooks();

    });
    // Получение всех книг по ajax-запросу
    function GetAllBooks() {

        $.ajax({
            url: '/api/values',
            type: 'GET',
            dataType: "text",
            accepts: {
                text: "application/x-books"
            },
            success: function (data) {

                WriteResponse(data);
            }
        });
    };
 // вывод полученных данных на экран
    function WriteResponse(data) {
        var strResult = "&lt;table&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Название&lt;/th&gt;&lt;th&gt;Год Издания&lt;/th&gt;";
        var arr = data.split(",");
        for (var i = 0; i &lt; arr.length; i += 3) {
            strResult += "&lt;tr&gt;&lt;td&gt;" + arr[i] + "&lt;/td&gt;&lt;td&gt; " + arr[i+1] + "&lt;/td&gt;&lt;td&gt;"
                + arr[i+2] + "&lt;/td&gt;&lt;/tr&gt;";
        }
        strResult += "&lt;/table&gt;";
        console.log(strResult);
        $("#tableBlock").html(strResult);
    }
   
    &lt;/script&gt;
}
</pre>
<p>Ключевым моментом здесь является установка типа данных и заголовка Accept с принимаемым MIME-типом:</p>
<pre class="brush:js;">
dataType: "text",
accepts: {
        text: "application/x-books"
}
</pre>
<p>Настройка <code>dataType</code> указывает, что данные ответа надо обрабатывать как текст, а параметр <code>accepts</code> позволит обмениваться с сервером 
данными в указанном MIME-типе.</p>
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


<div class="nav"><p><a href="2.4.php">Назад</a><a href="./">Содержание</a><a href="2.6.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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