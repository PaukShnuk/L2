<!DOCTYPE html>
<html >
<head>
<title>Работа с существующей БД SQLite в Windows Phone 8.1</title>
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
<h2>Работа с существующей БД SQLite</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>В предыдущих темах мы рассмотрели процесс работы с новой БД SQLite, теперь рассмотрим ситуацию, если у нас база данных уже существует, 
и нам ее надо подключить к приложению.</p>
<p>Для начала создадим базу данных SQLite. Для этого можно воспользоваться специальными инструментами, например, программой Sqlitebrowser. Ее можно 
найти по адресу <a href="http://sqlitebrowser.org/" rel="nofollow">http://sqlitebrowser.org</a>.</p>

<p>Sqlitebrowser представляет графический интерфейс для создания базы данных и определения в ней всех необходимых таблиц:</p>
<img src="pics/14.9.png" alt="Создание бд SQLite" />
<p>Как видно на скриншоте выше, у меня определена таблица users с тремя полями: _id, name, age.</p>
<p>И там же в программе добавим несколько элементов в созданную таблицу:</p>
<img src="pics/14.10.png" alt="Новая база данных SQLite" />
<p>Итак, есть существующая база данных с одной таблицей, в которой есть три элемента. Добавим ее в проект и установим у нее в панели свойств 
для параметра <span class="bb">Build Action</span> значение <span class="bb">Content</span></p>
<img src="pics/14.11.png" alt="Добавление SQLite в проект Windows Phone 8.1" />
<p>Также определим класс User, представляющий объект из БД:</p>
<pre class="brush:c#;">
public class User
{
    public long Id { get; set; }
    public string Name { get; set; }
    public long Year { get; set; }
}
</pre>
<p>И добавим класс репозитория, через который будем взаимодействовать с базой данных:</p>
<pre class="brush:c#;">
using SQLitePCL;
using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Windows.ApplicationModel;
using Windows.Storage;

namespace SQLiteApp
{
    public class UserRepository
    {
        public SQLiteConnection con;
        static string dbname = "usersdb.db3";
        public UserRepository()
        {
            this.con = new SQLiteConnection(dbname);
        }
        public static async Task CopyDatabase()
        {
            bool isDatabaseExisting = false;

            try
            {
                StorageFile storageFile = await ApplicationData.Current.LocalFolder.GetFileAsync(dbname);
                isDatabaseExisting = true;
            }
            catch
            {
                isDatabaseExisting = false;
            }

            if (!isDatabaseExisting)
            {
                StorageFile databaseFile = await Package.Current.InstalledLocation.GetFileAsync("usersdb.db3");
                await databaseFile.CopyAsync(ApplicationData.Current.LocalFolder);
            }
        } 
        public void Insert(User user)
        {
            using (var statement = con.Prepare("INSERT INTO users(name, year) VALUES (?,?)"))
            {
                statement.Bind(1, user.Name);
                statement.Bind(2, user.Year);
                statement.Step();
            }
        }
 
        public ObservableCollection&lt;User&gt; GetUsers()
        {
            ObservableCollection&lt;User&gt; users = new ObservableCollection&lt;User&gt;();
 
            using (var statement = con.Prepare("SELECT _id, name, year FROM users"))
            {
                while (statement.Step() == SQLiteResult.ROW)
                {
                    User user = new User();
                    user.Id = (long)statement[0];
                    user.Name = (string)statement[1];
                    user.Year = (long)statement[2];
                    users.Add(user);
                }
            }
            return users;
        }
 
        public User GetUser(long id)
        {
            User user = null;
 
            using (var statement = con.Prepare("SELECT _id, name, year FROM users WHERE _id=?"))
            {
                statement.Bind(1, id);
                if (statement.Step()==SQLiteResult.ROW)
                {
                    user = new User();
                    user.Id = (long)statement[0];
                    user.Name = (string)statement[1];
                    user.Year = (long)statement[2];
                }
            }
 
            return user;
        }
 
        public void Update(User user)
        {
            using (var statement = con.Prepare("UPDATE users SET name=?, year=? WHERE _id=?"))
            {
                 statement.Bind(1, user.Name);
                 statement.Bind(2, user.Year);
                 statement.Bind(3, user.Id);
                 statement.Step();
            }
        }
 
        public void Delete(long id)
        {
            using (var statement = con.Prepare("DELETE FROM users WHERE _id=?"))
            {
                statement.Bind(1, id);
                statement.Step();
            }
        }
    }
}
</pre>
<p>В отличие от класса репозитория, использовавшегося в прошлых темах, здесь добавляется метод <code>CopyDatabase()</code>, котоырй выполняет копирование 
базы данных из каталога с установленным пакетом приложения в каталог <i>ApplicationData.Current.LocalFolder</i>, где база данных собственно и должна находиться:</p>
<pre class="brush:c#;">
StorageFile databaseFile = await Package.Current.InstalledLocation.GetFileAsync("usersdb.db3");
await databaseFile.CopyAsync(ApplicationData.Current.LocalFolder);
</pre>
<p>Чтобы выполнить копирование БД, перейдем к файлу приложения <i>App.xaml.cs</i> и изменим его метод <code>OnLaunched</code>:</p>
<pre class="brush:c#;">
public static UserRepository repo;
protected override async void OnLaunched(LaunchActivatedEventArgs e)
{
	await UserRepository.CopyDatabase();
    repo = new UserRepository();
	
	// остальное содержание	
}
</pre>
<p>В этом методе перед всем основным остальным содержанием добавляем две строки, которые и выполняют копирование бд и создание объекта репозитория 
при запуске приложения.</p>
<p>И вся остальная работа будет выглядеть также. Например, плучение данных. Файл MainPage.xaml:</p>
<pre class="brush:c#;">
&lt;Page
    x:Class="SQLiteApp.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:local="using:SQLiteApp"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    Background="{ThemeResource ApplicationPageBackgroundThemeBrush}"&gt;

    &lt;Grid&gt;
        &lt;StackPanel&gt;
            &lt;TextBlock Text="Пользователи" Style="{ThemeResource HeaderTextBlockStyle}" /&gt;
            &lt;ListView x:Name="usersList"&gt;
                &lt;ListView.ItemTemplate&gt;
                    &lt;DataTemplate&gt;
                        &lt;StackPanel&gt;
                            &lt;TextBlock Text="{Binding Name}"  FontSize="26" /&gt;
                        &lt;/StackPanel&gt;
                    &lt;/DataTemplate&gt;
                &lt;/ListView.ItemTemplate&gt;
            &lt;/ListView&gt;
        &lt;/StackPanel&gt;
    &lt;/Grid&gt;
&lt;/Page&gt;
</pre>
<p>А в файле кода <i>MainPage.xaml.cs</i> получение данных в методе <code>OnNavigatedTo</code>:</p>
<pre class="brush:c#;">
protected override void OnNavigatedTo(NavigationEventArgs e)
{
    usersList.ItemsSource = App.repo.GetUsers();
}
</pre>
<img src="pics/14.12.png" alt="Работаем в SQLite в WP8.1" />
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


<div class="nav"><p><a href="14.2.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
	
	$("li:contains('Глава 14.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 14.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 14.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 14.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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