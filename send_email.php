<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 獲取表單數據
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 設置郵件內容
    $to = "cherylgao@gmail.com";
    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // 發送郵件
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
