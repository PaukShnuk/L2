<!DOCTYPE html>
<html >
<head>
<title>Управление списками в Silverlight</title>
<meta charset="utf-8" />
<meta name="description" content="Описание свойств и использования элементов управления списками ListBox, ComboBox, TreeView, DataGrid и панели вкладок">
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
<h2>Управление списками в Silverlight</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Все элементы управления списками являются производными от класса ItemsControl, который в свою очередь является наследником класса Control. 
Все они содержат коллекцию элементов. Элементы могут быть напрямую добавлены в коллецию, возможна также привязка некоторого массива данных к коллеции.</p>
<p>Все эти элементы поддерживают свойство <span class="bb">Items</span>, которое позволяет получить или установить коллекцию подэлементов, входящих в список.</p> 
<p>Также они поддерживать свойство для чтения <span class="bb">HasItems</span>, позволяющее узнать, есть ли элементы в коллекции. Также наличие и количество элементов можно узнать по свойству <strong>Items.Count</strong></p>
<p>Все элементы управления списками поддерживают выделение входящих элементов. Выделенный элемент(ы) можно получить с помощью свойств 
<b>SelectedItem</b>(<span class="bb">SelectedItems</span>), а получить индекс выделенного элемента - с помощью свойства <span class="bb">SelectedIndex</span>. 
  Свойство <span class="bb">SelectedValue</span> позволяет получить значение выделенного элемента.</p>
<h3>ListBox</h3>
<p>Представляет собой обычный список. Содержит коллецию элементов ListBoxItem. Также ListBox может содержать любые другие элемент, например,</p> 
<pre class="brush:xml;">
  &lt;ListBox Name="list"&gt;
            &lt;TextBlock FontWeight="Bold" TextDecorations="Underline"&gt;Отборочная группа&lt;/TextBlock&gt;
            &lt;ListBoxItem Background="LightGray"&gt;Россия&lt;/ListBoxItem&gt;
            &lt;ListBoxItem&gt;Ирландия&lt;/ListBoxItem&gt;
            &lt;ListBoxItem Background="LightGray"&gt;Словакия&lt;/ListBoxItem&gt;
            &lt;ListBoxItem&gt;Армения&lt;/ListBoxItem&gt;
            &lt;ListBoxItem Background="LightGray"&gt;Македония&lt;/ListBoxItem&gt;
            &lt;ListBoxItem&gt;Андорра&lt;/ListBoxItem&gt;
  &lt;/ListBox&gt;
</pre>
<img src="silpics/4.10.jpg" />
<p>Но все эти элементы будут находиться в коллеции list.Items и таким образом по счетчику можно к ним обращаться, например, list.Items[0] - первый элемент ListBox.<p>
<p>ListBox поддерживает множественный выбор. Для этого нужно установить свойство <code>SelectionMode="Multiple"</code> или <code>SelectionMode="Extended"</code>. 
В последнем случае, чтобы выделить несколько элементов, необходимо держать нажатой клавишу Ctrl или Shift. По умолчанию <code>SelectionMode="Single"</code>, то есть допускается только единственное выделение.</p>
<p>Также надо отметить, что элементы <b>ListBoxItem</b> представляют элементы управления содержимым, поэтмоу могут включать не только текст, 
  но и сложное содержимое - другие элементы и объекты.</p>
<h3>ComboBox</h3>
<p>Cодержит коллекцию элементов ComboBoxItems и образует выпадающий список. Если задать свойство <code>IsEditable="True"</code>, то в поле выбора ComboBox можно ввести текст для поиска. 
Элемент ComboBoxItem должен содержать текст. Например,</p>
<pre class="brush:xml;">
	&lt;ComboBox Height="25" Width="90" IsEditable="True"&gt;
            &lt;ComboBoxItem&gt;Первый&lt;/ComboBoxItem&gt;
            &lt;ComboBoxItem&gt;Второй&lt;/ComboBoxItem&gt;
            &lt;ComboBoxItem&gt;Третий&lt;/ComboBoxItem&gt;
    &lt;/ComboBox&gt;</pre>
<p>Посокльку элемент ComboBoxItem, как и ListBoxItem, является элементом управления содержимым, мы можем вложить в него более 
сложный контент, но в этом случае свойство <span class="bb">IsEditable</span> должно быть равно <code>False</code>:</p>
<pre class="brush:xml;">
		&lt;ComboBoxItem&gt;
                &lt;StackPanel Orientation="Horizontal"&gt;
                    &lt;Ellipse Width="10" Height="10" Fill="Black" HorizontalAlignment="Left" /&gt;
                    &lt;TextBlock HorizontalAlignment="Right"&gt;Первый&lt;/TextBlock&gt;
                &lt;/StackPanel&gt;
     &lt;/ComboBoxItem&gt;</pre>
<h3>TabControl и TabItem</h3>
<p>Для создания вкладок в Silverlight предназначен элемент TabControl, а отдельная вкладка представлена элементом TabItem. 
Чтобы использовать вкладки, надо добавить в декларации пространство имен System.Windows.Controls: 
<code>xmlns:controls="clr-namespace:System.Windows.Controls;assembly=System.Windows.Controls"</code> или подключить sdk:
<code>xmlns:sdk="http://schemas.microsoft.com/winfx/2006/xaml/presentation/sdk"</code>. </p>
<p>Затем надо определить в элементе TabControl несколько элементов TabItem :</p>
<pre class="brush:xml;">&lt;controls:TabControl&gt;
            &lt;controls:TabItem&gt;
                &lt;controls:TabItem.Header&gt;
                    &lt;StackPanel Orientation="Horizontal"&gt;
                    &lt;Ellipse Height="10" Width="10" Fill="Black" /&gt;
                        &lt;TextBlock Margin="3"&gt;Вкладка 1&lt;/TextBlock&gt;
                    &lt;/StackPanel&gt;
                &lt;/controls:TabItem.Header&gt;
                &lt;controls:TabItem.Content&gt;
                    &lt;StackPanel&gt;
                    &lt;RadioButton IsChecked="True"&gt;Россия&lt;/RadioButton&gt;
                    &lt;RadioButton&gt;Словакия&lt;/RadioButton&gt;
                    &lt;RadioButton&gt;Ирландия&lt;/RadioButton&gt;
                    &lt;/StackPanel&gt;
                &lt;/controls:TabItem.Content&gt;
            &lt;/controls:TabItem&gt;
            &lt;controls:TabItem&gt;
                &lt;controls:TabItem.Header&gt;
                    &lt;StackPanel Orientation="Horizontal"&gt;
                        &lt;Rectangle Height="10" Width="10" Fill="Black" /&gt;
                        &lt;TextBlock Margin="3"&gt;Вкладка 2&lt;/TextBlock&gt;
                    &lt;/StackPanel&gt;
                &lt;/controls:TabItem.Header&gt;
            &lt;/controls:TabItem&gt;
        &lt;/controls:TabControl&gt;</pre>
<img src="silpics/4.11.jpg" />
<h3>TreeView</h3>
<p>Предназначен для древовидного отображения данных в окне приложения. Может содержать как коллекцию элементов <span class="bb">TreeViewItem</span>, так и другое содержимое.</p>
<p>TreeView также находится в пространстве имен System.Windows.Controls, поэтому перед использованием дерева надо подключить это пространство 
(в данном случае оно отображается на префикс controls) или пространство имен sdk:</p>
   <pre class="brush:xml;">
      &lt;controls:TreeView&gt;
            &lt;controls:TreeViewItem Header="Социальные сети"&gt;
                &lt;controls:TreeViewItem Header="Одноклассники" /&gt;
                &lt;StackPanel Orientation="Horizontal"&gt;
                    &lt;Image Source="twitter.png"&gt;&lt;/Image&gt;
                    &lt;TextBlock&gt;Twitter&lt;/TextBlock&gt;
                &lt;/StackPanel&gt;
                &lt;StackPanel Orientation="Horizontal"&gt;
                    &lt;Image Source="facebook.png"&gt;&lt;/Image&gt;
                    &lt;TextBlock&gt;Facebook&lt;/TextBlock&gt;
                &lt;/StackPanel&gt;
                &lt;StackPanel Orientation="Horizontal"&gt;
                    &lt;Image Source="vkontakte.png"&gt;&lt;/Image&gt;
                    &lt;TextBlock&gt;VKontakte&lt;/TextBlock&gt;
                &lt;/StackPanel&gt;
                &lt;controls:TreeViewItem Header="Google+" /&gt;
            &lt;/controls:TreeViewItem&gt;
            &lt;controls:TreeViewItem Header="Языки программирования"&gt;
                    &lt;controls:TreeViewItem Header="C-языки"&gt;
                    &lt;controls:TreeViewItem Header="C#" /&gt;
                    &lt;controls:TreeViewItem Header="C/C++" /&gt;
                    &lt;controls:TreeViewItem Header="Java" /&gt;
            &lt;/controls:TreeViewItem&gt;
            &lt;controls:TreeViewItem Header="Basic"&gt;
                    &lt;controls:TreeViewItem Header="Visual Basic" /&gt;
                    &lt;controls:TreeViewItem Header="VB.Net" /&gt;
                    &lt;controls:TreeViewItem Header="PureBasic" /&gt;
                &lt;/controls:TreeViewItem&gt;
            &lt;/controls:TreeViewItem&gt;
        &lt;/controls:TreeView&gt;</pre>
 <img src="silpics/4.12.jpg" />
<h3>DataGrid</h3>
<p>DataGrid представляет собой таблицу с возможностью редактирования содержимого. Для использования этого элемента надо добавить в xaml пространство имен 
sdk: <code>xmlns:sdk="http://schemas.microsoft.com/winfx/2006/xaml/presentation/sdk"</code> или System.Windows.Controls.Data, где собственно DataGrid и 
находится.</p>
<p>Итак, допустим, нам надо вывести на таблицу с некоторыми данными. В качестве модели определим класс Team, который содержит поля для занимаемого 
места в турнире, количества очков и названия страны:</p>
<pre class="brush:c#;">
public class Team
    {
        public string country { get; set; }
        public byte place { get; set; }
        public byte score { get; set; }

        public Team(string _country, byte _place, byte _score)
        {
            this.country = _country;
            this.place = _place;
            this.score = _score;
        }
    }
</pre>
<p>Теперь добавим в приложение DataGrid. Чтобы DataGrid автоматически разбивал таблицу на столбцы, установим свойство <code>AutoGenerateColumns="True"</code>:</p>
<pre class="brush:xml;">
&lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
             xmlns:sdk="http://schemas.microsoft.com/winfx/2006/xaml/presentation/sdk"
    mc:Ignorable="d"
    d:DesignHeight="200" d:DesignWidth="250"&gt;
    &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;sdk:DataGrid x:Name="datagrid1" AutoGenerateColumns="True"&gt;
            
        &lt;/sdk:DataGrid&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<p>Теперь свяжем его с некоторым источником данных в конструкторе окна:</p>
<pre class="brush:c#;">
List&lt;Team&gt; teams;
        public MainPage()
        {
            InitializeComponent();

            teams = new List&lt;Team&gt;();
            teams.Add(new Team("Russia", 1, 23));
            teams.Add(new Team("Ireland", 2, 18));
            teams.Add(new Team("Armenia", 3, 17));
            teams.Add(new Team("Slovakia", 4, 15));
            datagrid1.ItemsSource = teams;
        }
</pre>
<p>Здесь мы определили глобальную переменную teams и добавили в нее четыре записи. Запустим приложение и увидим, что таблица добавила наши записи:</p>
  <img src="silpics/4.13.jpg" />
 <h4>Некоторые полезные свойства DataGrid</h4>
  <table class="tab">
  <tr><td><p>Свойство</p></td><td><p>Описание</p></td></tr>
  <tr><td><p><span class="bb">RowBackground</span> и <span class="bb">AlternatingRowBackground</span></p></td>
  <td><p>Устанавливают фон строки. Если установлены оба свойства, цветовой фон чередуется: <span class="bb">RowBackground</span> - для четных строк и <span class="bb">AlternatingRowBackground</span> - для нечетных</p></td>
  </tr>
  <tr><td><p><span class="bb">ColumnHeaderHeight</span></p></td><td><p>Устанавливает высоту строки названий столбцов.</p></td></tr>
  <tr><td><p><span class="bb">ColumnWidth</span></p></td><td><p>Устанавливает ширину столбцов.</p></td></tr>
  <tr><td><p><span class="bb">RowHeight</span></p></td><td><p>Устанавливает высоту строк.</p></td></tr>
  <tr><td><p><span class="bb">GridLinesVisability</span></p></td><td><p>Устанавливает видимость линий, разделяющих столбцы и строки. 
  Имеет четыре значения: <span class="bb">All</span> - видны все линии, <span class="bb">Horizontal</span> - видны только горизонтальные линии, <span class="bb">Vertical</span> - видны только вертикальные линии, <span class="bb">None</span> - линии отсутствуют</p></td></tr>
  <tr><td><p><span class="bb">HeadersVisability</span></p></td><td><p>Задает видимость заголовков</p></td></tr>
  <tr><td><p><span class="bb">HorizontalGridLinesBrush</span> и <span class="bb">VerticalGridLinesBrush</span></p></td><td><p>Задает цвет горизонтальных и вертикальных линий соответственно</p></td></tr></table>
  <p>Предыдущий пример. хотя и работает, но имеет ряд недостатков. Во-первых, столбцы идут в том порядке, в каком объявлены переменные в классе 
  Team. Во-вторых, названия столбцов соответствуют именам переменных. Попробуем это изменить. Мы также можем настроить не только внешний вид, но тип столбцов. Например, мы можем задать тип столбца, отличный от текстового. 
  DataGrid поддерживает следующие варианты столбцов:</p>
  <table class="tab">
  <tr><td><p>DataGridTextColumn</p></td><td><p>Отображает элемент TextBlock или TextBox при редактировании</p></td></tr>
  <tr><td><p>DataGridCheckBoxColumn</p></td><td><p>Отображает элемент CheckBox</p></td></tr>
  <tr><td><p>DataGridTemplateColumn</p></td><td><p>Позволяет задать специфичный шаблон для отображения столбца</p></td></tr>
  </table>
  <p>Перепишем предыдущий пример с учетом новой информации (код в файле отделенного кода останется тем же):</p>
  <pre class="brush:xml;">
  &lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
             xmlns:sdk="http://schemas.microsoft.com/winfx/2006/xaml/presentation/sdk"
    mc:Ignorable="d"
    d:DesignHeight="200" d:DesignWidth="250"&gt;
    &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;sdk:DataGrid x:Name="datagrid1" AutoGenerateColumns="False"&gt;
            &lt;sdk:DataGrid.Columns&gt;
                &lt;sdk:DataGridTextColumn Header="Место" Binding="{Binding Path=place}" Width="50"&gt;&lt;/sdk:DataGridTextColumn&gt;
                &lt;sdk:DataGridTextColumn Header="Страна" Binding="{Binding Path=country}" Width="80"&gt;&lt;/sdk:DataGridTextColumn&gt;
                &lt;sdk:DataGridTextColumn Header="Очки" Binding="{Binding Path=score}" Width="50"&gt;&lt;/sdk:DataGridTextColumn&gt;
            &lt;/sdk:DataGrid.Columns&gt;
        &lt;/sdk:DataGrid&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
  <img src="silpics/4.14.jpg" />
  <p>Среди свойств DataGrid одним из самых интересных является <b>RowDetailsTemplate</b>. Оно позволяет задать шаблон отображения дополнительной информации касательно данной строки. 
  Добавим в разметку элемента DataGrid следующий код: </p>
  <pre class="brush:xml;">
    &lt;sdk:DataGrid.RowDetailsTemplate&gt;
                &lt;DataTemplate&gt;
                    &lt;StackPanel Orientation="Horizontal"&gt;
                        &lt;TextBlock Text="{Binding Path=score}" /&gt;
                        &lt;TextBlock Text=" очков набрала команда в шести матчах" /&gt;
                    &lt;/StackPanel&gt;
                &lt;/DataTemplate&gt;
    &lt;/sdk:DataGrid.RowDetailsTemplate&gt;
</pre>
<img src="silpics/4.15.jpg" />
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


<div class="nav"><p><a href="4.3.php">Назад</a><a href="./">Содержание</a><a href="4.5.php">Вперед</a></p></div></div>
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