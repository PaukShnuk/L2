<!DOCTYPE html>
<html >
<head>
<title>XAML в Silverlight</title>
<meta charset="utf-8" />
<meta name="description" content="Использование языка декларативной разметки XAML в Silverlight 5">
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
<h1>XAML в Silverlight</h1><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>XAML (eXtensible Application Markup Language) - язык разметки, используемый для создания пользовательского интерфейса декларативным путем и 
имеет много общего с html.</p>
<p>Для понимания того, что представляет собой XAML, создадим новый проект приложения Silverlight. Назовем его, к примеру, TestApplication. 
После создания проекта Visual Studio откроет файл разметки MainPage.xaml, который будет выглядеть следующим образом:</p>
<pre class="brush:xml;">
&lt;UserControl x:Class="TestApplication.MainPage"
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
<p>Итак, файл у нас начинается с объявления с элемента самого верхнего уровня - элемента <strong>UserControl</strong>. Все остальные элементы являются 
вложенными элементами для UserControl. Каждому элементу в XAML соответсвует определенный класс. Например, UserControl соответствует класс UserControl. 
Элементу Button подобным образом соответствует класс Button. А объявляя элемент в XAML мы все равно что создаем его объект.</p>
<p>Далее у нас следуют объявления пространства имен:</p>
<pre class="brush:xml;">
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
</pre>
<p>В Silverlight используется синтаксис пространств имен xml. Обратите внимание, что подключаемые здесь пространства имен не эквивалентны подключению 
пространств имен с помощью директивы <code>using</code>. В данном случае используются прстранства имен Silverlight.</p>
<p>Пространство имен <strong>http://schemas.microsoft.com/winfx/2006/xaml/presentation</strong> заключает описание и определение большинства элементов управления. 
Так как является пространством имен по умолчанию, то объявляется без всяких префиксов.</p>
<p>Пространство имен <span class="bb">http://schemas.microsoft.com/winfx/2006/xaml</span> - это пространство имен, включающее некоторые свойства XAML, 
например, свойство Name или Key. Используется с префиксом x, это значит, что те свойства элементов, которые заключены в этом пространстве имен, 
будут использоваться с префиксом x - x:Name или x:Key. Это же пространство имен используется уже в первой строчке 
<code>x:Class="TestApplication.MainPage"</code>, где создается создается новый класс MainWindow и соответствующий ему файл кода, 
куда будет прописываться логика для данного окна приложения.</p>
<p>Мы можем также импортировать любые другие доступные нам пространства имен платформы .NET. Общий синтаксис задания пространстd имен таков:</p>
<p>xmlns:sys="clr-namespace:System;assembly=mscorlib"</p>
<p>сначала идет спецификатор xmlns, затем - префикс, на который будет отображаться пространство имен (любой не занятый префикс), после clr-namespace идет пространство имен, 
а после assembly - сборка, в которой оно находится.</p>
<p>Затем уже в xaml-коде можно обращаться к классам из подключенных пространст имен по префиксу, например sys:String - в данном случае sys - 
префикс для пространства System, а именно там находится класс String</p>
<pre class="brush:xml;">
&lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
             xmlns:sys="clr-namespace:System;assembly=mscorlib"
    mc:Ignorable="d"
    d:DesignHeight="300" d:DesignWidth="400"&gt;
    &lt;UserControl.Resources&gt;
         &lt;sys:String x:Key="Monday"&gt;Понедельник&lt;/sys:String&gt;
    &lt;/UserControl.Resources&gt;
    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;
        
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<p>Правда, это не значит, что мы свободно можем использовать какие угодно классы из различных пространств имен. Здесь есть определенные ограничения.</p>
<h3>Элементы и их свойства</h3>
<p>Корневным элементом для UserControl является Grid. Объвление элементов не представляет особых сложностей. Сначала мы указываем после угловой 
скобки элемент, затем его различные атрибуты. В данном случае у элемента Grid определено два атрибута Name (имя)  и Background (фон). 
Атрибуты элемента соответствуют свойствам соответствующего класса, и мы могли создать элемент Grid наподобие в коде:</p>
<pre class="brush:c#;">
		Grid layRoot = new Grid();
		layRoot.Background = new SolidColorBrush(Color.FromArgb(0, 0, 0, 0));
</pre>
<p>Кроме свойств мы можем определить и события. Итак, создадим кнопку и определим событие ее нажатия:</p>
<pre class="brush:xml;">
    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;
        &lt;Canvas&gt;
            &lt;Button x:Name="Button1" Click="Button1_Click" Canvas.Top="20" Width="20" Height="20" /&gt;
        &lt;/Canvas&gt;
    &lt;/Grid&gt;
</pre>
<p>Здесь мы создали кнопку, вложенную в элемент Canvas и связанную с обработчиком Button1_Click. Затем уже в файле кода мы добавляем логику в 
метод Button1_Click.</p>
<p>Также обратите внимание на прикрепляемое свойство <b>Canvas.Top</b>, которое хотя и указывается у элемента Button, но применяется к элементу 
Canvas. Если мы хотим установить прикрепляемое свойство в коде, то должны использовать следующий синтаксис: 
<code>тип_элемента.SetИмя_Свойства(Элемент, значение)</code>. То есть то же самое мы могли бы установить в файле кода с помощью следующей строки:</p>
<pre class="brush:c#;">
	Canvas.SetTop(Button1, 20);
</pre>
<h3>Сложные свойства</h3>
<p>Нередко свойство определенного элемента в качестве значения принимает не просто значение типа int или string, но и целый объект некоторого класса. 
Посмотрем на примере. Чтобы задать цвет кнопки мы можем установить фон как и остальные свойства:</p>
<pre class="brush:xml;">
	&lt;Button x:Name="Button1" Click="Button1_Click" Width="200" Height="80" Content="Click Me" Background="Red"&gt;
</pre>
<p>Но свойство Background можно представить как сложное, которое принимает в качестве значения объект кисти, например:</p>
<pre class="brush:xml;">
		&lt;Button x:Name="Button1" Click="Button1_Click" Width="200" Height="80" Content="Click Me"&gt;
                &lt;Button.Background&gt;
                    &lt;SolidColorBrush Color="Red" /&gt;
                &lt;/Button.Background&gt;
		&lt;/Button&gt;
</pre>
<p>В данном случае мы в качестве значения свойства Background использовали объект SolidColorBrush. Причем также определили свойство Color у этого 
объекта. Данный пример, конечно, не очень показателен, так как мы могли вполне обойтись и без SolidColorBrush, но что если мы захотим задать кнопке 
градиент:</p>
<pre class="brush:xml;">
		&lt;Button x:Name="Button1" Click="Button1_Click" Width="200" Height="80" Content="Click Me"&gt;
                &lt;Button.Background&gt;
                &lt;LinearGradientBrush&gt;
                    &lt;LinearGradientBrush.GradientStops&gt;
                        &lt;GradientStop Color="Aqua" Offset="0" /&gt;
                        &lt;GradientStop Color="Red" Offset="1" /&gt;
                    &lt;/LinearGradientBrush.GradientStops&gt;
                &lt;/LinearGradientBrush&gt;
            &lt;/Button.Background&gt;
        &lt;/Button&gt;
</pre>
<p>В этом случае в качестве фона кнопки мы задаем линейный градиент - объект LinearGradientBrush, который также имеет сложную структуру.</p>


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


<div class="nav"><p><a href="1.2.php">Назад</a><a href="./">Содержание</a><a href="3.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава .')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава .')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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