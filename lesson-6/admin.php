<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<link rel="stylesheet" type="text/css" href="css/site.css">
		<title>Фотогаллерея</title>
	</head>
	<body>
		<? include("navbar.php"); ?>
		<div class="container py-5">
			<div class="row">
				<div class="col-xl-12">
					<div id="message"></div>
					<table class="table">
						<tbody>
							<? include ("showAdmin.php"); ?>
						</tbody>
					</table>
					<a href="create.php" class="btn btn-primary mt-4">Добавить</a>
				</div>
			</div>
		</div>
		
		<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<script type="text/javascript">
			$(".delete").click(function(){
				var delete_id = $(this).attr("id");
				$.ajax({
					method: "GET",
					url: "delete.php",
					data: {
						id: delete_id
					},
					success: function(data) {
						$("#message").html(data);
						$("#row_" + delete_id).hide();
					}
				});
			});
		</script>
	</body>
</html>