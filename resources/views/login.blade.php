<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Login</h2>
       <form action="/login" method="POST" class="row g-3">
        @csrf
        
        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating">
                    <input name="loginname" type="text" class="form-control" id="floatingInputGrid" placeholder="dasdadada">
                    <label for="floatingInputGrid">Name</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input name="loginpassword" type="password" class="form-control" id="floatingInputGrid" placeholder="12332123131">
                    <label for="floatingInputGrid">Password</label>
                </div>
            </div>
        </div>

        {{-- <input name="loginname" type="text" placeholder="name"> --}}
        {{-- <input name="loginpassword" type="password" placeholder="password"> --}}
        <button class="btn btn-primary">Login</button>
       </form>
    </div>
</body>
</html>