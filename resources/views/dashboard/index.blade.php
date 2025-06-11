<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard - Events</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f9fafb; }
        table { border-collapse: collapse; width: 100%; background: white; }
        th, td { padding: 12px 15px; border: 1px solid #ddd; text-align: left; }
        th { background: #4a6b8a; color: white; }
        tr:nth-child(even) { background: #f3f4f6; }
        a { color: #4a6b8a; text-decoration: none; margin-right: 12px; }
        a:hover { text-decoration: underline; }
        .success { background: #daf5d8; border: 1px solid #34a853; padding: 10px; margin-bottom: 20px; border-radius: 4px; }
        button.delete { background-color: #dc2626; color: white; padding: 6px 10px; border: none; border-radius: 4px; cursor: pointer; }
        button.delete:hover { background-color: #b91c1c; }
        img { width: 80px; height: 45px; object-fit: cover; border-radius: 4px; }
        .topbar { margin-bottom: 20px; }
        .topbar a { font-weight: bold; font-size: 1.1rem; }
    </style>
</head>
<body>
    <h1>Dashboard - Manage Events</h1>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="topbar">
        <a href="{{ route('dashboard.create') }}">+ Add New Event</a>
        <a href="{{ url('/home') }}" target="_blank" style="margin-left:20px;">View Homepage</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Penyanyi</th>
                <th>Date & Time</th>
                <th>Location</th>
                <th style="width:150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contents as $content)
                <tr>
                    <td>
                        @if($content->image_path)
                            <img src="{{ asset('storage/' . $content->image_path) }}" alt="{{ $content->name }}">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>{{ $content->name }}</td>
                    <td>{{ $content->penyanyi }}</td>
                    <td>{{ $content->date->format('Y-m-d H:i') }}</td>
                    <td>{{ $content->location }}</td>
                    <td>
                        <a href="{{ route('dashboard.edit', $content) }}">Edit</a>
                        <form action="{{ route('dashboard.destroy', $content) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure delete this event?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No data found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
