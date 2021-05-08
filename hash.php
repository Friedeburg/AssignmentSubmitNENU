<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
function h($var)
{
    if (is_array($var))
    {
        return array_map('h', ($var));
    }
    else
    {
        return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
    }
}
?>
</body>
</html>
