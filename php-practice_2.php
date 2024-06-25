<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します" . "\n";

for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
      echo "tic-tac\n";
  } elseif ($i % 4 == 0) {
      echo "tic\n";
  } elseif ($i % 5 == 0) {
      echo "tac\n";
  } else {
      echo $i . "\n";
  }
}


// Q2 多次元連想配列
// 問題１(多次元連想配列)
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo "Bさんの電話番号は" . $personalInfos[1]['tel'] . "です。";

// 問題２(多次元連想配列)
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

foreach ($personalInfos as $key => $personal){
  echo "1番目の" . $personal['name'] . "のメールアドレスは" . $personal['mail'] . "で、電話番号は" . $personal['tel'] . "です。" . "\n";
}

// 問題3(多次元連想配列)
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

$ageList = [25, 30, 18];

foreach ($ageList as $index => $age) {
  $personalInfos[$index]['age'] = $age;
}

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。';
    }
}

$yamada = new Student(120 , "山田");
$yamada->attend();


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($php)
    {
        echo $this->studentName . 'は' . $php . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP'); // 因数で渡している


// Q5 定義済みクラス
// 問題1
$time = new DateTime("2021/3/2");
$return = $time->modify("-1 month")->format("Y-m-d");
echo $return;


// 問題2
$today = new DateTime();// 今日
$past = new DateTime('1992-04-25');//今日といつ
$interval = $today->diff($past);//今日と1992-04-25の差を計算
$answer = $interval->days;// 計算の答え
echo 'あの日から' . $answer . '日経過しました。' . "\n";// 出力


?>