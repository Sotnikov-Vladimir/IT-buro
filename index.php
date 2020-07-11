<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="script.js"></script>
</head>
<body>
	    <?php
        	require_once ('ArrayWorker.php');
        	$obj = new ArrayWorker();
        	$obj->dump();
        ?>
	<header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-sm">
				  	<ul class="navbar-nav">
					    <li class="nav-item">
					    	<a class="nav-link" href="#">Junior</a>
					    </li>
					    <li class="nav-item line">
					    	|
					    </li>
					    <li class="nav-item">
					        <a class="nav-link" href="#">Middle</a>
					    </li>
					    <li class="nav-item line">
					    	|
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#">Senior</a>
					    </li>
				  	</ul>
				</nav>
			</div>
		</div>
	</header>
	<section class="main">
		<div class="container">
			<div class="cloud"></div>
			<div class="row head">
				Тестовое задание для Junior веб-разработчика
			</div>
			<div class="row">
				Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта. Ознакомиться со списком актуальных вакансий можно по ссылке: <a href="https://voronezh.hh.ru/employer/1132736">https://voronezh.hh.ru/employer/1132736</a>
			</div>
			<div class="row both">
				<div class="left col-lg-5">
					Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и решений на платформе "1С-Битрикс". Мы прекрасно осознаем преимущества и недостатки платформы, но высокое качество наших услуг и соответствующий высокий спрос, позволяет нам более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая только на 1С-Битрикс.
				</div>
				<div class="right col-lg-6">
					У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа. Для всех сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие программисты имеют в своем распоряжении iMac Retina и AirPods, а освещением и кондиционером в офисе управляет Яндекс.Алиса =)	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-1">
					<img src="img/BX-logo.png" alt="logo">
				</div>
				<div class="col-lg-10">
					Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку Ваших базовых знаний (HTML+CSS). На практике заниматься версткой Вам не придется, но для успешного развития в должности backend-разработчика, frontend надо знать на базовом уровне и понимать как он устроен.	
				</div>
			</div>
			<hr>
			<div class="row buro">
				<div class="col-lg-3">
					© 2009-2019 IT-Buro 
				</div>
			</div>
		</div>
	</section>
</body>
</html>