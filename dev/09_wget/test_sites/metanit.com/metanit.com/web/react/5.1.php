<!DOCTYPE html>
<html >
<head>
<title>React | Введение в Flux</title>
<meta charset="utf-8" />
<meta name="description" content="Архитектура Flux, ее основные особенности, компоненты и использование в React">
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
<h1>Flux и Redux</h1><h2>Введение в Flux</h2><div class="date">Последнее обновление: 02.04.2022</div>

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

<p>Flux представляет архитектуру приложений, которые используют React. Flux больше представляет паттерн, чем конкретный фреймворк.</p>
<p>Приложения, использующие Flux, имеют три основные части: <span class="b">диспетчер (dispatcher) </span>, <span class="b">хранилище данных (store)</span> 
и <span class="b">представления (view)</span> - стандартные компоненты React.</p>
<p><span class="b">Диспетчер</span> представляет во всей этой схеме центральное звено, которое управляет потоком данных в приложении Flux. 
Диспетчер регистрирует хранилища и их коллбеки - обратные вызовы. Когда диспетчер получает извне некоторое действие, то через коллбеки хранилищ 
диспетчер уведомляет эти хранилища о поступившем действии.</p>
<p><span class="b">Хранилища</span> содержат состояние приложения и его логику. По своему действию они могут напоминать модель из паттерна MVC, 
в то же время они не представляют один объект, а управляют группой объектов. Каждое отдельное хранилище управляет определенной областью или доменом приложения.</p>
<p>Как было описано выше, каждое хранилище регистрируется в диспетчере вместе со своими обратными вызовами. Когда диспетчер получает действие, то он выполняет 
обратный вызов, передавая ему поступившее действие в качестве параметра. В зависимости от типа действия вызывается тот или иной метод внутри хранилища, в котором происходит обновление 
состояния хранилища.  После обновления хранилища генерируется событие, которое указывает, что хранилище было обновлено. И через это событие 
представления (то есть компоненты React) узнают, что хранилище было обновлено, и сами обновляют свое состояние.</p>

<p><span class="b">Представления</span> оформляют визуальную часть приложения. Особый вид представлений - controller-view представляет компонент самого верхнего уровня, 
который содержит все остальные компоненты. Controller-view прослушивает события, которые исходят от хранилища. 
Получив событие, controller-view передает данные, полученные от хранилища, другим компонентам.</p>
<p>Когда controller-view получает событие от хранилища, то вначале controller-view запрашивает у хранилища все необходимые данные. Затем он вызывает свой метод <span class="b">setState()</span> или 
<span class="b">forceUpdate()</span>, который приводит к выполнению у компонента метода <span class="b">render()</span>. А это в свою очередь приводит к вызову метода 
<span class="b">render()</span> и обновлению дочерних компонентов.</p>
<p>Нередко состояние хранилища передается по иерархии компонентов в виде единого объекта, а компоненты извлекают из него только те данные, которые им непосредственно нужны.</p>
<p><span class="b">Действие</span> представляет функцию, которая может содержать некоторые данные, которые передаются диспетчеру. 
Действие может быть вызвано обработчиками событий в компонентах, например, по нажатию на кнопку, либо инициатором действий может какой-нибудь другой внешний источник, например, сервер. Через диспетчер хранилище получает действие и соответствующим образом 
реагирует на него.</p>
<p>Весь механизм взаимодействия можно представить в виде однонаправленного потока от действия (action) к представлению (view):</p>
<img src="./pics/5.1.png" alt="Механизм работы Flux в React" />
<p>Когда пользователь взаимодействует с представлением, то представления через диспетчер вызывают различные действия (например, добавление или обновление данных) по отношению к 
хранилищу, обратно от хранилища к представлению идут ответные действия, которые обновляют представление.</p>
<img src="./pics/5.2.png" alt="Представление и диспетчер во Flux в React" />
<p>Рассмотрим действие архитектуры Flux на примере. Но стоит отметит, что на момент написания данной статьи (март 2022 года) самая последняя версия flux пока не 
поддерживала react 18, поэтому далее в проекте будет использоваться react 17.</p>
<p>Итак, создадим новый проект и для этого определим новый каталог <span class="b">fluxapp</span>. Вначале добавим в него новый файл 
<span class="b">package.json</span>:</p>
<pre class="brush:js;">
{
  "name": "fluxapp",
  "description": "A React.js project using Flux",
  "version": "1.0.0",
  "author": "metanit.com",
  "scripts": {
    "dev": "webpack serve",
    "build": "webpack"
  },
  "dependencies": {
    "react": "17.0.0",
    "react-dom": "17.0.0",
    "flux": "4.0.0",
    "immutable": "4.0.0"
  },
  "devDependencies": {
    "@babel/cli": "7.17.0",
    "@babel/core": "7.17.0",
    "@babel/preset-react": "7.16.0",
    "@babel/preset-env": "7.16.0",
    "babel-loader": "8.2.0",
    "webpack": "5.70.0",
    "webpack-cli": "4.9.0",
    "webpack-dev-server": "4.7.0"
  }
}
</pre>
<p>Кроме зависимостей react и react-dom здесь добавлена зависимость flux. Кроме того, так как приложение будет разбито на отдельные части, то для их компиляции и 
сборки применяются пакеты babel и webpack.</p>
<p>Затем перейдем в командной строке/терминале к каталогу проекта и для установки пакетов выполним команду</p>
<div class="console"><pre class="consoletext">npm install</pre></div>
<p>Далее определим в проекте главную страницу <span class="b">index.html</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Flux в React&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="container"&gt;&lt;/div&gt;
    &lt;script src="public/bundle.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>То есть все файлы приложения будут компилироваться в файл <span class="b">public/bundle.js</span>, который подключается на веб-странице.</p>
<p>Для всей логики с использованием React создадим в проекте новую папку <span class="b">app</span>.</p>
<h3>Определение действий и диспетчера</h3>
<p>И вначале определим, какие действия будет выполнять приложение. 
В нашем случае будет простейшее приложение, которое будет управлять списком объектов - добавлением и удалением. Поэтому добавим в папку <span class="b">app</span> новый каталог 
<span class="b">data</span>, в котором определим новый файл <span class="b">ActionTypes.js</span>:</p>
<pre class="brush:js;">
const ActionTypes = { ADD_ITEM: "ADD_ITEM", REMOVE_ITEM: "REMOVE_ITEM"};

export default ActionTypes;
</pre>
<p>Итак, здесь определено два типа действий. И также в каталог <span class="b">app/data</span> добавим новый файл 
<span class="b">PhonesDispatcher.js</span>, который будет содержать определение диспетчера:</p>
<pre class="brush:js;">
import {Dispatcher} from "flux";

export default new Dispatcher();
</pre>
<p>Диспетчер представляет объект класса <span class="b">Dispatcher</span> из пакета flux.</p>
<p>И также добавим в каталог <span class="b">app/data</span> новый файл <span class="b">Actions.js</span>:</p>
<pre class="brush:js;">
import ActionTypes from "./ActionTypes.js";
import PhonesDispatcher from "./PhonesDispatcher.js";

const Actions = {
  addItem(text) {
    PhonesDispatcher.dispatch({
      type: ActionTypes.ADD_ITEM,
      text,
    });
  },
  removeItem(text) {
    PhonesDispatcher.dispatch({
      type: ActionTypes.REMOVE_ITEM,
      text,
    });
  }
};

export default Actions;
</pre>
<p>Этот файл собственно определяет действия. Каждое действие определяется в виде функции, в которую могут передаваться параметры. В нашем случае 
список объектов будет представлять набор строк, поэтому в действия добавления и удаления элемента передается строка - добавляемый или удаляемый объект.</p>
<p>В самом действии вызывается метод <span class="b">dispatch</span>. В качестве параметра этот метод принимает объект, в котором передаем тип действия и собственно данные. Но вообще в объекте можно 
определить любые данные, которые нам необходимы. При вызове действия этот объект будет передаваться в хранилище.</p>
<h3>Определение хранилища</h3>
<p>Далее также в каталоге <span class="b">app/data</span> определим для хранилища файл <span class="b">PhoneStore.js</span>:</p>
<pre class="brush:js;">
import Immutable from "immutable";
import {ReduceStore} from "flux/utils";
import ActionTypes from "./ActionTypes.js";
import PhonesDispatcher from "./PhonesDispatcher.js";

class PhonesStore extends ReduceStore{
	constructor()
    {
        super(PhonesDispatcher);
    }
	getInitialState() {
		return Immutable.List.of("Apple iPhone 12 Pro", "Google Pixel 5");
	}

	reduce(state, action) {
		switch (action.type) {
			case ActionTypes.ADD_ITEM:
				if (action.text) {
				  return state.push(action.text);
				}
				return state;
			case ActionTypes.REMOVE_ITEM:
				let index = state.indexOf(action.text);
				if (index &gt; -1) {
					return state.delete(index);
				}
				return state;
			default:
				return state;
		}
	}
}
export default new PhonesStore();
</pre>
<p>Хранилище представляет собой класс, унаследованный от класса <span class="b">ReduceStore</span> из пакета "flux/utils". В конструкторе хранилища в конструктор 
базового класса передается объект диспетчера.</p>
<p>С помощью метода <span class="b">getInitialState()</span> устанавливается состояние хранилища. В данном случае это список - объект <span class="b">Immutable.List</span>. Он во многом 
аналогичен массиву javascript за тем исключением, что он является неизменяемым списком, а все операции с ним возвращают новый обновленный список. Подробнее про работу с такими 
коллекция можно посмотреть на странице <a href="https://facebook.github.io/immutable-js/" rel="nofollow">immutable-js</a></p>
<p>В унаследованном методе <span class="b">reduce()</span> получаем два объекта - state (текущее состояние хранилища, то, что изначально возвращается 
методом getInitialState) и action (тот объект, который передается в действии - то есть тип действия, добавляемый или удаляемый элемент). 
С помощью конструкции switch смотрим, какое действие было вызвано, и в зависимости от типа действия выполняем или добавление или удаление элемента.</p>
<h3>Определение представления</h3>
<p>Это была вся логика по работе с данными. Теперь определим визуальную часть. Для этого в каталог <span class="b">app</span> добавим новую папку 
<span class="b">views</span>. Далее в этой папке <span class="b">app/views</span> создадим новый файл <span class="b">AppView.js</span>:</p>
<pre class="brush:js;">
import React from "react";

class AppView extends React.Component{

    constructor(props){
		super(props);
		this.state = {newItem: ""};
		
		this.onInputChange = this.onInputChange.bind(this);
		this.onClick = this.onClick.bind(this);
	}
	onInputChange(e){
		this.setState({newItem:e.target.value});
	}
	onClick(e){
		if(this.state.newItem){
			this.props.onAddItem(this.state.newItem);
			this.setState({newItem:" "});
		}
	}
	render(){
		
		let remove = this.props.onRemoveItem;
		return &lt;div&gt; 
				&lt;input type="text" value={this.state.newItem} onChange={this.onInputChange} /&gt;	
				&lt;button onClick={this.onClick}&gt;Добавить&lt;/button&gt;				
                &lt;h2&gt;Список смартфонов&lt;/h2&gt;
                &lt;div&gt;
                    {
                        this.props.phones.map(function(item){
							
                            return &lt;Phone key={item} text={item} onRemove={remove} /&gt;
                        })
                    }
                &lt;/div&gt;
            &lt;/div&gt;;
    }
}

class Phone extends React.Component{

    constructor(props){
		super(props);
		this.state = {text: props.text};
		this.onClick = this.onClick.bind(this);
	}
	onClick(e){
		this.props.onRemove(this.state.text);
	}
	render(){
		return &lt;div&gt; 
				&lt;p&gt;
					&lt;b&gt;{this.state.text}&lt;/b&gt;&lt;br /&gt;
					&lt;button onClick={this.onClick}&gt;Удалить&lt;/button&gt;	
				&lt;/p&gt;
            &lt;/div&gt;;
    }
}
export default AppView;
</pre>
<p>Класс AppView представляет компонент верхнего уровня, в котором выводится список. Каждый элемент списка представлен отдельным компонентом Phone. 
Отдельные компоненты также можно было бы поместить в отдельные файлы, но для простоты я разместил их в одном файле.</p>
<h3>Определение контейнера</h3>
<p>Для соединения хранилищ, действий и представлений во Flux применяются контейнеры. Поэтому добавим в каталог <span class="b">app</span> новую папку 
<span class="b">containers</span>, в которой создадим файл <span class="b">AppContainer.js</span>:</p>
<pre class="brush:js;">
import AppView from "../views/AppView.js";
import {Container} from "flux/utils";
import React from "react";
import PhoneStore from "../data/PhoneStore.js";
import Actions from "../data/Actions.js";

class AppContainer extends React.Component 
{ 
	static getStores() { 
		return [PhoneStore]; 
	} 
	static calculateState() { 
		return { 
			phones: PhoneStore.getState(),
			onAddItem: Actions.addItem,
			onRemoveItem: Actions.removeItem
		}; 
	}
	render() { 
		return &lt;AppView phones={this.state.phones} 
						onRemoveItem={this.state.onRemoveItem}
						onAddItem={this.state.onAddItem}  /&gt;; 
	} 
} 
export default Container.create(AppContainer);
</pre>
<p>Класс контейнера AppContainer, с одной стороны, представляет компонент React. Но в то же время он реализует два необходимых метода: <code>getStores()</code> 
и <code>calculateState()</code>.</p>
<p>Метод <span class="b">getStores()</span> возвращает набор харнилищ, с которые используются в приложении. В нашем случае это только одно хранилище PhoneStore.</p>
<p>Метод <span class="b">calculateState()</span> возвращает состояние контейнера. Здесь состояние контейнера включает список phones, причем этот список мы будем 
получать из состояния хранилища:</p>
<pre class="brush:js;">phones: PhoneStore.getState()</pre>
<p>То есть, <code>phones</code> будет содержать объект Immutable.List.</p>
<p>Также в состоянии определяются два действия:</p>
<pre class="brush:js;">
onAddItem: Actions.addItem,
onRemoveItem: Actions.removeItem
</pre>
<p>Эти действия вместе со списком phones передаются в AppView, который создается в методе render. То есть таким образом представление AppView со всеми 
дочерними компонентами будет связано с хранилищем и действиями и с помощью обработчиков нажатия кнопок сможем вызывать действия.</p>
<p>В конце файла вызывается метод <code>Container.create(AppContainer)</code>, который создает сам контейнер.</p>
<h3>Определение основного кода приложения</h3>
<p>И в конце определим в папке <span class="b">app</span> файл <span class="b">app.js</span>, в котором будет происходить загрузка контейнера:</p>
<pre class="brush:js;">
import AppContainer from "./containers/AppContainer.js";
import React from "react";
import ReactDOM from "react-dom";

ReactDOM.render(&lt;AppContainer /&gt;, document.getElementById("app"));
</pre>
<p>Затем в корневой папке проекта определим файл <span class="b">webpack.config.js</span>, который будет соединять все файлы в одну сборку:</p>
<pre class="brush:js;">
const path = require("path");
  
module.exports = {
    mode: "development",
    entry: "./app/app.js", // входная точка - исходный файл
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
                    presets:[ "@babel/preset-env", "@babel/preset-react"]    // используемые плагины
                }
            }
        ]
    }
}
</pre>
<p>В итоге весь проект будет выглядеть следующим образом:</p>
<img src="./pics/5.6.png" alt="Структура проекта React на Flux" />
<p>Для компиляции и упаковки файлов перейдем в терминале/командной строке к папке проекта и вызовем команду:</p>
<div class="console">
<pre class="consoletext">npm run build</pre></div>
<p>Эта команда сгенерирует файл <span class="b">public/bundle.js</span>, который будет подключаться на веб-страницу.</p>
<p>И в конце запустим проект на выполнение командой <span class="b">npm run dev</span>:</p>
<img src="./pics/5.7.png" alt="React и Flux" />
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


<div class="nav"><p><a href="./4.8.php">Назад</a><a href="./">Содержание</a><a href="./5.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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