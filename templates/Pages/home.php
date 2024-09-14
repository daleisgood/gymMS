<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: url('https://images.unsplash.com/photo-1554284126-aa88f22d477e?auto=format&fit=crop&w=1350&q=80') no-repeat center center;
      background-size: cover;
      color: white;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .hero h1 {
      font-size: 4rem;
    }
    .hero p {
      font-size: 1.5rem;
    }
    .trainers img {
      width: 100%;
      height: auto;
      border-radius: 50%;
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="hero text-center text-white">
    <div>
      <h1>Welcome to Gym Management System</h1>
      <p>Manage your gym efficiently with GymMS</p>
      <a href="#" class="btn btn-primary btn-lg mt-3">Get Started</a>
    </div>
  </section>

  <!-- Services Section -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row text-center">
      <div class="col-md-4">
        <div class="card border-primary">
          <div class="card-body">
            <h5 class="card-title">Membership Management</h5>
            <p class="card-text">Easily manage member details, subscriptions, and billing.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-primary">
          <div class="card-body">
            <h5 class="card-title">Class Scheduling</h5>
            <p class="card-text">Schedule gym sessions and manage trainers seamlessly.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-primary">
          <div class="card-body">
            <h5 class="card-title">Equipment Booking</h5>
            <p class="card-text">Allow members to book gym equipment and track availability.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trainers Section -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Meet Our Trainers</h2>
      <div class="row text-center trainers">
        <div class="col-md-4">
          <img src="https://via.placeholder.com/150" alt="Trainer 1">
          <h5 class="mt-3">John Doe</h5>
          <p>Certified Fitness Trainer</p>
        </div>
        <div class="col-md-4">
          <img src="https://via.placeholder.com/150" alt="Trainer 2">
          <h5 class="mt-3">Jane Smith</h5>
          <p>Yoga Instructor</p>
        </div>
        <div class="col-md-4">
          <img src="https://via.placeholder.com/150" alt="Trainer 3">
          <h5 class="mt-3">Mike Johnson</h5>
          <p>Bodybuilding Expert</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sessions Section -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Upcoming Sessions</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Morning Yoga</h5>
            <p class="card-text">Date: 2024-09-20</p>
            <p class="card-text">Trainer: Jane Smith</p>
            <p class="card-text">Capacity: 15 members</p>
            <a href="/book-now" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Strength Training</h5>
            <p class="card-text">Date: 2024-09-22</p>
            <p class="card-text">Trainer: John Doe</p>
            <p class="card-text">Capacity: 20 members</p>
            <a href="#" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
