<!DOCTYPE html>
<html >
<head>
<title>Entity Framework Core | Фильтры запросов уровня модели</title>
<meta charset="utf-8" />
<meta name="description" content="Фильтры запросов уровня модели в Entity Framework Core, Model-level query filters">
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
<h2>Фильтры запросов уровня модели</h2><div class="date">Последнее обновление: 18.11.2020</div>

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

<p>Фильтры запросов уровня модели (Model-level query filters) позволяют определить предикат запроса LINQ непосредственно в метаданных модели (обычно в методе OnModelCreating контекста данных). 
Такие фильтры автоматически применяются к любым запросам LINQ, в которых используются классы, для которых определен фильтр.</p>
<p>Пусть у нас определены следующие классы:</p>
<pre class="brush:c#;">
public class User
{
	public int Id { get; set; }
	public string Name { get; set; }
	public int Age { get; set; }

	public int RoleId { get; set; }
	public Role Role { get; set; }
}

public class Role
{
	public int Id { get; set; }
	public string Name { get; set; }
}
</pre>
<p>Здесь класс пользователя имеет ссылку на класс роли, к которой он принадлежит. И также определим контекст данных:</p>
<pre class="brush:c#;">
public class ApplicationContext : DbContext
{
	public DbSet&lt;User&gt; Users { get; set; }
	public DbSet&lt;Role&gt; Roles { get; set; }

	public int RoleId { get; set; }
	
	protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
	{
		optionsBuilder.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=helloappdb;Trusted_Connection=True;");
	}

	protected override void OnModelCreating(ModelBuilder modelBuilder)
    {
		modelBuilder.Entity&lt;User&gt;().HasQueryFilter(u =&gt; u.Age &gt; 17 && u.RoleId == this.RoleId);
	}
}
</pre>
<p>В метод <span class="b">HasQueryFilter()</span> передается предикат, которому должен удовлетворять объект User, чтобы быть извлеченным из базы данных. 
То есть в результате запросов будут извлекаться только те объекты User, у которых значение свойства Age больше 17, а свойство RoleId равно значению свойства 
RoleId их контекста данных.</p>
<p>Используем данные классы:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	// пересоздадим базу данных
	db.Database.EnsureDeleted();
	db.Database.EnsureCreated();
	
	Role adminRole = new Role { Name = "admin" };
	Role userRole = new Role { Name = "user" };
	User user1 = new User { Name = "Tom", Age = 17, Role = userRole };
	User user2 = new User { Name = "Bob", Age = 18, Role = userRole };
	User user3 = new User { Name = "Alice", Age = 19, Role = adminRole };
	User user4 = new User { Name = "Sam", Age = 20, Role = adminRole };
	
	db.Roles.AddRange(userRole, adminRole);
    db.Users.AddRange(user1, user2, user3, user4);
    db.SaveChanges();
}

using (ApplicationContext db = new ApplicationContext() { RoleId = 2 })
{
	var users = db.Users.Include(u =&gt; u.Role).ToList();
	foreach (User user in users)
		Console.WriteLine($"Name: {user.Name}  Age: {user.Age}  Role: {user.Role?.Name}");
}
</pre>
<p>Результатом будет следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Name: Alice		Age:19		Role:admin
Name: Sam		Age:20		Role:admin
</pre>
</div>
<p>То есть только два объекта из добавленных четырех соответствуют тому предикату, который был передан в HasQueryFilter. И данный фильтр будет действовать 
для всех запросов к базе данных, которые извлекают данные из таблицы Users. Например, нахождение минимального возраста:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext() { RoleId = 2 })
{
	int minAge = db.Users.Min(x =&gt; x.Age);
    Console.WriteLine(minAge);	// 19
}
</pre>
<p>Несмотря на то, что минимальный возраст по всем 4 объектам составляет 17, но так как действует фильтр, при запросе будут учитываться только те объекты в бд, которые соответствуют фильтру.</p>
<p>Если необходимо во время запроса отключить фильтр, то применяется метод <span class="b">IgnoreQueryFilters()</span>:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext() { RoleId = 2 })
{
	int minAge = db.Users.IgnoreQueryFilters().Min(x =&gt; x.Age);
    Console.WriteLine(minAge);	// 17
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


<div class="nav"><p><a href="5.6.php">Назад</a><a href="./">Содержание</a><a href="6.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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