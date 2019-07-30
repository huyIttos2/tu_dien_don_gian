<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="margin-left: 455px;margin-top: 30px">
    <form method="post">
        <h1>Dictionary Basic</h1>
        <label>
            <input type="text" name="keyword">
        </label>
        <button type="submit">Search</button>
    </form>
    <?php

    $myFile = "data.json";
    $arr_data = array();
    $json_data = file_get_contents($myFile);
    $arr_data = json_decode($json_data, true);
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $keyword = $_POST['keyword'];
        $flag = 0;
        foreach ($arr_data as $word => $mean) {
            if ($keyword == $word) {
                echo "<h2>Mean of $keyword : " . $mean . "</h2>";
                echo "<br/>";
                $flag = 1;
            }
        }
        if ($flag == 0) echo "<h2>No found word</h2>";
    }
    ?>
</div>
</body>
</html>
