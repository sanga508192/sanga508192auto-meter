<?php
$servername = "localhost";
$username = "root";
$password = "Marin29042021-*";
$dbname = "new_schema";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ดึงข้อมูลจากฐานข้อมูล
$sql = "SELECT * FROM pea_no_666666";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>หน่วยการใช้ไฟฟ้า</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>หน่วยการใช้ไฟฟ้า</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>DateTime Reset</th>
            <th>Count Reset</th>
            <th>KWh Reset</th>
            <th>KWh Rate A</th>
            <th>KWh Rate B</th>
            <th>KWh Rate C</th>
            <th>KW Max Rate A</th>
            <th>KW Max Rate B</th>
            <th>KW Max Rate C</th>
            <th>KW SS Rate A</th>
            <th>KW SS Rate B</th>
            <th>KW SS Rate C</th>
            <th>KVH Reset</th>
            <th>KVH Max</th>
            <th>KVH SS</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // แสดงข้อมูลในแต่ละแถว
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["idnew_table"] . "</td>
                        <td>" . $row["date_090"] . "</td>
                        <td>" . $row["timer_091"] . "</td>
                        <td>" . $row["date_time_reset_095"] . "</td>
                        <td>" . $row["count_reset_096"] . "</td>
                        <td>" . $row["kwh_reset_111"] . "</td>
                        <td>" . $row["kwh_reset_rate_a_reset_010"] . "</td>
                        <td>" . $row["kwh_reset_rate_b_reset_020"] . "</td>
                        <td>" . $row["kwh_reset_rate_c_reset_030"] . "</td>
                        <td>" . $row["kw_max_reset_rate_a_reset_050"] . "</td>
                        <td>" . $row["kw_max_reset_rate_b_reset_060"] . "</td>
                        <td>" . $row["kw_max_reset_rate_c_reset_070"] . "</td>
                        <td>" . $row["kw_ss_rate_a_015"] . "</td>
                        <td>" . $row["kw_ss_rate_b_016"] . "</td>
                        <td>" . $row["kw_ss_rate_c_017"] . "</td>
                        <td>" . $row["kvh_reset_222"] . "</td>
                        <td>" . $row["kvh_max_280"] . "</td>
                        <td>" . $row["kvh_ss_118"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='18'>ไม่มีข้อมูล</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
