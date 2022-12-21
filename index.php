
<?php
include 'navbar.php';
?>
<title>Accueil</title>
</head>

<body>
		<div class="firstdiv">
		<div class="un">

		</div>
		<div class="deux">
			<h1>Moussa</h1>
			<p>Informaticien: developpeur web</p>
		</div>
	</div>

	<div class="seconddiv">

		<div class="text">
			<h2>Nos Prestations</h2>
		</div>
		<div class="all_car">
			<!-- un -->
			<div id="car1" class="car">
				<div class="un">
					<img src="images/img.jpg" alt="">
				</div>
				<div class="deux">

				</div>
				<div class="trois">
					<p>Programmation</p>
					<p>
						<a href="#">En savoir plus</a>
					</p>
				</div>
			</div>
			<!-- un fin -->

			<!-- un -->
			<div id="car2" class="car">
				<div class="un">
					<img src="images/img.jpg" alt="">
				</div>
				<div class="deux">

				</div>
				<div class="trois">
					<p>Programmation</p>
					<p>
						<a href="#">En savoir plus</a>
					</p>
				</div>
			</div>
			<!-- un fin -->
			<!-- un -->
			<div id="car3" class="car">
				<div class="un">
					<img src="images/img.jpg" alt="">
				</div>
				<div class="deux">

				</div>
				<div class="trois">
					<p>Programmation</p>
					<p>
						<a href="#">En savoir plus</a>
					</p>
				</div>
			</div>
			<!-- un fin -->


		</div>

	</div>

<script>

ScrollReveal({
	reset:true,
	distance:'60px',
	duration: 2500,
	delay:400
});

ScrollReveal().reveal('.deux', { delay: 100,origin:'left' });
ScrollReveal().reveal('#car1', { delay: 200,origin:'left' });
ScrollReveal().reveal('#car2', { delay: 200,origin:'bottom' });
ScrollReveal().reveal('#car3', { delay: 230,origin:'right' });


</script>
	<?php
include 'footer.php';
?>




