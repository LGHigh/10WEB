<?php
//this php file is used to center the tool function which will be used

/**
 * use to send email to user
 *
 * @param string $account -the email address
 * @param string $email_info -thie email info
 * @param string $base_url -the website base url
 */
function sendMail($account,$email_info,$base_url = "localhost:6070"){

    require("phpmailer/class.phpmailer.php");
    require("emailHtml/Verification.php");

    $email_host = $email_info['email_host'];
    $email_username = $email_info['email_username'];
    $email_password = $email_info['email_password'];

    $mail = new PHPMailer(); //建立邮件发送类
    $address = $account;
    $mail->IsSMTP(); // 使用SMTP方式发送
    $mail->Host = $email_host; // 您的企业邮箱域名
    $mail->SMTPAuth = true; // 启用SMTP验证功能
    $mail->Username = $email_username; // 邮箱用户名(请填写完整的email地址)
    $mail->Password = $email_password; // 邮箱密码
    $mail->From = $email_username; //邮件发送者email地址
    $mail->FromName = "亿灵";
    $mail->AddAddress("$address", "$address");

    //收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
    $mail->Subject = "eling验证"; //邮件标题：要以英文开头
    $_account = urlencode(base64_encode($account));

    //the url input
    $msg = sprintf("%s/index.php/user/activeUser/%s",$base_url,$_account);
    $web_url = $base_url;    
    //the function is used to format a html verifcation html email
    $msg = getVerifi($msg,$web_url);

    //set the content to be html ,not only the text
    $mail->IsHtml(true);
    $mail->Body = $msg; //邮件内容
    return $mail->Send();
}

/**
 * use to send email to user
 *
 * @param string $account -the email address
 * @param string $email_info -thie email info
 * @param string $base_url -the website base url
 */
function sendMailBySendCloud($account,$email_info,$base_url = "localhost:6070") {
    require("emailHtml/Verification.php");    

    $url = 'http://api.sendcloud.net/apiv2/mail/send';
    $API_USER = 'a1liz_test_TM0jQN';
    $API_KEY = 'vMalmKKIoj9Q2kCJ';

    $_account = urlencode(base64_encode($account));    
    //the url input
    $msg = sprintf("%s/index.php/user/activeUser/%s",$base_url,$_account);
    $web_url = $base_url;    
    //the function is used to format a html verifcation html email
    $msg = getVerifi($msg,$web_url);

    $param = array(
        'apiUser' => $API_USER, # 使用api_user和api_key进行验证
        'apiKey' => $API_KEY,
        'from' => $email_info['email_username'], # 发信人，用正确邮件地址替代
        'fromName' => "亿灵",
        'to' => $account,# 收件人地址, 用正确邮件地址替代, 多个地址用';'分隔  
        'subject' => 'eling验证',
        'html' => $msg,
        'respEmailId' => 'true'
    );
    

    $data = http_build_query($param);

    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $data
    ));
    $context  = stream_context_create($options);
    $result = file_get_contents($url, FILE_TEXT, $context);

    return json_decode($result)->{"result"};
}

?>
