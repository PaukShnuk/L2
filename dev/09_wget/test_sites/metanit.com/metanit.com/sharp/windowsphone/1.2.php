<!DOCTYPE html>
<html >
<head>
<title>Создание первого приложения</title>
<meta charset="utf-8" />
<meta name="description" content="Создание первого приложения для Windows Phone 8.1. Введение в разработку">
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
<h2>Создание первого приложения</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Запустим Visual Studio Express 2013 for Windows. В меню выберем <span class="bb">File-&gt;New Project..</span>. Перед нами откроется окно создания проекта:</p>
<img src="pics/1.5.png" alt="Первое приложение на Windows Phone 8.1" />
<p>В левой части окна выберем <span class="bb">Visual C#-&gt;Store Apps-&gt; Windows Phone Apps</span>. А среди шаблонов нового проекта выберем 
<span class="bb">Blank App (Windows Phone)</span>, дадим какое-нибудь название проекту, например, назовем его HelloApp. И нажмем ОК.</p>
<p>И Visual Studio создаст новый проект:</p>
<img src="pics/1.6.png" alt="Проект Windows Phone 8.1" />
<p>Проект по шаблону <span class="bb">Blank App</span> по умолчанию имеет следующие узлы:</p>
<ul>
<li><p>Каталог <span class="bb">Assets</span>, содержащий используемые файлы изображений</p></li>
<li><p><span class="bb">App.xaml</span> и <span class="bb">App.xaml.cs</span> - файл ресурсов приложения на xaml и файл кода приложения на c# соответственно</p></li>
<li><p><span class="bb">MainPage.xaml</span> и <span class="bb">MainPage.xaml.cs</span> - файл графического интерфейса окна приложения и файл кода окна на c# соответственно</p></li>
<li><p><span class="bb">Package.appxmanifest</span> - файл манифеста приложения</p></li>
</ul>
<p>На данном начальном этапе пока для нас ценность представляют файлы <i>MainPage.xaml</i> и <i>MainPage.xaml.cs</i>. Откроем файл MainPage.xaml, 
который представляет графический интерфейс:</p>
<img src="pics/1.7.png" />
<p>Слева в виде телефона у нас будет окно графического дизайнера. Справа - окно разметки графического интерфейса на языке xaml. Графический интерфейс в данном случае представлен 
классом MainPage, который представляет собой отдельную страницу. Все изменения по интерфейсу, которые мы сделаем, 
тут же будут отображаться в графическом дизайнере, который даст нам визуальное понимание того, как в итоге будет все выглядеть.</p>
<p>Допустим, наше приложение будет считать сумму вклада после начисления процентов. Для этого нам нужно поле ввода суммы вклада, 
поле для вывода результата и кнопку, с помощью которой мы будем инициировать вычисления итоговой суммы. Итак, изменим код файла <i>MainPage.xaml</i> следующим образом:</p>
<pre class="brush:xml;">
&lt;Page
    x:Class="HelloApp.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:local="using:HelloApp"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    Background="{ThemeResource ApplicationPageBackgroundThemeBrush}"&gt;

    &lt;Grid&gt;
        &lt;TextBox x:Name="textBox1" Width="200" PlaceholderText="Введите сумму" /&gt;
        &lt;Button x:Name="button1" Content="Считать" Width="150" VerticalAlignment="Top" 
                Margin="140 60 0 0"/&gt;
        &lt;TextBlock x:Name="textBlock1" Width="150" Height="40" FontSize="24"
                   VerticalAlignment="Top" Margin="40 120 20 0" /&gt;
    &lt;/Grid&gt;
&lt;/Page&gt;
</pre>
<p>Итак, тут мы добавили в элемент Grid три новых элемента. Страница с графическим интерфейсом может иметь один корневой элемент, 
в который потом уже добавляются все остальные. В данном случае это элемент Grid.</p>
<p>Мы добавили текстовое поле (элемент TextBox) для ввода некоторого значения, кнопку для инициации действия, и элемент 
TextBlock для вывода результата действия.</p>
<p>С помощью атрибутов элементов мы задаем их внешний вид и позиционирование. Например, с помощью атрибута Margin задаются отступы от внешнего края. Более подробно об атрибутах и прочих элементах языка xaml мы поговорим в дальнейшем.</p>
<p>После добавления элементов и их атрибутов у нас автоматически обновится и окно дизайнера:</p>
<img src="pics/1.8.png" />
<p>Теперь изменим код кнопки следующим образом:</p>
<pre class="brush:xml;">
&lt;Button x:Name="button1" Content="Считать" Width="150" VerticalAlignment="Top" 
                Margin="140 60 0 0" Click="button1_Click"/&gt;
</pre>
<p>С помощью выражения <code>Click="button1_Click"</code> мы добавили обработчик события Click. Таким образом, по нажатию кнопки будет срабатывать метод 
<code>button1_Click</code>. Теперь определим этот метод.</p>
<p>Откроем файл <i>MainPage.xaml.cs</i>, который содержит логику страницы. По умолчанию он имеет следующий код:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Runtime.InteropServices.WindowsRuntime;
using Windows.Foundation;
using Windows.Foundation.Collections;
using Windows.UI.Xaml;
using Windows.UI.Xaml.Controls;
using Windows.UI.Xaml.Controls.Primitives;
using Windows.UI.Xaml.Data;
using Windows.UI.Xaml.Input;
using Windows.UI.Xaml.Media;
using Windows.UI.Xaml.Navigation;

namespace HelloApp
{
    public sealed partial class MainPage : Page
    {
        public MainPage()
        {
            this.InitializeComponent();

            this.NavigationCacheMode = NavigationCacheMode.Required;
        }

        protected override void OnNavigatedTo(NavigationEventArgs e)
        {
        }
    }
}
</pre>
<p>В класс MainPage добавим новый метод:</p>
<pre class="brush:c#;">
private void button1_Click(object sender, RoutedEventArgs e)
{
    double capital;
    if(Double.TryParse(textBox1.Text,out capital))
    {
        capital+=capital * 0.12;
        textBlock1.Text = capital.ToString() + " долларов";
    }
    else
    {
        textBlock1.Text="Некорректное значение";
    }
}
</pre>
<p>В методе мы получаем введенное в текстовое поле значение и пытаемся его преобразовать к типу double. Если преобразование пройдет успешно, то выводим результат 
несложных вычислений.</p>
<p>Запустим на выполнение:</p>
<img src="pics/1.9.png" />
<p>При запуске мы можем выбрать, где мы будем тестировать приложение - на реальном устройстве или эмуляторе. В моем случае я запускаю приложение на реальном смартфоне, 
поэтому в выпадающем списке выбираю <span class="bb">Device</span>. Однако можно выбрать и один из эмуляторов, если они уже установлены.</p>
<p>При запуске приложения на смартфоне важно, чтобы смартфон не находился в состоянии блокировки. Итак, запустим:</p>
<img src="pics/1.10.png" />
<p>Введем в текстовое поле какое-нибудь число и нажмем на кнопку:</p>
<img src="pics/1.11.png" />
<p>При тестировании через смартфон важно помнить, что при запуске приложение автоматически устанавливается на телефон, и мы можем его найти в списке всех приложений:</p>
<img src="pics/1.12.png" />
<p>И при необходимости потом, отключившись от компьютера, также сможем его запустить, либо удалить.</p>
<p>На этом создание первого приложения завершено.</p>
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


<div class="nav"><p><a href="1.1.php">Назад</a><a href="./">Содержание</a><a href="2.1.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в разработку для Windows Phone 8.1</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/1.1.php">Установка и регистрация средств разработки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/1.2.php">Создание первого приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. XAML в Windows Phone 8.1</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/2.1.php">Основы языка XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/2.2.php">Файлы отделенного кода</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Компоновка и позиционирование элементов</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/3.1.php">Контейнер Grid</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/3.2.php">StackPanel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/3.3.php">Canvas</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.1.php">Свойства элементов управления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.2.php">Кнопки и текстовые поля</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.3.php">CheckBox и RadioButton</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.4.php">Всплывающие окна</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.5.php">ComboBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.6.php">ListBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.7.php">DatePicker и TimePicker</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.8.php">Slider и Progressbar</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/4.9.php">Flyout</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Ресурсы и стили</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/5.1.php">Ресурсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/5.2.php">Стили</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Приложение и его жизненный цикл</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/6.1.php">Роль класса App и жизненный цикл приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/6.2.php">Работа с жизненным циклом. Практика</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/6.3.php">Восстановление данных сессии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/6.4.php">Файл Package.appxmanifest</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Навигация в приложении</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/7.1.php">Введение в навигацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/7.2.php">Создание навигации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Привязка и контекст данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/8.1.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/8.2.php">Интерфейс INotifyPropertyChanged</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Шаблон WebView App</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/9.1.php">Описание шаблона</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/9.2.php">Изменение шаблона WebView App</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Шаблон Hub App</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/10.1.php">Описание шаблона</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/10.2.php">Приложение на основе шаблона Hub App</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder"><a href="//metanit.com/sharp/windowsphone/11.1.php">Глава 11. Сохранение данных</a></span></li>
	<li class="closed"><span class="folder"><a href="//metanit.com/sharp/windowsphone/12.1.php">Глава 12. Геолокация</a></span></li>
	<li class="closed"><span class="folder"><a href="//metanit.com/sharp/windowsphone/13.1.php">Глава 13. Локализация приложений</a></span></li>
	<li class="closed"><span class="folder">Глава 14. SQLite в Windows Phone 8.1</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/14.1.php">Работа с SQLite. Часть 1</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/14.2.php">Работа с SQLite. Часть 2</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/windowsphone/14.3.php">Работа с существующей БД SQLite</a></span></li>
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