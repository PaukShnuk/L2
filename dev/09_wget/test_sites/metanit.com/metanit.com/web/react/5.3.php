<!DOCTYPE html>
<html >
<head>
<title>React | Введение в Redux</title>
<meta charset="utf-8" />
<meta name="description" content="Архитектура Redux, ее основные особенности, компоненты и использование в React">
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
<h2>Введение в Redux</h2><div class="date">Последнее обновление: 03.04.2022</div>

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

<p>Еще одну форму построения архитектуры приложения на React представляет Redux. <span class="b">Redux</span> представляет собой контейнер для управления состоянием приложения и во многом 
напоминает Flux. Redux не привязан непосредственно к React.js и может также использоваться с другими js-библиотеками и фреймворками.</p>
<p>Ключевые моменты Redux:</p>
<ul>
<li><p><span class="b">Хранилище</span> (store): хранит состояние приложения</p></li>
<li><p><span class="b">Действия</span> (actions): некоторый набор информации, который исходит от приложения 
к хранилищу и который указывает, что именно нужно сделать. Для передачи этой информации у хранилища вызывается метод <span class="b">dispatch()</span>.</p></li>
<li><p><span class="b">Создатели действий</span> (action creators): функции, которые создают действия</p></li>
<li><p><span class="b">Reducer</span> : функция (или несколько функций), которая получает действие и в соответствии с этим действием изменяет состояние хранилища</p></li>
</ul>
<p>Общую схему взаимодействия элементов архитектуры Redux можно выразить следующим образом:</p>
<img src="./pics/5.8.png" alt="Redux в React.JS" />
<p>Из View (то есть из компонентов React) мы посылаем действие, это действие получает функция reducer, которая в соответствии с действием обновляет состояние хранилища. Затем компоненты React применяют обновленное состояние из хранилища.</p>
<p>Рассмотрим, как все это будет работать в приложении на React.</p>
<p>Итак, создадим для проекта новый каталог и определим в нем файл <span class="b">package.json</span>:</p>
<pre class="brush:js;">
{
  "name": "reduxapp",
  "description": "A React.js project using Redux",
  "version": "1.0.0",
  "author": "metanit.com",
  "scripts": {
    "dev": "webpack serve",
    "build": "webpack"
  },
  "dependencies": {
    "react": "18.0.0",
    "react-dom": "18.0.0",
    "react-redux": "7.2.8",
    "redux": "4.1.2",
     "immutable": "4.0.0"
  },
  "devDependencies": {
    "@babel/cli": "7.17.0",
    "@babel/core": "7.17.0",
    "@babel/preset-react": "7.16.0",
    "babel-loader": "8.2.0",
    "webpack": "5.70.0",
    "webpack-cli": "4.9.0",
    "webpack-dev-server": "4.7.0"
  }
}
</pre>
<p>Для работы с Redux в React нам понадобятся зависимости "redux" и "react-redux". Кроме того, для работы с данными будем использовать тип Immutable.Map, поэтому также 
добавляем зависимость "immutable". А в узле "devDependencies" определены зависимости babel и webpack, которые потребуются для компиляции и сборки кода приложения.</p>
<p>Также добавим в каталог проекта новый файл <span class="b">webpack.config.js</span>:</p>
<pre class="brush:js;">
const path = require("path");
  
module.exports = {
    mode: "development",
    entry: "./app/app.jsx", // входная точка - исходный файл
    output:{
        path: path.resolve(__dirname, "./public"),     // путь к каталогу выходных файлов - папка public
        publicPath: "/public/",
        filename: "bundle.js"       // название создаваемого файла
    },
    devServer: {
     historyApiFallback: true,
     static: {
      directory: path.join(__dirname, "/"),
    },
     port: 8081,
     open: true
   },
    module:{
        rules:[   //загрузчик для jsx
            {
                test: /\.jsx?$/, // определяем тип файлов
                exclude: /(node_modules)/,  // исключаем из обработки папку node_modules
                loader: "babel-loader",   // определяем загрузчик
                options:{
                    presets:[ "@babel/preset-react"]    // используемые плагины
                }
            }
        ]
    }
}
</pre>
<p>В данном случае мы определяем, что исходный файл приложения будет находится по пути "app/app.jsx", а компилируемый файл будет находиться по пути "public/bundle.js".</p>
<p>И также добавим в каталог проекта веб-страницу <span class="b">index.html</span>, на которой будет подключаться скомпилированный файл:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;title&gt;Hello Redux&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;div id="app"&gt;&lt;/div&gt;
  &lt;script src="public/bundle.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Определение действий</h3>
<p>Теперь определим сам код приложения. Для этого определим в проекте новую папку <span class="b">app</span>. В эту папку вначале добавим новый файл 
<span class="b">actions.jsx</span>, который будет представлять действия:</p>
<pre class="brush:js;">
const addPhone = function (phone) {
  return {
    type: "ADD_PHONE",
    phone
  }
};
const deletePhone = function (phone) {
  return {
    type: "DELETE_PHONE",
    phone
  }
};

module.exports = {addPhone, deletePhone};
</pre>
<p>Здесь определены две функции, которые создают действия: для добавления и удаления объекта. Каждое действие имеет свойство <code>type</code>, 
которое описывает действие, и свойство <code>phone</code> - непосредственно данные, которые передаются вместе с действием.</p>
<h3>Reducer</h3>
<p>Затем создадим в папке <span class="b">app</span> новый файл <span class="b">reducer.jsx</span>:</p>
<pre class="brush:js;">
const Map = require("immutable").Map;

const reducer = function(state = Map(), action) {
  switch (action.type) {
    case "SET_STATE":
		return state.merge(action.state);
    case "ADD_PHONE":
		return state.update("phones", (phones) =&gt; [...phones, action.phone]);
    case "DELETE_PHONE":
		return state.update("phones",
			(phones) =&gt; phones.filter(
				(item) =&gt; item !== action.phone
			)
		);
  }
  return state;
}
module.exports = reducer;
</pre>
<p>Здесь описана функция reducer, которая получает действия и изменяет состояние хранилища.</p>
<p>Состояние хранилища будет представлять тип <a href="https://facebook.github.io/immutable-js/docs/#/Map" rel="nofollow">Immutable.Map</a>, 
который представляет собой словарь, хранящий пары ключ-значение. В качестве ключей здесь используются названия свойств объекта.</p>
<p>В функции reducer при определении параметра присваиваем состоянию начальное значение - пустой словарь:</p>
<pre class="brush:js;">function(state = Map(), action)</pre>
<p>Первый параметр - это собственно состояние хранилища. Второй параметр - action - передает действие. Так, как наши действия имеют свойство <code>type</code>, 
то мы можем получить это свойство и в зависимости от его значения тем или иным образом обновить состояние. Для обновления состояния применяются 
методы класса Immutable.Map. Каждый такой метод возвращает новый объект Immutable.Map.</p>
<p>Здесь предполагается, что в состоянии будет храниться массив <code>phones</code>, который будет содержать строки - название моделей телефонов. 
При добавлении фактически создается новый массив, в который добавляются все элементы из старого массива phones и новый - добавляемый элемент:</p>
<pre class="brush:js;">return state.update("phones", (phones) =&gt; [...phones, action.phone]);</pre>
<p>А для удаления мы просто возвращаем все те элементы, которые не равны удаляемому объекту. 
Для этого применяется функция <code>phones.filter</code>, которая выполняет фильтрацию:</p>
<pre class="brush:js;">
return state.update("phones",
			(phones) =&gt; phones.filter(
				(item) =&gt; item !== action.phone
			)
		);
</pre>
<p>Кроме того, здесь применяется действие с типом "SET_STATE", которое просто возвращает начальное состояние хранилища:</p>
<pre class="brush:js;">return state.merge(action.state);</pre>
<p>И после каждого обновления состояния нам надо возвратить обновленное состояние. Таким образом произойдет обновление хранилища.</p>
<h3>Определение представления</h3>
<p>Далее добавим в папку <span class="b">app</span> файл <span class="b">appview.jsx</span>, который будет определять всю визуальную часть:</p>
<pre class="brush:js;">
const React = require("react");
const connect = require("react-redux").connect;
const actions = require("./actions.jsx");
 
class PhoneForm extends React.Component {
  constructor(props) {
    super(props);
    this.phoneInput = React.createRef();
  }
  onClick() {
    if (this.phoneInput.current.value !== "") {

      const itemText = this.phoneInput.current.value;
      this.phoneInput.current.value ="";
      return this.props.addPhone(itemText);
    }
  }
  render() {
    return &lt;div&gt;
            &lt;input ref={this.phoneInput} /&gt;
            &lt;button onClick = {this.onClick.bind(this)}&gt;Добавить&lt;/button&gt;
        &lt;/div&gt;
  }
};
 
class PhoneItem extends React.Component {
  constructor(props) {
    super(props);
  }
  render() {
     
    return &lt;div&gt;
                &lt;p&gt;
                    &lt;b&gt;{this.props.text}&lt;/b&gt;&lt;br /&gt;
                    &lt;button onClick={() =&gt; this.props.deletePhone(this.props.text)}&gt;Удалить&lt;/button&gt; 
                &lt;/p&gt;
            &lt;/div&gt;
  }
};
 
class PhonesList extends React.Component {
  constructor(props) {
    super(props);
  }
  render() {
    return &lt;div&gt;
        {this.props.phones.map(item =&gt;
          &lt;PhoneItem key={item}
                    text={item}
                    deletePhone={this.props.deletePhone}/&gt;
        )}
      &lt;/div&gt;
  }
};
 
class AppView extends React.Component {
 
    render() {
        return &lt;div&gt;
            &lt;PhoneForm addPhone={this.props.addPhone}/&gt;
            &lt;PhonesList {...this.props} /&gt;
    &lt;/div&gt;
  }
};
 
function mapStateToProps(state) {
  return {
    phones: state.get("phones")
  };
}
 
module.exports = connect(mapStateToProps, actions)(AppView);
</pre>
<p>Собственно визуальная часть состоит из трех компонентов. Компонент PhoneForm используется для добавления нового объекта. PhoneItem представляет отдельный элемент в списке, 
а компонент PhonesList содержит список объектов из массива phones.</p>
<p>Корневым компонентом является AppView, в который помещаются все остальные компоненты. Вобщем здесь идет в основном логика передачи данных между компонентами через 
объект props. В частности, чтобы передать все данные из props компонента AppView в компонент PhonesList, используется выражение <code>{...this.props}</code>.</p>
<p>Но большое значение имеет то, что идет после определения класса AppView, в частности, выражение:</p>
<pre class="brush:js;">connect(mapStateToProps, actions)(AppView)</pre>
<p>Функция <span class="b">connect</span> из пакета "react-redux" позволяет связать хранилище и компонент (в данном случае AppView). Благодаря этому  все данные из хранилища будут передавать в компонент через 
объект <span class="b">props</span>. Дополнительно мы можем установить ряд настроек. Так, первая функция <code>mapStateToProps()</code>, которая передается в connect, 
позволяет установить сопоставление между объектами из состояния хранилища с объектам в props у компонента AppView. В данном случае мы просто устанавливаем, 
что значение <code>this.props.phones</code> в компоненте AppView будет передавать значение из объекта <code>phones</code> из хранилища:</p>
<pre class="brush:js;">
function mapStateToProps(state) {
  return {
    phones: state.get("phones")
  };
}
</pre>
<p>Второй параметр в функции connect представляет набор действий, которые вызываются в компоненте AppView или в его дочерних компонентах. И опять же эти действия 
после этого мы сможем получить в компоненте AppView через значения <code>this.props.addPhone</code> и <code>this.props.deletePhone</code>.</p>
<p>Действие <code>this.props.addPhone</code> передается в компонент PhoneForm и в нем уже вызывается по клику на кнопку. А действие 
<code>this.props.deletePhone</code> передается в компонент PhonesList, а через него далее в PhoneItem и там также вызывается по нажатию на кнопку "Удалить".</p>
<h3>Объединение всех компонентов приложения</h3>
<p>Теперь определим в папке <span class="b">app</span> основной файл <span class="b">app.jsx</span>:</p>
<pre class="brush:js;">
const React = require("react");
const ReactDOM = require("react-dom/client");
const redux = require("redux");
const Provider = require("react-redux").Provider;
const reducer = require("./reducer.jsx");
const AppView = require("./appview.jsx");

const store = redux.createStore(reducer);

store.dispatch({
  type: "SET_STATE",
  state: {
    phones: [ "Xiaomi Mi 10", "Samsung Galaxy Note20" ]
  }
});

ReactDOM.createRoot(
    document.getElementById("app")
)
.render(
  &lt;Provider store={store}&gt;
    &lt;AppView /&gt;
  &lt;/Provider&gt;
);
</pre>
<p>Вначале здесь собственно создается хранилище:</p>
<pre class="brush:js;">const store = redux.createStore(reducer);</pre>
<p>В метод <code>redux.createStore()</code> следует передать функцию reducer, которая используется для обновления хранилища.</p>
<p>Используя метод <code>store.dispatch()</code>, можно выполнить какое-либо действие. В частности, здесь выполняется действие с типом "SET_STATE", 
которое устанавливает начальные данные для состояния хранилища.</p>
<p>Чтобы связать хранилище и компонент, применяется провайдер - класс <span class="b">Provider</span> из пакета "react-redux". У провайдера устанавливается 
объект хранилища через свойство <span class="b">store</span>: <code>&lt;Provider store={store}&gt;</code>. Поэтому именно это хранилище и будет использоваться для 
поставки данных в AppView через выше рассмотренную функцию connect.</p>
<p>Таким образом, весь проект будет выглядеть следующим образом:</p>
<img src="./pics/5.9.png" alt="Применение Redux в React" />
<p>Затем перейдем в командной строке/терминале к каталогу проекта и для установки пакетов выполним команду:</p>
<div class="console"><pre class="consoletext">npm install</pre></div>
<p>И в конце запустим проект на выполнение командой <span class="b">npm run dev</span>:</p>
<img src="./pics/5.10.png" alt="Проект React с Redux" />
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


<div class="nav"><p><a href="./5.1.php">Назад</a><a href="./">Содержание</a><a href="./6.1.php">Вперед</a></p></div></div>
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