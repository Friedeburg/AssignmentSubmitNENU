
<?php
require_once 'hash.php' ;
header('X-FRAME-OPTIONS: SAMEORIGIN');
session_start();
$userid[] = 'NENU';
$username[] = '2020届智能科学作业提交系统公共登录部分';
$hash[] = '【这里是哈希值】 用PHP的哈希函数生成';
$error = '';
if (isset($_SESSION['auth'])) {
    $_SESSION['auth'] = false;
}

if (isset($_POST['userid']) && isset($_POST['password'])) {
    foreach ($userid as $key => $value) {
        if ($_POST['userid'] === $userid[$key] &&
        password_verify($_POST['password'], $hash[$key]))
        {
            session_regenerate_id(true);
            $_SESSION['auth'] = true;
            $_SESSION['username'] = $username[$key];
            break;
        }
    }

    if ($_SESSION['auth'] === false) {
        $error = '密码不对～';
    }

}
    if ($_SESSION['auth'] !== true) {
        ?>
        <!DOCTYPE html>
        <html lang="zh-cn">
        <head>
        	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <link rel="stylesheet" href="./css/logincss.css">
        </head>
        <body>
            <div class="in">
                <h1>NENU2020智能科学作业提交系统公共登录</h1>
            </div>
        	<div class="container">
        		<div class="login">
        			<h1>站住！！需要暗号！！！</h1>
        			<form action="./uploadX.php" method="post">
        			<dl>
        				<dt><label for="userid">用户名交出来～</label></dt>
        				<dd><input type="text" name="userid" id="userid" value=""  style="width: 290px;height: 30px;margin-top: 5px;"/></dd>
        			</dl>
        			<dl>
        				<dt><label for="password">暗号拿来～</label></dt>
        				<dd>
        					<input type="password" name="password" id="password" value="" style="width: 290px;height: 30px;margin-top: 5px;"/>
        				</dd>
        			</dl>
        			<br> <br>
        			<input type="submit" name="submit" value="验证并登录" style="font-size: 16px; width: 85px;height: 35px;margin-top: 5px;color: rgb(118, 116, 116);"/>
        		    </form>
        		</div>
        	</div>
        </body>
        </html>

        <?php
        exit();
    }
