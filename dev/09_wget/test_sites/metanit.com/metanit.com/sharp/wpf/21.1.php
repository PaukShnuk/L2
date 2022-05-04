<!DOCTYPE html>
<html >
<head>
<title>C# и WPF | Работа с SQLite</title>
<meta charset="utf-8" />
<meta name="description" content="Подключение SQLite в проект WPF, основные операции с базой данных, взаимодействие с Entity Framework">
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
<h1>SQLite в WPF</h1><h2>Работа с SQLite</h2><div class="date">Последнее обновление: 30.08.2016</div>

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

<p>SQLite является одной из наиболее используемых систем управления базами данных. Главным преимуществом SQLite является то, что для базы данных не нужно сервера. База данных представляет собой обычный 
локальный файл, который мы можем перемещать вместе с главным файлом приложения. Кроме того, для запросов к базе данных мы можем использовать стандартные выражения 
языка SQL, которые равным образом с некоторыми изменениями могут применяться и в других СУБД как Oracle, MS SQL Server, MySQL, Postgres и т.д.</p>
<p>Еще одним преимуществом является широкое распространение SQLite - область применения охватывает множество платфрм и технологий: WPF, Windows Forms, UWP, Xamarin, Android, iOS и т.д. 
И если мы, скажем, захотим создать копию приложения для ОС Android, то базу данных мы можем перенести в новое приложение такой, как она определена для приложения на WPF.</p>
<p>Итак, создадим новый проект WPF, который назовем SQLiteApp. В первую очередь нам надо добавить функциональность SQLite в проект. Для этого мы можем загрузить 
нужный нам пакет со страницы <a href="https://system.data.sqlite.org/index.html/doc/trunk/www/downloads.wiki" rel="nofollow">https://system.data.sqlite.org/index.html/doc/trunk/www/downloads.wiki</a>, и 
инсталлятор установить все необходимые библиотеки в глобальный кэш сборок (GAC), откуда мы можем выбирать их для проекта.</p>
<p>Либо мы можем добавить SQLite в проект через пакетный менеджер Nuget. Итак, выберем этот способ, перейдем к Nuget, нажав в проекте правой кнопкой на узел 
References и выбрав в открывшемся контекстном меню пункт <span class="b">Manage NuGet Packages...</span>:</p>
<img src="./pics/21.1.png" alt="NuGet в WPF" />
<p>В окне менеджера Nuget введем в окно поиска "SQLite", и менеджер отобразит нам ряд результатов. Из них нам надо установить пакет под названием 
<span class="b">System.Data.SqlClient</span>:</p>
<img src="./pics/21.2.png" alt="Установка SQLite в WPF" />
<p>Данный пакет зависит от трех других пакетов, которые также будут установлены:</p>
<ul>
<li><p>System.Data.SqlClient.Core</p></li>
<li><p>System.Data.SqlClient.Linq</p></li>
<li><p>System.Data.SqlClient.EF6</p></li>
</ul>
<p>Вместе с последним пакетом также будет добавлен Entity Framework. Таким образом, мы сможем работать с базой данных SQLite через ORM-инструмент 
Entity Framework.</p>
<p>В отличие от работы с MS SQL Server по отношению к SQLite EF 6 не поддерживает автоматическое создание базы данных и ее таблиц через Code First в соответствии со структурой моделей приложения. 
И в этом случае нам самим надо создавать баз данных и ее таблицы.</p>
<p>Для работы с SQLite установим специальный инструмент - <a href="http://sqlitebrowser.org/" rel="nofollow">DB Browser for SQLite</a></p>
<p>Откроем DB Browser for SQLite и для создания новой базы данных нажмем на кнопку <span class="b">New Database</span>. В оттрывшемся окне выберем 
место расположения файла базы данных и укажем для нее имя, например, <span class="b">mobiles</span>.</p>
<p>Далее нам будет предложено добавить в базу данных таблицы. Определим для таблицы имя "Phones" и добавим четыре столбца Id, Title, Company, Price, 
как на скриншоте:</p>
<img src="./pics/21.4.png" alt="DB Browser for SQLite" />
<p>Стоит обратить внимание, что столбец Id определен здесь как первичный ключ.</p>
<p>После добавления таблицы мы сможем добавить вручную через DB Browser for SQLite какие-либо данные.</p>
<p>И далее добавим созданную нами базу данных в наш проект. После добавления для файла базы данных установим опцию "Copy if newer", чтобы файл копировался при компиляции в каталог приложения:</p>
<img src="./pics/21.6.png" alt="Добавление базы данных SQLite в WPF" />
<p>Для поддержки SQLite необходимо изменить конфигурацию проекта, которая располагается в файле <span class="ii">App.config</span>. После добавления пакетов 
данный файл также автоматически изменяется. Однако все же нам необходимо внести в него некоторые изменения. Так, изменим его следующим образом:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;configuration&gt;
  &lt;configSections&gt;
    &lt;section name="entityFramework" type="System.Data.Entity.Internal.ConfigFile.EntityFrameworkSection, EntityFramework, Version=6.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089" requirePermission="false" /&gt;
  &lt;/configSections&gt;
  &lt;connectionStrings&gt;
    &lt;add name="DefaultConnection" connectionString="Data Source=.\mobiles.db" providerName="System.Data.SQLite" /&gt;
  &lt;/connectionStrings&gt;
  &lt;startup&gt;
    &lt;supportedRuntime version="v4.0" sku=".NETFramework,Version=v4.6" /&gt;
  &lt;/startup&gt;
  &lt;entityFramework&gt;
    &lt;defaultConnectionFactory type="System.Data.Entity.Infrastructure.LocalDbConnectionFactory, EntityFramework"&gt;
      &lt;parameters&gt;
        &lt;parameter value="v11.0" /&gt;
      &lt;/parameters&gt;
    &lt;/defaultConnectionFactory&gt;
    &lt;providers&gt;
      &lt;provider invariantName="System.Data.SQLite"  type="System.Data.SQLite.EF6.SQLiteProviderServices, System.Data.SQLite.EF6"/&gt;
      &lt;provider invariantName="System.Data.SqlClient" type="System.Data.Entity.SqlServer.SqlProviderServices, EntityFramework.SqlServer" /&gt;
      &lt;provider invariantName="System.Data.SQLite.EF6" type="System.Data.SQLite.EF6.SQLiteProviderServices, System.Data.SQLite.EF6" /&gt;
    &lt;/providers&gt;
  &lt;/entityFramework&gt;
  &lt;system.data&gt;
    &lt;DbProviderFactories&gt;
      &lt;add name="SQLite Data Provider (Entity Framework 6)" invariant="System.Data.SQLite.EF6" description=".NET Framework Data Provider for SQLite (Entity Framework 6)" type="System.Data.SQLite.EF6.SQLiteProviderFactory, System.Data.SQLite.EF6" /&gt;
      &lt;add name="SQLite Data Provider" invariant="System.Data.SQLite" description=".NET Framework Data Provider for SQLite" type="System.Data.SQLite.SQLiteFactory, System.Data.SQLite" /&gt;
  &lt;/DbProviderFactories&gt;
  &lt;/system.data&gt;
&lt;/configuration&gt;
</pre>
<p>Прежде всего здесь определена строка подключения:</p>
<pre class="brush:xml;">
&lt;connectionStrings&gt;
    &lt;add name="DefaultConnection" connectionString="Data Source=.\mobiles.db" providerName="System.Data.SQLite" /&gt;
&lt;/connectionStrings&gt;
</pre>
<p>Так как созданный нами файл базы данных называется <span class="ii">mobiles</span> (к которому DB Browser for SQLite по умолчанию добавляет 
расширение <span class="ii">db</span>), то в качестве источника данных здесь указан именно "mobiles.db".</p>
<p>Другой важный момент - установка в узле <code>&lt;providers&gt;</code> провайдера, который будет использоваться для подключения:</p>
<pre class="brush:xml;">
&lt;provider invariantName="System.Data.SQLite"  type="System.Data.SQLite.EF6.SQLiteProviderServices, System.Data.SQLite.EF6"/&gt;
</pre>
<p>Теперь определим в проекте класс, объекты которого будут храниться в базе данных:</p>
<pre class="brush:c#;">
using System.ComponentModel;
using System.Runtime.CompilerServices;

namespace SQLiteApp
{
    public class Phone : INotifyPropertyChanged
    {
        private string title;
        private string company;
        private int price;

        public int Id { get; set; }

        public string Title
        {
            get { return title; }
            set
            {
                title = value;
                OnPropertyChanged("Title");
            }
        }
        public string Company
        {
            get { return company; }
            set
            {
                company = value;
                OnPropertyChanged("Company");
            }
        }
        public int Price
        {
            get { return price; }
            set
            {
                price = value;
                OnPropertyChanged("Price");
            }
        }

        public event PropertyChangedEventHandler PropertyChanged;
        public void OnPropertyChanged([CallerMemberName]string prop = "")
        {
            if (PropertyChanged != null)
                PropertyChanged(this, new PropertyChangedEventArgs(prop));
        }
    }
}
</pre>
<p>При ручном определении модели надо учитывать, что эта модель должна соответствовать таблице из БД. Так, в бд мы создали таблицу Phones, в которой есть 
целочисленные столбцы Id и Price, соответственно в классе Phone определены свойства Id и Price, представляющие целые числа. То же самое со строковыми столбцами 
Title и Company, которые по имени и типу данных соответствуют свойствам Title и Company в классе Phone.</p>
<p>И еще один важный момент: Entity Framework по умолчанию применяет некоторые условности при наименовании моделей и таблиц в БД. Так, название таблицы 
должно представлять название модели во множественном числе в соответствии с правилами английского языка. Так, у нас таблица называется Phones, а класс Phone. То есть 
условности соблюдены.</p>
<p>Для взаимодействия с базой данных нам нужен еще один комопнент - контекст данных. Добавим в проект новый класс, который назовем ApplicationContext:</p>
<pre class="brush:c#;">
using System.Data.Entity;

namespace SQLiteApp
{
    public class ApplicationContext : DbContext
    {
        public ApplicationContext():base("DefaultConnection")
        {
        }
        public DbSet&lt;Phone&gt; Phones { get; set; }
    }
}
</pre>
<p>Класс контекста должен наследоваться от DbContext. В конструкторе класса в конструктор базового класса передаем название подключения. В данном случае 
название должно совпадать с названием подключения из App.config.</p>
<p>И для взаимодействия с таблицей Phones здесь также определено одноименное свойство <code>Phones</code>.</p>
<p>Теперь все готово для работы с базой данных. Стандартный набор операций по работе с БД включает получение объектов, добавление, изменение и удаление. 
Для получения и просмотра списка объектов из бд мы будем использовать главное окно. А для добавления и изменения создадим новое окно.</p>
<p>Итак, добавим в проект новое окно, которое назовем <span class="b">PhoneWindow.xaml</span>. В итоге общая конфигурация проекта у нас будет выглядеть следующим образом:</p>
<img src="./pics/21.5.png" alt="Конфигурация SQLite в WPF" />
<p>В коде xaml у страницы PhoneWindow.xaml определим следующее содержимое:</p>
<pre class="brush:xml;">
&lt;Window x:Class="SQLiteApp.PhoneWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:SQLiteApp"
        mc:Ignorable="d"
        Title="PhoneWindow" Height="200" Width="300"&gt;
    &lt;Window.Resources&gt;
        &lt;Style TargetType="TextBlock"&gt;
            &lt;Setter Property="Margin" Value="8" /&gt;
        &lt;/Style&gt;
        &lt;Style TargetType="TextBox"&gt;
            &lt;Setter Property="Margin" Value="8" /&gt;
        &lt;/Style&gt;
    &lt;/Window.Resources&gt;
    &lt;Grid&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition Width="100" /&gt;
            &lt;ColumnDefinition /&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;TextBlock Text="Модель" /&gt;
        &lt;TextBlock Text="Производитель" Grid.Row="1" /&gt;
        &lt;TextBlock Text="Цена" Grid.Row="2" /&gt;

        &lt;TextBox Text="{Binding Title}" Grid.Column="1" /&gt;
        &lt;TextBox Text="{Binding Company}" Grid.Column="1" Grid.Row="1" /&gt;
        &lt;TextBox Text="{Binding Price}" Grid.Column="1" Grid.Row="2" /&gt;
        
        &lt;StackPanel HorizontalAlignment="Center" Orientation="Horizontal" Grid.Row="3" Grid.Column="1"&gt;
            &lt;Button IsDefault="True" Click="Accept_Click" MinWidth="60" Margin="5"&gt;OK&lt;/Button&gt;
            &lt;Button IsCancel="True" MinWidth="60" Margin="5"&gt;Отмена&lt;/Button&gt;
        &lt;/StackPanel&gt;    
    &lt;/Grid&gt;
&lt;/Window&gt;
</pre>
<p>Здесь определены три поля ввода для каждого свойства модели Phone и две кнопки для сохранения и отмены.</p>
<p>В коде <span class="ii">PhoneWindow.xaml.cs</span> определим контекст для этой страницы:</p>
<pre class="brush:c#;">
using System.Windows;

namespace SQLiteApp
{
    public partial class PhoneWindow : Window
    {
        public Phone Phone { get; private set; }

        public PhoneWindow(Phone p)
        {
            InitializeComponent();
			Phone= p;
            this.DataContext = Phone;
        }

        private void Accept_Click(object sender, RoutedEventArgs e)
        {
            this.DialogResult = true;
        }
    }
}
</pre>
<p>Данное окно будет диалоговым. Через конструктор оно будет получать объект Phone, который устанавливается в качестве контекста данных.</p>
<p>В коде xaml у главного окна MainWindow определим вывод списка телефонов и набор кнопок для управления этим списком:</p>
<pre class="brush:xml;">
&lt;Window x:Class="SQLiteApp.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:SQLiteApp"
        mc:Ignorable="d"
        Title="MainWindow" Height="300" Width="425"&gt;
    &lt;Grid&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition Height="50" /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;ListBox x:Name="phonesList" ItemsSource="{Binding}"&gt;
            &lt;ListBox.ItemTemplate&gt;
                &lt;DataTemplate&gt;
                    &lt;StackPanel&gt;
                        &lt;TextBlock Text="{Binding Title}" FontSize="16" /&gt;
                        &lt;TextBlock Text="{Binding Company}" FontSize="12" /&gt;
                        &lt;TextBlock Text="{Binding Price}" FontSize="13" /&gt;
                    &lt;/StackPanel&gt;
                &lt;/DataTemplate&gt;
            &lt;/ListBox.ItemTemplate&gt;
        &lt;/ListBox&gt;
        &lt;StackPanel Grid.Row="1" Orientation="Horizontal" HorizontalAlignment="Center"&gt;
            &lt;Button Content="Добавить" Margin="10" Click="Add_Click" /&gt;
            &lt;Button Content="Изменить" Margin="10" Click="Edit_Click"  /&gt;
            &lt;Button Content="Удалить" Margin="10" Click="Delete_Click"  /&gt;
        &lt;/StackPanel&gt;
    &lt;/Grid&gt;
&lt;/Window&gt;
</pre>
<p>В коде C# у этого окна пропишем обработчики кнопок, через которые будем взаимодействовать с базой данных SQLite:</p>
<pre class="brush:c#;">
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Windows;

namespace SQLiteApp
{
    public partial class MainWindow : Window
    {
        ApplicationContext db;
        public MainWindow()
        {
            InitializeComponent();

            db = new ApplicationContext();
            db.Phones.Load();
            this.DataContext = db.Phones.Local.ToBindingList();
        }
        // добавление
        private void Add_Click(object sender, RoutedEventArgs e)
        {
            PhoneWindow phoneWindow = new PhoneWindow(new Phone());
            if (phoneWindow.ShowDialog() == true)
            {
                Phone phone = phoneWindow.Phone;
                db.Phones.Add(phone);
                db.SaveChanges();
            }
        }
        // редактирование
        private void Edit_Click(object sender, RoutedEventArgs e)
        {
            // если ни одного объекта не выделено, выходим
            if (phonesList.SelectedItem == null) return;
            // получаем выделенный объект
            Phone phone = phonesList.SelectedItem as Phone;

            PhoneWindow phoneWindow = new PhoneWindow(new Phone
            {
                Id = phone.Id,
                Company = phone.Company,
                Price = phone.Price,
                Title = phone.Title
            });

            if (phoneWindow.ShowDialog() == true)
            {
                // получаем измененный объект
                phone = db.Phones.Find(phoneWindow.Phone.Id);
                if(phone!=null)
                {
                    phone.Company = phoneWindow.Phone.Company;
                    phone.Title = phoneWindow.Phone.Title;
                    phone.Price = phoneWindow.Phone.Price;
                    db.Entry(phone).State = EntityState.Modified;
                    db.SaveChanges();
                }
            }
        }
        // удаление
        private void Delete_Click(object sender, RoutedEventArgs e)
        {
            // если ни одного объекта не выделено, выходим
            if (phonesList.SelectedItem == null) return;
            // получаем выделенный объект
            Phone phone = phonesList.SelectedItem as Phone;
            db.Phones.Remove(phone);
            db.SaveChanges();
        }
    }
}
</pre>
<p>Выражение <code>db.Phones.Load()</code> загружает данные из таблицы Phones в локальный кэш контекста данных. И затем список загруженных объектов устанавливается 
в качестве контекста данных:</p>
<pre class="brush:c#;">this.DataContext = db.Phones.Local.ToBindingList();</pre>
<p>Для добавления вызывается метод Add:</p>
<pre class="brush:c#;">
db.Phones.Add(phone);
db.SaveChanges();
</pre>
<p>Для удаления - метод Remove:</p>
<pre class="brush:c#;">
db.Phones.Remove(phone);
db.SaveChanges();
</pre>
<p>При изменении мы передаем в PhoneWindow копию выбранного объекта. Если мы передавали бы сам выделенный объект, то все изменения на форме автоматически 
синхронизировались со списком, и не было бы смысла в кнопке отмены.</p>
<p>После получения измененного объекта мы находим его в базе данных и устанавливаем у него состояние Modified, после чего сохраняем все изменения:</p>
<pre class="brush:c#;">
phone = db.Phones.Find(phoneWindow.Phone.Id);
if(phone!=null)
{
    phone.Company = phoneWindow.Phone.Company;
    phone.Title = phoneWindow.Phone.Title;
    phone.Price = phoneWindow.Phone.Price;
    db.Entry(phone).State = EntityState.Modified;
    db.SaveChanges();
}
</pre>
<p>Запустим приложение. И добавим какой нибудь объект:</p>
<img src="./pics/21.7.png" alt="Добавление в SQLite в WPF" />
<p>И после добавления объект отобразится в списке:</p>
<img src="./pics/21.8.png" alt="Вывод списка в SQLite в WPF" />
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


<div class="nav"><p><a href="20.3.php">Назад</a><a href="./">Содержание</a><a href="21.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 22.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 22.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 22.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 22.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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