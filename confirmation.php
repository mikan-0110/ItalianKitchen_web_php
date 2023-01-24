<!-- http://localhost:8080/ItalianKitchen/confirmation.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Italian Kitchen FANTASTICO540 | 問い合わせ確認顔面</title>
  </head>
  <body>
    <h1>確認画面</h1>

    <form action="send.php">
      <table>
          <tr>
              <td>名前</td>
              <td><?php echo $_POST["name"]; ?></td>
          </tr>
          <tr>
              <td>メールアドレス</td>
              <td><?php echo $_POST["mail"]; ?></td>
          </tr>
          <tr>
              <td>問い合わせ表題</td>
              <td><?php echo $_POST["title"]; ?></td>
          </tr>
          <tr>
              <td>問い合わせ内容</td>
              <td><?php echo $_POST["inquiry"]; ?></td>
          </tr>
      </table>
      <input type="submit" value="送信">
    </form>
  </body>
</html>
