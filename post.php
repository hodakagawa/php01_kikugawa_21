<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #fafafa;
}

.container {
    width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

input[type="text"], select {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

input[type="submit"] {
    padding: 10px 20px;
    border: none;
    color: #fff;
    background-color: #4caf50;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

label {
    font-weight: bold;
}

ul {
    list-style-type: none;
    padding: 0;
}
</style>
</head>
<body>
<form action="write.php" method="post">
    お名前: <input type="text" name="name"><br>
    EMAIL: <input type="text" name="mail"><br>
    <label for="age">年齢:</label>
<select id="age" name="age">
    <option value="" selected disabled hidden>年齢を選択してください</option>
    <option value="~10歳">~10歳</option>
    <option value="11~20歳">11~20歳</option>
    <option value="21~30歳">21~30歳</option>
    <option value="30歳~">30歳~</option>
</select>
    職業: <input type="text" name="job"><br>
    都道府県: 
	<select name="prefecture">
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select>
    <br>
    <input type="submit" value="送信">
</form>
<ul>
<li><a href="read.php">データ一覧</a></li>
</ul>
</body>
</html>
