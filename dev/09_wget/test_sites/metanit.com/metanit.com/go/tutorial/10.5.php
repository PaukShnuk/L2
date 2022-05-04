<!DOCTYPE html>
<html >
<head>
<title>Go | MongoDB</title>
<meta charset="utf-8" />
<meta name="description" content="Работа с базой данных MongoDB в языке программирования Go, операции с данными, пакет gopkg.in/mgo.v2 и драйвер mgo">
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
<h2>MongoDB</h2><div class="date">Последнее обновление: 31.01.2018</div>

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

<p>MongoDB не является реляционный СУБД, но тем не менее это тоже довольно распространенная система управления базами данных, которую можно использовать в Go.</p>
<p>Для работы с MongoDB нам потребуется драйвер <a href="https://labix.org/mgo" rel="nofollow">mgo</a>.</p>
<p>Вначале установим драйвер, выполнив в командной строке/терминале следующую команду:</p>
<div class="console"><pre class="consoletext">go get gopkg.in/mgo.v2</pre></div>
<h3>Подключение</h3>
<p>Для подключения к серверу MongoDB необходимо использовать функцию <span class="b">mgo.Dial()</span>, в которую передается адрес сервера:</p>
<pre class="brush:go;">func Dial(url string) (*Session, error)</pre>
<p>Например, подключение к серверу на локальном компьютере:</p>
<pre class="brush:go;">session, err := mgo.Dial("mongodb://127.0.0.1")</pre>
<p>Функция возвращает указатель на объект <span class="b">Session</span>, который представляет текущую сессию.</p>
<p>Используя метод <span class="b">DB</span> данного объекта, мы можем получить указатель на объект <span class="b">Database</span>, который представляет конкретную базу данных на сервере.</p>
<pre class="brush:go;">func (s *Session) DB(name string) *Database</pre>
<p>Все данные в базах данных MongoDB структурированы по коллекциям. Фактически коллекция - это аналог таблицы в реляционных базах данных, представлена типом <span class="b">Collection</span>. И чтобы получить обратиться к нужной коллекции, 
необходимо использовать метод <span class="b">C()</span>:</p>
<pre class="brush:go;">func (db *Database) C(name string) *Collection</pre>
<p>Например, получим коллекцию "products", которая расположена в базе данных "productdb":</p>
<pre class="brush:go;">
// открываем соединение
session, err := mgo.Dial("mongodb://127.0.0.1")
if err != nil {
	panic(err)
}
defer session.Close()
	
// получаем коллекцию products в базе данных productdb
productCollection := session.DB("productdb").C("products")
</pre>
<p>Получив коллекцию, мы сможем добавлять, получать данные и проводить с ними иные операции. И по завершении работы с сервером необходимо закрыть подключение методом <code>Close()</code>.</p>
<h3>Добавление данных</h3>
<p>Для добавления данных в коллекцию применяется метод <span class="b">Insert()</span> объекта Collection:</p>
<pre class="brush:go;">func (c *Collection) Insert(docs ...interface{}) error</pre>
<p>Этот метод принимает неопределенное количество добавляемых в коллекцию объектов.</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"gopkg.in/mgo.v2"
	"gopkg.in/mgo.v2/bson"
)
type Product struct{
	Id bson.ObjectId `bson:"_id"`
	Model string `bson:"model"`
	Company string `bson:"company"`
	Price int `bson:"price"`
}
func main() { 

	// открываем соединение
	session, err := mgo.Dial("mongodb://127.0.0.1")
	if err != nil {
		panic(err)
	}
	defer session.Close()
	
	// получаем коллекцию
	productCollection := session.DB("productdb").C("products")
	
	p1 := &Product{Id:bson.NewObjectId(), Model:"iPhone 8", Company:"Apple", Price:64567}
	// добавляем один объект
	err = productCollection.Insert(p1)
	if err != nil{
		fmt.Println(err)
	}
	
	p2 := &Product{Id:bson.NewObjectId(), Model:"Pixel 2", Company:"Google", Price:58000}
	p3 := &Product{Id:bson.NewObjectId(), Model:"Xplay7", Company:"Vivo", Price:49560}
	// добавляем два объекта
	err = productCollection.Insert(p2, p3)
	if err != nil{
		fmt.Println(err)
	}
}
</pre>
<p>Прежде всего вначале импортируем два пакета драйвера, которые содержат весь необходимый нам функционал:</p>
<pre class="brush:go;">
"gopkg.in/mgo.v2"
"gopkg.in/mgo.v2/bson"
</pre>
<p>Для представления данных здесь определена структура Product. Определение каждой переменной структуры кроме названия и типа данных содержит название поля в коллекции, с 
которым данная переменная будет сопоставляться. Например,</p>
<pre class="brush:go;">Model string `bson:"model"`</pre>
<p>Переменная Model будет сопоставляться с полем "model" в коллекции. Причем между названием переменной и поля коллекции необязательно должно быть соответствие.</p>
<p>Также стоит отметить, что идентификатор объекта в MongoDB представляет специальный тип <span class="b">bson.ObjectId</span>, а в базе данных 
ему соответствует поле "_id".</p>
<p>Для добавления создаем три объекта - фактически три указателя на объекты Product. Для создания уникального идентификатора применяется функция 
<span class="b">bson.NewObjectId()</span>. Затем добавляем объекты в коллекцию:</p>
<pre class="brush:go;">
err = productCollection.Insert(p1)
err = productCollection.Insert(p2, p3)
</pre>
<h3>Получение данных</h3>
<p>Для получения данных из коллекции применяется метод <span class="b">Find()</span>:</p>
<pre class="brush:go;">func (c *Collection) Find(query interface{}) *Query</pre>
<p>В качестве параметра он принимает критерий выборки и возвращает объект <code>*Query</code>. Среди методов этого объекта следует выделить методы 
<span class="b">All()</span> и <span class="b">One</span>, которые возвращают соответственно все объекты выборки и один объект из выборки:</p>
<pre class="brush:go;">
func (q *Query) All(result interface{}) error
func (q *Query) One(result interface{}) (err error)
</pre>
<p>В качестве параметра оба метода принимают указатель на объект, в который будет сохраняться результат выборки.</p>
<p>Например, получим ранее сохраненные объекты:</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"gopkg.in/mgo.v2"
	"gopkg.in/mgo.v2/bson"
)
type Product struct{
	Id bson.ObjectId `bson:"_id"`
	Model string `bson:"model"`
	Company string `bson:"company"`
	Price int `bson:"price"`
}
func main() { 

	// открываем соединение
	session, err := mgo.Dial("mongodb://127.0.0.1")
	if err != nil {
		panic(err)
	}
	defer session.Close()
	
	// получаем коллекцию
	productCollection := session.DB("productdb").C("products")
	// критерий выборки
	query := bson.M{}
	// объект для сохранения результата
	products := []Product{}
	productCollection.Find(query).All(&products)
	
	for _, p := range products{
	
		fmt.Println(p.Model, p.Company, p.Price)
	}
}
</pre>
<p>Критерий выборки представляет объект <code>bson.M{}</code>. Пустой объект <code>bson.M{}</code> охватывает все документы в коллекции. Все полученные документы передаются в 
объект products. И затем данные выводятся на консоль:</p>
<img src="pics/11.8.png" alt="Работа с MongoDB в Go и mgo" />
<p>Также мы можем конкретизировать выборку:</p>
<pre class="brush:go;">
query := bson.M{
	"price" : bson.M{
		"$gt":50000,
	},
}
products := []Product{}
productCollection.Find(query).All(&products)
	
for _, p := range products{
	
	fmt.Println(p.Model, p.Company, p.Price)
}
</pre>
<p>В данном случае ищем все документы, у которых поле "price" имеет значение больше 50000.</p>
<img src="pics/11.9.png" alt="Работа с базой данных MongoDB в Go" />
<h3>Обновление данных</h3>
<p>Для обновления данных применяются методы <span class="b">Update()/UpdateAll()</span> объекта Collection:</p>
<pre class="brush:go;">
func (c *Collection) Update(selector interface{}, update interface{}) error
func (c *Collection) UpdateAll(selector interface{}, update interface{}) (info *ChangeInfo, err error)
</pre>
<p>Первый параметр методов выборки представляет критерий выборки документов, которые будут обновляться. Второй параметр указывает, как эти документы будут обновляться. 
Оба параметра задаются с помощью объекта <code>bson.M</code>. Однако если метод Update обновляет только один документ, который соответствует первому параметру, 
то метод UpdateAll - обновляет все элементы.</p>
<p>Например, изменим цену смартфона "iPhone 8":</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"gopkg.in/mgo.v2"
	"gopkg.in/mgo.v2/bson"
)
type Product struct{
	Id bson.ObjectId `bson:"_id"`
	Model string `bson:"model"`
	Company string `bson:"company"`
	Price int `bson:"price"`
}
func main() { 

	// открываем соединение
	session, err := mgo.Dial("mongodb://127.0.0.1")
	if err != nil {
		panic(err)
	}
	defer session.Close()
	
	// получаем коллекцию
	productCollection := session.DB("productdb").C("products")
	
	// обновляем данные	
	err = productCollection.Update(bson.M{"model": "iPhone 8"}, bson.M{"$set":bson.M{"price":45000}})	
	if err != nil{
		fmt.Println(err)
	}
	
	products := []Product{}
	productCollection.Find(bson.M{}).All(&products)
	
	for _, p := range products{
	
		fmt.Println(p.Model, p.Company, p.Price)
	}
}
</pre>
<p>Первый аргумент метода Update - <code>bson.M{"model": "iPhone 8"}</code> указывает, что выбираются все элементы, у которых поле "model" равно 
"iPhone 8". Второй аргумент - <code>bson.M{"$set":bson.M{"price":45000}}</code> с помощью параметра <code>$set</code> устанавливает, какие значения будут иметь те или иные поля (в данном случае поле "price").</p>
<img src="pics/11.10.png" alt="Обновление документов в базе данных MongoDB в языке Go" />
<h3>Удаление документов</h3>
<p>Для удаления документов из коллекции применяется методы <span class="b">Remove()/RemoveAll()</span> объекта Collection:</p>
<pre class="brush:go;">
func (c *Collection) Remove(selector interface{}) error
func (c *Collection) RemoveAll(selector interface{}) (info *ChangeInfo, err error)
</pre>
<p>Оба метода в качестве параметра принимают критерий выборки документов, которые будут удаляться. Только метод Remove удаляет только один документ из выборки, 
а метод RemoveAll удаляет все элементы выборки.</p>
<p>Например, удалим все смартфоны компании Vivo:</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"gopkg.in/mgo.v2"
	"gopkg.in/mgo.v2/bson"
)
type Product struct{
	Id bson.ObjectId `bson:"_id"`
	Model string `bson:"model"`
	Company string `bson:"company"`
	Price int `bson:"price"`
}
func main() { 

	// открываем соединение
	session, err := mgo.Dial("mongodb://127.0.0.1")
	if err != nil {
		panic(err)
	}
	defer session.Close()
	
	// получаем коллекцию
	productCollection := session.DB("productdb").C("products")
	
	// удаляем все документы с company = "Vivo"
	_, err = productCollection.RemoveAll(bson.M{"company": "Vivo"})		
	if err != nil{
		fmt.Println(err)
	}
	
	products := []Product{}
	productCollection.Find(bson.M{}).All(&products)
	
	for _, p := range products{
	
		fmt.Println(p.Model, p.Company, p.Price)
	}
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


<div class="nav"><p><a href="10.4.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в язык Go</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.1.php">Что такое Go</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.2.php">Первая программа</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.3.php">Go в LiteIDE</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.4.php">Go в Visual Studio Code</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы языка Go</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.1.php">Структура программы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.2.php">Переменные</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.3.php">Типы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.4.php">Константы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.5.php">Арифметические операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.6.php">Условные выражения</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.7.php">Поразрядные операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.8.php">Массивы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.9.php">Условные конструкции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.10.php">Циклы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.11.php">Функции и их параметры</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.12.php">Возвращение результата из функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.15.php">Тип функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.16.php">Анонимные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.17.php">Рекурсивные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.18.php">defer и panic</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.13.php">Срезы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.14.php">Отображения</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Указатели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/3.1.php">Что такое указатели</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/3.2.php">Указатели и функции</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Производные типы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.1.php">Объявление типов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.2.php">Структуры</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.3.php">Вложенные структуры</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.4.php">Методы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.5.php">Методы указателей</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Пакеты и модули</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/5.1.php">Пакеты и их импорт</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/5.2.php">Введение в модули</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Интерфейсы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/6.1.php">Введение в интерфейсы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/6.2.php">Соответствие интерфейсу</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/6.3.php">Полиморфизм</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Параллельное программирование. Горутины</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.1.php">Горутины</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.2.php">Каналы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.3.php">Закрытие канала</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.4.php">Синхронизация</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.5.php">Передача потоков данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.6.php">Мьютексы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.7.php">WaitGroup</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. Потоки и файлы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.1.php">Операции ввода-вывода. Reader и Writer</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.2.php">Создание и открытие файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.3.php">Чтение и запись файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.4.php">Стандартные потоки ввода-вывода и io.Copy</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.5.php">Форматированный вывод</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.6.php">Вывод на консоль</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.7.php">Форматируемый ввод</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.8.php">Чтение с консоли</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.9.php">Буферизированный ввод-вывод</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Сетевое программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.1.php">Отправка запросов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.2.php">Сервер. Обработка подключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.3.php">Взаимодействие клиента и сервера</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.4.php">Установка таймаута</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.5.php">Отправка запросов по HTTP</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.6.php">http.Client</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Базы данных</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.1.php">Работа с реляционными база данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.2.php">MySQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.3.php">PostgreSQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.4.php">SQLite</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.5.php">MongoDB</a></span></li>
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
	
	$("li:contains('Глава 10.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 10.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 10.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 10.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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