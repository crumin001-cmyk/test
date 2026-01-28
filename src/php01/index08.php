<?php
// $people = array(
//   'person1' => 'Taro',
//   'person2'  => 'Jiro',
//   'person3'  => 'Saburo'
// );

// var_dump($people);
?>

<?php
// $peoplepeople = [
//   'person1' => 'taro',
//   'person2' => 'jiro',
// ];
// echo $people['person1'];
?>
<?php
// $people = [
//   [
//     "last_name" => "山田",
//     "first_name" => "太郎",
//     "age" => 29,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "鈴木",
//     "first_name" => "次郎",
//     "age" => 25,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "佐藤",
//     "first_name" => "花子",
//     "age" => 20,
//     "gender" => "女性"
//   ]
// ];
// echo $people[0]["last_name"];
?>
<?php
// $people = array(
//   'person1' => 'Taro',
//   'person2'  => 'Jiro',
//   'person3'  => 'Saburo'
// );

// foreach ($people as $person => $name) {
//   print $person . "は" . $name . "です" . '<br />';
// }
?>
<?php
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}

