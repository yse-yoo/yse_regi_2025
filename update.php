<?php
// POSTチェック
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}
// POSTデータ取得
$posts = $_POST;

// TODO: バリデート

// TODO: 更新

// トップにリダイレクト
header('Location: ./');

/**
 * 売上計上
 */
function update($posts)
{
    // TODO: 売上計上DB更新
    $price = number_format($posts['price']);

    // メッセージをセッション保存
    $_SESSION[APP_KEY]['message'] = "売上 {$price} を計上しました";
}
