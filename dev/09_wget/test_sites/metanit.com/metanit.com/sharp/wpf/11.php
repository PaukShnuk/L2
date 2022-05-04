<!DOCTYPE html>
<html >
<head>
<title>C# и WPF | Привязка</title>
<meta charset="utf-8" />
<meta name="description" content="Обзор механизма привязки (binding) в WPF, класс Binding и его основные свойства и методы, привязка к данным через контекст данных DataContext">
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
<h1>Привязка</h1><h2>Введение в привязку данных</h2><div class="date">Последнее обновление: 7.02.2016</div>

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

<p>В WPF привязка (binding) является мощным инструментом программирования, без которого не обходится ни одно серьезное приложение.</p>
<p>Привязка подразумевает взаимодействие двух объектов: источника и приемника. Объект-приемник создает привязку к определенному свойству объекта-источника. 
В случае модификации объекта-источника, объект-приемник также будет модифицирован. Например, простейшая форма с использованием привязки:</p>
<pre class="brush:xml;">
&lt;Window x:Class="BindingApp.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:BindingApp"
        mc:Ignorable="d"
        Title="MainWindow" Height="250" Width="300"&gt;
    &lt;StackPanel&gt;
        &lt;TextBox x:Name="myTextBox" Height="30" /&gt;
        &lt;TextBlock x:Name="myTextBlock" Text="{Binding ElementName=myTextBox,Path=Text}" Height="30" /&gt;
    &lt;/StackPanel&gt;
&lt;/Window&gt;
</pre>
<img src="./pics/11.1.png" alt="Привязка в WPF" />
<p>Для определения привязки используется выражение типа:</p>
<pre class="brush:c#;">{Binding ElementName=Имя_объекта-источника, Path=Свойство_объекта-источника}</pre>
<p>То есть в данном случае у нас элемент TextBox является источником, а TextBlock - приемником привязки. Свойство Text элемента TextBlock привязывается 
к свойству Text элемента TextBox. В итоге при осуществлении ввода в текстовое поле синхронно будут происходить изменения в текстовом блоке.</p>
<h3>Работа с привязкой в C#</h3>
<p>Ключевым объектом при создании привязки является объект <span class="b">System.Windows.Data.Binding</span>. Используя этот объект мы можем получить уже имеющуюся 
привязку для элемента:</p>
<pre class="brush:c#;">Binding binding = BindingOperations.GetBinding(myTextBlock, TextBlock.TextProperty);</pre>
<p>В данном случае получаем привязку для свойства зависимостей TextProperty элемента myTextBlock.</p>
<p>Также можно полностью установить привязку в коде C#:</p>
<pre class="brush:c#;">
public MainWindow()
{
    InitializeComponent();


    Binding binding = new Binding();

    binding.ElementName = "myTextBox"; // элемент-источник
    binding.Path = new PropertyPath("Text"); // свойство элемента-источника
    myTextBlock.SetBinding(TextBlock.TextProperty, binding); // установка привязки для элемента-приемника
}
</pre>
<p>Если в дальнейшем нам станет не нужна привязка, то мы можем воспользоваться классом <span class="bb">BindingOperations</span> и его методами 
<span class="b">ClearBinding()</span>(удаляет одну привязку) и <span class="b">ClearAllBindings()</span> (удаляет все привязки для данного элемента)</p>
<pre class="brush: c#;">BindingOperations.ClearBinding(myTextBlock, TextBlock.TextProperty);</pre>
<p>или</p>
<pre class="brush: c#;">BindingOperations.ClearAllBindings(myTextBlock);</pre>
<p>Некоторые свойства класса <span class="b">Binding</span>:</p>
<ul>
<li><p><span class="b">ElementName</span>: имя элемента, к которому создается привязка</p></li>
<li><p><span class="b">IsAsync</span>: если установлено в True, то использует асинхронный режим получения данных из объекта. По умолчанию равно False</p></li>
<li><p><span class="b">Mode</span>: режим привязки</p></li>
<li><p><span class="b">Path</span>: ссылка на свойство объекта, к которому идет привязка</p></li>
<li><p><span class="b">TargetNullValue</span>: устанавливает значение по умолчанию, если привязанное свойство источника привязки имеет значение null</p></li>
<li><p><span class="b">RelativeSource</span>: создает привязку относительно текущего объекта</p></li>
<li><p><span class="b">Source</span>: указывает на объект-источник, если он не является элементом управления.</p></li>
<li><p><span class="b">XPath</span>: используется вместо свойства path для указания пути к xml-данным</p></li>
</ul>
<h3>Режимы привязки</h3>
<p>Свойство <span class="b">Mode</span> объекта Binding, которое представляет режим привязки, может принимать следующие значения:</p>
<ul>
<li><p><span class="b">OneWay</span>: свойство объекта-приемника изменяется после модификации свойства объекта-источника.</p></li>
<li><p><span class="b">OneTime</span>: свойство объекта-приемника устанавливается по свойству объекта-источника только один раз. В дальнейшем изменения в 
источнике никак не влияют на объект-приемник.</p></li>
<li><p><span class="b">TwoWay</span>: оба объекта - применки и источник могут изменять привязанные свойства друг друга.</p></li>
<li><p><pan class="b">OneWayToSource</span>: объект-приемник, в котором объявлена привязка, меняет объект-источник.</p></li>
<li><p><span class="b">Default</span>: по умолчанию (если меняется свойство <code>TextBox.Text</code>, то имеет значение TwoWay, в остальных случаях 
<code>OneWay</code>).</p></li>
</ul>
<p>Применение режима привязки:</p>
<pre class="brush:xml;">
&lt;StackPanel&gt;
    &lt;TextBox x:Name="textBox1" Height="30" /&gt;
    &lt;TextBox x:Name="textBox2" Height="30" Text="{Binding ElementName=textBox1, Path=Text, Mode=TwoWay}" /&gt;
&lt;/StackPanel&gt;
</pre>
<h3>Обновление привязки. UpdateSourceTrigger</h3>
<p>Односторонняя привязка от источника к приемнику практически мгновенно изменяет свойство приемника. Но если мы используем двустороннюю привязку в случае с текстовыми полями (как в примере выше), 
то при изменении приемника свойство источника не изменяется мгновенно. Так, в примере выше, чтобы текстовое поле-источник изменилось, нам надо перевести фокус с 
текстового поля-приемника. И в данном случае в дело вступает свойство <span class="b">UpdateSourceTrigger</span> класса Binding, которое задает, как будет присходить обновление. 
Это свойство в качестве принимает одно из значений перечисления <span class="b">UpdateSourceTrigger</span>:</p>
<ul>
<li><p><code>PropertyChanged</code>: источник привязки обновляется сразу после обновления свойства в приемнике</p></li>
<li><p><code>LostFocus</code>: источник привязки обновляется только после потери фокуса приемником</p></li>
<li><p><code>Explicit</code>: источник не обновляется до тех пор, пока не будет вызван метод <code>BindingExpression.UpdateSource()</code></p></li>
<li><p><code>Default</code>: значение по умолчанию. Для большинства свойств это значение <code>PropertyChanged</code>. А для свойства Text элемента 
TextBox это значение LostFocus</p></li>
</ul>
<p>В данном случае речь идет об обновлении источника привязки после изменения приемника в режимах <code>OneWayToSource</code> или <code>TwoWay</code>. 
То есть чтобы у нас оба текстовых поля, которые связаны режимом TwoWay, моментально обновлялись после изменения одного из них, надо использовать значение 
<code>UpdateSourceTrigger.PropertyChanged</code>:</p>
<pre class="brush:xml;">
&lt;StackPanel&gt;
    &lt;TextBox x:Name="textBox1" Height="30" /&gt;
    &lt;TextBox x:Name="textBox2" Height="30" 
		Text="{Binding ElementName=textBox1, Path=Text, Mode=TwoWay, UpdateSourceTrigger=PropertyChanged}" /&gt;
&lt;/StackPanel&gt;
</pre>
<h3>Свойство Source</h3>
<p>Свойство Source позволяет установить привязку даже к тем объектам, которые не являются элементами управления WPF. Например, определим класс Phone:</p>
<pre class="brush: c#;">
class Phone
{
    public string Title { get; set; }
    public string Company { get; set; }
    public int Price { get; set; }
}
</pre>
<p>Теперь создадим объект этого класса и определим к нему привязку:</p>
<pre class="brush:xml;">
&lt;Window x:Class="BindingApp.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:BindingApp"
        mc:Ignorable="d"
        Title="MainWindow" Height="150" Width="300"&gt;
    &lt;Window.Resources&gt;
        &lt;local:Phone x:Key="nexusPhone" Title="Nexus X5" Company="Google" Price="25000" /&gt;
    &lt;/Window.Resources&gt;
    &lt;Grid Background="Black"&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition /&gt;
            &lt;ColumnDefinition /&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;TextBlock Text="Модель:" Foreground="White"/&gt;
        &lt;TextBlock x:Name="titleTextBlock" Text="{Binding Source={StaticResource nexusPhone}, Path=Title}"
                        Foreground="White" Grid.Column="1"/&gt;
        &lt;TextBlock Text="Цена:" Foreground="White" Grid.Row="1"/&gt;
        &lt;TextBlock x:Name="priceTextBlock" Text="{Binding Source={StaticResource nexusPhone}, Path=Price}"
                        Foreground="White" Grid.Column="1" Grid.Row="1"/&gt;
    &lt;/Grid&gt;
&lt;/Window&gt;
</pre>
<img src="./pics/11.2.png" alt="Binding в WPF" />
<h3>Свойство TargetNullValue</h3>
<p>На случай, если свойство в источнике привязки вдруг имеет значение null, то есть оно не установлено, мы можем задать некоторое значение по умолчанию. 
Например:</p>
<pre class="brush:xml;">
&lt;Window.Resources&gt;
    &lt;local:Phone x:Key="nexusPhone" Company="Google" Price="25000" /&gt;
&lt;/Window.Resources&gt;
&lt;StackPanel&gt;
    &lt;TextBlock x:Name="titleTextBlock" 
		Text="{Binding Source={StaticResource nexusPhone}, Path=Title, TargetNullValue=Текст по умолчанию}" /&gt;
&lt;/StackPanel&gt;
</pre>
<p>В данном случае у ресурса nexusPhone не установлено свойство Title, поэтому текстовый блок будет выводить значение по умолчанию, указанное 
в параметре TargetNullValue.</p>
<h3>Свойство RelativeSource</h3>
<p>Свойство <span class="b">RelativeSource</span> позволяет установить привязку относительно элемента-источника, который связан какими-нибудь отношениями с элементом-приемником. 
Например, элемент-источник может быть одним из внешних контейнеров для элемента-приемника. Либо источником и приемником может быть один и тот же 
элемент.</p>
<p>Для установки этого свойства используется одноименный объект <span class="b">RelativeSource</span>. У этого объекта есть свойство 
<span class="b">Mode</span>, которое задает способ привязки. Оно принимает одно из значений перечисления <span class="b">RelativeSourceMode</span>:</p>
<ul>
<li><p><code>Self</code>: привязка осуществляется к свойству этого же элемента. То есть элемент-источник привязки в то же время является и приемником привязки.</p></li>
<li><p><code>FindAncestor</code>: привязка осуществляется к свойству элемента-контейнера.</p></li>
</ul>
<p>Например, совместим источник и приемник привязке в самом элементе:</p>
<pre class="brush:xml;">&lt;TextBox Text="{Binding RelativeSource={RelativeSource Mode=Self}, Path=Background, Mode=TwoWay, UpdateSourceTrigger=PropertyChanged}" /&gt;</pre>
<img src="./pics/11.3.png" alt="RelativeSource Binding в WPF" />
<p>Здесь текст и фоновый цвет текстового поля связаны двусторонней привязкой. В итоге мы можем увидеть в поле числовое значение цвета, поменять его, и 
вместе с ним изменится и фон поля.</p>
<p>Привязка к свойствам контейнера:</p>
<pre class="brush:xml;">
&lt;Grid Background="Black"&gt;
    &lt;TextBlock Foreground="White" 
		Text="{Binding RelativeSource={RelativeSource Mode=FindAncestor,AncestorType={x:Type Grid}}, Path=Background}" /&gt;
&lt;/Grid&gt;
</pre>
<p>При использовании режима FindAncestor, то есть привязке к контейнеру, необходимо еще указывать параметр <span class="b">AncestorType</span> и 
передавать ему тип контейнера в виде выражения <code>AncestorType={x:Type Тип_элемента-контейнера}</code>. При этом в качестве контейнера мы могли бы выбрать любой контейнер 
в дереве элементов, в частности, в данном случае кроме Grid таким контейнером также является элемент Window.</p>
<h3>Свойство DataContext</h3>
<p>У объекта <code>FrameworkElement</code>, от которого наследуются элементы управления, есть интересное свойство <span class="b">DataContext</span>. 
Оно позволяет задавать для элемента и вложенных в него элементов некоторый контекст данных. Тогда вложенные элементы могут использовать объект 
<code>Binding</code> для привязки к конкретным свойствам этого контекста. Например, используем ранее определенный класс Phone и создадим контекст данных 
из объекта этого класса:</p>
<pre class="brush:xml;">
&lt;Window x:Class="BindingApp.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:BindingApp"
        mc:Ignorable="d"
        Title="MainWindow" Height="150" Width="300"&gt;
    &lt;Window.Resources&gt;
        &lt;local:Phone x:Key="nexusPhone" Title="Nexus X5" Company="Google" Price="25000" /&gt;
    &lt;/Window.Resources&gt;
    &lt;Grid Background="Black" DataContext="{StaticResource nexusPhone}" TextBlock.Foreground="White"&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition /&gt;
            &lt;ColumnDefinition /&gt;
            &lt;ColumnDefinition /&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;TextBlock Text="Модель" /&gt;
        &lt;TextBlock Text="{Binding Title}" Grid.Row="1" /&gt;
        &lt;TextBlock Text="Производитель" Grid.Column="1"/&gt;
        &lt;TextBlock Text="{Binding Company}" Grid.Column="1" Grid.Row="1" /&gt;
        &lt;TextBlock Text="Цена" Grid.Column="2" /&gt;
        &lt;TextBlock Text="{Binding Price}" Grid.Column="2" Grid.Row="1" /&gt;
    &lt;/Grid&gt;
&lt;/Window&gt;
</pre>
<img src="./pics/10.4.png" alt="DataContext в WPF" />
<p>Таким образом мы задаем свойству DataContext некоторый динамический или статический ресурс. Затем осуществляем привязку к этому ресурсу.</p>
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


<div class="nav"><p><a href="9.3.php">Назад</a><a href="./">Содержание</a><a href="11.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 10.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 10.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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