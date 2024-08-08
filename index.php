<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Usage Data</title>
</head>
<body>
    <h1>แสดงหน่วยการใช้ไฟฟ้า</h1>
    <form method="GET">
        <label for="table_id">ค้นหา: </label>
        <input type="text" id="table_id" name="table_id" placeholder="666666, 777777, 888888">
        <button type="submit">ค้นหา</button>
    </form>

    <?php
    if (isset($_GET['table_id'])) {
        $table_id = $_GET['table_id'];
        $servername = "localhost";
        $username = "root";
        $password = "Marin29042021-*";
        $dbname = "new_schema";

        // เชื่อมต่อกับฐานข้อมูล
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
        }

        // กำหนดชื่อตารางตามการค้นหา
        $table_name = "pea_no_" . $table_id;
        $sql = "SELECT * FROM $table_name";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>id</th>
                        <th>date_090</th>
                        <th>timer_091</th>
                        <th>date_time_reset_095</th>
                        <th>count_reset_096</th>
                        <th>kwh_reset_111</th>
                        <th>kwh_reset_rate_a_reset_010</th>
                        <th>kwh_reset_rate_b_reset_020</th>
                        <th>kwh_reset_rate_c_reset_030</th>
                        <th>kw_max_reset_rate_a_reset_050</th>
                        <th>kw_max_reset_rate_b_reset_060</th>
                        <th>kw_max_reset_rate_c_reset_070</th>
                        <th>kw_ss_rate_a_015</th>
                        <th>kw_ss_rate_b_016</th>
                        <th>kw_ss_rate_c_017</th>
                        <th>kvh_reset_222</th>
                        <th>kvh_max_280</th>
                        <th>kvh_ss_118</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['date_090']}</td>
                        <td>{$row['timer_091']}</td>
                        <td>{$row['date_time_reset_095']}</td>
                        <td>{$row['count_reset_096']}</td>
                        <td>{$row['kwh_reset_111']}</td>
                        <td>{$row['kwh_reset_rate_a_reset_010']}</td>
                        <td>{$row['kwh_reset_rate_b_reset_020']}</td>
                        <td>{$row['kwh_reset_rate_c_reset_030']}</td>
                        <td>{$row['kw_max_reset_rate_a_reset_050']}</td>
                        <td>{$row['kw_max_reset_rate_b_reset_060']}</td>
                        <td>{$row['kw_max_reset_rate_c_reset_070']}</td>
                        <td>{$row['kw_ss_rate_a_015']}</td>
                        <td>{$row['kw_ss_rate_b_016']}</td>
                        <td>{$row['kw_ss_rate_c_017']}</td>
                        <td>{$row['kvh_reset_222']}</td>
                        <td>{$row['kvh_max_280']}</td>
                        <td>{$row['kvh_ss_118']}</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "ไม่มีข้อมูลในตารางนี้";
        }

        $conn->close();
    }
    ?>

</body>
</html>
