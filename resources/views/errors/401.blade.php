<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<style type="text/css">
		/**
	Coded by /u/j0be in scss.
	See scss source here -> https://codepen.io/j0be/pen/MKRVyN
	*/
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:300|Titillium+Web:700);
	body {
		background: url(http://i.giphy.com/jcxtvm2bsZDH2.gif);
		background-repeat: no-repeat;
		background-position: bottom center;
		background-size: 70% cover;
		font-family: 'Titillium Web', sans-serif; color: #fff; background-color: #1BCF00;
		height: 97vh;
		width: 97vw;
		max-height: 97vh;
		max-width: 97vw;
		}
		.travolta {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background-color: rgba(0, 0, 0, 0.65);
			min-height: 100vh;
			text-align: center;
		}

			h1{
				font-size: 15vw;
				font-weight: 15vh;
			}

			p{
					font-family: 'Open Sans', sans-serif;
					font-weight: 100;
					font-size: 5vw;
					margin-bottom: 5px;
					}
					a{
						border-radius: 25px;
						background: none;
						color: #fff;
						font-size: 18px;
						padding: 10px 20px;
						border: 2px solid #fff;
						text-decoration: none;
						}
						a:hover
						{
							background: #fff;
							color: #212121;
						}
	</style>
	<body>
		<div class="travolta">
			<h1>401</h1>
			<p>No tienes permisos para esta sección</p>
			<a href="{{ route('inicio') }}">Ir al inicio</a>
		</div>
	</body>
</html>