<
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: #f8f9fa;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .card {
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .cards-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.5rem;
      padding: 2rem;
      max-width: 1000px;
      margin: 0 auto;
      flex-grow: 1;
    }
  </style>
</head>
<body>
  <header class="bg-primary text-white py-3 mb-4 shadow-sm">
    <div class="container">
      <h1 class="h3 mb-0">Dashboard</h1>
    </div>
  </header>

  <main class="cards-container">
    <div class="card text-center" />/onclick="location.href='{{ route('item.form') }}'">
      <div class="card-body">
        <h5 class="card-title">Home</h5>
        <p class="card-text">Click to open data form (Create, Update, Delete)</p>
        <span class="btn btn-outline-primary mt-2">Go</span>
      </div>
    </div>
    <!-- You can add more cards here -->
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Analytics</h5>
        <p class="card-text">View your analytics dashboard</p>
        <span class="btn btn-outline-secondary mt-2 disabled">Coming Soon</span>
      </div>
    </div>
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Settings</h5>
        <p class="card-text">Manage your account settings</p>
        <span class="btn btn-outline-secondary mt-2 disabled">Coming Soon</span>
      </div>
    </div>
  </main>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

