<!DOCTYPE html>
<html>
<head>
    <title>jQuery Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="form.js"></script>
</head>
<body>
<div class="col-sm-6 col-sm-offset-3">
    <h1>Register Form</h1>

    <form action="process.php" method="POST">
        <div id="name-group" class="form-group">
            <label for="name">Name</label>
            <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Full Name"
            />
        </div>
        <div id="lastName-group" class="form-group">
            <label for="lastName">Last Name</label>
            <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    name="lastName"
                    placeholder="Last Name"
            />
        </div>

        <div id="email-group" class="form-group">
            <label for="email">Email</label>
            <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="email@example.com"
            />
        </div>


            <div id="password-group" class="form-group">
                <label for="password">Password</label>
                <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="password"
                />

            <input
                    type="password"
                    class="form-control"
                    id="password2"
                    name="password2"
                    placeholder="Repeat password"
            />
            </div>
        </div>

        <button type="submit" class="btn btn-success">
            Submit
        </button>
    </form>
</div>

</body>
</html>