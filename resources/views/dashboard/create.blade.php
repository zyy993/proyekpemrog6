<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Create Event</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; margin-top: 4px; }
        button { margin-top: 20px; background-color: #4a6b8a; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #3a5570; }
        .error { color: red; font-size: 0.9rem; }
        a { text-decoration: none; color: #4a6b8a; }
    </style>
</head>
<body>
    <h1>Create New Event</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="image">Image (optional):</label>
        <input type="file" name="image" id="image" accept="image/*" />

        <label for="name">Event Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required />

        <label for="penyanyi">Penyanyi:</label>
        <input type="text" name="penyanyi" id="penyanyi" value="{{ old('penyanyi') }}" required />

        <label for="date">Date & Time:</label>
        <input type="datetime-local" name="date" id="date" value="{{ old('date') }}" required />

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="{{ old('location') }}" required />

        <button type="submit">Save</button>
    </form>

    <p><a href="{{ route('dashboard.index') }}">Back to Dashboard</a></p>
</body>
</html>
