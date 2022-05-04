<!DOCTYPE html>
<html >
<head>
<title>JavaScript | Создание цепочек промисов</title>
<meta charset="utf-8" />
<meta name="description" content="Promise в языке программирования JavaScript, cоздание цепочек промисов,  метод then и catch, обработка ошибок">
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
<h2>Создание цепочек промисов</h2><div class="date">Последнее обновление: 04.09.2021</div>

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

<img src="https://metanit.com/metanit-front.jpg" id="jmw" style="cursor:pointer;" />
</div>

<p>Одним из примуществом промисов является то, что они позволяют создавать цепочки промисов. Так, ранее мы рассмотрели применение методов <span class="b">then()</span> и 
<span class="b">catch()</span> для получения и обработки результатов и ошибок асинхронной операции. При выполнении эти методы генерируют новый объект 
<span class="b">Promise</span>, для которого мы также можем вызвать методы <code>then()</code> и <code>catch()</code>, и, таким образом, построить цепочку промисов. 
Благодаря этому мы можем обрабатывать подряд несколько асинхронных операций - одна за другой.</p>
<pre class="brush:js;">promise.then(..).then(..).then(..)</pre>
<p>Возвращаемое значение из функции-обработчика в методе <span class="b">then()</span> передается в последующий вызов метода <code>then()</code> в цепочке:</p>
<pre class="brush:js;">
const helloPromise = new Promise(function(resolve){
		resolve("Hello");
})

const worldPromise = helloPromise.then(function(value){
		// возвращаем новое значение
		return value + " World";
});
const metanitPromise = worldPromise.then(function(value){
		// возвращаем новое значение
		return value + " from METANIT.COM";
});
metanitPromise.then(function(finalValue){
		// получаем финальное значение
		console.log(finalValue);	// Hello World from METANIT.COM
});
</pre>
<p>Здесь для большей ясности весь процесс раздел на раздельные промисы: helloPromise, worldPromise и metanitPromise.</p>
<img src="./pics/promise1.png" alt="Цепочка промисов Promise в JavaScript" />
<p>Рассмотрим поэтапно.</p>
<ol><li><p>Сначала создается промис <code>helloPromise</code>:</p>
<pre class="brush:js;">
const helloPromise = new Promise(function(resolve){
	resolve("Hello");
});
</pre>
<p>В асинхронной операции с помощью вызова <code>resolve("Hello")</code> промис переводится в состояние <code>fulfilled</code>, то есть выполнение операции 
успешно завершено. А во вне передается значение "Hello".</p>
</li>

<li><p>Далее у промиса <code>helloPromise</code> вызывается метод <span class="b">then()</span>:</p>
<pre class="brush:js;">
const worldPromise = helloPromise.then(function(value){
		// возвращаем новое значение
		return value + " World";
});
</pre>
<p>В качестве значения параметра <code>value</code> функция обработчика получает строку "Hello" и затем возвращает строку "Hello World". Эта строка затем можно будет получить через метод 
<code>then()</code> нового промиса, который генерируется вызовом <code>helloPromise.then()</code> и который называется здесь <code>worldPromise</code>.</p>
</li>

<li><p>Затем аналогичным образом у промиса <code>worldPromise</code> вызывается метод <span class="b">then()</span>:</p>
<pre class="brush:js;">
const metanitPromise = worldPromise.then(function(value){
		// возвращаем новое значение
		return value + " from METANIT.COM";
});
</pre>
<p>В качестве значения параметра <code>value</code> функция обработчика получает строку "Hello World" и затем возвращает строку "Hello World from METANIT.COM". 
Вызов <code>worldPromise.then()</code> возвращает новый промис <code>metanitPromise</code>.</p>
</li>

<li><p>На последним этапе у промиса <code>metanitPromise</code> вызывается метод <span class="b">then()</span>:</p>
<pre class="brush:js;">
metanitPromise.then(function(finalValue){
	console.log(finalValue);	// Hello World from METANIT.COM
});
</pre>
<p>Здесь через параметр <code>finalValue</code> получаем финальное значение - строку "Hello World from METANIT.COM" и выводим на консоль. После этого цепочка завершена.</p>
</li>
</ul>
<p>Для большей краткости и наглядности мы можем упростить цепочку:</p>
<pre class="brush:js;">
new Promise(resolve =&gt; resolve("Hello"))
.then(value =&gt; value + " World")
.then(value =&gt; value + " from METANIT.COM")
.then(finalValue =&gt; console.log(finalValue));
</pre>
<h3>Обработка ошибок</h3>
Для обработки ошибок к цепочки в конце добавляется метод <span class="b">catch()</span>, который также возвращет объект Promise. 
Рассмотрим на простом примере:</p>
<pre class="brush:js;">
function generateNumber(str){
    return new Promise((resolve, reject) =&gt; {
        const parsed = parseInt(str);
        if (isNaN(parsed)) reject("Not a number");
        else resolve(parsed);
    });
};
function printNumber(str){
	generateNumber(str)
		.then(value =&gt; console.log(value))
		.catch(error =&gt; console.log(error));	
}
printNumber("rty");	// Not a number
printNumber("3");	// 3
</pre>
<p>В данном случае функция <code>generateNumber()</code> возвращает промис, в котором получаем извне некоторое значение, 
пытаемся конвертировать его в число. В функции <code>printNumber()</code> вызываем эту функцию и у полученного промиса создаем небольшую цепочку из 
методов <code>then()</code> и <code>catch()</code>.</p>
<p>Если конвертация строки в число в промисе прошла успешно, то распарсенное число передачется в функцию <code>resolve()</code>:</p>
<pre class="brush:js;">else resolve(parsed)</pre>
<p>В этом случае при получении этого результата срабатывает метод <span class="b">then()</span>, который в данном случае выводит полученное значение на консоль:</p>
<pre class="brush:js;">
.then(value =&gt; console.log(value))
</pre>
<p>Метод <span class="b">catch()</span> при отстутствии ошибок не выполняется.</p>
<p>Однако если передаеваемое значение невозможно конвертировать в число, соответственно в промисе выполняется вызов</p>
<pre class="brush:js;">if (isNaN(parsed)) reject("Not a number");</pre>
<p>В этом случае метод <code>then()</code> игнорируется, и выполнение переходит к вызову</p>
<pre class="brush:js;">.catch(error =&gt; console.log(error));</pre>
<h4>Обработка ошибок в цепочке промисов</h4>
<p>Теперь усложним цепочку. Пусть у нас в цепочке выполняется сразу несколько промисов:</p>
<pre class="brush:js;">
function generateNumber(str){
    return new Promise((resolve, reject) =&gt; {
        const parsed = parseInt(str);
        if (isNaN(parsed)) reject("Not a number");
        else resolve(parsed);
    });
};
function printNumber(str){
	generateNumber(str)
		.then(value =&gt; {
			if (value===4) throw "Несчастливое число";
			return value * value;
		})
		.then(finalValue =&gt; console.log(`Result: ${finalValue}`))
		.catch(error =&gt; console.error(error));
}
printNumber("rty");	// Not a number
printNumber("3");	// Result: 9
printNumber("4");	// Несчастливое число
generateNumber("5");	// Result: 25
</pre>
<p>Здесь для простоты весь код вынесен в функцию <code>generateNumber()</code>, которая создает цепочку промисов. В этой цепочке промисов 
также получаем извне некоторое значение, пытаемся конвертировать его в число, и затем вычисляем его квадрат и выводит на консоль. В конце которой находится метод <code>catch()</code>. В этот метод передается обработчик ощибки, 
который получает ошибку и выводит ее на консоль. В итоге если в цепочке промисов на одном из этапов генерируется ошибка (в силу внутренней работы кода, например, при генерации ошибки с помощью оператора <code>throw</code>, либо при вызове функции <code>reject()</code>), 
то все последующие вызовы метода <code>then()</code>, которые содержат только обработку значения, игнорируются, и выполнение цепочки переходит к методу 
<code>catch()</code>.</p>
<p>Для примера вызываем функцию <code>printNumber()</code>, передавая в нее различные исходные данные. Например, при выполнении вызова</p>
<pre class="brush:js;">printNumber("rty");	// Not a number</pre>
<h4>Возвращаемое Promise из catch</h4>
<p>При этом стоит отметить, что, поскольку <code>catch()</code> возвращает объект Promise, то далее также можно продолжить цепочку:</p>
<pre class="brush:js;">
function generateNumber(str){
    return new Promise((resolve, reject) =&gt; {
        const parsed = parseInt(str);
        if (isNaN(parsed)) reject("Not a number");
        else resolve(parsed);
    });
};
function printNumber(str){
	generateNumber(str)
		.then(value =&gt; value * value)
		.then(value =&gt; console.log(`Result: ${value}`))
		.catch(error =&gt; console.error(error))
		.then(() =&gt; console.log("Work has been done"));
}
printNumber("3");	
// Result: 9
// Work has been done
</pre>
<p>Причем метод <code>then()</code> после <code>catch()</code> будет вызываться, даже если не произошло ошибок и сам метод <code>catch()</code> не выполнялся.</p>
<p>И мы даже можем из функции-обработчика ошибки в <code>catch()</code> также можем передавать некоторое значение и получать через последующий метод <code>then()</code>:</p>
<pre class="brush:js;">
function generateNumber(str){
    return new Promise((resolve, reject) =&gt; {
        const parsed = parseInt(str);
        if (isNaN(parsed)) reject("Not a number");
        else resolve(parsed);
    });
};
function printNumber(str){
	generateNumber(str)
		.then(value =&gt; value * value)
		.then(value =&gt; console.log(`Result: ${value}`))
		.catch(error =&gt; {
			console.log(error);
			return 0;
		})
		.then(value =&gt; console.log("Status code:", value));
}
printNumber("ert3");	// Not a number
						// Status code: 0
</pre>
<h3>Метод finally</h3>
<p>Кроме методов <code>then()</code> и <code>catch()</code> объект Promise для обработка результата также предоставляет 
метод <span class="b">finally()</span>. Этот метод выполняется в конце цепочки промисов вне зависимости произошла ошибка или выполнение промиса прошло успешно.</p>
<p>В качестве параметра метод принимает функцию, которая выполняет некоторые финальные действия по обработке работы промиса:</p>
<pre class="brush:js;">
function generateNumber(str){
    return new Promise((resolve, reject) =&gt; {
        const parsed = parseInt(str);
        if (isNaN(parsed)) reject("Not a number");
        else resolve(parsed);
    });
};
function printNumber(str){
	generateNumber(str)
	.then(value =&gt; console.log(value))
	.catch(error =&gt; console.log(error))
	.finally(() =&gt; console.log("End"));
}

printNumber("3");
printNumber("triuy");
</pre>
<p>Здесь мы два раза обращаемся к промису, возвращаемому функцией generateNumber. В одном случае строка удачно сконвертируется в число, в другом же - произойдет ошибка. Однако вне 
зависимости от отсутствия или наличия ошибки в обоих случаях будет выполняться метод <code>finally()</code>, который выведет на консоль строку "End".</p>
<p>Метод <code>finally()</code> возвращает объект Promise, поэтому после него можно продолжить продолжить цепочку:</p>
<pre class="brush:js;">
function generateNumber(str){
    return new Promise((resolve, reject) =&gt; {
        const parsed = parseInt(str);
        if (isNaN(parsed)) reject("Not a number");
        else resolve(parsed);
    });
};
function printNumber(str){
	generateNumber(str)
	.then(value =&gt; console.log(value))
	.catch(error =&gt; console.log(error))
	.finally(() =&gt; console.log("Выполнение промиса завершено"))
	.then(() =&gt; console.log("Промис все еще работает"));
}
printNumber("3");
</pre>
<p>Консольный вывод:</p>
<pre class="browser">
3
Выполнение промиса завершено
Промис все еще работает
</pre>
<p>Стоит отметить что в метод <code>then()</code> также можно передать данные. Но эти данные передаются не из метода <code>finally()</code>, а из предыдущего метода 
<code>then()</code> или <code>catch()</code>:</p>
<pre class="brush:js;">
function generateNumber(str){
    return new Promise((resolve, reject) =&gt; {
        const parsed = parseInt(str);
        if (isNaN(parsed)) reject("Not a number");
        else resolve(parsed);
    });
};
function printNumber(str){
	generateNumber(str)
	.then(value =&gt; {
		console.log(value);
		return "hello from then";
	})
	.catch(error =&gt; {
		console.log(error);
		return "hello from catch";
	})
	.finally(() =&gt; {
		console.log("End");
		return "hello from finally";
	})
	.then(message =&gt; console.log(message));
}
printNumber("3");
</pre>
<pre class="browser">
3
End
hello from then
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


<div class="nav"><p><a href="./17.3.php">Назад</a><a href="./">Содержание</a><a href="./17.5.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в JavaScript</span>
		<ul>
			<li><span class="file"><a href="1.1.php">Что такое JavaScript</a></span></li>
			<li><span class="file"><a href="1.2.php">Первая программа на JavaScript</a></span></li>
			<li><span class="file"><a href="1.3.php">Выполнение кода javascript</a></span></li>
			<li><span class="file"><a href="1.4.php">Подключение внешнего файла JavaScript</a></span></li>
			<li><span class="file"><a href="1.5.php">Консоль браузера и console.log</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы javascript</span>
		<ul>
			<li><span class="file"><a href="2.1.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="2.2.php">Типы данных</a></span></li>
			<li><span class="file"><a href="2.3.php">Операции</a></span></li>
			<li><span class="file"><a href="2.8.php">Условные операторы ?: и ??</a></span></li>
			<li><span class="file"><a href="2.4.php">Преобразование данных</a></span></li>
			<li><span class="file"><a href="2.5.php">Введение в массивы</a></span></li>
			<li><span class="file"><a href="2.6.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="2.7.php">Циклы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Функциональное программирование</span>
		<ul>
			<li><span class="file"><a href="3.1.php">Функции</a></span></li>
			<li><span class="file"><a href="3.10.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="3.11.php">Результат функции</a></span></li>
			<li><span class="file"><a href="3.2.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="3.3.php">Замыкания и функции IIFE</a></span></li>
			<li><span class="file"><a href="3.9.php">Паттерн Модуль</a></span></li>
			<li><span class="file"><a href="3.4.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="3.5.php">Переопределение функций</a></span></li>
			<li><span class="file"><a href="3.6.php">Hoisting</a></span></li>
			<li><span class="file"><a href="3.7.php">Передача параметров по значению и по ссылке</a></span></li>
			<li><span class="file"><a href="3.8.php">Стрелочные функции</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="4.1.php">Объекты</a></span></li>
			<li><span class="file"><a href="4.2.php">Вложенные объекты и массивы в объектах</a></span></li>
			<li><span class="file"><a href="4.13.php">Копирование и сравнение объектов</a></span></li>
			<li><span class="file"><a href="4.3.php">Проверка наличия и перебор методов и свойств</a></span></li>
			<li><span class="file"><a href="4.4.php">Объекты в функциях</a></span></li>
			<li><span class="file"><a href="4.5.php">Конструкторы объектов</a></span></li>
			<li><span class="file"><a href="4.6.php">Расширение объектов. Prototype</a></span></li>
			<li><span class="file"><a href="4.7.php">Инкапсуляция</a></span></li>
			<li><span class="file"><a href="4.8.php">Функция как объект. Методы call и apply</a></span></li>
			<li><span class="file"><a href="4.9.php">Наследование</a></span></li>
			<li><span class="file"><a href="4.10.php">Ключевое слово this</a></span></li>
			<li><span class="file"><a href="4.11.php">Деструктуризация</a></span></li>
			<li><span class="file"><a href="4.18.php">Оператор ?.</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. ООП. Классы.</span>
		<ul>
			<li><span class="file"><a href="4.12.php">Классы</a></span></li>
			<li><span class="file"><a href="4.16.php">Приватные поля и методы</a></span></li>
			<li><span class="file"><a href="4.17.php">Статические поля и методы</a></span></li>
			<li><span class="file"><a href="4.14.php">Свойства и методы доступа</a></span></li>
			<li><span class="file"><a href="4.15.php">Наследование</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Массивы</span>
		<ul>
			<li><span class="file"><a href="5.3.php">Создание массива и объект Array</a></span></li>
			<li><span class="file"><a href="5.6.php">Массивы и spread-оператор</a></span></li>
			<li><span class="file"><a href="5.7.php">Операции с массивами</a></span></li>
			<li><span class="file"><a href="5.8.php">Наследование массивов</a></span></li>
		</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Строки</span>
					<ul>
			<li><span class="file"><a href="6.1.php">Строки и объект String</a></span></li>
			<li><span class="file"><a href="6.5.php">Шаблоны строк</a></span></li>
			<li><span class="file"><a href="6.2.php">Объект RegExp. Регулярные выражения</a></span></li>
			<li><span class="file"><a href="6.3.php">Регулярные выражения в методах String</a></span></li>
			<li><span class="file"><a href="6.4.php">Синтаксис регулярных выражений</a></span></li>
			<li><span class="file"><a href="6.6.php">Группы в регулярных выражениях</a></span></li>
					</ul>
				</li>
				
	<li class="closed"><span class="folder">Глава 8. Встроенные объекты</span>
		<ul>
			<li><span class="file"><a href="5.1.php">Объект Date. Работа с датами</a></span></li>
			<li><span class="file"><a href="5.2.php">Объект Math. Математические операции</a></span></li>
			<li><span class="file"><a href="5.4.php">Объект Number</a></span></li>
			<li><span class="file"><a href="5.5.php">Символы</a></span></li>
			<li><span class="file"><a href="5.9.php">Proxy</a></span></li>
		</ul>
				</li>
				
	<li class="closed"><span class="folder">Глава 9. Обработка ошибок</span>
		<ul>
			<li><span class="file"><a href="16.1.php">Конструкция try..catch..finally</a></span></li>
			<li><span class="file"><a href="16.2.php">Генерация ошибок и оператор throw</a></span></li>
			<li><span class="file"><a href="16.3.php">Типы ошибок</a></span></li>
		</ul>
				</li>
		<li class="closed"><span class="folder">Глава 10. Работа с браузером и BOM</span>
			<ul>
			<li><span class="file"><a href="7.1.php">Browser Object Model и объект window</a></span></li>
			<li><span class="file"><a href="7.2.php">Управление окнами</a></span></li>
			<li><span class="file"><a href="7.3.php">История браузера. Объект history</a></span></li>
			<li><span class="file"><a href="7.4.php">Объект location</a></span></li>
			<li><span class="file"><a href="7.5.php">Объект navigator</a></span></li>
			<li><span class="file"><a href="7.6.php">Таймеры</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 11. Работа с DOM</span>
					<ul>
			<li><span class="file"><a href="8.1.php">Введение в DOM</a></span></li>
			<li><span class="file"><a href="8.2.php">Объект document. Поиск элементов</a></span></li>
			<li><span class="file"><a href="8.3.php">Свойства объекта document</a></span></li>
			<li><span class="file"><a href="8.4.php">Объект Node. Навигация по DOM</a></span></li>
			<li><span class="file"><a href="8.5.php">Создание, добавление и удаление элементов веб-станицы</a></span></li>
			<li><span class="file"><a href="8.6.php">Объект Element. Управление элементами</a></span></li>
			<li><span class="file"><a href="8.7.php">Изменение стиля элементов</a></span></li>
			<li><span class="file"><a href="8.8.php">Создание своего элемента HTML</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 12. События</span>
					<ul>
			<li><span class="file"><a href="9.1.php">Введение в обработку событий</a></span></li>
			<li><span class="file"><a href="9.2.php">Обработчики событий</a></span></li>
			<li><span class="file"><a href="9.3.php">Объект Event</a></span></li>
			<li><span class="file"><a href="9.4.php">Распространение событий</a></span></li>
			<li><span class="file"><a href="9.5.php">События мыши</a></span></li>
			<li><span class="file"><a href="9.6.php">События клавиатуры</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 13. Работа с формами</span>
					<ul>
			<li><span class="file"><a href="10.1.php">Формы и их элементы</a></span></li>
			<li><span class="file"><a href="10.2.php">Кнопки</a></span></li>
			<li><span class="file"><a href="10.3.php">Текстовые поля</a></span></li>
			<li><span class="file"><a href="10.4.php">Флажки и переключатели</a></span></li>
			<li><span class="file"><a href="10.5.php">Список select</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 14. JSON</span>
					<ul>
			<li><span class="file"><a href="11.1.php">Введение в JSON</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 15. Хранение данных</span>
					<ul>
			<li><span class="file"><a href="12.1.php">Куки</a></span></li>
			<li><span class="file"><a href="12.2.php">Web Storage</a></span></li>
					</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Коллекции и итераторы</span>
		<ul>
			<li><span class="file"><a href="14.1.php">Итераторы</a></span></li>
			<li><span class="file"><a href="14.2.php">Генераторы</a></span></li>
			<li><span class="file"><a href="14.3.php">Множества Set</a></span></li>
			<li><span class="file"><a href="14.4.php">Map</a></span></li>
			<li><span class="file"><a href="14.5.php">WeakSet</a></span></li>
			<li><span class="file"><a href="14.6.php">WeakMap</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Promise, async и await</span>
		<ul>
			<li><span class="file"><a href="17.1.php">Введение в промисы</a></span></li>
			<li><span class="file"><a href="17.2.php">Получение результата операции в Promise</a></span></li>
			<li><span class="file"><a href="17.3.php">Обработка ошибок в Promise</a></span></li>
			<li><span class="file"><a href="17.4.php">Создание цепочек промисов</a></span></li>
			<li><span class="file"><a href="17.5.php">Функции Promise.all, Promise.allSettled, Promise.any и Promise.race</a></span></li>
			<li><span class="file"><a href="17.6.php">Async и await</a></span></li>
			<li><span class="file"><a href="17.7.php">Асинхронные итераторы</a></span></li>
			<li><span class="file"><a href="17.8.php">Асинхронные генераторы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Ajax</span>
		<ul>
			<li><span class="file"><a href="13.1.php">Объект XMLHttpRequest</a></span></li>
			<li><span class="file"><a href="13.2.php">Отправка данных</a></span></li>
			<li><span class="file"><a href="13.3.php">Promise в Ajax-запросах</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. Локализация</span>
		<ul>
			<li><span class="file"><a href="18.1.php">Локализация списков и Intl.ListFormat</a></span></li>
			<li><span class="file"><a href="18.2.php">Локализация дат и времени</a></span></li>
			<li><span class="file"><a href="18.3.php">Локализация названий и Intl.DisplayNames</a></span></li>
			<li><span class="file"><a href="18.4.php">Форматирование чисел и Intl.NumberFormat</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Модули</span>
		<ul>
			<li><span class="file"><a href="19.1.php">Введение в модули</a></span></li>
			<li><span class="file"><a href="19.2.php">Импорт модуля</a></span></li>
			<li><span class="file"><a href="19.3.php">Экспорт и импорт компонентов модулей</a></span></li>
			<li><span class="file"><a href="19.4.php">Экспорт и импорт по умолчанию</a></span></li>
			<li><span class="file"><a href="19.5.php">Использование псевдонимов при экспорте и импорте</a></span></li>
			<li><span class="file"><a href="19.6.php">Динамическая загрузка модулей</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Fetch API</span>
		<ul>
			<li><span class="file"><a href="20.1.php">Функция fetch</a></span></li>
			<li><span class="file"><a href="20.2.php">Объект Response и его свойства</a></span></li>
			<li><span class="file"><a href="20.3.php">Получение данных из ответа</a></span></li>
			<li><span class="file"><a href="20.4.php">Настройка параметров запроса. Отправка данных</a></span></li>
			<li><span class="file"><a href="20.5.php">Создание клиента для REST API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. Прочие статьи</span>
		<ul>
			<li><span class="file"><a href="15.1.php">JavaScript в CSS</a></span></li>
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
	
	$("li:contains('Глава 17.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 17.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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