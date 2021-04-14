<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('blog/create.css') }}">
    <script src="{{ asset('blog/create.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <div class="header">
        <div id="add_profile"><a href="{{URL::route('add-profile')}}">Add Profile</a></div>
        <div id="profiles"><a href="{{URL::route('profiles')}}">All Profiles</a></div>
        <div id="posts"><a href="{{URL::route('posts')}}">All Posts</a></div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">

    <h1>Add Post</h1>
    <form method="POST" action="{{ route('add-post')}}">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="body" placeholder="body" width="100px">
        <input type="number" name="profile_id" placeholder="profile_id">
        <button type="submit">Create Post</button>
    </form>
</body>
</html>