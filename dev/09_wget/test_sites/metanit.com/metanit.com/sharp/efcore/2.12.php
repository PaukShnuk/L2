<!DOCTYPE html>
<html >
<head>
<title>Entity Framework Core и C# | Провайдеры логгирования</title>
<meta charset="utf-8" />
<meta name="description" content="Логгирование операций в Entity Framework Core, использование интерфейсов ILogger и ILoggerProvider, вывод лога в файл">
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
<h2>Провайдеры логгирования</h2><div class="date">Последнее обновление: 17.11.2021</div>

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

<p>Провайдеры логгирования собственно представляют те объекты, которые отвечают за логику логгирования. 
И в данном случае мы можем либо воспользоваться встроенными провайдерами, либо создать свой.</p>
<h3>Создание своего провайдера логгирования</h3>
<p>Вначале рассмотрим, как создать свой провайдер логгирования. Это может быть полезно, если нас не устраивают встроенные средства 
логгирования, например, метод <span class="b">LogTo()</span>, и мы хотим по своему настроить 
логику логгирования.</p>
<p>Для создания своего провайдера добавим в проект новый класс <span class="b">MyLoggerProvider</span>:</p>
<pre class="brush:c#;">
using Microsoft.Extensions.Logging;

public class MyLoggerProvider : ILoggerProvider
{
    public ILogger CreateLogger(string categoryName)
    {
        return new MyLogger();
    }
    public void Dispose() { }

    private class MyLogger : ILogger, IDisposable
    {
        public IDisposable BeginScope&lt;TState&gt;(TState state)
        {
            return this;
        }

        public void Dispose() { }

        public bool IsEnabled(LogLevel logLevel)
        {
            return true;
        }

        public void Log&lt;TState&gt;(LogLevel logLevel, EventId eventId,
                TState state, Exception? exception, Func&lt;TState, Exception?, string&gt; formatter)
        {
            File.AppendAllText("log.txt", formatter(state, exception));
            Console.WriteLine(formatter(state, exception));
        }
    }
}
</pre>
<p>Класс провайдера логгирования должен реализовать интерфейс <span class="b">ILoggerProvider</span>. В этом интерфейсе определены два метода:</p>
<ul>
<li><p><span class="b">CreateLogger</span>: создает и возвращает объект логгера. Для создания логгера используется путь к файлу, который передается через конструктор</p></li>
<li><p><span class="b">Dispose</span>: управляет освобождение ресурсов. В данном случае пустая реализация</p></li>
</ul>
<p>Сам логгер представлен объектом <span class="b">ILogger</span>. Этот интерфейс определяет три метода:</p>
<ul>
<li><p><code>BeginScope</code>: этот метод возвращает объект IDisposable, который представляет некоторую область видимости для логгера. 
В данном случае класс MyLogger реализует интерфейс IDisposable, поэтому в этом методе возвращаем значение <code>this</code> - то есть текущий объект.</p></li>
<li><p><code>IsEnabled</code>: возвращает значения true или false, которые указывает, доступен ли логгер для использования. Здесь можно задать различную логику. В частности, 
в этот метод передается объект LogLevel, и мы можем, к примеру, задействовать логгер в зависимости от значения этого объекта. Но в данном случае просто возвращаем 
true, то есть логгер доступен всегда.</p></li>
<li><p><code>Log</code>: этот метод предназначен для выполнения логгирования. Он принимает пять параметров:</p>
<ul>
<li><p><code>LogLevel</code>: уровень детализации текущего сообщения</p></li>
<li><p><code>EventId</code>: идентификатор события</p></li>
<li><p><code>TState</code>: некоторый объект состояния, который хранит сообщение</p></li>
<li><p><code>Exception</code>: информация об исключении</p></li>
<li><p><code>formatter</code>: функция форматирования, которая с помощью двух предыдущих параметров позволяет получить собственно сообщение для логгирования</p></li>
</ul>
<p>В текущей реализации производится запись в текстовый файл и вывод на консоль, но естественно действия по логгированию могут быть и другими.</p>
</li>
</ul>
<p>В данной реализации класс логгера MyLogger определен как вложенный внутри класса провайдера логгирования, но так делать необязательно. Можно определить класс логгера отдельно.</p>
<p>Допустим, у нас будет следующая модель:</p>
<pre class="brush:c#;">
public class User
{
    public int Id { get; set; }
    public string? Name { get; set; }
    public int Age { get; set; }
}
</pre>
<p>И следующий контекст данных:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;

public class ApplicationContext : DbContext
{
    public DbSet&lt;User&gt; Users { get; set; } = null!;
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
<h3>Локальное применение провайдера</h3>
<p>Теперь применим логгирование для контекста данных:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.Extensions.Logging;

using (ApplicationContext db = new ApplicationContext())
{
    db.GetService&lt;ILoggerFactory&gt;().AddProvider(new MyLoggerProvider());
    User user1 = new User { Name = "Tom", Age = 33 };
    User user2 = new User { Name = "Alice", Age = 26 };

    db.Users.Add(user1);
    db.Users.Add(user2);
    db.SaveChanges();

    var users = db.Users.ToList();
    Console.WriteLine("Список пользователей:");
    foreach (User u in users)
    {
        Console.WriteLine($"{u.Id}.{u.Name} - {u.Age}");
    }
}
</pre>
<p>С помощью метода <code>GetService&lt;ILoggerFactory&gt;()</code> получаем встроенный сервис ILoggerFactory, которому через 
метод <code>AddProvider()</code> передаем наш провайдер MyLoggerProvider.</p>
<p>И при запуске приложения на консоль будет выведена детальная информация по всем операциям:</p>
<img src="./pics/2.6.png" alt="Логгирование в Entity Framework Core" />
<h3>Глобальная установка логгирования в контексте данных</h3>
<p>Выше логгирование устанавливалось локально - непосредственно при создании и использовании объкта контекста данных. 
Однако мы можем определить глобальную настройку логгирования непосредственно в контексте:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Logging;

public class ApplicationContext : DbContext
{
    public DbSet&lt;User&gt; Users { get; set; } = null!;
    public ApplicationContext()
    {
        Database.EnsureDeleted();
        Database.EnsureCreated();
    }

    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        optionsBuilder.UseSqlite("Data Source=helloapp.db");
        optionsBuilder.UseLoggerFactory(MyLoggerFactory);
    }
    // устанавливаем фабрику логгера
    public static readonly ILoggerFactory MyLoggerFactory = LoggerFactory.Create(builder =&gt;
    {
        builder.AddProvider(new MyLoggerProvider());    // указываем наш провайдер логгирования
    });
}
</pre>
<p>Чтобы установить провайдер логгирования, нам нужна фабрика логгера - объект <span class="b">ILoggerFactory</span>. Для этого определяем статическую переменную 
MyLoggerFactory, которой присваивается результат метода <code>LoggerFactory.Create</code>. Данный метод устанавливает для использования ранее созданный 
провайдер MyLoggerProvider.</p>
<p>Затем в методе OnConfiguring устанавливаем данную фабрику логгера:</p>
<pre class="brush:c#;">optionsBuilder.UseLoggerFactory(MyLoggerFactory);</pre>
<p>В этом случае нам не надо при использовании контекста данных устанавливать провайдер, так как он уже установлен глобально в классе контекста:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	//db.GetService&lt;ILoggerFactory&gt;().AddProvider(new MyLoggerProvider());  // этот вызов больше не надо использовать
	
	// операции с данными
}
</pre>
<h3>Настройка логгирования</h3>
<p>Логгирование позволяет получить разнообразную информацию, связанную с операциями с данными, но не вся эта информация может быть нам нужна. В этом 
случае мы можем воспользоваться категориями логгирования, которые были рассмотрены в прошлой теме и которые представлены классом <code>DbLoggerCategory</code>. 
Например, мы хотим получать только данные о генерируемом и исполняемом SQL-коде. Для этого применим категорию <code>Database.Command</code> и изменим определение переменной MyLoggerFactory:</p>
<pre class="brush:c#;">
public static readonly ILoggerFactory MyLoggerFactory = LoggerFactory.Create(builder =&gt;
{
	builder.AddFilter((category, level) =&gt; category == DbLoggerCategory.Database.Command.Name)
		.AddProvider(new MyLoggerProvider());
});
</pre>
<p>Для установки категории применяется метод AddFilter. Он принимает делегат, который получает категорию и уровень сообщений лога. Уровень сообщений лога в 
данном случае не используется. В теле лямбда-выражения мы сравниванием категорию со значением <code>DbLoggerCategory.Database.Command.Name</code>. Если эта 
операция сравнивания возвращает true, то сообщение попадает в лог.</p>
<p>Также мы могли бы использовать уровни сообщений лога:</p>
<pre class="brush:c#;">
public static readonly ILoggerFactory MyLoggerFactory = LoggerFactory.Create(builder =&gt;
{
	builder.AddFilter((category, level) =&gt; category == DbLoggerCategory.Database.Command.Name 
						&& level == LogLevel.Information)
		.AddProvider(new MyLoggerProvider());
});
</pre>
<h3>Использование встроенного провайдера</h3>
<p>Выше мы определили и использовали свой собственный провайдер. Но в реальности мы можем использовать и провайдер, который предоставляется Microsoft. 
Для этого нам надо через пакетный менеджер Nuget установить пакет <span class="b">Microsoft.Extensions.Logging.Console</span>. 
После добавления этого пакета в проект мы сможем вызывать встроенный консольный логгер посредством метода <span class="b">AddConsole()</span>:</p>
<pre class="brush:c#;">
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Logging;

public class ApplicationContext : DbContext
{
    public DbSet&lt;User&gt; Users { get; set; } = null!;
    public ApplicationContext()
    {
        Database.EnsureDeleted();
        Database.EnsureCreated();
    }

    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        optionsBuilder.UseSqlite("Data Source=helloapp.db");
        optionsBuilder.UseLoggerFactory(MyLoggerFactory);
    }
    // устанавливаем фабрику логгера
    public static readonly ILoggerFactory MyLoggerFactory = LoggerFactory.Create(builder =&gt;
    {
        builder.AddConsole();
    });
}
</pre>
<p>В этом случае нам не надо определять никаких своих консольных провайдеров логгирования. В то же время если нам понадобится более изощренная логика 
логгирования, то определение своего провайдера может быть выходом в подобной ситуации.</p>
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


<div class="nav"><p><a href="./2.11.php">Назад</a><a href="./">Содержание</a><a href="./8.1.php">Вперед</a></p></div></div>
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