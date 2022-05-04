<!DOCTYPE html>
<html >
<head>
<title>JavaFX | TreeView</title>
<meta charset="utf-8" />
<meta name="description" content="TreeView в JavaFX, отображение данных в виде дерева, TreeItem, управление элементами в дереве">
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
<h2>TreeView</h2><div class="date">Последнее обновление: 23.06.2018</div>

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

<img src="https://metanit.com/metanit-java.jpg" id="jma" style="cursor:pointer;" />
</div>

<p>Класс <span class="b">javafx.scene.control.TreeView&lt;T&gt;</span> позволяет отображать данные в виде дерева. Параметр T в угловых скобках 
указывает на тип элементов, которые будут храниться в TreeView.</p>
<p>Для создания иерархичного представления данных в виде дерева TreeView должен определять один корневой узел в виде объекта 
<span class="b">TreeItem&lt;T&gt;</span>. В этот узел затем помещаются остальные узлы, которые тоже представляют TreeItem и которые содержат сами хранимые данные.</p>
<p>Чтобы определить объект TreeView, мы можем использовать один из двух конструкторов:</p>
<ul>
<li><p><span class="b">TreeView()</span>: создает пустое дерево</p></li>
<li><p><span class="b">TreeView​(TreeItem&lt;T&gt; root)</span>: создает дерево, для которого устанавливается корневой узел root</p></li>
</ul>
<p>Если корневой узел не был устанолен при создании TreeView, то его можно установить впоследствии с помощью метода</p>
<pre class="brush:java;">void setRoot​(TreeItem&lt;T&gt; value)</pre>
<p>Определим простейший TreeView:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.layout.FlowPane;
import javafx.scene.control.TreeView;
import javafx.scene.control.TreeItem;
import javafx.geometry.Orientation;
 
public class Main extends Application{
	
    public static void main(String[] args) {
         
        Application.launch(args);
    }
     
    @Override
    public void start(Stage stage) throws Exception {
		
		// определяем корневой узел
		TreeItem&lt;String&gt; rootTreeNode = new TreeItem&lt;String&gt;("Languages");
		
		// определяем набор вложенных узлов
		TreeItem&lt;String&gt; germanics = new TreeItem&lt;String&gt;("Germanic");
		germanics.getChildren().add(new TreeItem&lt;String&gt;("German"));
		germanics.getChildren().add(new TreeItem&lt;String&gt;("English"));
		
		TreeItem&lt;String&gt; romans = new TreeItem&lt;String&gt;("Roman");
		romans.getChildren().add(new TreeItem&lt;String&gt;("French"));
		romans.getChildren().add(new TreeItem&lt;String&gt;("Spanish"));
		romans.getChildren().add(new TreeItem&lt;String&gt;("Italian"));
		
		// добавляем узлы в корневой узел
		rootTreeNode.getChildren().add(germanics);
		rootTreeNode.getChildren().add(romans);
		
		// устанавливаем корневой узел для TreeView
		TreeView&lt;String&gt; langsTreeView = new TreeView&lt;String&gt;(rootTreeNode);
		langsTreeView.setPrefSize(150, 200);
		FlowPane root = new FlowPane(10, 10, langsTreeView);
		
        Scene scene = new Scene(root, 300, 250);
         
        stage.setScene(scene);
        stage.setTitle("TreeView in JavaFX");
        stage.show();
    }
}
</pre>
<p>В данном случае в дереве хранятся строки - объекты String, поэтому все объекты TreeItem и TreeView типизируются типом String.</p>
<img src="./pics/4.19.png" alt="TreeView in JavaFX" />
<h3>Получение выбранных элементов</h3>
<p>По умолчанию TreeView позволяет выбрать одномоментно один элемент. Но напрямую мы не можем получить из TreeView выделенный элемент. 
Для этого нам вначале надо получить модель выбора элементов с помощью метода</p>
<pre class="brush:java;">MultipleSelectionModel&lt;TreeItem&lt;T&gt;&gt; getSelectionModel()</pre>
<p>Затем с помощью метода <span class="b">getSelectedItems()</span> у объекта MultipleSelectionModel можно получить выделенные элементы TreeItem. 
Хотя по умолчанию TreeView поддеживает выбор только одного элемента, но мы можем задать выбо сразу нескольких элементов с помощью дугого метода 
MultipleSelectionModel:</p>
<pre class="brush:java;">void setSelectionMode(SelectionMode mode)</pre>
<p>В этот метод передается значение SelectionMode (например, <code>SelectionMode.MULTIPLE</code> для множественного выбора).</p>
<p>Итак, выведем в элемент Label все выбранные в TreeView элементы:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.layout.FlowPane;
import javafx.scene.control.Label;
import javafx.scene.control.Button;
import javafx.scene.control.TreeView;
import javafx.scene.control.TreeItem;
import javafx.scene.control.MultipleSelectionModel;
import javafx.scene.control.SelectionMode;
import javafx.geometry.Orientation;
 
public class Main extends Application{
	
    public static void main(String[] args) {
         
        Application.launch(args);
    }
     
    @Override
    public void start(Stage stage) throws Exception {
		
		TreeItem&lt;String&gt; rootTreeNode = new TreeItem&lt;String&gt;("Languages");
		
		TreeItem&lt;String&gt; germanics = new TreeItem&lt;String&gt;("Germanic");
		germanics.getChildren().add(new TreeItem&lt;String&gt;("German"));
		germanics.getChildren().add(new TreeItem&lt;String&gt;("English"));
		
		TreeItem&lt;String&gt; romans = new TreeItem&lt;String&gt;("Roman");
		romans.getChildren().add(new TreeItem&lt;String&gt;("French"));
		romans.getChildren().add(new TreeItem&lt;String&gt;("Spanish"));
		romans.getChildren().add(new TreeItem&lt;String&gt;("Italian"));
		
		rootTreeNode.getChildren().add(germanics);
		rootTreeNode.getChildren().add(romans);
		
		TreeView&lt;String&gt; langsTreeView = new TreeView&lt;String&gt;(rootTreeNode);
		langsTreeView.setPrefSize(150, 200);
		
		// получаем модель выбора
		MultipleSelectionModel&lt;TreeItem&lt;String&gt;&gt; selectionModel = langsTreeView.getSelectionModel();
		// устанавливаем множественный выбор (если он необходим)
		selectionModel.setSelectionMode(SelectionMode.MULTIPLE);
		
		Label lbl = new Label();
		Button btn = new Button("Get Selected");
		btn.setOnAction(event -&gt; {
			
			String selected = "";
			// перебираем выбанные элементы
			for(TreeItem&lt;String&gt; item : selectionModel.getSelectedItems()){
				
				selected += item.getValue() + " ";
			}
			lbl.setText("Selected: " + selected);
		});
		
		FlowPane root = new FlowPane(Orientation.VERTICAL, 10, 10, langsTreeView, lbl, btn);
		
        Scene scene = new Scene(root, 300, 250);
         
        stage.setScene(scene);
        stage.setTitle("TreeView in JavaFX");
        stage.show();
    }
}
</pre>
<p>Следует учитывать, что здесь метод getSelectedItems у MultipleSelectionModel возвращает объекты TreeItem. Поэтому чтобы получить непосредственно само строковое 
значение из TreeItem, надо использовать его метод <span class="b">getValue()</span>.</p>
<img src="./pics/4.20.png" alt="Получение выбранных элементов в TreeView в JavaFX" />
<p>Также мы можем установить слушатель, который будет обрабатывать автоматически выбор элементов в TreeView. Для этого у объекта 
MultipleSelectionModel вначале надо получить послушиваемое свойство с помощью метода <span class="b">selectedItemProperty()</span> и затем к нему прикрепить 
слушатель с помощью метода <span class="b">addListener()</span>:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.layout.FlowPane;
import javafx.scene.control.Label;
import javafx.scene.control.Button;
import javafx.scene.control.TreeView;
import javafx.scene.control.TreeItem;
import javafx.scene.control.MultipleSelectionModel;
import javafx.scene.control.SelectionMode;
import javafx.geometry.Orientation;
import javafx.beans.value.ObservableValue;
import javafx.beans.value.ChangeListener;

public class Main extends Application{
	
    public static void main(String[] args) {
         
        Application.launch(args);
    }
     
    @Override
    public void start(Stage stage) throws Exception {
		
		TreeItem&lt;String&gt; rootTreeNode = new TreeItem&lt;String&gt;("Languages");
		
		TreeItem&lt;String&gt; germanics = new TreeItem&lt;String&gt;("Germanic");
		germanics.getChildren().add(new TreeItem&lt;String&gt;("German"));
		germanics.getChildren().add(new TreeItem&lt;String&gt;("English"));
		
		TreeItem&lt;String&gt; romans = new TreeItem&lt;String&gt;("Roman");
		romans.getChildren().add(new TreeItem&lt;String&gt;("French"));
		romans.getChildren().add(new TreeItem&lt;String&gt;("Spanish"));
		romans.getChildren().add(new TreeItem&lt;String&gt;("Italian"));
		
		rootTreeNode.getChildren().add(germanics);
		rootTreeNode.getChildren().add(romans);
		
		TreeView&lt;String&gt; langsTreeView = new TreeView&lt;String&gt;(rootTreeNode);
		langsTreeView.setPrefSize(150, 200);
		
		MultipleSelectionModel&lt;TreeItem&lt;String&gt;&gt; selectionModel = langsTreeView.getSelectionModel();
		
		Label lbl = new Label();
		// устанавливаем слушатель для отслеживания изменений
        selectionModel.selectedItemProperty().addListener(new ChangeListener&lt;TreeItem&lt;String&gt;&gt;(){
             
            public void changed(ObservableValue&lt;? extends TreeItem&lt;String&gt;&gt; changed, 
								TreeItem&lt;String&gt; oldValue, TreeItem&lt;String&gt; newValue){
                 
                lbl.setText("Selected: " + newValue.getValue());
            }
        });
		
		FlowPane root = new FlowPane(Orientation.VERTICAL, 10, 10, langsTreeView, lbl);
		
        Scene scene = new Scene(root, 300, 250);
         
        stage.setScene(scene);
        stage.setTitle("TreeView in JavaFX");
        stage.show();
    }
}
</pre>
<p>В методе addListener припрекляется слушатель, который реализует интерфейс ChangeListener. В данном случае интерфейс типизируется 
типом TreeItem&lt;String&gt;, так как все выбираемые элементы педставляют этот тип. А в методе changed этого интерфейса с помощью 
параметра newValue мы можем получить новое выбранное значение и что-то с ним сделать, например, отобразить на метке. 
Также можно получить ранее выбранное значение через параметр oldValue.</p>
<img src="./pics/4.21.png" alt="Выбор в TreeView в JavaFX" />
<h3>Получение полного пути к узлу</h3>
<p>Класс <span class="b">TreeItem</span>, который представляет отдельный узел в TreeView, имеет возможности для получения полного пути к этому узлу в рамках 
TreeView с учетом родительских узлов. В частности, для получения родительского объекта TreeItem в классе определен метод <span class="b">getParent()</span>:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.layout.FlowPane;
import javafx.scene.control.Label;
import javafx.scene.control.Button;
import javafx.scene.control.TreeView;
import javafx.scene.control.TreeItem;
import javafx.scene.control.MultipleSelectionModel;
import javafx.scene.control.SelectionMode;
import javafx.geometry.Orientation;
import javafx.beans.value.ObservableValue;
import javafx.beans.value.ChangeListener;

public class Main extends Application{
	
    public static void main(String[] args) {
         
        Application.launch(args);
    }
     
    @Override
    public void start(Stage stage) throws Exception {
		
		TreeItem&lt;String&gt; rootTreeNode = new TreeItem&lt;String&gt;("Languages");
		rootTreeNode.setExpanded(true);	 // раскрываем узел
		
		TreeItem&lt;String&gt; germanics = new TreeItem&lt;String&gt;("Germanic");
		germanics.getChildren().add(new TreeItem&lt;String&gt;("German"));
		germanics.getChildren().add(new TreeItem&lt;String&gt;("English"));
		
		TreeItem&lt;String&gt; romans = new TreeItem&lt;String&gt;("Roman");
		romans.getChildren().add(new TreeItem&lt;String&gt;("French"));
		romans.getChildren().add(new TreeItem&lt;String&gt;("Spanish"));
		romans.getChildren().add(new TreeItem&lt;String&gt;("Italian"));
		
		rootTreeNode.getChildren().add(germanics);
		rootTreeNode.getChildren().add(romans);
		
		TreeView&lt;String&gt; langsTreeView = new TreeView&lt;String&gt;(rootTreeNode);
		langsTreeView.setPrefSize(150, 200);
		
		MultipleSelectionModel&lt;TreeItem&lt;String&gt;&gt; selectionModel = langsTreeView.getSelectionModel();
		
		Label lbl = new Label();
		
        selectionModel.selectedItemProperty().addListener(new ChangeListener&lt;TreeItem&lt;String&gt;&gt;(){
             
            public void changed(ObservableValue&lt;? extends TreeItem&lt;String&gt;&gt; changed, 
								TreeItem&lt;String&gt; oldValue, TreeItem&lt;String&gt; newValue){
                 if(newValue != null){
					 
					 String path = newValue.getValue();
					 TreeItem&lt;String&gt; parent = newValue.getParent();
					 while(parent != null){
						 path = parent.getValue() + " / " + path;
						 parent = parent.getParent();
					 }
					lbl.setText(path);
				 }
            }
        });
		
		FlowPane root = new FlowPane(Orientation.VERTICAL, 10, 10, langsTreeView, lbl);
		
        Scene scene = new Scene(root, 300, 250);
         
        stage.setScene(scene);
        stage.setTitle("TreeView in JavaFX");
        stage.show();
    }
}
</pre>
<img src="./pics/4.22.png" alt="TreeView и TreeItem в JavaFX" />
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


<div class="nav"><p><a href="./4.10.php">Назад</a><a href="./">Содержание</a><a href="./4.12.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в JavaFX</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.1.php">Что такое JavaFX</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.2.php">Первая программа на JavaFX</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.8.php">JavaFX в Intellij IDEA</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.3.php">Класс Application и жизненный цикл приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.4.php">Класс Stage</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.5.php">Класс Scene</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.6.php">Графические элементы. Класс Node</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.7.php">Взаимодействие с пользователем и обработка событий</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. FXML</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javafx/2.1.php">Определение интерфейса в FXML</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/2.2.php">Контроллеры и взаимодействие с пользователем</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/2.3.php">Скрипты в FXML</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Панели компоновки</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.1.php">Типы панелей компоновки</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.2.php">FlowPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.3.php">HBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.4.php">VBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.5.php">BorderPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.6.php">StackPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.7.php">AnchorPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.8.php">GridPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.9.php">TilePane</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.1.php">Кнопки и метки</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.2.php">CheckBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.3.php">ToggleButton</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.4.php">RadioButton</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.5.php">Текстовые элементы управления</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.6.php">ScrollPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.7.php">Slider</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.8.php">ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.9.php">ComboBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.10.php">ChoiceBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.11.php">TreeView</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.12.php">Tooltip</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.13.php">TableView</a></span></li>
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