<!DOCTYPE html>
<html >
<head>
<title>JavaFX | FlowPane</title>
<meta charset="utf-8" />
<meta name="description" content="Панель компоновки FlowPane в JavaFX">
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
<h2>FlowPane</h2><div class="date">Последнее обновление: 07.06.2018</div>

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

<p><span class="b">FlowPane</span> располагает вложенные элементы друг за другом. Если они не помещаются в один ряд, то они переносятся на следующий ряд.</p>
<p>По умолчанию элементы размещаются в ряд по горизонтали, но также можно размещать их и по вертикали.</p>
<p>Для создания FlowPane можно использовать один из конструкторов класса:</p>
<ul>
<li><p><code>FlowPane()</code>: определяет горизонтальный ряд элементов</p></li>
<li><p><code>FlowPane​(double hgap, double vgap)</code>: определяет горизонтальный ряд элементов, для каждого элемента определяется отступ по вертикали vgap и отступ по горизонтали hgap. 
В предыдущем конструкторе по умолчанию отступы имеют значение 0</p></li>
<li><p><code>FlowPane​(double hgap, double vgap, Node... children)</code>: определяет отступы, а последний параметр определяет набор вложенных элементов</p></li>
<li><p><code>FlowPane​(Orientation orientation)</code>: позволяет задать направление контейнера: по-горизонтали или по-вертикали</p></li>
<li><p><code>FlowPane​(Orientation orientation, double hgap, double vgap)</code>: задает направление элементов и их отступы</p></li>
<li><p><code>FlowPane​(Orientation orientation, double hgap, double vgap, Node... children)</code>: задает направление элементов, их отступы, а также сами помещаемые в контейнер элементы</p></li>
<li><p><code>FlowPane​(Orientation orientation, Node... children)</code>: определяет направление элементов и сами элементы</p></li>
<li><p><code>FlowPane​(Node... children)</code>: определяет вложенные элементы</p></li>
</ul>
<p>Используем FlowPane для компоновки элементов Label:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.FlowPane;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Label label1 = new Label("Label1");
		Label label2 = new Label("Label2");
		Label label3 = new Label("Label3");
		Label label4 = new Label("Label4");
		Label label5 = new Label("Label5");
		Label label6 = new Label("Label6");
		Label label7 = new Label("Label7");
		Label label8 = new Label("Label8");
		Label label9 = new Label("Label9");
		
		FlowPane root = new FlowPane(10, 10, label1, label2, label3, label4, label5, label6, label7, label8, label9);
		//root.getChildren().addAll(label1, label2, label3, label4, label5, label6, label7, label8, label9);
		Scene scene = new Scene(root);
		stage.setScene(scene);
		
        stage.setTitle("FlowPane in JavaFX");
		stage.setWidth(300);
		stage.setHeight(200);
		
        stage.show();
	}
}
</pre>
<p>По умолчанию элементы (в данном случае 9 меток Label) размещаются по горизонтали. Отступы между элементами как по горизонтали, так и по вертикали 
составляют 10 единиц.</p>
<img src="./pics/3.1.png" alt="FlowPane in JavaFX" />
<p>Чтобы задать вертикальное направление элементов, необходимо использовать значение <code>Orientation.VERTICAL</code>:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.FlowPane;
import javafx.geometry.Orientation;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Label label1 = new Label("Label1");
		Label label2 = new Label("Label2");
		Label label3 = new Label("Label3");
		Label label4 = new Label("Label4");
		Label label5 = new Label("Label5");
		Label label6 = new Label("Label6");
		Label label7 = new Label("Label7");
		Label label8 = new Label("Label8");
		Label label9 = new Label("Label9");
		
		FlowPane root = new FlowPane(Orientation.VERTICAL, 10, 10, label1, label2, label3, label4, 
									label5, label6, label7, label8, label9);
		Scene scene = new Scene(root);
		stage.setScene(scene);
		
        stage.setTitle("FlowPane in JavaFX");
		stage.setWidth(300);
		stage.setHeight(200);
		
        stage.show();
	}
}
</pre>
<img src="./pics/3.2.png" alt="Вертикальная ориентация FlowPane в JavaFX" />
<h3>Методы FlowPane</h3>
<p>Для управления FlowPane можно применять его методы, некоторые из них:</p>
<ul>
<li><p><span class="b">getAlignment()</span>: получает выравнивание внутри FlowPane в виде объекта Pos</p></li>
<li><p><span class="b">setAlignment​(Pos value)</span>: задает выравнивание</p></li>
<li><p><span class="b">setColumnHalignment​(HPos value)</span>: задает горизонтальное выравнивание элементов при вертикальной ориентации FlowPane</p></li>
<li><p><span class="b">getColumnHalignment()</span>: получает значение горизонтального выравнивания</p></li>
<li><p><span class="b">setRowValignment​(VPos value)</span>: устанавливает вертикальное выравнивание элементов при горизонтальное ориентации FlowPane</p></li>
<li><p><span class="b">getRowValignment()</span>: получает значение вертикального выравнивания</p></li>
<li><p><span class="b">setHgap​(double value)</span>: устанавливает отступы между элементами по горизонтали</p></li>
<li><p><span class="b">getHgap()</span>: получает отступы между элементами по горизонтали</p></li>
<li><p><span class="b">setVgap​(double value)</span>: устанавливает отступы между элементами по вертикали</p></li>
<li><p><span class="b">getVgap()</span>: получает отступы между элементами по вертикали</p></li>
<li><p><span class="b">setOrientation​(Orientation value)</span>: устанавливает направление элементов</p></li>
<li><p><span class="b">getOrientation()</span>: получает направление элементов в виде объекта Orientation</p></li>
<li><p><span class="b">setMargin​(Node child, Insets value)</span>: устанавливает для элемента child внешние отступы от границ контейнера</p></li>
<li><p><span class="b">getMargin​(Node child)</span>: получает внешние отступы элемента от границ контейнера</p></li>
</ul>
<p>Применим некоторые из этих методов:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.FlowPane;
import javafx.geometry.Orientation;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Label label1 = new Label("Label1");
		Label label2 = new Label("Label2");
		Label label3 = new Label("Label3");
		Label label4 = new Label("Label4");
		Label label5 = new Label("Label5");
		Label label6 = new Label("Label6");
		Label label7 = new Label("Label7");
		Label label8 = new Label("Label8");
		Label label9 = new Label("Label9");
		
		FlowPane root = new FlowPane();
		root.setVgap(8);
		root.setHgap(15);
		root.setOrientation(Orientation.VERTICAL);
		root.getChildren().addAll(label1, label2, label3, label4, label5, label6, label7, label8, label9);
		Scene scene = new Scene(root, 300, 150);
		stage.setScene(scene);
		
        stage.setTitle("FlowPane in JavaFX");
		
        stage.show();
	}
}
</pre>
<p>Ряд методов управляет выравниванием. Так, метод <span class="b">setAlignment​()</span> устанавливает выравнивание элементов с помощью объекта 
<span class="b">javafx.geometry.Pos</span>. Этот класс определяет ряд констант для установки выравнивания:</p>
<ul>
<li><p><code>BASELINE_CENTER</code>: выравнивание по базовой линии по вертикали и по центру по горизонтали</p></li>
<li><p><code>BASELINE_LEFT</code>: выравнивание по базовой линии по вертикали и по левому краю по горизонтали</p></li>
<li><p><code>BASELINE_RIGHT</code>: выравнивание по базовой линии по вертикали и по правому краю по горизонтали</p></li>
<li><p><code>BOTTOM_CENTER</code>: выравнивание по нижнему краю по вертикали и по центру по горизонтали</p></li>
<li><p><code>BOTTOM_LEFT</code>: выравнивание по нижнему краю по вертикали и по левому краю по горизонтали</p></li>
<li><p><code>BOTTOM_RIGHT</code>: выравнивание по нижнему краю по вертикали и по правому краю по горизонтали</p></li>
<li><p><code>CENTER</code>: выравнивание по центру как по вертикали, так и по горизонтали</p></li>
<li><p><code>CENTER_LEFT</code>: выравнивание по центру по вертикали и по левому краю по горизонтали</p></li>
<li><p><code>CENTER_RIGHT</code>: выравнивание по центру по вертикали и по правому краю по горизонтали</p></li>
<li><p><code>TOP_CENTER</code>: выравнивание по верхнему краю по вертикали и по центру по горизонтали</p></li>
<li><p><code>TOP_LEFT</code>: выравнивание по верхнему краю по вертикали и по левому краю по горизонтали (значение по умолчанию)</p></li>
<li><p><code>TOP_RIGHT</code>: выравнивание по верхнему краю по вертикали и по правому краю по горизонтали</p></li>
</ul>
<p>Например, расположим элементы по центру:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.FlowPane;
import javafx.geometry.Pos;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Label label1 = new Label("Label1");
		Label label2 = new Label("Label2");
		
		FlowPane root = new FlowPane(10, 10, label1, label2);
		root.setAlignment(Pos.CENTER);
		Scene scene = new Scene(root, 300, 150);
		stage.setScene(scene);
		
        stage.setTitle("FlowPane in JavaFX");
		
        stage.show();
	}
}
</pre>
<img src="./pics/3.3.png" alt="Alignment in FlowPane in JavaFX" />
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


<div class="nav"><p><a href="./3.1.php">Назад</a><a href="./">Содержание</a><a href="./3.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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