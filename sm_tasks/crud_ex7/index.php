<?php include '../sm_tasks/header.php'; ?>
<h2>Input Your Information Below:</h2>
<form name="form1" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="BookingID">BookingID:</label>
                <input type="Int" class="form-control" id="BookingID" placeholder="Enter your BookingID" name="BookingID" required>
            </div>
            <div class="col">
                <label for="Nmae">Name:</label>
                <input type="text" class="form-control" id="Name" placeholder="Enter your name" name="Name" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="contactNumber">ContactNumber:</label>
                <input type="varchar" class="form-control" id="contactNumber" placeholder="Enter your contactNumber"name="ContactNumber" required>
            </div>
            <div class="col">
                <label for="BookingDate">BookingDate:</label>
                <input type="date" class="form-control" id="BookingDate" placeholder="Enter your BookingDate"name="BookingDate" required>
            </div>
            <div class="col">
                <label for="BookingTime">BookingTime:</label>
                <input type="time" class="form-control" id="BookingTime" placeholder="Enter your BookingTime"name="BookingTime" required>
            </div>
            <div class="col">
                <label for="Email">Email:</label>
                <input type="varchar" class="form-control" id="Enter your Email" placeholder="Enter your Email"name="Email" required>
            </div>
            <div class="col">
                <label for="NumberofGuests">NumberofGuests:</label>
                <input type="int" class="form-control" id="NumberofGuests" placeholder="Enter your NumberofGuests"name="NumberofGuests" required>
            </div>


    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>

<?php include '../sm_tasks/footer.php'; ?>