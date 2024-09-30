<?php
// Q1 変数と文字列
$name = "「新沢」";
$massame = "私の名前は" .$name . "です。";
echo $massame;


// Q2 四則演算
$x = 5;
$y = 4;

echo($x * $y);
($x * $y / 2);

// Q3 日付操作
$date = date ("Y年m月d日 h時i分s秒");
date_default_timezone_set('Asia/Tokyo');
$massame = '現在時刻は、' . $date. 'です。';
echo $massame;

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device ='mac'||'windows' ) {
    echo '使用OSは、macです。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 20;
if ($age >18) {
    $message = '成人です。';
} else {
    $message = '未成年です。';
}

echo $message;

// Q6 配列
$places = ['東京都','埼玉県','栃木県','千葉県','神奈川県','群馬県',];

$message = $places[2]. 'と'. $places[3]. 'は関東地方の都道府県です。';
echo $message;

// Q7 連想配列-1
$sales = [
    
  '東京都' => '新宿区',
  
  '神奈川県' => '横浜市', 
  
  '千葉県' => '千葉市', 
  
  '埼玉県' => 'さいたま市', 
  
  '栃木県' => '宇都宮市', 
  
  '群馬県' => '前橋市', 
  
  '茨城県' => '水戸市'
  
  ];

foreach ($sales as $place) {
  echo $place."\n";
  
} //"\n"は改行を表す

// Q8 連想配列-2
$prefecter = [
    
  '東京都' => '新宿区',
  
  '神奈川県' => '横浜市', 
  
  '千葉県' => '千葉市', 
  
  '埼玉県' => 'さいたま市', 
  
  '栃木県' => '宇都宮市', 
  
  '群馬県' => '前橋市', 
  
  '茨城県' => '水戸市'
  
  ];
 

foreach ($prefecter as $key => $value) {
  if ($key == '埼玉県' ) {
      echo "$key の県庁所在地は、$value です。";//ダブルクォーテーションで括るとシンプルに書ける
  }
  

} 

// Q9 連想配列-3
$prefecter = [
    
  '東京都' => '新宿区',
  
  '神奈川県' => '横浜市', 
  
  '千葉県' => '千葉市', 
  
  '埼玉県' => 'さいたま市', 
  
  '栃木県' => '宇都宮市', 
  
  '群馬県' => '前橋市', 
  
  '茨城県' => '水戸市'
  
  ];

$prefecter['愛知県'] = '名古屋市';//愛知県と大阪府を追加
$prefecter['大阪府'] = '大阪市';



foreach ($prefecter as $key => $value) {
  if ($key == '愛知県' || $key == '大阪府') { //連想配列は一つ一つのkeyをループさせているため「&&」ではなく「||」を使う
      echo "{$key}　は関東地方ではありません。\n"; //if文　〇〇＝〇〇ならば
  } else {
      echo "{$key} の県庁所在地は、{$value}　です。\n";
  }
  
  
} 

// Q10 関数-1
function hello($name)
{
    echo $name . "さん、こんにちは。\n";
}
;
hello("金谷");
hello('安藤');


// Q11 関数-2
function calcTaxInPrice($price = 1000)
{
    $taxInPrice = $price * 1.1;
    
    
   echo " $price 円の商品の税込価格は $taxInPrice 円です。";

}

// Q12 関数とif文
function distinguishNum($number)
{
    echo " $number は";
    
    if ($number % 2 == 0) {
        echo '偶数';
    } else {
         echo '奇数';
    }
    
    
     echo  "です。\n";

}
 
distinguishNum(11);
distinguishNum(24);


// Q13 関数とswitch文
function evaluateGrade($grades)
{
    
    switch ($grades) {
        case 'A':
        case 'B':
            echo "合格です。\n";
            break;
        
        case 'C':
            echo "合格ですが追加課題があります。\n";
            break;
            
        case 'D':
            echo "不合格です。\n";
        
        default:
            echo "判定不明です。講師に問い合わせてください。\n";
            break;
        
    }
    
    

}
 
evaluateGrade('A');
evaluateGrade('E');

?>