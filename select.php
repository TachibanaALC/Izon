<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿選択画面</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>選択画面</h1>
    </header>
    <main>
        <form method="POST" action = "kakunin.php">
        <section>
            <h2>確認する</h2>
            <select name = "selected_kind" size ="1">
                <option value="caffein">カフェイン</option>
                <option value="snack">お菓子</option>
            </select>
            <button type="submit">選択したものを確認</button>
        </form>
        <br>
            <input type = "button" onclick = history.back() value ="戻る">
        </section>
    </main>
    <footer>
        &copy; 2024 OMG
    </footer>
</body>
</html>
