$url = "https://www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita"; // replace with your JSON URL
$json_data = file_get_contents($url);
$data = json_decode($json_data, true);

foreach ($data["drinks"] as $drink) {
    $drink_id = $drink["idDrink"];
    $drink_name = $drink["strDrink"];
    echo "Drink ID: $drink_id, Drink Name: $drink_name\n";
}
