<!DOCTYPE html>
<html >
<head>
<title>Xamarin Forms | Visual State Manager и визуальные состояния</title>
<meta charset="utf-8" />
<meta name="description" content="СVisual State Manager и визуальные состояния в Xamarin Forms, стилизация перехода элементов в другое состояние">
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
<h2>Visual State Manager и визуальные состояния</h2><div class="date">Последнее обновление: 12.01.2021</div>

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

<p>Начиная с версии 3.0 в Xamarin Forms была добавлена такая функциональность, как <span class="b">Visual State Manager</span> - 
менеджер визуальных состояний.</p>
<p>По умолчанию Visual State Manager прикрепляет к элементам управления группу из трех состояний:</p>
<ul>
<li><p><span class="b">Disabled</span>:  элемент отключен для использования</p></li>
<li><p><span class="b">Focused</span>: элемент получил фокус и используется в текущий момент</p></li>
<li><p><span class="b">Normal</span>: стандартное состояние элемента</p></li>
</ul>
<p>Visual State Manager поддерживается для объектов всех классов, которые унаследованы от VisualElement (в том числе классов View и Page). 
Итак, применим визуальные состояния к текстовому полю ввода:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;

    &lt;StackLayout&gt;
        &lt;Entry x:Name="entry"&gt;
            &lt;VisualStateManager.VisualStateGroups&gt;
                &lt;VisualStateGroup x:Name="CommonStates"&gt;
                    &lt;VisualState x:Name="Normal"&gt;
                        &lt;VisualState.Setters&gt;
                            &lt;Setter Property="FontSize" Value="25" /&gt;
                        &lt;/VisualState.Setters&gt;
                    &lt;/VisualState&gt;

                    &lt;VisualState x:Name="Focused"&gt;
                        &lt;VisualState.Setters&gt;
                            &lt;Setter Property="FontSize" Value="35" /&gt;
                            &lt;Setter Property="TextColor" Value="Green" /&gt;
                        &lt;/VisualState.Setters&gt;
                    &lt;/VisualState&gt;

                    &lt;VisualState x:Name="Disabled"&gt;
                        &lt;VisualState.Setters&gt;
                            &lt;Setter Property="BackgroundColor" Value="LightGray" /&gt;
                        &lt;/VisualState.Setters&gt;
                    &lt;/VisualState&gt;
                &lt;/VisualStateGroup&gt;
            &lt;/VisualStateManager.VisualStateGroups&gt;
        &lt;/Entry&gt;
        &lt;Button Text="Toggle" Clicked="Button_Clicked" /&gt;
    &lt;/StackLayout&gt;

&lt;/ContentPage&gt;
</pre>
<p>Визуальные состояния определяются с помощью прикрепляемого свойства <span class="b">VisualStateManager.VisualStateGroups</span>. Оно имеет 
тип <code>VisualStateGroupList</code> и представляет коллекцию объектов <span class="b">VisualStateGroup</span>, то есть группу визуальных 
состояний. В данном случае добавлена только одна группа состояний, которая называется CommonStates:</p>
<pre class="brush:xml;">&lt;VisualStateGroup Name="CommonStates"&gt;</pre>
<p>Каждая группа VisualStateGroup определяет набор состояний. Каждое состояние определяется с помощью объекта <span class="b">VisualState</span>. 
Этот объект принимает ряд объектов <span class="b">Setter</span>, с помощью которых устанавливаются значения свойств визуального элемента, когда он принимает 
данное состояние. То есть в данном случае, при вводе шрифт получает высоту в 35 единиц и зеленый цвет. Когда текстовое поле не имеет фокуса, но доступно для 
использования, применяется цвет шрифта по умолчанию и высота шрифта в 25 единиц. И когда текстовое поле недоступно для ввода, оно окрашивается в светло-серый цвет.</p>
<p>Стоит учитывать, что имена состояний в данном случае должны быть именно "Normal", "Disabled", "Focused", так как это встроенные по умолчанию состояния. 
Название группы необязательно должно быть "CommonStates", оно может быть произвольным.</p>
<p>Для переключения доступности поля Entry в данном примере определена кнопка, у которой в файле кода C# установлен обработчик нажатия Button_Clicked:</p>
<pre class="brush:c#;">
private void Button_Clicked(object sender, EventArgs e)
{
	entry.IsEnabled = !entry.IsEnabled;
}
</pre>
<img src="./pics/visualstate1.png" alt="Visual State Manager in Xamarin Forms" />

<h3>Определение своих визуальных состояний</h3>
<p>По умолчанию Visual State Manager предоставляет нам три встроенных состояния: Normal, Focused и Disabled, однако мы можем определять 
свои состояния. Суть встроенных состояний состоит в том, что элемент отлеживает некоторое изменения. Например, он отслеживает получение фокуса и после этого 
вызывает метод <code>VisualStateManager.GoToState()</code>, в который передается название состояния:</p>
<pre class="brush:c#;">VisualStateManager.GoToState(visualElement, "Focused");</pre>
<p>В качестве первого параметра передается элемент, для которого вызываюся состояния. Это должен быть элемент типа, который унаследован 
от VisualElement.</p>
<p>Соответственно при создании своих состояний мы должны сами отслеживать переход в эти состояния и вызывать данный метод.</p>
<p>Например, определим визуальные состояния для валидации данных в текстовом поле. Для этого определим следующую страницу:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;

    &lt;StackLayout&gt;
        &lt;Entry x:Name="myEntry" TextChanged="entry_TextChanged"&gt;
            &lt;VisualStateManager.VisualStateGroups&gt;
                &lt;VisualStateGroup x:Name="ValidStates"&gt;
                    &lt;VisualState x:Name="Valid"&gt;
                        &lt;VisualState.Setters&gt;
                            &lt;Setter Property="FontSize" Value="25" /&gt;
                            &lt;Setter Property="TextColor" Value="Green" /&gt;
                        &lt;/VisualState.Setters&gt;
                    &lt;/VisualState&gt;

                    &lt;VisualState x:Name="Invalid"&gt;
                        &lt;VisualState.Setters&gt;
                            &lt;Setter Property="FontSize" Value="35" /&gt;
                            &lt;Setter Property="TextColor" Value="Red" /&gt;
                        &lt;/VisualState.Setters&gt;
                    &lt;/VisualState&gt;
                &lt;/VisualStateGroup&gt;
            &lt;/VisualStateManager.VisualStateGroups&gt;
        &lt;/Entry&gt;
    &lt;/StackLayout&gt;
&lt;/ContentPage&gt;
</pre>
<p>Здесь к полю Entry прикреплена групаа состояний ValidStates (название группы может быть произвольным). Группа содержит два визуальных состояния: 
"Valid" и "Invalid". Каждое из состояний предусматривает определенные цвет и высоту шрифта.</p>
<p>Но по умолчанию Entry не отслеживает подобные состояния, и нам надо самостоятельно вызывать их. Для этого изменим код c# у страницы:</p>
<pre class="brush:c#;">
using System.Text.RegularExpressions;
using Xamarin.Forms;

namespace HelloApp
{
	public partial class MainPage : ContentPage
	{
		public MainPage()
		{
			InitializeComponent();
            SetState(false);    // изначально невалидное состояние
		}

        private void entry_TextChanged(object sender, TextChangedEventArgs e)
        {
            // проверяем введенное значение на соответствие регулярному выражению
            bool isValid = Regex.IsMatch(e.NewTextValue, @"^\+[1-9]-\d{3}-\d{3}-\d{4}$");
            SetState(isValid);
        }
        // установка состояния Valid или Invalid
        void SetState(bool isValid)
        {
            string visualState = isValid ? "Valid" : "Invalid";
            VisualStateManager.GoToState(myEntry, visualState);
        }
    }
}
</pre>
<p>Допустим, нам надо вввести в текстовое поле номер телефона в формате +1-234-567-8901. Для этого прикрепляем к текстовому полю обработчик изменения ввода 
entry_TextChanged, в котоом проверяем новый введенный текст. Если он соответствует регулярному выражению, то вызывается метод</p>
<pre class="brush:c#;">VisualStateManager.GoToState(myEntry, "Valid");</pre>
<p>То есть для элемента myEntry вызывается событие Valid, иначе вызывается событие Invalid. И для упрощения вызов данного метода инкапсулирован в методе SetState.</p>
<p>Поскольку при запуске приложения текстовое поле уже должно быть в определенном состоянии, то в конструкторе также вызывается метод VisualStateManager.GoToState.</p>
<p>Результат работы приложения:</p>
<img src="./pics/visualstate2.png" alt="Visual States in Xamarin" />
<h3>Визуальные состояния в ресурсах</h3>
<p>При прикреплении группы визуальных состояний к элементам код элемента может сильно разбухать. Хотя визуальные состояния не относятся к структуре элемента, 
а только к его стилизации. Кроме того, возможно, мы захотим использовать одни и те же визуальные состояния для разных элементов. В этом случае удобнее 
выносить визуальные состояния в ресурсы. Например, изменим выше определение страницы xaml:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;

    &lt;ContentPage.Resources&gt;
        &lt;Style TargetType="Entry" x:Key="ValidStatesStyle"&gt;
            &lt;Setter Property="VisualStateManager.VisualStateGroups"&gt;
                &lt;VisualStateGroupList&gt;
                    &lt;VisualStateGroup x:Name="ValidStates"&gt;
                        &lt;VisualState x:Name="Valid"&gt;
                            &lt;VisualState.Setters&gt;
                                &lt;Setter Property="FontSize" Value="25" /&gt;
                                &lt;Setter Property="TextColor" Value="Green" /&gt;
                            &lt;/VisualState.Setters&gt;
                        &lt;/VisualState&gt;

                        &lt;VisualState x:Name="Invalid"&gt;
                            &lt;VisualState.Setters&gt;
                                &lt;Setter Property="FontSize" Value="35" /&gt;
                                &lt;Setter Property="TextColor" Value="Red" /&gt;
                            &lt;/VisualState.Setters&gt;
                        &lt;/VisualState&gt;
                    &lt;/VisualStateGroup&gt;
                &lt;/VisualStateGroupList&gt;
            &lt;/Setter&gt;
        &lt;/Style&gt;
    &lt;/ContentPage.Resources&gt;
    
    &lt;StackLayout&gt;
        &lt;Entry x:Name="entry" TextChanged="entry_TextChanged" Style="{StaticResource Key=ValidStatesStyle}" /&gt;
    &lt;/StackLayout&gt;

&lt;/ContentPage&gt;
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


<div class="nav"><p><a href="./9.4.php">Назад</a><a href="./">Содержание</a><a href="./4.1.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Xamarin и кросс-платформенная разработка</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/1.1.php">Введение в Xamarin. Установка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.1.php">Создание и настройка проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.2.php">Создание приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.5.php">Запуск на Android</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.6.php">Запуск на Windows 10</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.7.php">Первое приложение в Visual Studio for Mac</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.8.php">Запуск на iOS из Visual Studio</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Графический интерфейс в Xamarin Forms</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.3.php">Создание графического интерфейса</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.4.php">XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.9.php">Взаимодействие XAML и C#</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.12.php">Метод LoadFromXaml и загрузка XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/2.11.php">Расширения разметки XAML</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Контейнеры компоновки</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.1.php">Элементы компоновки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.2.php">StackLayout и ScrollView </a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.4.php">AbsoluteLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.5.php">RelativeLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.6.php">Контейнер Grid</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Элементы в Xamarin и их свойства</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.17.php">Позиционирование элементов на странице</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.18.php">Работа с цветом</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.19.php">Стилизация текста</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.7.php">Кнопки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.20.php">Текстовые поля</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.3.php">Контейнер Frame</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.23.php">BoxView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.9.php">Работа с изображениями. Элемент Image</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.10.php">Выбор даты и времени. DatePicker и TimePicker</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.11.php">Выпадающий список Picker</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.12.php">Stepper и Slider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.13.php">Переключатель Switch</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.14.php">TableView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.15.php">WebView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.8.php">Всплывающие окна</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.21.php">Таймеры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Платформо-зависимый код</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/12.1.php">Класс Device</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/12.2.php">Платформозависимость в XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/12.3.php">DependencyService</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Ресурсы и стили</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.1.php">Концепция ресурсов в Xamarin Forms</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.2.php">Стили</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.3.php">Триггеры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.4.php">Стилизация с помощью CSS</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/9.5.php">Visual State Manager и визуальные состояния</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Привязка в Xamarin</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.1.php">Введение в привязку</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.4.php">BindableObject и BindableProperty</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.5.php">Объект Binding</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.6.php">Конвертеры значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.7.php">Привязка к объектам. Интерфейс INotifyPropertyChanged</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. ListView и работа с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.16.php">ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.8.php">DataTemplate и сложные объекты в ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.12.php">TextCell</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.13.php">Изображения в ListView. ImageCell и ViewCell</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.14.php">Создание класса ячейки для ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.9.php">ObservableCollection</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.15.php">Настройка внешнего вида ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.10.php">Группировка в ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.16.php">Производительность ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.11.php">Триггеры данных</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Навигация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/5.1.php">Основы навигации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/5.2.php">Стек навигации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/5.3.php">Передача данных при навигации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/5.4.php">Сообщения и MessagingCenter</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Типы страниц</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/3.22.php">TabbedPage. Страница с вкладками</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Хранение данных. Файлы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/6.2.php">Свойство Properites</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/6.3.php">Настройки приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/6.1.php">Работа с файлами</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. MVVM</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.2.php">Паттерн Model-View-ViewModel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/4.3.php">Команды и взаимодействие с пользователем в MVVM</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/11.1.php">Пример MVVM</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/11.2.php">Контекстное меню</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Базы данных SQLite</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/7.2.php">Основные операции с SQLite</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/7.4.php">Асинхронное подключение к SQLite</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/7.3.php">Подключение к существующей базе данных</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Глобализация и локализация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/8.1.php">Добавление локализации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/8.2.php">Определение языковой культуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/8.3.php">Локализация XAML</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Взаимодействие с сервером</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/10.2.php">Подключение к сети</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/10.4.php">Создание веб-сервиса</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/10.5.php">Взаимодействие с веб-сервисом</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/10.6.php">Создание интерфейса для работы с веб-сервисом</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Визуальные компоненты ContentView</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/13.1.php">Создание визуальных компонентов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Рендеринг элементов управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/14.1.php">Создание нового элемента</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/14.2.php">Добавление свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/14.3.php">Добавление событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/14.4.php">Наследование элемента и рендерера</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Работа с мультимедиа</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/15.1.php">Работа с камерой</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. FlexLayout</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.1.php">Свойство Direction. Направление элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.2.php">Свойство Wrap</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.3.php">Выравнивание строк и столбцов. AlignContent</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.4.php">Выравнивание элементов. JustifyContent</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.5.php">Свойство AlignItems</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/17.6.php">Прикрепляемые свойства</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Realm</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/18.1.php">Основные операции с базой данных Realm</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Entity Framework Core</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/19.1.php">Создание контекста данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/19.2.php">Основные операции данными</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. Flyout</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/20.1.php">Первое приложение с Shell</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/xamarin/20.2.php">FlyoutItem</a></span></li>
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