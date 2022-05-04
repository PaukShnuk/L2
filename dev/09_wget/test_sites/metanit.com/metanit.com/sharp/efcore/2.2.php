<!DOCTYPE html>
<html >
<head>
<title>Entity Framework Core и C# | Управление схемой БД и миграции</title>
<meta charset="utf-8" />
<meta name="description" content="Управление схемой БД и миграции в Entity Framework Core и C#, создание и выполнение миграций, создание и удаление базы данных с помощью Database.EnsureCreated и Database.EnsureDeleted, скрипт миграции">
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
<h2>Управление схемой БД и миграции</h2><div class="date">Последнее обновление: 24.11.2021</div>

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

<p>Если мы меняем модели в Entity Framework, которые входят в контекст данных, например, добавляем в нее какие-то новые свойства или удаляем некоторые 
свойства, то необходимо, чтобы база данных также применяла эти изменения. Например, в прошлых темах был создан класс User, который описывал пользователя:</p>
<pre class="brush:c#;">
public class User
{
	public int Id { get; set; }
	public string? Name { get; set; }
	public int Age { get; set; }
}
</pre>
<p>А для работы с базой данных использовался следующий контекст данных:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;

public class ApplicationContext : DbContext
{
    public DbSet&lt;User&gt; Users { get; set; } = null!;
    public ApplicationContext()
    {
        Database.EnsureCreated();
    }
    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        optionsBuilder.UseSqlite("Data Source=helloapp.db");
    }
}
</pre>
<p>Допустим, мы хотим добавить в класс User новое свойство, например:</p>
<pre class="brush:c#;">
public class User
{
	public int Id { get; set; }
	public string? Name { get; set; }
	public int Age { get; set; }
	public string? Position { get; set; }	// Новое свойство - должность пользователя
}
</pre>
<p>И если у нас уже ранее была создана база данных, на которую указывает строка подключения в классе контекста, и мы попытаемся выполнить какие-нибудь 
операции с моделью User, например, получить данные этой модели</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
    var users = db.Users.ToList();
    Console.WriteLine("Список пользователей:");
    foreach (User u in users)
    {
        Console.WriteLine($"{u.Id}.{u.Name} - {u.Age}");
    }
}
</pre>
<p>то мы столкнемся с ошибкой.</p>
<img src="./pics/2.7.png" alt="Изменение модели в Entity Framework Core" />
<p>Так как модель User изменилась, то нам надо привести в соответствие соответствующую таблицу в БД. В зависимости от используемого провайдера бд 
конкретное сообщение может отличаться, но суть будет одна - столбца Position в таблице нет. Модель изменилась, и база данных с таблицами уже ей не соответствует.</p> 
<p>В зависимости от конкретной ситуации можно использовать ряд подходов для этого. Рассмотрим их.</p>
<h3>Ручное изменение базы данных</h3>
<p>В самых простых случаях мы можем написать sql-скрипт для добавления столбцов или таблиц, либо же даже можем изменить таблицы вручную с помощью различных программ, которые позволяют в 
режиме дизайнера редактировать таблицы.</p>
<p>Например, в примере выше применялась база данных SQLite. Для ее редактирования мы можем использовать программу <a href="https://sqlitebrowser.org/" rel="nofollow">DB Browser for SQLite</a>. 
Так, откроем базу данных в этой программе. Нажмем на таблицу Users правой кнопкой мыши и в появившемся контекстном меню выберем <code>Modify Table</code>:</p>
<img src="./pics/2.15.png" alt="Ручное изменение таблицы SQLite в Entity Framework Core" />
<p>В окне редактирования таблицы нажмем на кнопку <span class="b">Add</span> для добавления нового столбца. После в определении таблицы добавится новая строка 
для определения нового столбца, где для названия столбца введем "Position", а в качестве типа столбца опеделим <span class="b">TEXT</span></p>
<img src="./pics/2.8.png" alt="Изменение таблицы в Entity Framework Core" />
<p>Нажмем на кнопку OK, и в таблицу будет добавлен новый столбец Position, который будет соответствовать новуму свойству Position в классе User. 
И теперь таблица Users находится в соответствии с классом User. Больше никаких проблем при выполнении программы не возникнет.</p>
<p>Теоретически и практически так можно делать. Стоит отметить, что при этом мы максимально контроллируем процесс изменения базы данных. Все данные, 
которые у меня были в таблице, так там и остались.</p>
<p>Тем не менее этот подход имеет много недостатков. В частности, менее искушенные программисты могут не знать, как сопоставляются типы между SQL и C#. При указании данных 
столбцов и/или таблиц мы можем допустить ошибку - например, вместо "Position" написать "Positon". В конце концов такой подход может занять много времени, 
особенно когда речь идет о куда больших изменениях схемы БД.</p>
<h3>Database.EnsureCreated и Database.EnsureDeleted</h3>
<p>Если нам не важны данные в БД и мы хотим ее просто пересоздать для соответствия новой структуре классов, то через контекст данных можно вызывать 
метод <span class="b">Database.EnsureDeleted</span> для удаления и затем метод <span class="b">Database.EnsureCreated</span> для создания бд. Например, в коде самого контекста данных (обычно в конструкторе):</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;

public class ApplicationContext : DbContext
{
    public DbSet&lt;User&gt; Users { get; set; } = null!;
    public ApplicationContext()
    {
        Database.EnsureDeleted();   // удаляем бд со старой схемой
        Database.EnsureCreated();   // создаем бд с новой схемой
    }
    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        optionsBuilder.UseSqlite("Data Source=helloapp.db");
    }
}
</pre>
<p>В то же время при удалении происходит полное удаление данных, что в ряде случаев может быть нежелательным. И в этом случае лучше использовать миграции.</p>
<h3>Миграция</h3>
<p>Миграция по сути предствляет план перехода базы данных от старой схемы к новой. Как использовать миграции?</p>
<p>Для создания миграции в окне <span class="b">Package Manager Console</span> вводится следующая команда:</p>
<pre class="brush:c#;">Add-Migration название_миграции</pre>
<p>Название миграции представляет произвольное название, главное чтобы все миграции в проекте имели разные названия.</p>
<p>После создания миграции ее надо выполнить с помощью команды:</p>
<pre class="brush:c#;">Update-Database</pre>
<p>Если планируется использовать миграции, то лучше их использовать сразу при создании базы данных.</p>
<p>Для использования миграций в Visual Stuido необходимо добавить в проект через менеджер Nuget пакет <span class="b">Microsoft.EntityFrameworkCore.Tools</span>.</p>
<p>Например, определим модели и контекст следующим образом:</p>
<pre class="brush:c#;">
public class User
{
	public int Id { get; set; }
	public string? Name { get; set; }
	public int Age { get; set; }
}
public class ApplicationContext : DbContext
{
	public DbSet&lt;User&gt; Users { get; set; } = null!;
	public ApplicationContext()
	{
	//    Database.EnsureCreated();
	}
	protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
	{
		optionsBuilder.UseSqlite("Data Source=D:\\helloapp.db");
	}
}
</pre>
<p>Обратите внимание, что в конструкторе контекста закомментирован метод <code>Database.EnsureCreated()</code>. В данном случае он не нужен. 
Более того при выполнении миграции этот метод вызывает ошибку. Этот момент следует учитывать.</p>
<p>Также стоит отметить, что при самом первом применении миграции по отношению к БД SQLite Entity Framework пытается создать ее заново, однако если создаваемые 
таблицы в ней уже есть, то мы столкнемся с ошибкой. Поэтому следует убедиться, что по используемому пути нет файла базы данных с подобным именем. При последующих применениях миграции 
EF будет использовать бд, созданную при первой миграции.</p>
<p>Теперь для создания и выполнения миграции перейдем в Visual Studio к окну <span class="b">Package Manager Console</span>. Вначале введем команду</p>
<pre class="brush:c#;">
Add-Migration InitialCreate
</pre>
<p>Название миграции произвольное. В данном случае это InitialCreate. Нажмем на Enter для создания миграции.</p>
<p>После этого в проект будет добавлена папка Migrations с классом миграции:</p>
<img src="./pics/2.10.png" alt="Миграции в Entity Framework Core" />
<p>Папка содержит два файла:</p>
<ul>
<li><p><span class="b">XXXXXXXXXXXXXX_InitialCreate.cs</span>: основной файл миграции, который содержит все применяемые действия</p></li>
<li><p><span class="b">[Имя_контекста_данных]ModelSnapshot.cs</span>: содержит текущее состояние модели, используется при создании следующей миграции</p></li>
</ul>
<p>В частности, мы можем открыть файл, который в названии содержит имя миграции, и посмотреть те действия, которые будет применяться:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace HelloApp.Migrations
{
    public partial class InitialCreate : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "Users",
                columns: table =&gt; new
                {
                    Id = table.Column&lt;int&gt;(type: "INTEGER", nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    Name = table.Column&lt;string&gt;(type: "TEXT", nullable: true),
                    Age = table.Column&lt;int&gt;(type: "INTEGER", nullable: false)
                },
                constraints: table =&gt;
                {
                    table.PrimaryKey("PK_Users", x =&gt; x.Id);
                });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "Users");
        }
    }
}
</pre>
<p>В миграции определяются два метода: <code>Up()</code> и <code>Down()</code>. В методе Up с помощью вызова метода CreateTable 
добавляется новое определение таблиц.</p>
<p>И в завершении чтобы выполнить миграцию, применим этот класс, набрав в той же консоли команду:</p>
<pre class="brush:c#;">Update-Database</pre>
<img src="./pics/2.11.png" alt="Выполнение миграции в Entity Framework Core" />
<p>После выполнения миграции по указанному в методе <code>optionsBuilder.UseSqlite("Data Source=D:\\helloapp.db")</code> пути будет сгенерированная база данных. 
В случае с бд SQLite, для которой указан относительный путь (например, <code>"Data Source=helloapp.db")</code>, файл бд генерируется в папке проекта. Для других провайдеров - MS SQL Server, MySQL и т.д. 
бд генерируется на сервере бд в соответствии со строкой подключения.</p>
<p>Следует отметить, что кроме основных таблиц (в случае выше таблицы Users) база данных 
также будет содержать дополнительную таблицу <code>_EFMigrationsHystory</code>, которая будет хранить информацию о миграциях.</p>
<img src="./pics/2.17.png" alt="Выполнение миграции базы данных Sqlite и _EFMigrationsHystory в Entity Framework Core" />
<p>Если мы изменим модель, например, добавим в класс User новое свойство:</p>
<pre class="brush:c#;">
public class User
{
	public int Id { get; set; }
	public string? Name { get; set; }
	public int Age { get; set; }
	public bool IsMarried { get; set; }
}
</pre>
<p>Чтобы база данных соответствовала измененной модели, также создадим новую миграцию и выполним ее:</p>
<pre class="brush:c#;">
Add-Migration IsMarriedToUserAdded
Update-Database
</pre>
<p>В данном случае будет создан класс миграции, который отражает добавление нового свойства в класс User:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace HelloApp.Migrations
{
    public partial class IsMarriedToUserAdded : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn&lt;bool&gt;(
                name: "IsMarried",
                table: "Users",
                type: "INTEGER",
                nullable: false,
                defaultValue: false);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "IsMarried",
                table: "Users");
        }
    }
}
</pre>
<p>Метод <code>AddColumn</code> как раз добавляет новый столбец в таблицу.</p>

<h4>Метод Migrate</h4>
<p>В некоторых случаях, например, в приложениях с локальной базой данных (SQLite в UWP), мы можем выполнять миграции в процессе выполнения приложения. Для этого определен метод <span class="b">Database.Migrate()</span> 
или его асинхронный двойник - <span class="b">Database.Migrate()</span>, 
который можно вызвать через объект контекста:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;

using (ApplicationContext db = new ApplicationContext())
{
    db.Database.Migrate();	// миграция
	await db.Database.MigrateAsync(); // асинхронный метод для миграции

</pre>
<p>Стоит учитывать, что перед вызовом этого метода не следует вызывать метод EnsureCreated, который обходит миграции при создании базы данных, что 
вызывает ошибку при выполнении метода Migrate.</p>
<p>Чтобы задействовать этот метод, необходимо подключить пространство имен <code>Microsoft.EntityFrameworkCore</code></p>
<h4>Создания скрипта sql для миграции</h4>
<p>Entity Framework также позволяет создать из файлов миграции скрипт sql, который потом можно запустить для создания или реорганизации базы данных. Для создания 
скрипта sql необходимо ввести в окне <span class="b">Package Manager Console</span> команду</p>
<pre class="brush:c#;">Script-Migration</pre>
<p>В результате выполнения этой команды Visual Studio создаст и откроет скрипт sql. Например, по выше созданной миграции InitialCreate будет создан следующий скрипт:</p>
<pre class="brush:sql;">
CREATE TABLE IF NOT EXISTS "__EFMigrationsHistory" (
    "MigrationId" TEXT NOT NULL CONSTRAINT "PK___EFMigrationsHistory" PRIMARY KEY,
    "ProductVersion" TEXT NOT NULL
);

BEGIN TRANSACTION;

CREATE TABLE "Users" (
    "Id" INTEGER NOT NULL CONSTRAINT "PK_Users" PRIMARY KEY AUTOINCREMENT,
    "Name" TEXT NULL,
    "Age" INTEGER NOT NULL,
    "IsMarried" INTEGER NOT NULL
);

INSERT INTO "__EFMigrationsHistory" ("MigrationId", "ProductVersion")
VALUES ('20211117182828_InitialCreate', '6.0.0');

COMMIT;
</pre>
<p>Также можно передать название миграции, по которой необходимо создать скрипт:</p>
<pre class="brush:c#;">Script-Migration InitialCreate</pre>
<h4>Миграции в консоли</h4>
<p>Если разработка осуществляется не в Visual Studio, то для миграций мы можем выполнять соответствующие команды в консоли. Для создания миграции:</p>
<div class="console"><pre class="consoletext">dotnet ef migrations add InitialCreate</pre></div>
<p>Для выполнения миграции:</p>
<div class="console"><pre class="consoletext">dotnet ef database update</pre></div>
<p>Для создания скрипта sql по миграции применяется следующая команда:</p>
<div class="console"><pre class="consoletext">dotnet ef migrations script</pre></div>
<p>С передачей названия миграции:</p>
<div class="console"><pre class="consoletext">dotnet ef migrations script InitialCreate</pre></div>
<h4>Миграция, если конструктор контекста принимает параметр DbContextOptions</h4>
<p>Выше была рассмотрена миграция для контекста данных, который имеет конструктор без параметров и устанавливает настройки подключения в методе 
<code>OnConfiguring()</code>. Однако мы можем также передавать параметры подключения в контекст данных извне через конструктор с параметром типа <span class="b">DbContextOptions</span>:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;
 
public class ApplicationContext : DbContext
{
    public DbSet&lt;User&gt; Users { get; set; } = null!;
    public ApplicationContext(DbContextOptions&lt;ApplicationContext&gt; options)
            : base(options) { }
}
</pre>
<p>Например, у нас в проекте есть файл конфигурации <span class="b">appsettings.json</span>:</p>
<pre class="brush:js;">
{
  "ConnectionStrings": {
    "DefaultConnection": "Data Source=D:\helloapp2.db"
  }
}
</pre>
<p>Из которого в процессе выполнения приложения мы извлекаем строку подключения и передаем в контекст данных:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Configuration;

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
var options = optionsBuilder.UseSqlite(connectionString).Options;

using (ApplicationContext db = new ApplicationContext(options))
{
    User tom = new User { Name = "Tom", Age = 33 };
    db.Users.Add(tom);
    db.SaveChanges();

    var users = db.Users.ToList();
    foreach (User u in users)
    {
        Console.WriteLine($"{u.Id}.{u.Name} - {u.Age}");
    }
}
</pre>
<p>Как получать конфигурацию подключения из файла, описывалось в статье <a href="./1.4.php">Конфигурация подключения</a></p>
<p>При создании миграции для такого контекста данных мы получим ошибку:</p>
<pre class="brush:c#;">
PM&gt; Add-Migration InitialCreate
Build started...
Build succeeded.
Unable to create an object of type 'ApplicationContext'. For the different patterns supported at design time, see https://go.microsoft.com/fwlink/?linkid=851728
</pre>
<p>Дело в том, что, если единственный конструктор класса контекста принимает параметр DbContext:</p>
<pre class="brush:c#;">public ApplicationContext(DbContextOptions&lt;ApplicationContext&gt; options) : base(options){ }</pre>
<p>В этом случае при выполнении миграции инструментарий Entity Frameworkа ищет класс, который реализует интерфейс <span class="b">IDesignTimeDbContextFactory</span> 
и который задает конфигурацию контекста.</p>
<p>Поэтому в этом случае нам необходимо добавить в проект подобный класс. Например:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Design;
using Microsoft.Extensions.Configuration;

public class SampleContextFactory : IDesignTimeDbContextFactory&lt;ApplicationContext&gt;
{
    public ApplicationContext CreateDbContext(string[] args)
    {
        var optionsBuilder = new DbContextOptionsBuilder&lt;ApplicationContext&gt;();

        // получаем конфигурацию из файла appsettings.json
        ConfigurationBuilder builder = new ConfigurationBuilder();
        builder.SetBasePath(Directory.GetCurrentDirectory());
        builder.AddJsonFile("appsettings.json");
        IConfigurationRoot config = builder.Build();

        // получаем строку подключения из файла appsettings.json
        string connectionString = config.GetConnectionString("DefaultConnection");
        optionsBuilder.UseSqlite(connectionString);
        return new ApplicationContext(optionsBuilder.Options);
    }
}
</pre>
<p>Класс SampleContextFactory применяет интерфейс IDesignTimeDbContextFactory, который типизируется типом контекста данных - в данном случае класс ApplicationContext. 
Данный интерфейс содержит один метод <span class="b">CreateDbContext()</span>, который должен возвращать созданный объект контекста данных.</p>
<p>В данном случае также получаем конфигурацию из файла appsettings.json и извлекаем из ее строку подключения и таким образом создаем контекст.</p>
<p>Хотя этот класс формально нигде не вызывается и никак не используется, фактически он вызывается инфраструктурой Entity Framework при создании миграции.</p>
<h3 id="unite_migration">Объединение миграций</h3>
<p>Начиная с версии 6.0 Entity Framework позволяет создавать бандлы миграций - объединение миграций в виде исполняемого файла. Для создания бандла 
миграций надо в Visual Studio в окне <span class="b">Package Manager Console</span> выполнить команду:</p>
<div class="console"><pre class="consoletext">Bundle-Migration</pre></div>
<p>А если использовуется .NET CLI, то в консоли надо перейти к папке проекта и выполнить команду</p>
<div class="console"><pre class="consoletext">dotnet ef migrations bundle</pre></div>
<p>После выполнения этих команд в папке решения будет сгенерирован файл <span class="b">efbundle</span> (в Windows он будет иметь расширение exe). Запустим его.</p>
<img src="./pics/2.19.png" alt="Объединение миграций в Entity Framework Core и C#" />
<p>И после запуска бандла будут последовательно применяться добавленные в бандл миграции.</p>

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


<div class="nav"><p><a href="./1.6.php">Назад</a><a href="./">Содержание</a><a href="./7.1.php">Вперед</a></p></div></div>
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
				<li><span class="file"><a href="//metanit.com/sharp/efcore/1.1.php">Что такое Entity Framework Core</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/1.2.php">Первое приложение на EF Core</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/1.3.php">Подключение к существующей базе данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.16.php">Управление базой данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/1.4.php">Основные операции с данными. CRUD</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/1.5.php">Конфигурация подключения</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/1.6.php">Логгирование операций</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.2.php">Управление схемой БД и миграции</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Провайдеры баз данных</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/7.1.php">MS SQL Server</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/7.2.php">MySQL</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/7.3.php">PostgreSQL</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Создание моделей в Entity Framework Core</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.1.php">Модели, Fluent API и аннотации данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.3.php">Определение моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.4.php">Свойства сущности</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.10.php">Конструкторы сущностей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.5.php">Использование полей сущности</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.6.php">Сопоставление таблиц и столбцов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.15.php">Обязательные и необязательные свойства</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.7.php">Настройка ключей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.17.php">Настройка индексов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.8.php">Генерация значений свойств и столбцов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.9.php">Ограничения свойств</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.13.php">Конфигурация моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.14.php">Инициализация базы данных начальными данными</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Отношения между моделями</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.1.php">Внешние ключи и навигационные свойства</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.10.php">Настройка внешнего ключа через аннотации данных и Fluent API</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.2.php">Каскадное удаление</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.3.php">Загрузка связанных данных. Метод Include</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.8.php">Explicit loading</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.9.php">Lazy loading</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.4.php">Отношение один к одному</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.5.php">Отношение один ко многим</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.6.php">Отношение многие ко многим</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.7.php">Комплексные типы</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/3.11.php">Иерархические данные</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Наследование</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/4.1.php">Подход TPH - Table Per Hierarchy</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/4.2.php">Подход TPT - Table Per Type</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. Запросы и LINQ to Entities</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.1.php">Введение в LINQ to Entities</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.2.php">Выборка и фильтрация</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.10.php">Сортировка и проекция из базы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.3.php">Соединение и группировка таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.4.php">Операции с множествами: объединение, пересечение, разность</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.5.php">Агрегатные операции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.7.php">Отслеживание объектов и AsNoTracking</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.8.php">Выполнение запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.6.php">IEnumerable и IQueryable</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/5.9.php">Фильтры запросов уровня модели</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. SQL в Entity Framework Core</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/6.1.php">Выполнение SQL-запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/6.2.php">Хранимые функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/6.3.php">Хранимые процедуры</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 8. Дополнительные статьи</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.11.php">Параллелизм</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/2.12.php">Провайдеры логгирования</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/8.1.php">Компилируемые запросы</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/8.2.php">Проекция запросов на представления</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/efcore/8.3.php">Хранение истории изменений</a></span></li>
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