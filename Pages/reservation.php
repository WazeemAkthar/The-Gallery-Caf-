<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/reservation.css">
    <title>Reservation - The Gallery Café</title>
</head>

<body>
    <div id="header"></div> <!-- Placeholder for header -->

    <main>
        <section class="reservation-section">
            <h2>Make a Reservation</h2>
            <form id="reservationForm" action="../Backend/add_reservation.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" required>
                </div>
                <div class="form-group">
                    <label for="guests">Number of Guests:</label>
                    <input type="number" id="guests" name="guests" min="1" max="8" required>
                </div>
                <div class="form-group">
                    <label for="message">Special Requests:</label>
                    <textarea id="message" name="message" rows="4"></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <div id="footer"></div> <!-- Placeholder for footer -->

    <script src="../JS/components.js"></script>
    <script src="../JS/scripts.js"></script>
</body>

</html>