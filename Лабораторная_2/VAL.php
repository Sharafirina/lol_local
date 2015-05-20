<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8">
		<title> Лабораторная работа </title>
		<link href= "Laboratory_work.css" rel="stylesheet">
	</head>
	
	<body>	
		<header class="header"> 
		 <center> <br> <span class="colortext"> 
			Разум — это Будда, а прекращение умозрительного мышления — это путь. 
			Перестав мыслить понятиями и размышлять о путях существования и небытия, 
			о душе и плоти, о пассивном и активном и о других подобных вещах, 
			начинаешь осознавать, что разум — это Будда, 
			что Будда — это сущность разума, 
			и что разум подобен бесконечности. </span>
		</center> 
		</header>
		
		<nav>
		    <a href="file:///C:/OpenServer/domains/localhost/Web_Kurushin/index.php"> <div class="link1"> Главная </div> </a>
			<a href="file:///C:/OpenServer/domains/localhost/Web_Kurushin/ART.php"> <div class="link2" > Арт галерея </div> </a>
			<a href="file:///C:/OpenServer/domains/localhost/Web_Kurushin/ANKETA.php"> <div class="link3">	Личный кабинет </div> </a>
			<a href="file:///C:/OpenServer/domains/localhost/Web_Kurushin/VAL.php"> <div class="link4">	Регистрация</div>	</a>	
		</nav>
		
		<article class="content">	
			<form action="VAL.php" method="post">
			<label>
				Email 
				<br>
					<input type="email" size="24" placeholder="name@email.com" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" >
				<br>
			</label> <br>
			
			<label>
				Логин  
				<br>
					<input type="text" size="24" pattern="[a-zA-Z0-9]+" title="комбинации букв английского алфавита и цифр">
				<br>
			</label> <br>
			
			<label>
				Телефон  
				<br>
					<input type="tel" size="24" placeholder="xxxx-xxx-xxxx" pattern="^\d{4}-\d{3}-\d{4}$">
					
				<br>
			</label> <br>
		
			<label>
				Пароль
				<br>
					<input type="password" size="24" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
							title="Не менее восьми символов, содержащих хотя бы одну цифру и символы из верхнего и нижнего регистра">
				<br>
			</label> <br>
			
			<label>
				Возраст 
				<br>
					<input type="number" min="1" max="200">
				<br>
			</label> <br>
			<br>		
			<div class="reg">
				<input type="submit" name="reg_sub" value="Регистрация" />
			</div>
		</form>
		</article>
		
		<footer class="footer">	Выполнила студентка группы АСУ-12 <br>
								Шарафутдинова Ирина Ильдусовна 	</footer>
	</body>
</html>