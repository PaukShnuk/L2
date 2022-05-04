<!DOCTYPE html>
<html >
<head>
<title>React | Параметры маршрутов</title>
<meta charset="utf-8" />
<meta name="description" content="Параметры маршрутов в React, определение и получение параметров в компонентах, функция хук useParams">
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
<h2>Параметры маршрутов</h2><div class="date">Последнее обновление: 02.04.2022</div>

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

<p>Маршруты могут принимать параметры. Параметр имеет следующую форму определения: <code>:название_параметра</code>.</p>
<p>Например, используем параметры:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Маршруты в React&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;&lt;/div&gt;
          
    &lt;script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"&gt;&lt;/script&gt;
    &lt;script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/history@5/umd/history.production.min.js" crossorigin&gt;&lt;/script&gt;
 
    &lt;script src="https://unpkg.com/react-router@6/umd/react-router.production.min.js" crossorigin&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/react-router-dom@6/umd/react-router-dom.production.min.js" crossorigin&gt;&lt;/script&gt;
 
    &lt;script src="https://unpkg.com/@babel/standalone/babel.min.js"&gt;&lt;/script&gt;
          
    &lt;script type="text/babel"&gt;
    const Router = ReactRouterDOM.BrowserRouter;
    const Route = ReactRouterDOM.Route;
    const Routes = ReactRouterDOM.Routes;
    const useParams = ReactRouterDOM.useParams;
    const Outlet = ReactRouterDOM.Outlet;
  
    function ProductsList(){ return &lt;h2&gt;Список товаров&lt;/h2&gt;;}
    function Product(){
        // получаем параметры
        const params = useParams();
        const prodId = params.id;
        return &lt;h2&gt;Товар № {prodId}&lt;/h2&gt;;
    }
    function Products(){
       return (&lt;div&gt;
                &lt;h1&gt;Товары&lt;/h1&gt;
                &lt;Outlet /&gt;
            &lt;/div&gt;);
    }
    ReactDOM.createRoot(
        document.getElementById("app")
    )
    .render(
        &lt;Router&gt;
            &lt;div&gt;
              &lt;Routes&gt;
                &lt;Route path="/" element={&lt;h2&gt;Главная&lt;/h2&gt;} /&gt;
                &lt;Route path="/products" element={&lt;Products /&gt;}&gt;
                    &lt;Route index element={&lt;ProductsList /&gt;} /&gt;
                    &lt;Route path=":id" element={&lt;Product /&gt;} /&gt;
                &lt;/Route&gt;
                &lt;Route path="*" element={&lt;h2&gt;Ресурс не найден&lt;/h2&gt;} /&gt;
               &lt;/Routes&gt;
            &lt;/div&gt;
        &lt;/Router&gt;
    );
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>Для получения параметров маршрута применяется встроенная функция-хук <span class="b">useParams</span>, соответственно ее вначале необходимо получить:</p>
<pre class="brush:js;">const useParams = ReactRouterDOM.useParams;</pre>
<p>Здесь определен один маршрут, который принимает параметр:</p>
<pre class="brush:xml;">&lt;Route path=":id" element={&lt;Product /&gt;} /&gt;</pre>
<p>Причем он определен как дочерний по отношению к маршруту "/products". То есть к подобному ресурсу нам надо будет обращаться по адресу, к примеру</p> 
<pre class="brush:xml;">http://localhost:3000/products/5</pre>
<p>где 5 - значение для параметра id. Этот маршрут будет обрабатываться компонентом Product. Причем надо учитывать, что хуки могут применяться только в функциональных компонентах. Поэтому компонент Product определен в виде функции:</p>
<pre class="brush:xml;">
function Product(){
	// получаем параметры
	const params = useParams();
	const prodId = params.id;
	return &lt;h2&gt;Товар № {prodId}&lt;/h2&gt;;
}
</pre>
<p>Функция <span class="b">useParams()</span> возвращает набор параметров маршрута. Фактически такой набор представляет объект, а каждый отдельный параметр - свойство этого объекта. 
И чтобы получить параметр id, необходимо использовать выражение <code>params.id</code>.</p>
<p>Если же параметр не будет передан, например, при запросе <span class="ii">http://localhost:3000/products</span>, то он будет обрабатываться 
компонентом ProductsList.</p>
<p>И в зависимости от наличия параметра мы получим тот или иной результат:</p>
<img src="./pics/4.10.png" alt="Параметры маршрутов в React" />
<img src="./pics/4.11.png" alt="Передача параметров в React" />
<p>Стоит отметить, что поскольку функции-хуки, типа useParams, можно использовать только в функциональных компонентах, то напрямую использовать в компонентах=классах 
мы ее не можем. И при использовании компонентов-классов одно из распространенных решений состоит в том, чтобы компонент, который использует 
<code>useParams()</code>, сделать функциональным:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Маршруты в React&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;&lt;/div&gt;
         
    &lt;script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"&gt;&lt;/script&gt;
    &lt;script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/history@5/umd/history.production.min.js" crossorigin&gt;&lt;/script&gt;

    &lt;script src="https://unpkg.com/react-router@6/umd/react-router.production.min.js" crossorigin&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/react-router-dom@6/umd/react-router-dom.production.min.js" crossorigin&gt;&lt;/script&gt;

    &lt;script src="https://unpkg.com/@babel/standalone/babel.min.js"&gt;&lt;/script&gt;
         
    &lt;script type="text/babel"&gt;
    const Router = ReactRouterDOM.BrowserRouter;
    const Route = ReactRouterDOM.Route;
	const Routes = ReactRouterDOM.Routes;
	const useParams = ReactRouterDOM.useParams;
	const Outlet = ReactRouterDOM.Outlet;
 
     class ProductsList extends React.Component{
        render(){
            return &lt;h2&gt;Список товаров&lt;/h2&gt;;
        }
    }
    function Product(){
		// получаем параметры
		const params = useParams();
        const prodId = params.id;
        return &lt;h2&gt;Товар № {prodId}&lt;/h2&gt;;
    }
    class Products extends React.Component{
        render(){
            return (&lt;div&gt;
				&lt;h1&gt;Товары&lt;/h1&gt;
				&lt;Outlet /&gt;
			&lt;/div&gt;)
        }
    }
    ReactDOM.createRoot(
        document.getElementById("app")
    )
    .render(
        &lt;Router&gt;
            &lt;div&gt;
              &lt;Routes&gt;
                &lt;Route path="/" element={&lt;h2&gt;Главная&lt;/h2&gt;} /&gt;
                &lt;Route path="/products" element={&lt;Products /&gt;}&gt;
                    &lt;Route index element={&lt;ProductsList /&gt;} /&gt;
                    &lt;Route path=":id" element={&lt;Product /&gt;} /&gt;
				&lt;/Route&gt;
                &lt;Route path="*" element={&lt;h2&gt;Ресурс не найден&lt;/h2&gt;} /&gt;
			   &lt;/Routes&gt;
            &lt;/div&gt;
        &lt;/Router&gt;
    );
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>


<p>Подобным образом мы можем использовать и большее количество параметров. Например, изменим компонент Product и его маршрут:</p>
<pre class="brush:js;">
const Router = ReactRouterDOM.BrowserRouter;
    const Route = ReactRouterDOM.Route;
	const Routes = ReactRouterDOM.Routes;
	const useParams = ReactRouterDOM.useParams;
	const Outlet = ReactRouterDOM.Outlet;
 
    function ProductsList(){ return &lt;h2&gt;Список товаров&lt;/h2&gt;;}
    
    function Product(){
		// получаем параметры
		const params = useParams();
        const prodId = params.id;
        const prodName = params.name;
        return &lt;h2&gt;Id: {prodId}   Name: {prodName}&lt;/h2&gt;;
    }
    function Products(){
       return (&lt;div&gt;
                &lt;h1&gt;Товары&lt;/h1&gt;
                &lt;Outlet /&gt;
            &lt;/div&gt;);
    }
    ReactDOM.createRoot(
        document.getElementById("app")
    )
    .render(
        &lt;Router&gt;
            &lt;div&gt;
              &lt;Routes&gt;
                &lt;Route path="/" element={&lt;h2&gt;Главная&lt;/h2&gt;} /&gt;
                &lt;Route path="/products" element={&lt;Products /&gt;}&gt;
                    &lt;Route index element={&lt;ProductsList /&gt;} /&gt;
                    &lt;Route path=":id/:name" element={&lt;Product /&gt;} /&gt;
				&lt;/Route&gt;
                &lt;Route path="*" element={&lt;h2&gt;Ресурс не найден&lt;/h2&gt;} /&gt;
			   &lt;/Routes&gt;
            &lt;/div&gt;
        &lt;/Router&gt;
    );
</pre>
<p>Теперь компонент Product получает два параметра - id и name:</p>
<img src="./pics/4.9.png" alt="Параметры в маршрутах в React" />
<p>При этом необязательно для получения параметров определять вложенные маршруты, например, сократим код следующим образом:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Маршруты в React&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;&lt;/div&gt;
         
    &lt;script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"&gt;&lt;/script&gt;
    &lt;script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/history@5/umd/history.production.min.js" crossorigin&gt;&lt;/script&gt;
	&lt;script src="https://unpkg.com/react-router@6/umd/react-router.production.min.js" crossorigin&gt;&lt;/script&gt;
	&lt;script src="https://unpkg.com/react-router-dom@6/umd/react-router-dom.production.min.js" crossorigin&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/@babel/standalone/babel.min.js"&gt;&lt;/script&gt;
         
    &lt;script type="text/babel"&gt;
    const Router = ReactRouterDOM.BrowserRouter;
    const Route = ReactRouterDOM.Route;
	const Routes = ReactRouterDOM.Routes;
	const useParams = ReactRouterDOM.useParams;

    function Products(){
		const params = useParams();
		const prodId = params.id;
		const prodCat = params.cat;
		return &lt;h2&gt;Товар id: {prodId}   категория: {prodCat}&lt;/h2&gt;;
    }
    ReactDOM.createRoot(
        document.getElementById("app")
    )
    .render(
        &lt;Router&gt;
            &lt;div&gt;
              &lt;Routes&gt;
                &lt;Route path="/" element={&lt;h2&gt;Главная&lt;/h2&gt;} /&gt;
                &lt;Route path="/products/:id/:cat" element={&lt;Products /&gt;}/&gt;
                &lt;Route path="*" element={&lt;h2&gt;Ресурс не найден&lt;/h2&gt;} /&gt;
			   &lt;/Routes&gt;
            &lt;/div&gt;
        &lt;/Router&gt;
    );
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<img src="./pics/4.21.png" alt="Параметры в маршрутах в React-Router-Dom" />
<p>В то же время маршруту по пути "/products/:id/:cat" обязательно надо передать два параметра, если мы передадим в запросе только один параметр, то данный запрос будет обрабатываться 
последним маршрутом.</p>
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


<div class="nav"><p><a href="./4.3.php">Назад</a><a href="./">Содержание</a><a href="./4.5.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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