<!DOCTYPE html>
<html >
<head>
<title>C# и WPF | Команды</title>
<meta charset="utf-8" />
<meta name="description" content="Основы и использование команд в WPF и взаимодействие с пользовательским интерфейсом, привязка команд с помощью CommandBinding">
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
<h1>Команды</h1><h2>Основы команд</h2><div class="date">Последнее обновление: 26.01.2016</div>

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

<p>В WPF кроме обработки событий приложение может взаимодействовать с пользователем с помощью команд. <span class="b">Команды</span> 
представляют механизм выполнения какой-нибудь задачи, например, копирования текста - когда мы нажимаем Ctrl+C, то мы копируем текст в буффер. В процессе копирования выполняется ряд действий, 
и все вместе эти действия объединяются в одну команду. Использование команд помогает нам сократить объем кода и использовать одну и ту же команду для 
нескольких элементов управления в различных местах программы. Таким образом, команды позволяют абстрагировать набор действий от конкретных событий конкретных элементов.</p>
<p>В некотором роде команды в WPF являются реализацией общераспространенного паттерна <a href="http://metanit.com/sharp/patterns/3.3.php">Команда</a>.</p>
<p>Модель команд в WPF состоит из четырех аспектов:</p>
<ul>
<li><p>Сама <span class="b">команда</span>, которая представляем выполняемую задачу</p></li>
<li><p><span class="b">Привязка команд</span>, которая связывает команду с определенной логикой приложения</p></li>
<li><p><span class="b">Источник команды</span> - элемент пользовательского интерфейса, который запускает команду (например, кнопка, по нажатию который выполняется команда)</p></li>
<li><p><span class="b">Цель команды</span> - элемент интерфейса, на котором выполняется команда</p></li>
</ul>
<h3>Команда</h3>
<p>Все команды реализуют интерфейс <code>System.Window.Input.ICommand</code>:</p>
<pre class="brush:c#;">
public interface ICommand
{
	event EventHandler CanExecuteChanged;
	void Execute (object parameter);
	bool CanExecute (object parameter);
}
</pre>
<p>Метод <span class="b">Execute</span> предназначен для хранения логики команды. Функция <span class="b">CanExecute</span> возвращает <code>true</code>, 
если команда включена и доступна для использования, и <code>false</code>, если команда отключена. 
Событие <span class="b">CanExecuteChanged</span> вызывается при изменении состояния команды.</p>
<p>В WPF этот интерфейс реализован встроенным классом <span class="b">System.Windows.Input.RoutedCommand</span>, который является базовым для всех встроенных команд. 
Поэтому, если нам потребуется создать свой класс команды, мы можем либо реализовать ICommand, либо унаследовать свой класс команды от RoutedCommand.</p>
<p>WPF уже обладает большим набором встроенных команд. Все они представляют объекты класса <span class="b">RoutedUICommand</span>, который является 
производным от RoutedCommand.</p>
<p>Все встроенные команды объединяются в семь групп, и каждую такую группу представляет отдельный статический класс. 
А отдельные команды реализованы как статические свойства этих классов:</p>
<ul>
<li><p>Общие команды приложения представлены классом <span class="b">ApplicationCommands</span>. Это команды: <span class="b">CancelPrint</span> 
(Отменить печать), <span class="b">Close</span> (Закрыть), <span class="b">ContextMenu</span> (Конекстное меню), <span class="b">Copy</span> (Копировать), 
<span class="b">CorrectionList</span> (Список исправлений), <span class="b">Cut</span> (Вырезать), <span class="b">Delete</span> (Удалить), 
<span class="b">Find</span> (Найти), <span class="b">Help</span> (Справка), <span class="b">New</span> (Создать), <span class="b">Open</span> (Открыть), 
<span class="b">Paste</span> (Вставить), <span class="b">Prit</span> (Печать), <span class="b">PrintPreview</span> (Предварительный просмотр), 
<span class="b">Properties</span> (Свойства), <span class="b">Redo</span> (Повторить), <span class="b">Replace</span> (Заменить), 
<span class="b">Save</span> (Сохранить), <span class="b">SaveAs</span> (Сохранить как), <span class="b">SelectAll</span> (Выделить все), 
<span class="b">Stop</span> (Остановить), <span class="b">Undo</span> (Отменить) и т.д.</p></li>
<li><p>Команды навигации применяются для навигации по содержимому, например, в браузерных приложениях. Они представлены классом 
<span class="b">NavigationCommands</span>: <span class="b">BrowseBack</span> (Назад), <span class="b">BrowseForward</span> (Вперед), 
<span class="b">BrowseHome</span> (Домой / На главную страницу)</p>, <span class="b">BrowseStop</span> (Остановить), 
<span class="b">Favorites</span> (Избранное), <span class="b">FirstPage</span> (Первая страница), <span class="b">GoToPage</span> (Переход), 
<span class="b">LastPage</span> (Последняя страница), <span class="b">NextPage</span> (Следующая страница), 
<span class="b">PreviousPage</span> (Предыдущая страница), <span class="b">Refresh</span> (Обновить) и т.д.</p></li>
<li><p>Команды компонентов интерфейса используются для перемещения и выделения содержимого элементов управления. Они представлены 
классом <span class="b">ComponentCommands</span>: <span class="b">MoveDown</span> (Переместить курсор вниз), 
<span class="b">MoveLeft</span> (Переместить курсор влево), <span class="b">MoveRight</span> (Переместить курсор вправо), 
<span class="b">MoveUp</span> (Переместить курсор вверх), <span class="b">ScrollPageDown</span> (Прокрутить вниз), 
<span class="b">SelectToEnd</span> (Прокрутить вверх) и т.д.</p></li>
<li><p>Команды редактирования документов представлены классом <span class="b">EditingCommands</span>: 
<span class="b">AllignCenter</span> (Выравнивание по центру), <span class="b">DecreaseFontSize</span> (Уменьшение высоты шрифта), 
<span class="b">MoveDownByLine</span> (Переход на строку вниз) и т.д.</p></li>
<li><p>Команды для управления мультимедиа представлены классом <span class="b">MediaCommands</span>: 
<span class="b">DecreaseVolume</span> (Уменьшить громкость), <span class="b">Play</span> (Воспроизвести), 
<span class="b">Rewind</span> (Перемотка), <span class="b">Record</span> (Запись)</p></li>
<li><p>Системные команды представлены классом <span class="b">SystemCommands</span>: <span class="b">CloseWindow</span> (Закрыть окно приложения), 
<span class="b">MaximizeWindow</span> (Развернуть окно), <span class="b">MinimizeWindow</span> (Свернуть окно), 
<span class="b">RestoreWindow</span> (Восстановить окно) и т.д.</p></li>
<li><p>Команды ленты панели инструментов представлены классом <span class="b">RibbonCommands</span>: 
<span class="b">AddToQuickAccessToolBar</span> (Добавить на для быстрого доступа), 
<span class="b">MaximizeRibbonCommand</span> (Развернуть ленту панели инструментов) и т.д.</p></li>
</ul>
<p>Это только некоторые команды. И гораздо много, и они охватывают множество ситуаций.<p>
<h3>Источник команд</h3>
<p>Источником команды является элемент, который вызывает команду. Однако не каждый элемент управления может быть источником. Для этого он должен 
реализовать интерфейс <code>ICommandSource</code>:</p>
<pre class="brush: c#;">
public interface ICommandSource
{
	ICommand Command {get;}
	object CommandParameter {get;}
	IInputElement CommandTarget {get;}
}
</pre>
<ul>
<li><p>Свойство <code>Command</code> представляет выполняемую команду. Однако это свойство игнорируется системой, если объект, реализующий 
 интерфейс <code>ICommand</code>, не является наследником класса <code>RoutedCommand</code>.</p>
 <p>Как понятно из объявления интерфейса, элемент, его реализующий, может принимать только одну команду.</p></li>
<li><p>Свойство <code>CommandParameter</code> представляет параметр выполняемой команды - это те данные, которые передаются команде</p></li>
<li><p>Свойство <code>CommandTarget</code> представляет цель команды, то есть элемент, для которого выполняется команда. Нередко в качестве цели команды 
выступает тот же самый элемент, который и вызывает команду, а свойство имеет значение <code>null</code></p></li>
</ul>
<p>Допустим, если у нас есть кнопка, и мы хотим к ней добавить команду ApplicationCommands.Help, то мы могли бы в коде XAML прописать так:</p>
<pre class="brush:xml;">&lt;Button x:Name="helpButton" Command="ApplicationCommands.Help" Content="Help" /&gt;</pre>
<p>Также допустимо сокращение название команды:</p>
<pre class="brush:xml;">&lt;Button x:Name="helpButton" Command="Help" Content="Help" /&gt;</pre>
<p>Либо можно сделать это в коде C#:</p>
<pre class="brush:c#;">helpButton.Command = ApplicationCommands.Help;</pre>
<h3>Привязка команд</h3>
<p>Все команды, в том числе и встроенные, не содержат конкретного кода по их выполнению. Это просто 
специальные объекты, которые представляют некоторую задачу. Чтобы связать эти команды с реальным кодом, который бы выполнял некоторые действия, нужно 
использовать привязку команд.</p>
<p>Привязка команд представляет объект <span class="b">CommandBinding</span>. Его событие <code>Executed</code> прикрепляет обработчик, который будет выполняться 
при вызове команды. А свойство <code>Command</code> уставливает саму команду, к которой относится обработчик.</p>
<p>Обычная форма установки привязки команды, например, где-нибудь в конструкторе класса MainWindow:</p>
<pre class="brush:c#;">
// создаем привязку команды
CommandBinding commandBinding = new CommandBinding();
// устанавливаем команду
commandBinding.Command = ApplicationCommands.Help;
// устанавливаем метод, который будет выполняться при вызове команды
commandBinding.Executed += CommandBinding_Executed;
// добавляем привязку к коллекции привязок элемента Button
helpButton.CommandBindings.Add(commandBinding);
</pre>
<p>Команда добавляется в коллекцию CommandBindings элемента Button. И после этого, если мы вызовем команду, то будет выполняться метод <code>CommandBinding_Executed</code>, 
который может быть определен, к примеру, следующим образом:</p>
<pre class="brush:c#;">
private void CommandBinding_Executed(object sender, ExecutedRoutedEventArgs e)
{
    MessageBox.Show("Справка по приложению");
}
</pre>
<p>Также мы можем определить привязку в коде XAML:</p>
<pre class="brush:xml;">
&lt;Button x:Name="helpButton" Command="ApplicationCommands.Help" Content="Help"&gt;
    &lt;Button.CommandBindings&gt;
        &lt;CommandBinding Command="Help" Executed="CommandBinding_Executed" /&gt;
    &lt;/Button.CommandBindings&gt;
&lt;/Button&gt;
</pre>
<p>Это форма определения привязки команды будет аналогично той, что использовалась в коде C#.</p>
<h3>Маршрутизация команд</h3>
<p>Как и события, команды в WPF являются маршрутизированными. А это значит, что команду можно вызвать на одном элементе и она будет идет вверх от вложенного элемента 
к контейнеру. К примеру, определим следующий код xaml:</p>
<pre class="brush:xml;">
&lt;Window x:Class="CommandsApp.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:CommandsApp"
        mc:Ignorable="d"
        Title="MainWindow" Height="250" Width="300"&gt;
    &lt;Window.CommandBindings&gt;
        &lt;CommandBinding Command="Help" Executed="WindowBinding_Executed" /&gt;
    &lt;/Window.CommandBindings&gt;
    &lt;Grid&gt;
        &lt;Button x:Name="helpButton" Command="ApplicationCommands.Help" Content="Help" /&gt;
    &lt;/Grid&gt;
&lt;/Window&gt;
</pre>
<p>И в файле кода пропишем метод <code>WindowBinding_Executed</code>:</p>
<pre class="brush:c#;">
private void WindowBinding_Executed(object sender, ExecutedRoutedEventArgs e)
{
    MessageBox.Show("Вызов справки");
}
</pre>
<p>При нажатии на кнопку команда пойдет вверх от кнопки, которая ее вызвала, к объектам контейнерам - Grid и Window. И так как у элемента Window в коллекцию привязок 
добавлена привязка для команды Help, то она будет использоваться для выполнения этой команды.</p>
<h3>Пример использования команд</h3>
<p>Теперь объединим все и создадим систему для вызова команды. Для этого определим код XAML:</p>
<pre class="brush:xml;">
&lt;Window x:Class="CommandsApp.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:CommandsApp"
        mc:Ignorable="d"
        Title="MainWindow" Height="250" Width="300"&gt;
    &lt;DockPanel&gt;
        &lt;Menu DockPanel.Dock="Top" MinHeight="25"&gt;
            &lt;MenuItem Header="File" /&gt;
            &lt;MenuItem Header="Edit"&gt;
                &lt;MenuItem Header="Copy" CommandTarget="{Binding ElementName=txtBox}" Command="Copy"/&gt;
                &lt;MenuItem Header="Paste" CommandTarget="{Binding ElementName=txtBox}" Command="Paste"/&gt;
            &lt;/MenuItem&gt;
        &lt;/Menu&gt;
        &lt;TextBox x:Name="txtBox" /&gt;
    &lt;/DockPanel&gt;
&lt;/Window&gt;
</pre>
<p>Здесь два пункта меню Copy и Paste будут вызывать соответствующие команды. Причем здесь мы не задаем привязку для этих команд, так как для команд 
Copy, Cut, Redo, Undo и Paste уже опредлены встроенные привязки. Поэтому в данном случае нам не надо вносить в файл кода C# никаких изменений.</p> 
<p>Кроме того, здесь с помощью выражения <code>CommandTarget="{Binding ElementName=txtBox}"</code> мы указываем, что команды будут направлены на текстовое поле, которое будет целью команд. 
И теперь запустим проект:</p>
<img src="./pics/7.1.png" />
<img src="./pics/7.2.png" />
<p>Если в буфере обмена ничего нет, то команда Paste будет неактивной. Также если в текстовом поле не выделен текст, то пункт меню Copy также будет не активным. 
При выделении текста становится активным пункт меню Copy, а после копирования в буфер и пункт меню Paste.</p>
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


<div class="nav"><p><a href="3.php">Назад</a><a href="./">Содержание</a><a href="7.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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