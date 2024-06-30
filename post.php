<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿画面</title>
    <link rel="stylesheet" href="styles.css">
    <script src ="post.js"></script>
</head>
<body>
    <nav>
    </nav>
    <header>
        <h1>投稿画面</h1>
    </header>
    <main>
        <form action="restore_post.php" method="POST">
            <select name = "selected_kind" id ="kind" size ="1">
                <option value="caffein">カフェイン</option>
                <option value="snack">お菓子</option>
            </select>
            <p>摂取量(<span id = consumed_unit_text>mg</span>):</p>
            <input type="text" id="amount" name="amount" pattern="\d*" title ="数字のみを入力してください"required>
            <br>
            <p>内容:</p>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            
            <br>
            <button type = "submit">投稿して確認する</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 OMG</p>
    </footer>
</body>
</html>