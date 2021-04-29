<!DOCTYPE html>
<html lang="ja">
<?php
require_once "simple_html_dom.php";
$a = 0;
//noclear = [0], easyclear = [1], normalclear = [2], hardclear = [3], fc = [4], all = [5]
$zero = array(0,0,0,0,0,0);
$one = array(0,0,0,0,0,0);
$two = array(0,0,0,0,0,0);
$three = array(0,0,0,0,0,0);
$four = array(0,0,0,0,0,0);
$five = array(0,0,0,0,0,0);
$six = array(0,0,0,0,0,0);
$seven = array(0,0,0,0,0,0);
$getid = "88630";
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
  $getid = $_GET['id'];
}
$url = "https://stairway.sakura.ne.jp/bms/lroverjoy/?contents=player&page=".$getid;
// URLを指定してオブジェクト化します
$html = file_get_html($url);



$result = $html->find('.noclear');
//echo count($result).'<br>';
while($a < count($result)) {
  //echo $result[$a]->plaintext.' ';
  switch ($result[$a]->plaintext){
    case '★0':
    $zero[0]++;
    break;
    case '★1':
    $one[0]++;
    break;
    case '★2':
    $two[0]++;
    break;
    case '★3':
    $three[0]++;
    break;
    case '★4':
    $four[0]++;
    break;
    case '★5':
    $five[0]++;
    break;
    case '★6':
    $six[0]++;
    break;
    case '★7':
    $seven[0]++;
    break;
  }
  $a++;
  //echo $result[$a].'<br>';
  $a++;
}
$a = 0;


$result = $html->find('.easyclear');
//echo count($result).'<br>';
while($a < count($result)) {
  //echo $result[$a]->plaintext.' ';
  switch ($result[$a]->plaintext){
    case '★0':
    $zero[1]++;
    break;
    case '★1':
    $one[1]++;
    break;
    case '★2':
    $two[1]++;
    break;
    case '★3':
    $three[1]++;
    break;
    case '★4':
    $four[1]++;
    break;
    case '★5':
    $five[1]++;
    break;
    case '★6':
    $six[1]++;
    break;
    case '★7':
    $seven[1]++;
    break;
  }
  $a++;
  //echo $result[$a].'<br>';
  $a++;
}
$a = 0;

$result = $html->find('.normalclear');
//echo count($result).'<br>';
while($a < count($result)) {
  //echo $result[$a]->plaintext.' ';
  switch ($result[$a]->plaintext){
    case '★0':
    $zero[2]++;
    break;
    case '★1':
    $one[2]++;
    break;
    case '★2':
    $two[2]++;
    break;
    case '★3':
    $three[2]++;
    break;
    case '★4':
    $four[2]++;
    break;
    case '★5':
    $five[2]++;
    break;
    case '★6':
    $six[2]++;
    break;
    case '★7':
    $seven[2]++;
    break;
  }
  $a++;
  //echo $result[$a].'<br>';
  $a++;
}
$a = 0;

$result = $html->find('.hardclear');
//echo count($result).'<br>';
while($a < count($result)) {
  //echo $result[$a]->plaintext.' ';
  switch ($result[$a]->plaintext){
    case '★0':
    $zero[3]++;
    break;
    case '★1':
    $one[3]++;
    break;
    case '★2':
    $two[3]++;
    break;
    case '★3':
    $three[3]++;
    break;
    case '★4':
    $four[3]++;
    break;
    case '★5':
    $five[3]++;
    break;
    case '★6':
    $six[3]++;
    break;
    case '★7':
    $seven[3]++;
    break;
  }
  $a++;
  //echo $result[$a].'<br>';
  $a++;
}
$a = 0;

$result = $html->find('.fc');
//echo count($result).'<br>';
while($a < count($result)) {
  //echo $result[$a]->plaintext.' ';
  switch ($result[$a]->plaintext){
    case '★0':
    $zero[4]++;
    break;
    case '★1':
    $one[4]++;
    break;
    case '★2':
    $two[4]++;
    break;
    case '★3':
    $three[4]++;
    break;
    case '★4':
    $four[4]++;
    break;
    case '★5':
    $five[4]++;
    break;
    case '★6':
    $six[4]++;
    break;
    case '★7':
    $seven[4]++;
    break;
  }
  $a++;
  //echo $result[$a].'<br>';
  $a++;
}
$a = 0;


$flg = 0;
$result = $html->find('tr td');
//echo count($result).'<br>';
while($a < count($result)) {
  switch ($result[$a]->plaintext){
    case '★0':
    $zero[5]++;
    $flg = 1;
    break;
    case '★1':
    $one[5]++;
    $flg = 1;
    break;
    case '★2':
    $two[5]++;
    $flg = 1;
    break;
    case '★3':
    $three[5]++;
    $flg = 1;
    break;
    case '★4':
    $four[5]++;
    $flg = 1;
    break;
    case '★5':
    $five[5]++;
    $flg = 1;
    break;
    case '★6':
    $six[5]++;
    $flg = 1;
    break;
    case '★7':
    $seven[5]++;
    $flg = 1;
    break;
  }
  if ($flg == 1){
    //echo $result[$a].' ';
    $flg = 0;
    $a++;
    //echo $result[$a].'<br>';
  }
  $a++;
}
$a = 0;
//echo $one[5].'<br>';
//echo $two[5].'<br>';
//echo $three[5].'<br>';
//echo $four[5].'<br>';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Overjoy[<?php echo $getid ?>]</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <style>
    .level { vertical-align: top; padding-right: 10px }
    .progress-bar-gray { background-color: #cccccc }
    .progress-bar-fc{background-color: #e0ffff; color:#696969 }
    .progress { cursor: pointer }
    .progress-bar {height: 32px; padding-top: 6px}
    .per { display: none }
    .scroll-box { overflow-x: scroll }
  </style>
</head>
<body>
  <div class="container">
    <h1>
      Overjoy
      <small><a href=<?php echo "http://www.dream-pro.info/~lavalse/LR2IR/search.cgi?mode=mypage&playerid=".$getid ?>><?php echo $getid ?></a>
    </h1>

      <br><br>
      <table><tbody>

        <tr>
          <td class="level">★★0</td>
            <td class="progress" style="width: 100%" data-toggle="modal" data-target="#modal" level="1" type="6">
              <div class="progress-bar progress-bar-fc" style="width: <?php echo $zero[4]/$zero[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
                <span class="val"><?php if ($zero[4] != 0) echo $zero[4]?></span>
                <span class="per">51%</span>
              </div>
              <div class="progress-bar progress-bar-danger" style="width: <?php echo $zero[3]/$zero[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
                <span class="val"><?php if ($zero[3] != 0) echo $zero[3]?></span>
                <span class="per">51%</span>
              </div>
              <div class="progress-bar progress-bar-info" style="width: <?php echo $zero[2]/$zero[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="3">
                <span class="val"><?php if ($zero[2] != 0) echo $zero[2]?></span>
                <span class="per">49%</span>
              </div>
              <div class="progress-bar progress-bar-success" style="width: <?php echo $zero[1]/$zero[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="3">
                <span class="val"><?php if ($zero[1] != 0) echo $zero[1]?></span>
                <span class="per">49%</span>
              </div>
              <div class="progress-bar progress-bar-gray" style="width: <?php echo $zero[0]/$zero[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="3">
                <span class="val"><?php if ($zero[0] != 0) echo $zero[0]?></span>
                <span class="per">49%</span>
              </div>
            </td>
        </tr>

        <tr>
        <td class="level">★★1</td>
          <td class="progress" style="width: 100%" data-toggle="modal" data-target="#modal" level="1" type="6">
            <div class="progress-bar progress-bar-fc" style="width: <?php echo $one[4]/$one[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
              <span class="val"><?php if ($one[4] != 0) echo $one[4]?></span>
              <span class="per">51%</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: <?php echo $one[3]/$one[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
              <span class="val"><?php if ($one[3] != 0) echo $one[3]?></span>
              <span class="per">51%</span>
            </div>
            <div class="progress-bar progress-bar-info" style="width: <?php echo $one[2]/$one[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="3">
              <span class="val"><?php if ($one[2] != 0) echo $one[2]?></span>
              <span class="per">49%</span>
            </div>
            <div class="progress-bar progress-bar-success" style="width: <?php echo $one[1]/$one[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="3">
              <span class="val"><?php if ($one[1] != 0) echo $one[1]?></span>
              <span class="per">49%</span>
            </div>
            <div class="progress-bar progress-bar-gray" style="width: <?php echo $one[0]/$one[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="3">
              <span class="val"><?php if ($one[0] != 0) echo $one[0]?></span>
              <span class="per">49%</span>
            </div>
          </td>
        </tr>

        <tr>
        <td class="level">★★2</td>
          <td class="progress" style="width: 100%" data-toggle="modal" data-target="#modal" level="2" type="6">
            <div class="progress-bar progress-bar-fc" style="width: <?php echo $two[4]/$two[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
              <span class="val"><?php if ($two[4] != 0) echo $two[4]?></span>
              <span class="per">51%</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: <?php echo $two[3]/$two[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="2" type="4">
              <span class="val"><?php if ($two[3] != 0) echo $two[3]?></span>
              <span class="per">48%</span>
            </div>
            <div class="progress-bar progress-bar-info" style="width: <?php echo $two[2]/$two[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="2" type="3">
              <span class="val"><?php if ($two[2] != 0) echo $two[2]?></span>
              <span class="per">52%</span>
            </div>
            <div class="progress-bar progress-bar-success" style="width: <?php echo $two[1]/$two[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="2" type="4">
              <span class="val"><?php if ($two[1] != 0) echo $two[1]?></span>
              <span class="per">48%</span>
            </div>
            <div class="progress-bar progress-bar-gray" style="width: <?php echo $two[0]/$two[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="2" type="3">
              <span class="val"><?php if ($two[0] != 0) echo $two[0]?></span>
              <span class="per">52%</span>
            </div>
          </td>
        </tr>

        <tr>
          <td class="level">★★3</td>
          <td class="progress" style="width: 100%" data-toggle="modal" data-target="#modal" level="3" type="6">
            <div class="progress-bar progress-bar-fc" style="width: <?php echo $three[4]/$three[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
              <span class="val"><?php if ($three[4] != 0) echo $three[4]?></span>
              <span class="per">51%</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: <?php echo $three[3]/$three[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="3" type="4">
              <span class="val"><?php if ($three[3] != 0) echo $three[3]?></span>
              <span class="per">40%</span>
            </div>
            <div class="progress-bar progress-bar-info" style="width: <?php echo $three[2]/$three[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="3" type="3">
              <span class="val"><?php if ($three[2] != 0) echo $three[2]?></span>
              <span class="per">60%</span>
            </div>
            <div class="progress-bar progress-bar-success" style="width: <?php echo $three[1]/$three[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="3" type="4">
              <span class="val"><?php if ($three[1] != 0) echo $three[1]?></span>
              <span class="per">40%</span>
            </div>
            <div class="progress-bar progress-bar-gray" style="width: <?php echo $three[0]/$three[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="3" type="3">
              <span class="val"><?php if ($three[0] != 0) echo $three[0]?></span>
              <span class="per">60%</span>
            </div>
          </td>
        </tr>
        <tr>
          <td class="level">★★4</td>
          <td class="progress" style="width: 100%" data-toggle="modal" data-target="#modal" level="4" type="6">
            <div class="progress-bar progress-bar-fc" style="width: <?php echo $four[4]/$four[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
              <span class="val"><?php if ($four[4] != 0) echo $four[4]?></span>
              <span class="per">51%</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: <?php echo $four[3]/$four[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="4" type="4">
              <span class="val"><?php if ($four[3] != 0) echo $four[3]?></span>
              <span class="per">21%</span>
            </div>
            <div class="progress-bar progress-bar-info" style="width: <?php echo $four[2]/$four[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="4" type="3">
              <span class="val"><?php if ($four[2] != 0) echo $four[2]?></span>
              <span class="per">79%</span>
            </div>
            <div class="progress-bar progress-bar-success" style="width: <?php echo $four[1]/$four[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="4" type="4">
              <span class="val"><?php if ($four[1] != 0) echo $four[1]?></span>
              <span class="per">21%</span>
            </div>
            <div class="progress-bar progress-bar-gray" style="width: <?php echo $four[0]/$four[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="4" type="3">
              <span class="val"><?php if ($four[0] != 0) echo $four[0]?></span>
              <span class="per">79%</span>
            </div>
          </td>
        </tr>

        <tr>
          <td class="level">★★5</td>
          <td class="progress" style="width: 100%" data-toggle="modal" data-target="#modal" level="5" type="6">
            <div class="progress-bar progress-bar-fc" style="width: <?php echo $five[4]/$five[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
              <span class="val"><?php if ($five[4] != 0) echo $five[4]?></span>
              <span class="per">51%</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: <?php echo $five[3]/$five[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="4">
              <span class="val"><?php if ($five[3] != 0) echo $five[3]?></span>
              <span class="per">10%</span>
            </div>
            <div class="progress-bar progress-bar-info" style="width: <?php echo $five[2]/$five[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="3">
              <span class="val"><?php if ($five[2] != 0) echo $five[2]?></span>
              <span class="per">90%</span>
            </div>
            <div class="progress-bar progress-bar-success" style="width: <?php echo $five[1]/$five[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="4">
              <span class="val"><?php if ($five[1] != 0) echo $five[1]?></span>
              <span class="per">10%</span>
            </div>
            <div class="progress-bar progress-bar-gray" style="width: <?php echo $five[0]/$five[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="3">
              <span class="val"><?php if ($five[0] != 0) echo $five[0]?></span>
              <span class="per">90%</span>
            </div>
          </td>
        </tr>

        <tr>
          <td class="level">★★6</td>
          <td class="progress" style="width: 100%" data-toggle="modal" data-target="#modal" level="5" type="6">
            <div class="progress-bar progress-bar-fc" style="width: <?php echo $six[4]/$six[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
              <span class="val"><?php if ($six[4] != 0) echo $six[4]?></span>
              <span class="per">51%</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: <?php echo $six[3]/$six[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="4">
              <span class="val"><?php if ($six[3] != 0) echo $six[3]?></span>
              <span class="per">10%</span>
            </div>
            <div class="progress-bar progress-bar-info" style="width: <?php echo $six[2]/$six[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="3">
              <span class="val"><?php if ($six[2] != 0) echo $six[2]?></span>
              <span class="per">90%</span>
            </div>
            <div class="progress-bar progress-bar-success" style="width: <?php echo $six[1]/$six[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="4">
              <span class="val"><?php if ($six[1] != 0) echo $six[1]?></span>
              <span class="per">10%</span>
            </div>
            <div class="progress-bar progress-bar-gray" style="width: <?php echo $six[0]/$six[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="3">
              <span class="val"><?php if ($six[0] != 0) echo $six[0]?></span>
              <span class="per">90%</span>
            </div>
          </td>
        </tr>

        <tr>
          <td class="level">★★7</td>
          <td class="progress" style="width: 100%" data-toggle="modal" data-target="#modal" level="5" type="6">
            <div class="progress-bar progress-bar-fc" style="width: <?php echo $seven[4]/$seven[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="1" type="4">
              <span class="val"><?php if ($seven[6] != 0) echo $seven[6]?></span>
              <span class="per">51%</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: <?php echo $seven[3]/$seven[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="4">
              <span class="val"><?php if ($seven[6] != 0) echo $seven[6]?></span>
              <span class="per">10%</span>
            </div>
            <div class="progress-bar progress-bar-info" style="width: <?php echo $seven[2]/$seven[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="3">
              <span class="val"><?php if ($seven[6] != 0) echo $seven[6]?></span>
              <span class="per">90%</span>
            </div>
            <div class="progress-bar progress-bar-success" style="width: <?php echo $seven[1]/$seven[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="4">
              <span class="val"><?php if ($seven[6] != 0) echo $seven[6]?></span>
              <span class="per">10%</span>
            </div>
            <div class="progress-bar progress-bar-gray" style="width: <?php echo $seven[0]/$seven[5]*100 ?>%" data-toggle="modal" data-target="#modal" level="5" type="3">
              <span class="val"><?php if ($seven[6] != 0) echo $seven[6]?></span>
              <span class="per">90%</span>
            </div>
          </td>
        </tr>
      </tbody></table><br>
      <a href="./index.php">戻る</a>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
