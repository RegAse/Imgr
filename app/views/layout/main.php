<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="/assets/css/foundation.css" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <script src="/assets/js/vendor/modernizr.js"></script>
</head>
<body>
	{{ include('layout/navigation.php')}}

	{# The page content comes in here from the template #}
	{% block content %} {% endblock %}


	{{ include('layout/footer.php')}}
	<script src="assets/js/vendor/jquery.js"></script>
	<script src="assets/js/foundation.min.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>