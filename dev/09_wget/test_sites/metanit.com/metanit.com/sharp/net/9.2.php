<!DOCTYPE html>
<html >
<head>
<title>Команды протокола FTP в C# и .NET</title>
<meta charset="utf-8" />
<meta name="description" content="Использование класса FtpWebRequest и FtpWebResponse в C# для отправки запросов к FTP-серверу">
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
<h2>Команды протокола FTP</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Для выполнения запросов в протоколе FTP используются команды. Например, команда <code>LIST</code> предназначена для получения списка файлов каталога сервера, 
команда <code>STOR</code> применяется для сохранения файла и так далее. В .NET для отправки нужной команды нам не надо запихивать ее в тело запроса, 
так как можно использовать свойство <code>Method</code> класса FtpWebRequest.</p>
<p>Этот метод в качестве значения принимает строки, определенные в классе <span class="bb">WebRequestMethods.Ftp</span>:</p>
<ul>
<li><p><code>AppendFile</code>: добавляет в запрос команду APPE, которая используется для присоединения файла к существующему файлу на FTP-сервере</p></li>
<li><p><code>DeleteFile</code>: добавляет в запрос команду DELE, которая используется для удаления файла на FTP-сервере</p></li>
<li><p><code>DownloadFile</code>: добавляет команду RETR, которая используется для загрузки файла</p></li>
<li><p><code>GetDateTimestamp</code>: представляет команду MDTM, которая применяется для получения даты и времени из файла</p></li>
<li><p><code>GetFileSize</code>: команда SIZE, получение размера файла</p></li>
<li><p><code>ListDirectory</code>: команда NLIST, возвращает краткий список файлов на сервере</p></li>
<li><p><code>ListDirectoryDetails</code>: команда LIST, возвращает подробный список файлов на FTP-сервере</p></li>
<li><p><code>MakeDirectory</code>: команда MKD, создает каталог на FTP-сервере</p></li>
<li><p><code>PrintWorkingDirectory</code>: команда PWD, отображает имя текущего рабочего каталога</p></li>
<li><p><code>RemoveDirectory</code>: команда RMD, удаляет каталог</p></li>
<li><p><code>Rename</code>: команда RENAME, переименовывает каталог</p></li>
<li><p><code>UploadFile</code>: команда STOR, загружает файл на FTP-сервер</p></li>
<li><p><code>UploadFileWithUniqueName</code>: команда STOU, загружает файл с уникальным именем на FTP-сервер</p></li>
</ul>
<p>Однако в реальности при работе с конкретными ftp-серверами нам не все эти команды будут доступны в силу ограничений на чтение/запись на стороне сервера, которые может установить 
администратор.</p>
<p>Например, загрузим текстовый файл на фтп-сервер:</p>
<pre class="brush:c#;">
using System;
using System.IO;
using System.Net;
using System.Text;

namespace FtpConsoleClient
{
    class Program
    {
        static void Main(string[] args)
        {
            // Создаем объект FtpWebRequest - он указывает на файл, который будет создан
            FtpWebRequest request = (FtpWebRequest)WebRequest.Create("ftp://127.0.0.1/hellow.txt");
            // устанавливаем метод на загрузку файлов
            request.Method = WebRequestMethods.Ftp.UploadFile;

            // создаем поток для загрузки файла
            FileStream fs = new FileStream("D://test.txt", FileMode.Open);
            byte[] fileContents = new byte[fs.Length];
            fs.Read(fileContents, 0, fileContents.Length);
            fs.Close();
            request.ContentLength = fileContents.Length;

            // пишем считанный в массив байтов файл в выходной поток
            Stream requestStream = request.GetRequestStream();
            requestStream.Write(fileContents, 0, fileContents.Length);
            requestStream.Close();

            // получаем ответ от сервера в виде объекта FtpWebResponse
            FtpWebResponse response = (FtpWebResponse)request.GetResponse();

            Console.WriteLine("Загрузка файлов завершена. Статус: {0}", response.StatusDescription);

            response.Close();
            Console.Read();
        }
    }
}
</pre>
<p>Для загрузки на сервер у нас, естественно, должны быть права на запись. Возможно, потребуется установить логин и пароль для доступа к серверу.</p>
<p>С помощью другой команды получим содержимое сервера:</p>
<pre class="brush:c#;">
FtpWebRequest request = (FtpWebRequest)WebRequest.Create("ftp://127.0.0.1/");

request.Method = WebRequestMethods.Ftp.ListDirectoryDetails;

FtpWebResponse response = (FtpWebResponse)request.GetResponse();
Console.WriteLine("Содержимое сервера:");
Console.WriteLine();

Stream responseStream = response.GetResponseStream();
StreamReader reader = new StreamReader(responseStream);
Console.WriteLine(reader.ReadToEnd());

reader.Close();
responseStream.Close();
response.Close();
Console.Read();
</pre>
<p>Поскольку в данном случае сервер возвращает текстовую информацию о файлах и каталогах, то с помощью объекта StreamReader мы можем считать ее и вывести на консоль:</p>
<img src="pics/ftpclient.png" alt="Использование FTP в C# и .NET" />
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


<div class="nav"><p><a href="8.1.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Основы работы с сетями в C# и .NET</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/net/1.1.php">Введение в сети и протоколы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/1.2.php">Адреса в .NET</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Отправка запросов</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/net/2.1.php">Класс WebClient</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/2.2.php">Классы WebRequest и WebResponse</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/2.3.php">Отправка данных в запросе</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/2.4.php">Обработка ошибок при запросах</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Сокеты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/net/3.1.php">Класс Socket</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/3.2.php">Клиент-серверное приложение на сокетах TCP</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/3.3.php">Использование сокетов для работы с UDP</a></span></li>
			</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Протокол TCP</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/net/4.1.php">TCP-клиент. Класс TcpClient</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/4.2.php">TCP-сервер. Класс TcpListener</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/4.3.php">Многопоточное клиент-серверное приложение TCP</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/4.4.php">Консольный TCP-чат</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Протокол UDP</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/net/5.1.php">UdpClient</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/5.2.php">Широковещательная рассылка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/5.3.php">Чат c широковещательной рассылкой на Windows Forms</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Потоки</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/net/6.1.php">NetworkStream и текстовые потоки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/6.2.php">Потоки бинарных данных</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Протокол HTTP</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/net/7.1.php">HttpListener</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Работа с электронной почтой</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/net/8.1.php">Отправка почты. SmtpClient</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Протокол FTP</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/net/9.1.php">FtpWebRequest и FtpWebResponse</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/net/9.2.php">Команды протокола FTP</a></span></li>
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
	
	$("li:contains('Глава 9.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 9.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 9.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 9.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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