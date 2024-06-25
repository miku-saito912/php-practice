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
// 修正
$time = date("Y年m月d日 H時i分s秒");
echo '現在時刻は、' . $time . 'です。';

// ダブルとシングルクォートの違い
// 答え：変数展開をするかしないかの違いです。
// ダブルを使用すると、変数を代入した値が表示されます。
// シングルクォートを使用すると、変数を代入した値ではなく、変数名がそのまま表示されます。
// なので、今回は変数展開する必要がないので、ダブルではなくシングルクォートを使うのが正解となります


// Q4 条件分岐-1 if文
// 修正
$device = 'mac';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age > 18) ? '未成年です。' : '成人です。';
echo $message;


// Q6 配列
// 修正
$prefectures = ['茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県'];
echo $prefectures[1] . 'と' . $prefectures[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
// 修正
$ken = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($ken as $prefectures => $city) {
  echo $city . "\n";
}


// Q8 連想配列-2
// 修正
$ken = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($ken as $prefectures => $city) {
  if ($prefectures == "埼玉県") {
      echo $prefectures . "の県庁所在地は、" . $city . "です。";
  }
}


// Q9 連想配列-3
// 修正
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


foreach ($ken as $prefectures => $city) {
  if (in_array($prefectures, $kanto)) {
      echo $prefectures . "の県庁所在地は、" . $city . "です。" . "\n";
  } else {
      echo $prefectures . "は関東地方ではありません。" . "\n";
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
// 修正

function calcTaxInPrice($price) //計算した値を返す
    {
    $tax = 0.10; // 消費税率10%
    return $price * (1 + $tax); // //1000 * 1.1
    }

$price = 1000; // 税抜きの金額

$taxInPrice = calcTaxInPrice($price); // 計算した値を受け取る

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';



// ----修正前(※一応残しておく)
// function calcTaxInPrice($price)
// {
//     $tax = 0.10; // 消費税率10%
//     $taxInPrice = $price * (1 + $tax); //1000 * 1.1　//ここで代入しなくても出来る
//     return $taxInPrice;
// }

// $price = 1000; // 税抜きの金額
// $taxInPrice = calcTaxInPrice($price); //上から下に返ってきた値を代入
// echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';



// Q12 関数とif文
// 修正
function distinguishNum($number)
{
    if ($number % 2 === 0){
        return $number . 'は偶数です。';
    } else {
        return $number . 'は奇数です。';
    }
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24);



// Q13 関数とswitch文
// 修正
function evaluateGrade($Grade)
{
switch ($Grade) {
    case 'A':
    case 'B':
        return '合格です。';
        break;
        
    case 'C':
        return '合格ですが追加課題があります。';
        break;
        
    case 'D':
        return '不合格です。';
        break;
        
    default:
        return '判定不明です。講師に問い合わせてください。';
        break;
}
}
echo evaluateGrade('A') . "\n";
echo evaluateGrade('E');



?>