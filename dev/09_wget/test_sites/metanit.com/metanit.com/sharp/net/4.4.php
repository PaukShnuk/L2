<!DOCTYPE html>
<html >
<head>
<title>Консольный TCP-чат в C# и .NET</title>
<meta charset="utf-8" />
<meta name="description" content="Создание многопоточного консольный TCP-чат в C#, многопоточная обработка запросов на сервере">
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
<h2>Консольный TCP-чат</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Напишем более менее осмысленную программу - консольный tcp-чат.</p>
<p>Вначале создадим консольный проект сервера, который назовем ChatServer. В этот проект добавим два новых класса <span class="bb">ClientObject</span> 
и <span class="bb">ServerObject</span>. Класс ClientObject будет выглядеть так:</p>
<pre class="brush:c#;">
using System;
using System.Net.Sockets;
using System.Text;

namespace ChatServer
{
    public class ClientObject
    {
        protected internal string Id { get; private set; }
        protected internal NetworkStream Stream {get; private set;}
        string userName;
        TcpClient client;
        ServerObject server; // объект сервера

        public ClientObject(TcpClient tcpClient, ServerObject serverObject)
        {
            Id = Guid.NewGuid().ToString();
            client = tcpClient;
            server = serverObject;
            serverObject.AddConnection(this);
        }

        public void Process()
        {
            try
            {
                Stream = client.GetStream();
                // получаем имя пользователя
                string message = GetMessage();
                userName = message;

                message = userName + " вошел в чат";
                // посылаем сообщение о входе в чат всем подключенным пользователям
                server.BroadcastMessage(message, this.Id);
                Console.WriteLine(message);
                // в бесконечном цикле получаем сообщения от клиента
                while (true)
                {
                    try
                    {
                        message = GetMessage();
                        message = String.Format("{0}: {1}", userName, message);
                        Console.WriteLine(message);
                        server.BroadcastMessage(message, this.Id);
                    }
                    catch
                    {
                        message = String.Format("{0}: покинул чат", userName);
                        Console.WriteLine(message);
                        server.BroadcastMessage(message, this.Id);
                        break;
                    }
                }
            }
            catch(Exception e)
            {
                Console.WriteLine(e.Message);
            }
            finally
            {
                // в случае выхода из цикла закрываем ресурсы
                server.RemoveConnection(this.Id);
                Close();
            }
        }

        // чтение входящего сообщения и преобразование в строку
        private string GetMessage()
        {
            byte[] data = new byte[64]; // буфер для получаемых данных
            StringBuilder builder = new StringBuilder();
            int bytes = 0;
            do
            {
                bytes = Stream.Read(data, 0, data.Length);
                builder.Append(Encoding.Unicode.GetString(data, 0, bytes));
            }
            while (Stream.DataAvailable);

            return builder.ToString();
        }

        // закрытие подключения
        protected internal void Close()
        {
            if (Stream != null)
                Stream.Close();
            if (client != null)
                client.Close();
        }
    }
}
</pre>
<p>У объекта ClientObject будет устанавливаться свойство Id, которое будет уникально его идентифицировать, и свойство Stream, хранящее поток для взаимодействия 
с клиентом. При создании нового объекта в конструкторе будет происходить его добавление в коллекцию подключений класса ServerObject, который мы далее создадим:</p>
<pre class="brush:c#;">serverObject.AddConnection(this);</pre>
<p>Основные действия происходят в методе <code>Process()</code>, в котором реализован простейший протокол для обмена сообщениями с клиентом. Так, 
в начале получаем имя подключенного пользователя, а затем в цикле получаем все остальные сообщения. Для трансляции этих сообщений всем остальным клиентам будет 
использоваться метод <code>BroadcastMessage()</code> класса ServerObject.</p>
<p>Класс ServerObject будет выглядеть таким образом:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Sockets;
using System.Net;
using System.Text;
using System.Threading;

namespace ChatServer
{
    public class ServerObject
    {
        static TcpListener tcpListener; // сервер для прослушивания
        List&lt;ClientObject&gt; clients = new List&lt;ClientObject&gt;(); // все подключения

        protected internal void AddConnection(ClientObject clientObject)
        {
            clients.Add(clientObject);
        }
        protected internal void RemoveConnection(string id)
        {
            // получаем по id закрытое подключение
            ClientObject client = clients.FirstOrDefault(c =&gt; c.Id == id);
            // и удаляем его из списка подключений
            if (client != null)
                clients.Remove(client);
        }
		// прослушивание входящих подключений
        protected internal void Listen()
        {
            try
            {
                tcpListener = new TcpListener(IPAddress.Any, 8888);
                tcpListener.Start();
                Console.WriteLine("Сервер запущен. Ожидание подключений...");

                while (true)
                {
                    TcpClient tcpClient = tcpListener.AcceptTcpClient();

                    ClientObject clientObject = new ClientObject(tcpClient, this);
                    Thread clientThread = new Thread(new ThreadStart(clientObject.Process));
                    clientThread.Start();
                }
            }
            catch(Exception ex)
            {
                Console.WriteLine(ex.Message);
                Disconnect();
            }
        }

        // трансляция сообщения подключенным клиентам
        protected internal void BroadcastMessage(string message, string id)
        {
            byte[] data = Encoding.Unicode.GetBytes(message);
            for (int i = 0; i &lt; clients.Count; i++)
            {
                if (clients[i].Id!= id) // если id клиента не равно id отправляющего
                {
                    clients[i].Stream.Write(data, 0, data.Length); //передача данных
                }
            }
        }
        // отключение всех клиентов
        protected internal void Disconnect()
        {
            tcpListener.Stop(); //остановка сервера

            for (int i = 0; i &lt; clients.Count; i++)
            {
                clients[i].Close(); //отключение клиента
            }
            Environment.Exit(0); //завершение процесса
        }
    }
}
</pre>
<p>Все подключенные клиенты будут храниться в коллекции clients. С помощью методов AddConnection и RemoveConnection мы можем управлять добавлением / удалением 
объектов из этой коллекции.</p>
<p>Основной метод - <code>Listen()</code>, в котором будет осуществляться прослушивание всех входящих подключений. При получении подключения будет запускаться новый поток, 
в котором будет выполняться метод Process объекта ClientObject.</p>
<p>Для передачи сообщений всем клиентам, кроме отправившего, предназначен метод <code>BroadcastMessage()</code>.</p>
<p>Таким образом разделяются сущность подключенного клиента и сущность сервера.</p>
<p>Теперь надо запустить прослушивание в основном классе программы. Для этого изменим класс Program:</p>
<pre class="brush:c#">
using System;
using System.Threading;

namespace ChatServer
{
    class Program
    {
        static ServerObject server; // сервер
        static Thread listenThread; // потока для прослушивания
        static void Main(string[] args)
        {
            try
            {
                server = new ServerObject();
                listenThread = new Thread(new ThreadStart(server.Listen));
                listenThread.Start(); //старт потока
            }
            catch (Exception ex)
            {
                server.Disconnect();
                Console.WriteLine(ex.Message);
            }
        }
    }
}
</pre>
<p>Здесь просто запускается новый поток, который обращается к методу <code>Listen()</code> объекта ServerObject.</p>
<p>Теперь создадим новый консольный проект для клиента, который назовем ChatClient. Изменим его стандартный класс Program следующим образом:</p>
<pre class="brush:c#;">
using System;
using System.Threading;
using System.Net.Sockets;
using System.Text;

namespace ChatClient
{
    class Program
    {
        static string userName;
        private const string host = "127.0.0.1";
        private const int port = 8888;
        static TcpClient client;
        static NetworkStream stream;

        static void Main(string[] args)
        {
            Console.Write("Введите свое имя: ");
            userName = Console.ReadLine();
            client = new TcpClient();
            try
            {
                client.Connect(host, port); //подключение клиента
                stream = client.GetStream(); // получаем поток

                string message = userName;
                byte[] data = Encoding.Unicode.GetBytes(message);
                stream.Write(data, 0, data.Length);

                // запускаем новый поток для получения данных
                Thread receiveThread = new Thread(new ThreadStart(ReceiveMessage));
                receiveThread.Start(); //старт потока
                Console.WriteLine("Добро пожаловать, {0}", userName);
                SendMessage();
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            finally
            {
                Disconnect();
            }
        }
		// отправка сообщений
        static void SendMessage()
        {
            Console.WriteLine("Введите сообщение: ");
            
            while (true)
            {
                string message = Console.ReadLine();
                byte[] data = Encoding.Unicode.GetBytes(message);
                stream.Write(data, 0, data.Length);
            }
        }
		// получение сообщений
        static void ReceiveMessage()
        {
            while (true)
            {
                try
                {
                    byte[] data = new byte[64]; // буфер для получаемых данных
                    StringBuilder builder = new StringBuilder();
                    int bytes = 0;
                    do
                    {
                        bytes = stream.Read(data, 0, data.Length);
                        builder.Append(Encoding.Unicode.GetString(data, 0, bytes));
                    }
                    while (stream.DataAvailable);

                    string message = builder.ToString();
                    Console.WriteLine(message);//вывод сообщения
                }
                catch
                {
                    Console.WriteLine("Подключение прервано!"); //соединение было прервано
                    Console.ReadLine();
                    Disconnect();
                }
            }
        }

        static void Disconnect()
        {
            if(stream!=null)
                stream.Close();//отключение потока
            if(client!=null)
                client.Close();//отключение клиента
            Environment.Exit(0); //завершение процесса
        }
    }
}
</pre>
<p>Чтобы не блокировать ввод сообщений в главном потоке, для получения сообщений создается новый поток, который обращается к методу ReceiveMessage.</p>
<p>Работа одного из клиентов:</p>
<div class="console">
<pre class="consoletext">
Введите свое имя: Евгений
Добро пожаловать, Евгений
Введите сообщение:
Олег вошел в чат
привет мир
Олег: привет чат
</pre>
</div>
<p>Работа сервера:</p>
<div class="console">
<pre class="consoletext">
Сервер запущен. Ожидание подключений...
Евгений вошел в чат
Олег вошел в чат
Евгений: привет мир
Олег: привет чат
</pre>
</div>
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


<div class="nav"><p><a href="4.3.php">Назад</a><a href="./">Содержание</a><a href="5.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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