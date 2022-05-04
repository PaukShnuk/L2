<!DOCTYPE html>
<html >
<head>
<title>Flutter | StatefulWidget и состояние State</title>
<meta charset="utf-8" />
<meta name="description" content="StatefulWidget и создание своих виджетов во Flutter, определение и хранение состояния State, изменение состояния с помощью функции State.setState">
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
<h2>StatefulWidget и состояние State</h2><div class="date">Последнее обновление: 05.02.2021</div>

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

<p>Класс <span class="b">StatefulWidget</span> предназначен для создания виджетов, которые хранят состояние. При этом 
несмотря на то, что объекты класса StatefulWidget являются неизменяемыми (immutable), их состояние является изменяемым (mutable).</p>
<p>Что представляет собой состояние? Состояние - это некоторая информация, которая может быть считана синхронно 
при создании виджета и которая в процессе жизненного цикла виджета может измениться. Состояние может храниться в виде отдельных объектов State, либо в других объектах, на которые объект State 
подписывается.</p> 
<p>Объекты State создаются с помощью метода <span class="b">createState</span>, который вызывается фреймворком и 
который связывает их с виджетом StatefulWidget.</p>
<p>Например, определим простейший виджет StatefulWidget:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: Counter(),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}

class Counter extends StatefulWidget{
  Counter({ Key key}) : super(key: key);
  @override
  _CounterState createState() =&gt; _CounterState();
}
class _CounterState extends State&lt;Counter&gt;{

  int value = 0;

  @override
  Widget build(BuildContext context) {

    return Text(
      "Value: $value", style: TextStyle(fontSize: 22),
    );
  }
}
</pre>
<p>Итак,здесь определен класс Counter, который наследуется от StatefulWidget.</p>
<p>Его конструктор содержит один параметр - key, хотя при необходимости мы можем определять какие-то другие параметры, 
исходя из наших потребностей.</p>
<p>Также класс виджета должен переопределить метод <span class="b">createState()</span>, который должен возвращать 
состояние для этого виджета</p>
<pre class="brush:dart;">
@override
_CounterState createState() =&gt; _CounterState();
</pre>
<p>В данном случае это объект класса <code>_CounterState</code>. (Классы или члены классов, которые предваряются знаком прочерка (_), являются приватными по отношению к классам из других 
библиотек.)</p>
<p>Сам класс состояния унаследован от класса <span class="b">State</span>, который типизирован классом класса виджета.</p>
<pre class="brush:dart;">
class _CounterState extends State&lt;Counter&gt;{
</pre>
<p>В самом классе определена переменная <code>value</code>, которая условно представляет данные, которые хранит класс состояния.</p>
<pre class="brush:dart;">
int value = 0;
</pre>
<p>Также нам надо переопределить метод <span class="b">build()</span>, который возвращает виджет:</p>
<pre class="brush:dart;">
Widget build(BuildContext context) {

return Text(
  "Value: $value", style: TextStyle(fontSize: 22),
);
}
</pre>
<p>Здесь мы просто возвращаем виджет <code>Text</code>, который выводит значение переменной  <code>value</code>. Но естественно 
возвращаемая иерархия виджетов может быть более сложной.</p>
<p>Затем виджет Counter встравивается в приложение в элемент Scaffold:</p>
<pre class="brush:dart;">
void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: Counter(),
</pre>
<p>В итоге при запуске приложения мы увидим текст со значением переменной value</p>
<img src="./pics/3.22.png" alt="StatefulWidget в Flutter" />
<p>Но ключевая идея StatefulWidget  состоит в том, что мы можем менять его состояние. Поэтому добавим изменение 
переменной value по нажатию на кнопку:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: Counter(),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}
class Counter extends StatefulWidget{
  Counter({ Key key}) : super(key: key);
  @override
  _CounterState createState() =&gt; _CounterState();
}
class _CounterState extends State&lt;Counter&gt;{

  int value = 0;

  @override
  Widget build(BuildContext context) {

    return ElevatedButton(
        child: Text("Value: $value", style: TextStyle(fontSize: 22)),
        onPressed:(){ setState(() {
          value++;
        });}
    );
  }
}
</pre>
<p>Теперь для простоты значение переменной value выводится в качестве текста на кнопку. При нажатии на кнопку будет 
вызываться функция, которая увеличит значение value на единицу. Чтобы указать, что состояние изменилось, виджет 
вызывает метод <span class="b">State.setState()</span>. В этот метод передается функция, которая не принимает параметров и 
ничего не возвращает. И именно в ней мы можем изменить значение value.</p>
<p>В итоге по нажатию на кнопку увеличится значение переменной value:</p>
<img src="./pics/3.23.png" alt="StatefulWidget и изменение состояния State с помощью метода State.setState в Flutter" />
<h3>Передача данных в State</h3>
<p>При необходимости в объект State можно передавать данные извне. В этом случае передача осуществляется через 
 StatefulWidget. Например, изменим выше приведенный пример таким образом, чтобы State принимал начальные данные извне:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: Column(children:[
          Counter(value: 4, increment: 2),
          Counter(value:-1, increment: 1)
        ]),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}
class Counter extends StatefulWidget{

  int value = 0;
  int increment = 1;

  Counter({ Key key, this.value, this.increment}) : super(key: key);
  @override
  _CounterState createState() =&gt; _CounterState(this.value, this.increment);
}
class _CounterState extends State&lt;Counter&gt;{

  int value = 0;
  int increment = 1;

  _CounterState(this.value, this.increment);

  @override
  Widget build(BuildContext context) {

    return ElevatedButton(
        child: Text("Value: $value", style: TextStyle(fontSize: 22)),
        onPressed:(){ setState(() {
          value = value + increment;
        });}
    );
  }
}
</pre>
<p>В данном случае в State добавлена новая переменная <code>increment</code>, на которую увеличивается значение переменной 
value. Для получения извне значений для этих переменных определен конструктор <code>_CounterState(this.value, this.increment)</code></p>
<p>При создании объекта State виджет Counter передает в конструктор соответствующие данные:</p>
<pre class="brush:dart;">_CounterState createState() =&gt; _CounterState(this.value, this.increment);</pre>
<p>При этом эти значения виджет Counter сам принимает извне с помощью своего конструктора:</p>
<pre class="brush:dart;">Counter({ Key key, this.value, this.increment}) : super(key: key);</pre>
<p>В итоге при применении виджета мы можем передавать в него различные данные:</p>
<pre class="brush:dart;">
Column(children:[
  Counter(value: 4, increment: 2),
  Counter(value:-1, increment: 1)
])
</pre>
<img src="./pics/3.24.png" alt="Передача данных в StatefulWidget и State и метод State.setState в Flutter" />
<h3>Получение виджета</h3>
<p>С помощью свойства <span class="b">widget</span> внутри State можно обращаться к виджету StatefulWidget, к которому 
привязан объект State:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: Column(children:[
          Counter(increment: 2),
          Counter(increment: 1),
        ]),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}
class Counter extends StatefulWidget{

  int increment = 1;

  Counter({ Key key, this.increment}) : super(key: key);
  @override
  _CounterState createState() =&gt; _CounterState();
}
class _CounterState extends State&lt;Counter&gt;{

  int value = 0;

  @override
  Widget build(BuildContext context) {

    return ElevatedButton(
        child: Text("Value: $value", style: TextStyle(fontSize: 22)),
        onPressed:(){ setState(() {
          value = value + widget.increment;
        });}
    );
  }
}
</pre>
<p>В данном случае переменная increment определена только внутри класса Counter, и чтобы к ней обратиться, применяется 
выражение <code>widget.increment</code>, где <code>widget</code> - это виджет Counter. Подобным образом можно обращаться к 
другим полям и методам из виджета при их наличии.</p>
<h3>Вынос логики изменения состояния в метод</h3>
<p>В примерах выше вся логика изменения состояния сосредоточена в функции из <code>onPressed</code>. Но 
все эти действия также можно вынести в отдельный метод:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: Column(children:[
          Counter(increment: 2),
          Counter(increment: 1),
        ]),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}
class Counter extends StatefulWidget{

  int increment = 1;

  Counter({ Key key, this.increment}) : super(key: key);
  @override
  _CounterState createState() =&gt; _CounterState();
}
class _CounterState extends State&lt;Counter&gt;{

  int value = 0;

  increaseValue(){
    setState(() {
      value = value + widget.increment;
    });
  }
  @override
  Widget build(BuildContext context) {

    return ElevatedButton(
        child: Text("Value: $value", style: TextStyle(fontSize: 22)),
        onPressed:(){ increaseValue();}
    );
  }
}
</pre>
<p>Если метод, в который вынесены все действия, ничего не возвращает и не принимает никаких параметров, то есть соответствует 
определению <code>onPressed</code> (как в данном случае), то можно напрямую присвоить функцию параметру onPressed:</p>
<pre class="brush:dart;">
ElevatedButton(
        child: Text("Value: $value", style: TextStyle(fontSize: 22)),
        onPressed: increaseValue
);
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


<div class="nav"><p><a href="./3.7.php">Назад</a><a href="./">Содержание</a><a href="./3.9.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в Flutter</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.1.php">Что такое Flutter. Установка</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.2.php">Первое приложение</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.3.php">Создание приложения в Android Studio</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.4.php">Первое приложение в Visual Studio Code</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.5.php">Первое приложение на Flutter в Windows</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.1.php">Введение в виджеты</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Контейнеры и управление компоновкой</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.2.php">Align</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.3.php">Center</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.4.php">Padding</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.5.php">ConstrainedBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.6.php">Container</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.7.php">Column</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.8.php">Row</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.9.php">Expanded</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Встроенные виджеты и создание своих виджетов</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.1.php">Text</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.2.php">RichText</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.3.php">Stack</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.4.php">StatelessWidget</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.5.php">MaterialApp и Scaffold</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.6.php">Image и вывод изображений</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.7.php">Кнопка ElevatedButton</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.8.php">StatefulWidget и состояние State</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.9.php">GestureDetector и обработка нажатий</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.10.php">TextField и TextFormField</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.11.php">TextEditingController</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Списки в Flutter</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.1.php">Виджет ListView</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.2.php">Динамическое создание ListView</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.3.php">Добавление в список разделителя</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.4.php">Выбор элемента в списке</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.5.php">ListTile</a></span></li>
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