<!DOCTYPE html>
<html >
<head>
<title>React | Хук useRef</title>
<meta charset="utf-8" />
<meta name="description" content="Хук useRef в React, создание ссылки на html-элементы, взаимодействие с useEffect и useState, загрузка и сохранение состояния в localStorage">
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
<h2>Хук useRef</h2><div class="date">Последнее обновление: 01.04.2022</div>

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

<p>Хук <span class="b">useRef</span> позволяет сохранить некоторый объект, который можно можно изменять и который хранится в течение всей 
жизни компонента.</p>
<p>В качестве параметра функция <span class="b">useRef()</span> принимает начальное значение хранимого объекта. А возвращаемое значение - 
ссылка-объект, из свойства <span class="b">current</span> которого можно получить хранимое значение.</p> 
<pre class="brush:js;">
const refUser = useRef("Tom");
console.log(refUser.current);	// Tom
</pre>
<p>Расспространенным примером применения <span class="b">useRef</span> является хранение ссылки на html-элементы внутри компонента:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;&lt;/div&gt;
	
    &lt;script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"&gt;&lt;/script&gt;
    &lt;script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/@babel/standalone/babel.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/babel"&gt;
     
	function UserForm() {
	  const nameField = React.useRef(null);
	  const send = () =&gt; {
		// свойство current указывает на элемент input
		const inputElement = nameField.current;
		console.log("Имя: " + inputElement.value);
	  };
	  return (
		&lt;div&gt;
		  &lt;input type="text" ref={nameField} /&gt;
		  &lt;button onClick={send}&gt;Отправить&lt;/button&gt;
		&lt;/div&gt;
	  );
	}
            
    ReactDOM.createRoot(
        document.getElementById("app")
    )
    .render(
        &lt;UserForm /&gt;
    );
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь в компоненте сначала создается ссылка ref:</p>
<pre class="brush:js;">const nameField = React.useRef(null);</pre>
<p>В данном случае нам начальное значение не важно, поэтому в <code>useRef</code> передается значение <code>null</code>. 
Однако в html-коде компонента определено текствое поле ввода:</p>
<pre class="brush:xml;">&lt;input type="text" ref={nameField} /&gt;</pre>
<p>С помощью атрибута <code>ref</code> устанавливаем привязку этого поля к ссылке <code>nameField</code>. То есть через свойство 
<code>nameField.current</code> мы сможем получить объект, который представляет это поле ввода <code>&lt;input&gt;</code>.</p>
<pre class="brush:js;">
const inputElement = nameField.current;
console.log("Имя: " + inputElement.value);
</pre>
<p>Получив объект, который представляет поле ввода, мы сможем выполнять с ним необходимые операции. В данном случае имитируется отправка введенного значения - 
ввод на консоль значения свойства <code>value</code> поля ввода:</p>
<img src="./pics/6.8.png" alt="хук useRef в React" />
<p>Но это могут быть самые различные действия - получение и изменение свойств или вызов методов.</p>
<p>Однако только операциями с элементами html применение <code>useRef</code> не ограничивается. В реальности <code>useRef</code> может 
хранить любой объект, и это может быть полезно в различных ситуациях.</p>
<p>Например, рассмотрим ситуацию, когда вначале компонент загружает состояние из LocalStorage, а после окончания работы с компонентом при завершении его жизненного 
цикла он сохраняет состояние обратно в LocalStorage. На первый взгляд мы можем обойтись одним хуком <code>useEffect</code>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;&lt;/div&gt;
	
    &lt;script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"&gt;&lt;/script&gt;
    &lt;script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/@babel/standalone/babel.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/babel"&gt;
    const root = ReactDOM.createRoot(
        document.getElementById("app")
    );
    function UserForm() {
      const [name, setName] = React.useState("Tom");
	  
      React.useEffect(() =&gt; {    
         // извлекаем данные из localStorage
		 const userName = localStorage.getItem("userName");
		 // если в localStorage есть такой объект
		 if(userName!==null) {
			setName(userName);
			console.log("Got!");
		}
		
		// сохраняем данные в localStorage
		return()=&gt;{
			console.log(name);
			localStorage.setItem("userName", name); 
			console.log("Saved!");
		}
      },
	  []); // эффект срабатывает только один раз - при самом первом рендеринге
       
      const changeName = (event) =&gt; setName(event.target.value);
      const unmount =() =&gt; root.unmount();
	  
      return (
        &lt;div&gt;
          &lt;h3&gt;Имя: {name}&lt;/h3&gt;
           
          &lt;div&gt;
            &lt;p&gt;Имя: &lt;input type="text" value={name} onChange={changeName} /&gt;&lt;/p&gt;
			&lt;button onClick={unmount}&gt;Unmount&lt;/button&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      );
    }
            
    root.render(
        &lt;UserForm /&gt;
    );
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Вначале в компоненте определяет начальное состояние в виде переменной name:</p>
<pre class="brush:js;">const [name, setName] = React.useState("Tom");</pre>
<p>Далее в хуке <code>React.useEffect()</code> загружаем данные из LocalStorage:</p>
<pre class="brush:js;">const userName = localStorage.getItem("userName");</pre>
<p>И чтобы сохранять данные, оператору return передается функция сохранения данных:</p>
<pre class="brush:js;">
return ()=&gt;{
	console.log(name);
	localStorage.setItem("userName", name); 
	console.log("Saved!");
}
</pre>
<p>Поскольку нам нужно, чтобы эффект срабатывал только один раз - извлечение данных происходило при загрузке компонента, а сохранение данных 
при удалении компонента в конце его работы, в хук useEffect передаются пустые скобки:</p>
<pre class="brush:js;">
React.useEffect(() =&gt; {    
         // ....................
},
[]); 	// эффект вызывается только один раз
</pre>
<p>Для имитации удаления компонента и завершения его жизненного цикла в нем предумотрена кнопка, по нажатию на которую мы ожидаем, что произойдет сохранение значения переменной name в localStorage. 
Однако поведение программы будет несколько иное:</p>
<img src="./pics/6.9.png" alt="useEffect и useRef в React" />
<p>Поскольку useEffect срабатывает в данном случае один раз, то соответственно он берет значение перемеенной name только один раз и никак не отслеживает 
ее изменения. Мы, конечно, могли бы передать в качестве параметра эту переменную name:</p>
<pre class="brush:js;">
React.useEffect(() =&gt; {    
         // ....................
},
[name]); 	// эффект вызывается при каждом обновлении name
</pre>
<p>Но тогда бы useEffect вызывался при каждом изменении переменной name.</p>
<p>Теперь применим хук useRef:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;&lt;/div&gt;
	
    &lt;script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"&gt;&lt;/script&gt;
    &lt;script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/@babel/standalone/babel.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/babel"&gt;
      
    const root = ReactDOM.createRoot(
      document.getElementById("app")
    );
    function UserForm() {
      const [name, setName] = React.useState("Tom");
	  const nameRef = React.useRef(name);
	  
	  React.useEffect(() =&gt; { 
	  
		nameRef.current = name;
	  }, [name]);
	  
      React.useEffect(() =&gt; {    
         // извлекаем данные из localStorage
		 const userName = localStorage.getItem("userName");
		 // если в localStorage есть такой объект
		 if(userName!==null) {
			setName(userName);
			console.log("Got!");
		}
		
		// сохраняем данные в localStorage
		return()=&gt;{
			console.log(nameRef.current);
			localStorage.setItem("userName", nameRef.current); 
			console.log("Saved!");
		}
      },
	  []); // эффект срабатывает только один раз - при самом первом рендеринге
       
      const changeName = (event) =&gt; setName(event.target.value);
      const unmount =() =&gt; root.unmount();
	  
      return (
        &lt;div&gt;
          &lt;h3&gt;Имя: {name}&lt;/h3&gt;
           
          &lt;div&gt;
            &lt;p&gt;Имя: &lt;input type="text" value={name} onChange={changeName} /&gt;&lt;/p&gt;
			&lt;button onClick={unmount}&gt;Unmount&lt;/button&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      );
    }
            
    root.render(
        &lt;UserForm /&gt;
    );
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь вместе с состоянием компонента определяем ссылку nameRef:</p>
<pre class="brush:js;">const nameRef = React.useRef(name);</pre>
<p>Ее начальное значение - это значение переменной name. И при каждом изменении переменной name соответственно меняем и значение в ссылке 
nameRef. Для этого определяем эффект с помощью хука <code>useEffect</code>:</p>
<pre class="brush:js;">
React.useEffect(() =&gt; { 
	  
	nameRef.current = name;
}, [name]);
</pre>
<p>При этом данный эффект зависит от name, то есть срабатывает при любых изменениях значения name.</p>
<p>Основной хук <code>useEffect</code>, который сохраняет данные в LocalStorage, по прежнему запускается один раз - при первом рендеринге. 
Однако теперь мы сохраняем не значение переменной name, а значение в ссылке nameRef:</p>
<pre class="brush:js;">
// сохраняем данные в localStorage
return()=&gt;{
	console.log(nameRef.current);
	localStorage.setItem("userName", nameRef.current); 
	console.log("Saved!");
}
</pre>
<p>В отличие от переменной состояния name в useEffect, значение по ссылке nameRef будет изменяться, несмотря на то что, useEffect по-прежнему 
сработает только один раз</p>
<img src="./pics/6.10.png" alt="state и ref в useEffect и useRef в React" />

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


<div class="nav"><p><a href="./6.3.php">Назад</a><a href="./">Содержание</a><a href="./4.1.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в  React</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/1.1.php">Что такое React. Первое приложение</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/1.3.php">Основы JSX</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/1.6.php">Сервер. Node.js</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/1.4.php">Babel-cli</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/1.5.php">React Developer Tools</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы React</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/2.1.php">Рендеринг элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.2.php">Компоненты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.3.php">Props</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.5.php">События</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.9.php">Упаковка файлов и Webpack</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Состояние. Управление компонентами-классами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/2.4.php">State</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.6.php">Жизненный цикл компонента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.7.php">Управление ресурсами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/3.1.php">Работа с формами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/3.3.php">Валидация форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/3.2.php">Refs</a></span></li>
		</ul>
	</li>

	<li class="closed"><span class="folder">Глава 4. Хуки. Управление функциональными компонентами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/6.1.php">Введение в хуки</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/6.2.php">Хук useState</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/6.3.php">Хук useEffect</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/6.4.php">Хук useRef</a></span></li>
		</ul>
	</li>
<li class="closed"><span class="folder">Глава 5. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/4.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.2.php">Дочерние маршруты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.3.php">Создание ссылок</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.4.php">Параметры маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.5.php">Ссылки с параметрами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.6.php">Парсинг строки запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.7.php">Переадресация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/4.8.php">React-router и webpack</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Flux и Redux</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/5.1.php">Flux</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/5.3.php">Redux</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Дополнительные статьи</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/react/7.1.php">Создание пошаговой формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/react/2.8.php">Поиск в списке и фильтрация</a></span></li>
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