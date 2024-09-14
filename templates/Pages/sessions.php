<div class="container mt-5">
    <h1 class="text-center mb-4"><?= h($title) ?></h1>
    
    <div class="row">
        <!-- Session 1 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Session 1">
                <div class="card-body">
                    <h5 class="card-title">Yoga for Beginners</h5>
                    <p class="card-text">Join our beginner's yoga session to improve flexibility and relaxation.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Time:</strong> 9:00 AM - 10:30 AM</li>
                        <li class="list-group-item"><strong>Trainer:</strong> Jane Doe</li>
                    </ul>
                    <a href="#" class="btn btn-primary mt-3">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Session 2 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Session 2">
                <div class="card-body">
                    <h5 class="card-title">HIIT Training</h5>
                    <p class="card-text">High-Intensity Interval Training to push your limits and burn calories.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Time:</strong> 11:00 AM - 12:00 PM</li>
                        <li class="list-group-item"><strong>Trainer:</strong> John Smith</li>
                    </ul>
                    <a href="#" class="btn btn-primary mt-3">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Session 3 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Session 3">
                <div class="card-body">
                    <h5 class="card-title">Strength Training</h5>
                    <p class="card-text">Build muscle and increase strength in our weight training session.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Time:</strong> 1:00 PM - 2:30 PM</li>
                        <li class="list-group-item"><strong>Trainer:</strong> Mike Lee</li>
                    </ul>
                    <a href="#" class="btn btn-primary mt-3">Book Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule Table -->
    <div class="table-responsive mt-5">
        <h2 class="text-center mb-4">Weekly Session Schedule</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Session</th>
                    <th scope="col">Time</th>
                    <th scope="col">Trainer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>Yoga for Beginners</td>
                    <td>9:00 AM - 10:30 AM</td>
                    <td>Jane Doe</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>HIIT Training</td>
                    <td>11:00 AM - 12:00 PM</td>
                    <td>John Smith</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Strength Training</td>
                    <td>1:00 PM - 2:30 PM</td>
                    <td>Mike Lee</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
