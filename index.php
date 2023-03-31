<?php
$mark = '0';
if (isset($_GET['question_1'])) {      // если ответ передан
    if ($_GET['question_1'] == "a") {  // если ответ правильный
        $mark++;                       // добавляем балл
    }
}
if (isset($_GET['question_2'])) {      // если ответ передан
  if ($_GET['question_2'] == "b") {  // если ответ правильный
      $mark++;                       // добавляем балл
  }
}
if (isset($_GET['question_3'])) {      // если ответ передан
  if ($_GET['question_3'] == "с") {  // если ответ правильный
      $mark++;                       // добавляем балл
  }
}
if (isset($_GET['question_4'])) {      // если ответ передан
  if ($_GET['question_4'] ==  "a" &&
  $_GET['question_4'] == "c") {  // если ответ правильный
      $mark++;                       // добавляем балл
  } 
}
if (isset($_GET['question_5'])) {      // если ответ передан
  if ($_GET['question_5'] == "a") {  // если ответ правильный
      $mark++;                       // добавляем балл
  } else if ($_GET['question_5'] == "b") {  // если ответ правильный
      $mark++;    
  } else if ($_GET['question_5'] == "c") {  // если ответ правильный
      $mark++;    
    }
}
if (isset($_GET['question_6'])) {      // если ответ передан
  if ($_GET['question_6'] == 'Безумие') {  // если ответ правильный
      $mark++;                     // добавляем балл
  }
}
if (isset($_GET['question_7'])) {      // если ответ передан
  if ($_GET['question_7'] == "a") {  // если ответ правильный
      $mark++;                       // добавляем балл
  } else if ($_GET['question_7'] == "b") {  // если ответ правильный
    $mark++;                       // добавляем балл
  } else if ($_GET['question_7'] == "c") {  // если ответ правильный
    $mark++;                       // добавляем балл
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/CSS/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
  <div class="wrapper">
    <p>Какой оператор используется в PHP для установки условия?</p>
    <div class="tester">
      <form action="">
<p>
  <input type="radio" id="question_1a" name="question_1" value="a" />
  <label for="question_1a" class="text-succes">a) if...else...</label>
</p>
<p>
  <input type="radio" id="question_1b" name="question_1" value="b" />
  <label for="question_1b">b) for</label>
</p>
<p>
  <input type="radio" id="question_1c" name="question_1" value="c" />
  <label for="question_1c">c) while</label>
</p>
</div>
<p>Сколько ног у сороконожки?</p>
    <div class="tester">
<p>
  <input type="radio" id="question_2a" name="question_2" value="a" />
  <label for="question_2a">a) 40</label>
</p>
<p>
  <input type="radio" id="question_2b" name="question_2" value="b" />
  <label for="question_2b" class="text-succes">b) от 30 до 382</label>
</p>
<p>
  <input type="radio" id="question_2c" name="question_2" value="c" />
  <label for="question_2c">c) 400</label>
</p>
</div>
<p>Сколько часов я сегодня поспал?</p>
    <div class="tester">
<p>
  <input type="radio" id="question_3a" name="question_3" value="a" />
  <label for="question_3a">a) 12</label>
</p>
<p>
  <input type="radio" id="question_3b" name="question_3" value="b" />
  <label for="question_3b">b) 6</label>
</p>
<p>
  <input type="radio" id="question_3c" name="question_3" value="c" />
  <label for="question_3c" class="text-succes">c) Я не спал, писал этот тест</label>
</p>
</div>
<p>Какой мой любимый жанр музыки?</p>
    <div class="tester">
<p>
  <input type="checkbox" id="question_4a" name="question_4" value="a" />
  <label for="question_4a" class="text-succes">a) Рок</label>
</p>
<p>
  <input type="checkbox" id="question_4b" name="question_4" value="b" />
  <label for="question_4b" >b) Рэп</label>
</p>
<p>
  <input type="checkbox" id="question_4c" name="question_4" value="c" />
  <label for="question_4c" class="text-succes">c) Метал</label>
</p>
</div>
<p>Зачем я хожу в ITSCHOOL?</p>
    <div class="tester">
<p>
  <input type="checkbox" id="question_5a" name="question_5" value="a" />
  <label for="question_5a" class="text-succes">a) Поваляться в подвесном кресле</label>
</p>
<p>
  <input type="checkbox" id="question_5b" name="question_5" value="b" />
  <label for="question_5b" class="text-succes">b) Повыбирать обои в Visual Studio Code</label>
</p>
<p>
  <input type="checkbox" id="question_5c" name="question_5" value="c" />
  <label for="question_5c" class="text-succes">c) Развиваться</label>
</p>
</div>
<p>Начните фразу</p>
    <div class="tester">
<p>
  <input type="textarea" id="question_6a" name="question_6"   />
  <label for="question_6a">— это точное повторение одного и того же действия. Раз за разом, в надежде на изменение.</label>
</p>
</div>
<p>У рыбы бывает жажда?</p>
    <div class="tester">
<p>
  <select type="form-select" id="question_7a" name="question_7" style="width: max-content;">
    <option value="a">Да, однозначно</option>
    <option value="b">Нет, каким образом?</option>
    <option value="c">Тупой вопрос</option>
</select>
</p>
</div>
<div class="mb-3">
  Проверить кол-во баллов:
<button class="btn btn-primary ">Эта кнопка сработает с шансом 0.0001%</button>
<div>
  Кол-во баллов: 
<?php print_r($mark) ?> / 7 ; <?php print_r($mark * '100' / '7' )  ?>%
</div>
<div>
</div>
</div>
</div>
</form>
</body>
</html>