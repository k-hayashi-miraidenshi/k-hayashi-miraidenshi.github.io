<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>sent.php</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  
  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>
      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>
      <div class="form-item">■ ふりがな</div>
      <?php echo $_POST['furigana']; ?>
      <div class="form-item">■ 年齢</div>
      <?php echo $_POST['age']; ?>
      <div class="form-item">■ メールアドレス</div>
      <?php echo $_POST['email']; ?>
      <div class="form-item">■ 性別</div>
       <?php echo $_POST['category']; ?>
      <div class="form-item">■ お問い合わせ内容</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>
 
</body>
</html>
