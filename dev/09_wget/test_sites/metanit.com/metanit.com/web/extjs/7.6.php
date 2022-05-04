<!DOCTYPE html>
<html >
<head>
<title>Ext.tree.Panel. Деревья в ExtJS</title>
<meta charset="utf-8" />
<meta name="description" content="Создание деревьев в Ext JS с помощью класса Ext.tree.Panel и связывание их с источником данных">
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
<h2>Ext.tree.Panel. Деревья</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Для представления элементов в виде дерева используется класс <code>Ext.tree.Panel</code>. Создадим простейшее дерево:</p>
<pre class="brush:js;">
Ext.onReady(function(){
     Ext.create('Ext.tree.Panel', {
        title: 'Страны СНГ',
        width: 200,
        height: 200,
		rootVisible: true,
        renderTo: Ext.getBody(),
		root: {
			text: 'Страны СНГ',
			expanded: true,
			children:
			[{
				text: "Россия",
				children: [{
					text: "Москва",
					leaf: true
				}, {
					text: "Санкт-Петербург",
					leaf: true
				}, {
					text: "Волгоград",
					leaf: true
				}],
				leaf: false,
				"expanded": true
			},
			{
				text: "Украина",
				leaf: false
			},
			{
				text: "Белоруссия"
			}]
		}
    });
});
</pre>
<img src="pics/treeviewroot.png" />
<p>В данном случае все узлы дерева задаются с помощью свойства <code>root</code>, которое по сути представляет узел и может содержать дочерние 
узлы в свойстве <code>children</code>. Дочерние узлы в свою очередь также могут содержать другие узлы.</p>
<h4>Узлы дерева</h4>
<p>Узлы дерева реализуют ряд свойств, которые помогают настроить их поведение:</p>
<ul>
<li><p><code>text</code> : заголовок узла</p></li>
<li><p><code>leaf</code> : указывает, имеет ли узел подузлы. Если свойство равно <code>true</code>, то узел отображается как единичный узел (лист)</p></li>
<li><p><code>expanded</code> : раскрыт ли узел (если свойство равно <code>true</code>, то раскрыт)</p></li>
<li><p><code>iconCls</code> : содержит в качестве значения класс CSS, который указывает на иконку узла</p></li>
<li><p><code>children</code> : содержит коллекцию подузлов дерева</p></li>
<li><p><code>checked</code> : отмечен ли узел. Если свойство равно <code>true</code>, то рядом с заголовком появляется элемент checkbox, позволяющий 
отметить данный узел</p></li>
</ul>
<p>В узлах у нас определено несколько свойств. Свойство <code>text</code> показывает заголовок узла в дереве. Свойство <code>leaf</code> 
указывает, как будет отображен узел - как единичный узел, если <code>"leaf": true</code>, либо как поддерево, если <code>"leaf": false</code>.</p>
<p>Еще одно использованное свойство <code>expanded</code> показывает, будет ли узел раскрыт при загрузке дерева.</p>
<h3>TreeStore и загрузка узлов из внешнего источника</h3>
<p>Кроме статического задания схемы узлов дерева, мы можем использовать загрузку через внешнее хранилище, например, в формате json. 
Во-первых, создадим хранилище данных, из которого мы будем брать данные в дерево:</p>
<pre class="brush:js;">
var store = Ext.create('Ext.data.TreeStore', {
		proxy:{
			type: 'ajax',
			url: 'treeData.json'
		}
	});
</pre>
<p>В данном случае объект proxy содержит два свойства. Поскольку мы будем получать данные с сервера в формате json, то для свойства <code>type</code> 
имеет значение <code>ajax</code>. Свойство <code>url</code> указывает на источник , который будет посылать приложению данные в json-формате. В данном 
случае это файл <code>json</code>. Но это также может быть и любое другое приложение, например, на php.</p>
<p>Теперь определим саму панель, в которую будет загружено дерево:</p>
<pre class="brush:js;">
Ext.create('Ext.tree.Panel', {
		title: 'Страны СНГ',
		width: 200,
		height: 200,
		store: store,
		rootVisible: false,
		renderTo: Ext.getBody()
	});
</pre>
<p>Панель Ext.tree.Panel получает в свойстве <code>store</code> ранее определенное хранилище. Свойство <code>rootVisible: false</code> делает невидимым 
корневой узел, в данном случае он нам не нужен.</p>
<p>Теперь перейдем к самим данным. Они у нас находятся в файле <i>treeData.json</i>, который имеет следующее содержание:</p>
<pre class="brush:js;">
[{
	"text": "Россия",
	"children": [{
		"text": "Москва",
		"leaf": true
	}, {
		"text": "Санкт-Петербург",
		"leaf": true
	}, {
		"text": "Волгоград",
		"leaf": true
	}],
	"leaf": false,
	"expanded": true
	},
	{
		"text": "Украина",
		"leaf": true
	},
	{
		"text": "Белоруссия",
		"leaf": true
}]
</pre>
<p>Объекты в формате json подчиняются определенным правилам: каждый объект заключается в фигурные скобки, а массив таких объектов - в квадратные.</p>
<img src="pics/treeview.png" />
<p>Мы также в хранилище можем задать используем корневой узел, для этого используем <code>rootVisible: true</code> и изменим определение хранилища следующим образом:</p>
<pre class="brush:js;">
var store = Ext.create('Ext.data.TreeStore', {
		proxy:{
			type: 'ajax',
			url: 'treeData.json'
		},
		root: {
			text: 'Все страны',
			expanded: true
		}
		Ext.create('Ext.tree.Panel', {
		title: 'Страны СНГ',
		width: 200,
		height: 200,
		store: store,
		rootVisible: true,
		renderTo: Ext.getBody()
	});
	});
</pre>
<p>Результат будет тем же, что и в первом случае.</p>
<p>Кроме того, мы можем не получать данные со стороны сервера, а закодировать их в самом хранилище, указав в корневом узле все подузлы:</p>
<pre class="brush:js;">
	var store1 = Ext.create('Ext.data.TreeStore', {
		root: {
			text:"Страны-участники",
			expanded: true,
			children: [{
			text: "Россия",
			leaf: true
			},{
			text: "Англия",
			leaf: true
			},{
			text: "Франция",
			leaf: true
			}]
		}
	});
</pre>
<h3>Сортировка дерева</h3>
<p>Для установки у хранилища способа сортировки нам надо применить класс <code>Ext.util.Sorter</code> через свойство 
<code>sorters</code>. Оно содержит определения сортировщиков, которые упорядочивают все узлы дерева. Сортировщик в качестве ключа 
сортировки приминает свойство узла, которое указывается в свойстве <code>property</code>. 
Затем в свойстве <code>direction</code> мы задаем порядок сортировки: прямой ('ASC') или обратный ('DESC').</p>
<p>Теперь изменим код хранилища store и дерева следующим образом:</p>
<pre class="brush:js;">
Ext.onReady(function(){
	var store = Ext.create('Ext.data.TreeStore', {
		root: {
			text: 'Страны СНГ',
			expanded: true,
			children:
			[{
				text: "Россия",
				children: [{
					text: "Москва",
					leaf: true
				}, {
					text: "Санкт-Петербург",
					leaf: true
				}, {
					text: "Волгоград",
					leaf: true
				}],
				leaf: false,
				"expanded": true
			},
			{
				text: "Украина",
				leaf: false
			},
			{
				text: "Белоруссия"
			}]
		},
		sorters: [{
			property: 'text',
			direction: 'ASC'
		}]
	});
     Ext.create('Ext.tree.Panel', {
        title: 'Страны СНГ',
        width: 200,
        height: 200,
        rootVisible: false,
		store: store,
        renderTo: Ext.getBody()
    });
});
</pre>
<P>Таким образом, при загрузке все узлы будут отсортированы по свойству <code>text</code>:</P>
<img src="pics/sort_treeview.png" />
<p>К примеру отсортируем узлы по свойству <code>leaf</code>:</p>
<pre class="brush:js;">
		sorters: [{
			property: 'leaf',
			direction: 'DESC'
		}]
</pre>

<h4>Динамическая сортировка</h4>
<p>Что если нам надо сортировать данные по сигналу от другого источника, например, по нажатию кнопки. В этом случае мы можем использовать 
метод <code>sort</code> класса Ext.data.TreeStore. Этот метод принимает параметры сортировки - свойство, по которому сортируем, и направление. 
Добавим кнопку в приложение и определим обработчик нажатия:</p>
<pre class="brush:js;">
var store = Ext.create('Ext.data.TreeStore', {
		root: {
			text: 'Страны СНГ',
			expanded: true,
			children:
			[{
				text: "Россия",
				children: [{
					text: "Москва",
					leaf: true
				}, {
					text: "Санкт-Петербург",
					leaf: true
				}, {
					text: "Волгоград",
					leaf: true
				}],
				leaf: false,
				"expanded": true
			},
			{
				text: "Украина",
				leaf: false
			},
			{
				text: "Белоруссия"
			}]
		}
	});
	Ext.create('Ext.Button', {
		margin:'10 0 0 30',
		text: 'Сортировать',
		renderTo: Ext.getBody(),
		handler: function(){
			store.sort('text', 'ASC');
		}
	});
	
	Ext.create('Ext.tree.Panel', {
		title: 'Страны СНГ',
		width: 200,
		height: 200,
		store: store,
		rootVisible: true,
		renderTo: Ext.getBody()
	});
</pre>
<h3>Перенос узлов.</h3>
<p>Ext JS 4 имеет встроенную поддержку drag-drop или ручного переноса узлов дерева как внутри самого дерева, так и между деревьями. 
За реализацию подобной функциональности отвечает специальный плагин <strong>Ext.tree.plugin.TreeViewDragDrop</strong>. А для его включения 
в панели дерева нам надо задействовать секцию <span class="bb">viewConfig</span>:</p>
<pre class="brush:js;">
viewConfig: {
	plugins: {
			ptype: 'treeviewdragdrop'
	}
}
</pre>
<p>Итак, определим два дерева, в которых мы сможем перетаскивать узлы:</p>
<pre class="brush:js;">
Ext.onReady(function(){
	var store1 = Ext.create('Ext.data.TreeStore', {
		root: {
			text:"Страны-участники",
			expanded: true,
			children: [{
			text: "Россия",
			leaf: true
			},{
			text: "Англия",
			leaf: true
			},{
			text: "Франция",
			leaf: true
			}]
		}
	});
	var tree1 = Ext.create('Ext.tree.Panel', {
		title: 'Антанта',
		store: store1,
		width: 200,
		height: 150,
		viewConfig: {
			plugins: {
				ptype: 'treeviewdragdrop'
			}
		}
	});

	var store2 = Ext.create('Ext.data.TreeStore', {
		root: {
			text:"Страны-участники",
			expanded: true,
			children: [{
				text: "Германия",
				leaf: true
			},{
				text: "Австро-Венгрия",
				leaf: true
			},{
				text: "Италия",
				leaf: true
			}]
		}
	});

	var tree2 = Ext.create('Ext.tree.Panel', {
		title: 'Тройственный Союз',
		width: 200,
		height: 150,
		store: store2,
		viewConfig: {
			plugins: {
				ptype: 'treeviewdragdrop'
			}
		}
	});
	Ext.create('Ext.panel.Panel', {
		title: 'Блоки накануне Первой мировой войны',
		width: 420,
		padding:10,
		height: 180,
		layout: {
                type: 'hbox',
                align: 'stretch'
            },
		items: [tree1, tree2],
		renderTo: Ext.getBody()
	});
});
</pre>
<img src="pics/7.4.png" />

<p>Мы можем также более детально настроить конфигурацию переноса узлов, воспользовавшись следующими опциями:</p>
<ul>
<li><p><strong>enableDrop</strong>: значение true позволяет принимать в данном дереве перетаскиваемые узлы</p></li>
<li><p><strong>enableDrag</strong>: значение true позволяет переносить из данного дерева узлы (в пределах дерева или в другие деревья)</p></li>
<li><p><strong>allowContainerDrop</strong>: значение true добавлять в данное дерево узлы</p></li>
</ul>
<p>Так, если бы мы использовали в вышеприведенном примере эти опции, то они бы имели следующие значения:</p>
<pre class="brush:js;">
        viewConfig: {
			plugins: {
				ptype: 'treeviewdragdrop',
				enableDrop: true,
				enableDrag: true,
				allowContainerDrop: true
			}
		},
</pre>
<h3>Добавление и удаление узлов дерева</h3>
<p>Компонент Ext.panel.Panel представляет нам достаточную функциональность для добавления или удаления динамически новых узлов дерева.</p>
<p>В зависимости от задачи мы можем реализовать данную функциональность различными способами, используя методы компонента. 
Рассмотрим один из способов. Допустим, в левой части у нас определено дерево, а в правой части панель. На панели находятся кнопки для добавления и удаления. 
Чтобы добавить новый узел, надо сначала ввести текст узла в текстовое поле и нажать на соответствующую кнопку:</p>
<pre class="brush:js;">
Ext.onReady(function(){
	var menustore = Ext.create('Ext.data.TreeStore', {
		root: {
			text:"Языки программирования",
			expanded: true,
			children: [{
			text: "C#",
			leaf: true
			},{
			text: "C++",
			leaf: true
			},{
			text: "Java",
			leaf: true
			}]
		}
	});
	var tree = Ext.create('Ext.tree.Panel', {
		title: 'Языки программирования',
		store: menustore,
		width: 170,
		rootVisible: false,
		region: 'west'
	});
	var centerPanel=Ext.create('Ext.panel.Panel', {
		title: 'Добавить/Удалить узел',
		region: 'center',
		bodyPadding:10,
		items:[{
            xtype: 'textfield',
			id: 'txt',
			height: 20,
         },{
			xtype: 'button',
			width:60,
			height: 20,
			text:'Добавить',
			handler: function() {
				// получаем введенное в текстовое поле значение
				var newNode=centerPanel.getComponent('txt').getValue();
				// Используем метод appendChild для добавления нового объекта
				tree.getRootNode().appendChild({
					text: newNode,
					leaf: true
				});
			}
		},{
			xtype: 'button',
			width:60,
			height: 20,
			margin: '0 0 0 20',
			text:'Удалить',
			handler: function() {
				// получаем выделенный узел для удаления
				var selectedNode=tree.getSelectionModel().getSelection()[0];
				// если таковой имеется, то удаляем
				if(selectedNode)
				{
					selectedNode.remove(true);
				}
			}
		}]
	});
	Ext.create('Ext.panel.Panel', {
		layout : 'border',
		width: 400,
		height: 180,
		padding:10,
		items : [tree, centerPanel],
		renderTo: Ext.getBody()
	});
});
</pre>
<img src="pics/7.5.png" />
<h3>Обработка выбора узла. Древовидное меню</h3>
<p>При использовании дерева нередко возникает необходимость получить выделенный узел или произвести какие-то действия после выбора узла. 
В частности, на это строятся интерфейсы с помощью древовидного меню.</p> 
<p>Обработка выбора узла дерева ложится на функцию <code>itemclick</code>:</p>
<pre class="brush:js;">
itemclick : function(this, record, item, index, e, options) {}
</pre>
<p>Эта функция принимает следующие параметры:</p>
<ul>
<li><p><code>this</code>: объект, для которого производится выбор узла</p></li>
<li><p><code>record</code>: модель выбранного узла, через свойство <code>data</code> мы можем получить данные узла</p></li>
<li><p><code>item</code>: html-элемент</p></li>
<li><p><code>index</code>: порядковый номер выбранного узла в коллекции узлов дерева</p></li>
<li><p><code>e</code>: объект события</p></li>
<li><p><code>options</code>: дополнительные параметры, передаваемые в функцию</p></li>
</ul>
<p>Поэтому создадим дерево в левой части, по нажатию на узлы которого в правой части будет отображаться выбранная опция:</p>
<pre class="brush:js;">
Ext.onReady(function(){
	var menustore = Ext.create('Ext.data.TreeStore', {
		root: {
			text:"Языки программирования",
			expanded: true,
			children: [{
			text: "C#",
			leaf: true
			},{
			text: "C++",
			leaf: true
			},{
			text: "Java",
			leaf: true
			}]
		}
	});
	var treemenu = Ext.create('Ext.tree.Panel', {
		title: 'Языки программирования',
		store: menustore,
		width: 170,
		rootVisible: false,
		region: 'west',
		listeners: {
			itemclick : function(tree, record, item, index, e, options) {
				var nodeText = record.data.text;
				centerPanel.update('&lt;h3&gt;Вы выбрали: '+nodeText+'&lt;/h3&gt;');
			}
		}
	});
	var centerPanel=Ext.create('Ext.panel.Panel', {
		title: 'Выбранный язык',
		region: 'center'
	});
	Ext.create('Ext.panel.Panel', {
		layout : 'border',
		width: 400,
		height: 180,
		padding:10,
		items : [treemenu, centerPanel],
		renderTo: Ext.getBody()
	});
});
</pre>
<img src="pics/treemenu.png" />
<p>Для компонента <strong>Ext.tree.Panel</strong> мы добавляем обработчик события <code>itemclick</code>, которое возникает при нажатии на узел дерева. 
Чтобы обработать это событие, в обработчик передается ряд параметров, из которых в данном случае мы используем только параметр <code>record</code>. 
Этот параметр представляет объект <code>Ext.data.Model</code> и дает нам доступ к данным объекта, на котором было произведено нажатие.</p>
<p>Так, в строке <code>var nodeText = record.data.text</code> мы получаем текст нажатого узла и выводим его в html правой панели.</p>
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


<div class="nav"><p><a href="7.5.php">Назад</a><a href="./">Содержание</a><a href="7.7.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/1.1.php">Общий обзор фреймворка Ext JS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/1.2.php">Создание первого приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/1.3.php">Ext.application и Ext.onReady</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Система классов в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.1.php">Определение и использование классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.2.php">Конструкторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.3.php">Параметр Config</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.4.php">Статические члены класса и секция Static</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.5.php">Наследование в Ext JS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.6.php">Миксин-классы (Mixin)</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.7.php">Динамическая загрузка классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.8.php">Singleton</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/2.9.php">Псевдонимы классов</a></span></li>
		</ul>
	</li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/3.php">Глава 3. Работа с элементами DOM</a></span></li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/4.php">Глава 4. Обработка событий элементов и компонентов</a></span></li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/5.php">Глава 5. Анимация в Ext JS</a></span></li>
	<li class="closed"><span class="folder">Глава 6. Компоновка в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.1.php">Введение в контейнеры</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.2.php">Компоновка FitLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.3.php">Компоновка VBoxLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.4.php">Компоновка HBoxLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.5.php">Компоновка ColumnLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.6.php">Аккордеоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.7.php">Компоновка BorderLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.8.php">Компоновка CardLayout</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/6.9.php">Анкорная компоновка</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Компоненты в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.1.php">Основы компонентов Ext JS 4</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.2.php">Жизненный цикл компонентов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.3.php">Контейнер Viewport</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.4.php">Компонент Window. Создание окон</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.5.php">Компонент Ext.Panel</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.6.php">Ext.tree.Panel. Деревья</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.7.php">Панель вкладок</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.8.php">Ext.Button</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.9.php">Флажки и переключатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.10.php">Выбор дат. Ext.form.field.Date</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.11.php">Ext.form.field.Spinner</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.12.php">Слайдер в Ext JS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.13.php">Combobox в Ext JS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.14.php">Ext.form.field.HtmlEditor</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.15.php">Текстовые поля в ExtJS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.16.php">Тулбар</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/7.17.php">Создание меню</a></span></li>
		</ul>
	</li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/8.php">Глава 8. Работа с датами в ExtJS 4</a></span></li>
	<li class="closed"><span class="folder">Глава 9. AJAX и JSON в Ext JS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/9.1.php">Получение данных в формате JSON</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/9.2.php">Получение данных XML в ExtJS 4</a></span></li>
		</ul>
	</li>
	<li><span class="folder"><a href="//metanit.com/web/extjs/10.php">Глава 10. Ext.XTemplate</a></span></li>
	<li class="closed"><span class="folder">Глава 11. Работа с формами в ExtJS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.1.php">Создание форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.2.php">Заполнение формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.3.php">Отправка данных формы на сервер</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.4.php">Валидация полей формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/11.5.php">Загрузка файлов на сервер</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Работа с данными в ExtJS 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.1.php">Создание моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.5.php">Валидация полей модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.4.php">Связь нескольких моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.2.php">Загрузка и сохранение моделей с помощью прокси</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.3.php">Работа с хранилищем в ExtJS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.6.php">Ридеры хранилища</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/12.7.php">Взаимодействие с Local Storage HTML5</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Таблицы и Ext.grid.Panel</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.1.php">Ext.grid.Panel и отображение данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.2.php">Работа со столбцами Ext.grid.Panel</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.3.php">Рендеринг столбцов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.4.php">Выбор модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.5.php">Редактирование в гриде</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.6.php">Постраничный вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/13.7.php">Группировка в гриде</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Архитектура приложения и MVC</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/14.1.php">Архитектура MVC. Создание проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/14.2.php">Создание моделей и хранилища</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/14.3.php">Создание представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/14.4.php">Создание контроллеров</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Рисование в ExtJS и диаграммы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.1.php">Введение в рисование. Спрайты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.2.php">Взаимодействие со спрайтами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.3.php">Диаграммы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.4.php">Диаграмма с областями</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.5.php">Гистограммы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.6.php">Линейный график</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/extjs/15.7.php">Круговая диаграмма</a></span></li>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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