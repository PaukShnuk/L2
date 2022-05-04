<!DOCTYPE html>
<html >
<head>
<title>NetworkStream и текстовые потоки в C# и .NET</title>
<meta charset="utf-8" />
<meta name="description" content="Применение класса NetworkStream в C# для приема и отправки сообщений, работа с сетью с помощью текстовых потоков StreamReader и StreamWriter">
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
<h1>Потоки</h1>
<h2>NetworkStream и текстовые потоки</h2><div class="date">Последнее обновление: 14.08.2016</div>

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

<p>Для получения и отправки данных с помощью сокетов в .NET используется класс потоков <b>NetworkStream</b> из пространства имен 
System.Net.Sockets. Он наследуется от базового класса Stream. В то же время он отличается от других классов потоков тем, что он не является буферизованным и не поддерживает 
перемещение в произвольную позицию с помощью метода Seek.</p>
<p>Также при записи в поток не надо использовать метод Flush для сброса в поток всех данных.</p>
<p>Основные методы и свойства NetworkStream:</p>
<ul>
<li><p>Свойство <code>DataAvailable</code>: возвращает значение true, если в потоке есть данные. Если их нет, возвращается false.</p></li>
<li><p>Метод <code>Read(byte[] buffer, int offset, int length);</code>: считывает данные из потока в массив buffer, начиная со смещения offset. 
Количество считываемых из потока данных указывается в параметре length</p></li>
<li><p>Метод <code>Write(byte[] buffer, int offset, int length)</code>: отправляет данные из массива buffer, начиная со смещения offset, в поток. Количество 
отправляемых из массива данных указывается в параметре length</p></li>
<li><p>Метод <code>Close()</code>: закрывает поток</p></li>
</ul>
<p>При работе с NetworkStream надо учитывать, что его методы Write и Read блокируют вызывающий поток до тех пор, пока не завершится операция записи и чтения соответственно. 
Чтобы отправить данные, нам надо преобразовать их в бинарную форму:</p>
<pre class="brush:c#;">
string response = "Привет мир";
byte[] data = Encoding.UTF8.GetBytes(response);
stream.Write(data, 0, data.Length);
</pre>
<p>При получении данных метод Read считывает данные из потока также в массив байтов:</p>
<pre class="brush:c#;">
StringBuilder response = new StringBuilder();
byte[] data = new byte[256];
do
{
    int bytes = stream.Read(data, 0, data.Length);
    response.Append(Encoding.UTF8.GetString(data, 0, bytes));
}
while (stream.DataAvailable);
</pre>
<p>Поскольку удаленный хост может послать данные гораздо большего размера, чем размер буфера data, то для считывания всех данных, как правило используется 
цикл. Здесь в цикле do..while проверяем наличие данных с помощью свойства <code>stream.DataAvailable</code></p>
<p>Но подобные способы работы не всегда удобны. Создание цикла, получение данных и их перекодирование в строку, добавление в объект StringBuilder - 
все это можно упростить. И для упрощения работы с этим потоком мы можем обертывать его в другие потоки.</p>
<p>Например, если мы получаем и отправляем только текстовые данные - обычные строки, то вполне логично было бы использовать классы текстовых потоков 
StreamWriter и StreamReader.</p>
<p>Например, определим класс сервера:</p>
<pre class="brush:c#;">
using System;
using System.Net.Sockets;
using System.Net;
using System.IO;

namespace TxtServer
{
    class Program
    {
        const int PORT = 5006; // порт для прослушивания подключений
        static TcpListener listener;
        static void Main(string[] args)
        {
            try
            {
                listener = new TcpListener(IPAddress.Parse("127.0.0.1"), PORT);
                listener.Start();
                Console.WriteLine("Ожидание подключений...");

                while (true)
                {
                    TcpClient client = listener.AcceptTcpClient();
                    NetworkStream stream = client.GetStream();

                    StreamReader reader = new StreamReader(stream);
                    // считываем строку из потока
                    string message = reader.ReadLine();
                    Console.WriteLine("Получено: " + message);

                    // отправляем ответ
                    StreamWriter writer = new StreamWriter(stream);
                    message = message.ToUpper();
                    Console.WriteLine("Отправлено: " + message);
                    writer.WriteLine(message);

                    writer.Close();
                    reader.Close();
                    stream.Close();
                    client.Close();
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            finally
            {
                if (listener != null)
                    listener.Stop();
            }
        }
    }
}
</pre>
<p>И класс клиента:</p>
<pre class="brush:c#;">
using System;
using System.Net.Sockets;
using System.IO;

namespace TxtClient
{
    class Program
    {
        const int PORT = 5006;
        const string ADDRESS = "127.0.0.1";
        static void Main(string[] args)
        {
            TcpClient client = null;
            try
            {
                Console.Write("Введите сообщение: ");
                string message = Console.ReadLine();
                client = new TcpClient(ADDRESS, PORT);
                NetworkStream stream = client.GetStream();

                // отправляем сообщение
                StreamWriter writer = new StreamWriter(stream);
                writer.WriteLine(message);
                writer.Flush();

                // BinaryReader reader = new BinaryReader(new BufferedStream(stream));
                StreamReader reader = new StreamReader(stream);
                message = reader.ReadLine();
                Console.WriteLine("Получен ответ: " + message);

                reader.Close();
                writer.Close();
                stream.Close();
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            finally
            {
                if(client!=null)
                    client.Close();
            }
        }
    }
}
</pre>
<p>В классах сервера и клиента поток NetworkStream обертывается в классы StreamReader и StreamWriter. Для чтения данных достаточно применить метод 
<span class="bb">ReadLine()</span> класса StreamReader, а для отправки данных - метод <span class="bb">WriteLine()</span> класса StreamWriter. Код значительно 
упрощается. При этом надо учитывать, что если мы на сервере получаем данные с помощью ReadLine, то соответственно они должны быть посланы через 
WriteLine.</p>
<p>В качестве альтернативы потокам StreamReader и StreamWriter можно использовать потоки бинарных данных BinaryReader и BinaryWriter, используя те их методы, 
которые связаны с работой со строками. Некоторые специалисты, в частности, Албахари, указывают, что для отправки текстовой информации бинарные потоки данных 
даже предпочтительнее, чем текстовые. Потому что класс StreamReader использует буфер упреждающего чтения, что может вылиться в считывание большего количества 
байтов, чем доступно в текущий момент. Что в результате может привести к блокировке потока.</p>
<p>Теперь применим бинарные потоки для чтения и отправки текста, изменив код сервера:</p>
<pre class="brush:c#;">
using System;
using System.Net.Sockets;
using System.Net;
using System.IO;

namespace TxtServer
{
    class Program
    {
        const int PORT = 5006; // порт для прослушивания подключений
        static TcpListener listener;
        static void Main(string[] args)
        {
            try
            {
                listener = new TcpListener(IPAddress.Parse("127.0.0.1"), PORT);
                listener.Start();
                Console.WriteLine("Ожидание подключений...");

                while (true)
                {
                    TcpClient client = listener.AcceptTcpClient();
                    NetworkStream stream = client.GetStream();
					
                    BinaryReader reader = new BinaryReader(stream);
                    // считываем строку из потока
                    string message = reader.ReadString();
                    Console.WriteLine("Получено: " + message);

                    // отправляем ответ
                    BinaryWriter writer = new BinaryWriter(stream);
                    message = message.ToUpper();
                    Console.WriteLine("Отправлено: " + message);
                    writer.Write(message);
                    writer.Flush();
					
                    writer.Close();
                    reader.Close();
                    stream.Close();
                    client.Close();
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            finally
            {
                if (listener != null)
                    listener.Stop();
            }
        }
    }
}
</pre>
<p>И соответственно изменим код клиента:</p>
<pre class="brush:c#;">
using System;
using System.Net.Sockets;
using System.IO;

namespace TxtClient
{
    class Program
    {
        const int PORT = 5006;
        const string ADDRESS = "127.0.0.1";
        static void Main(string[] args)
        {
            TcpClient client = null;
            try
            {
                client = new TcpClient(ADDRESS, PORT);
                Console.Write("Введите сообщение: ");
                string message = Console.ReadLine();
                NetworkStream stream = client.GetStream();

                // отправляем сообщение
                BinaryWriter writer = new BinaryWriter(stream);
                writer.Write(message);
                writer.Flush();

                BinaryReader reader = new BinaryReader(stream);
                message = reader.ReadString();
                Console.WriteLine("Получен ответ: " + message);

                reader.Close();
                writer.Close();
                stream.Close();
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            finally
            {
                if(client!=null)
                    client.Close();
            }
        }
    }
}
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