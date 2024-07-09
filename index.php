<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
</head>
<body>
<form>

<?php if(isset($_GET['name'])): ?>
    入力内容：<?php echo htmlspecialchars($_GET['name']); ?><br>
<?php endif; ?>


    名前：<input type="text" name="name"><br>

    性別：
    <input type="radio" name="gender" value="男" id="gender1">
    <label for="gender1">男</label>

    <input type="radio" name="gender" value="女" id="gender2">
    <label for="gender2">女</label>

    <input type="radio" name="gender" value="その他" id="gender3">
    <label for="gender3">その他</label><br>

    好きな色：
    <input type="radio" name="color" value="赤" id="color1">
    <label for="color1">赤</label>

    <input type="radio" name="color" value="青" id="color2">
    <label for="color2">青</label>

    <input type="radio" name="color" value="黄" id="color3">
    <label for="color3">黄</label>

    <input type="radio" name="color" value="その他" id="color4">
    <label for="color4">その他</label>
    <br>

    出身地：
    <select name="from">
      <option value="">選択してください</option>
      <option value="北海道">北海道</option>
      <option value="東北">東北</option>
      <option value="関東">関東</option>
      <option value="中部">中部</option>
      <option value="近畿">近畿</option>
      <option value="中国">中国</option>
      <option value="四国">四国</option>
      <option value="九州">九州</option>
      <option value="その他">その他</option>
    </select>
    <br>

    お問い合わせ内容：<br>
    <textarea name="content" cols="40" rows="5"></textarea><br>

    <input type="checkbox" name="agree" value="yes" id="agree">
    <label for="agree">
      <a href="https://www.google.com" target="_blank">利用規約</a>
      に同意します
    </label><br>
    
    <input type="submit" value="送信">
  </form>
</body>
</html>