<?php
include 'db.php';
// SQL query to retrieve data from the 'customertable' table
$sql = "SELECT * FROM customertable";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>BookingID</th>
                    <th>Name</th>
                    <th>ContactNumber</th>
                    <th>BookingDate</th>
                    <th>BookingTime</th>
                    <th>Email</th>
                    <th>NumberofGuests</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['BookingID']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['ContactNumber']}</td>
                <td>{$row['BookingDate']}</td>
                <td>{$row['BookingTime']}</td>
                <td>{$row['Email']}</td>
                <td>{$row['NumberofGuests']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>