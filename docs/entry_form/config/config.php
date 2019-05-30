<?php

// ----------基本設定開始---------- //

// 送信先メールアドレス
$adminMail = "kouno@openloop.co.jp,tsuyoshi.nakamura@openloop.co.jp";


// 送信先メールアドレスを配列化(編集しないでください)
$adminArray = array();
$adminArray = explode(',', $adminMail);


// 送信者名
$adminName = "株式会社オープンループパートナーズ";


// 送信後に戻るURL
$returnUrl = "https://www.olp.co.jp/agent/";


// 送信完了メッセージ
$completionMessage = <<<EOD
送信が完了しました。ありがとうございます。

———————————————————————
株式会社オープンループパートナーズ
人材紹介事業推進室

〒160-0022
東京都新宿区新宿4-3-17
FORECAST新宿SOUTH7階

電話番号：03-5368-3277
営業時間：平日 10:00～19:00
———————————————————————

EOD
;

// リターンメールのメールタイトル
$returnMailTitle = "登録完了いたしました。";

// リターンメールのヘッダーメッセージ
$returnMailHeader = <<<EOD


※このメールはシステムからの自動返信です


なお、営業時間は平日10時〜19時となっております。
時間外の場合は翌営業日の対応となります。

ご理解・ご了承の程よろしくお願い致します。

EOD
;


// リターンメールのフッターメッセージ
$returnMailFooter = <<<EOD

----------------------------------------------------------------------
株式会社オープンループパートナーズ
人材紹介事業推進室

〒160-0022
東京都新宿区新宿4-3-17
FORECAST新宿SOUTH7階

電話番号：03-5368-3277
営業時間：平日 10:00～19:00
----------------------------------------------------------------------

EOD
;

// ----------基本設定終了---------- //


// ----------添付ファイル設定開始---------- //

// 拡張子制限（0=しない・1=する）
$ext_denied = 1;
// 許可する拡張子リスト
$ext_allow1 = "pdf";
$ext_allow2 = "docx";
$ext_allow3 = "doc";
$ext_allow4 = "xlsx";
$ext_allow5 = "xls";
// 配列に格納しておく
$EXT_ALLOWS = array($ext_allow1, $ext_allow2, $ext_allow3, $ext_allow4, $ext_allow5);

// アップロード容量制限（0=しない・1=する）
$maxmemory = 1;
// 最大容量（KB）
$max = 6000;

// ----------添付ファイル設定終了---------- //


// ----------ここから下は変更不要---------- //

require_once(__DIR__ . "/../lib/functions.php");
require_once(__DIR__ . "/autoload.php");

session_start();
