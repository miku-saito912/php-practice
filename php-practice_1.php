<?php
// Q1 変数と文字列
$name = '安藤';
echo '私の名前は「' . $name . '」です';


// Q2 四則演算
$num = (5 * 4);
echo $num;

$num /= 2;
echo $num;


// Q3 日付操作
$time = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、" . $time . "です。";


// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} else {
    if ($device === 'mac') {
    echo '使用OSは、macです。';
} else {
    echo 'どちらでもありません。';
}
}


// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age > 18) ? '未成年です。' : '成人です。';
echo $message;


// Q6 配列
$prefecture = ['神奈川県', '北海道' ,'栃木県', '千葉県'];
echo $prefecture[2] . 'と' . $prefecture[3] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$ken = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($ken as $key => $name) {
  echo $name . "\n";
}


// Q8 連想配列-2
$ken = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($ken as $key => $name) {
  if ($key == "埼玉県") {
      echo $key . "の県庁所在地は、" . $name . "です。";
  }
}


// Q9 連想配列-3
$ken = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
  "愛知県" => "名古屋市",
  "大阪府" => "大阪市"
];

$kanto = [
  "東京都",
  "神奈川県",
  "千葉県", 
  "埼玉県", 
  "栃木県", 
  "群馬県", 
  "茨城県"
  ];


foreach ($ken as $key => $name) {
  if (in_array($key, $kanto)) {
      echo $key . "の県庁所在地は、" . $name . "です。" . "\n";
  } else {
      echo $key . "は関東地方ではありません。" . "\n";
  }
}


// Q10 関数-1
function sayHello($name)
{
    echo $name . 'さん、こんにちは。';
}

sayHello('金谷');
sayHello('安藤');


// Q11 関数-2
function calcTaxInPrice($price)
{
    $tax = 0.10; // 消費税率10%
    $taxInPrice = $price * (1 + $tax); //1000 * 1.1
    return $taxInPrice;
}

$price = 1000; // 税抜きの金額

$taxInPrice = calcTaxInPrice($price); //上から下に返ってきた値を代入

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';


// Q12 関数とif文
function distinguishNum($number)
{
    if ($number % 2 == 0){
        echo $number . 'は奇数です。';
    } else {
        echo $number . 'は奇数です。';
    }
}

distinguishNum(11);
distinguishNum(24);


// Q13 関数とswitch文
function evaluateGrade($Grade)
{
switch ($Grade) {
    case 'A':
        echo '合格です。';
        break;
        
    case 'B':
        echo '合格です。';
        break;
        
    case 'C':
        echo '合格ですが追加課題があります。';
        break;
        
    case 'D':
        echo '不合格です。';
        break;
        
    default:
        echo '判定不明です。講師に問い合わせてください。';
        break;
}
}
echo evaluateGrade('A') . "\n";
echo evaluateGrade('E');



?>