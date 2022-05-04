<!DOCTYPE html>
<html >
<head>
<title>Просмотр заявок в HelpDesk</title>
<meta charset="utf-8" />
<meta name="description" content="Просмотр заявок в приложении helpdesk на asp.net mvc, распределение доступа по группам пользователей">
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
<h2>Просмотр заявок</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Метод Index, который у нас будет выводить текущему пользователю его заявки, будет стандартным действием, передающим набор объектов в представление. 
Итак, изменим метод Index на следующий:</p>
<pre class="brush:c#;">
public ActionResult Index()
{
    // получаем текущего пользователя
    User user = db.Users.Where(m=&gt; m.Login==HttpContext.User.Identity.Name).FirstOrDefault();

    var requests = db.Requests.Where(r=&gt;r.UserId==user.Id) //получаем заявки для текущего пользователя
                            .Include(r =&gt; r.Category)  // добавляем категории
                            .Include(r =&gt; r.Lifecycle)  // добавляем жизненный цикл заявок
                            .Include(r =&gt; r.User)         // добавляем данные о пользователях
                            .OrderByDescending(r=&gt;r.Lifecycle.Opened); // упорядочиваем по дате по убыванию   
         
    return View(requests.ToList());
}
</pre>
<p>Стандартный метод. Вначале мы получаем id текущего пользователя, а затем все его открытые заявки, которые есть в системе, и с помощью метода Include 
подсоединяем всю необходимую информацию из других таблиц. Ну и также упорядочиваем по дате все заявки, чтобы сначала шли те заявки, что по новее.</p>
<p>Теперь нам надо создать представление, но на этот раз представление будет не простое. и даже не золотое, однако мы его немного разнообразим 
и внесем в него дополнительный функционал в плане дизайна. Я сразу покажу, что в итоге у нас получится:</p>
<img src="pics/21.png" />
<p>На веб-страницу мы будем выводить только часть информации о заявке. А некоторые показатели, как статус, приоритет, мы будем выводить в виде 
изображений. Кроме того, я использовал изображения для ссылок на общую информацию о заявке, информацию об исполнителе и жизненном цикле заявки. 
Ниже я приведу список всех изображений, используемых в представлении.</p>
<h5>Приоритеты</h5>
<table>
<tr><td><img src="pics/prior1.png" /></td><td><p>Низкий приоритет</p></td></tr>
<tr><td><img src="pics/prior2.png" /></td><td><p>Средний приоритет</p></td></tr>
<tr><td><img src="pics/prior3.png" /></td><td><p>Высокий приоритет</p></td></tr>
<tr><td><img src="pics/prior4.png" /></td><td><p>Критичный приоритет</p></td></tr>
</table>
<h5>Статусы</h5>
<table>
<tr><td><img src="pics/status1.png" /></td><td><p>Заявка окрыта</p></td></tr>
<tr><td><img src="pics/status2.png" /></td><td><p>Заявка распределена</p></td></tr>
<tr><td><img src="pics/status3.png" /></td><td><p>Заявка в процессе производства</p></td></tr>
<tr><td><img src="pics/status4.png" /></td><td><p>Заявка на проверке</p></td></tr>
<tr><td><img src="pics/status5.png" /></td><td><p>Заявка закрыта</p></td></tr>
</table>
<h5>Прочие</h5>
<table>
<tr><td><img src="pics/info.png" /></td><td><p>Общая информация о заявке</p></td></tr>
<tr><td><img src="pics/executor.png" /></td><td><p>Информация об исполнителе</p></td></tr>
<tr><td><img src="pics/lifecycle.png" /></td><td><p>Жизненный цикл заявки</p></td></tr>
</table>
<p>Для хранения этих изображений мы можем создать в проекте в каталоге Content специальную папку pictures и оттуда обращаться к этим изображениям.</p>
<p>Теперь создадим представление <i>Index.cshtml</i>:</p>
<pre class="brush:xml;">
@model IEnumerable&lt;Request&gt;
@using HelpDeskTrain.Models

@{
    ViewBag.Title = "Список заявок";
    int i = 0; //счетчик
}

&lt;h2&gt;Список заявок&lt;/h2&gt;
&lt;p&gt;Всего заявок: @(Model.Count&lt;Request&gt;())&lt;/p&gt;
&lt;table&gt;

@foreach (var item in Model) {
    i++;
    &lt;tr&gt;
        &lt;td&gt;&lt;b&gt;@i&lt;/b&gt;&lt;/td&gt;
        &lt;td&gt;
         @if (item.Status == (int)RequestStatus.Open)
        { 
             &lt;img src="../../Content/pictures/status1.png" title="Заявка открыта" class="tdImage" /&gt;
        }
        else if (item.Status == (int)RequestStatus.Distributed)
        { 
             &lt;img src="../../Content/pictures/status2.png" title="Заявка распределена" class="tdImage" /&gt;
        }
         else if (item.Status == (int)RequestStatus.Proccesing)
         {
            &lt;img src="../../Content/pictures/status3.png" title="Заявка в процессе" class="tdImage" /&gt;
         }
         else if (item.Status == (int)RequestStatus.Checking)
         {
            &lt;img src="../../Content/pictures/status4.png" title="Заявка на проверке" class="tdImage" /&gt;
         } 
        else if (item.Status == (int)RequestStatus.Closed)
         {
            &lt;img src="../../Content/pictures/status5.png" title="Заявка закрыта" class="tdImage" /&gt;
         }
        &lt;/td&gt;
        &lt;td&gt;
            @if (item.Priority == (int)RequestPriority.Low)
            { 
             &lt;img src="../../Content/pictures/prior1.png" title="Низкий приоритет" class="tdImage" /&gt;
            }
            else if (item.Priority == (int)RequestPriority.Medium)
            { 
             &lt;img src="../../Content/pictures/prior2.png" title="Средний приоритет"  class="tdImage" /&gt;
            }
            else if (item.Priority == (int)RequestPriority.High)
            {
            &lt;img src="../../Content/pictures/prior3.png" title="Высокий приоритет" class="tdImage" /&gt;
            }
            else if (item.Priority == (int)RequestPriority.Critical)
            {
            &lt;img src="../../Content/pictures/prior4.png" title="Критичный приоритет" class="tdImage" /&gt;
            }
        &lt;/td&gt;
        &lt;td&gt;
            @if (item.File != null)
            { 
                &lt;a href="/Request/Download/@item.Id"&gt;&lt;img src="../../Content/pictures/filey.png" alt='@item.File' class="tdImage" /&gt;&lt;/a&gt;
            }
            else
            { 
                &lt;img src="../../Content/pictures/filen.png" alt="без файла изображения" class="tdImage" /&gt;
            }
        &lt;/td&gt;
        &lt;td&gt;
            @Html.DisplayFor(modelItem =&gt; item.Lifecycle.Opened)
        
        &lt;/td&gt;
        &lt;td&gt;
            @Html.DisplayFor(modelItem =&gt; item.Name)
        &lt;/td&gt;
        
        &lt;td&gt;
        
        &lt;div&gt;&lt;a class="openDialog" data-dialog-id="infoDialog" data-dialog-title="Описание заявки" 
               href="Request/Details/@item.Id"&gt;
               &lt;img src="../../Content/pictures/info.png" class="tdImage" title="Описание заявки" /&gt;
         &lt;/a&gt;&lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;
         &lt;div&gt;&lt;a class="openDialog" data-dialog-id="executorDialog" data-dialog-title="Исполнитель заявки" 
             href="Request/Executor/@item.ExecutorId"&gt;
               &lt;img src="../../Content/pictures/executor.png" class="tdImage" title="Исполнитель заявки" /&gt;
           &lt;/a&gt;
         &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;
           &lt;div&gt;&lt;a class="openDialog" data-dialog-id="lifecycleDialog" data-dialog-title="Жизненный цикл заявки" 
               href="Request/Lifecycle/@item.LifecycleId"&gt;
               &lt;img src="../../Content/pictures/lifecycle.png" class="tdImage" title="Жизненный цикл заявки" /&gt;
           &lt;/a&gt;&lt;/div&gt;
         
        &lt;/td&gt;
        &lt;td&gt;
            @Html.ActionLink("Удалить", "Delete", new { id = item.Id })
        &lt;/td&gt;
    &lt;/tr&gt;
}

&lt;/table&gt;
 @Styles.Render("~/Content/themes/base/css")
@section Scripts {
    @Scripts.Render("~/bundles/jqueryui")
}
</pre>
<p>Довольно объемный код, поэтому разберем его подробнее. Сначала мы выводим статус в первом столбце: <code>@if (item.Status == (int)RequestStatus.Open)</code>. 
И в зависимости от того, какой будет статус, мы выводим определенную картинку.</p>
<p>Далее похожим образом выводим приоритет заявки и также с помощью изображения.</p>
<p>Затем идет дата открытия, название и наконец доходим до следующего блока:</p>
<pre class="brush:xml;">
&lt;div&gt;&lt;a class="openDialog" data-dialog-id="infoDialog" data-dialog-title="Описание заявки" 
               href="Request/Details/@item.Id"&gt;
        &lt;img src="../../Content/pictures/info.png" class="tdImage" title="Описание заявки" /&gt;
&lt;/a&gt;&lt;/div&gt;
</pre>
<p>Здесь мы объявляем ссылку, которая затем после применения библиотеки jquery-ui и нажатия превратится в всплывающее окно, содержащее некоторую 
информацию. Ссылка <code>href="Request/Details/@item.Id"</code> при нажатии будет обращаться к методу Details (кторое мы далее создадим) и будет 
в него передавать id данной заявки, и в окне появится некоторая нужная нам информация. Ну для визуализации добавляем в пределы ссылки 
изображение. То же самое справедливо и для следующих блоков исполнителя и жизненного цикла, только методы контроллера там будет отличаться.</p>
<p>Ну и также мы применяем к элементам <code>img</code> для единообразия класс tdImage, который будет иметь следующие стили (который можно добавить 
в файл Site.css):</p>
<pre class="brush:xml;">
 .tdImage{
     
    width:30px;
    height:25px;
}
</pre>
<p>И в самом конце представления добавляем бандлы - стили и скрипы библиотеки jquery-ui:</p>
<pre class="brush:xml;">
@Styles.Render("~/Content/themes/base/css")
@section Scripts {
    @Scripts.Render("~/bundles/jqueryui")
}
</pre>
<p>Эти бандлы объявлены у нас в файле <i>BundleConfig.cs</i> в папке App_Start, вы можете открыть этот файл и увидеть, какие конкретно файлы эти 
бандлы подключают.</p>
<p>Теперь разберем сопутствующий код, который превратит ссылки во всплывающие окна с определенной информацией.</p>
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


<div class="nav"><p><a href="6.1.php">Назад</a><a href="./">Содержание</a><a href="6.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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