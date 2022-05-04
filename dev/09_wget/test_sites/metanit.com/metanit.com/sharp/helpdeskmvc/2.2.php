<!DOCTYPE html>
<html >
<head>
<title>Создание БД и контекста данных в HelpDesk</title>
<meta charset="utf-8" />
<meta name="description" content="Пример определения базы данных для приложения mvc 4, определение внешних ключей и использование триггеров, определение контекста данных для приложения HelpDesk">
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
<h2>Создание БД и контекста данных</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<h3>Создаем базу данных</h3>
<p>После определения всех моделей создадим базу данных. Поскольку многие модели взаимосвязаны, о нам придется это учитывать и при создании таблиц, 
указывая соответствующие внешние ключи.</p>
<p>Итак, добавим в папку <i>App_Data</i> проекта базу данных. Назовем ее, например, helpdesk.mdf.</p>
<img src="pics/1.png" style="width:551px;height:227px;" />
<p>Затем откроем базу данных в окне Database Explorer. Начнем добавлять таблицы для тех сущностей, которые не требуют внешних ключей.</p>
<p>Создадим таблицу для модели Category:</p>
<img src="pics/2.png" />
<p>Далее создадим таблицы для моделей Department и Activ. Модель Department:</p>
<img src="pics/3.png" />
<p>Модель Activ:</p>
<img src="pics/4.png" />
<p>Так как модель Activ связана через внешний ключ с моделью Department, то при определении таблицы также прописываем этот внешний ключ и 
указываем действие, которое будет происходить при удалении связанной модели Department. В данном случае поле DepartmentId будет принимать 
значение null.</p>
<p>Теперь добавим таблицы для ролей и пользователей. Таблица для класса Role:</p>
<img src="pics/5.png" />
<p>Также тут же можно и внести все возможные роли:</p>
<img src="pics/6.png" />
<p>Определение таблицы пользователей будет выглядеть следующим образом:</p>
<img src="pics/7.png" />
<p>Здесь у нас уже два внешних ключа. В принципе можно уже определить одного пользователя - администратора:</p>
<img src="pics/8.png" />
<p>Этот администратор затем уже будет добавлять всех остальных пользователей в приложении.</p>
<p>Теперь перейдем к системе заявок. Вначале добавим таблицу для сущности Lifecycle, описывающей жизненный цикл заявки. 
Скрипт создания таблицы будет выглядеть следующим образом:</p>
<pre class="brush:sql;">
CREATE TABLE [dbo].[Lifecycles]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
    [Opened] DATETIME NOT NULL, 
    [Distributed] DATETIME NULL, 
    [Proccesing] DATETIME NULL, 
    [Checking] DATETIME NULL, 
    [Closed] DATETIME NULL
)
</pre>
<p>И скрипт создания таблицы заявок будет выглядеть так:</p>
<pre class="brush:sql;">
CREATE TABLE [dbo].[Requests] (
    [Id]          INT            IDENTITY (1, 1) NOT NULL,
    [Name]        NVARCHAR (50)  NOT NULL,
    [Description] NVARCHAR (200) NULL,
    [Comment]     NVARCHAR (200) NULL,
    [Status]      INT            NOT NULL,
    [Priority]    INT            NOT NULL,
    [ActivId]     INT            NULL,
    [File]        NVARCHAR (200) NULL,
    [CategoryId]  INT            NULL,
    [UserId]      INT            NULL,
    [ExecutorId]  INT            NULL,
    [LifecycleId] INT            NOT NULL,
    PRIMARY KEY CLUSTERED ([Id] ASC),
    CONSTRAINT [FK_Requests_ToCategories] FOREIGN KEY ([CategoryId]) REFERENCES [dbo].[Categories] ([Id]) ON DELETE SET NULL,
    CONSTRAINT [FK_Requests_ToUsers] FOREIGN KEY ([UserId]) REFERENCES [dbo].[Users] ([Id]) ON DELETE SET NULL,
    CONSTRAINT [FK_Requests_ToLifecycles] FOREIGN KEY ([LifecycleId]) REFERENCES [dbo].[Lifecycles] ([Id]) ON DELETE CASCADE,
    CONSTRAINT [FK_Requests_ToActivs] FOREIGN KEY ([ActivId]) REFERENCES [dbo].[Activs] ([Id]) ON DELETE SET NULL
);

GO

CREATE TRIGGER [dbo].[Trigger_Requests]
    ON [dbo].[Users]
    FOR DELETE
    AS
    BEGIN
       UPDATE Requests SET ExecutorId = NULL 
     WHERE Requests.ExecutorId IN (SELECT [Id] FROM [deleted]);
    END

GO

CREATE TRIGGER [dbo].[Trigger_Requests2]
    ON [dbo].[Users]
    FOR UPDATE
    AS
    BEGIN
        UPDATE Requests SET ExecutorId = NULL 
     WHERE Requests.ExecutorId IN (SELECT [Id] FROM [inserted]) AND (SELECT [Name] FROM Roles WHERE Id=(SELECT [RoleId] FROM [inserted])) &lt;&gt; 'Исполнитель';
    END
</pre>
<p>Здесь у нас куча внешних ключей и, кроме того, еще не очень понятная конструкция в конце под названием триггер, точнее два триггера. Общее действие у нас таково: 
у нас два поля - пользователь, создавший заявку, и исполнитель этой заявки - ссылаются на таблицу Users. Мы хотим, чтобы в случае удаления 
объекта из таблицы Users соответствующие поля в таблице Requests устанавливались в NULL. Ну например в реальности пользователь отписался о какой-то проблеме, 
и вдруг его уволили (на уровне кода - удалили), но проблема могла остаться, поэтому мы устанавливаем null. Однако вы также можете использовать 
здесь каскадное удаление (ON DELETE CASCADE)</p>
<p>В случае с другим полем ExecutorId установить с помощью внешнего ключа в null уже не получится, так как среда нам не позволяет задать два внешних 
ключа на одно поле другой таблицы. Но мы можем выйти из этой ситуации, задав триггер.</p>
<p>По сути весь текст начиная с GO и до слова END представляет собой определение триггера, который делает практически то же самое, только 
для поля ExecutorId. В данном случае используется специфическое объявление триггера, о котором вы можете справиться в специальных руководствах по 
языку запросов SQL.</p>
<p>Второй триггер у нас определен для той ситуации, если какой-то пользователь перестает быть исполнителем, но остается в системе, то есть меняет статус. 
И тогда мы также устанавливаем для поля ExecutorId значение NULL.</p>
<p>Если в общих словах, то создание триггера начинается со слов <code>CREATE TRIGGER</code>, после которых идет название триггера. Далее указываем таблицу, 
за которой триггер будет следить и операцию после слова <code>AFTER</code>, при проведении которой триггер будет срабатывать. В обоих случаях таблицей является Users. 
А вот операции у нас используется две: удаление для первого триггера, и обновление для второго.</p>
<p>Само действие производит следующий код <code>UPDATE Requests SET ExecutorId = NULL</code> - обычное выражение SQL, устанавливающее значение 
NULL. А дальше следует условие, при котором происходит такое присвоение.</p>
<p>При удалении условие <code>WHERE Requests.ExecutorId IN (SELECT [Id] FROM [deleted])</code> говорит удалить те строки, где значения полей 
Requests.ExecutorId попадают в набор <code>(SELECT [Id] FROM [deleted])</code>. Слово deleted указывает на набор удаленных объектов из таблицы Users.</p>
<p>При обновлении чуть более сложное решение, так как нам надо проверить, является ли обновленный объект в таблице Users по прежнему исполнителем.</p>
<p>Благодаря использованию триггера удаление исполнителя, даже в том случае, если является и создателем заявки, пройдет вполне спокойно и без ошибок.</p>
<h3>Создание контекста данных</h3>
<p>Итак, мы создали весь необходимый набор данных, который сейчас выглядит следующим образом:</p>
<img src="pics/10.png" />
<p>Нас осталось создать контекст данных, через который мы будем получать все необходимые сведения из базы данных. 
Так, добавим в папку Models класс <span class="bb">HelpdeskContext</span>:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Data.Entity;

namespace HelpDeskTrain.Models
{
    public class HelpdeskContext : DbContext
    {
        public DbSet&lt;Role&gt; Roles { get; set; }
        public DbSet&lt;User&gt; Users { get; set; }
        public DbSet&lt;Request&gt; Requests { get; set; }
        public DbSet&lt;Lifecycle&gt; Lifecycles { get; set; }
        public DbSet&lt;Category&gt; Categories { get; set; }
        public DbSet&lt;Department&gt; Departments { get; set; }
        public DbSet&lt;Activ&gt; Activs { get; set; }
    }
}
</pre>
<p>Теперь надо связать контекст с базой данных. Откроем файл <i>web.config</i> изменим в нем стандартное определение строки подключения 
в секции connectionStrings на следующее:</p>
<pre class="brush:xml;">
&lt;connectionStrings&gt;
   &lt;add name="HelpdeskContext" providerName="System.Data.SqlClient" 
		connectionString="Data Source=(LocalDb)\v11.0;AttachDBFilename=|DataDirectory|\helpdesk.mdf" /&gt;
&lt;/connectionStrings&gt;
</pre>
<p>На этом у нас закончена работа с созданием и настройкой моделей и таблиц базы данных, и теперь мы можем 
перейти уже к построению самой логики приложения.</p>
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


<div class="nav"><p><a href="2.1.php">Назад</a><a href="./">Содержание</a><a href="3.1.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Создание приложения на mvc 4</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/1.1.php">Введение</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Выделение сущностей и создание БД</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/2.1.php">Выделение сущностей</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/2.2.php">Создание БД и контекста данных</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Создание системы авторизации</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/3.1.php">Создание провайдера ролей</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/3.2.php">Создание контроллера AccountController</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Управление пользователями. UserController</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/4.1.php">Создание контроллера UserContoller</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/4.2.php">Создание пользователей</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/4.3.php">Редактирование и удаление пользователей</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/4.4.php">Фильтрация пользователей</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Создание справочников. ServiceController</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/5.1.php">Создание справочников</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/5.2.php">Создание активов</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/5.3.php">Создание категорий заявок</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 6. Система подачи заявок. RequestController</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.1.php">Создание системы заявок</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.2.php">Просмотр заявок</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.3.php">Создание всплывающих окон</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.4.php">Удаление заявок и загрузка файлов</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.5.php">Просмотр админом всех заявок</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.6.php">Модерирование заявок модератором</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/6.7.php">Работа исполнителей</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Мастер-страницы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/helpdeskmvc/7.1.php">Создание мастер-страницы и выпадающее меню</a></span></li>
					</ul>
				</li>
	</ul>	</div>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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