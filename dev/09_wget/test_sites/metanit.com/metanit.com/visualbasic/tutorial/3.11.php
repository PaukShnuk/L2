<!DOCTYPE html>
<html >
<head>
<title>Делегаты в Visual Basic.NET</title>
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
<h2>Делегаты</h2><div class="date">Последнее обновление: 30.10.2015</div>

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

<p>Наряду со свойствами и методами классы и интерфейсы могут иметь делегаты и события. Делегаты представляют такие объекты, которые указывают на 
другие методы. При этом делегаты и методы, на которые ссылаются делегаты, должны иметь те же параметры и тот же тип возвращаемого значения. 
Создадим два делегата:</p>
<pre class="brush : vb;">
Delegate Function Operation(x As Integer, y As Integer) As Integer

Delegate Sub GetMessage()
</pre>
<p>Первый делегат у нас ссылается на функцию, которая в качестве параметров принимает два значения типа Integer и возвращает некоторое число. 
Второй делегат у нас ссылается на процедуру без параметров. Чтобы использовать делегат, нам надо создать его объект с помощью конструктора, в который 
мы передаем адрес метода, вызываемого делегатом. Чтобы вызвать делегат, надо использовать его метод <code>Invoke</code>. Кроме того, делегаты могут выполняться 
в асинхронном режиме, при этом нам не надо создавать второй поток, нам надо лишь вместо метода <code>Invoke</code> использовать пару методов 
<b>BedinInvoke/EndInvoke</b>.</p>
<pre class="brush : vb;">
Public Delegate Sub GetMessage()

Sub Main()

    Dim del As GetMessage
    If Date.Now.Hour &lt; 12 Then
        del = New GetMessage(AddressOf GoodMorning)
    Else
        del = New GetMessage(AddressOf GoodEvening)
    End If
    del.Invoke()
        
    Console.ReadLine()
End Sub

Sub GoodMorning()
    Console.WriteLine("Good Morning")
End Sub

Sub GoodEvening()
    Console.WriteLine("Good Evening")
End Sub
</pre>
<p>В данном случае мы в зависимости от времени передаем в делегат адрес определенного метода (с помощью ключевого слова <b>AddressOf</b> и выводим сообщение.</p>
<p>Теперь посмотрим на примере другого делегата:</p>
<pre class="brush : vb;">
Delegate Function Operation(x As Integer, y As Integer) As Integer

Sub Main()

    Dim op As New Operation(AddressOf Add)
    Console.WriteLine(op.Invoke(4, 5))
        
    Console.ReadLine()
End Sub
	
Function Add(x As Integer, y As Integer) As Integer
    Return x + y
End Function

Function Multiply(x As Integer, y As Integer) As Integer
    Return x * y
End Function
</pre>
<p>Так как второй делегат ссылается на функции с двумя параметрами, то при вызове делегата мы должны передать в метод Invoke два значения.</p>
<p>Как и любой объект, делегат можно использовать в качестве параметра метода:</p>
<pre class="brush : vb;">
Public Delegate Sub GetMessage()

    Sub Main()

        If Date.Now.Hour &lt; 12 Then
            Show_Message(AddressOf GoodMorning)
        Else
            Show_Message(AddressOf GoodEvening)
        End If
        
        Console.ReadLine()
    End Sub

    Private Sub Show_Message(_del As GetMessage)
        _del.Invoke()
    End Sub

    Sub GoodMorning()
        Console.WriteLine("Good Morning")
    End Sub

    Sub GoodEvening()
        Console.WriteLine("Good Evening")
    End Sub
</pre>
<P>Однако, эти примеры не могут показать всю мощь делегатов, так как мы вполне спокойно могли обойтись и без них, вызвав напрямую методы. А наиболее 
сильная сторона делегатов состоит в том, что они служат в качестве методов обратного вызова, уведомляя другие объекты о произошедших событиях. Итак, 
вернемся к нашим классам, описывающим клиента банка, которые мы разработали в предыдущих главах (в данном случае классы Employee и Manager опущены, 
так как они нам не понадобятся):</P>
<pre class="brush : vb;">
Public MustInherit Class Person

    Public Property FirstName() As String
    Public Property LastName() As String
    Public MustOverride Sub Display()

    Public Sub New(fName As String, lName As String)
        FirstName = fName
        LastName = lName
    End Sub

End Class

Public Class Client
    Inherits Person
    Implements IAccount

    'Переменная для хранения суммы
    Dim _sum As Integer
    'Переменная для хранения процента
    Dim _procentage As Integer

    Public Property Bank As String

    'Текущая сумма на счете
    ReadOnly Property CurentSum() As Integer Implements IAccount.CurentSum
        Get
            Return _sum
        End Get
    End Property
    'Метод для добавления денег на счет
    Sub Put(sum As Integer) Implements IAccount.Put
        _sum += sum
    End Sub
    'Метод для снятия денег со счета
    Sub Withdraw(sum As Integer) Implements IAccount.Withdraw
        If sum &lt= CurentSum Then
            _sum -= sum
        End If
    End Sub
    'Процент начислений
    ReadOnly Property Procentage() As Integer Implements IAccount.Procentage
        Get
            Return _procentage
        End Get
    End Property

    Public Overrides Sub Display()
        Console.WriteLine(FirstName & " " & LastName & " has an account in bank " & Bank)
    End Sub

    Public Sub New(fName As String, lName As String, _bank As String, _sum As Integer)
        MyBase.New(fName, lName)
        Bank = _bank
        Me._sum = _sum
    End Sub
	
End Class

Public Interface IAccount
    ReadOnly Property CurentSum() As Integer
    Sub Put(sum As Integer)
    Sub Withdraw(sum As Integer)
    ReadOnly Property Procentage() As Integer
End Interface
</pre>
<p>Допустим, в случае вывода денег с помощью метода <code>Withdraw</code> нам надо как-то уведомлять об этом самого клиента и, может быть,
другие объекты. Для этого создадим делегат <code>AcoountStateHandler</code>. Чтобы использовать делегат, нам надо создать переменную этого делегата, а затем 
присвоить ему метод, который будет вызываться делегатом. Итак, добавим в класс <code>Client</code> следующие строки:</p>
<pre class="brush : vb;">
Public Class Client
    Inherits Person
    Implements IAccount

    'Объявляем делегат
    Public Delegate Sub AccountStateHandler(message As String)
    'Создаем переменную делегата
    Dim del As AccountStateHandler

    'Регистрируем делегат
    Public Sub RegisterHandler(_del As AccountStateHandler)
        del = _del
    End Sub
	
	'Здесь остальной код
</pre>
<p>Здесь все понятно. Сначала создаем делегат, который будет указывать на метод с параметром message типа String. 
Затем создаем переменную делегата. И в конце создаем метод, в котором будет происходить присваивание делегату ссылки на метод. Теперь изменим метод 
<b>Withdraw</b> следующим образом:</p>
<pre class="brush : vb;">
Sub Withdraw(sum As Integer) Implements IAccount.Withdraw
    If sum &lt;= CurentSum Then
        _sum -= sum
        If del IsNot Nothing Then
            del("Сумма " & sum & " снята со счета")
        End If
    Else
        If del IsNot Nothing Then
            del("Недостаточно денег на счете")
        End If
    End If
End Sub
</pre>

<p>Теперь в главной программе протестируем работу делегата:</p>
<pre class="brush : vb;">
Module Module1

    Sub Main()
		'Создаем нового клиента
        Dim client1 As New Client("John", "Thompson", "City Bank", 200)
		'Добавляем в делегат ссылку на метод Show_Message
        client1.RegisterHandler(New Client.AccountStateHandler(AddressOf Show_Message))
		'Два раза подряд пытаемся снять деньги
        client1.Withdraw(100)
        client1.Withdraw(150)

        Console.ReadLine()
    End Sub

    Private Sub Show_Message(message As String)
        Console.WriteLine(message)
    End Sub

End Module
</pre>
<p>Запустив программу, мы получим два разных сообщения, которые мы передали в коде класса Client:</p>
<pre>
Сумма 150 снята со счета
Недостаточно денег на счете
</pre>
<p>Хотя в примере наш делегат принимал адрес на один метод, в действительности он может указывать сразу на несколько методов. Кроме того, 
при необходимости мы можем удалить ссылки на адреса определенных методов, чтобы они не вызывались при вызове делегата. Итак, изменим в классе 
<code>Client</code> метод <b>RegisterHandler</b> и добавим новый метод <b>UnregisterHandler</b>, который будет удалять методы из списка методов делегата:</p>
<pre class="brush : vb;">
Public Sub RegisterHandler(_del As AccountStateHandler)
    Dim mainDel As [Delegate] = System.Delegate.Combine(_del, del)
    del = CType(mainDel, AccountStateHandler)
End Sub

Public Sub UnregisterHandler(_del As AccountStateHandler)
    Dim mainDel As [Delegate] = System.Delegate.Remove(del, _del)
    del = CType(mainDel, AccountStateHandler)
End Sub
</pre>
<p>В первом методе метод <b>Combine</b> объединяет делегаты <code>_del</code> и <code>del</code> в один, который потом присваивается 
переменной <code>del</code>. Во втором методе метод <b>Remove</b> возвращает делегат, из списка вызовов которого удален делегат <code>_del</code>. 
Теперь перейдем к основной программе:<p>
<pre class="brush : vb;">
Sub Main()

    Dim client1 As New Client("John", "Thompson", "City Bank", 200)

    client1.RegisterHandler(New Client.AccountStateHandler(AddressOf Show_Message))
    client1.RegisterHandler(New Client.AccountStateHandler(AddressOf Color_Message))
    client1.Withdraw(100)
    client1.Withdraw(150)
    'Удаляем делегат
    client1.UnregisterHandler(New Client.AccountStateHandler(AddressOf Color_Message))
    client1.Withdraw(50)

    Console.ReadLine()
End Sub

Private Sub Show_Message(message As String)
    Console.WriteLine(message)
End Sub

Private Sub Color_Message(message As String)
    'Установаливаем красный цвет символов
    Console.ForegroundColor = ConsoleColor.Red
    Console.WriteLine(message)
    'Сбрасываем настрйоки цвета
    Console.ResetColor()
End Sub
</pre>
<p>В целях тестирования мы создали еще один метод - <code>Color_Message</code>, который выводит то же самое сообщение только красным цветом. В строке 
<code>client1.UnregisterHandler(New Client.AccountStateHandler(AddressOf Color_Message))</code> мы удаляем этот метод из списка вызовов делегата, поэтому 
этот метод больше не будет срабатывать. Консольный вывод будет иметь следующую форму:</p>
<pre>
	Сумма 150 снята со счета
	Сумма 150 снята со счета
	Недостаточно денег на счете
	Недостаточно денег на счете
	Сумма 50 снята со счета
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


<div class="nav"><p><a href="3.10.php">Назад</a><a href="./">Содержание</a><a href="3.12.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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