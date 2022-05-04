<!DOCTYPE html>
<html >
<head>
<title>Django | CRUD. Операции с моделями</title>
<meta charset="utf-8" />
<meta name="description" content="CRUD, Операции с моделями в Django, добавление, чтение, изменение и удаление в базе данных">
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
<h2>CRUD. Операции с моделями</h2><div class="date">Последнее обновление: 26.02.2018</div>

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

<p>При создании моделей они наследуют поведение от класса <span class="b">django.db.models.Model</span>, который предоставляет ряд базовых операций с данными.</p>
<p>Рассмотрим ряд операций на примере модели <span class="b">Person</span>:</p>
<pre class="brush:py;">
from django.db import models

class Person(models.Model):
    name = models.CharField(max_length=20)
    age = models.IntegerField()
</pre>
<h3>Добавление данных</h3>
<h4>create</h4>
<p>Для добавления данных применяется метод <span class="b">create()</span>:</p>
<pre class="brush:py;">
tom = Person.objects.create(name="Tom", age=23)
</pre>
<p>Если добавление пройдет успешно, то объект будет иметь id, который можно получить через <code>tom.id</code>.</p>
<h4>save</h4>
<p>Однако в своей сути метод <code>create()</code> использует другой метод - <span class="b">save()</span>, который мы также можем использовать отдельно 
для добавления объекта:</p>
<pre class="brush:py;">
tom = Person(name="Tom", age=23)
tom.save()
</pre>
<p>После успешного добавления также можно получить идентификатор добавленной записи с помощью <code>tom.id</code>.</p>
<h3>Получение из бд</h3>
<h4>Получение одного объекта</h4>
<p>Метод <span class="b">get()</span> возвращает один объект по определенному условию, которое передается в качестве параметра:</p>
<pre class="brush:py;">
tom = Person.objects.get(name="Tom")	# получаем запись, где name="Tom"
bob = Person.objects.get(age=23)		# получаем запись, где age=23
tim = Person.objects.get(name="Tim", age=23)	# запись, где name="Tim" и age=23
</pre>
<p>При использовании этого метода надо учитывать, что он предназначен для выборки таких объектов, которые имеются в единичном числе в базе данных. Если 
в таблице не окажется подобного объекта, то мы получим ошибку <code>имя_модели.DoesNotExist</code>. Если же в таблице будет несколько объектов, которые соответствуют 
условию, то будет сгенерированно исключение <code>MultipleObjectsReturned</code>. Поэтому следует применять данный метод с осторожностью.</p>
<p>Метод <span class="b">get_or_create()</span> возвращает объект, а если его нет в бд, то добавляет в бд новый объект.</p>
<pre class="brush:py;">
bob, created = Person.objects.get_or_create(name="Bob", age=24)
print(bob.name)
print(bob.age)
</pre>
<p>Метод возвращает добавленный объект (в данном случае переменная bob) и булевое значение (created), которое хранит True, если добавление прошло успешно.</p>
<h4>all()</h4>
<p>Если необходимо получить все имеющиеся объекты, то применяется метод <span class="b">all()</span>:</p>
<pre class="brush:py;">
people = Person.objects.all()
</pre>
<h4>filter()</h4>
<p>Если надо получить все объекты, которые соответствуют определенному критерию, то применяется метод <span class="b">filter()</span>, 
который в качестве параметра принимает критерий выборки:</p>
<pre class="brush:py;">
people = Person.objects.filter(age=23)
# использование нескольких криетриев
people2 = Person.objects.filter(name="Tom", age=23)
</pre>
<h4>exclude()</h4>
<p>Метод <span class="b">exclude()</span> позволяют исключить из выборки записи, которые соответвуют переданному в качестве параметра критерию:</p>
<pre class="brush:py;">
# исключаем пользователей, у которых age=23
people = Person.objects.exclude(age=23)
</pre>
<p>Можно комбинировать два выше рассмотренных метода:</p>
<pre class="brush:py;">
# выбираем всех пользователей, у которых name="Tom" кроме тех, у которых age=23
people = Person.objects.filter(name="Tom").exclude(age=23)
</pre>
<h4>in_bulk()</h4>
<p>Метод <span class="b">in_bulk()</span> является более эффективным способом для чтения большого количества записей. Он возвращает словарь, 
то есть объект dict, тогда как методы <code>all()</code>, <code>filter()</code> и <code>exclude()</code> возвращают объект <span class="b">QuerySet</span>:</p>
<pre class="brush:py;">
# получаем все объекты
people = Person.objects.in_bulk()
for id in people:
	print(people[id].name)
	print(people[id].age)

# получаем объекты с id=1 и id=3
people2 = Person.objects.in_bulk([1,3])
for id in people2:
	print(people2[id].name)
	print(people2[id].age)
</pre>
<p>Метод in_bulk возвращает словарь, где ключи представляют id объектов, а значения по этим ключам - собственно эти объекты, то есть в данном случае объекты Person.</p>
<h3>Обновление</h3>
<h4>save()</h4>
<p>Для обновления объекта также применяется метод <span class="b">save()</span>:</p>
<pre class="brush:py;">
bob = Person.objects.get(id=2)
bob.name = "Bob"
bob.save()
</pre>
<p>В этом случае Django полностью обновляет объект, все его свойства, даже если мы их не изменяли. Чтобы указать, что нам надо обновить только 
определенные поля, следует использовать параметр <code>update_fields</code>:</p>
<pre class="brush:py;">
bob = Person.objects.get(id=2)
bob.name = "Bobic"
bob.save(update_fields=["name"])
</pre>
<p>Это позволит повысить производительность.</p>
<h4>update()</h4>
<p>Другой способ обновления объектов представляет метод <span class="b">update()</span> в сочетании с методом <span class="b">filter</span>, 
которые вместе выполняют один запрос к базе данных:</p>
<pre class="brush:py;">
Person.objects.filter(id=2).update(name="Mike")
</pre>
<p>Если нам не надо получать обновляемый объект, то данный способ позволит нам увеличить производительность взаимодействия с бд.</p>
<p>Иногда бывает необходимо изменить значение столбца в бд на основании уже имеющегося значения. В этом случае мы можем использовать функцию 
<span class="b">F()</span>:</p>
<pre class="brush:py;">
from django.db.models import F

Person.objects.all(id=2).update(age = F("age") + 1)
</pre>
<p>В данном случае полю age присваивается уже имеющееся значение, увеличенное на единицу.</p>
<p>При этом важно учитывать, что метод update обновляет все записи в таблице, которые соответствуют условию.</p>
<p>Если надо обновить вообще все записи, вне зависимости от условия, то необходимо комбинировать метод update с методом <code>all()</code>:</p>
<pre class="brush:py;">
from django.db.models import F

Person.objects.all().update(name="Mike")
Person.objects.all().update(age = F("age") + 1)
</pre>

<h4>update_or_create()</h4>
<p>Метод <span class="b">update_or_create</span> обновляет запись, а если ее нет, то добавляет ее в таблицу:</p>
<pre class="brush:py;">
values_for_update={"name":"Bob", "age": 31}
bob, created = Person.objects.update_or_create(id=2, defaults = values_for_update)
</pre>
<p>Метод <code>update_or_create()</code> принимает два параметра. Первый параметр представляет критерий выборки объектов, которые будут обновляться. 
Второй параметр представляет объект со значениями, которые будут переданы записям, которые соответствуют китерию из первого параметра. 
Если критерию не соответствует никаких записей, то в таблицу добавляется новый объект, а переменная created будет равна True.</p>
<h3>Удаление</h3>
<p>Для удаления мы можем вызвать метод <span class="b">delete()</span> у удаляемого объекта:</p>
<pre class="brush:py;">
person = Person.objects.get(id=2)
person.delete()
</pre>
<p>Если не требуется получение отдельного объекта из базы данных, тогда можно удалить объект с помощью комбинации методов <code>filter()</code> и <code>delete()</code>:</p>
<pre class="brush:py;">
Person.objects.filter(id=4).delete()
</pre>
<h3>Просмотр строки запроса</h3>
<p>С помощью свойства <span class="b">query</span> у результата запроса мы можем получить SQL-запрос, который выполнялся. Например:</p>
<pre class="brush:py;">
people = Person.objects.filter(name="Tom").exclude(age=34)
print(people.query)
</pre>
<p>Данный код отобразит на консоли SQL-запрос типа следующего:</p>
<pre class="brush:sql;">
SELECT "firstapp_person"."id", "firstapp_person"."name", "firstapp_person"."age" 
FROM "firstapp_person" WHERE ("firstapp_person"."name" = Tom AND NOT ("firstapp_person"."age" = 34))
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


<div class="nav"><p><a href="5.2.php">Назад</a><a href="./">Содержание</a><a href="5.4.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Django</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/1.1.php">Что такое Django</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/1.2.php">Установка и настройка Django</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/1.3.php">Создание первого проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/1.4.php">Создание первого приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Представления и маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/3.1.php">Обработка запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.2.php">Определение маршрутов и функции path и re_path</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.3.php">Параметры представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.4.php">Параметры строки запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.5.php">Переадресация и отправка статусных кодов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Шаблоны</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/2.1.php">Создание и использование шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.3.php">Передача данных в шаблоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.2.php">Статические файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.4.php">TemplateView</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.5.php">Конфигурация шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.6.php">Расширение шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.7.php">Встроенные теги</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Формы Django</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/4.1.php">Определение форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.2.php">Типы полей формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.3.php">Настройка формы и ее полей</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.4.php">Валидация данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.5.php">Детальная настройка полей формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.6.php">Стилизация полей форм</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/5.1.php">Создание моделей и миграции базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.2.php">Типы полей моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.3.php">CRUD. Операции с моделями</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.4.php">Создание и получение объектов модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.5.php">Редактирование и удаление объектов модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.6.php">Отношение один ко многим (One to Many)</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.7.php">Отношение многие ко многим (Many to Many)</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.8.php">Отношение один к одному (One to one)</a></span></li>
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
	$("li:contains('Глава 5.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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