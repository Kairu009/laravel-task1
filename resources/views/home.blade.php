<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    @auth
    <p>Login Successfully</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
    </form>
    {{-- creatign post part --}}
    <div style="border:3px solid black">
        <h2>Create a New Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="title">
            <textarea name="body" placeholder="body content..."></textarea>
            <button>Save Post</button>
        </form>
    </div>

    {{-- showing post --}}
    <div style="border:3px solid black">
       <h2>All Posts</h2>
       @foreach($posts as $post)
       <div style="background-color: gray; padding: 10px; margin: 10px ">
            <h3>{{$post['title']}}</h3>
            {{$post['body']}}
            <p><a href="/update-post/{{$post->id}}">Update</a></p>
            <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
       @endforeach
    </div>

    @else

 <!-- Login section -->
 <div id="loginSection">
    @include('login')
</div>

<!-- Show register button -->
<div id="registerButton">
   <p>Don't have an account? <button onclick="showRegisterForm()" class="btn btn-link">Register here</button>.</p>
</div>

<!-- Register section (hidden by default) -->
<div id="registerSection" style="display: none;">
    @include('register')
</div>

<!-- Show login button (hidden by default) -->
<div id="loginButton" style="display: none;">
    <p>Already have an account? <button onclick="showLoginForm()" class="btn btn-link">Login here</button>.</p>
</div>

@endauth

<!-- Other body content -->

<script>
    function showRegisterForm() {
        document.getElementById("loginSection").style.display = 'none'; // Hide login section
        document.getElementById("registerButton").style.display = 'none'; // Hide register button paragraph
        document.getElementById("registerSection").style.display = 'block'; // Show register section
        document.getElementById("loginButton").style.display = 'block'; // Show login button
    }

    function showLoginForm() {
        document.getElementById("loginSection").style.display = 'block'; // Show login section
        document.getElementById("registerButton").style.display = 'block'; // Show register button paragraph
        document.getElementById("registerSection").style.display = 'none'; // Hide register section
        document.getElementById("loginButton").style.display = 'none'; // Hide login button
    }
</script>

</body>
</html>