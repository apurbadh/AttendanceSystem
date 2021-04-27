<html lang="EN">
<head>
    <title>Attendance Log</title>
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
                    <a class="nav-link" href="#">Logs</a>
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
<h2 style="text-align:center">Attendance Log</h2>
<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($logs as $log)
    <tr>
        <th scope="row">{{ $log->id  }}</th>
        <td>{{ $log->name  }}</td>
        <td>{{ $log->date  }}</td>
        <td>{{ $log->time }}</td>
    </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>
