<!DOCTYPE html>
<html >
<head>
<title>Entity Framework Core и C# | Хранение истории изменений</title>
<meta charset="utf-8" />
<meta name="description" content="Хранение истории изменений в SQL Server и получение истории изменений в Entity Framework Core и C#, метод IsTemporal, TemporalAll, TemporalAsOf, TemporalBetween, TemporalContainedIn, отмена нежелательных изменений">
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
<h2>Хранение истории изменений</h2><div class="date">Последнее обновление: 24.11.2021</div>

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

<p>Начиная с версии 6.0 Entity Framework Core позволяет воспользоваться возможностями SQL Server по хранению истории изменений в таблице. 
То есть SQL Server может автоматически отслеживать все операции с данными в таблице благодаря созданию параллельной таблицы, которая хранит 
историю изменений. Благодаря этому мы можем извлечить те ранее измененные данные. Это может быть полезно для изучения истории изменений или восстановления данных 
в случае каких-то поломок или нежелательного изменения.</p>
<p>Допустим, у нас будет следующая сущность:</p>
<pre class="brush:c#;">
public class User
{
    public int Id { get; set; }
    public string? Name { get; set; }
}
</pre>
<p>Определим следующий контекст данных:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;

public class ApplicationContext : DbContext
{
    public DbSet&lt;User&gt; Users { get; set; } = null!;

    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        optionsBuilder.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=helloappdb;Trusted_Connection=True;");
    }
    protected override void OnModelCreating(ModelBuilder modelBuilder)
    {
        modelBuilder
            .Entity&lt;User&gt;()
            .ToTable("Users", t =&gt; t.IsTemporal());
    }
}
</pre>
<p>Для установки таблицы как временной в методе <code>ToTable()</code> в качестве второго параметра - делегата, который настраивает таблицу, 
передается выражение <code>t =&gt; t.IsTemporal()</code>. Метод <span class="b">IsTemporal()</span> указывает, что для таблицы будет храниться история изменений.</p>
<p>В итоге на уровне MS SQL Server будет создана следующая таблица:</p>
<pre class="brush:c#;">
CREATE TABLE [dbo].[Users] (
    [Id]          INT                                                IDENTITY (1, 1) NOT NULL,
    [Name]        NVARCHAR (MAX)                                     NULL,
    [PeriodEnd]   DATETIME2 (7) GENERATED ALWAYS AS ROW END HIDDEN   NOT NULL,
    [PeriodStart] DATETIME2 (7) GENERATED ALWAYS AS ROW START HIDDEN NOT NULL,
    PERIOD FOR SYSTEM_TIME ([PeriodStart], [PeriodEnd])
)
WITH (SYSTEM_VERSIONING = ON (HISTORY_TABLE=[dbo].[UsersHistory], DATA_CONSISTENCY_CHECK=ON));
</pre>
<p>Здесь мы можем заметить, что SQL Server создает два дополнительных столбца <span class="b">PeriodEnd</span> и <span class="b">PeriodStart</span>, которые имеют 
тип <span class="b">datetime2</span>. Эти столбцы устанавливают временной интервал, в течение которого существует строка.</p>
<p>Кроме того, здесь генерируется ассоциированная таблица "UsersHistory" для хранения истории изменений.</p>
<p>С подобной таблицей мы можем работать как с обычной таблицей. Например, добавление и получение данных:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	// пересоздаем бд
    db.Database.EnsureDeleted();
    db.Database.EnsureCreated();

    User tom = new User { Name = "Tom" };

    db.Users.Add(tom);
    db.SaveChanges();
}
using (ApplicationContext db = new ApplicationContext())
{
    // получаем объекты из бд
    var users = db.Users.ToList();
    foreach (User u in users)
    {
        Console.WriteLine(u.Name);
    }
}
</pre>
<p>Теперь посмотрим, что произойдет, если мы изменим данные:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
    // изменение
    var user = db.Users.FirstOrDefault(u =&gt; u.Name == "Tom");
    if (user != null)
    {
        user.Name = "Bob";
        // сохраняем изменения
        db.SaveChanges();

        // еще раз изменяем
        user.Name = "Sam";
        // сохраняем изменения
        db.SaveChanges();

        Console.WriteLine(user.Name);
    }
}
</pre>
<p>Итак, в примере ранее был создан объект User с именем "Tom", здесь же мы последовательно меняем его имя сначала на "Bob", а потом на "Sam".</p>
<p>Теперь откроем таблицу, которая хранит историю изменений:</p>
<img src="./pics/history.png" alt="История изменений в Entity Framework Core и C# и MS SQL Server" />
<p>В таблицы истории изменений можно увидеть, что она хранит промежуточные состояния измененного объекта User.</p>
<h3>Получение данных из таблицы истории</h3>
<p>Рассмотрим, как мы можем получить данные из таблицы истории. Прежде всего мы можем получить из таблицы Users начальную и конечную дату интервала, в течение которого существует 
строка в таблице:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
    // изменение
    var user = db.Users.FirstOrDefault(u =&gt; u.Name == "Sam");
    if (user != null)
    {
        var userEntry = db.Entry(user);
        var createdAt = userEntry.Property&lt;DateTime&gt;("PeriodStart").CurrentValue;
        var deletedAt = userEntry.Property&lt;DateTime&gt;("PeriodEnd").CurrentValue;
        Console.WriteLine($"пользователь {user.Name}");
        Console.WriteLine($"Дата создания: {createdAt}"); 
        Console.WriteLine($"Дата удаления {deletedAt}");
    }
}
</pre>
<p>Хотя в сущности User для столбцов PeriodEnd и PeriodStart нет соответствующих свойств, тем не менее мы можем сначала получить отслеживаемый объект через</p>
<pre class="brush:c#;">var userEntry = db.Entry(user);</pre>
<p>А затем через метод <span class="b">Property()</span> получить значение столбцов в виде значения DateTime:</p>
<pre class="brush:c#;">
var createdAt = userEntry.Property&lt;DateTime&gt;("PeriodStart").CurrentValue;
var deletedAt = userEntry.Property&lt;DateTime&gt;("PeriodEnd").CurrentValue;
</pre>
<p>Стоит отметить, что поскольку строка еще существует, то столбец "PeriodEnd" будет содержать максимально возможное значение.</p>
<p>Кроме того, EF Core поддерживает ряд методов, которые позволяют получать данные истории:</p>
<ul>
<li><p><span class="b">TemporalAsOf</span>: возвращает строки, в которых хранится состояние объекта на определенную дату. Для каждого объекта возвращается одна строка.</p></li>
<li><p><span class="b">TemporalAll</span>: возвращает все строки.</p></li>
<li><p><span class="b">TemporalFromTo</span>: возвращает все строки, в которых сохранено состояние объекта между двумя датами.</p></li>
<li><p><span class="b">TemporalBetween</span>: аналогично предыдущему варианту за тем исключением, что также возвращается строки с состоянием объекта непоседствнно 
в момент конечной даты.</p></li>
<li><p><span class="b">TemporalContainedIn</span>: возвращает все строки с состоянием объекта, который существовал непосредственно на момент начальной и конечной дат.</p></li>
</ul>
<p>Чтобы задействовать эти методы, необходимо подключить пространство имен <code>using Microsoft.EntityFrameworkCore;</code></p>
<p>Например, получим всю историю по ранее измененому пользователю:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;

using (ApplicationContext db = new ApplicationContext())
{
    var history = db.Users.TemporalAll()
                .Where(u =&gt; u.Id == 1)
				.OrderBy(e =&gt; EF.Property&lt;DateTime&gt;(e, "PeriodStart"))
                .Select(u =&gt; new 
                {
                    User = u,
                    Start = EF.Property&lt;DateTime&gt;(u, "PeriodStart"),
                    End = EF.Property&lt;DateTime&gt;(u, "PeriodEnd")
                }).ToList();
    Console.WriteLine("История по пользователю с id=1");
    foreach (var item in history)
    {
        Console.WriteLine($"{item.User.Name} from {item.Start} to {item.End}");
    }
}
</pre>
<p>Консольный вывод в моем случае:</p>
<div class="console">
<pre class="consoletext">
История по пользователю с id=1
Tom from 24.11.2021 12:48:48 to 24.11.2021 13:13:57
Bob from 24.11.2021 13:13:57 to 24.11.2021 13:13:59
Sam from 24.11.2021 13:13:59 to 31.12.9999 23:59:59
</pre>
</div>
<p>Для методов <span class="b">TemporalFromTo, TemporalBetween</span> и <span class="b">TemporalContainedIn</span> передаются начальная и конечная даты</p>
<pre class="brush:c#;">
var history = db.Users
        .TemporalBetween(
                    new DateTime(2021, 11, 24, 12,48, 48), 
                    new DateTime(2021, 11, 24, 14, 35, 15))
        .Where(u =&gt; u.Id == 1)
        .OrderBy(e =&gt; EF.Property&lt;DateTime&gt;(e, "PeriodStart"))
        .Select(u =&gt; new 
        {
			User = u,
            Start = EF.Property&lt;DateTime&gt;(u, "PeriodStart"),
            End = EF.Property&lt;DateTime&gt;(u, "PeriodEnd")
        }).ToList();
</pre>
<p>Для метода <span class="b">TemporalAsOf()</span> передается одна дата:</p>
<pre class="brush:c#;">
var history = db.Users
        .TemporalAsOf(new DateTime(2021, 11, 24, 12,48, 48))
        .Where(u =&gt; u.Id == 1)
		.ToList();
</pre>
<h3>Восстановление данных</h3>
<p>Получив состояние с помощью одного из выше описанных методов, мы можем сохранить данное состояние в бд:</p>
<pre class="brush:c#;">
// удаляем пользователя
using (ApplicationContext db = new ApplicationContext())
{
    var sam = db.Users.Find(1);
    if (sam != null)
    {
        db.Users.Remove(sam);
        db.SaveChanges();
        Console.WriteLine("Пользователь удален");
    }
}

// восстанавливаем пользователя
using (ApplicationContext db = new ApplicationContext())
{
    // получаем состояние удаленного пользователя
    var user = db.Users.TemporalAsOf(new DateTime(2021, 11, 24, 13, 0, 0))
                .FirstOrDefault(u =&gt; u.Id == 1);

    if (user != null)
    {
		// запускаем транзакцию  
        using (var transaction = db.Database.BeginTransaction())
        {
			// отключаем автоматогенерацию идентификатор по добавлению
            db.Database.ExecuteSqlRaw("SET IDENTITY_INSERT [dbo].[Users] ON");
            db.Users.Add(user);
            db.SaveChanges();
			// включаем автогенерацию идентификаторов обратно
            db.Database.ExecuteSqlRaw("SET IDENTITY_INSERT [dbo].[Users] OFF");
            db.Database.CommitTransaction();
			Console.WriteLine("Пользователь восстановлен");
        }
    }
}
// проверяем наличие пользователя
using (ApplicationContext db = new ApplicationContext())
{
    var tom = db.Users.Find(1);
    if (tom != null)
    {
        Console.WriteLine($"Пользователь {tom.Name}");
    }
}
</pre>
<p>Данный код делится на ти части. Вначале удаляем пользователя с id = 1:</p>
<pre class="brush:c#;">
 db.Users.Remove(sam);
db.SaveChanges();
</pre>
<p>После этого объект User удален из таблицы Users. Однако в таблице истории UseHistoryTable данные о нем остались.</p>
<p>Во второй части кода восстанавливаем пользователя:</p>
<pre class="brush:c#;">
var user = db.Users.TemporalAsOf(new DateTime(2021, 11, 24, 13, 0, 0))
                .FirstOrDefault(u =&gt; u.Id == 1);
</pre>
<p>То есть в данном случае я извлекаю из таблицы с историей состояние объекта с id =1 на момент 24/11/2021 13:00:00. В этот момент времени у удаленного пользователя 
свойство Name было равно.</p>
<p>Полученный объект также будет представлять класс User и поэтому мы его можем обратно добавить в таблицу:</p>
<pre class="brush:c#;">
db.Users.Add(user);
db.SaveChanges();
</pre>
<p>Однако в данном случае мы можем столкнуться с проблемой: для таблицы автоматически генерируется значение для свойства-иденификатора Id. А востановленный и заново 
добавляемый объект уже имет Id. В этом случае запускаем транзакцию, в которой выполняем три действия:</p>
<pre class="brush:c#;">
using (var transaction = db.Database.BeginTransaction())
{
	db.Database.ExecuteSqlRaw("SET IDENTITY_INSERT [dbo].[Users] ON");
	db.Users.Add(user);
	db.SaveChanges();
	db.Database.ExecuteSqlRaw("SET IDENTITY_INSERT [dbo].[Users] OFF");
	db.Database.CommitTransaction();
}
</pre>
<p>Сначала отключаем автогенерацию иденификаторов для таблицы Users:</p>
<pre class="brush:c#;">db.Database.ExecuteSqlRaw("SET IDENTITY_INSERT [dbo].[Users] ON");</pre>
<p>После этого мы сможем добавить объект с уже установленным Id:</p>
<pre class="brush:c#;">db.Users.Add(user);</pre>
<p>После добавления объекта заново включаем автогенерацию идентификаторов</p>
<pre class="brush:c#;">db.Database.ExecuteSqlRaw("SET IDENTITY_INSERT [dbo].[Users] OFF");</pre>
<p>Но естественно, если используются дугую способы генерации id, то подобные махинации с отключением/включением автогенерации иденификаторов могут не понадобиться.</p>
<p>В третьей части кода проверяем наличие восстановленного объекта:</p>
<pre class="brush:c#;"> var tom = db.Users.Find(1);</pre>
<h3>Настройка таблицы истории</h3>
<p>Entity Framework также позволяет настроить таблицу, которая будет хранить историю изменений:</p>
<pre class="brush:c#;">
protected override void OnModelCreating(ModelBuilder modelBuilder)
{
	modelBuilder
        .Entity&lt;User&gt;()
        .ToTable("Users", t =&gt; t.IsTemporal(
            h =&gt;
            {
                h.HasPeriodStart("CreatedAt");
                h.HasPeriodEnd("DeletedAt");
                h.UseHistoryTable("PeopleDataHistory");
        }));
    }
</pre>
<p>В данном случае таблица для хранения истории будет называться PeopleDataHistory, а столбцы, которые задают временной интервал, - "CreatedAt" и 
"DeletedAt".</p>
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


<div class="nav"><p><a href="./8.2.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
	
	$("li:contains('Глава 8.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 8.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 8.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 8.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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