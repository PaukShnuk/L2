<!DOCTYPE html>
<html >
<head>
<title>Чтение и запись файла. Класс FileStream в Visual Basic</title>
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
<h2>Чтение и запись файла. Класс FileStream</h2><div class="date">Последнее обновление: 30.10.2015</div>

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

<p>Как правила, работа с файлами в большинстве своем заключается в чтении и записи файлов. Подобной функицональностью обладает 
класс FileStream. Он представляет собой поток, связанный с файлом. Рассмотрим его ключевые свойства и методы:</p>
<ul>
<li><p>Свойство <span class="bb">Length</span> возвращает длину потока в байтах</p></li>
<li><p>Свойство <span class="bb">Position</span> возвращает текущую позицию в потоке</p></li>
<li><p>Метод <span class="bb">Read</span> читает данные из файла в массив байтов. Он принимает три параметра: 
<code>Read(array As Byte(), offset As Integer, count As Integer) As Integer</code> и возвращает количество успешно считанных байтов</p>
<p>Параметр <code>array</code> представляет массив байтов, в который считываются данные из потока</p>
<p>Параметр <code>offset</code> представляет смещение в байтах в массиве array, начиная с которого в массив array будут помещаться считанные байты</p></li>
<p>Параметр <code>count</code> - максимальное число байтов, предназначенных для чтения. Если в файле находится меньшее количество байтов, то 
все они будут считаны.</p></li>
<li><p>Метод <span class="bb">Seek(offset As Long, origin As SeekOrigin) As Long</span> устанавливает позицию в потоке со смещением на количество байт, 
указанных в параметре offset</p></li>
<li><p>Метод <span class="bb">Write</span> записывает данные из массива байтов в файл. Принимает три параметра: 
<code>Write(array As Byte(), offset As Integer, count As Integer)</code></p>
<p><code>array</code> представляет массив байтов, откуда будут браться данные для записи в файла</p>
<p>Параметр <code>offset</code> представляет смещение в байтах в массиве array, откуда начинается запись байтов в поток</p></li>
<p>Параметр <code>count</code> - максимальное число байтов, предназначенных для записи</p></li>
</ul>
<p>FileStream предоставляет низкоуровневый доступ к файлам на уровне байтов, поэтому если необходимо выполнить чтение или запись 
строк в текстовый файл, то массив байтов надо преобразовать в строки с помощью специальных методов. Поэтому для работы с текстовыми файлами 
лучше использовать другие классы, которые мы далее рассмотрим.</p>
<p>В то же время при работе с различными бинарными файлами, имеющими определенную структуру FileStream может быть очень даже полезен для извлечения 
определенных порций информации и ее обработки.</p>
<p>Посмотрим на примере считывания-записи в текстовый файл:</p>
<pre class="brush:vb;">
Imports System.IO

Module Module1

    Sub Main()

        Console.WriteLine("Введите строку для записи в файл:")
        Dim text As String = Console.ReadLine()

        'запись в файл
        Using fstream As New FileStream("C:\SomeDir\noname\note.txt", FileMode.OpenOrCreate)
            'преобразуем строку в байты
            Dim array As Byte() = System.Text.Encoding.Default.GetBytes(text)
            'записываем массив байтов в файл
            fstream.Write(array, 0, array.Length)
            Console.WriteLine("Текст записан в файл")
        End Using


        'чтение из файла
        Using fstream As FileStream = File.OpenRead("C:\SomeDir\noname\note.txt")
            'преобразуем строку в байты
            Dim array As Byte() = New Byte(fstream.Length) {}
            'чтение данных
            fstream.Read(array, 0, array.Length)
            'декодируем байты в строку
            Dim textFromFile As String = System.Text.Encoding.Default.GetString(array)
            Console.WriteLine("Текст из файла: {0}", textFromFile)
        End Using

        Console.ReadLine()
    End Sub

End Module
</pre>
<p>Разберем этот пример. И при чтении, и при записи применяется выражение <code>Using....End Using</code>.  
Данная конструкция позволяет создать объект, который реализует интерфейс IDisposable. И при завершении выполнения кода в этом блоке 
у данного объекта вызывается метод <code>Dispose</code>, и, таким образом, объект уничтожается. В данном случае 
в качестве такого объекта служит переменная <code>fstream</code>.</p>
<p>Общий синтаксис конструкции идентичен объявлению переменной, только вместо оператора Dim идет слово <code>Using</code>, а весь блок ззаканчивается 
выражением <code>End Using</code></p>
<p>Мы могли бы не использовать конструкцию Using, тогда в этом случае нам нужно бы было явным образом закрыть поток с помощью метода Close:</p>
<pre class="brush:vb;">
Dim fstream As New FileStream("C:\SomeDir\noname\note.txt", FileMode.OpenOrCreate)
Dim array As Byte() = System.Text.Encoding.Default.GetBytes(text)
fstream.Write(array, 0, array.Length)
fstream.Close()
</pre>
<p>Объект fstream создается двумя разными способами: через конструктор и через один из статических методов класса File.</p>
<p>Здесь в конструктор передается два параметра: путь к файлу и перечисление <code>FileMode</code>. Данное перечисление указывает на режим доступа к 
файлу и может принимать следующие значения:</p>
<ul>
<li><p><span class="bb">Append</span>: если файл существует, то текст добавляется в конец файл. Если файла нет, то он создается. 
Файл открывается только для записи.</p></li>
<li><p><span class="bb">Create</span>: создается новый файл. Если такой файл уже существует, то он перезаписывается</p></li>
<li><p><span class="bb">CreateNew</span>: создается новый файл. Если такой файл уже существует, то он приложение выбрасывает ошибку</p></li>
<li><p><span class="bb">Open</span>: открывает файл. Если файл не существует, выбрасывается исключение</p></li>
<li><p><span class="bb">Create</span>: создается новый файл. Если такой файл уже существует, то он перезаписывается</p></li>
<li><p><span class="bb">OpenOrCreate</span>: если файл существует, он открывается, если нет - создается новый</p></li>
<li><p><span class="bb">Truncate</span>: если файл существует, то он перезаписывается. Файл открывается только для записи.</p></li>
</ul>
<p>Статический метод <code>OpenRead</code> класса <code>File</code> открывает файл для чтения и возвращает объект FileStream.</p>
<p>Класса FileStream также имеет ряд перегруженных версий конструктора, которые позволяют задать дополнительные параметры потока. Все эти версии можно посмотреть на msdn.</p>
<p>Когда мы работаем с текстовыми файлами, то при записи и при чтении применяется объект кодировки <code>Encoding.Default</code> из пространства имен <code>System.Text</code>. 
В данном случае мы используем два его метода: <code>GetBytes</code> для получения массива байтов из строки и 
<code>GetString</code> для преобразования массива байтов в строку.</p>
<p>В итоге введенная нами строка записывается в файл <i>C:\SomeDir\noname\note.txt</i>. Но по сути это не текстовый, а бинарный файл, 
хотя если мы в него запишем только строку, то сможем в любом текстовом редакторе посмотреть файл в удобочитаемом виде. 
Но если мы в него запишем случайные байты, то у нас могут возникнуть проблемы с его пониманием. Например:</p>
<pre class="brush:vb;">
fstream.WriteByte(13)
fstream.WriteByte(103)
</pre>
<p>Поэтому для работы непосредственно с текстовыми файлами предназначены отдельные классы - StreamReader и StreamWriter.</p>
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


<div class="nav"><p><a href="5.3.php">Назад</a><a href="./">Содержание</a><a href="5.5.php">Вперед</a></p></div></div>
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
<div class="menT" id="menT"><div class="menT" id="menT">
<div class="alig"><b>Руководство по VB.NET</b></div>
<div id="ex1">
	<ul id="browser" class="filetree"> 
				<li class="closed"><span class="folder">Глава 1. Введение в VB.NET</span>
					<ul>
						<li><span class="file"><a href="1.1.php">Язык Visual Basic и платформа .NET</a></span></li>
						<li><span class="file"><a href="1.2.php">Первое приложение в Visual Studio</a></span></li>
						<li><span class="file"><a href="1.3.php">Компиляция в командной строке с .NET CLI</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Основы программирования на Visual Basic.NET</span>
					<ul>
						<li><span class="file"><a href="2.1.php">Типы данных и переменные</a></span></li>
						<li><span class="file"><a href="2.2.php">Преобразования базовых типов данных</a></span></li>
						<li><span class="file"><a href="2.3.php">Операции языка Visual Basic.NET</a></span></li>
						<li><span class="file"><a href="2.4.php">Массивы</a></span></li>
						<li><span class="file"><a href="2.5.php">Условные конструкции</a></span></li>
						<li><span class="file"><a href="2.6.php">Циклы</a></span></li>
						<li><span class="file"><a href="2.7.php">Программа сортировки массива</a></span></li>
						<li><span class="file"><a href="2.8.php">Методы и их параметры</a></span></li>
						<li><span class="file"><a href="2.9.php">Модули</a></span></li>
						<li><span class="file"><a href="2.10.php">Перечисления</a></span></li>
						<li><span class="file"><a href="2.11.php">Структуры</a></span></li>
						<li><span class="file"><a href="2.12.php">Работа с консолью в Visual Basic.NET</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Классы. ООП</span>
					<ul>
						<li><span class="file"><a href="3.1.php">Классы и объекты</a></span></li>
						<li><span class="file"><a href="3.2.php">Модификаторы доступа</a></span></li>
						<li><span class="file"><a href="3.3.php">Свойства</a></span></li>
						<li><span class="file"><a href="3.4.php">Перегрузка методов и операторов</a></span></li>
						<li><span class="file"><a href="3.5.php">Статические члены классов</a></span></li>
						<li><span class="file"><a href="3.6.php">Наследование</a></span></li>
						<li><span class="file"><a href="3.7.php">Абстрактные классы</a></span></li>
						<li><span class="file"><a href="3.8.php">Интерфейсы</a></span></li>
						<li><span class="file"><a href="3.9.php">Преобразование типов</a></span></li>
						<li><span class="file"><a href="3.10.php">Обобщенные типы</a></span></li>
						<li><span class="file"><a href="3.11.php">Делегаты</a></span></li>
						<li><span class="file"><a href="3.12.php">События</a></span></li>
						<li><span class="file"><a href="3.13.php">Анонимные методы и лямбды</a></span></li>
						<li><span class="file"><a href="3.14.php">Обработка исключений</a></span></li>
						<li><span class="file"><a href="3.15.php">Типы значений и ссылочные типы</a></span></li>
						<li><span class="file"><a href="3.16.php">Значение Nothing и Nullable-типы</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Коллекции</span>
					<ul>
						<li><span class="file"><a href="4.1.php">Введение в коллекции</a></span></li>
						<li><span class="file"><a href="4.2.php">Класс ArrayList</a></span></li>
						<li><span class="file"><a href="4.3.php">Список List(Of T)</a></span></li>
						<li><span class="file"><a href="4.4.php">Двухсвязный список LinkedList(Of T)</a></span></li>
						<li><span class="file"><a href="4.5.php">Очередь Queue(Of T)</a></span></li>
						<li><span class="file"><a href="4.6.php">Стек Stack(Of T)</a></span></li>
						<li><span class="file"><a href="4.7.php">Словарь Dictionary(Of T, V)</a></span></li>
						<li><span class="file"><a href="4.8.php">Индексаторы и создание коллекций</a></span></li>
						<li><span class="file"><a href="4.9.php">Интерфейсы IEnumerable и IEnumerator</a></span></li>
						<li><span class="file"><a href="4.10.php">Итераторы. Оператор Yield</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Работа с файлами в Visual Basic.NET</span>
					<ul>
						<li><span class="file"><a href="5.1.php">Работа с дисками</a></span></li>
						<li><span class="file"><a href="5.2.php">Работа с каталогами</a></span></li>
						<li><span class="file"><a href="5.3.php">Файлы. Классы File и FileInfo</a></span></li>
						<li><span class="file"><a href="5.4.php">Чтение и запись файла. Класс FileStream</a></span></li>
						<li><span class="file"><a href="5.5.php">Работа с текстовыми файлами</a></span></li>
						<li><span class="file"><a href="5.6.php">Работа с бинарными файлами</a></span></li>
						<li><span class="file"><a href="5.7.php">Старый доступ к файлам</a></span></li>
						<li><span class="file"><a href="5.8.php">Объект My.Computer.FileSystem</a></span></li>
					</ul>
				</li>
	</ul>
</div></div></div>
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