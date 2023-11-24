<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favicon not working --}}
    <link rel="shortcut icon" sizes="114x114" href="public/favicon.ico">

    <title>Gaming site</title>
    @vite('resources/css/app.css')
</head>
<body> 
    {{$slot}}
    
    @vite('resources/js/app.js')
</body>
</html>