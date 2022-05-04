<!DOCTYPE html>
<html >
<head>
<title>UWP | AutoSuggestBox</title>
<meta charset="utf-8" />
<meta name="description" content="Автодополнение в Universal Windows Platform, элемент AutoSuggestBox, его основные свойства и методы, настройка автодополнения">
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
<h2>AutoSuggestBox</h2><div class="date">Последнее обновление: 15.04.2017</div>

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

<p>AutoSuggestBox представляет сложный элемент, который содержит текстовое поле и подключаемый к нему список. 
При вводе в текстовое поле могут автоматически подставляться похожие результаты из некоторого предопределенного списка.</p>
<p>Чтобы задействовать функциональные возможности данного элемента управления, надо обработать его событие <span class="b">TextChanged</span>. 
В обработчике события необходимо лимитировать список предопределенных вариантов таким образом, чтобы они соответствовали введенному в поле тексту.</p>
<p>Итак, определим AutoSuggestBox:</p>
<pre class="brush:xml;">
&lt;AutoSuggestBox x:Name="suggestBox" Header="Выберите смартфон" PlaceholderText="Смартфон" Width="242" 
		QueryIcon="Find" TextChanged="suggestBox_TextChanged" /&gt;
</pre>
<p>В файле отделенного кода определим обработчик:</p>
<pre class="brush:c#;">
using System.Collections.ObjectModel;
using System.Linq;
using Windows.UI.Xaml.Controls;

namespace DataApp
{
    public sealed partial class MainPage : Page
    {
        ObservableCollection&lt;string&gt; phones;
        public MainPage()
        {
            this.InitializeComponent();

            phones = new ObservableCollection&lt;string&gt; { "iPhone 6S", "iPhone 6s Plus", "Nexus 5X", "Nexus 6P", "Lumia 950", "Lumia 550" };
        }

        private void suggestBox_TextChanged(AutoSuggestBox sender, AutoSuggestBoxTextChangedEventArgs args)
        {
            if (args.CheckCurrent())
            {
                var term = suggestBox.Text.ToLower();
                var results = phones.Where(i =&gt;i.ToLower().Contains(term)).ToList();
                suggestBox.ItemsSource = results;
            }
        }
    }
}
</pre>
<p>Итак, здесь определяется список смартфонов - исходных значений для списка. В обработчике <code>suggestBox_TextChanged</code> с помощью метода <code>args.CheckCurrent()</code> 
проверяем, а были ли изменения в текстовом поле. Если они были, то получаем введенное значение и проверяем, есть ли оно в списке. В конце список отфильтрованных значений 
устанавливается в качестве источника для AutoSuggestBox:</p>
<img src="pics/4.33.png" alt="AutoSuggestBox в UWP" />
<p>При этом без обработки события TextChanged список не будет автоматически отфильтровывать результаты. Все надо делать программно.</p>
<p>Если нам надо, чтобы при вводе пользователя ему сразу автоматически открывался список всех возможных результатов, то мы можем в конструкторе сразу указать источник для 
AutoSuggestBox:</p>
<pre class="brush:c#;">
public MainPage()
{
    this.InitializeComponent();
	phones = new List&lt;string&gt; { "iPhone 6S", "iPhone 6s Plus", "Nexus 5X", "Nexus 6P", "Lumia 950", "Lumia 550" };
	suggestBox.ItemsSource = phones;
}
</pre>
<p>Также стоит выделить события <span class="b">SuggestionChosen</span> и <span class="b">QuerySubmitted</span>. Событие <code>SuggestionChosen</code> генерируется, 
когда пользователь выбирает из списка похожих результатов один из них. Данное событие может использоваться для обновления значений, которые связаны с AutoSuggestBox. 
А событие <code>QuerySubmitted</code> генерируется, когда пользователь нажимает в AutoSuggestBox на кнопку поиска или на клавишу Enter. то событие используется, 
как правило, для определения, существует ли в списке введенное значение.</p>
<p>Например, добавим текстовый блок и определим обработчики:</p>
<pre class="brush:xml;">
&lt;StackPanel HorizontalAlignment="Center"&gt;
    &lt;AutoSuggestBox x:Name="suggestBox" Header="Выберите смартфон" PlaceholderText="Смартфон" Width="242" QueryIcon="Find" 
                QuerySubmitted="suggestBox_QuerySubmitted" SuggestionChosen="suggestBox_SuggestionChosen"/&gt;
    &lt;TextBlock x:Name="textBlock1" /&gt;
&lt;/StackPanel&gt;
</pre>
<p>И изменим файл отделенного кода:</p>
<pre class="brush:c#;">
using System.Collections.Generic;
using System.Linq;
using Windows.UI.Xaml.Controls;

namespace ControlsApp
{
    public sealed partial class MainPage : Page
    {
        List&lt;string&gt; phones;
        public MainPage()
        {
            this.InitializeComponent();

            phones = new List&lt;string&gt; { "iPhone 6S", "iPhone 6s Plus", "Nexus 5X", "Nexus 6P", "Lumia 950", "Lumia 550" };
        }

        private void suggestBox_QuerySubmitted(AutoSuggestBox sender, AutoSuggestBoxQuerySubmittedEventArgs args)
        {
            var term = args.QueryText.ToLower();
            var results = phones.Where(i =&gt; i.ToLower().Contains(term)).ToList();
            suggestBox.ItemsSource = results;
            suggestBox.IsSuggestionListOpen = true;
        }

        private void suggestBox_SuggestionChosen(AutoSuggestBox sender, AutoSuggestBoxSuggestionChosenEventArgs args)
        {
            textBlock1.Text = args.SelectedItem as string;
        }
    }
}
</pre>
<p>В обработчике <code>suggestBox_QuerySubmitted</code> делается фактически то же самое, что и при изменении текста: получаем введенное значение с помощью 
<code>args.QueryText</code> и фильтруем список. Для раскрытия отфильтрованного списка устанавливаем <code>suggestBox.IsSuggestionListOpen = true</code></p>
<p>В обработчике <code>suggestBox_SuggestionChosen</code> просто присваиваем выбранное значение текстовому блоку.</p>
<img src="pics/4.34.png" alt="AutoSuggestBox в Universal Windows Platform" />
<p>Из свойств AutoSuggestBox можно отметить следующие:</p>
<ul>
<li><p><span class="b">Header</span>: заголовок</p></li>
<li><p><span class="b">PlaceholderText</span>: временный текст по умолчанию</p></li>
<li><p><span class="b">QueryIcon</span>: иконка кнопки поиска. Может принимать множество значений, но наиболее часто используемое "Find"</p></li>
</ul>
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


<div class="nav"><p><a href="4.18.php">Назад</a><a href="./">Содержание</a><a href="12.1.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в UWP</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/1.1.php">Что такое Universal Windows Platform</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/1.2.php">Начало работы. Первое приложение</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы XAML</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/2.1.php">XAML в Universal Windows Platform</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/2.2.php">Взаимодействие с файлом кода C#</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/2.3.php">Сложные свойства и конвертеры типов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Компоновка</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/3.1.php">Введение в компоновку</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/3.2.php">Grid и VariableSizedWrapGrid</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/3.3.php">StackPanel</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/3.4.php">Canvas</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/3.5.php">RelativePanel</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/3.6.php">SplitView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/3.7.php">Размеры и позиционирование элементов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.1.php">Обзор элементов управления в Universal Windows Platform</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.2.php">Элементы управления содержимым</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.3.php">Кнопки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.4.php">Текстовые поля</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.5.php">Checkbox, RadioButton и ToggleSwitch</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.6.php">Image и работа с изображениями</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.7.php">CalendarDatePicker и CalendarView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.8.php">DatePicker и TimePicker</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.9.php">Flyout</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.10.php">Slider</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.11.php">DispatcherTimer, ProgressBar и ProgressRing</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.12.php">WebView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.20.php">CommandBar</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.21.php">ScrollViewer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.22.php">Диалоговые окна и ContentDialog</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Привязка</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/5.1.php">Введение в привязку данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/5.2.php">Контекст данных и интерфейс INotifyPropertyChanged</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/5.4.php">Элемент Bind</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/5.3.php">Конвертеры значений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Ресурсы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/6.1.php">Концепция ресурсов в Universal Windows Platform</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/6.2.php">Иерархия ресурсов и словари ресурсов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Стили и шаблоны</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/7.1.php">Стили</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/7.2.php">Шаблоны, визуальное и логическое дерево</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/7.3.php">Создание и использование шаблонов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. Приложение и его жизненный цикл</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/8.1.php">Жизненный цикл приложения</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/8.2.php">Объекты Window и Frame. Управление внешним видом приложения</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Навигация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/9.1.php">Введение в навигацию</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/9.2.php">История навигации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/9.3.php">Системный менеджер навигации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/9.4.php">Восстановление информации о навигации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/9.5.php">Меню "Гамбургер" и панель навигации</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Адаптивный дизайн</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/10.1.php">Событие SizeChanged</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/10.2.php">Адаптивные триггеры и визуальные состояния</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/10.3.php">Представления XAML</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/10.4.php">Адаптивный код C#</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 11. Работа с данными</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.13.php">Элементы управления данными</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.14.php">ListBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/11.1.php">ItemTemplate и DataTemplate</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/11.2.php">ObservableCollection</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/11.3.php">Адаптивные триггеры и шаблоны данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.15.php">ComboBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.16.php">ListView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.17.php">GridView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.18.php">FlipView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/4.19.php">AutoSuggestBox</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 12. Файловая система</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/12.1.php">Работа с папками</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/12.2.php">Специальные папки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/12.3.php">Работа с файлами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/12.4.php">Чтение и запись файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/12.5.php">Файловые диалоговые окна</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 13. Фоновые задачи</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/15.1.php">Определение задачи</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/15.2.php">Регистрация и запуск задачи</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/15.3.php">Триггеры и условия</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 14. Работа с графикой</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/14.1.php">Кисти</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/14.2.php">Фигуры и рисование</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 15. Работа с мультимедиа</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/13.1.php">Аудио</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/13.2.php">Видео</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 16. SQLite и Entity Framework</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/16.1.php">Добавление SQLite и Entity Framework в проект UWP</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/16.2.php">Основные операции с базой данных SQLite</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/16.3.php">Работа со сложными данными</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/16.4.php">Использование существующей БД SQLite</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 17. Дополнительные элементы управления</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/uwp/17.1.php">Стрелочный датчик</a></span></li>
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
	
	$("li:contains('Глава 11.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 11.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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