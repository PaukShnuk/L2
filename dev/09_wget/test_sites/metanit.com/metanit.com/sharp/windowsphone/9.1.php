<!DOCTYPE html>
<html >
<head>
<title>Шаблон WebView App в Windows Phone 8.1</title>
<meta charset="utf-8" />
<meta name="description" content="">
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
<h1>Шаблон WebView App</h1>
<h2>Описание шаблона</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Шаблон WebView App позволяет сочетать универсальность HTML+CSS+JavaScript с мощью C#, объединяя их в одно приложение. Он наиболее подойдет тем, кто имеет уже опыт 
веб-разработки и владеет HTML/CSS/JavaScript. Основу приложения в данном 
шаблоне составляет элемент управления <span class="bb">Web View</span>, который представляет усеченный браузер.</p>
<p>Итак, создадим проект по типу WebView App:</p>
<img src="pics/9.1.png" alt="WebView App in Windows Phone 8.1" />
<p>По сравнению со стандартным типом проекта по шаблону Blank App здесь структура проекта будет несколько отличаться:</p>
<img src="pics/9.2.png" alt="WebView App Project Structure in Windows Phone 8.1" />
<p>В частности, в проекте будет каталог <i>Html</i>, в котором будет находиться файл <i>index.html</i> и подкаталог <i>css</i> с файлом стилей <i>phone.css</i></p>
<p>Если мы обратимся к главной странице приложения <i>MainPage.xaml</i>, то она будет содержать следующий код:</p>
<pre class="brush:xml;">
&lt;Page
    x:Class="WebViewApp.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:local="using:WebViewApp"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    Background="{ThemeResource ApplicationPageBackgroundThemeBrush}"&gt;

    &lt;WebView x:Name="WebViewControl"
             HorizontalAlignment="Stretch"
             VerticalAlignment="Stretch"
             NavigationCompleted="Browser_NavigationCompleted" /&gt;

    &lt;Page.BottomAppBar&gt;
        &lt;CommandBar&gt;
            &lt;CommandBar.PrimaryCommands&gt;
                &lt;AppBarButton
                    x:Name="ForwardAppBarButton"
                    x:Uid="ForwardAppBarButton"
                    Click="ForwardAppBarButton_Click"
                    Icon="Forward"
                    Label="forward"/&gt;
            &lt;/CommandBar.PrimaryCommands&gt;
            &lt;CommandBar.SecondaryCommands&gt;
                &lt;AppBarButton
                    x:Name="HomeAppBarButton"
                    x:Uid="HomeAppBarButton"
                    Click="HomeAppBarButton_Click"
                    Label="home"/&gt;
            &lt;/CommandBar.SecondaryCommands&gt;
        &lt;/CommandBar&gt;
    &lt;/Page.BottomAppBar&gt;
&lt;/Page&gt;
</pre>
<p>Здесь определен элемент <span class="bb">WebView</span> для отображения html-страниц, и также элемент <span class="bb">CommandBar</span>, 
который служит для создания элементов навигации по html-страницам в WebView.</p>
<p>А в файле кода MainPage.xaml.cs можно увидеть, что при переходе к станице MainPage в WebView будет загружаться единственная страница index.html:</p>
<pre class="brush:c#;">
using System;
// ..............

namespace WebViewApp
{
    public sealed partial class MainPage : Page
    {
        private static readonly Uri HomeUri = new Uri("ms-appx-web:///Html/index.html", UriKind.Absolute);

        public MainPage()
        {
            this.InitializeComponent();
            this.NavigationCacheMode = NavigationCacheMode.Required;
        }

        protected override void OnNavigatedTo(NavigationEventArgs e)
        {
            WebViewControl.Navigate(HomeUri);

            HardwareButtons.BackPressed += this.MainPage_BackPressed;
        }

        protected override void OnNavigatedFrom(NavigationEventArgs e)
        {
            HardwareButtons.BackPressed -= this.MainPage_BackPressed;
        }

        private void MainPage_BackPressed(object sender, BackPressedEventArgs e)
        {
            if (WebViewControl.CanGoBack)
            {
                WebViewControl.GoBack();
                e.Handled = true;
            }
        }

        private void Browser_NavigationCompleted(WebView sender, WebViewNavigationCompletedEventArgs args)
        {
            if (!args.IsSuccess)
            {
                Debug.WriteLine("Navigation to this page failed, check your internet connection.");
            }
        }
		// переход вперед
        private void ForwardAppBarButton_Click(object sender, RoutedEventArgs e)
        {
            if (WebViewControl.CanGoForward)
            {
                WebViewControl.GoForward();
            }
        }
		// Нажатие кнопки Пуск - переход к главной странице index.html
        private void HomeAppBarButton_Click(object sender, RoutedEventArgs e)
        {
            WebViewControl.Navigate(HomeUri);
        }
    }
}
</pre>
<p>Глобальная переменная <code>HomeUri</code> задает адрес ресурса для начального перехода, то есть фактически страницу index.html из каталога Html. 
И как раз в методе <code>OnNavigatedTo</code>, который срабатывает при переходе на текущую страницу, происходит такой переход в элементе WebView: 
<code> WebViewControl.Navigate(HomeUri)</code></p>
<p>А также в этом методе устанавливается обработчик нажатия кнопки Назад. В методе <code>OnNavigatedFrom</code>, котоырй срабатывает при переходе с текущей страницы, 
данный обработчик отменяется.</p>
<p>Сам же обработчик <code>MainPage_BackPressed</code> осуществляет переход назад по страницам внутри истории переходов элемента WebView. То есть в отличие от рассмотренной 
ранее навигации по страницам здесь переходы идут внутри WebView по html-страницам.</p>
<p>Сама страница index.html выглядит очень просто:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="css/phone.css" /&gt;
    &lt;title&gt;Windows Phone&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div&gt;
        MY APPLICATION
    &lt;/div&gt;
    &lt;div id="page-title"&gt;
        page title
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>И если мы запустим проект по умолчанию, то получим следующую картину:</p>
<img src="pics/9.3.png" />
<p>Теперь немного изменим стандартный шаблон, добавив новую функциональность.</p>
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


<div class="nav"><p><a href="8.2.php">Назад</a><a href="./">Содержание</a><a href="9.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 9.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 9.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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