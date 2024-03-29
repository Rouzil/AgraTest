<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agra Courses</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

    <header>
        <h2><img src="/image-removebg-preview (22) 1.png" alt="logo"></h2>
        <nav>
            <ul class="nav_links">
                <li><a href="/allCourses">Home</a></li>
                <li><a href="/register">Account</a></li>
                <li><a href="/courses">Courses</a></li>
                <li><a href="#">Exercises</a></li>
            </ul>
        </nav>
    </header>

    <div class="outer-title-enrolled">
        <div class="title-enrolled">

            {{$course->CourseName}} lessons

        </div>
    </div>

    <article class="outer-container">
        <article class="container">
            @foreach($lessons as $lesson)
            <article class="box" id="box1">
                    <img src="/sampleImg.png" alt="img">
                    <div class="description-box">
                        <h1>{{$lesson->LessonName}}</h1>>
                        <p>
                            {{$lesson->LessonDescription}}
                        </p>
                        <iframe src="{{ asset('storage/' . $lesson->LessonFile) }}" alt="{{$lesson->LessonFile}}"></iframe>
                        <button class="btn" onclick="location.href='/lessons/{{$lesson->id}}'">START</button>
                    </div>
                </article>
            @endforeach
        </article>
    </article>
    <footer>
        <img src="/agraFooter.png" alt="footer">
    </footer>


</body>
</html>
