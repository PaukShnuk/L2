<!DOCTYPE html>
<html >
<head>
<title>Привязка (Silverlight)</title>
<meta charset="utf-8" />
<meta name="description" content="Использование объекта Binding для создание привязки к элементам в xaml и коде c#">
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
<h1>Привязка</h1><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Привязка подразумевает взаимодействие двух объектов: источника и приемника. Объект-приемник создает привязку к определенному свойству объекта-источника. 
В случае модификации объекта-источника, объект-приемник также будет модифицирован. Например,</p>
<pre class="brush: xml;">
&lt;StackPanel&gt;
        &lt;TextBlock Text="{Binding ElementName=textBox1,Path=Text}" 
                       Foreground="White" Height="30" /&gt;
         &lt;TextBox x:Name="textBox1" /&gt;
&lt;/StackPanel&gt;
</pre>
<img src="silpics/9.1.jpg" />
<p>В данном случае при осуществлении ввода текста в элемент TextBox, он сразу же будет отображаться в элементе TextBlock и в другом элементе TextBox. 
После изменения текста во втором элементе TextBox, текст также будет меняться  вдругих элементах.
Конечно, в данном случае можно было бы прописать обработчик события Text_Changed, но в данном случае привязка выглядит намного изящнее.</p>
<p>Синтаксис привязки в общем случае выглядит следующим образом: в фигурных скобках сначала идет ключевое слово <strong>Binding</strong>, объявляя привязку, а затем свойства объекта Binding с соответствующими значениями:
<br>Например, <span class="bb">Элемент.Свойство="{Binding ElementName=Имя_объекта-источника, Path=Свойство_объекта-источника}"</span></p>
<p>Если попробовать создать вышеописанную привязку элемента TextBlock к элементу TextBox в файле кода, то код будет выглядеть так:</p>
<pre class="brush: c#;">
using System.Windows.Data;
...........................
Binding bind = new Binding();
bind.ElementName = "textBox1";
bind.Path = new PropertyPath("Text");
textBlock1.SetBinding(TextBlock.TextProperty, bind);
</pre>

<ul><p>Некоторые свойства класса <span class="bb">Binding</span></p>
<li><p><span class="bb">ElementName</span> - имя элемента, к которому создается привязка</p></li>
<li><p><span class="bb">Mode</span> - направление привязки</p></li>
<li><p><span class="bb">Path</span> - путь к данным объекта, может принимать сложные значения, например, SelectedItem.Header для TreeView</p></li>
<li><p><strong>RelativeSource</strong> создает привязку относительно текущего объекта</p></li>
<li><p><span class="bb">Source</span> указывает на объект-источник, если он не является элементом управления.</p></li>
</ul>

<p><span class="bb">Mode</span> может принимать следующие значения:</p>
<ul>
<li><p><strong>OneWay</strong> - свойство объекта-приемника изменяется после модификации свойства объекта-источника.</p></li>
<li><p><strong>OneTime</strong> - свойство объекта-приемника устанавливается по свойству объекта-источника только один раз.</p></li>
<li><p><strong>TwoWay</strong>- оба объекта могут изменять привязанные свойства друг друга.</p></li>
</ul>
<p>Пример использования двухсторонней привязки:</p>
<pre class="brush: xml;">&lt;StackPanel&gt;
            &lt;TextBox x:Name="textBox1"  /&gt;
            &lt;TextBox x:Name="textBox2" Text="{Binding ElementName=textBox1,Path=Text, Mode= TwoWay}" /&gt;
        &lt;/StackPanel&gt;</pre>
<p>Чтобы создать привязку относительно данного элемента используется свойство  <strong>RelativeSource</strong> класса <code>Binding</code>. Например, можно создать привязку на этот же элемент:</p>
  <pre class="brush: xml;">&lt;TextBlock Width="100" Height="30" Background="White" Text="{Binding RelativeSource={RelativeSource Mode=Self}, Path=FontFamily}" /&gt;</pre>
  <p>В результате элемент TextBlock будеть отображать название текущего шрифта</p>
  <p>При создании относительной привязки свойству RelativeSource класса <code>Binding</code> используется одноименный объект <code>RelativeSource</code>. 
  Этот объект устанавливает способ привязки (свойство <span class="bb">Mode</span>), например, <code>Self</code>. 
   Другой способ привязки - <strong>FindAncestor</strong> - указывает на родительский элемент или на дерево родительских элементов, поскольку дерево может иметь много уровней вложения. 
   При этом задается также свойство <span class="bb">AncestorType</span>, оно указывает на тип родительского элемента. Дополнительно может указываться свойство <span class="bb">AncestorLevel</span> - оно указывает на вхождение родительского элемента в дерево (по умолчанию равно единице):</p>
   <pre class="brush: xml;"> &lt;Grid x:Name="LayoutRoot" Background="Black"&gt;
            &lt;TextBlock Foreground="White" Text="{Binding RelativeSource={RelativeSource Mode=FindAncestor, AncestorType=Grid}, Path=Name}" /&gt;
    &lt;/Grid&gt;</pre>
   <p>В данном случае ведется поиск родительского элемента типа Grid, а затем отображается значение его свойства Name.</p>
<p>Если до этого мы создавали привязку к элементам, то сейчас попробуем сделать привязку к объекту, не являющемуcя элементом управления. Определим класс Team:</p>
<pre class="brush: c#;">
   public class Team
    {
        public string country{ get; set; }
        public int place { get; set; }
        public int score { get; set; }
		public Team(string _country, int _place, int _score)
        {
            this.country = _country;
            this.place = _place;
            this.score = _score;
        }
        public Team()
        { }
    }
</pre>
<p>Теперь создадим объект этого класса и определим к нему привязку:</p>
<pre class="brush: xml;">&lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
             xmlns:local="clr-namespace:TestApplication"
    mc:Ignorable="d"
    d:DesignHeight="200" d:DesignWidth="250"&gt;
    &lt;UserControl.Resources&gt;
        &lt;local:Team x:Key="Russia" country="Russia" place="1" score="23" /&gt;
    &lt;/UserControl.Resources&gt;
    &lt;Grid x:Name="LayoutRoot" Background="Black"&gt;
        &lt;StackPanel Orientation="Horizontal"&gt;
            &lt;TextBlock Text="Страна:" Foreground="White"/&gt;
            &lt;TextBlock x:Name="textBlock1" Text="{Binding Source={StaticResource Russia},Path=country}"
                        Foreground="White" Margin="60 0" /&gt;
        &lt;/StackPanel&gt;
        &lt;StackPanel Orientation="Horizontal" Margin="0 20"&gt;
            &lt;TextBlock Text="Набранные очки:" Foreground="White"/&gt;
            &lt;TextBlock x:Name="textBlock2" Text="{Binding Source={StaticResource Russia},Path=score}"
                        Foreground="White" Margin="10 0" /&gt;
        &lt;/StackPanel&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<img src="silpics/9.2.jpg" />
<h3>Обновление элемента после обновления привязанного объекта</h3>
<p>В последнем случае есть одна небольшая неприятность: в случае изменения свойства привязка автоматически не обновит текст в элементе 
<code>TextBlock</code>. Чтобы выйти из этой ситуации, придется написать несколько строк кода.</p>
<p>Добавим к предыдущему примеру объект StackPanel с элементом TextBox, куда будет вводится новое значение, и кнопку, которая будет генерировать обновление.</p>
<pre class="brush: xml;">&lt;StackPanel Orientation="Horizontal" Margin="0 60" VerticalAlignment="Center"&gt;
            &lt;TextBox Name="textbox1" Width="150" Text="Ввведите кол-во очков"&gt;&lt;/TextBox&gt;
            &lt;Button Content="Обновить" Foreground="White" Background="Black" Margin="15 0 0 0" Click="Button_Click" /&gt;        
  &lt;/StackPanel&gt;</pre>
 
  <P>Теперь нам надо реализовать в классе Team интерфейс <code>INotifyPropertyChanged</code>. 
   С помощью события <span class="bb">PropertyChanged</span> он уведомляет инфраструктуру Silverlight об изменении свойств объекта. Для этого подкорректируем немного класс Team:</P>
   <pre class="brush: c#;">
public class Team : INotifyPropertyChanged //using System.ComponentModel
    {
        private string _country;
        private int _place;
        private int _score;
        public string country
        { 
            get
            {
                return _country;
            }
            set
            {
                _country = value;
                OnPropertyChanged(new PropertyChangedEventArgs("country"));
            }
        }
        public int place 
        {
            get
            {
                return _place;
            }
            set
            {
                _place = value;
                OnPropertyChanged(new PropertyChangedEventArgs("place"));
            }
        }
        public int score 
        {
            get
            {
                return _score;
            }
            set
            {
                _score = value;
                OnPropertyChanged(new PropertyChangedEventArgs("score"));
            }
        }

        public event PropertyChangedEventHandler PropertyChanged;
        public void OnPropertyChanged(System.ComponentModel.PropertyChangedEventArgs e)
        {
        if (PropertyChanged!=null) 
            PropertyChanged(this, e);
        }
		public Team(string _country, int _place, int _score)
        {
            this.country = _country;
            this.place = _place;
            this.score = _score;
        }
        public Team()
        { }
    }
   </pre>
   <p>Тогда код <code>Button1_Click</code> можно свести к простому изменению свойства, и после нажатия кнопки связанный элемент 
   <code>TextBlock</code> автоматически изменит свой текст</p>
   <pre class="brush: c#;">
	private void Button_Click(object sender, RoutedEventArgs e)
        {
            int res;
            ((Team)this.Resources["Russia"]).score = Int32.TryParse(textbox1.Text,out res)?res: 0;
        }
   </pre>
   <img src="silpics/9.3.jpg" />
   <h3>Использование контекста данных (DataContext) и привязка к данным</h3>
   <p>У объекта <code>FrameworkElement</code>, от которого наследуются элементы управления, есть интересное свойство DataContext. Оно позволяет задавать для элемента и вложенных в него элементов некоторый контекст данных. 
   Тогда вложенные элементы могут использовать объект <code>Binding</code> для привязки к этому контексту. Например, используем ранее определенный класс Team и создадим контекст данных из объекта этого класса:</p>
   <pre class="brush: xml;">
 &lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
             xmlns:local="clr-namespace:TestApplication"
    mc:Ignorable="d"
    d:DesignHeight="200" d:DesignWidth="250"&gt;
    &lt;UserControl.Resources&gt;
        &lt;local:Team x:Key="comand" country="Бразилия" place="1" score="100" /&gt;
    &lt;/UserControl.Resources&gt;
    &lt;Grid x:Name="LayoutRoot" DataContext="{StaticResource comand}" ShowGridLines="True"&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition Width="0.5*" /&gt;
            &lt;ColumnDefinition Width="*" /&gt;
            &lt;ColumnDefinition Width="0.5*" /&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition Height="*" /&gt;
            &lt;RowDefinition Height="*" /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;TextBlock Text="Место" Grid.Column="0" Grid.Row="0" Margin="10" /&gt;
        &lt;TextBlock Text="{Binding place}" Grid.Column="0" Grid.Row="1" Margin="10" /&gt;
        &lt;TextBlock Text="Страна" Grid.Column="1" Grid.Row="0" Margin="10"/&gt;
        &lt;TextBlock Text="{Binding country}" Grid.Column="1" Grid.Row="1" Margin="10" /&gt;
        &lt;TextBlock Text="Очки" Grid.Column="2" Grid.Row="0" Margin="10" /&gt;
        &lt;TextBlock Text="{Binding score}" Grid.Column="2" Grid.Row="1" Margin="10" /&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;</pre>
<img src="silpics/9.4.jpg" />
<p>Таким образом мы задаем свойству DataContext некоторый объект, например, ресурс. Затем осуществляем привязку к различным свойствам этого ресурса.</p>
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


<div class="nav"><p><a href="8.php">Назад</a><a href="./">Содержание</a><a href="10.php">Вперед</a></p></div></div>
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