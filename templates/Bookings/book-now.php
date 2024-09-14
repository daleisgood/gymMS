<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now - Gym Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="container mt-5">
    <h1 class="text-center mb-4">Book Now</h1>

    <form>
        <div class="mb-3">
            <label for="bookingType" class="form-label">Select Booking Type</label>
            <select class="form-select" id="bookingType" required>
                <option value="" disabled selected>Select an option</option>
                <option value="session">Session</option>
                <option value="service">Service</option>
                <option value="equipment">Equipment</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Select Date</label>
            <input type="date" class="form-control" id="date" required>
        </div>

        <div class="mb-3">
            <label for="time" class="form-label">Select Time</label>
            <input type="time" class="form-control" id="time" required>
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">Additional Details</label>
            <textarea class="form-control" id="details" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="John Doe" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="john.doe@example.com" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="+1234567890" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit Booking</button>
    </form>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

</body>
</html>
