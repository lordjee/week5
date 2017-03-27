<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
	<form action="" method="post" class="form-horizontal">
{{ csrf_field() }}


<div class="form-group">
	<label for="nama">Nama</label>
		<input type="text" class="form-control" name="nama" @if (isset($nama)) value="{{$nama}}" @endif>
</div>

<div class="form-group">
	<label for="email">Email</label>
		<input type="email" class="form-control" name="email" @if (isset($email)) value="{{$email}}" @endif
		>
</div>	

<div class="form-group">
<label for="gender">Jenis Kelamin</label>
<div class="radio">
	<label>
		<input type="radio" name="gender" value="laki-laki" @if(isset($gender) && $gender="laki-laki") checked @endif >
		Laki-laki</label>
		</div>
<div class="radio">
	<label>
		<input type="radio" name="gender"  value="perempuan" @if(isset($gender) && $gender="perempuan") checked @endif >
		Perempuan</label>
</div>
<div class="radio">
	<label>
		<input type="radio" name="gender"  value="others" @if(isset($gender) && $gender="others") checked @endif >
		others</label>
</div>
</div>
<div class="form-group">
<label for="weapon[]">Senjata pilihan</label>
<br>
<small>Bisa pilih lebih dari satu</small>
<div class="checkbox">
	<label>
		<input type="checkbox" name="weapon[]" value="Daedalus" @if(isset($weapon) && in_array('Daedalus', $weapon)) checked @endif>
		Daedalus</label>
		</div>
		<div class="checkbox">
	<label>
		<input type="checkbox" name="weapon[]" value="Sangeyasa" @if(isset($weapon) && in_array('Sangeyasa', $weapon)) checked @endif 	>
		Sangeyasa</label>
		</div>
		<div class="checkbox">
	<label>
		<input type="checkbox" name="weapon[]" value="Trident" @if(isset($weapon) && in_array('Trident', $weapon)) checked @endif >
		Trident</label>
		</div>
		<div class="checkbox">
	<label>
		<input type="checkbox" name="weapon[]" value="Samurai" @if(isset($weapon) && in_array('Samurai', $weapon)) checked @endif >
		Samurai</label>
		</div>
</div>
		<button type="submit" class="btn btn-warning"  >Submit</button>
		
		
	</form>
	@if(isset($nama))
	Halo, {{ $nama }}
	@endif
	<br>
	@if(isset($email))
	Email kamu {{ $email }}
	@endif
	<br>
	@if(isset($gender))
	Kamu seorang @if($gender =="laki-laki") Laki-laki 
	@elseif($gender =="perempuan") Perempuan @else Gajelas 
	@endif
	@endif
	<br>
	@if(isset($weapon))
	Senjata pilihan:
	<br>
	@foreach($weapon as $item)
	<br>
	->{{ $item }}
	@endforeach
	@endif

</body>
</html>