<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form action="{{ route('registration')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="nama">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
