<!DOCTYPE html>
<html >
<head>
<title>Введение в Silverlight 5</title>
<meta charset="utf-8" />
<meta name="description" content="Опсиание особенностей платформы Silverlight 5 и инструментов для создания приложений. создание первого проекта">
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
<h1>Введение в Silverlight 5</h1><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Развитие интернета, увеличение числа интернет-пользователей стали причиной того, что разработчики стали уделять гораздо 
больше внимания созданию интернет-приложений и разработке в веб-среде. Появилось много ориентированных на веб технологий программирования, 
которые позволяют создавать изящные веб-приложения. Одной из таких технологий является Silverlight.</p>
<p>Хотя Silverlight еще довольно молодая технология - самая первая бета-вервия вышла в конце 2006 года, но она уже прошла большой путь. На сегодня 
текущей версией является Silverlight 5. Изначально создаваемый для Windows, сейчас Silverlight, благодаря проекту Mono, поддерживается в той или иной степени 
и другими ОС, том числе созданными на базе ядра Линукс, а также мобильной системой Windows Phone 7. Кроме того, Silverlight-приложения могут запускаться как в браузере, будучи органичной частью 
веб-страницы, так и в качестве обычных десктопных приложений.</p>
<p>Какие возможности предлагает Silverlight? Silverlight предоставляет функционал для создания динамичных сайтов и RIA-приложений. Он удобен 
при работе с графикой, в том числе с трехмерной, мультимедиа, он позволяет создавать интерактивные приложения с богатым и масштабируемым интерфейсом. 
Одной из особенностей Silverlight 5 является интеграция с XNA, что позволяет задействовать потенциал этой платформы.</p>
<p>Хотя для создания приложений нужно использвоать языки C# или VB.NET, а также XAML для интерфейса, Silverlight-приложения могут работать и без платформы 
.NET - необходимо лишь установить плагин Silverlight размером около 5-6 Мб для соответствующего браузера. В настоящее время Silverlight поддерживается 
всеми распространенными браузерами.</p>
<p>Для того, чтобы создавать Silverlight-приложения, нам потребуется среда разработки Visual Web Developer 2010 Express и средства разработки 
Silverlight 5 Tools for Visual Studio 2010 SP1 (их можно найти на официальном сайте <a href="http://www.silverlight.net/downloads">http://www.silverlight.net/downloads</a>)</p>
<h2>Начало работы с Silverlight</h2>
<p>После установке всего необходимого инструментария откроем среду Visual Web Developer 2010 Express. 
Затем в меню <span class="bb">File</span> (Файл) выберем <span class="bb">New Project</span> (Создать проект). В диалоговом окне 
создания проекта выберем шаблон <span class="bb">Silverlight Application</span> и назовем проект как-нибудь (например, SilverlightCalculator) и нажмем OK:</p>
<img src="silpics/1.1.jpg" />
<p>Далее в следующем окне от нас потребуется установить ряд параметров:</p>
<img src="silpics/1.2.jpg" />
<p>Что представляют эти параметры? Флажок <span class="bb">Host the Silverlight Application in a new Web syte</span> позволяет создать веб-проект, ассоциированный 
с данным Silverlight-приложением. При выборе этого флажка для нас становится доступным выбор типа создаваемого веб-проекта в поле <span class="bb">New Web project type</span>, 
где мы можем выбрать либо обычный ASP.NET веб-проект, либо веб-сайт либо проект MVC. Поскольку веб-проект мы создавать не будем, снимите галочку с этого флажка.</p>
<p>В поле <span class="bb">Silverlight Version</span> мы можем выбрать версию сильверлайта. Надо отметить, что подобный выбор будет доступен, если в системе установлены 
соответствующие средства разработки для данной версии.</p>
<p>Ниже флажок <span class="bb">Enable WCF RIA Services</span> позволяет включить поддержку WCF-служб для приложения. Но в данном случае он нам не нужен, поэтому оставим 
его не отмеченным. Итоговые настройки должны выглядеть следующим образом:</p>
<img src="silpics/1.3.jpg" />
<p>После этого среда нам окроется проект с некоторыми автоматически генерируемыми файлами и кодом.</p>
<img src="silpics/1.4.jpg" />
<p>Теперь построем первое приложение. И начнем с Hello World. Для начала перейдем в окно XAML. 
Сейчас его содержимое выглядит следующим образом:</p>
<pre class="brush:xml;">
&lt;UserControl x:Class="SilverlightCalculator.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    d:DesignHeight="300" d:DesignWidth="400"&gt;

    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;

    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<p>Если вы раньше не работали с XAML, то вам следует знать, что XAML представляет язык на основе XML, который используется для декларативного описания 
интерфейса. Окно приложения в Silverlight представляет класс UserControl, поэтому с него и начинается объявление интерфейса.</p>
<p>В первой строке вы также встретите <code>x:Class="SilverlightCalculator.MainPage"</code>. То есть наше окно - это класс <span class="bb">MainPage</span>, 
определенный в пространстве имен нашего проекта <span class="bb"> SilverlightCalculator</span> и унаследованный от класса UserControl.</p>
<p>Далее в выражениях <code>xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"</code> мы подключаем в проект пространства имен XAML. 
Вражение <code>xmlns:x</code> означает, что мы отображаем пространства имен, идущее после знака равно, на литерал <span class="bb">x</span>.</p>
<p>В последней строке объявления окна <code>d:DesignHeight="300" d:DesignWidth="400"</code> мы устанавливаем размеры окна. Далее идет объявление 
корневого элемента Grid, который пока ничего не содержит.</p>
<p>С этим файлом интерфейса, который по умолчанию имеет имя <span class="bb">MainPage.xaml</span>, связан файл кода <span class="bb">MainPage.xaml.cs</span>, который также пока пуст:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;

namespace SilverlightCalculator
{
    public partial class MainPage : UserControl
    {
        public MainPage()
        {
            InitializeComponent();
        }
    }
}
</pre>
<h4>Изменение кода приложения</h4>
<p>Добавим в элемент Grid кнопку и зададим обработчик нажатия этой кнопки. Тогда XAML-файл будет выглядеть так:</p>
<pre class="brush:xml;">
&lt;UserControl x:Class="SilverlightCalculator.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    d:DesignHeight="300" d:DesignWidth="400"&gt;

    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;
		&lt;Button Click="Button_Click"&gt;Hello World&lt;/Button&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<p>У нас автоматически должен сгенерироваться обработчик Button_Click. Если этого не произошло, его можно добавить вручную. Код приложения 
в итоге должен выглядеть так:</p>
<pre class="brush:c#;">
using System;
.............

namespace SilverlightCalculator
{
    public partial class MainPage : UserControl
    {
        public MainPage()
        {
            InitializeComponent();
        }
		
		private void Button_Click(object sender, RoutedEventArgs e)
        {
			MessageBox.Show("Hello Wolrd!");
		}
    }
}
</pre>
<p>Теперь нажмем F5 и запустим наше приложение. Откроется веббраузер, в котором вы увидите нашу кнопку.</p>
<p>После запуска проект компилируется, и создается ряд файлов. Вы можете их найти в папке <span class="bb">bin-&gt;Debug(Release)</span> проекта.</p>
<img src="silpics/1.6.jpg" />
<p>Здесь есть несколько файлов. В первую очередь надо отметить два файла. Первый - <span class="bb">AppManifest.xml</span>. Это файл манифеста приложения, 
необходимый для создания пакета. Второй - файл сборки приложения со всем функционалом (в данном случае <span class="bb">SilverlightCalculator.dll</span>). Именно из этих 
файлов формируется пакет с расширением XAP (в данном случае <span class="bb">SilverlightCalculator.xap</span>). По сути это архивный файл, в который и включаются все 
файлы приложения.</p>
<p>Также автоматически Visual Studio генерирует тестовую html-страничку, которая уже содержит всю необходимую разметку для запуска silverlight-
приложения (в нашем случае файл <span class="bb">SilverlightCalculatorTestPage.html</span>). Если мы откроем файл в текстовом редакторе, то внизу файла после объявлений 
стилей и скриптов мы увидим разметку элемента object, который содержит ссылку на наше приложение:</p>
<pre class="brush:xml;">
.....................
    &lt;form id="form1" runat="server" style="height:100%"&gt;
    &lt;div id="silverlightControlHost"&gt;
        &lt;object data="data:application/x-silverlight-2," type="application/x-silverlight-2" width="100%" height="100%"&gt;
		  &lt;param name="source" value="SilverlightCalculator.xap"/&gt;
		  &lt;param name="onError" value="onSilverlightError" /&gt;
		  &lt;param name="background" value="white" /&gt;
		  &lt;param name="minRuntimeVersion" value="5.0.61118.0" /&gt;
		  &lt;param name="autoUpgrade" value="true" /&gt;
		  &lt;a href="http://go.microsoft.com/fwlink/?LinkID=149156&v=5.0.61118.0" style="text-decoration:none"&gt;
 			  &lt;img src="http://go.microsoft.com/fwlink/?LinkId=161376" alt="Get Microsoft Silverlight" style="border-style:none"/&gt;
		  &lt;/a&gt;
	    &lt;/object&gt;&lt;iframe id="_sl_historyFrame" style="visibility:hidden;height:0px;width:0px;border:0px"&gt;&lt;/iframe&gt;&lt;/div&gt;
    &lt;/form&gt;
</pre>
<p>Как вы видите, в строке <code>&lt;param name="source" value="SilverlightCalculator.xap"/&gt;</code> указан пакет xap нашего приложения. 
Таким образом мы можем указывать для страницы нужное нам silverlight-приложение. Также обратите внимание на другие свойства. Так, в четвертой строке 
у нас заданы ширина и высота со значением 100%. Это настройки по умолчанию. Поэтому, когда мы запускаем приложение, оно растягивается на все 
окно браузера. Но мы можем изменить эти значения по своему усмотрению.</p>

<br>
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


<div class="nav"><p><a href="./">Назад</a><a href="./">Содержание</a><a href="1.2.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Введение в Silverlight</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/1.1.php">Начало работы с Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/1.2.php">Создание первого приложения</a></span></li>
					</ul>
				</li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/2.php">Глава 2. XAML в Silverlight</a></span></li>
				<li class="closed"><span class="folder">Глава 3. Компоновка</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/3.1.php">Стандартные элементы компоновки</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/3.2.php">Создание элемента компоновки</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.0.php">Обзор элементов управления</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.1.php">Элементы управления содержимым</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.2.php">Специальные контейнеры</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.3.php">Текстовые элементы в Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.4.php">Управление списками в Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.5.php">Элементы, основанные на диапазонах значений</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.6.php">Работа с датами в Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.7.php">Работа с изображениями</a></span></li>
					</ul>
				</li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/5.php">Глава 5. Приложение и класс Application</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/6.php">Глава 6. Кисти и эффекты</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/7.php">Глава 7. Ресурсы</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/8.php">Глава 8. Стили</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/9.php">Глава 9. Привязка </a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/10.php">Глава 10. Шаблоны элементов управления</a></span></li>
				<li class="closed"><span class="folder">Глава 11. Анимации и трансформации</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/11.1.php">Анимации</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/11.2.php">Трансформации</a></span></li>
					</ul>
				</li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/12.php">Глава 12. Двухмерная графика</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/13.php">Глава 13. Работа с мультимедиа</a></span></li>
				<li class="closed"><span class="folder">Глава 14. Трехмерная графика</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.1.php">Настройка среды и начало работы</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.2.php">Создание первого 3D-приложения</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.3.php">Создание текстурированного куба</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.4.php">Silverlight 5 Toolkit</a></span></li>
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