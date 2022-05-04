<!DOCTYPE html>
<html >
<head>
<title>Angular | Привязка</title>
<meta charset="utf-8" />
<meta name="description" content="Привязка binding в Angular, привязка атрибутов и событий, интерполяция, двусторонняя привязка, примеры использования">
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
<h2>Привязка</h2><div class="date">Последнее обновление: 04.11.2021</div>

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

<p>Angular поддерживает механизм привязки, благодаря которому различные части шаблона могут быть привязаны к некоторым значениям, определенным в компоненте.</p>
<p>В Angular есть четыре формы привязки данных:</p>
<ul>
<li><p>Привязка элемента DOM к значению компонента (односторонняя). В двойных фигурных скобках указывается выражение, к которому идет привязка: <code>{{выражение}}</code>. Например:</p>
<pre class="brush:xml;">&lt;h1&gt;Добро пожаловать {{name}}!&lt;/h1&gt;</pre></li>
<li><p>Привязка свойства элемента DOM к значению компонента (односторонняя). Например:</p>
<pre class="brush:xml;">&lt;input type="text" [value]="name" /&gt;</pre></li>
<li><p>Привязка метода компонента к событию в DOM (генерация события в DOM вызывает метод на компоненте)(односторонняя). Например:</p>
<pre class="brush:xml;">&lt;button (click)="addItem(text, price)"&gt;Добавить&lt;/button&gt;</pre></li>
<li><p>Двусторонняя привязка, когда элемент DOM привязан к значению на компоненте, при этом изменения на одном конце привязки сразу приводят к изменениям 
на другом конце. Например:</p>
<pre class="brush:xml;">&lt;input [(ngModel)]="name" placeholder="name"&gt;</pre></li>
<li><p>Привязка к атрибуту элемента html</p></li>
<li><p>Привязка к классу CSS</p></li>
<li><p>Привязка к атрибуту элемента html</p></li>
</ul>
<h3>Интерполяция</h3>
<p>Первый вид привязки заключается в использовании фигурных скобок, в которые передается значение из компонента. Например, пусть у нас будет определен следующий 
компонент:</p>
<pre class="brush:ts;">
import { Component } from '@angular/core';
     
@Component({
    selector: 'my-app',
    template: `&lt;p&gt;Имя: {{name}}&lt;/p&gt;
				&lt;p&gt;Возраст: {{age}}&lt;/p&gt;`
})
export class AppComponent { 
    name = "Tom";
	age = 25;
}
</pre>
<p>И при запуске приложения выражения типа <code>{{name}}</code> будут автоматически заменяться соответствующими значениями, определенными в компоненте:</p>
<img src="./pics/2.6.png" alt="Data Binding in Angular 2" />
<p>И если в процессе работы приложения свойства name и age в компоненте изменят свое значение, то также изменится значение в разметке html, которая привязана к этим 
свойствам.</p>
<h3>Привязка свойств элементов html</h3>
<p>Мы можем привязать значение к свойству элемента html. В этом случае свойство указывается в квадратных скобках:</p>
<pre class="brush:ts;">
import { Component } from '@angular/core';
     
@Component({
    selector: 'my-app',
    template: `&lt;input type="text" [value]="name" /&gt;`
})
export class AppComponent { 
    name = "Tom";
}
</pre>
<p>Важно понимать, что здесь идет привязка не к атрибуту, а именно к свойству элемента в javascript, который представляет данный элемент html. То есть 
html-элемент <code>&lt;input&gt;</code> в javascript представлен интерфейсом <a href="https://developer.mozilla.org/en-US/docs/Web/API/HTMLInputElement" rel="nofollow">HTMLInputElement</a>, у которого есть свойство value.</p>
<p>Но в данном случае мы могли бы написать и так:</p>
<pre class="brush:ts;">
template: `&lt;input type="text" value="{{name}}" /&gt;`
</pre>
<p>И в этом случае мы передаем значение с помощью интерполяции <span class="b">атрибуту</span> элемента.</p>
<p>Или другой пример:</p>
<pre class="brush:ts;">
template: `&lt;p [textContent]="name"&gt;&lt;/p&gt;`
</pre>
<p>У html-элемента <code>&lt;p&gt;</code> нет атрибута <code>textContent</code>. Зато у интерфейса <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node" rel="nofollow">Node</a>, который представляет данный элемент DOM, есть свойство 
textContent, к которому мы можем осуществить привязку.</p>
<h3>Привязка к атрибуту</h3>
<p>Иногда возникает необходимость выполнить привязку не к свойству, а именно к атрибуту html-элемента. Хотя свойства и атрибуты html-элементов могут пересекаться, 
как это было показано выше в примере с свойством/атрибутом value, но такое соответствие бывает не всегда. В этом случае мы можем использоать выражение:</p>
<pre class="brush:ts;">
[attr.название_атрибута]="значение"
</pre>
<p>После префикса <code>attr</code> через точку идет название атрибута.</p>
<p>Обычно подобная привязка применяется к атрибутам элементов aria, svg и table. Например, атрибут <span class="b">colspan</span>, который объединяет столбцы таблицы, не имеет соотвтствующего свойства. И в этом случае мы можем применять 
привязку к атрибутам:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
       
@Component({
    selector: 'my-app',
    template: `&lt;table border="1"&gt;
                &lt;tr&gt;&lt;td [attr.colspan]="colspan"&gt;One-Two&lt;/td&gt;&lt;/tr&gt;
                &lt;tr&gt;&lt;td&gt;Three&lt;/td&gt;&lt;td&gt;Four&lt;/td&gt;&lt;/tr&gt;
                &lt;tr&gt;&lt;td&gt;Five&lt;/td&gt;&lt;td&gt;Six&lt;/td&gt;&lt;/tr&gt;
        &lt;/table&gt;`
})
export class AppComponent{ 
     
    colspan=2;
}
</pre>
<img src="./pics/2.19.png" alt="Привязка к атрибутам в Angular 13" />
<h3>Привязка к событию</h3>
<p>Привязка к событию позволяет связать с событием элемента метод из компонента:</p>
<pre class="brush:ts;">
import { Component } from '@angular/core';
     
@Component({
    selector: 'my-app',
    template: `&lt;p&gt;Количество кликов {{count}}&lt;/p&gt;
				&lt;button (click)="increase()"&gt;Click&lt;/button&gt;`
})
export class AppComponent { 
    count: number=0;
	increase() : void {
		this.count++;
	}
}
</pre>
<p>В шаблоне определен элемент button, у которого есть событие click. Для обработки этого события в классе AppComponent определен метод <code>increase()</code>, 
который увеличивает количество условных кликов. В итоге при нажатии на кнопку сработает данный метод:</p>
<img src="./pics/2.7.png" alt="Event Binding in Angular 13" />
<p>В качестве альтернативы мы могли бы установить привязку к событию так:</p>
<pre class="brush:ts;">
template: `&lt;p&gt;Количество кликов {{count}}&lt;/p&gt;
				&lt;button on-click="increase()"&gt;Click&lt;/button&gt;`
</pre>
<p>После префикса <code>on</code> через дефис идет название события.</p>
<p>Мы также можем передавать информацию о событии через объект <span class="b">$event</span>:</p>
<pre class="brush:ts;">
import { Component } from '@angular/core';
      
@Component({
    selector: 'my-app',
    template: `&lt;p&gt;Количество кликов {{count}}&lt;/p&gt;
                &lt;button (click)="increase($event)"&gt;Click&lt;/button&gt;`
})
export class AppComponent { 
    count: number=0;
    increase($event : any) : void {
        this.count++;
		console.log($event);
    }
}
</pre>
<p>$event - это встроенный объект, через который Angular передает информацию о событии.</p>
<h3>Двусторонняя привязка</h3>
<p>Двусторонняя привязка позволяет динамически менять значения на одном конце привязки при изменениях на другом конце. Как правило, двусторонняя привязка 
применяется при работе с элементами ввода, например, элементами типа input. Например:</p>
<pre class="brush:ts;">
import { Component } from '@angular/core';
     
@Component({
    selector: 'my-app',
    template: `&lt;p&gt;Привет {{name}}&lt;/p&gt;
				&lt;input type="text" [(ngModel)]="name" /&gt; &lt;br&gt;&lt;br&gt;
				&lt;input type="text" [(ngModel)]="name" /&gt;`
})
export class AppComponent { 
    name:string="Tom";
}
</pre>
<p>Здесь к свойству name класса AppComponent привязаны сразу три элемента: параграф и два текстового поля. Тектовые поля связаны со свойством name двусторонней привязкой. 
Для ее создания применяется выражение <code>[(ngModel)]="выражение"</code>.</p>
<p>В итоге изменения в текстовом поле будут сказываться на тексте во втором текстовом поле и параграфе:</p>
<img src="./pics/2.8.png" alt="Two-Way Binding in Angular 2" />

<h3>Привязка к классам CSS</h3>
<p>Привязка к классу CSS имеет следующую форму:</p>
<pre class="brush:ts;">
[class.имя_класса]="true/false"
</pre>
<p>После префикса <code>class</code> через точку указывается имя класса, которое мы хотим добавить или удалить. Причем привязка идет к логическому значению. 
Если равно true, то класс применяется, если false - то класс не применяется. Например:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
       
@Component({
    selector: 'my-app',
    template: `&lt;div [class.isredbox]="isRed"&gt;&lt;/div&gt;
			&lt;div [class.isredbox]="!isRed"&gt;&lt;/div&gt;
			&lt;input type="checkbox" [(ngModel)]="isRed" /&gt;`,
    styles: [`
        div {width:50px; height:50px; border:1px solid #ccc}
         .isredbox{background-color:red;}
    `]
})
export class AppComponent{ 
     
    isRed = false;
}
</pre>
<p>В данном случае идет привязка переменной isRed к классу isredbox, который устанавливает красный цвет фона. У первого блока div усстанавливается класс, если переменая имеет значение true: 
<code>[class.isredbox]="isRed"</code>. У второго блока, наоборот, если у переменной значение false: <code>[class.isredbox]="!isRed"</code>. Используя двустороннюю привязку к переменной isRed в элементе checkbox, 
мы можем изменить ее значение.</p>
<img src="./pics/2.20.png" alt="Привязка к классам в Angular 13" />
<p>Стоит отметить, что мы также можем использовать привязку свойств для установки класса:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
       
@Component({
    selector: 'my-app',
    template: `&lt;div [class]="red"&gt;&lt;/div&gt;`,
    styles: [`
        div {width:50px; height:50px; border:1px solid #ccc}
         .isredbox{background-color:red;}
    `]
})
export class AppComponent{ 
     
    red = "isredbox"
}
</pre>
<h3>Привязка стилей</h3>
<p>Привязка стилей имеет следующий синтаксис:</p>
<pre class="brush:ts;">
[style.стилевое_свойство]="выражение ? A : B"
</pre>
<p>После префикса style через точку идет название свойства стиля. В качестве значения передается некоторое выражение: если оно возвращает true, то стилевому свойству присваивается 
значение A; если оно возвращает false, то стилевому свойству присваивается значение B. Например:</p>
<pre class="brush:ts;">
import { Component} from '@angular/core';
       
@Component({
    selector: 'my-app',
    template: `&lt;div [style.backgroundColor]="isRed? 'red' : 'green'"&gt;&lt;/div&gt;
    &lt;div [style.background-color]="!isRed ? 'red' : 'green'"&gt;&lt;/div&gt;
    &lt;input type="checkbox" [(ngModel)]="isRed" /&gt;`,
    styles: [`
        div {width:50px; height:50px; border:1px solid #ccc}
    `]
})
export class AppComponent{ 
     
    isRed = false;
}
</pre>
<p>Выражение <code>[style.backgroundColor]="isRed? 'red' : 'green'"</code> указывает, что если переменная isRed равна true, то стилевому свойству 
background-color передается красный цвет, иначе передается зеленый цвет. Причем можно писать как <code>style.background-color</code>, так и 
<code>style.backgroundColor</code>, то есть вместо дефиса переводить следующий символ в верхний регистр.</p>
<img src="./pics/2.21.png" alt="Привязка стилей в Angular 13" />
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
	<li class="closed"><span class="folder">Глава 1. Введение в  Angular</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/1.1.php">Что такое Angular. Первый проект</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/1.4.php">Построение проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/1.2.php">Первое приложение</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы Angular</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.1.php">Компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.2.php">Модули</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.3.php">Загрузка приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.4.php">Стили и шаблоны компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.5.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.6.php">Работа с компонентами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.7.php">Взаимодействие между компонентами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.10.php">Привязка к событиям дочернего компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.8.php">Жизненный цикл компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.9.php">Шаблонные переменные, ViewChild, ContentChild</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/2.11.php">Взаимодействие между модулями</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Директивы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.1.php">ngClass и ngStyle</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.2.php">Создание атрибутивных директив</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.3.php">Взаимодействие с пользователем, HostListener и HostBinding</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.4.php">Получение параметров в директивах</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.5.php">Структурные директивы ngIf, ngFor, ngSwitch</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/3.6.php">Создание структурных директив</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Сервисы и dependency injection</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.1.php">Сервисы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.2.php">Внедрение сервиса в другой сервис</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.4.php">Опциональные сервисы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.3.php">Один сервис для всех компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/4.5.php">Иерархия сервисов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Работа с формами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.1.php">Модуль FormsModule и директива NgModel</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.2.php">Получение и изменение модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.3.php">Состояние модели и валидация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.4.php">Директива NgForm</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/5.5.php">Reactive Forms</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. HTTP и взаимодействие с сервером</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.1.php">HttpClient и отправка запросов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.2.php">Объект Observable и библиотека RxJS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.3.php">Обработка ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.4.php">Отправка данных в запросе</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/6.5.php">POST-запросы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.2.php">Создание ссылок</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.3.php">Параметры маршрута</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.4.php">Параметры строки запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.5.php">Программная навигация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.6.php">Дочерние маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/7.7.php">Guards</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Pipes</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/8.1.php">Работа с pipes</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/8.2.php">Создание своих pipes</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/8.3.php">Pure и Impure Pipes</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/8.4.php">AsyncPipe</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Дополнительные статьи</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/angular2/9.1.php">Webpack</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/angular2/9.2.php">Grid и CRUD-операции</a></span></li>
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