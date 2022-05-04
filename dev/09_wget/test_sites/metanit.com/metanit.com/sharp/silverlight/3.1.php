<!DOCTYPE html>
<html >
<head>
<title>Компоновка в Silverlight</title>
<meta charset="utf-8" />
<meta name="description" content="Описание основых принципов и инструментов компоновки в Silverlight 5, использование контейнеров Grid, StackPanel и Canvas">
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
<h1>Компоновка в Silverlight</h1>
<h2>Стандартные элементы компоновки</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>При построении пользовательского интерфейса важное место занимает компоновка - размещение содержимое внутри формы приложения. 
Компоновка осуществляется при помощи контейнеров компоновки - Grid, UniformGrid, StackPanel, WrapPanel, DockPanel, Canvas. Благодаря им гораздо 
проще осуществлять позиционирование элементов в окне приложения. Различные контейнеры могут содержать внутри себя другие контейнеры. 
Также различные элементы управления могут содержать контейнеры компоновки. Все контейнеры компоновки являются наследниками класса Panel, поэтому 
поддерживают все те же свойства, которые есть у класса Panel, например, свойство Children, с помощью которого можно получить все вложенные в 
контейнер элементы.</p>
 <h3>Grid</h3>
<p>Это наиболее мощный и часто используемый контейнер, напоминающий обычную таблицу. Он содержит столбцы и строки, количество которых задается пользователем. 
Например, количество строк и столбцов можно задать с помощью свойств <b>RowDefinitions</b> и <b>ColumnDefinitions</b> соответственно.
 Чтобы задать позицию элемента управления, в разметке элемента нужно прописать значения свойств <span class="bb">Grid.Column</span> и <span class="bb">Grid.Row</span>, тем самым указывая в каком столбце и строке будет находиться элемент. 
 Кроме того, если мы хотим растянуть элемент управления на несколько строк или столбцов, то укажем свойства <span class="bb">Grid.ColumnSpan</span> и <span class="bb">Grid.RowSpan</span>, как в следующем примере:</p>
<pre class="brush:xml;">
    &lt;Grid x:Name="LayoutRoot" Background="White" &gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition&gt;&lt;/RowDefinition&gt;
            &lt;RowDefinition&gt;&lt;/RowDefinition&gt;
            &lt;RowDefinition&gt;&lt;/RowDefinition&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition&gt;&lt;/ColumnDefinition&gt;
            &lt;ColumnDefinition&gt;&lt;/ColumnDefinition&gt;
            &lt;ColumnDefinition&gt;&lt;/ColumnDefinition&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;Button Grid.Column="0" Grid.Row="0" Content="Кнопка 11"  /&gt;
        &lt;Button Grid.Column="2" Grid.Row="2" Content="Кнопка 33"  /&gt;
        &lt;Button Grid.Column="0" Grid.Row="1" Content="Кнопка по середине" Grid.ColumnSpan="3"  /&gt;
    &lt;/Grid&gt;
</pre>
<p>То есть у нас получится следующая картина:</p>
<img src="silpics/3.1.jpg" />
<p>Но если в предыдущем случае у нас строки и столбцы были равны друг другу, то теперь попробуем их настроить столбцы по ширине, а строки - по высоте. 
Есть три варианта настройки:</p>
<ul>
<li><p>Автоматическая настройка, когда столбец или строка занимает то место, которое им нужно</p></li>
<pre>&lt;ColumnDefinition Width="Auto" /&gt;
&lt;RowDefinition Height="Auto" /&gt;</pre>
<li><p>Абсолютные размеры, когда высота и ширина указываются в единицах, независимых от устройства</p></li>
<pre>&lt;ColumnDefinition Width="150" /&gt;
&lt;RowDefinition Height="150" /&gt;</pre>
<p>Также абсолютные размеры можно задать в пикселях, дюймах, сантиметрах или точках:</p>
<table><tr><td><p>пиксели</p></td><td><p>px</p></td><tr>
<tr><td><p>дюймы</p></td><td><p>in</p></td><tr>
<tr><td><p>сантиметры</p></td><td><p>cm</p></td><tr>
<tr><td><p>точки</p></td><td><p>pt</p></td><tr>
</table>
<p>Например,</p>
<pre>&lt;ColumnDefinition Width="1 in" /&gt;
&lt;RowDefinition Height="10 px" /&gt;</pre>
<li><p>Пропорциональные размеры.</p></li> 
<p>Например, ниже задаются два столбца, второй из которых имеет ширину в четверть от ширины первого:</p>
<pre>&lt;ColumnDefinition Width="*" /&gt;
&lt;ColumnDefinition Width="0.25*" /&gt;</pre>
</ul>
<p>По умолчанию границы между столбцами и строками в элементе Grid не видимы, для их отображения нажо задать свойство <strong>ShowGridLines="True"</strong> 
у элемента Grid</p>
<h3>StackPanel</h3>
<p>Это более простой элемент конпоновки. Он располагает все элементы в ряд либо по горизонтали, либо по вертикали в зависимости от свойства Orientation.
Например,</p>
<pre class="brush:xml;">&lt;Window x:Class="WpfApplication1.MainWindow"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    Title="Window1" Height="300" Width="300"&gt;
    &lt;Grid x:Name="LayoutRoot" Background="White" &gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition Height="*"&gt;&lt;/RowDefinition&gt;
            &lt;RowDefinition Height="*"&gt;&lt;/RowDefinition&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;TextBlock Grid.Row="0"&gt;Horizontal StackPanel&lt;/TextBlock&gt;
        &lt;StackPanel Orientation="Horizontal" Grid.Row="0" VerticalAlignment="Center" HorizontalAlignment="Center"&gt;
            &lt;Button Background="Blue" Width="40" Height="40"/&gt;
            &lt;Button Background="White" Width="40"  Height="40"/&gt;
            &lt;Button Background="Red" Width="40" Height="40"/&gt;
        &lt;/StackPanel&gt;
        &lt;StackPanel Orientation="Vertical" Grid.Row="1" VerticalAlignment="Center"&gt;
            &lt;TextBlock&gt;Vertical StackPanel&lt;/TextBlock&gt;
            &lt;Button Background="Blue" Width="40" Height="40"/&gt;
            &lt;Button Background="White" Width="40"  Height="40"/&gt;
            &lt;Button Background="Red" Width="40" Height="40"/&gt;
        &lt;/StackPanel&gt;
    &lt;/Grid&gt;
&lt;/Window&gt;
</pre>
<img src="silpics/3.2.jpg" />
<p>И еще пример использования StackPanel</p>
<pre class="brush:xml;">
&lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    d:DesignHeight="250" d:DesignWidth="300"&gt;
    &lt;StackPanel&gt;
        &lt;TextBlock Text="Stack" HorizontalAlignment="Center" /&gt;
        &lt;Button Content="Button1" /&gt;
        &lt;Button Content="Button2" /&gt;
        &lt;Button Content="Right Button" HorizontalAlignment="Right" /&gt;
        &lt;Button Content="Left Button" HorizontalAlignment="Left" /&gt;
    &lt;/StackPanel&gt;
&lt;/UserControl&gt;
</pre>
<img src="silpics/3.3.jpg" />
<h3>Canvas</h3>
<p> Для размещения на этой панели необходимо указать для элементов точные координаты. Либо можно указать координаты относительно левой, правой, 
нижней и верхней границ Canvas, используя свойства <strong>Canvas.Left</strong> и <strong>Canvas.Top</strong>.
Например,</p>
<pre class="brush:xml;"> 
&lt;Canvas Background="Lavender"&gt;
            &lt;Button Background="AliceBlue" Content="Top Left" Canvas.Top="20" Canvas.Left="20" /&gt;
            &lt;Button Background="Blue" Content="Top Right" Canvas.Top="20" Canvas.Left="210"/&gt;
            &lt;Button Background="Aquamarine" Content="Bottom Left" Canvas.Top="200" Canvas.Left="20"/&gt;
            &lt;Button Background="DarkGreen" Content="Bottom Right" Canvas.Top="200" Canvas.Left="210"/&gt;
 &lt;/Canvas&gt;
 </pre>
 <img src="silpics/3.4.jpg" />
 <p>Кроме этих панелей компоновки имеются еще несколько, но уже не входящие в стандартную комплектацию Silverlight, а являющиеся частью сторонних 
 библиотек. Так, Silverlight Toolkit, который вы можете найти на сайте <a href="http://silverlight.codeplex.com/">http://silverlight.codeplex.com/</a>, 
 подключает в проект такие панели, как DockPanel и WrapPanel, которые имеются в WPF, но отсутствуют в Silverlight.</p>
 <h3>GridSplitter</h3>
 <p>GridSplitter собственно не контейнер, в некотором случае он помогает создавать интерфейсы наподобие элемента SplitContainer в WinForms, только более функциональные. 
 Он представляет собой некоторый разделитель между столбцами или строками, путем сдвига которого можно регулировать ширину столбцов и высоту строк.</p>
 <p>Чтобы использовать GridSplitter, надо добавить в проект ссылку на библиотеку <span class="bb">System.Windows.Controls</span> и затем еще подключить соответствующее пространство 
 имен Silverlight <code>xmlns:controls="clr-namespace:System.Windows.Controls;assembly=System.Windows.Controls"</code>. 
 Во-вторых, GridSplitter надо поместить в определенную ячейку элемента Grid:</p>
 <pre class="brush:xml;">
    &lt;Grid&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition Width="*" /&gt;
            &lt;ColumnDefinition Width="Auto" /&gt;
            &lt;ColumnDefinition Width="*" /&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;controls:GridSplitter Grid.Column="1" ShowsPreview="False" Width="3" 
        HorizontalAlignment="Center" VerticalAlignment="Stretch" /&gt;
        &lt;Canvas Grid.Column="0" Background="Lavender"&gt;
            &lt;TextBlock&gt;Левая панель&lt;/TextBlock&gt;
            &lt;Button Content="Левая кнопка" Canvas.Top="20"/&gt;
        &lt;/Canvas&gt;
        &lt;Canvas Grid.Column="2" Background="LightGreen"&gt;
            &lt;TextBlock&gt;Правая панель&lt;/TextBlock&gt;
            &lt;Button Content="Правая кнопка" Canvas.Top="20"/&gt;
        &lt;/Canvas&gt;
    &lt;/Grid&gt;
</pre>
<img src="silpics/3.5.jpg" />
<p>Двигая центральную линию, разделяющую правую и левую части, мы можем устанавливать их ширину.
Но в отличие от элемента SplitContainer здесь можно установить различное количество динамически регулируемых частей окна. Немного усовершенствуем предыдущий пример: </p>
<img src="silpics/3.6.jpg" />
<pre class="brush:xml;">&lt;Grid&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition Width="*" /&gt;
            &lt;ColumnDefinition Width="Auto" /&gt;
            &lt;ColumnDefinition Width="*" /&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition Height="*"&gt;&lt;/RowDefinition&gt;
            &lt;RowDefinition Height="Auto"&gt;&lt;/RowDefinition&gt;
            &lt;RowDefinition Height="*"&gt;&lt;/RowDefinition&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;controls:GridSplitter Grid.Column="1"  Grid.Row="0" ShowsPreview="False" Width="3" 
        HorizontalAlignment="Center" VerticalAlignment="Stretch" /&gt;
        &lt;controls:GridSplitter Grid.Row="1" Grid.ColumnSpan="3" Height="3" 
        HorizontalAlignment="Stretch" VerticalAlignment="Stretch" /&gt;
        &lt;Canvas Grid.Column="0" Grid.Row="0"&gt;
            &lt;TextBlock&gt;Левая панель&lt;/TextBlock&gt;
            &lt;Button Content="Левая кнопка" Canvas.Top="20"/&gt;
        &lt;/Canvas&gt;
        &lt;Canvas Grid.Column="2" Grid.Row="0" Background="LightGreen"&gt;
            &lt;TextBlock&gt;Правая панель&lt;/TextBlock&gt;
            &lt;Button Content="Правая кнопка" Canvas.Top="20"/&gt;
        &lt;/Canvas&gt;
        &lt;Canvas Grid.ColumnSpan="3" Grid.Row="2" Background="#dfffff"&gt;
            &lt;TextBlock Canvas.Left="60"&gt;Нижняя панель&lt;/TextBlock&gt;
            &lt;Button Content="Правая кнопка" Canvas.Top="30" Canvas.Left="60"/&gt;
        &lt;/Canvas&gt;
    &lt;/Grid&gt;
</pre>

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


<div class="nav"><p><a href="2.php">Назад</a><a href="./">Содержание</a><a href="3.2.php">Вперед</a></p></div></div>
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