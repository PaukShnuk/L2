<!DOCTYPE html>
<html >
<head>
<title>Entity Framework Core | Конфигурация подключения</title>
<meta charset="utf-8" />
<meta name="description" content="Конфигурация подключения в Entity Framework Core, метод OnConfiguring, передача строки подключения в контекст данных">
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
<h2>Конфигурация подключения</h2><div class="date">Последнее обновление: 14.11.2020</div>

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

<p>Для взаимодействия с базой данных для контекста данных должна быть определена конфигурация подключения. Для ее установки можно применять два способа:</p>
<ul>
<li><p>Переопределение у класса контекста данных метода <span class="b">OnConfiguring()</span></p></li>
<li><p>Передача конфигурации в конструктор базового класса <span class="b">DbContext</span></p></li>
</ul>
<p>В предыдущих темах использовался первый метод. Например:</p>
<pre class="brush:c#;">
public class ApplicationContext : DbContext
{
    public DbSet&lt;User&gt; Users { get; set; }
	public ApplicationContext()
	{
		Database.EnsureCreated();
	}
    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        optionsBuilder.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=helloappdb;Trusted_Connection=True;");
    }
	
}
</pre>
<p>В этот метод передается объект DbContextOptionsBuilder, который позволяет создать параметры подключения. Для их создания вызывается метод <code>UseSqlServer</code>, 
в который передается строка подключения.</p>
<p>Строка подключения разбивается на несколько частей:</p>
<ul>
<li><p><span class="b">Server</span>: название сервера. В данном случае используется специальный движок MS SQL Server - localdb, который предназначен 
специально для нужд разработки. Для полноценного MS SQL Server Express этот параметр, как правило, имеет значение <code>.\SQLEXPRESS</code></p></li>
<li><p><span class="b">Database</span>: название файла базы данных без расширения mdf</p></li>
<li><p><span class="b">Trusted_Connection</span>: устанавливает проверку подлинности</p></li>
</ul>
<p>Это способ вполне рабочий и может использоваться.</p>
<p>Второй способ предполагает передачу в конструктор базового класса объекта <span class="b">DbContextOptions</span>, который инкапсулирует параметры конфигурации. 
Для применения этого способа изменим класс контекста следующим образом:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;

namespace HelloApp
{
    public class ApplicationContext : DbContext
    {
        public DbSet&lt;User&gt; Users { get; set; }

        public ApplicationContext(DbContextOptions&lt;ApplicationContext&gt; options) 
            :base(options)
        {
			Database.EnsureCreated();
        }
    }
}
</pre>
<p>Тогда мы могли бы использовать класс контекста следующим образом:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;
using System;
using System.Linq;

namespace HelloApp
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var optionsBuilder = new DbContextOptionsBuilder&lt;ApplicationContext&gt;();

            var options = optionsBuilder
                    .UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=helloappdb;Trusted_Connection=True;")
                    .Options;

            using (ApplicationContext db = new ApplicationContext(options))
            {
                var users = db.Users.ToList();
                foreach (User u in users)
                    Console.WriteLine($"{u.Id}.{u.Name} - {u.Age}");
            }
            Console.Read();
        }
    }
}
</pre>
<p>Здесь опять же применяется метод UseSqlServer класса DbContextOptionsBuilder для создания конфигурации по той же строке подключения. Только результат этой операции - объект DbContextOptions 
затем передается в контекст данных. А контекст данных далее передает этот параметр в конструктор базового класса.</p>
<h3>Файл конфигурации</h3>
<p>Оба выше представленных способа вполне работают, однако в том определении, в котором они представлены, они имеют один недостаток - строка подключения 
жестко определена в коде C#. И было бы неплохо, если бы она была бы определена в каком-нибудь внешнем файле подключения, где мы ее могли бы поменять 
без перекомпиляции приложения.</p>
<p>Для этого добавим в проект новый элемент <span class="b">JSON File</span>, который назовем <span class="b">appsettings.json</span>:</p>
<img src="./pics/2.1.png" alt="Файл конфигурации в Entity Framework Core" />
<p>Определим в этом файле следующий код:</p>
<pre class="brush:js;">
{
  "ConnectionStrings": {
    "DefaultConnection": "Server=(localdb)\\mssqllocaldb;Database=helloappdb;Trusted_Connection=True;"
  }
}
</pre>
<p>Здесь опять же определена наша строка подключения.</p>
<p>Чтобы ее использовать, нам надо добавить в проект через Nuget пакет: <span class="b">Microsoft.Extensions.Configuration.Json</span>. 
Этот пакет специально предназначен для работы с конфигурацией в формате json.</p>
<p>После добавления файла в Visual Studio не забудьте у него установить найстройку копирования в каталог приложения</p>
<img src="./pics/1.11.png" alt="Файл конфигурации JSON для Entity Framework Core" />
<p>Далее для работы с БД в классе Program определим следующий код:</p>
<pre class="brush:c#;">
using System;
using System.Linq;
using Microsoft.Extensions.Configuration;
using Microsoft.EntityFrameworkCore;
using System.IO;

namespace HelloApp
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var builder = new ConfigurationBuilder();
            // установка пути к текущему каталогу
            builder.SetBasePath(Directory.GetCurrentDirectory());
            // получаем конфигурацию из файла appsettings.json
            builder.AddJsonFile("appsettings.json");
            // создаем конфигурацию
            var config = builder.Build();
            // получаем строку подключения
            string connectionString = config.GetConnectionString("DefaultConnection");

            var optionsBuilder = new DbContextOptionsBuilder&lt;ApplicationContext&gt;();
            var options = optionsBuilder
                .UseSqlServer(connectionString)
                .Options;

            using (ApplicationContext db = new ApplicationContext(options))
            {
                var users = db.Users.ToList();
                foreach (User u in users)
                {
                    Console.WriteLine($"{u.Id}.{u.Name} - {u.Age}");
                }
            }
            Console.Read();
        }
    }
}
</pre>
<p>Для создания конфигурации применяется класс ConfigurationBuilder. Метод <code>AddJsonFile()</code> добавляет все настройки из файла конфигурации. 
С помощью метода <code>Build()</code> создается объект конфигурации, из которого мы можем получить строку подключения:</p>
<pre class="brush:c#;">string connectionString = config.GetConnectionString("DefaultConnection");</pre>
<p>Для получения строки подключения используется ее имя - "DefaultConnection", которое указано в appsettings.json.</p>
<p>В остальном работа с контекстом данных будет протекать также.</p>
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


<div class="nav"><p><a href="2.1.php">Назад</a><a href="./">Содержание</a><a href="2.16.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Entity Framework Core</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/1.1.php">Что такое Entity Framework Core</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/1.2.php">Первое приложение на EF Core</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/1.3.php">Подключение к существующей базе данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.1.php">Основные операции с данными. CRUD</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.2.php">Конфигурация подключения</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.16.php">Логгирование операций</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.12.php">Провайдеры логгирования</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Создание моделей в Entity Framework Core</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.3.php">Модели, Fluent API и аннотации данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.15.php">Управление схемой БД и миграции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.4.php">Определение моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.5.php">Свойства моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.6.php">Сопоставление таблиц и столбцов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.7.php">Настройка ключей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.17.php">Настройка индексов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.8.php">Генерация значений свойств и столбцов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.9.php">Ограничения свойств</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.10.php">Типы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.13.php">Конфигурация моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.14.php">Инициализация базы данных начальными данными</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Отношения между моделями</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.1.php">Внешние ключи и навигационные свойства</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.2.php">Каскадное удаление</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.3.php">Загрузка связанных данных. Метод Include</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.8.php">Explicit loading</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.9.php">Lazy loading</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.4.php">Отношение один к одному</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.5.php">Отношение один ко многим</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.6.php">Отношение многие ко многим</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.7.php">Комплексные типы</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Наследование</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/4.1.php">Подход TPH - Table Per Hierarchy</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/4.2.php">Подход TPT - Table Per Type</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Запросы и LINQ to Entities</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.1.php">Введение в LINQ to Entities</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.2.php">Выборка и фильтрация</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.10.php">Сортировка и проекция из базы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.3.php">Соединение и группировка таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.4.php">Операции с множествами: объединение, пересечение, разность</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.5.php">Агрегатные операции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.7.php">Отслеживание объектов и AsNoTracking</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.8.php">Выполнение запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.6.php">IEnumerable и IQueryable</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.9.php">Фильтры запросов уровня модели</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. SQL в Entity Framework Core</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/6.1.php">Выполнение SQL-запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/6.2.php">Хранимые функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/6.3.php">Хранимые процедуры</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Провайдеры баз данных</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/7.1.php">PostgreSQL</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/7.2.php">MySQL</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 8. Дополнительные статьи</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.11.php">Параллелизм</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/8.1.php">Компилируемые запросы</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/8.2.php">Проекция запросов на представления</a></span></li>
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