<!DOCTYPE html>
<html>
<head>
	<title>Mailer Test</title>
</head>
<body>

<form action="send_email" method="post">
{{ csrf_field() }}
<div class="form-group">
	<label for="nama">email</label>
		<input type="email" name="email">
</div>

<div class="form-group">
	<label for="email">Email</label>
		<textarea name="content" rows="5"></textarea>
</div>	
		<button type="submit" class="btn btn-warning"  >Submit</button>
</form>
</body>
</html>