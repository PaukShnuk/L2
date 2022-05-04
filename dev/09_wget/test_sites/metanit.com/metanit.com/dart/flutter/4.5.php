<!DOCTYPE html>
<html >
<head>
<title>Flutter | ListTile</title>
<meta charset="utf-8" />
<meta name="description" content="Создание элементов для списка ListView с помощью виджета ListTile во Flutter, обработка выделения и выбора элемента, добавление иконок, onTap, trailing, leading, subtitle">
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
<h2>ListTile</h2><div class="date">Последнее обновление: 19.02.2021</div>

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

<p>Хотя в качестве элементов в ListView мы можем использовать различные виджеты, например, Container или Text, 
но более удобно использовать специально предназначенный виджет ListTile. <span class="b">ListTile</span> представляет 
строку фиксированной высоты, которая обычно содержит некоторый текст и иконку, хотя это необязательно.</p>
<p>ListTile имеет следующий конструктор:</p>
<pre class="brush:dart;">
ListTile({Key key, Widget leading, Widget title, Widget subtitle, Widget trailing, bool isThreeLine: false, 
bool dense, VisualDensity visualDensity, ShapeBorder shape, EdgeInsetsGeometry contentPadding, 
bool enabled: true, GestureTapCallback onTap, GestureLongPressCallback onLongPress, MouseCursor mouseCursor, 
bool selected: false, Color focusColor, Color hoverColor, FocusNode focusNode, bool autofocus: false, 
Color tileColor, Color selectedTileColor})
</pre>
<p>Основные параметры конструктора:</p>
<ul>
<li><p><span class="b">autofocus</span>: представляет тип <code>bool</code> и указывает, получит ли данный виджет фокус (при значении <code>true</code>)</p></li>
<li><p><span class="b">contentPadding</span>: устанавливает внутренние отступы между содержимым и границами контейнера в виде 
объекта <code>EdgeInsetsGeometry</code></p></li>
<li><p><span class="b">enabled</span>: представляет тип <code>bool</code> и указывает, доступен ли элемент для взаимодействия</p></li>
<li><p><span class="b">focusColor</span>: устанавливает цвет Color, который принимает виджет при получении фокуса</p></li>

<li><p><span class="b">hoverColor</span>: устанавливает цвет Color, который принимает виджет при наведении указателя мыши</p></li>
<li><p><span class="b">isThreeLine</span>: представляет тип <code>bool</code> и указывает, будет ли элемент списка 
содержать трехстрочный текст</p></li>
<li><p><span class="b">leading</span>: виджет, который помещается перед элементом списка</p></li>

<li><p><span class="b">mouseCursor</span>: форма курсора, которую получает указатель мыши при наведении на данный элемент списка. 
Представляет тип MouseCursor</p></li>
<li><p><span class="b">onLongPress</span>: функция типа <code>GestureLongPressCallback</code>, которая вызывается при 
долгом нажатии на данный элемент списка</p></li>
<li><p><span class="b">onTap</span>: функция типа <code>GestureTapCallback</code>, которая вызывается при 
нажатии на данный элемент списка</p></li>
<li><p><span class="b">selected</span>: представляет тип <code>bool</code> и указывает, будет ли выделен данный 
элемент списка</p></li>
<li><p><span class="b">selectedTileColor</span>: устанавливает цвет, который получит ListTile 
при выделении</p></li>
<li><p><span class="b">subtitle</span>: устанавливает дополнительный виджет, который располагается под основным содержимым</p></li>
<li><p><span class="b">tileColor</span>: устанавливает цвет ListTile, когда виджет не выделен</p></li>
<li><p><span class="b">title</span>: устанавливает виджет, который представляет основное содержимое ListTile</p></li>
<li><p><span class="b">trailing</span>: устанавливает виджет, который отображается после основного содержимого</p></li>
</ul>
<p>Основное содержимое в ListTile задается с помощью параметра <span class="b">title</span>, в качестве которого может 
выступать любой виджет, но чаще всего применяется виджет Text:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

final List&lt;String&gt; users = ["Tom", "Alice", "Sam", "Bob", "Kate"];
void main() {
  runApp(MaterialApp(
      home:  Scaffold(
      body: ListView.separated(
          padding: const EdgeInsets.all(8),
          itemCount: users.length,
          separatorBuilder: (BuildContext context, int index) =&gt; Divider(),
          itemBuilder: (BuildContext context, int index) {
            return ListTile(title: Text(users[index], style:TextStyle(fontSize: 22)));
          }
      ),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}
</pre>
<img src="./pics/4.12.png" alt="ListTile в ListView в Flutter" />


<p>С помощью параметра <span class="b">leading</span> можно установить виджет, который будет отображаться перед виджетом из параметра 
<code>title</code>. Например, отобразим перед основным содержимым иконку:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

final List&lt;String&gt; users = ["Tom", "Bob", "Sam", "Mike"];
final List<IconData> icons = [Icons.face, Icons.tag_faces, Icons.work, Icons.book];

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
      body: ListView.separated(
          padding: const EdgeInsets.all(8),
          itemCount: users.length,
          separatorBuilder: (BuildContext context, int index) =&gt; Divider(),
          itemBuilder: (BuildContext context, int index) {
            return ListTile(
                title: Text(users[index], style:TextStyle(fontSize: 22)),
                leading: Icon(icons[index]),
            );
          }
      ),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}
</pre>
<p>В данном случае использованы встроенные иконки, которые представляют объект <span class="b">IconData</span> и 
которые передаются в виджет <span class="b">Icon()</span> для отображения слева от заголовка ListTile:</p>
<img src="./pics/4.13.png" alt="Icons в ListTile в ListView в Flutter" />
<p>Или, к примеру, добавим параметры <code>trailing</code> и <code>subtitle</code>, которые устанавливают соответственно 
виджеты после виджета <code>title</code> и под ним:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

final List&lt;String&gt; users = ["Tom", "Bob", "Sam", "Mike"];
final List&lt;String&gt; companies = ["Google", "Microsoft", "Apple", "JetBrains"];

void main() {
  runApp(MaterialApp(
      home:  Scaffold(
      body: ListView.separated(
          padding: const EdgeInsets.all(8),
          itemCount: users.length,
          separatorBuilder: (BuildContext context, int index) =&gt; Divider(),
          itemBuilder: (BuildContext context, int index) {
            return ListTile(
                title: Text(users[index], style:TextStyle(fontSize: 22)),
                leading: Icon(Icons.face),
                trailing: Icon(Icons.phone),
                subtitle: Text("Works in ${companies[index]}")
            );
          }
      ),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}
</pre>
<img src="./pics/4.14.png" alt="subtitle и trailing в ListTile в ListView в Flutter" />
<h3>Обработка выбора элемента</h3>
<p>ListTile с помощью параметров <code>onTap</code> и <code>nLongPress</code> позволяет задать обработчики нажатия. 
В целом техника выбора элемента похожа на ту, что была описана в прошлой теме. В частности, определим следующий код:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
        home:  Scaffold(
        body: UsersList(),
        appBar: AppBar(title: Text("METANIT.COM")),)
  ));
}

class UsersList extends StatefulWidget {
  @override
  _UsersListState createState() =&gt; _UsersListState();
}
class _UsersListState extends State<UsersList> {
  final List&lt;String&gt; _users = ["Tom", "Alice", "Sam", "Bob", "Kate"];
  int _selectedIndex = -1;

  @override
  Widget build(BuildContext context) {
    return Column(
      crossAxisAlignment: CrossAxisAlignment.start,
        children: [
        Text(
            _selectedIndex==-1?"Не выбрано": "Выбрано: ${_users[_selectedIndex]}",
            style: TextStyle(fontSize: 30)),
        Expanded(child: ListView.builder(
          itemCount: _users.length,
          itemBuilder: (BuildContext context, int index) =&gt;
              ListTile(
                onTap: () {
                  setState(() {
                    // устанавливаем индекс выделенного элемента
                    _selectedIndex = index;
                  });
                },
                title: Text(_users[index], style: TextStyle(fontSize: 24)),
                selected: index == _selectedIndex,
                selectedTileColor: Colors.black12,
              ),
        ))
      ]);
  }
}
</pre>
<p>В данном случае ListView инкапсулирован в отдельном виджете UsersList. В классе состояния виджета _UsersListState определяем 
данные, которые будут отображаться в ListView - список users и переменную <code>_selectedIndex</code> для отслеживания индекса выбранного 
элемента. По умолчанию <code>_selectedIndex</code> равен -1 для индикации, что на начальном этапе ни одного элемента не выбрано.</p>
<p>С помощью параметра <code>onTap</code> в конструкторе ListTile изменяем состояние - изменяем индекс выбранного элемента:</p>
<pre class="brush:dart;">
onTap: () {
  setState(() {
    // устанавливаем индекс выделенного элемента
    _selectedIndex = index;
  });
},
</pre>
<p>Чтобы указать, что элемент выделен, устанавливаем параметр <span class="b">selected</span>:</p>
<pre class="brush:dart;">selected: index == _selectedIndex,</pre>
<p>И, кроме того, мы можем установить цвет выделенного элемента с помощью параметра <code>selectedTileColor</code>:</p>
<pre class="brush:dart;">selectedTileColor: Colors.black12,</pre>
<p>Результат работы программы:</p>
<img src="./pics/4.15.png" alt="select и onTap в ListTile в ListView в Flutter" />
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


<div class="nav"><p><a href="./4.4.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 4.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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