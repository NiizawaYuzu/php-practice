<?php
// Q1 tic-tac問題


echo '1から100までのカウントを開始します';


for($i = 1; $i <= 100; $i++) {
    
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo 'tic-tac';
        echo "\n";
    } elseif ($i % 5 == 0) {
        echo 'tac';
        echo "\n";
    } elseif ($i % 4 == 0) {
        echo 'tic';
        echo "\n";
    
    } else {
        echo $i;
        echo "\n";
    }
}
// Q2 多次元連想配列
    //Q2-1
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
];//多次元配列の書き方＝配列の中に配列があるようにするには[]
echo $personalInfos[1]['name']. 'の電話番号は' .$personalInfos[1]['tel'] . 'です。'; 

    //Q2-2

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
  
foreach ($personalInfos as $index => $personalInfo)  {
    echo($index + 1). '番目の'. $personalInfo['name'].'のメールアドレスは'.$personalInfo['mail']. 'で、電話番号は'. $personalInfo['tel']. 'です。';
    echo "\n";
}   
    //Q2-3
    
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
    //[$index]['age'] = $age


    
    foreach ($ageList as $index => $age)  {
        
        
        
        $personalInfos[$index]['age'] = $age;
        
        //$personalInfos[何番目]の['age']
        
    }
    
    var_dump($personalInfos);
    //ver_dumpは確認したい値()に渡して実行するとデータの型と値を出力する。
    
      
// Q3 オブジェクト-1

class Student //studentはクラス名
{
    public $studentId ; //定義
    public $studentName;

    public function __construct($id, $name) 
    //__constructはインスタンスする際に自動で実行される（インスタンス化+コンストラクタ）
    {
        $this->studentId = $id;//id
        $this->studentName = $name;//名前
        
        echo '学籍番号'.$id.'番の生徒は'.$name. 'です。';
    }//This：インスタンス自身を指している

    public function attend() //メゾット（オブジェクトがもつ機能）
    {
        echo '授業に出席しました。';
    }
}
  
 //インスタンス
$student = new  Student('120', '山田');


// Q4 オブジェクト-2
class Student //studentはクラス名
{
    public $studentId ; //定義
    public $studentName;

    public function __construct($id, $name) //引数は関数内で渡したい値を入力する。
    //__constructはインスタンスする際に自動で実行される（インスタンス化+コンストラクタ）
    {
        $this->studentId = $id;//id
        $this->studentName = $name;//名前
        
    }//This：インスタンス自身を指している

    public function attend($subject) //$subjectは引数（$変数）
    {
       
       
        echo $this->studentName.'は'.$subject.'の授業に出席しました。学籍番号：'.$this->studentId ;
    
    }
}
  
 //インスタンス
$yamada = new  Student(120, '山田');//クラス（＝設計図）だけだと使えない。new クラス名で実態を作っている。
$yamada->attend('PHP');
$tanaka = new  Student(999, '田中');
var_dump($tanaka);
$yamada ->attend('PHP');

// Q5 定義済みクラス
$date = new DateTime('2021-03-02');//引数が空なら現在時刻
echo $date->format('Y-m-d');

?>