<html lang="EN">
<head>
    <title>Register</title>
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
<br>
<br>
<h1 style="text-align: center;">Register</h1>
<br>
<br>
<br>
<form style="text-align: center; width: 30%; margin-left:35%" method="post" action="">
@csrf
<!-- Email input -->
    @if(Session::has('status'))
        <p class="alert alert-info">{{ Session::get('status') }}</p>
    @endif
    <div class="form-outline mb-4">
        <input type="text" id="form1Example1" class="form-control" name="name" required/>
        <label class="form-label" for="form1Example1">Full Name</label>
    </div><div class="form-outline mb-4">
    <div class="form-outline mb-4">
        <input type="text" id="form1Example2" class="form-control" name="school" required/>
        <label class="form-label" for="form1Example2">School</label>
    </div>
        <div class="form-outline mb-4">
            <input type="text" id="form1Example4" class="form-control" name="username" required/>
            <label class="form-label" for="form1Example4">Username</label>
        </div>
        <div class="form-outline mb-4">
        <input type="password" id="form1Example3" class="form-control" name="password" required/>
        <label class="form-label" for="form1Example3">Password</label>

    </div>
    </div>

    <div class="col">
            <!-- Simple link -->
            <a href="/login">Already have an account?</a>
        </div>
        <br>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
</body>
</html>
