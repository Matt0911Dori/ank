<?php require_once 'Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>PHP入門教室</title>
<style>
dt {
 float:left;	
}
dd {
  padding-left: 8em;	
}
</style>
</head>
<body>
<h3>ご回答ありがとうございました。</h3>
<p>以下の内容で送信致しました。</p>
<dl>
<dt>名前：</dt>
<dd><?php print(enc($_POST['name'])); ?></dd>
<dt>メールアドレス：</dt>
<dd><?php print(enc($_POST['email'])); ?></dd>
<dt>郵便番号：</dt>
<dd><?php print(enc($_POST['zip'])); ?></dd>
<dt>性別：</dt>
<dd><?php print(enc($_POST['sex'])); ?></dd>
<dt>年齢</dt>
<dd><?php print(enc($_POST['age'])); ?>代</dd>
<dt>ご使用のOS：</dt>
<dd><?php if(isset($_POST['os']) === TRUE) {
	 print(enc(implode('、', $_POST['os']))); } ?></dd>
<dt>サイトへのご意見：</dt>
<dd><?php print(nl2br(enc($_POST['memo']))); ?></dd>
<dt>アンケート番号：</dt>
<dd><?php print(enc($_POST['quest_num'])); ?></dd>
</dl>
</body>
</html>