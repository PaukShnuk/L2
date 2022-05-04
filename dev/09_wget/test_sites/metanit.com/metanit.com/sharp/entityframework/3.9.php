<!DOCTYPE html>
<html >
<head>
<title>Инициализация базы данных | C# Entity Framework 6</title>
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
<h2>Инициализация базы данных</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/efcore/">Руководство по Entity Framework Core</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Если нам необходимо, чтобы при первом обращении база данных уже была заполнена некоторыми начальными значениями, то мы можем произвести ее инициализацию.</p>
<p>Инициализация происходит при первом обращении к контексту данных.</p>
<p>Для инициализации мы можем использовать один из классов инициализаторов, которые имеются в библиотеке .NET:</p>
<ul>
<li><p><span class="b">CreateDatabaseIfNotExists</span>: инициализатор, используемый по умолчанию. Он не удаляет автоматчески базу данных и данные, а в случае изменения 
структуры моделей и контекста данных выбрасывает исключение.</p></li>
<li><p><span class="b">DropCreateDatabaseIfModelChanges</span>: данный инициализатор проверяет на соответствие моделям определения таблиц в базе данных. И если модели не соответствуют 
определению таблиц, то база данные пересоздается</p></li>
<li><p><span class="b">DropCreateDatabaseAlways</span>: этот инициализатор будет всегда пересоздавать базу данных.</p></li>
</ul>
<p>Используем один из инициализаторов. Для этого нам надо переопределить метод <span class="bb">Seed</span>:</p>
<pre class="brush:c#;">
class MyContextInitializer : DropCreateDatabaseAlways&lt;MobileContext&gt;
{
    protected override void Seed(MobileContext db)
    {
        Phone p1 = new Phone {Name = "Samsung Galaxy S5", Price = 14000 };
        Phone p2 = new Phone {Name = "Nokia Lumia 630", Price = 8000 };
            
        db.Phones.Add(p1);
        db.Phones.Add(p2);
        db.SaveChanges();
    }
}
public class Phone
{
    public int Id { get; set; }
    public string Name { get; set; }
    public int Price { get; set; }
}

class MobileContext : DbContext
{
    static MobileContext()
    {
        Database.SetInitializer&lt;MobileContext&gt;(new MyContextInitializer());
    }

    public MobileContext() : base("DefaultConnection")
    { }
    public DbSet&lt;Phone&gt; Phones { get; set; }
}
</pre>
<p>Собственно инициализатор наследуется от одного из выше рассмотренных классов, который типизируется классом контекста: <code>DropCreateDatabaseAlways&lt;MobileContext&gt;</code>.</p>
<p>Все действия по инициализации происходят в методе Seed, а сама инициализация предполагает простое сохранение данных в бд с помощью контекста данных.</p>
<p>Чтобы инициализатор сработал, надо его вызвать. Один из способов вызова инициализатора предполагет вызов его в статическом конструкторе класса контекста:</p>
<pre class="brush:c#;">
static MobileContext()
{
    Database.SetInitializer&lt;MobileContext&gt;(new MyContextInitializer());
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


<div class="nav"><p><a href="3.4.php">Назад</a><a href="./">Содержание</a><a href="3.10.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Entity Framework 6</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/1.1.php">Что такое Entity Framework</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/1.2.php">Первое приложение. Подход Code First</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Взаимодействие с данными. Подходы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/2.2.php">Code First к существующей базе данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/2.6.php">Соглашения по наименованию в Code First</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/2.1.php">Автоматизация Code First</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/2.3.php">Автоматизация Code First и EF Power Tools</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/2.4.php">Database First</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/2.5.php">Model First</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Основы Entity Framework</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/1.3.php">Основные операции с данными</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.1.php">Операции с данными. Практический пример</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.5.php">Строка подключения</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.2.php">Навигационные свойства и загрузка данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.6.php">Связь один к одному</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.7.php">Связь один ко многим</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.3.php">Связь один ко многим. Практический пример</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.8.php">Связь многие ко многим</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.4.php">Связь многие ко многим. Практический пример</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.9.php">Инициализация базы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.10.php">Параллелизм в Entity Framework</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.11.php">Управление транзакциями</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.12.php">Миграции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/3.13.php">Generic Repository</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. LINQ to Entities</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/4.1.php">Введение в LINQ to Entities</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/4.2.php">Выборка и проекция из базы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/4.3.php">Сортировка</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/4.4.php">Соединение таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/4.5.php">Группировка</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/4.6.php">Операции с множествами: объединение, пересечение, разность</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/4.7.php">Агрегатные операции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/1.4.php">IEnumerable и IQueryable</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/4.8.php">AsNoTracking</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. SQL в Entity Framework</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/5.1.php">Работа с SQL</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/5.2.php">Хранимые функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/5.3.php">Хранимые процедуры</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. Fluent API и аннотации</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/6.1.php">Fluent API</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/6.2.php">Отношения между моделями в Fluent API</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/6.3.php">Аннотации</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/6.4.php">Работа с комплексными типами</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/6.5.php">Две модели в одной таблице</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/6.6.php">Разделение сущности на несколько таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/6.7.php">Сопоставление операций Entity Framework с хранимыми процедурами</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/6.8.php">Конфигурация моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframework/6.9.php">Конвенции</a></span></li>
			</ul>
		</li>
	<li class="closed"><span class="folder">Глава 7. Наследование в Entity Framework</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/entityframework/7.1.php">Подход TPH</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/entityframework/7.2.php">Подход TPT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/entityframework/7.3.php">Подход TPC</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Асинхронность</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/entityframework/8.1.php">Асинхронные операции</a></span></li>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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