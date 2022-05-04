<!DOCTYPE html>
<html >
<head>
<title> C# и Windows Forms | Первый проект</title>
<meta charset="utf-8" />
<meta name="description" content="Введение в создание графических приложений на Windows Forms с помощью Visual C# и .NET">
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
<h1>Введение в Windows Forms</h1><h2>Первый проект</h2><div class="date">Последнее обновление: 13.11.2021</div>

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

<p>Для создания графических интерфейсов с помощью платформы .NET применяются разные технологии - Window Forms, WPF, UWP. 
Однако наиболее простой и удобной платформой до сих пор остается Window Forms или сокращенно WinForms. Данное руководство ставит своей целью дать понимание принципов создания графических интерфейсов с помощью технологии WinForms  
и работы основных элементов управления.</p>
<p>Для создания графических приложений на C# будем использовать бесплатную и полнофункциональную среду разработки - <span class="b">Visual Studio Community 2022</span>, которую можно загрузить по следующему адресу: 
<a href="https://www.visualstudio.com/en-us/downloads">https://www.visualstudio.com/en-us/downloads</a>.</p>
<img src="./pics/1.7.png" alt="Установка Visual Studio для Windows Forms" />
<p>Чтобы добавить в Visual Studio поддержку проектов для Windows Forms и C# и .NET 6, в программе установки среди рабочих нагрузок нужно 
выбрать только пункт <span class="b">Разработка классических приложений .NET</span>. Можно выбрать и больше опций или вообще все опции, однако стоит 
учитывать свободный размер на жестком диске - чем больше опций будет выбрано, соответственно тем больше места на диске будет занято.</p>
<img src="./pics/vs1.png" alt="Разработка классических приложений .NET Windows Forms в Visual Studio" />
<p>После установки среды и всех ее компонентов, запустим Visual Studio и создадим проект графического приложения. 
На стартовом экране выберем <span class="b">Create a new project</span> (Создать новый проект)</p>
<img src="./pics/1.9.png" alt="Разработка классических приложений на C# и Windows Forms в Visual Studio" />
<p>На следующем окне в качестве типа проекта выберем <span class="b">Windows Forms App</span>:</p>
<img src="./pics/1.1.png" alt="создание первого проекта Windows Forms на C#" />
<p>Стоит отметить, что среди шаблонов можно увидеть еще тип <span class="b">Windows Forms App (.NET Framework)</span> - его НЕ надо выбирать, необходим именно тип 
<span class="b">Windows Forms App</span>.</p>
<p>Далее на следующем этапе нам будет предложено указать имя проекта и каталог, где будет располагаться проект.</p>
<img src="./pics/1.8.png" alt="первый проект Windows Forms на C#" />
<p>В поле <span class="b">Project Name</span> дадим проекту какое-либо название. В моем случае это <span class="b">HelloApp</span>.</p>
<p>На следующем окне Visual Studio предложит нам выбрать версию .NET, которая будет использоваться для проекта. По умолчанию здесь выбрана последняя на данный момент версия - .NET 6.0. Оставим и нажмен на кнопку Create (Создать) для создания проекта.</p>
<img src="./pics/1.10.png" alt="Версия .NET для проекта Windows Forms на C#" />
<p>После этого Visual Studio откроет наш проект с созданными по умолчанию файлами:</p>
<img src="./pics/1.11.png" alt="первый проект Windows Forms на C# в Visual Studio" />

<p>Справа находится окно Solution Explorer, в котором можно увидеть структуру нашего проекта. В данном случае у нас сгенерированная по умолчанию 
структура:</p>
<ul>
<li><p><span class="b">Dependencies</span> - это узел содержит сборки dll, которые добавлены в проект по умолчанию. 
Эти сборки как раз содержат классы библиотеки .NET, которые будет использовать C#</p></li>
<li><p>Далее идет файл единственной в проекте формы - <span class="b">Form1.cs</span>, который по умолчанию открыт в центральном окне:</p>
<pre class="brush:c#;">
namespace HelloApp
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
    }
}
</pre>
<p>Класс формы - <span class="b">Form1</span> представляет графическую форму - фактически то окно, которое мы увидим на экране при запуске проекта.</p>
<p>Этот класс определяется как частичный (с модификатором <span class="b">partial</span>) и наследуется от встроенного класса <span class="b">Form</span>, 
который содержит базовую функциональность форм.</p>
<p>В самом классе Form1 определен по умолчанию только конструктор, где вызывается метод <span class="b">InitializeComponent()</span>, который выполняет инициализацию компонентов формы из файла дизайнера.</p>
<p>Рядом с этим элементом можно заметить другой файл формы - <span class="b">Form1.Designer.cs</span>. Это файл дизайнера - он содержит определение компонентов формы, добавленных 
на форму в графическом дизайнере и именно его код по сути передается выше через вызов <code>InitializeComponent()</code></p>
</li>
<li><p><span class="b">Program.cs</span> определяет точку входа в приложение:</p>
<pre class="brush:c#;">
namespace HelloApp
{
    internal static class Program
    {
        [STAThread]
        static void Main()
        {
            ApplicationConfiguration.Initialize();
            Application.Run(new Form1());
        }
    }
}
</pre>
<p>Данный файл содержит класс Program. Выполнение программы на языке C# начинается с метода <span class="b">Main</span>. И в классе Program как раз 
определен подобный метод.</p>
<p>Метод <span class="b">Main</span> снабжен атрибутом <span class="b">[STAThread]</span>. Этот атрибут, грубого говоря, 
необходим для корректной работы компонентов Windows. В самом методе сначала вызывается метод</p>
<pre class="brush:c#;">ApplicationConfiguration.Initialize()</pre> 
<p>который устанавливает некоторую базовую конфигурацию приложения</p>
<p>Затем вызывается метод</p>
<pre class="brush:c#;">Application.Run(new Form1());</pre> 
<p>в который передается объект отображаемой по умолчанию на экране формы.</p>
<p>То есть, когда мы запустим приложение, сработает метод <span class="b">Main</span>, в котором будет вызван метод <code>Application.Run(new Form1())</code>, 
благодаря чему мы увидим форму Form1 на экране.</p>
</li>
</ul>
<h3>Настройка компиляции проекта</h3>
<p>Кроме того, проект Windows Forms имеет еще один важный файл, как и все проекты на языке C# - файл конфигурации проекта. Для его открытия нажмем двойным кликом левой кнопкой мыши 
на название проекта или нажмем правой кнопкой мыши на название проекта и появившемся контекстном меню выберем пункт <span class="b">Edit Project File</span></p>
<img src="./pics/1.14.png" alt="UseWindowsForms и конфигурация проекта Windows Forms на C# в Visual Studio" />
<p>В итоге нам откроектся файл с расширением <span class="b">csproj</span>, который называется по имени проекта (например, HelloApp.csproj) со следующим содержимым:</p>
<pre class="brush:xml;">
&lt;Project Sdk="Microsoft.NET.Sdk"&gt;

  &lt;PropertyGroup&gt;
    &lt;OutputType&gt;WinExe&lt;/OutputType&gt;
    &lt;TargetFramework&gt;net6.0-windows&lt;/TargetFramework&gt;
    &lt;Nullable&gt;enable&lt;/Nullable&gt;
    &lt;UseWindowsForms&gt;true&lt;/UseWindowsForms&gt;
    &lt;ImplicitUsings&gt;enable&lt;/ImplicitUsings&gt;
  &lt;/PropertyGroup&gt;

&lt;/Project&gt;
</pre>
<p>Для компиляции приложения Windows Forms указаны следующие настройки:</p>
<ul>
<li><p><span class="b">OutputType</span>: определяет выходной тип проекта. Должен иметь значение <span class="b">WinExe</span> - то есть выполняемое приложение с 
расширением exe под Windows</p></li>
<li><p><span class="b">TargetFramework</span>: определяет применяемую для компиляции версию фреймворка .NET. Поскольку при создании проекта 
была выбрана версия .NET 6, а сам проект зависит от компонентов Windows, то здесь должно быть значение <span class="b">net6.0-windows</span></p></li>
<li><p><span class="b">Nullable</span>: подключает в проект функционалность ссылочных nullable-типов</p></li>
<li><p><span class="b">UseWindowsForms</span>: указывает, будет ли проект использовать Windows Forms (для этого устанавливается значение <code>true</code>)</p></li>
<li><p><span class="b">ImplicitUsings</span>: подключает в проект функциональность неявно подключаемых глобальных пространств имен</p></li>
</ul>
<h4>Запуск приложения</h4>
<p>Чтобы запустить приложение в режиме отладки, нажмем на клавишу F5 или на зеленую стрелочку на панели Visual Studio.</p>
<img src="./pics/1.13.png" alt="Запуск проекта Windows Forms в Visual Studio" />
<p>После этого запустится пустая форма Form1 по умолчанию.</p>
<img src="./pics/1.12.png" alt="проект Windows Forms на C# в Visual Studio" />
<p>После запуска приложения студия компилирует его в файл с расширением exe. Найти данный файл можно, зайдя в папку проекта и далее в каталог 
<code>\bin\Debug\net6.0-windows</code></p>
<p>Рассмотрев вкратце создание проекта графического приложения, мы можем перейти к обзору основных компонентов и начнем мы с форм.</p>
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


<div class="nav"><p><a href="./">Содержание</a><a href="1.2.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в Windows Forms</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/1.1.php">Первый проект</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.1.php">Создание графического приложения</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Работа с формами</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.1.php">Основы форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.2.php">Основные свойства форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.3.php">Добавление форм. Взаимодействие между формами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.4.php">События в Windows Forms. События формы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.5.php">Создание непрямоугольных форм. Закрытие формы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Контейнеры в Windows Forms</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.1.php">Динамическое добавление элементов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.2.php">Элементы GroupBox, Panel и FlowLayoutPanel</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.3.php">TableLayoutPanel</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.4.php">Размеры элементов и их позиционирование в контейнере</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.5.php">Панель вкладок TabControl и SplitContainer</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.1.php">Кнопка</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.2.php">Метки и ссылки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.3.php">Текстовое поле TextBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.4.php">Элемент MaskedTextBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.5.php">Элементы Radiobutton и CheckBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.6.php">ListBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.7.php">Элемент ComboBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.8.php">Привязка данных в ListBox и ComboBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.9.php">Элемент CheckedListBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.10.php">Элементы NumericUpDown и DomainUpDown</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.11.php">ImageList</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.12.php">ListView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.13.php">TreeView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.14.php">TrackBar, Timer и ProgressBar</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.15.php">DateTimePicker и MonthCalendar</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.16.php">PictureBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.17.php">WebBrowser</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.18.php">Элемент NotifyIcon</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.19.php">Окно сообщения MessageBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.20.php">OpenFileDialog и SaveFileDialog</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.21.php">FontDialog и ColorDialog</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.22.php">ErrorProvider</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Меню и панели инструментов</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/5.1.php">Панель инструментов ToolStrip</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/5.2.php">Создание меню MenuStrip</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/5.3.php">Строка состояния StatusStrip</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/5.4.php">Контекстное меню ContextMenuStrip</a></span></li>
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
	
	$("li:contains('Глава 1.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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