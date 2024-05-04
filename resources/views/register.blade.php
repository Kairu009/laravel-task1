<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Register</h2>
        <form action="/register" method="POST"  class="row g-3">
            @csrf

            <div class="row g-2">
                <div class="col-md">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="col-md">
                    <label class="form-label">Emails</label>
                    <input name="email" type="email" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                  <label class="form-label">Password</label>
                  <input name="password" type="password" class="form-control">
            </div>
            
              <button class="btn btn-primary">Sign in</button>
          </form>
       {{-- <form action="/register" method="POST" class="row g-3">
        @csrf
        <input name="name" type="text" placeholder="name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <button>Register</button>
       </form> --}}
    </div>
</body>
</html>