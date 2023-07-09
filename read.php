<?php
$data = [];
$file = fopen("data/data.txt","r"); 
$line_number = 0; 
while(!feof($file)) {
    $line = fgets($file);
    $fields = explode(",", $line);
    if(count($fields) == 6) {
        list($date, $name, $mail, $age, $job, $prefecture) = $fields;
        $data[] = [
            'line_number' => $line_number,
            'date' => trim($date),
            'name' => trim($name),
            'mail' => trim($mail),
            'age' => trim($age),
            'job' => trim($job),
            'prefecture' => trim($prefecture),
        ];
        $line_number++; 
    }
}
fclose($file);

$ages = array_count_values(array_column($data, 'age'));
?>

<html>
<head>
<meta charset="utf-8">
<title>データ一覧</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table, th, td {
        border: 1px solid black;
    }

    th, td {
        padding: 15px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['年齢', '人数'],
        <?php foreach($ages as $age => $count) : ?>
            ['<?php echo $age; ?>',  <?php echo $count; ?>],
        <?php endforeach; ?>
    ]);

    var options = {
        title: '年齢別人数',
        is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('age_chart'));
    chart.draw(data, options);
}
</script>
</head>
<body>
    <h1>データ一覧</h1>
    <div id="age_chart" style="width: 900px; height: 500px;"></div>
    <table>
        <tr>
            <th>登録日時</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>年齢</th>
            <th>職業</th>
            <th>都道府県</th>
        </tr>
        <?php foreach($data as $row) : ?>
            <tr>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['mail']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['job']; ?></td>
    <td><?php echo $row['prefecture']; ?></td>
    <td><a href="delete.php?line=<?php echo $row['line_number']; ?>">削除</a></td>
</tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
