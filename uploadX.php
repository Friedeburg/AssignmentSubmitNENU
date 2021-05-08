<?php
require_once './easyauth.php';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2020智能科学作业提交系统</title>
  <link rel="stylesheet" href="sign_in.css">
</head>
<body background="sign_in_bg.jpg">
    <div >
      <div>
        <br></br>
        <br></br>
        <h1 class="h1">2020智能科学作业提交系统（Ver 2 改 I 型）</h1>
      </div>

      <div class="center">
        <div class="signIn">
          <div>
            <h2 class="h2">该交作业啦~</h2>
            <form action="upload_file.php" method="post" enctype="multipart/form-data">
              <tr>
                <td>
                  <span>学号</span>
                </td>
                <td>
                  <input type="text" name="StudentID">
                  <br></br>
                </td>
              </tr>
              <tr>
                <td>
                  <span>姓名</span>
                </td>
                <td>
                  <input type="text" name="StudentName">
                </td>
              </tr>
              <tr>
                <td >
                  <br> <br>
                  <input type="hidden" name="MAX_FILE_SIZE" value="25000000" />
                  <input type="file" name="file" size="45" maxlength="100" />
                </td>
              </tr>
              <input type="submit" value="提交" class="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
