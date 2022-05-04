<!DOCTYPE html>
<html >
<head>
<title>C# и WPF | Маршрутизация событий</title>
<meta charset="utf-8" />
<meta name="description" content="Модель событий в WPF, их типы, объявление событий декларативно и в коде, обзор маршрутизированных и поднимающихся событий и их обработка">
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
<h1>Модель событий</h1><h2>Маршрутизация событий</h2><div class="date">Последнее обновление: 21.01.2016</div>

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

<p>В прошлой главе рассматривались различные элементы управления. Но чтобы с ними взаимодействовать, нам надо использовать модель 
событий. WPF в отличие от других технологий, например, от Windows Forms, предлагает новую концепцию событий - <span class="b">маршрутизированные события</span> (<span class="b">routed events</span>).</p>
<p>Для элементов управления в WPF определено большое количество событий, которые условно можно разделить на несколько групп:</p>
<ul>
<li><p>События клавиатуры</p></li>
<li><p>События мыши</p></li>
<li><p>События стилуса</p></li>
<li><p>События сенсорного экрана/мультитач</p></li>
<li><p>События жизненного цикла</p></li>
</ul>
<h3>Подключение обработчиков событий</h3>
<p>Подключить обработчики событий можно декларативно в файле xaml-кода, а можно стандартным способом в файле отделенного кода.</p>
<p>Декларативное подключение:</p>
<pre class="brush:xml;">&lt;Button x:Name="Button1" Content="Click" Click="Button_Click" /&gt;</pre>
<P>И подключим еще один обработчик в коде, чтобы при нажатии на кнопку срабатывали сразу два обработчика:</P>
<pre class="brush:c#;">
public partial class MainWindow : Window
{
	public MainWindow()
    {
        InitializeComponent();
		Button1.Click += Button1_Click;
    }
	// обработчик, подключаемый в XAML
    private void Button_Click(object sender, RoutedEventArgs e)
    {
        MessageBox.Show("Hi from Button_Click");
    }
	// обработчик, подключаемый в конструкторе
    private void Button1_Click(object sender, RoutedEventArgs e)
    {
        MessageBox.Show("Hi from Button1_Click");
    }
}
</pre>
<h3>Определение маршрутизированных событий</h3>
<p>Определение маршрутизированных событий отличается от стандартного определения событий в языке C#. 
Для определения маршрутизированных событий в классе создвалось статическое поле по типу <span class="b">RoutedEvent</span>:</p> 
<pre class="brush:c#;">public static RoutedEvent СобытиеEvent</pre>
<p>Это поле, как правило, имеет суффикс <i>Event</i>. Затем это событие регистрируется в статическом конструкторе.</p>
<p>И также класс, в котором создается событие, как правило определяет объект-обертку над обычным событием. В этой обертке с помощью метода 
<span class="b">AddHandler</span> происходит добавление обработчика для данного события, а с помощью метода <span class="b">RemoveHandler</span> - удаление 
обработчика.</p> 
<p>К примеру, возьмем встроенные класс <code>ButtonBase</code> - базовый класс для всех кнопок, который определяет ряд событий, в том числе событие <span class="b">Click</span>:</p>
<pre class="brush:c#;">
public abstract class ButtonBase : ContentControl, ...
{
	// определение событие
	public static readonly RoutedEvent ClickEvent;
	
	static ButtonBase()
	{
		// регистрация маршрутизированного события
		ButtonBase.ClickEvent = EventManager.RegisterRoutedEvent("Click", 
			RoutingStrategy.Bubble, typeof(RoutedEventHandler), typeof(ButtonBase));
		//................................
	}
	// обертка над событием
	public event RoutedEventHandler Click
	{
		add
		{
			// добавление обработчика
			base.AddHandler(ButtonBase.ClickEvent, value);
		}
		remove
		{
			// удаление обработчика
			base.RemoveHandler(ButtonBase.ClickEvent, value);
		}
	}
  // остальное содержимое класса
}
</pre>
<p>Маршрутизированные события регистрируются с помощью метода <code>EventManager.RegisterRoutedEvent()</code>. В этот метод передаются последовательно 
имя события, тип события (поднимающееся, прямое, опускающееся), тип делегата, предназначенного для обработки события, и класс, который владеет этим событием.</p>
<h3>Маршрутизация событий</h3>
<p>Модель событий WPF отличается от событий WinForms не только декларативным подключением. События, возникнув на одном элементе, могут обрабатываться на другом. События могут подниматься и опускаться по дереву элементов.</p>
<p>Так, маршрутизируемые события делятся на три вида:</p>
<ul>
<li><p><span class="b">Прямые</span> (direct events) - они возникают и отрабытывают на одном элементе и никуда дальше не передаются. Действуют как обычные события.</p></li>
<li><p><span class="b">Поднимающиеся</span> (bubbling events) - возникают на одном элементе, а потом передаются дальше к родителю - элементу-контейнеру и далее, пока не достигнет наивысшего родителя в дереве элементов.</p></li>
<li><p><span class="b">Опускающиеся, туннельные</span> (tunneling events) - начинает отрабатывать в корневом элементе окна приложения и идет далее по вложенным элементам, пока не достигнет элемента, вызвавшего это событие.</p></li>
</ul>
<p>Все маршрутизируемые события используют класс <span class="b">RoutedEventArgs</span> (или его наследников), который представляет доступ к следующим свойствам:</p>
<ul>
<li><p><span class="b">Source</span>: элемент логического дерева, являющийся источником события.</p></li>
<li><p><span class="b">OriginalSource</span>: элемент визуального дерева, являющийся источником события. Обычно то же самое, что и Source</p></li>
<li><p><span class="b">RoutedEvent</span>: представляет имя события</p></li>
<li><p><span class="b">Handled</span>: если это свойство установлено в True, событие не будет подниматься и опускаться, а ограничится непосредственным источником.</p></li>
</ul>
<h3>Поднимающиеся события</h3>
<p>Допустим, у нас имеется такая разметка xaml:</p>
<pre class="brush:xml;">
&lt;Window x:Class="EventsApp.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:EventsApp"
        mc:Ignorable="d"
        Title="MainWindow" Height="250" Width="400"&gt;
    &lt;Grid&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition Width="Auto" /&gt;
            &lt;ColumnDefinition /&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;StackPanel Grid.Column="0" VerticalAlignment="Center" MouseDown="Control_MouseDown"&gt;
            &lt;Button x:Name="button1" Width="80" Height="50" MouseDown="Control_MouseDown" Margin="10" &gt;
                &lt;Ellipse Width="30" Height="30" Fill="Red" MouseDown="Control_MouseDown" /&gt;
            &lt;/Button&gt;
        &lt;/StackPanel&gt;
        &lt;TextBlock x:Name="textBlock1" Grid.Column="1" Padding="10" /&gt;
    &lt;/Grid&gt;
&lt;/Window&gt;
</pre>
<p>В данном случае мы получаем следующее дерево элементов:</p>
<img src="./pics/6.3.png" alt="Дерево элементов в WPF" />
<p>Три элемента имеют привязку к одному обработчику события, которое возникает при нажатии правой кнопки мыши или тачпада. Определим этот обработчик 
в файле кода C#:</p>
<pre class="brush:c#;">
private void Control_MouseDown(object sender, MouseButtonEventArgs e)
{
    textBlock1.Text = textBlock1.Text + "sender: " + sender.ToString() + "\n";
    textBlock1.Text = textBlock1.Text + "source: " + e.Source.ToString() + "\n\n";
}
</pre>
<p>Обработчик в данном случае выводит информацию о событии в текстовый блок.</p>
<p>И так как это событие <span class="b">MouseDown</span> является поднимающимся, то при нажатии правой кнопкой мыши на элемент самого 
нижнего уровня - Ellipse, событие MouseDown будет подниматься к контейнерам и отработает три раза последовательно для всех элементов Ellipse, Button, StackPanel:</p>
<img src="./pics/6.1.png" />
<h3>Туннельные события</h3>
<p>Туннельные события действуют прямо противоположным способом. Как правило, все они начинаются со слова Preview. Возьмем выше приведенный пример и заменим событие MouseDown на PreviewMouseDown</p>
<pre class="brush:xml;">
&lt;StackPanel Grid.Column="0" VerticalAlignment="Center" PreviewMouseDown="Control_MouseDown"&gt;
    &lt;Button x:Name="button1" Width="80" Height="50" PreviewMouseDown="Control_MouseDown" Margin="10" &gt;
        &lt;Ellipse Width="30" Height="30" Fill="Red" PreviewMouseDown="Control_MouseDown" /&gt;
    &lt;/Button&gt;
&lt;/StackPanel&gt;
</pre>
<p>Нажмем на элемент Ellipse. Тогда событие сначала отработает на элементе StackPanel и затем последовательно на элементе Button и закончится на элементе Ellipse.</p>
<img src="./pics/6.2.png" />
<h3>Прикрепляемые события (Attached events)</h3>
<p>Если у нас есть несколько элементов одного и того же типа и мы хотим привязать их к одному событию, то мы можем воспользоваться прикрепляемыми событиями.</p>
<p>Так, ранее у нас была группа элементов RadioButton и, чтобы вывести при выборе любого из них выбранное значение, нам приходилось у каждого 
определять обработчик события. Но это не оптимальная модель. И именно здесь мы и применим прикрепляемые события:</p>
<pre class="brush:xml;">
&lt;StackPanel x:Name="menuSelector" Grid.Column="0" RadioButton.Checked="RadioButton_Click"&gt;
    &lt;RadioButton GroupName="menu" Content="Салат Оливье" /&gt;
    &lt;RadioButton GroupName="menu" Content="Котлета по-киевски" /&gt;
    &lt;RadioButton GroupName="menu" Content="Пицца с овощами" /&gt;
    &lt;RadioButton GroupName="menu" Content="Мясной рулет" /&gt;
&lt;/StackPanel&gt;
</pre>
<p>Обработчик для прикрепляемого события задается в формате <i>Имя_класса.Название_события="Обработчик"</i>. Здесь атрибут 
<code>RadioButton.Checked="RadioButton_Click"</code> закрепляет все радиокнопки на StackPanel за одним обработчиком. Тогда в коде можно прописать:</p>
<pre class="brush: c#;">
private void RadioButton_Click(object sender, RoutedEventArgs e)
{
    RadioButton selectedRadio = (RadioButton)e.Source;
    textBlock1.Text = "Вы выбрали: " + selectedRadio.Content.ToString();
}
</pre>
<p>И на текстовый блок выводится выбранный пункт.</p>
<p>Также обработчик для прикрепляемого события мы можем задать в коде c#:</p>
<pre class="brush:c#;">
menuSelector.AddHandler(RadioButton.CheckedEvent, new RoutedEventHandler(RadioButton_Click));
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


<div class="nav"><p><a href="5.17.php">Назад</a><a href="./">Содержание</a><a href="6.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в WPF</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/1.php">Особенности платформы WPF</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/1.2.php">Начало работы с WPF</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. XAML</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/2.php">Введение в язык XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/2.2.php">Файлы отделенного кода</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/2.3.php">Сложные свойства и конвертеры типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/2.4.php">Пространства имен из C# в XAML</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Компоновка</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.php">Введение в компоновку</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.2.php">Grid</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.3.php">GridSplitter</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.4.php">StackPanel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.5.php">DockPanel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.6.php">WrapPanel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.7.php">Canvas</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.8.php">Свойства компоновки элементов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.1.php">Обзор элементов управления и их свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.19.php">Элементы управления содержимым</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.2.php">Кнопки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.18.php">CheckBox и RadioButton</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.3.php">Всплывающие подсказки ToolTip и Popup</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.4.php">Контейнеры GroupBox и Expander</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.20.php">ScrollViewer. Создание прокрутки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.5.php">Текстовые элементы управления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.6.php">Элементы управления списками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.7.php">ListBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.8.php">ComboBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.9.php">ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.10.php">Создание вкладок и TabControl</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.11.php">Меню</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.12.php">ToolBar</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.13.php">TreeView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.14.php">DataGrid</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.15.php">ProgressBar и Slider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.16.php">Работа с датами. Calendar и DatePicker</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.17.php">Работа с изображениями. Image и InkCanvas</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. DependencyObject и свойства зависимостей</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/13.php">Введение в Dependency Property</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/13.2.php">Прикрепляемые свойства / attached property</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/13.3.php">Создание свойств зависимостей</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Модель событий в WPF</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/6.php">Маршрутизация событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/6.2.php">События клавиатуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/6.3.php">События мыши и фокуса</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Команды</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/7.1.php">Основы команд</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/7.2.php">Создание новых команд</a></span></li>
		</ul>
	</li>
	<li><span class="folder"><a href="//metanit.com/sharp/wpf/8.php">Глава 8. Кисти</a></span></li>
	<li class="closed"><span class="folder">Глава 9. Ресурсы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/9.php">Концепция ресурсов в WPF</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/9.2.php">Статические и динамические ресурсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/9.3.php">Словари ресурсов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Привязка</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/11.php">Введение в привязку данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/11.2.php">Интерфейс INotifyPropertyChanged</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/11.3.php">Форматирование привязки и конвертеры значений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Стили, триггеры и темы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/10.php">Стили</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/10.2.php">Триггеры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/10.3.php">Темы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Приложение и класс Application</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/3.php">Класс Application</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/3.2.php">Работа с классом Application</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/3.3.php">Ресурсы приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Шаблоны элементов управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/12.php">Логическое и визуальное дерево</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/12.2.php">Создание и использование шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/12.3.php">Визуальные состояния</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/12.4.php">Круглое окно</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Работа с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.1.php">Привязка данных и контекст данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.2.php">Работа с коллекциями данных. ObservableCollection</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.3.php">ItemTemplate и DataTemplate</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.4.php">ItemsPanel. Установка панели элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.5.php">Виртуализация</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.6.php">Провайдеры данных. ObjectDataProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.7.php">XmlDataProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.8.php">Иерархические данные и HierarchicalDataTemplate</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.php">Валидация данных</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Взаимодействие с базой данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/19.1.php">Создание базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/19.2.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/19.3.php">Работа с Entity Framework</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Документы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.php">Потоковые документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.2.php">Контейнеры потоковых документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.3.php">RichTextBox и редактирование документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.4.php">Фиксированные документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.5.php">Аннотации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Работа с графикой</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/17.php">Фигуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/17.2.php">Пути и геометрии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/17.3.php">PathGeometry</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/17.4.php">Трансформации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Трехмерная графика</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.1.php">Основы работы с трехмерной графикой</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.3.php">Определение трехмерного объекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.4.php">Освещение</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.5.php">Камера</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.2.php">Создание куба. Текстурирование</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.6.php">Трехмерные трансформации и анимации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.7.php">Взаимодействие с трехмерными объектами</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. Анимация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.php">Основы анимаций</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.2.php">Анимация в XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.3.php">Анимации по ключевым кадрам</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.4.php">Анимация пути</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.5.php">Плавность анимации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Окна</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/20.1.php">Класс Window</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/20.2.php">Взаимодействие между окнами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/20.3.php">Диалоговые окна</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Паттерн MVVM</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.1.php">Определение паттерна MVVM</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.2.php">Реализация MVVM. ViewModel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.3.php">Команды в MVVM</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.4.php">Передача параметров команде</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.5.php">Взаимодействие команд и событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.6.php">Работа с диалоговыми окнами</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. SQLite в WPF</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/21.1.php">Работа с SQLite</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/21.2.php">MVVM и SQLite</a></span></li>
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