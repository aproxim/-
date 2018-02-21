<h1>Animal abuse</h1>
<?php

$continents = array("Africa" =>  array("Okapia", "Dorylus helvolus", "Ixodes dawesi"),
"Antarctica" => array("Sennertia antarctica", "Aptenodytes forsteri", "Tullbergia mediantarctica"),
"Australia" => array("Prototroctes oxyrhynchus", "Huberia", "Deinacrida"),
"South_America" =>array("Chrysophora chrysochlora", "Saguinus imperator", "Hydrochoerus"),
"North_America" => array("Pachybrachis calcaratus", "Gnypeta ashei", "Bolitogyrus buphthalmus"),
"Eurasia" => array("Saiga tatarica", "Endromidae", "Pygeretmus zhitkovi"));

$double_name = [];
$continent = [];
$first_world = [];
$second_word = [];
/*echo '<h1>Массив животных через запятую</h1>';
foreach ($continents as $key => $animals) {
    $continent[] = $key;
    echo "<h2>$key</h2>";
    echo $animals[0] . ', ' . $animals[1];
    foreach ($animals as $two) {
        $rows_two = explode(" ", $two);
        if (count($rows_two) == 2) {
            $double_name[] = $two;
            $first_world[] = $rows_two[0];
            $second_word[] = $rows_two[1];
		}
    }
}*/
echo '<h1>Массив животных по континентам</h1>';
foreach ($continents as $key => $animals) {
    $continent[] = $key;
    echo ("<h2>$key</h2>".
		"<ul>");
    foreach($animals as $animal)
	{
		echo "<li>$animal</li>";
	}
	echo "</ul>";
    foreach ($animals as $two) {
        $rows_two = explode(" ", $two);
        if (count($rows_two) == 2) {
            $double_name[] = $two;
            $first_world[] = $rows_two[0];
            $second_word[] = $rows_two[1];
		}
    }

}
echo '<hr>';
echo '<h1>Массив из двух слов</h1>';
foreach ($double_name as $item) {
    echo "$item<br>";
}
echo '<hr>';
shuffle($second_word);
echo '<h1>Выдуманные животные</h1>';
foreach ($second_word as $last) {
    $title = array_shift($continent);
    $first = array_shift($first_world);
    echo "<h2>$title</h2>";
    echo $first . ' ' . $last . '<br>';
}

/*echo $key ."Africa"; 
print_r( $continents[Africa] );*/


/*foreach($continents as $key => $continent)
{
	// Выводим название континентов:
	echo("<h2>$key</h2>" .
		"<ul>");
	//Перечисляем животных в каждом семействе:
	foreach($continent as $animals)
	{
		echo "<li>$animals</li>";
	}
	//Завершить список:
	echo "</ul>";
}
*/
/*//Создаем вспомогательный массив, куда мы сложим животных из двух слов
$two_words_animals = [];
// Кладем в $tw_words_animals животных из двух слов
foreach($continents as $key => $continent)
{
	foreach($continent as $animals)
	{ $count = substr_count($animals, ' ');
        if ($count === 1) {
            array_push($two_words_animals, $animals);
        }
    }
}
print_r($two_words_animals);
// Создаем вспомогательный массив, куда мы сложим выдуманных животных
$fantasy_animals = [];
while (count($two_words_animals) !== 0) {
    // Если осталось одно животное, то сразу отправляем его в $fantasy_animals
    if (count($two_words_animals) === 1) {
        array_push($fantasy_animals, $two_words_animals[0]);
        break;
    } else {
        // В переменные записываем первый элемент массива и рандомный элемент массива, не равный первому
        $first = 0;
        $rand = rand(1, count($two_words_animals) - 1);
        $first_elem = $two_words_animals[$first];
        $rand_elem = $two_words_animals[$rand];
        // Перемешиваем (первое слово $first + второе слово $second; первое слово $second + второе слово $first)
        $fantasy_first = substr($first_elem, 0, strpos($first_elem, ' ')) . ' '
            . substr($rand_elem, strpos($rand_elem, ' '));
        $fantasy_second = substr($rand_elem, 0, strpos($rand_elem, ' ')) . ' '
            . substr($first_elem, strpos($first_elem, ' '));
        // В $fantasy_animals складываем получившихся животных, из $two_words_animals удаляем использованные элементы
        array_push($fantasy_animals, $fantasy_first, $fantasy_second);
        unset($two_words_animals[$first], $two_words_animals[$rand]);
        // Возвращаем ключи по умолчанию
        $two_words_animals = array_values($two_words_animals);
    }
}
print_r($fantasy_animals);

?>*/


