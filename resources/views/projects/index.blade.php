<html>
<head>
    <title>Projects</title>
</head>
<body>
    <h1>Birdboard</h1>
    <ul>
        @foreach($projects as $project)
            {{$project->title}}
        @endforeach
    </ul>
</body>
</html>