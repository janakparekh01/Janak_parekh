<html>
<body>
	<h1>Book a Room</h1> 
	<form action="db.php" method="post"> 
	<label for="fullName">Full Name:</label> 
	<input type="text" id="fullName" name="fullName" required><br><br>
	

    <label for="checkInDate">Check-In Date:</label>
    <input type="date" id="checkInDate" name="checkInDate" required><br><br>

    <label for="checkOutDate">Check-Out Date:</label>
    <input type="date" id="checkOutDate" name="checkOutDate" required><br><br>

    <label for="bookingType">Booking Type:</label>
    <select id="bookingType" name="bookingType" required><br>
        <option value="full">Full Day(8 a.m. to 8 p.m.)</option>
        <option value="half">Half Day(12 p.m. to 5 p.m.)</option>
        <option value="custom">Custom</option>
    </select><br><br>

    <input type="submit" value="Book Room">
</form>
</body>
</html>