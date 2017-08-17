<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			body{
				background-color: #26B950;
				font-family: Calibri;
			}
			section{
				width: 80%;
				margin: auto;
				margin-top: 15%;
			}
			h1{
				color: white;
				font-size: 50px;
			}
			a{
				color: green;
				font-family: Calibri;
				text-decoration:none;
				background-color: white;
				padding: 0.5em;
				border-radius: 0.5em;
			}
			img{
				width: 20%;
			}
			@media (max-width: 768px) {
				img{
					width: 80%;
				}
				section{
					margin-top: 40%;
					width: 80%;
				}
				h1{
				color: white;
				font-size: 30px;
			}

			}

		</style>

	</head>
	<body>
		<section>

			<center>
				<div>

					<img src='../img/whatsapp.png'><br>
					<h1>300 735 2330</h1>
					<a href="{!!URL::to('/')!!}">Regresar</a>

				</div>

			</center>
		</section>

	</body>

</html>
