<!DOCTYPE html>
<html >
<head>
<title>Flutter | TextField и TextFormField</title>
<meta charset="utf-8" />
<meta name="description" content="TextField и TextFormField во Flutter, ввод в текстовое поле, стилизация текста и поля ввода, обработка введенного текста, onChanged и onSubmitted">
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
<h2>TextField и TextFormField</h2><div class="date">Последнее обновление: 12.02.2021</div>

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

<p>Для ввода текста во Flutter может применяться виджет <span class="b">TextField</span>:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: TextField(),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}
</pre>
<img src="./pics/3.25.png" alt="Виджет TextField и ввод текста в Flutter" />
<p>Следует отметить, что для виджета TextField необходимо, чтобы один из родительских контейнеров представлял виджет 
<span class="b">Material</span> или такие виджеты, как <span class="b">Card, Dialog, Drawer</span> или 
<span class="b">Scaffold</span> (как в примере выше).</p>
<p>Конструктор виджета принимает довольно много параметров, поэтому отмечу лишь некоторые:</p>

<ul>
<li><p><span class="b">decoration</span>: задает стилизацию виджета с помощью объекта <span class="b">InputDecoration</span></p></li>
<li><p><span class="b">enabled</span>: значение типа <span class="b">bool</span>, которое указывает, доступно ли для ввода текстовое поле 
(при значении <code>false</code> поле для ввода недоступно)</p></li>
<li><p><span class="b">expands</span>: значение типа <span class="b">bool</span>, которое указывает, будет ли виджет заполнять все доступное пространство 
контейнера</p></li>
<li><p><span class="b">keyboardType</span>: устанавливает тип клавиатуры в виде объекта <span class="b">TextInputType</span></p></li>
<li><p><span class="b">maxLength</span>: максимальное количество символов, которое можно ввести в текстовое поле</p></li>
<li><p><span class="b">maxLines</span>: максимальное количество строк</p></li>
<li><p><span class="b">minLines</span>: минимальное количество строк</p></li>
<li><p><span class="b">obscureText</span>: значение типа <span class="b">bool</span>, которое указывает, будет ли виджет скрывать с помощью маски вводимые 
символы (например, при вводе пароля)</p></li>
<li><p><span class="b">obscuringCharacter</span>: задает символы, которые применяются в качестве маски для вводимых символов, 
если параметр <code>obscureText</code> равен <code>true</code>.</p></li>
<li><p><span class="b">readOnly</span>: значение типа <span class="b">bool</span>, которое указывает, можно ли изменять текст в виджете</p></li>
<li><p><span class="b">style</span>: стиль вводимого текста в виде объекта <span class="b">TextStyle</span></p></li>
<li><p><span class="b">textAlign</span>: задает горизонтальное выравнивание текста в виде объекта <span class="b">TextAlign</span></p></li>
<li><p><span class="b">textAlignVertical</span>: задает вертикальное выравнивание текста в виде объекта <span class="b">TextAlignVertical</span></p></li>
<li><p><span class="b">textDirection</span>: устанавливает направление текста с помощью объекта <span class="b">TextDirection</span></p></li>
</ul>
<p>Применим некоторые параметры:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: TextField(
            style: TextStyle(fontSize: 22, color: Colors.blue),
            maxLines: 10,
            minLines: 5),
        appBar: AppBar(title: Text("METANIT.COM")))
  ));
}
</pre>
<img src="./pics/3.30.png" alt="Miltiline TextField in Flutter" />
<h3>Оформление поля ввода</h3>
<p>С помощью параметра <span class="b">decoration</span>, который представляет объект <span class="b">InputDecoration</span>, 
можно стилизовать виджет TextField.</p>
<p>Некоторые основные параметры конструктора класса InputDecoration:</p>
<ul>
<li><p><span class="b">border</span>: устанавливает границу виджета в виде объекта <span class="b">InputBorder</span>. По умолчанию 
виджет имеет нижнюю границу. Если надо полностью убрать границу, то можно использовать значение <span class="b">InputBorder.none</span></p>
<p>Для создания границы можно принимать еще два класса: <span class="b">OutlineInputBorder</span> (создает границу вокруг элемента) и 
<span class="b">UnderlineInputBorder</span> (создает только нижнюю границу).</p></li>
<li><p><span class="b">contentPadding</span>: устанавливает отступы от границ виджета при вводе текста, 
представляет объект <span class="b">EdgeInsetsGeometry</span></p></li>
<li><p><span class="b">fillColor</span>: устанавливает объект <span class="b">Color</span> для заполнения виджета цветом</p></li>
<li><p><span class="b">filled</span>: значение типа <span class="b">bool</span>, которое указывает, будет ли применяться заполнение виджета цветом 
из параметра fillColor (заполнение цветом применяется при значении <code>true</code>)</p></li>
<li><p><span class="b">hintText</span>: приглашение для ввода текста, которое появляется в виджете при отсутствии в нем текста</p></li>
<li><p><span class="b">hintStyle</span>: стиль текста из параметра hintText в виде объекта <span class="b">TextStyle</span></p></li>
<li><p><span class="b">icon</span>: виджет (объект <span class="b">Widget</span>), который представляет иконку, отображаемую перед виджетом</p></li>
<li><p><span class="b">helperText</span>: вспомогательный текст, который появляется снизу справа от виджета и который указывает, как вводимое значение будет использоваться</p></li>
<li><p><span class="b">helperStyle</span>: стиль текста из параметра helperText в виде объекта <span class="b">TextStyle</span></p></li>
<li><p><span class="b">labelText</span>: текст метки, которая появляется сверхе виджета и описывает предназначение текстового поля</p></li>
<li><p><span class="b">labelStyle</span>: стиль текста из параметра labelText в виде объекта <span class="b">TextStyle</span></p></li>
</ul>
<p>Например, уберем границу, но добавим фоновый цвет виджета:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: TextField(decoration: InputDecoration(
            border: InputBorder.none,
            hintText: "Введите логин",
            fillColor: Colors.black12,
            filled: true
        )),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}
</pre>
<img src="./pics/3.26.png" alt="Граница виджета TextField и фоновый цвет в Flutter" />
<p>Теперь установим полную границу по всем сторонам и применим иконку:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

oid main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: TextField(decoration: InputDecoration(
            border: OutlineInputBorder(),
            icon: Icon(Icons.login),
            hintText: "Введите логин",
            helperText: "Логин используется для входа в систему",
        )),
        appBar: AppBar(title: Text("METANIT.COM")))
  ));
}
</pre>
<p>Конструктор класса <code>OutlineInputBorder</code> создает границу вокруг виджета. Параметр <code>helperText</code> устанавливает 
вспомогательный текст, который появляется снизу виджета. А параметр <code>icon</code> устанавливает в качестве иконки иконку <code>Icons.login</code> 
из коллекции встроенных иконок.</p>
<img src="./pics/3.27.png" alt="Граница ви иконка виджета TextField в Flutter" />
<h3>Обработка ввода текста</h3>
<p>С помощью параметров <span class="b">onChanged</span> и <span class="b">onSubmitted</span> конструктора мы можем установить функции, которые будут 
вызываться при вводе текста. Функция <span class="b">onChanged</span> вызывается при каждом изменении текста в виджете. Функция <span class="b">onSubmitted</span> 
вызывается, если пользователь завершил ввод, например, нажал кнопку ввода на клавиатуре.</p>
<p>Обе эти функции представляют функцию <code>void ValueChanged (String value)</code>, которая в качестве параметра принимает строку - введенный текст.</p>
<p>Простейшее применение:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: TextField(
            onSubmitted: (text) {
              print("onSubmitted");
              print("Введенный текст: $text");
            },
            onChanged: (text) {
              print("onChanged");
              print("Введенный текст: $text");
        }),
        appBar: AppBar(title: Text("METANIT.COM")))
  ));
}
</pre>
<img src="./pics/3.28.png" alt="Обработка ввода текста в TextField и onSubmitted и onChanged в Flutter" />
<p>Как видно из выполнения программы, функция <code>onChanged</code> вызывается при каждом изменении ввода - добавлении или удалении символа, 
тогда как функция <code>onSubmitted</code> срабатывает один раз при завершении.</p>
<p>Соответственно, используя данные функции, можно изменять состояние виджета:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
        body: Person(),
        appBar: AppBar(title: Text("METANIT.COM")))
  ));
}

class Person extends StatefulWidget {

  Person({ Key key}) : super(key: key);

  @override
  _PersonState createState() =&gt; _PersonState();
}
class _PersonState extends State&lt;Person&gt;{

  String _name = "Tom";

  _changeName(String text){
    setState(() =&gt;_name = text);
  }
  @override
  Widget build(BuildContext context) {

    return Column(children:[
      Text("Имя пользователя: $_name", style: TextStyle(fontSize: 22)),
      TextField(
        style: TextStyle(fontSize: 22),
        onChanged: _changeName)
    ],
    crossAxisAlignment: CrossAxisAlignment.start);
  }
}
</pre>
<p>В данном случае для виджета Person определен класс состояния _PersonState, который хранит имя условного пользователя в виде переменной 
<code>_name</code>. А при вызове функции <code>onChanged</code> будет выполнять метод <code>_changeName()</code>, в котором изменит значение 
переменной _name.</p>
<p>Для проверки ввода вводимое значение выводится в виджет Text, размещенный выше TextField.</p>
<img src="./pics/3.29.png" alt="Обработка ввода текста в TextField и onChanged и изменение состояния виджета в Flutter" />
<h3>TextFormField</h3>
<p>Виджет <span class="b">TextFormField</span> во многом аналогичен <code>TextField</code>, также представляет текстовое поле и предоставляет те же возможности за тем исключением, что он добавляет к параметрам конструктора 
параметр <span class="b">initialValue</span>, с помощью которого можно указать начальное значение в текстовом поле:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
          body: Person(),
          appBar: AppBar(title: Text("METANIT.COM")))
  ));
}

class Person extends StatefulWidget {

  Person({ Key key}) : super(key: key);

  @override
  _PersonState createState() =&gt; _PersonState();
}
class _PersonState extends State&lt;Person&gt;{

  String _name = "Tom";

  _changeName(String text){
    setState(() =&g; _name = text);
  }

  @override
  Widget build(BuildContext context) {

    return Column(children:[
      Text("Имя пользователя: $_name", style: TextStyle(fontSize: 22)),
      TextFormField(initialValue: _name,
          style: TextStyle(fontSize: 22),
          onChanged: _changeName)
    ],
        crossAxisAlignment: CrossAxisAlignment.start);
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


<div class="nav"><p><a href="./3.9.php">Назад</a><a href="./">Содержание</a><a href="./3.11.php">Вперед</a></p></div></div>
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