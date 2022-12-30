<?php
    use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登入 后台</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/layuiadmin/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/layuiadmin/style/admin.css" media="all">
    <link rel="stylesheet" href="/layuiadmin/style/login.css" media="all">
</head>
<body style="background-image: url('/assets/images/login_bg.jpg');background-size: 100% 100%">

<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">

    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2>后台管理系统</h2>
        </div>
        <form class="layui-form" onsubmit="return false" lay-filter="form">
            <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-username"
                       for="LAY-user-login-username"></label>
                <input type="text" name="username" id="LAY-user-login-username" lay-verify="required"
                       placeholder="用户名" class="layui-input">
            </div>
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-password"
                       for="LAY-user-login-password"></label>
                <input type="password" name="password" id="LAY-user-login-password" lay-verify="required"
                       placeholder="密码" class="layui-input">
            </div>
            <div class="layui-form-item">
                <div class="layui-row">
                    <div class="layui-col-xs7">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-vercode"
                               for="LAY-user-login-vercode"></label>
                        <input type="text" name="code" id="LAY-user-login-vercode" lay-verify="required"
                               placeholder="图形验证码" class="layui-input">
                    </div>
                    <div class="layui-col-xs5">
                        <div style="margin-left: 10px;">
                            <img src="<?php echo Url::to(['public/code']);?>"
                                 class="layadmin-user-login-codeimg"
                                 id="LAY-user-get-vercode"
                                 onclick="javascript:this.src=this.src+'&t='+ Date.parse(new Date())"
                            >
                        </div>
                    </div>
                </div>
            </div>
                <?php ?>
            <div class="layui-form-item">
                <input type="hidden" name="<?PHP echo Yii::$app->request->csrfParam;?>" value="<?php echo Yii::$app->request->csrfToken;?>">
                <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="login">登 入</button>
            </div>
        </div>
        </form>
    </div>
</div>

<script src="/layuiadmin/layui/layui.js"></script>
<script>
    layui.use(['form', 'layer','jquery'], function () {
        var form    = layui.form,
            layer   = layui.layer,
            $       = layui.jquery;
        form.on('submit(login)', function (data) {
            console.log(data.field)
            $.ajax({
                type:'post',
                url:'',
                data:form.filed,
                function(res){
                    console.log(res)
                }
            })
        })
    })

</script>
</body>
</html>