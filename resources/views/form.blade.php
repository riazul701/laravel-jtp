<html>
<head>
    <title> File Upload </title>
</head>
<body>
<form method="Post" action="{{route('forms.store')}}" enctype="multipart/form-data">
    @csrf
    <div><input type="file" name="image"> </div><br/>
    <div><button type="submit">Upload </button></div>

</form>
</body>
</html>
