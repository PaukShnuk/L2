<!DOCTYPE html>
<html >
<head>
<title>MongoDB | Выборка из БД</title>
<meta charset="utf-8" />
<meta name="description" content="Выборка из БД в MongoDB, использование выражений JavaScript и регулярных выражений, сортировка, детализация вывода с помощью методов limit и skip, постраничный вывод данных, использование курсоров">
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
<h2>Выборка из БД</h2><div class="date">Последнее обновление: 07.08.2021</div>

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

<p>Наиболее простой способом получения содержимого БД представляет использование функции <span class="b">find</span>. 
Действие этой функции во многом аналогично обычному запросу <code>SELECT * FROM Table</code>, который применяется в SQL и который извлекает все строки. Например, чтобы извлечь все документы из коллекции users, 
созданной в прошлой теме, мы можем использовать команду <code>db.users.find()</code>.</p>
<p>Для вывода документов в более удобном наглядном представлении мы можем добавить вызов метода <span class="b">pretty()</span>:</p>
<pre class="brush:js;">
&gt; db.users.find().pretty()
</pre>
<img src="./pics/2.4.png" alt="Извлечение данных из MongoDB" />
<p>Функция <span class="b">find()</span> позволяет возвратить несколько документов. Еще одна функция <span class="b">findOne()</span> работает похожим образом, только 
возвращает один документ:</p>
<pre class="brush:js;">
&gt; db.users.findOne()
</pre>
<h3>Фильтрация данных</h3>
<p>Однако что, если нам надо получить не все документы, а только те, которые удовлетворяют определенному требованию. Например, мы ранее в базу добавили 
следующие документы:</p>
<pre class="brush:js;">
&gt; db.users.insertOne({"name": "Tom", "age": 28, languages: ["english", "spanish"]})
&gt; db.users.insertOne({"name": "Bill", "age": 32, languages: ["english", "french"]})
&gt; db.users.insertOne({"name": "Tom", "age": 32, languages: ["english", "german"]})
</pre>
<p>Выведем все документы, в которых name=Tom:</p>
<pre class="brush:js;">
&gt; db.users.find({name: "Tom"})
</pre>
<p>Такой запрос выведет нам два документа, в которых name=Tom.</p>
<p>Теперь более сложный запрос: нам надо вывести те объекты, у которых name=Tom и одновременно age=32. То есть на языке SQL это могло бы 
выглядеть так: <code>SELECT * FROM Table WHERE Name='Tom' AND Age=32</code>. Данному критерию у нас соответствует последний добавленный 
объект. Тогда мы можем написать следующий запрос:</p>
<pre class="brush:js;">
&gt; db.users.find({name: "Tom", age: 32})
</pre>
<h3>Фильтрация по отсутствующим свойствам</h3>
<p>Какие-то документы могут иметь определенное свойство, другие могут его не иметь. Что если мы хотим получить документы, в которых отсутствует определенное 
свойство? В этом случае для свойства передается значение <span class="b">null</span>. Например, найдем все документы, где отсутствует свойство <code>languages</code>:</p>
<pre class="brush:js;">
&gt; db.users.find({languages: null})
</pre>
<p>Или найдем все документы, где <code>name="Tom"</code>, но свойство <code>languages</code> не определено.</p>
<pre class="brush:js;">
&gt; db.users.find({name: "Tom", languages: null})
</pre>
<h3>Фильтрация по элементам массива</h3>
<p>Также несложно отыскать по элементу в массиве. Например, следующий запрос выводит все документы, у которых в массиве languages есть english:</p>
<pre class="brush:js;">
&gt; db.users.find({languages: "english"})
</pre>
<p>Усложним запрос и получим те документы, у которых в массиве languages одновременно два языка: "english" и "german":</p>
<pre class="brush:js;">
&gt; db.users.find({languages: ["english", "german"]})
</pre>
<p>Причем именно в этом порядке, где "english" определен первым, а "german" - вторым.</p>
<p>Теперь выведем все документы, в которых "english" в массиве languages находится на первом месте:</p>
<pre class="brush:js;">
&gt; db.users.find({"languages.0": "english"})
</pre>
<p>Обратите внимание, что <code>"languages.0"</code> предоставляет сложное свойство и поэтому берется в кавычки. Соответственно если нам надо вывести документы, где english на втором месте (например, <code>["german", "english"]</code>), 
то вместо нуля ставим единицу: <code>"languages.1"</code>.</p>
<h3>Проекция</h3>
<p>Документ может иметь множество полей, но не все эти поля нам могут быть нужны и важны при запросе. И в этом случае мы можем включить 
в выборку только нужные поля, использовав проекцию. Например, выведем только порцию информации, например, значения полей "age" у все документов, 
в которых name=Tom:</p>
<pre class="brush:js;">
&gt; db.users.find({name: "Tom"}, {age: 1})
</pre>
<p>Использование единицы в качестве параметра <code>{age: 1}</code> указывает, что запрос должен вернуть только содержание свойства age.</p>
<img src="./pics/2.17.png" alt="Проекция в MongoDB" />
<p>И обратная ситуация: мы хотим найти все поля документа кроме свойства age. В этом случае в качестве параметра указываем 0:</p>
<pre class="brush:js;">
&gt; db.persons.find({name: "Tom"}, {age: 0})
</pre>
<p>При этом надо учитывать, что даже если мы отметим, что мы хотим получить только поле name, поле _id также будет включено в результирующую выборку. 
Поэтому, если мы не хотим видеть данное поле в выборке, то надо явным образом указать: <code>{"_id":0}</code></p>
<p>Альтернативно вместо 1 и 0 можно использовать true и false:</p>
<pre class="brush:js;">
&gt; db.users.find({name: "Tom"}, {age: true, _id: false})
</pre>
<p>Если мы не хотим при этом конкретизировать выборку, а хотим вывести все документы, то можно оставить первые фигурные скобки пустыми:</p>
<pre class="brush:js;">
&gt; db.users.find({}, {age: 1, _id: 0})
</pre>
<h3>Запрос к вложенным объектам</h3>
<p>Предыдущие запросы применялись к простым объектам. Но документы могут быть очень сложными по структуре. Например, добавим в коллекцию users 
следующий документ:</p>
<pre class="brush:js;">
&gt; db.users.insertOne({"name": "Alex", "age": 28, company: {"name":"Microsoft", "country":"USA"}})
</pre>
<p>Здесь определяется вложенный объект с ключом company. И чтобы найти все документы, у которых в ключе company вложенное свойство name=microsoft, 
нам надо использовать оператор точку:</p>
<pre class="brush:js;">
&gt; db.users.find({"company.name": "Microsoft"})
</pre>
<h3>Использование JavaScript</h3>
<p>MongoDB предоставляет замечательную возможность, создавать запросы, используя язык JavaScript. Например, создадим запрос, возвращающий 
те документы, в которых name=Tom. Для этого сначала объявляется функция:</p>
<pre class="brush:js;">
&gt; fn = function() { return this.name=="Tom"; }
&gt; db.users.find(fn)
</pre>
<img src="./pics/2.6.png" alt="Использование javascript в MongoDB" />
<p>Собственно только запросами область применения JavaScript в консоли mongo не ограничена. Например, мы можем создать какую-нибудь функцию и 
применять ее:</p>
<pre class="brush:js;">
&gt; function sqrt(n) { return n*n; }
&gt; sqrt(5)
25
</pre>
<h3>Использование регулярных выражений</h3>
<p>Еще одной замечательной возможностью при построении запросов является использование регулярных выражений. Например, найдем все документы, 
в которых значение ключа name начинается с буквы B:</p>
<pre>
&gt; db.users.find({name:/^B\w+/i})
</pre>
<img src="./pics/2.7.png" alt="Регулярные выражения в MongoDB" />
<h3>Настройка запросов и сортировка</h3>
<p>MongoDB представляет ряд функций, которые помогают управлять выборкой из бд. Одна из них - функция <span class="b">limit</span>. Она задает 
максимально допустимое количество получаемых документов. Количество передается в виде числового параметра. Например, ограничим выборку тремя документами:</p>
<pre class="brush:js;">
&gt; db.users.find().limit(3)
</pre>
<p>В данном случае мы получим первые три документа (если в коллекции 3 и больше документов). Но что, если мы хотим произвести выборку не 
сначала, а пропустив какое-то количество документов? В этом нам поможет функция <span class="b">skip</span>. Например, пропустим первые три записи:</p>
<pre class="brush:js;">
&gt; db.users.find().skip(3)
</pre>
<p>MongoDB предоствляет возможности отсортировать полученный из бд набор данных с помощью функции <span class="b">sort</span>. Передавая 
в эту функцию значения 1 или -1, мы можем указать в каком порядке сортировать: по возрастанию (1) или по убыванию (-1). Во многом эта функция по действию 
аналогична выражению <code>ORDER BY</code> в SQL. Например, сортировка по возрастанию по полю <code>name</code>:</p>
<pre class="brush:js;">
&gt; db.users.find().sort({name: 1})
</pre>
<p>Ну и в конце надо отметить, что мы можем совмещать все эти функции в одной цепочке:</p>
<pre class="brush:js;">
&gt; db.users.find().sort({name: 1}).skip(3).limit(3)
</pre>
<h3>Поиск одиночного документа</h3>
<p>Если все документы извлекаются функцией <code>find</code>, то одиночный документ извлекается функцией <code>findOne</code>. 
Ее действие аналогично тому, как если бы мы использовали функцию <code>limit(1)</code>, которая также извлекает первый документ коллекции. 
А комбинация функций skip и limit извлечет документ по нужному местоположению.</p>
<h3>Параметр $natural</h3>
<p>Если вдруг нам надо отсортировать ограниченную коллекцию, то мы можем воспользоваться параметром <code>$natural</code>. Этот параметр 
позволяет задать сортировку: документы передаются в том порядке, в каком они были добавлены в коллекцию, либо в обратном порядке.</p>
<p>Например, отберем последние пять документов:</p>
<pre class="brush:js;">
&gt; db.users.find().sort({ $natural: -1 }).limit(5)
</pre>
<h3>Оператор $slice</h3>
<p>$slice является в некотором роде комбинацией функций <code>limit</code> и <code>skip</code>. Но в отличие от них $slice может работать с массивами.</p>
<p>Оператор <code>$slice</code> принимает два параметра. Первый параметр указывает на  общее количество возвращаемых документов. Второй параметр 
необязательный, но если он используется, тогда первый параметр указывает на смещение относительно начала (как функция skip), а второй - 
на ограничение количества извлекаемых документов.</p>
<p>Например, в каждом документе определен массив languages для хранения языков, на которых говорит человек. Их может быть и 1, и 2, и 3 и более. 
И допустим, ранее мы добавили следующий объект:</p>
<pre class="brush:js;">
&gt; db.users.insertOne({"name": "Tom", "age": "32", languages: ["english", "german"]})
</pre>
<p>И мы хотим при выводе документов сделать так, чтобы в выборку попадал только один язык из массива languages, а не весь массив:</p>
<pre class="brush:js;">
&gt; db.users.find ({name: "Tom"}, {languages: {$slice : 1}})
</pre>
<p>Данный запрос при извлечении документа оставит в результате только первый язык из массива languages, то есть в данном случае english.</p>
<p>Обратная ситуация: нам надо оставить в массиве также один элемент, но не с начала, а с конца. В этом случае необходимо передать в параметр 
отрицательное значение:</p>
<pre class="brush:js;">
&gt; db.users.find ({name: "Tom"}, {languages: {$slice : -1}});
</pre>
<p>Теперь в массиве окажется german, так как он первый с конца в добавленном элементе.</p>
<p>Используем сразу два параметра:</p>
<pre class="brush:js;">
&gt; db.users.find ({name: "Tom"}, {languages: {$slice : [-1, 1]}});
</pre>
<p>Первый параметр говорит начать выборку элементов с конца (так как отрицательное значение), а второй параметр указывает на количество возвращаемых 
элементов массива. В итоге в массиве language окажется "german"</p>
<h3>Курсоры</h3>
<p>Результат выборки, получаемой с помощью функции <code>find</code>, называется <span class="b">курсором</span>:</p>
<pre class="brush:js;">
&gt; var cursor = db.users.find()
</pre>
<p>Курсоры инкапсулируют в себе наборы получаемых из бд объектов. Используя синтаксис языка javascript и методы курсоров, мы можем вывести полученные 
документы на экран и как-то их обработать. Например:</p>
<pre class="brush:js;">
&gt; var cursor = db.users.find()
&gt; while(cursor.hasNext()){
... obj = cursor.next();
... print(obj["name"]);
... }
</pre>
<p>Курсор обладает методом <span class="b">hasNext</span>, который показывает при переборе, имеется ли еще в наборе документ. 
А метод <span class="b">next</span> извлекает текущий документ и перемещает курсор к следующему документу в наборе. В итоге в переменной 
obj оказывается документ, к полям которого мы можем получить доступ.</p>
<p>Также для перебора документов в курсоре в качестве альтернативы мы можем использовать конструкцию итератора javascript - <span class="b">forEach</span>:</p>
<pre class="brush:js;">
&gt; var cursor = db.users.find()
&gt; cursor.forEach(function(obj){
... print(obj.name);
... })
</pre>
<p>Чтобы ограничить размер выборки, используется метод <code>limit</code>, принимающий количество документов:</p>
<pre class="brush:js;">
&gt; var cursor = db.users.find()
&gt; cursor.limit(5);null;
null
&gt; cursor.forEach(function(obj){
... print(obj.name);
... })
</pre>
<p>Стоит обратить внимание, что, чтобы сразу же не выводить все содержащиеся в курсоре данные, после метода limit() через точку с запятой добавляется 
выражение <code>null;</code></p>
<p>Используя метод <code>sort()</code>, можно отсортировать документы в курсоре:</p>
<pre class="brush:js;">
&gt; var cursor = db.users.find()
&gt; cursor.sort({name:1});null;
null
&gt; cursor.forEach(function(obj){
... print(obj.name);
... })
</pre>
<p>Выражение <code>cursor.sort({name:1})</code> сортирует документы в курсоре по полю name по возрастанию. Если мы хотим отсортировать по убыванию, то 
вместо 1 используем -1: <code>cursor.sort({name:-1})</code></p>
<p>И еще один метод <code>skip()</code> позволяет пропустить при выборке определенное количество документов:</p>
<pre class="brush:js;">
&gt; var cursor = db.users.find()
&gt; cursor.skip(2);null;
null
&gt; cursor.forEach(function(obj){
... print(obj.name);
... })
</pre>
<p>В данном случае пропускаем два документа.</p>
<p>И кроме того, можно объединять все эти методы в цепочки:</p>
<pre class="brush:js;">
&gt; var cursor = db.users.find()
&gt; cursor.sort({name:1}).limit(3).skip(2);null;
null
&gt; cursor.forEach(function(obj){
... print(obj.name);
... })
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


<div class="nav"><p><a href="./2.3.php">Назад</a><a href="./">Содержание</a><a href="./2.7.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/1.1.php">Что такое MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/1.2.php">Начало работы с MongoDB на Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/1.4.php">Начало работы с MongoDB на Mac OS</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/1.3.php">Графический клиент Compass</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Работа с базой данных MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.1.php">Устройство базы данных. Документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.2.php">Установка и администрирование базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.3.php">Добавление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.4.php">Выборка из БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.7.php">Команды группировки</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.8.php">Операторы выборки</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.9.php">Обновление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.10.php">Удаление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.11.php">Установка ссылок в БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.12.php">Работа с индексами</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.13.php">Управление коллекцией</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.5.php">Работа с данными в MongoDB Compass</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. PHP и MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.1.php">Установка драйвера для PHP</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.2.php">Подключение к MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.3.php">Добавление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.4.php">Выборка документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.5.php">Управление выборкой</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.6.php">Условные операторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.7.php">Обновление документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.8.php">Удаление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.9.php">Работа с DBRef</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.10.php">Работа с GridFS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. C# и MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.1.php">Установка драйвера и подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.2.php">Взаимодействие с коллекцией. Документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.3.php">Работа с моделями данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.4.php">Настройка модели с помощью атрибутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.5.php">Сохранение документов в базу данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.6.php">Выборка из базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.7.php">Фильтрация данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.8.php">Интерфейс IFindFluent и его методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.9.php">Агрегация и группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.10.php">Редактирование и удаление документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.16.php">Метод BulkWriteAsync</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.11.php">Работа с GridFS</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.12.php">MongoDB и ASP.NET MVC. Создание проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.13.php">MongoDB и ASP.NET MVC. Чтение и добавление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.14.php">MongoDB и ASP.NET MVC. Редактирование и удаление</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.15.php">MongoDB и ASP.NET MVC. Работа с файлами изображений</a></span></li>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 2.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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