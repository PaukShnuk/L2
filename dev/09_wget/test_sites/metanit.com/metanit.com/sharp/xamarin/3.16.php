<!DOCTYPE html>
<html >
<head>
<title>Xamarin Forms | ListView</title>
<meta charset="utf-8" />
<meta name="description" content="Создание списка объектов в Xamarin Forms с помощью элемента ListView">
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
<h1>ListView и работа с данными</h1><h2>ListView</h2><div class="date">Последнее обновление: 12.01.2021</div>

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

<p>ListView представляет очень мощный элемет управления Xamarin Forms, который позволяет отображать список объектов и 
при этом кастомизировать их отображение.</p>
<p>ListView связывается с набором данных через свойство <span class="b">ItemsSource</span>, которое принимает объект <code>IEnumerable&lt;T&gt;</code>.</p>
<h3>Создание ListView в коде C#</h3> 
<p>Определим в коде C# объект ListView, который выводит массив строк:</p>
<pre class="brush:c#;">
using Xamarin.Forms;

namespace HelloApp
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            Label header = new Label
            {
                Text = "Список моделей",
                FontSize = Device.GetNamedSize(NamedSize.Large, typeof(Label)),
                HorizontalOptions = LayoutOptions.Center
            };

            string[] phones = new string[] {"iPhone 7", "Samsung Galaxy S8", "Huawei P10", "LG G6"};

            ListView listView = new ListView();
            // определяем источник данных
            listView.ItemsSource = phones;
            this.Content = new StackLayout { Children = { header, listView } };
        }
    }
}
</pre>
<img src="./pics/3.13.png" alt="ItemsSource в ListView в Xamarin.Forms" />
<p>При выводе каждого объекта ListView по умолчанию вызывает для него метод <code>ToString()</code>, поэтому мы увидим строковое отображение объекта.</p>
<h3>ListView в XAML</h3>
<p>Аналогичный массив в XAML мы могли бы вывести следующим образом:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;
    &lt;ContentPage.Resources&gt;
        &lt;ResourceDictionary&gt;
            &lt;x:Array x:Key="phones" Type="{x:Type x:String}"&gt;
                &lt;x:String&gt;iPhone 7&lt;/x:String&gt;
                &lt;x:String&gt;Google Pixel 5&lt;/x:String&gt;
                &lt;x:String&gt;Huawei P10&lt;/x:String&gt;
                &lt;x:String&gt;Xiaomi Mi6&lt;/x:String&gt;
            &lt;/x:Array&gt;
        &lt;/ResourceDictionary&gt;
    &lt;/ContentPage.Resources&gt;
    &lt;StackLayout&gt;
        &lt;Label Text="Список моделей" HorizontalOptions="Center" FontSize="Large" /&gt;
        &lt;ListView x:Name="phonesList" ItemsSource="{StaticResource Key=phones}" /&gt;
    &lt;/StackLayout&gt;
&lt;/ContentPage&gt;
</pre>
<h3>Сочетание XAML и C#. Привязка к списку</h3>
<p>Нередко источник данных для ListView определяется в коде C#. И в этом случае мы можем использовать привязку к источнику данных. Например, в коде C# определим 
массив, к которому будет производиться привязка:</p>
<pre class="brush:c#;">
using Xamarin.Forms;

namespace HelloApp
{
	public partial class MainPage : ContentPage
	{
        public string[] Phones { get; set; }

        public MainPage()
		{
            InitializeComponent();
            Phones = new string[] { "iPhone 8", "Samsung Galaxy S9", "Huawei P10", "LG G6" };
            this.BindingContext = this;
        }
	}
}
</pre>
<p>Стоит отметить, что источник данных определен как публичное свойство Phones. Другой важный момент - установка контекста привязки страницы: <code>this.BindingContext = this;</code>. 
Таким образом, в XAML мы можем обратиться ко всем публичным свойствам страницы.</p>
<p>В коде XAML пропишем привязку к этому свойству:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;
    &lt;StackLayout&gt;
        &lt;Label Text="Список моделей" HorizontalOptions="Center" FontSize="Large" /&gt;
        &lt;ListView x:Name="phonesList" ItemsSource="{Binding Phones}" /&gt;
    &lt;/StackLayout&gt;
&lt;/ContentPage&gt;
</pre>
<h3>Привязка к выбранному элементу</h3>
<p>В примере выше мы вполне могли бы обойтись без обработки события и просто установить привязку элемента Label к выбранному объекту списка:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;
    &lt;ContentPage.Resources&gt;
        &lt;ResourceDictionary&gt;
            &lt;x:Array x:Key="phones" Type="{x:Type x:String}"&gt;
                &lt;x:String&gt;iPhone 7&lt;/x:String&gt;
                &lt;x:String&gt;Google Pixel 5&lt;/x:String&gt;
                &lt;x:String&gt;Huawei P10&lt;/x:String&gt;
                &lt;x:String&gt;Xiaomi Mi6&lt;/x:String&gt;
            &lt;/x:Array&gt;
        &lt;/ResourceDictionary&gt;
    &lt;/ContentPage.Resources&gt;
    &lt;StackLayout&gt;
        &lt;Label Text="{Binding Source={x:Reference Name=phonesList}, Path=SelectedItem}" 
               HorizontalOptions="Center" FontSize="Large" /&gt;
        &lt;ListView x:Name="phonesList" ItemsSource="{StaticResource phones}" /&gt;
    &lt;/StackLayout&gt;
&lt;/ContentPage&gt;
</pre>
<h3>Выбор элемента</h3>
<p>Когда пользователь нажимает на элемент списка, он выделяется, а у ListView срабатывают два события: ItemTapped и ItemSelected. Между ними есть 
различия. Так, повторное нажатие на один и тот же элемент не вызовет повторного события ItemSelected, так как элемент остается выбанным. А вот событие ItemTapped будет срабатывать именно столько раз сколько 
пользователь нажал на него, даже повторно. Также событие ItemSelected будет вызвано, если с элемента будет снято выделение.</p>
<h4>ItemSelected</h4>
<p>Обработаем выделение элемента. Для этого определим следующий код в XAML:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;
    &lt;StackLayout&gt;
        &lt;Label x:Name="selected" HorizontalOptions="Center" FontSize="Large" /&gt;
        &lt;ListView x:Name="phonesList" ItemSelected="phonesList_ItemSelected" /&gt;
    &lt;/StackLayout&gt;
&lt;/ContentPage&gt;
</pre>
<p>А в файле кода MainPage.xaml.cs определим источник данных и обработчик события ItemSelected:</p>
<pre class="brush:c#;">
using Xamarin.Forms;

namespace HelloApp
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
            string[] phones = new string[] {"iPhone 7", "Samsung Galaxy S8", "Huawei P10", "LG G6"};
            phonesList.ItemsSource = phones;
        }
        private void phonesList_ItemSelected(object sender, SelectedItemChangedEventArgs e)
        {
            if(e.SelectedItem!=null)
                selected.Text = e.SelectedItem.ToString();
        }
    }
}
</pre>
<p>При выборе элемента мы можем получить выбранный элемент через свойство SelectedItem объекта SelectedItemChangedEventArgs, который передается в качестве параметра. 
Так как событие ItemSelected может срабатывать и при снятии выделения элемента, то в обработчике необходимо вначале проверить значение <code>e.SelectedItem</code> на null.</p>
<p>Поскольку список содержит массив строк, то каждый его элемент представляет строку, которую мы можем получить с помощью метода <code>e.SelectedItem.ToString()</code>.</p>
<img src="./pics/3.14.png" alt="Событие ItemsSelected в ListView в Xamarin Forms" />
<p>Как можно увидеть на скриншоте, выбранный элемент выделяется цветом. Однако выделение на Android оранжевым цветом элементов списка, которые имеют по умолчанию розовые буквы, наверное, 
не самое удачное дизайнерское решение. Кроме того, возможно выделение в прицнипе неприемлимо, и в этом случае мы его можем сразу же снять после выбора элемента:</p>
<pre class="brush:c#;">
private void phonesList_ItemSelected(object sender, SelectedItemChangedEventArgs e)
{
    if(e.SelectedItem!=null)
        selected.Text = e.SelectedItem.ToString();
	((ListView)sender).SelectedItem = null;
}
</pre>
<h4>ItemTapped</h4>
<p>Похожим образом можно обработать событие <span class="b">ItemTapped</span>. Определим в XAML следующий код:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;ContentPage xmlns="http://xamarin.com/schemas/2014/forms"
             xmlns:x="http://schemas.microsoft.com/winfx/2009/xaml"
             x:Class="HelloApp.MainPage"&gt;
    &lt;StackLayout&gt;
        &lt;Label x:Name="selected" HorizontalOptions="Center" FontSize="Large" /&gt;
        &lt;ListView x:Name="phonesList" ItemTapped="PhonesList_ItemTapped" /&gt;
    &lt;/StackLayout&gt;
&lt;/ContentPage&gt;
</pre>
<p>А в файле кода MainPage.xaml.cs определим источник данных и обработчик события ItemTapped:</p>
<pre class="brush:c#;">
using Xamarin.Forms;

namespace HelloApp
{
	public partial class MainPage : ContentPage
	{
        public string[] Phones { get; set; }

        public MainPage()
		{
            InitializeComponent();
            string[] phones = new string[] { "iPhone 7", "Samsung Galaxy S8", "Huawei P10", "LG G6" };
            phonesList.ItemsSource = phones;
        }

        private void PhonesList_ItemTapped(object sender, ItemTappedEventArgs e)
        {
            if (e.Item != null)
                selected.Text = e.Item.ToString();
            ((ListView)sender).SelectedItem = null;
        }
    }
}
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


<div class="nav"><p><a href="./4.7.php">Назад</a><a href="./">Содержание</a><a href="./4.8.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 8.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 8.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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