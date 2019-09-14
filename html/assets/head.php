<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/icon-accumed.svg">

	<!-- Fontawesome CDN -->
	<link
		rel="stylesheet"
		href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	>

	<!-- Boostrap CSS -->
	<link
		rel="stylesheet"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		crossorigin="anonymous"
	>

	<!-- jQuery -->
	<script
		src="http://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"
	></script>

	<!-- jQuery UI -->
	<script
		src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
		crossorigin="anonymous"
	></script>

	<!-- Boostrap and Popper JS -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"
	></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"
	></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<!-- 	<script type="text/javascript">

		/*Initialize Global Variable*/
		var GlobalClass = window.GlobalClass || {};
		var ajaxUrl = "https://viv.accumedintel.net/";

		function global_loader(message, className, isSpin) {
			$('#notification-content').slideUp('slow').html("");
			$('#global-loader').slideDown();
			$('#global-loader-content').slideDown();
			$("#global-loader-content").removeAttr('class');
			if (className !== false) {
				$('#global-loader-content').addClass(className);
			}
			var html_content = isSpin ? "<i class= 'fa fa-circle-notch fa-spin'></i> " + message : message;

			$('#global-loader-content').html(html_content);
			setTimeout(function () {
				$('#global-loader-content').slideUp();
			}, 5000);
		}
	</script> -->
	
</head>