<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>ALL APPOINTMENT</h2>
        <table>
            <tr>
                <th>Doctor Name</th>
                <th>Patient Name</th>
                <th>Appointment Date</th>
                <th>Notes</th>
            </tr>

            <?php
            $sql = "SELECT 
    a.id AS appointment_id, 
    a.appoint_date, 
    a.notes, 
    d.name AS doctor_name, 
    p.name AS patient_name
FROM appointments a
JOIN doctors d ON a.doctor_id = d.doctor_id
JOIN patients p ON a.patient_id = p.patient_id;";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "
                        <tr>
                            <td>" . $row['doctor_name'] . "</td>
                            <td>" . $row['patient_name'] . "</td>
                            <td>" . $row['appointment_date'] . "</td>
                            <td>" . $row['notes'] . "</td>
                        </tr>
                    ";
            }
            ?>
        </table>
    </div>

    <?php

    ?>
</body>

</html>