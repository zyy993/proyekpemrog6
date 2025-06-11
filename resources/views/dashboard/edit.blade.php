<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Edit Event</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; margin-top: 4px; }
        button { margin-top: 20px; background-color: #4a6b8a; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #3a5570; }
        .error { color: red; font-size: 0.9rem; }
        img { width: 150px; height: auto; margin-top: 10px; border-radius: 8px; }
        a { text-decoration: none; color: #4a6b8a; }
    </style>
</head>
<body>
    <h1>Edit Event</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dashboard.update', $homePageContent) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="image">Image (optional):</label>
        <input type="file" name="image" id="image" accept="image/*" />
        @if($homePageContent->image_path)
            <img src="{{ asset('storage/' . $homePageContent->image_path) }}" alt="{{ $homePageContent->name }}" />
        @endif

        <label for="name">Event Name:</label>
        <input type="text" name="name" id="name
