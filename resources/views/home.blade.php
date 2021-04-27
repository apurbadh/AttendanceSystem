<html lang="EN">
<head>
    <title>Attendance</title>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
        rel="stylesheet"
    />
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
    ></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Attendance</a>
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/attend">Logs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/attend?data=yours">Yours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/attend?data=school">School</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<br>
<br>
<br>
<br>

<br>
<br>
<form style="text-align: center; width: 30%; margin-left:35%" method="post" action="">
    @if(Session::has('status'))
        <p class="alert alert-info">{{ Session::get('status') }}</p>
    @endif
    @csrf
    <!-- Email input -->

    <button type="submit" class="btn btn-primary btn-block">Present</button>
</form>
</body>
</html>
