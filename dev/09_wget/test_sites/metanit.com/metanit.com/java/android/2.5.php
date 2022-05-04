<!DOCTYPE html>
<html >
<head>
<title>Java и Android | Ресурсы строк</title>
<meta charset="utf-8" />
<meta name="description" content="Ресурсы строк strings.xml в Android Studio, получение ресурсов в Java, использование строк в проекте, plurals, string-array и метод getStringArray">
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
<h2>Ресурсы строк</h2><div class="date">Последнее обновление: 15.10.2021</div>

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

<p>Ресурсы строк - один из важных компонентов приложения. Мы используем их при выведении названия приложения, различного текста, например, 
текста кнопок и т.д.</p>
<p>XML-файлы, представляющие собой ресурсы строк, находятся в проекте в папке <span class="b">res/values</span>. По умолчанию ресурсы строк 
находятся в файле <span class="b">strings.xml</span>, который может выглядеть следующим образом:</p>
<pre class="brush:xml;">
&lt;resources&gt;
    &lt;string name="app_name"&gt;ViewApp&lt;/string&gt;
&lt;/resources&gt;
</pre>
<img src="./pics/2.2.png" alt="Ресурсы строк в Android и Java" />
<p>В самом простом виде этот файл определяет один ресурс "app_name", который устанавливает название приложения, которое мы видим в заголовке приложения 
на экране устройства. Но естественно мы можем определить любые строковые ресурсы. 
Каждый отдельный ресурс определяется с помощью элемента <span class="b">string</span>, а его атрибут <code>name</code> содержит название ресурса.</p>
<p>Затем в приложении в файлах кода мы можем ссылаться на эти ресурсы:</p>
<pre class="brush:java;">
R.string.app_name
</pre>
<p>Например, в коде Java:</p>
<pre class="brush:java;">
String application_name =  getResources().getString(R.string.app_name);
</pre>
<p>Либо в xml-файле:</p>
 <pre class="brush:xml;">
@string/app_name
</pre>
<p>Например, изменим файл <span class="b">res/values/strings.xml</span> следующим образом:</p>
<pre class="brush:xml;">
&lt;resources&gt;
    &lt;string name="app_name"&gt;ViewApp&lt;/string&gt;
    &lt;string name="message"&gt;Hello Android!&lt;/string&gt;
&lt;/resources&gt;
</pre>
<p>Здесь добавлен ресурс <code>message</code> со значением "Hello Android!".</p>
<p>Теперь используем ресурс в файле activity_main.xml:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout
    xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    android:layout_width="match_parent"
    android:layout_height="match_parent"&gt;

    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="@string/message"
        android:textSize="30sp"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
</pre>
<p>С помощью выражения <code>@string/message</code> передаем атрибуту <code>android:text</code> значение из ресурса.</p>
<img src="./pics/2.8.png" alt="Ресурсы строк из strings.xml в Android Studio и Java" />
<p>Аналогично мы могли бы использовать ресурс в коде Activity:</p>
<pre class="brush:java;">
package com.example.viewapp;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // получаем элемент textView
        TextView textView = findViewById(R.id.textView);
        // переустанавливаем у него текст
        textView.setText(R.string.message);
    }
}
</pre>
<p>Если нам в принципе надо получить ресурс в коде Java (необязательно для установки текста в TextView), то в этом случае можно использовать метод <code>getResources().getString(идентификатор_ресурса)</code></p>
<pre class="brush:java;">String message = getResources().getString(R.string.message);</pre>
<p>Хотя по умолчанию для ресурсов строк применяется файл strings.xml, но разработчики могут добавлять дополнительные файлы ресурсов в 
каталог проекта <span class="ii">res/values</span>. При этом достаточно соблюдать структуру файла: он должен иметь корневой узел <code>&lt;resources&gt;</code> и иметь один или несколько элементов 
<code>&lt;string&gt;</code>.</p>
<p>Так, нажмем на папку <span class="b">res/values</span> правой кнопкой мыши и в появившемся списке выберем пункт <span class="b">New -&gt; Value Resource File</span>:</p>
<img src="./pics/2.9.png" alt="Добавление ресурса строк в Android Studio" />
<p>Причем следует отметить, что данный тип файлов будет характерен для любого типа ресурсов, который добавляется в папку <span class="b">res/values</span>.</p>
<p>После этого нам будет предложено определить для файла имя:</p>
<img src="./pics/2.10.png" alt="String resources in Android Studio" />
<p>Назовем, к примеру, <span class="b">headers</span> (название файла произвольное), а для всех остальных полей оставим значения по умолчанию. И в папку <span class="b">res/values</span> будет добавлен новый файл headers.xml. Определим в нем пару ресурсов:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;resources&gt;
    &lt;string name="welcome"&gt;Добро пожаловать&lt;/string&gt;
    &lt;string name="click_button"&gt;Нажмите на кнопку&lt;/string&gt;
&lt;/resources&gt;
</pre>
<p>И после этого мы сможем использовать определенные здесь ресурсы в коде Activity или в файле layout.</p>
<h3>Форматирование строк</h3>
<p>Android позволяет применять к ресурсам строк форматирование. Например, изменим файл strings.xml:</p>
<pre class="brush:xml;">
&lt;resources&gt;
    &lt;string name="app_name"&gt;ViewApp&lt;/string&gt;
    &lt;string name="message"&gt;Hello Android!&lt;/string&gt;
    &lt;string name="welcome_message"&gt;Добро пожаловать %1$s! Уже %2$d : %3$d&lt;/string&gt;
&lt;/resources&gt;
</pre>
<p>Третий ресурс - welcome_message представляет строку с форматированием. Так, она содержит такие символы как %1$s, %2$d и %3$d. Что они означают? 
<code>%1$s</code> указывает, что это первый аргумент, а символ "s" говорит, что этот аргумент представляет строку. 
<code>%2$d</code> представляет второй аргумент, а символ "d" в конце указывает, что это будет целое число. Аналогично <code>%3$d</code> указывает, 
что это третий аргумент, который представляет целое число.</p>
<p>Получим ресурс в коде Java</p>
<pre class="brush:java;">
package com.example.viewapp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.res.Resources;
import android.os.Bundle;
import android.widget.TextView;

import java.util.Calendar;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        //setContentView(R.layout.activity_main);
        Resources res = getResources();

        String userName = "Евгений";
        Calendar calendar = Calendar.getInstance();
        int hour = calendar.get(Calendar.HOUR_OF_DAY);
        int minute = calendar.get(Calendar.MINUTE);

        String text = getString(R.string.welcome_message, userName, hour, minute);
        TextView textView = new TextView(this);
        textView.setText(text);
        textView.setTextSize(28);
        setContentView(textView);
    }
}
</pre>
<p>Метод <code>getString(R.string.welcome_message, userName, hour, minute)</code> получает ресурс welcome_message и в качестве последующих параметров передает 
его аргументам значения. Для первого аргумента-строки используется переменная userName, а для второго и третьего аргументов передаем текущее количество часов и минут, 
полученных с помощью класса Calendar.</p>
<img src="./pics/2.25.png" alt="Форматирование ресурса в string.xml в Android и Java" />
<h3>Ресурсы Plurals</h3>
<p>Plurals представляют еще один вид набора строк. Он предназначен для описания количества элементов. Для чего это надо? 
К примеру, возьмем существительное: нередко оно изменяет окончание в зависимости от числительного, которое с ним употребляется: 
1 цветок, 2 цветка, 5 цветков. Для подобных случаев и используется ресурс <code>plurals</code>.</p>
<p>Посмотрим на примере. Добавим в папку <span class="ii">res/values</span> новый ресурс. Назовем его <span class="b">flowers</span>:</p>
<img src="./pics/2.11.png" alt="Ресурс Plurals в Android Studio" />
<p>Изменим его содержимое следующим образом:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;resources&gt;
    &lt;plurals name="flowers"&gt;
        &lt;item quantity="one"&gt;%d цветок&lt;/item&gt;
        &lt;item quantity="few"&gt;%d цветка&lt;/item&gt;
        &lt;item quantity="many"&gt;%d цветков&lt;/item&gt;
    &lt;/plurals&gt;
&lt;/resources&gt;
</pre>
<p>Для задания ресурса используется элемент <code>&lt;plurals&gt;</code>, для которого существует атрибут <code>name</code>, 
получающий в качестве значения произвольное название, по которому потом ссылаются на данный ресурс.</p>
<p>Сами наборы строк вводятся дочерними элементами <code>&lt;item&gt;</code>. Этот элемент имеет атрибут <code>quantity</code>, 
который имеет значение, указывающее, когда эта строка используется. Данный атрибут может принимать следующие значения:</p>
<ul>
<li><p><span class="b">zero</span>: строка для количества в размере 0</p></li>
<li><p><span class="b">one</span>: строка для количества в размере 1 (для русского языка - для задания всех количеств, оканчивающихся на 1, кроме 11)</p></li>
<li><p><span class="b">two</span>: строка для количества в размере 2</p></li>
<li><p><span class="b">few</span>: строка для небольшого количества</p></li>
<li><p><span class="b">many</span>: строка для больших количеств</p></li>
<li><p><span class="b">other</span>: все остальные случаи</p></li>
</ul>
<p>Причем в данном случае многое зависит от конкретного языка. А система сама позволяет определить, какое значение брать для того или иного числа.</p>
<p>Использование данного ресурса возможно толко в коде java. Поэтому изменим код MainActivity:</p>
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
        String rose = getResources().getQuantityString(R.plurals.flowers, 21, 21);

        TextView textView = new TextView(this);
        textView.setText(rose);
        textView.setTextSize(26);
        setContentView(textView);
    }
}
</pre>
<p>С помощью метода <span class="b">getQuantityString</span> мы получаем значение ресурса. Первым параметром передаем идентификатор ресурса. 
Вторым параметром идет значение. для которого нужно найти нужную строку. Третий параметр представляет собой значение, которое будет 
вставляться на место плейсхолдера <span class="b">%d</span>. То есть мы получаем строку для числа 21.</p>
<img src="./pics/2.12.png" alt="Определение ресурса plurals в Android" />
<h3>string array</h3>
<p>Еще одним видом строковых ресурсов является <span class="b">string-array</span> или массив строк. Например, добавим в папку <span class="b">res/values</span> 
новый файл, который назовем <span class="b">languages.xml</span>:</p>
<img src="./pics/2.23.png" alt="Определение ресурса string array в Android и Java" />
<p>Пусть он будет содержать следующий код:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;resources&gt;
    &lt;string-array name="languages"&gt;
        &lt;item&gt;Java&lt;/item&gt;
        &lt;item&gt;Kotlin&lt;/item&gt;
        &lt;item&gt;Dart&lt;/item&gt;
    &lt;/string-array&gt;
&lt;/resources&gt;
</pre>
<p>Ресурс задается с помощью элемента <span class="b">&lt;string-array&gt;</span>. Фактически он определяет набор строк. А каждая отдельная строка 
задается с помощью элемента <span class="b">&lt;item&gt;</span></p>
<p>В файле <span class="b">MainActivity.java</span> определим код для получения значений из этого ресурса:</p>
<pre class="brush:xml;">
package com.example.viewapp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.res.Resources;
import android.os.Bundle;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        //setContentView(R.layout.activity_main);
        Resources res = getResources();
        String[] languages = res.getStringArray(R.array.languages);
        String allLangs = "";
        for (String lang: languages) {
            allLangs += lang + " ";
        }
        TextView textView = new TextView(this);
        textView.setText(allLangs);
        textView.setTextSize(28);
        setContentView(textView);
    }
}
</pre>
<p>С помощью метода <span class="b">getStringArray</span> получаем ресурс в массив строк и затем с помощью цикла складдываем из массива одну строку и передаем 
ее в TextView.</p>
<img src="./pics/2.24.png" alt="Получение ресурса string array и getStringArray в Android и Java" />

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


<div class="nav"><p><a href="./2.4.php">Назад</a><a href="./">Содержание</a><a href="./2.6.php">Вперед</a></p></div></div>
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