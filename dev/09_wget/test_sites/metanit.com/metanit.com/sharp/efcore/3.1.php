<!DOCTYPE html>
<html >
<head>
<title>Entity Framework Core и C# | Внешние ключи и навигационные свойства</title>
<meta charset="utf-8" />
<meta name="description" content="Связи между моделями в Entity Framework Core в языке программирования C#, внешние ключи и навигационные свойства">
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
<h1>Отношения между сущностями</h1><h2>Внешние ключи и навигационные свойства</h2><div class="date">Последнее обновление: 20.11.2021</div>

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

<p>Для связей между сущностями в Entity Framework Core применяются внешние ключи и навигационные свойства. Так, возьмем к примеру следующие сущности:</p>
<pre class="brush:c#;">
public class Company
{
    public int Id { get; set; }
    public string? Name { get; set; } // название компании

    public List&lt;User&gt; Users { get; set; } = new();
}

public class User
{
    public int Id { get; set; }
    public string? Name { get; set; }

    public int CompanyId { get; set; }      // внешний ключ
    public Company? Company { get; set; }    // навигационное свойство
}
</pre>
<p>И пусть у нас будет следующий контекст данных:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;

public class ApplicationContext : DbContext
{
    public DbSet&lt;User&gt; Users { get; set; } = null!;
    public DbSet&lt;Company&gt; Companies { get; set; } = null!;
    public ApplicationContext()
    {
        Database.EnsureDeleted();
        Database.EnsureCreated();
    }
    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        optionsBuilder.UseSqlite("Data Source=helloapp.db");
    }
}
</pre>
<p>В данном случае сущность Company является главной сущностью, а класс User - зависимой, так как содержит ссылку на класс Company и зависит от этого класса.</p>
<p>Свойство <code>CompanyId</code> в классе User является <span class="b">внешним ключом</span>, а свойство <code>Company</code> - навигационным свойством. 
По умолчанию название внешнего ключа должно принимать одно из следующих вариантов имени:</p>
<ul>
<li><p><span class="ii">Имя_навигационного_свойства+Имя ключа из связанной сущности</span> - в нашем случае имя навигационного свойства Company, а 
ключа из модели Company - Id, поэтому в нашем случае нам надо обозвать свойство <span class="b">CompanyId</span>, что собственно и было сделано в вышеприведенном коде.</p></li>
<li><p><span class="ii">Имя_класса_связанной_сущности+Имя ключа из связанной сущности</span> - в нашем случае класс Company, а имя ключа из модели Company - Id, поэтому 
опять же в этом случае получается <span class="b">CompanyId</span></p></li>
</ul>
<p>Свойство <code>Users</code>, представляющее список пользователей компании, в классе Company также является навигационным свойством.</p>
<p>В итоге после генерации базы данных в случае с SQLite таблицы будут иметь следующее определение:</p>
<pre class="brush:sql;">
CREATE TABLE "Users" (
	"Id"	INTEGER NOT NULL,
	"Name"	TEXT,
	"CompanyId"	INTEGER NOT NULL,
	CONSTRAINT "FK_Users_Companies_CompanyId" FOREIGN KEY("CompanyId") REFERENCES "Companies"("Id") ON DELETE CASCADE,
	CONSTRAINT "PK_Users" PRIMARY KEY("Id" AUTOINCREMENT)
);

CREATE TABLE "Companies" (
	"Id"	INTEGER NOT NULL,
	"Name"	TEXT,
	CONSTRAINT "PK_Companies" PRIMARY KEY("Id" AUTOINCREMENT)
);
</pre>
<h4>Установка главной сущности по навигационному свойству зависимой сущности</h4>
<p>Причем при использовании классов нам достаточно установить либо одно навигационное свойство, либо свойство-внешний ключ. 
Например, укажем значение только для навигационного свойства:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	Company company1 = new Company { Name = "Google" };
	Company company2 = new Company { Name = "Microsoft" };
	User user1 = new User { Name = "Tom", Company = company1 };
	User user2 = new User { Name = "Bob", Company = company2 };
	User user3 = new User { Name = "Sam", Company = company2 };

	db.Companies.AddRange(company1, company2);	// добавление компаний
	db.Users.AddRange(user1, user2, user3);		// добавление пользователей
	db.SaveChanges();

	foreach (var user in db.Users.ToList())
	{
		Console.WriteLine($"{user.Name} работает в {user.Company?.Name}");
	}
}
</pre>
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Tom работает в Google
Bob работает в Microsoft
Sam работает в Microsoft
</pre>
</div>
<h4>Установка главной сущности по свойству-внешнему ключу зависимой сущности</h4>
<p>Также можно использовать свойство-внешний ключ для установки связи:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
    Company company1 = new Company { Name = "Google" };
    Company company2 = new Company { Name = "Microsoft" };
    db.Companies.AddRange(company1, company2);  // добавление компаний
    db.SaveChanges();

    User user1 = new User { Name = "Tom", CompanyId = company1.Id };
    User user2 = new User { Name = "Bob", CompanyId = company1.Id };
    User user3 = new User { Name = "Sam", CompanyId = company2.Id };

    db.Users.AddRange(user1, user2, user3);     // добавление пользователей
    db.SaveChanges();

    foreach (var user in db.Users.ToList())
    {
        Console.WriteLine($"{user.Name} работает в {user.Company?.Name}");
    }
}
</pre>
<p>Здесь надо отметить один момент: для устновки свойства внешнего ключа CompanyId нам необходимо знать его значение. Однако посколько оно связано со свойством Id класса 
Company, значение которого генерируется при добавление объекта в БД, соответственно в данном случае необходимо сначала добавить объект Company в базу данных.</p>
<h4>Установка зависимой сущности через навигационное свойство главной сущности</h4>
<p>Выше для установки связи применялась зависимая сущность - User. Но мы также можем зайти с другой стороны и установить набор зависимых сущностей 
через навигационное свойство главной сущности:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
    User user1 = new User { Name = "Tom"};
    User user2 = new User { Name = "Bob" };
    User user3 = new User { Name = "Sam"};

    Company company1 = new Company { Name = "Google", Users = { user1, user2} };
    Company company2 = new Company { Name = "Microsoft", Users = { user3 } };

    db.Companies.AddRange(company1, company2);  // добавление компаний
    db.Users.AddRange(user1, user2, user3);     // добавление пользователей
    db.SaveChanges();

    foreach (var user in db.Users.ToList())
    {
        Console.WriteLine($"{user.Name} работает в {user.Company?.Name}");
    }
}
</pre>
<h3>Отсутствие свойства внешнего ключа и навигационного свойства</h3>
<p>Нам необязательно определять внешний ключ в зависимой сущности. Его можно опустить:</p>
<pre class="brush:c#;">
public class User
{
    public int Id { get; set; }
    public string? Name { get; set; }

    public Company? Company { get; set; }	// навигационное свойство
}
</pre>
<p>В этом случае Entity Framework сам автоматически сгенерирует столбец для внешнего ключа в таблице Users. </p>
<pre class="brush:sql;">
CREATE TABLE "Users" (
	"Id"	INTEGER NOT NULL,
	"Name"	TEXT,
	"CompanyId"	INTEGER,
	CONSTRAINT "PK_Users" PRIMARY KEY("Id" AUTOINCREMENT),
	CONSTRAINT "FK_Users_Companies_CompanyId" FOREIGN KEY("CompanyId") REFERENCES "Companies"("Id")
);
</pre>
<p>Преимущество определения внешнего ключа в качестве 
свойства состоит в том, что в каких-то ситуациях нам может потребоваться только id связанной сущности. Тем более столбец для внешнего ключа в таблице в любом случае создается.</p>
<p>Более того, мы можем вовсе опустить навигационное свойство в классе User:</p>
<pre class="brush:c#;">
public class User
{
    public int Id { get; set; }
    public string Name { get; set; }
}
</pre>
<p>Но за счет того, что в классе Company также определено навигационное свойство Users все равно будет создаваться внешний ключ и связь таблицы Users и таблицы Companies. 
В частности, тогда в случае БД SQLite определение таблицы Users будет выглядеть следующим образом:</p>
<pre class="brush:sql;">
CREATE TABLE "Users" (
	"Id"	INTEGER NOT NULL,
	"Name"	TEXT,
	"CompanyId"	INTEGER,
	CONSTRAINT "FK_Users_Companies_CompanyId" FOREIGN KEY("CompanyId") REFERENCES "Companies"("Id"),
	CONSTRAINT "PK_Users" PRIMARY KEY("Id" AUTOINCREMENT)
);
</pre>
<p>В отличие от первой версии таблицы здесь не добавляется каскадное удаление.</p>

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


<div class="nav"><p><a href="./2.14.php">Назад</a><a href="./">Содержание</a><a href="./3.10.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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