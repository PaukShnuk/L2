<!DOCTYPE html>
<html >
<head>
<title>Java и Android | Работа с ресурсами</title>
<meta charset="utf-8" />
<meta name="description" content="Работа с ресурсами в Android, получение и использование ресурсов в коде java и в xml">
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
<h1>Ресурсы</h1><h2>Работа с ресурсами</h2><div class="date">Последнее обновление: 15.10.2021</div>

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

<p>Ресурс в приложении Android представляет собой файл, например, файл разметки интерфейса или некоторое значение, например, 
простую строку. То есть ресурсы представляют собой и файлы разметки, и отдельные строки, и звуковые файлы, файлы изображений и т.д. 
Все ресурсы находятся в проекте в каталоге <span class="b">res</span>. Для различных типов ресурсов, определенных в проекте, в каталоге <span class="b">res</span> 
создаются подкаталоги. Поддерживаемые подкаталоги:</p>
<ul>
<li><p><span class="b">animator/</span>: xml-файлы, определяющие анимацию свойств</p></li>
<li><p><span class="b">anim/</span>: xml-файлы, определяющие tween-анимацию</p></li>
<li><p><span class="b">color/</span>: xml-файлы, определяющие список цветов</p></li>
<li><p><span class="b">drawable/</span>: Графические файлы (<span class="ii">.png</span>, <span class="ii">.jpg</span>, <span class="ii">.gif</span>)</p></li>
<li><p><span class="b">mipmap/</span>: Графические файлы, используемые для иконок приложения под различные разрешения экранов</p></li>
<li><p><span class="b">layout/</span>: xml-файлы, определяющие пользовательский интерфейс приложения</p></li>
<li><p><span class="b">menu/</span>: xml-файлы, определяющие меню приложения</p></li>
<li><p><span class="b">raw/</span>: различные файлы, которые сохраняются в исходном виде</p></li>
<li><p><span class="b">values/</span>: xml-файлы, которые содержат различные используемые в приложении значения, например, ресурсы строк</p></li>
<li><p><span class="b">xml/</span>: Произвольные xml-файлы</p></li>
<li><p><span class="b">font/</span>: файлы с определениями шрифтом и расширениями .ttf, .otf или .ttc, либо файлы XML, 
который содержат элемент <code>&lt;font-family&gt;</code></p></li>
</ul>
<p>В общей сложности мы можем определить следующие типы ресурсов:</p>
<table class="tab">
<tr class="tabhead"><td><p>Ресурс</p></td><td><p>Каталог проекта</p></td><td><p>Файл</p></td><td><p>элемент в файле</p></td></tr>
<tr><td><p>Строки</p></td><td><p>/res/values/</p></td><td><p>strings.xml</p></td><td><p>&lt;string&gt;</p></td></tr>
<tr><td><p>Plurals</p></td><td><p>/res/values/</p></td><td><p>strings.xml</p></td><td><p>&lt;plurals&gt;</p></td></tr>
<tr><td><p>Массивы строк</p></td><td><p>/res/values/</p></td><td><p>strings.xml или arrays.xml</p></td><td><p>&lt;string-array&gt;</p></td></tr>
<tr><td><p>Логические значения Boolean</p></td><td><p>/res/values/</p></td><td><p>bools.xml</p></td><td><p>&lt;bool&gt;</p></td></tr>
<tr><td><p>Цвета</p></td><td><p>/res/values/</p></td><td><p>colors.xml</p></td><td><p>&lt;color&gt;</p></td></tr>
<tr><td><p>Список цветов</p></td><td><p>/res/color/</p></td><td><p>Произвольное название</p></td><td><p>&lt;selector&gt;</p></td></tr>
<tr><td><p>Размеры (Dimensions)</p></td><td><p>/res/values/</p></td><td><p>dimens.xml</p></td><td><p>&lt;dimen&gt;</p></td></tr>
<tr><td><p>Идентификаторы ID</p></td><td><p>/res/values/</p></td><td><p>ids.xml</p></td><td><p>&lt;item&gt;</p></td></tr>
<tr><td><p>Целые числа</p></td><td><p>/res/values/</p></td><td><p>integers.xml</p></td><td><p>&lt;integer&gt;</p></td></tr>
<tr><td><p>Массив целых чисел</p></td><td><p>/res/values/</p></td><td><p>integers.xml</p></td><td><p>&lt;integer-array&gt;</p></td></tr>
<tr><td><p>Графические файлы</p></td><td><p>/res/drawable/</p></td><td><p>Файлы с расширением jpg и png</p></td><td><p>-</p></td></tr>
<tr><td><p>Tween-анимация</p></td><td><p>/res/anim/</p></td><td><p>Файл xml с произвольным названием</p></td><td><p>&lt;set&gt;, &lt;alpha&gt;, &lt;rotate&gt;, &lt;scale&gt;, &lt;translate&gt;</p></td></tr>
<tr><td><p>Покадровая анимация</p></td><td><p>/res/drawable/</p></td><td><p>Файл xml с произвольным названием</p></td><td><p>&lt;animation-list&gt;</p></td></tr>
<tr><td><p>Анимация свойств</p></td><td><p>/res/animator/</p></td><td><p>Файл xml с произвольным названием</p></td><td><p>&lt;set&gt;, &lt;objectAnimator&gt;, &lt;valueAnimator&gt;</p></td></tr>
<tr><td><p>Меню</p></td><td><p>/res/menu/</p></td><td><p>Файл xml с произвольным названием</p></td><td><p>&lt;menu&gt;</p></td></tr>
<tr><td><p>XML-файлы</p></td><td><p>/res/xml/</p></td><td><p>Файл xml с произвольным названием</p></td><td><p></p></td></tr>
<tr><td><p>Бинарные и текстовые ресурсы</p></td><td><p>/res/raw/</p></td><td><p>Файлы мультимедиа (mp3, mp4), текстовые и другие файлы</p></td><td><p></p></td></tr>
<tr><td><p>Разметка графического интерфейса</p></td><td><p>/res/layout/</p></td><td><p>Файл xml с произвольным названием</p></td><td><p></p></td></tr>
<tr><td><p>Стили и темы</p></td><td><p>/res/values/</p></td><td><p>styles.xml, themes.xml</p></td><td><p>&lt;style&gt;</p></td></tr>
</table>
<p>К примеру, если мы возьмем стандартный проект Android Studio, который создается по умолчанию, то там можем заметить наличие уже нескольких папок для различных 
ресурсов в каталоге <span class="ii">res</span>:</p>
<img src="./pics/2.1.png" alt="Ресурсы в Android Studio" />
<p>По умолчанию здесь есть каталоги не для всех типов ресурсов, которые использоваться в Android, однако при необходимости мы можем добавить в папку 
<span class="b">res</span> нужный каталог, а в него затем поместить ресурс.</p>
<p>Когда происходит компиляция проекта сведения обо всех ресурсах добавляются в специальный файл <span class="b">R.jar</span>, который затем используется 
при работе с ресурсами</p>
<h3>Применение ресурсов</h3>
<p>Существует два способа доступа к ресурсам: в файле исходного кода и в файле xml.</p>
<h4>Ссылка на ресурсы в коде</h4>
<p>Тип ресурса в данной записи ссылается на одно из пространств (вложенных классов), определенных в файле R.java, 
которые имеют соответствующие им типы в xml:</p>
<ul>
<li><p><code>R.drawable</code> (ему соответствует тип в xml <code>drawable</code>)</p></li>
<li><p><code>R.id</code> (<code>id</code>)</p></li>
<li><p><code>R.layout</code> (<code>layout</code>)</p></li>
<li><p><code>R.string</code> (<code>string</code>)</p></li>
<li><p><code>R.attr</code> (<code>attr</code>)</p></li>
<li><p><code>R.plural</code> (<code>plurals</code>)</p></li>
<li><p><code>R.array</code> (<code>string-array</code>)</p></li>
</ul>
<p>Например, для установки ресурса activity_main.xml в качестве графического интерфейса в коде MainActivity в методе <code>onCreate()</code> есть такая строка:</p>
<pre class="brush:java;">setContentView(R.layout.activity_main);</pre>
<p>Через выражение <code>R.layout.activity_main</code> мы и ссылаемся на ресурс activity_main.xml, где <code>layout</code> - тип ресурса, а <code>activity_main</code> - имя ресурса.</p>
<p>Подобным образом мы можем получать другие ресурсы. Например, в файле <span class="b">res/values/strings.xml</span> определен ресурс app_name:</p>
<pre class="brush:xml;">
&lt;resources&gt;
    &lt;string name="app_name"&gt;ViewApp&lt;/string&gt;
&lt;/resources&gt;
</pre>
<p>Этот ресурс ссылается на строку. Чтобы получить ссылку на данный ресурс в коде java, мы можем использовать выражение <code>R.string.app_name</code>.</p>
<h3>Доступ в файле xml</h3>
<p>Нередко возникает необходимость ссылаться на ресурс в файле xml, например, в файле, который определяет визуальный интерфейс, к примеру, в 
activity_main.xml. Ссылки на ресурсы в файлах xml имеют следующую формализованную форму: <code>@[имя_пакета:]тип_ресурса/имя_ресурса</code></p>
<ul>
  <li><p><code>имя_пакета</code> представляет имя пакета, в котором ресурс находится (указывать необязательно, если ресурс находится в том же пакете)</p></li>
  <li><p><code>тип_ресурса</code> представляет подкласс, определенный в классе <code>R</code> для типа ресурса</p></li>
  <li><p><code>имя_ресурса</code> имя файла ресурса без расширения или значение атрибута <code>android:name</code> в XML-элементе 
  (для простых значений).</p></li>
</ul>
<p>Например, мы хотим вывести в элемент TextView строку, которая определена в виде ресурса в файле strings.xml:</p>
<pre class="brush:xml;">
&lt;TextView
        android:id="@+id/textView"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="@string/app_name" /&gt;
</pre>
<p>В данном случае свойство <code>text</code> в качестве значения будет получать значение строкового ресурса app_name.</p>
<h3>Метод getResources</h3>
<p>Для получения ресурсов в классе Activity мы можем использовать метод <span class="b">getResources()</span>, который возвращает объект 
<span class="b">android.content.res.Resources</span>. Но чтобы получить сам ресурс, нам надо у полученного объекта Resources вызвать один из методов. Некоторые из его методов:</p>
<ul>
<li><p><span class="b">getString()</span>: возвращает строку из файла strings.xml по числовому идентификатору</p></li>
<li><p><span class="b">getDimension()</span>: возвращает числовое значение - ресурс dimen</p></li>
<li><p><span class="b">getDrawable()</span>: возвращает графический файл в виде объекта Drawable</p></li>
<li><p><span class="b">getBoolean()</span>: возвращает значение boolean</p></li>
<li><p><span class="b">getColor()</span>: возвращает определение цвета</p></li>
<li><p><span class="b">getColorStateList()</span>: возвращает объект ColorStateList - набор цветов</p></li>
<li><p><span class="b">getFont()</span>: возвращает определение шрифта в виде объекта Typeface</p></li>
<li><p><span class="b">getFloat()</span>: возвращает значение float</p></li>
<li><p><span class="b">getLayout()</span>: возвращает объект XmlResourceParser, связанный с файлом layout</p></li>
</ul>
<p>Это только некоторые методы. Но все они в качестве параметра принимают идентификатор ресурса, который надо получить. Вкратце рассмотрим их 
применение. Возьмем тот же файл <span class="b">res/values/strings.xml</span> в качестве источника ресурсов, который в моем случае выглядит так:</p>
<pre class="brush:xml;">
&lt;resources&gt;
    &lt;string name="app_name"&gt;ViewApp&lt;/string&gt;
&lt;/resources&gt;
</pre>
<p>И изменим код MainActivity:</p>
<pre class="brush:java;">
package com.example.viewapp;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        //setContentView(R.layout.activity_main);
        // получение ресурсов из файла values/strings.xml
        String app_name = getResources().getString(R.string.app_name);

        TextView textView = new TextView(this);
        textView.setTextSize(30);
        textView.setText(app_name);

        setContentView(textView);

    }
}
</pre>
<p>Здесь, используя метод <code>getResources()</code> получаем все ресурсы и затем используем их для устаноки значений свойств графических 
элементов. При запуске приложения мы увидим применение полученных ресурсов:</p>
<img src="./pics/2.4.png" alt="Использование ресурсов в Android Studio" />
<p>Подобным образом мы можем программно получать и другие ресурсы и использоват их в приложении. 
Однако следует отметить, что в данном случае нам не нужно использовать метод <code>getResources()</code> и вообще производить какие-то определенные действия по получению ресурса, 
поскольку метод <code>setText()</code> класса TextView поддерживает прямую установку текста по идентификатору ресурса:</p>
<pre class="brush:java;">
textView.setText(R.string.app_name);
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


<div class="nav"><p><a href="./2.1.php">Назад</a><a href="./">Содержание</a><a href="./2.5.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Начало работы с Android</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/1.1.php">Введение. Установка Android Studio и Android SDK</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/1.2.php">Первый проект в Android Studio</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/1.3.php">Создание графического интерфейса</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Основы создания интерфейса</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/3.1.php">Создание интерфейса в коде java</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.8.php">Определение интерфейса в файле XML. Файлы layout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.13.php">Определение размеров</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.9.php">Ширина и высота элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.10.php">Внутренние и внешние отступы</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.8.php">ConstraintLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.7.php">Размеры элементов в ConstraintLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.15.php">Цепочки элементов в ConstraintLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.16.php">Программное создание ConstraintLayout и позиционионирование</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.2.php">LinearLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.3.php">RelativeLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.4.php">TableLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.5.php">FrameLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.6.php">GridLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.11.php">ScrollView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.14.php">Вложенные layout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.12.php">Gravity и позиционирование внутри элемента</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Основные элементы управления</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/4.1.php">TextView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.8.php">EditText</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.9.php">Button</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.13.php">Приложение Калькулятор</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.10.php">Всплывающие окна. Toast</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.14.php">Snackbar</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.3.php">Checkbox</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.11.php">ToggleButton</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.12.php">RadioButton</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.4.php">DatePicker</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.16.php">TimePicker</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.7.php">Ползунок SeekBar</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Ресурсы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/2.4.php">Работа с ресурсами</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.5.php">Ресурсы строк</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.6.php">Ресурсы dimension</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.7.php">Ресурсы Color и установка цвета</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Activity</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/2.1.php">Activity и жизненный цикл приложения</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.3.php">Файл манифеста AndroidManifest.xml</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.2.php">Введение в Intent. Запуск Activity</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.12.php">Передача данных между Activity. Сериализация</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.13.php">Parcelable</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.11.php">Получение результата из Activity</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.10.php">Взаимодействие между Activity</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. Работа с изображениями</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/2.9.php">Ресурсы изображений</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.5.php">ImageView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.15.php">Изображения из папки assets</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Адаптеры и списки</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/5.1.php">ListView и ArrayAdapter</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.7.php">Ресурс string-array и ListView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.2.php">Выбор элемента в ListView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.9.php">Добавление и удаление в ArrayAdapter и ListView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.6.php">Расширение списков и создание адаптера</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.8.php">Оптимизация адаптера и View Holder</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.10.php">Сложный список с кнопками</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.3.php">ListActivity</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.4.php">Выпадающий список Spinner</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.2.php">Виджет автодополнения AutoCompleteTextView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.5.php">GridView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.11.php">RecyclerView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.12.php">Обработка выбора элемента в RecyclerView</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 8. Стили и темы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/6.1.php">Стили</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/6.2.php">Темы</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 9. Меню</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/7.1.php">Создание меню</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/7.2.php">Группы в меню и подменю</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 10. Фрагменты</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/8.1.php">Введение во фрагменты</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/8.3.php">Жизненный цикл фрагментов</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/8.5.php">Взаимодействие между фрагментами</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/8.2.php">Фрагменты в альбомном и портретном режиме</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 11. Многопоточность</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/10.1.php">Создание потоков и визуальный интерфейс</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/10.2.php">Потоки, фрагменты и ViewModel</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/10.3.php">Класс AsyncTask</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/10.4.php">AsyncTask и фрагменты</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 12. Работа с сетью. WebView</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/4.6.php">WebView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/15.1.php">Загрузка данных и класс HttpURLConnection</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 13. Работа с мультимедиа</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/11.1.php">Работа с видео</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/11.2.php">Воспроизведение аудио</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 14. Настройки и состояние приложения</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/12.3.php">Сохранение состояния приложения</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/12.1.php">Создание и получение настроек SharedPreferences</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/12.2.php">PreferenceFragmentCompat</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 15. Работа с файловой системой</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/13.1.php">Чтение и сохранение файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/13.2.php">Размещение файлов во внешнем хранилище</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 16. Работа с базами данных SQLite</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/14.5.php">Подключение к базе данных SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.1.php">SQLiteOpenHelper и SimpleCursorAdapter, получение данных из SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.2.php">Добавление, удаление и обновление данных в SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.3.php">Использование существующей БД SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.4.php">Динамический поиск по базе данных SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.6.php">Модель, репозиторий и работа с базой данных</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 17. Перелистывание страниц и ViewPager2</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/9.1.php">ViewPager2 и разделение приложения на страницы</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/9.2.php">Заголовки страниц и TabLayout</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 18. Сервисы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/16.1.php">Введение в сервисы Android</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 19. Диалоговые окна</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/18.1.php">DatePickerDialog и TimePickerDialog</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/18.2.php">DialogFragment и создание своих диалоговых окон</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/18.3.php">Передача данных в диалоговое окно</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/18.4.php">Взаимодействие диалогового окна с Activity</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 20. Анимация</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/19.1.php">Cell-анимация</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/19.2.php">Tween-анимация</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 21. Провайдеры контента</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/20.1.php#contacts">Работа с контактами</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.2.php">Добавление контактов</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.3.php">Создание провайдера контента. Часть 1</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.4.php">Создание провайдера контента. Часть 2</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.5.php">Создание провайдера контента. Часть 3</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.6.php">Асинхронная загрузка данных</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 22. JSON</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/13.3.php">Работа с json</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 23. Работа с XML</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/23.1.php">Ресурсы XML и их парсинг</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/23.2.php">Получение xml по сети</a></span></li>
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