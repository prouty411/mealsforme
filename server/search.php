<?php
include_once 'mysqliconnect.php';
$name = $_POST['name'];
$ingredientIteratorLimit = count($result);
$recipeIteratorLimit = count($recipeId);
$recipeId = [];
$recipeResults = [];



//loop through $result and get the ingredients id by matching names
for($idIndex=0;$idIndex<count($result);$idIndex++){
    $ingredientQuery = "SELECT `ingredient_ID` FROM `ingredients` WHERE `ingredient_name`=$name[$idIndex]";
    $result = mysqli_query($conn,$ingredientQuery);
}
//loop through ingredients and return recipe id's
for($ingredientIndex=0;$ingredientIndex<count($result);$ingredientIteratorLimit++){
    $recipeIdQuery = "SELECT `recipe_id` FROM `recipe_ingredients` WHERE `ingredient_id`=$result[$ingredientIndex]";
    $result = mysqli_query($conn,$recipeIdQuery);
    $recipeId[$result][];
}
//loop through the recipes by their ids and grab the info
for($recipeIndex=0;$recipeIndex<$recipeIteratorLimit;$recipeIndex++){
    $recipeQuery = "SELECT * FROM `recipes` WHERE `recipe_id`=$recipeId[$recipeIndex]";
    $result = mmysqli_query($conn,$recipeIdQuery);
    $recipeResults[$result][];
}



?>