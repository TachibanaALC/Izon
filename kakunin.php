<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿内容確認画面</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>あなたの記録</h1>
    </header>
    <main>

        <!--計算結果を提示する場所-->
    <div class = "calculation">
        <article>
            <h2>
                計算結果
            </h2>
        </article>

        <?php
        //ファイル読み込み
        $f = fopen("data.csv", "r");

        $selected_kind = $_POST['selected_kind'];

        $total_amount = 0;

        $unit = "mg";

        $loop_num = 0;
        
        //一行ずつ読み出し
        while($line = fgetcsv($f)){
            
            if($loop_num == 0) {
                $loop_num ++;
                continue;
            }

            //選択した種類以外の種類ならスキップ
            if($line[0] != $selected_kind) continue;
            
            //摂取量をカウントアップする
            for($i = 0; $i<count($line); $i++){
                if($i == 1) $total_amount += intval($line[$i]);
            }
        }
        if($selected_kind == "caffein") $unit = "mg";
        if($selected_kind == "snack")$unit = "kcal";

        echo "<p>". "あなたは<span class='calculate-result'>" .$total_amount . $unit."</span>摂取しています……！！</p>"
        
        ?>
    </div>

    <br>
    <br>
    
        <!--これまでの投稿を確認する場所-->
    <div class ="memory">
        <article>
            <h2>過去の記録</h2>
    
        <?php

        //ファイル読み込み
        $f = fopen("data.csv", "r");

        $loop_num = 0;

        $selected_kind = $_POST['selected_kind'];
        
        //一行ずつ読み出し
        while($line = fgetcsv($f)){
            
            if($loop_num == 0) {
                $loop_num ++;
                continue;
            }

            showcomment($line, $selected_kind);

            $loop_num ++;
        }

        function showcomment($line, $selected_kind)
        {
            if($line[0] != $selected_kind) return;

            echo "<h3>過去の投稿</h3>";
            echo"<p>".$line[3]."</p>";
            echo"<p>". $line[2] . "</p>";
        }
        ?>
        </article>
    </div>
        
    <form>
            <input type = "button" class="button" value="ホーム画面に戻る" onclick="location.href='home.html'">
    </form>

    </main>
    <footer>
        &copy; 2024 OMG
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--自作のJS-->
<script src="load_transition.js"></script>
</body>
</html>
