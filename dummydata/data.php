
<?php
require_once('mysqlconnect.php');
//turn this into a function to parse the information and insert into the datatables.
$json = '[{
	"id": 986153,
	"title": "Korean Fried Chicken",
	"image": "https://spoonacular.com/recipeImages/986153-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 0,
	"likes": 209
}, {
	"id": 1013083,
	"title": "Perfect Instant Pot Chicken Breasts (Fresh or Frozen!)",
	"image": "https://spoonacular.com/recipeImages/1013083-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 0,
	"likes": 25
}, {
	"id": 1013523,
	"title": "4 Ingredient Grilled Pepper Chicken",
	"image": "https://spoonacular.com/recipeImages/1013523-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 0,
	"likes": 12
}, {
	"id": 1009580,
	"title": "How to Make Shredded Chicken in the Instant Pot",
	"image": "https://spoonacular.com/recipeImages/1009580-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 1,
	"missedIngredientCount": 0,
	"likes": 1
}, {
	"id": 492233,
	"title": "Santa Fe Baked Chicken",
	"image": "https://spoonacular.com/recipeImages/492233-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 107520
}, {
	"id": 989736,
	"title": "Oven Roasted Chicken Legs",
	"image": "https://spoonacular.com/recipeImages/989736-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 3682
}, {
	"id": 986172,
	"title": "Fried Chicken",
	"image": "https://spoonacular.com/recipeImages/986172-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 499
}, {
	"id": 974461,
	"title": "Brown Sugar Italian Chicken",
	"image": "https://spoonacular.com/recipeImages/974461-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 323
}, {
	"id": 944490,
	"title": "Slow Cooker Rotisserie Chicken",
	"image": "https://spoonacular.com/recipeImages/944490-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 246
}, {
	"id": 956194,
	"title": "Bacon Brown Sugar Chicken Bites",
	"image": "https://spoonacular.com/recipeImages/956194-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 215
}, {
	"id": 969423,
	"title": "Beer Braised Chicken",
	"image": "https://spoonacular.com/recipeImages/969423-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 211
}, {
	"id": 964344,
	"title": "Southern Fried Chicken",
	"image": "https://spoonacular.com/recipeImages/964344-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 110
}, {
	"id": 969668,
	"title": "How to Cook Frozen Chicken Breasts in the Instant Pot",
	"image": "https://spoonacular.com/recipeImages/969668-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 109
}, {
	"id": 988787,
	"title": "Crispy Baked Salt and Pepper Chicken Wings",
	"image": "https://spoonacular.com/recipeImages/988787-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 108
}, {
	"id": 963814,
	"title": "The Best Baked Chicken Breast",
	"image": "https://spoonacular.com/recipeImages/963814-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 77
}, {
	"id": 1009908,
	"title": "Instant Pot Chicken Breast",
	"image": "https://spoonacular.com/recipeImages/1009908-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 64
}, {
	"id": 991497,
	"title": "The Best Grilled Chicken Breast",
	"image": "https://spoonacular.com/recipeImages/991497-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 38
}, {
	"id": 1004844,
	"title": "Crispy Air Fryer Chicken Tenders",
	"image": "https://spoonacular.com/recipeImages/1004844-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 13
}, {
	"id": 981808,
	"title": "Instant Pot Orange Chicken",
	"image": "https://spoonacular.com/recipeImages/981808-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 5
}, {
	"id": 937023,
	"title": "Bacon Brown Sugar Chicken Tenders",
	"image": "https://spoonacular.com/recipeImages/937023-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 1
}, {
	"id": 1026907,
	"title": "Chicken Bone Broth",
	"image": "https://spoonacular.com/recipeImages/1026907-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 1
}, {
	"id": 928338,
	"title": "Crispy Baked Chicken Wings",
	"image": "https://spoonacular.com/recipeImages/928338-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 1,
	"likes": 0
}, {
	"id": 595164,
	"title": "Grilled Basil Garlic Chicken Breasts",
	"image": "https://spoonacular.com/recipeImages/595164-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 25144
}, {
	"id": 594973,
	"title": "Bourbon Spice Barbecue Chicken Wings",
	"image": "https://spoonacular.com/recipeImages/594973-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 9106
}, {
	"id": 524902,
	"title": "Easy Slow Cooker Chicken and Gravy",
	"image": "https://spoonacular.com/recipeImages/524902-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 6293
}, {
	"id": 200039,
	"title": "Lexington Style Grilled Chicken",
	"image": "https://spoonacular.com/recipeImages/200039-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 1341
}, {
	"id": 591363,
	"title": "5 Ingredient Soy Dijon Chicken",
	"image": "https://spoonacular.com/recipeImages/591363-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 900
}, {
	"id": 525301,
	"title": "Easy 3 Ingredient Slow Cooker Chicken",
	"image": "https://spoonacular.com/recipeImages/525301-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 724
}, {
	"id": 525212,
	"title": "Easy Crock Pot Chicken and Stuffing",
	"image": "https://spoonacular.com/recipeImages/525212-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 436
}, {
	"id": 721493,
	"title": "Ranch Fried Chicken Tenders",
	"image": "https://spoonacular.com/recipeImages/721493-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 361
}, {
	"id": 198651,
	"title": "The Best Juicy Grilled Boneless Skinless Chicken Breasts",
	"image": "https://spoonacular.com/recipeImages/198651-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 273
}, {
	"id": 525770,
	"title": "Crock Pot Balsamic Chicken Thighs",
	"image": "https://spoonacular.com/recipeImages/525770-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 241
}, {
	"id": 590735,
	"title": "2-Ingredient Slow Cooker Salsa Chicken",
	"image": "https://spoonacular.com/recipeImages/590735-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 177
}, {
	"id": 526994,
	"title": "Easy Balsamic Chicken Skewers + A BIG Giveaway",
	"image": "https://spoonacular.com/recipeImages/526994-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 136
}, {
	"id": 983256,
	"title": "Chicken Adobo",
	"image": "https://spoonacular.com/recipeImages/983256-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 100
}, {
	"id": 528333,
	"title": "Copycat Chick-fil-A Chicken Nuggets",
	"image": "https://spoonacular.com/recipeImages/528333-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 91
}, {
	"id": 201430,
	"title": "French in a Flash: Tapenade Baked Chicken",
	"image": "https://spoonacular.com/recipeImages/201430-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 79
}, {
	"id": 527972,
	"title": "Bacon Stuffed Chicken #CookingWithFarmerJohn",
	"image": "https://spoonacular.com/recipeImages/527972-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 67
}, {
	"id": 524312,
	"title": "savory squash puree",
	"image": "https://spoonacular.com/recipeImages/524312-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 46
}, {
	"id": 201283,
	"title": "Star Anise Chicken Thighs with Meyer Lemon",
	"image": "https://spoonacular.com/recipeImages/201283-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 44
}, {
	"id": 525758,
	"title": "Nigella Lawson’s Chicken Teriyaki",
	"image": "https://spoonacular.com/recipeImages/525758-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 40
}, {
	"id": 852462,
	"title": "Salsa Chicken",
	"image": "https://spoonacular.com/recipeImages/852462-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 27
}, {
	"id": 527892,
	"title": "Gluten Free Baked Chicken Tenders",
	"image": "https://spoonacular.com/recipeImages/527892-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 19
}, {
	"id": 136641,
	"title": "Kentucky Fried Chicken",
	"image": "https://spoonacular.com/recipeImages/136641-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 16
}, {
	"id": 527898,
	"title": "Pretzel-Crusted Chicken Nuggets",
	"image": "https://spoonacular.com/recipeImages/527898-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 14
}, {
	"id": 136336,
	"title": "Melissa\'s Lemon Pepper Chicken",
	"image": "https://spoonacular.com/recipeImages/136336-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 14
}, {
	"id": 136472,
	"title": "Diet Cola Chicken",
	"image": "https://spoonacular.com/recipeImages/136472-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 14
}, {
	"id": 791491,
	"title": "Grilled Chicken Wings with Tamarind Chipotle Barbecue Sauce",
	"image": "https://spoonacular.com/recipeImages/791491-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 12
}, {
	"id": 136784,
	"title": "Ranch Chicken",
	"image": "https://spoonacular.com/recipeImages/136784-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 12
}, {
	"id": 527350,
	"title": "Slow Cooker Buffalo Chicken Sandwiches",
	"image": "https://spoonacular.com/recipeImages/527350-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 11
}, {
	"id": 136605,
	"title": "Beer-Can Chicken",
	"image": "https://spoonacular.com/recipeImages/136605-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 11
}, {
	"id": 398915,
	"title": "Pepper Jack Stuffed Chicken",
	"image": "https://spoonacular.com/recipeImages/398915-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 11
}, {
	"id": 983395,
	"title": "Beer Can Chicken",
	"image": "https://spoonacular.com/recipeImages/983395-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 10
}, {
	"id": 198331,
	"title": "Roast Chicken with Thyme",
	"image": "https://spoonacular.com/recipeImages/198331-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 10
}, {
	"id": 136716,
	"title": "Bacon-Wrapped Rosemary Chicken",
	"image": "https://spoonacular.com/recipeImages/136716-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 9
}, {
	"id": 136733,
	"title": "Easy Chicken-N-Pastry",
	"image": "https://spoonacular.com/recipeImages/136733-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 9
}, {
	"id": 857216,
	"title": "Brown Butter Chicken with Sage and Prosciutto",
	"image": "https://spoonacular.com/recipeImages/857216-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 8
}, {
	"id": 136586,
	"title": "Crock Pot Roasted Chicken With Rosemary and Garlic",
	"image": "https://spoonacular.com/recipeImages/136586-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 7
}, {
	"id": 527878,
	"title": "Baked Chicken Tenders",
	"image": "https://spoonacular.com/recipeImages/527878-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 6
}, {
	"id": 136730,
	"title": "Orange Soda Chicken",
	"image": "https://spoonacular.com/recipeImages/136730-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 6
}, {
	"id": 527800,
	"title": "Panko Fried Chicken Tenders",
	"image": "https://spoonacular.com/recipeImages/527800-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 5
}, {
	"id": 527804,
	"title": "Lemon and Herb Roast Chicken",
	"image": "https://spoonacular.com/recipeImages/527804-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 3
}, {
	"id": 332877,
	"title": "Dry Rubbed BBQ Chicken",
	"image": "https://spoonacular.com/recipeImages/332877-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 3
}, {
	"id": 136322,
	"title": "Golden Chicken Nuggets",
	"image": "https://spoonacular.com/recipeImages/136322-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 3
}, {
	"id": 136405,
	"title": "Lemon-Grilled Chicken Breasts",
	"image": "https://spoonacular.com/recipeImages/136405-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 2
}, {
	"id": 136736,
	"title": "Oven Fried Sesame Chicken",
	"image": "https://spoonacular.com/recipeImages/136736-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 2
}, {
	"id": 592823,
	"title": "Care for a Condiment",
	"image": "https://spoonacular.com/recipeImages/592823-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 1
}, {
	"id": 527797,
	"title": "{Video} How to Poach Chicken Breasts",
	"image": "https://spoonacular.com/recipeImages/527797-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 1
}, {
	"id": 659316,
	"title": "Saucy Shredded Barbecue Chicken",
	"image": "https://spoonacular.com/recipeImages/659316-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 1
}, {
	"id": 136398,
	"title": "Asian Chicken",
	"image": "https://spoonacular.com/recipeImages/136398-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 1
}, {
	"id": 136441,
	"title": "Maryland Fried Chicken with Cream Gravy",
	"image": "https://spoonacular.com/recipeImages/136441-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 1
}, {
	"id": 136594,
	"title": "Salsa Chicken",
	"image": "https://spoonacular.com/recipeImages/136594-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 1
}, {
	"id": 136795,
	"title": "Shoyu Chicken",
	"image": "https://spoonacular.com/recipeImages/136795-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 1
}, {
	"id": 393884,
	"title": "Maple Cranberry Chicken",
	"image": "https://spoonacular.com/recipeImages/393884-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 394088,
	"title": "Diploma Sandwiches",
	"image": "https://spoonacular.com/recipeImages/394088-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 198313,
	"title": "Roast Chicken with Pan Sauce",
	"image": "https://spoonacular.com/recipeImages/198313-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 919433,
	"title": "The Juiciest Grilled Chicken Breast",
	"image": "https://spoonacular.com/recipeImages/919433-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 854019,
	"title": "Instant Pot Hawaiian Chicken",
	"image": "https://spoonacular.com/recipeImages/854019-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 198825,
	"title": "Best Brined Roast Chicken",
	"image": "https://spoonacular.com/recipeImages/198825-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 264571,
	"title": "Crispy Salsa Chicken",
	"image": "https://spoonacular.com/recipeImages/264571-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 133849,
	"title": "Chicken Salad Crescent Rolls",
	"image": "https://spoonacular.com/recipeImages/133849-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 265037,
	"title": "Saucy Parmesan Chicken",
	"image": "https://spoonacular.com/recipeImages/265037-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 265707,
	"title": "Greek-Style Lemon Roast Chicken",
	"image": "https://spoonacular.com/recipeImages/265707-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 921481,
	"title": "Italian BBQ Grilled Chicken",
	"image": "https://spoonacular.com/recipeImages/921481-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 200884,
	"title": "Herb-Grilled Chicken",
	"image": "https://spoonacular.com/recipeImages/200884-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 135800,
	"title": "Chicken Alouette",
	"image": "https://spoonacular.com/recipeImages/135800-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 266896,
	"title": "Pineapple Chicken Wings",
	"image": "https://spoonacular.com/recipeImages/266896-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 267273,
	"title": "Crispy Baked Pesto Chicken",
	"image": "https://spoonacular.com/recipeImages/267273-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136337,
	"title": "Parmesan Chicken",
	"image": "https://spoonacular.com/recipeImages/136337-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136393,
	"title": "Mom\'s Fried Chicken",
	"image": "https://spoonacular.com/recipeImages/136393-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136444,
	"title": "Crock Pot Chicken Taco Meat",
	"image": "https://spoonacular.com/recipeImages/136444-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136471,
	"title": "Baked Cracker-Crusted Chicken Fingers",
	"image": "https://spoonacular.com/recipeImages/136471-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136496,
	"title": "My Favorite Grilled Lemon Chicken",
	"image": "https://spoonacular.com/recipeImages/136496-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136527,
	"title": "Salsa Seasoning Chicken",
	"image": "https://spoonacular.com/recipeImages/136527-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136548,
	"title": "Unknownchef86\'s Lemon-Pepper Chicken (Sbd Phase One)",
	"image": "https://spoonacular.com/recipeImages/136548-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136584,
	"title": "Butterflied Grilled Chicken with Curry and Cumin",
	"image": "https://spoonacular.com/recipeImages/136584-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136672,
	"title": "Balsamic Chicken",
	"image": "https://spoonacular.com/recipeImages/136672-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136770,
	"title": "Salsa Chicken",
	"image": "https://spoonacular.com/recipeImages/136770-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136799,
	"title": "Easy Lemon Basil Chicken",
	"image": "https://spoonacular.com/recipeImages/136799-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 136805,
	"title": "Caribbean Jerk Chicken",
	"image": "https://spoonacular.com/recipeImages/136805-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 1,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 577077,
	"title": "College Student Meals – Bacon Cheeseburger Meatloaf Week",
	"image": "https://spoonacular.com/recipeImages/577077-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 6,
	"missedIngredientCount": 19,
	"likes": 22
}, {
	"id": 624715,
	"title": "Cocido Boyacense (Boyacá Region Stew)",
	"image": "https://spoonacular.com/recipeImages/624715-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 5,
	"missedIngredientCount": 7,
	"likes": 82
}, {
	"id": 389673,
	"title": "Chicken Cacciatore Subs",
	"image": "https://spoonacular.com/recipeImages/389673-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 5,
	"missedIngredientCount": 7,
	"likes": 1
}, {
	"id": 34296,
	"title": "Kentucky Burgoo",
	"image": "https://spoonacular.com/recipeImages/34296-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 5,
	"missedIngredientCount": 9,
	"likes": 0
}, {
	"id": 576516,
	"title": "College Student Meals – Easy Minestrone and Spinach Quesadillas Week",
	"image": "https://spoonacular.com/recipeImages/576516-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 5,
	"missedIngredientCount": 18,
	"likes": 3
}, {
	"id": 478423,
	"title": "Ooops, sorry, but nothing lasts forever",
	"image": "https://spoonacular.com/recipeImages/478423-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 5,
	"missedIngredientCount": 21,
	"likes": 5
}, {
	"id": 507262,
	"title": "Classic Cheeseburger",
	"image": "https://spoonacular.com/recipeImages/507262-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 148
}, {
	"id": 98225,
	"title": "Ultimate Bacon Cheeseburger",
	"image": "https://spoonacular.com/recipeImages/98225-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 48
}, {
	"id": 801741,
	"title": "Jalapeno & Blue Cheese Burger",
	"image": "https://spoonacular.com/recipeImages/801741-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 39
}, {
	"id": 544739,
	"title": "BBQ Bacon-Habanero Burger",
	"image": "https://spoonacular.com/recipeImages/544739-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 27
}, {
	"id": 83066,
	"title": "Blt Burger",
	"image": "https://spoonacular.com/recipeImages/83066-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 24
}, {
	"id": 99287,
	"title": "Lemon Pepper Bacon Chicken Sandwich - Pioneer Woman",
	"image": "https://spoonacular.com/recipeImages/99287-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 16
}, {
	"id": 252798,
	"title": "“San Francisco” Bacon Guacamole Cheeseburger",
	"image": "https://spoonacular.com/recipeImages/252798-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 14
}, {
	"id": 80150,
	"title": "Bacon Cheeseburger",
	"image": "https://spoonacular.com/recipeImages/80150-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 7
}, {
	"id": 288154,
	"title": "Stuffed Bacon Cheeseburgers",
	"image": "https://spoonacular.com/recipeImages/288154-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 2
}, {
	"id": 268703,
	"title": "Cheese-Stuffed Burgers with Bacon",
	"image": "https://spoonacular.com/recipeImages/268703-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 272075,
	"title": "Speedy Triple-Decker Club",
	"image": "https://spoonacular.com/recipeImages/272075-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 280873,
	"title": "Ultimate Caesar Burgers",
	"image": "https://spoonacular.com/recipeImages/280873-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 98461,
	"title": "Chicken Caesar BLT Sandwich",
	"image": "https://spoonacular.com/recipeImages/98461-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 160188,
	"title": "Grilled Chicken Club Sandwiches",
	"image": "https://spoonacular.com/recipeImages/160188-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 163821,
	"title": "Chicken BLT Sandwiches",
	"image": "https://spoonacular.com/recipeImages/163821-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 165942,
	"title": "Cordon Bleu Sandwiches",
	"image": "https://spoonacular.com/recipeImages/165942-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 170824,
	"title": "Chicken Club Sandwiches",
	"image": "https://spoonacular.com/recipeImages/170824-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 2,
	"likes": 0
}, {
	"id": 530736,
	"title": "Cheddar Bacon Onion Sliders",
	"image": "https://spoonacular.com/recipeImages/530736-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 3070
}, {
	"id": 587120,
	"title": "Onion Ring Topped BBQ Bacon Burgers",
	"image": "https://spoonacular.com/recipeImages/587120-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 1168
}, {
	"id": 611371,
	"title": "Cheddar Bacon Ranch Sliders",
	"image": "https://spoonacular.com/recipeImages/611371-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 209
}, {
	"id": 196457,
	"title": "Hot and Smoky Cheeseburgers with Bacon and Pickled Cherry Pepper Relish",
	"image": "https://spoonacular.com/recipeImages/196457-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 126
}, {
	"id": 179173,
	"title": "Grilled Chicken BLT Sandwiches",
	"image": "https://spoonacular.com/recipeImages/179173-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 91
}, {
	"id": 797352,
	"title": "Chicken Caesar Wraps",
	"image": "https://spoonacular.com/recipeImages/797352-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 77
}, {
	"id": 672038,
	"title": "Ultimate BBQ Chicken Burger",
	"image": "https://spoonacular.com/recipeImages/672038-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 38
}, {
	"id": 134880,
	"title": "Cipaille Pot Pie",
	"image": "https://spoonacular.com/recipeImages/134880-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 24
}, {
	"id": 42727,
	"title": "Zippy Beef & Cheese Hoagie",
	"image": "https://spoonacular.com/recipeImages/42727-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 9
}, {
	"id": 596464,
	"title": "chicken BLT sandwiches",
	"image": "https://spoonacular.com/recipeImages/596464-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 4
}, {
	"id": 307148,
	"title": "CBLTS",
	"image": "https://spoonacular.com/recipeImages/307148-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 3
}, {
	"id": 627173,
	"title": "Barbecue Grilled Chicken Sandwich",
	"image": "https://spoonacular.com/recipeImages/627173-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 3
}, {
	"id": 267732,
	"title": "Inside-Out Bacon Cheeseburgers",
	"image": "https://spoonacular.com/recipeImages/267732-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 0
}, {
	"id": 268543,
	"title": "Famous Sub Shop Club",
	"image": "https://spoonacular.com/recipeImages/268543-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 0
}, {
	"id": 275798,
	"title": "All-American BBQ-Bacon Cheeseburgers",
	"image": "https://spoonacular.com/recipeImages/275798-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 0
}, {
	"id": 276408,
	"title": "Crispy Chicken Club Sandwiches",
	"image": "https://spoonacular.com/recipeImages/276408-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 0
}, {
	"id": 567361,
	"title": "Guacamole Bacon Cheeseburger",
	"image": "https://spoonacular.com/recipeImages/567361-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 0
}, {
	"id": 387552,
	"title": "Roast Beef BLT",
	"image": "https://spoonacular.com/recipeImages/387552-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 0
}, {
	"id": 402202,
	"title": "Grilled Pineapple Chicken Sandwiches",
	"image": "https://spoonacular.com/recipeImages/402202-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 0
}, {
	"id": 436906,
	"title": "Chicken Salad Clubs",
	"image": "https://spoonacular.com/recipeImages/436906-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 3,
	"likes": 0
}, {
	"id": 185034,
	"title": "Aloha BBQ Sliders | burger",
	"image": "https://spoonacular.com/recipeImages/185034-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 6161
}, {
	"id": 248499,
	"title": "Strawberry BBQ Chicken Club Sandwich with Bacon, Avocado and Goat Cheese",
	"image": "https://spoonacular.com/recipeImages/248499-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 2052
}, {
	"id": 553804,
	"title": "Royal Ultimate Burger",
	"image": "https://spoonacular.com/recipeImages/553804-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 546
}, {
	"id": 226141,
	"title": "Tamales Tolimenses (Tolima Region Tamales)",
	"image": "https://spoonacular.com/recipeImages/226141-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 502
}, {
	"id": 515676,
	"title": "Bacon Chipotle Stuffed Cheeseburger",
	"image": "https://spoonacular.com/recipeImages/515676-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 439
}, {
	"id": 674730,
	"title": "Perfect Party Appetizer: How to Make Mini Cheeseburgers",
	"image": "https://spoonacular.com/recipeImages/674730-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 235
}, {
	"id": 212736,
	"title": "BBQ chicken burgers",
	"image": "https://spoonacular.com/recipeImages/212736-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 167
}, {
	"id": 925119,
	"title": "Bacon, Onion and Cheese Stuffed Burger",
	"image": "https://spoonacular.com/recipeImages/925119-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 23
}, {
	"id": 301277,
	"title": "Bacon, Onion and Cheese Stuffed Burger",
	"image": "https://spoonacular.com/recipeImages/301277-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 14
}, {
	"id": 98562,
	"title": "Southwestern Bacon Burgers",
	"image": "https://spoonacular.com/recipeImages/98562-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 13
}, {
	"id": 606627,
	"title": "All-American Grilled BBQ-Bacon Cheeseburgers",
	"image": "https://spoonacular.com/recipeImages/606627-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 4
}, {
	"id": 82857,
	"title": "California Burgers With Spicy Oven Fries",
	"image": "https://spoonacular.com/recipeImages/82857-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 2
}, {
	"id": 83693,
	"title": "Blue Cheese Bacon Burgers",
	"image": "https://spoonacular.com/recipeImages/83693-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 1
}, {
	"id": 98490,
	"title": "Cobb Sandwich",
	"image": "https://spoonacular.com/recipeImages/98490-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 1
}, {
	"id": 265094,
	"title": "Sizzlin BBQ Bacon Cheeseburgers",
	"image": "https://spoonacular.com/recipeImages/265094-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 265089,
	"title": "Ranch-Bacon Cheeseburgers",
	"image": "https://spoonacular.com/recipeImages/265089-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 269350,
	"title": "Chicken & Cheese Sub Sandwiches",
	"image": "https://spoonacular.com/recipeImages/269350-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 36366,
	"title": "Chorizo, Beans And Rice",
	"image": "https://spoonacular.com/recipeImages/36366-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 94378,
	"title": "Hungarian Cabbage Rolls",
	"image": "https://spoonacular.com/recipeImages/94378-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 98510,
	"title": "Open-Faced Chicken Club Sandwiches",
	"image": "https://spoonacular.com/recipeImages/98510-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 98681,
	"title": "Grilled Bacon Burgers",
	"image": "https://spoonacular.com/recipeImages/98681-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 99368,
	"title": "Smoky Bacon Burgers",
	"image": "https://spoonacular.com/recipeImages/99368-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 909964,
	"title": "Bacon Cheeseburger Sliders",
	"image": "https://spoonacular.com/recipeImages/909964-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 158320,
	"title": "Bacon Cheeseburger",
	"image": "https://spoonacular.com/recipeImages/158320-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 159266,
	"title": "Blue Cheese and Bacon Chicken Burgers",
	"image": "https://spoonacular.com/recipeImages/159266-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 706409,
	"title": "Classic Bacon Cheeseburger Sliders",
	"image": "https://spoonacular.com/recipeImages/706409-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 4,
	"likes": 0
}, {
	"id": 247838,
	"title": "Cheese Covered, Bacon Wrapped Jalapeno Popper Burgers with Roasted Jalapeno Mayonnaise",
	"image": "https://spoonacular.com/recipeImages/247838-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 9951
}, {
	"id": 569859,
	"title": "California Club Sandwich",
	"image": "https://spoonacular.com/recipeImages/569859-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 2860
}, {
	"id": 248335,
	"title": "Bacon Jam Chicken Club Sandwich with Avocado and Chipotle Mayo",
	"image": "https://spoonacular.com/recipeImages/248335-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 1574
}, {
	"id": 559405,
	"title": "Easy Chicken Salad Sandwiches",
	"image": "https://spoonacular.com/recipeImages/559405-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 1428
}, {
	"id": 675793,
	"title": "Egg in a Hole Burger",
	"image": "https://spoonacular.com/recipeImages/675793-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 381
}, {
	"id": 518253,
	"title": "Lightened Up Chicken Bacon Ranch Sandwiches",
	"image": "https://spoonacular.com/recipeImages/518253-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 238
}, {
	"id": 502624,
	"title": "Chorizo Burger with Fried Egg and Sriracha Mayo",
	"image": "https://spoonacular.com/recipeImages/502624-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 211
}, {
	"id": 556173,
	"title": "Avocado Bacon Burgers",
	"image": "https://spoonacular.com/recipeImages/556173-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 143
}, {
	"id": 444496,
	"title": "Sourdough Chicken Sandwiches",
	"image": "https://spoonacular.com/recipeImages/444496-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 99
}, {
	"id": 114158,
	"title": "Puerto Rican Rice and Beans (Pink Beans)",
	"image": "https://spoonacular.com/recipeImages/114158-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 11
}, {
	"id": 528326,
	"title": "Oktoberfest Burger",
	"image": "https://spoonacular.com/recipeImages/528326-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 6
}, {
	"id": 423629,
	"title": "BBQ Bacon Burgers",
	"image": "https://spoonacular.com/recipeImages/423629-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 5
}, {
	"id": 526429,
	"title": "Grilled Dijon Bacon Cheeseburgers",
	"image": "https://spoonacular.com/recipeImages/526429-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 4
}, {
	"id": 98668,
	"title": "Wisconsin Badger Burger",
	"image": "https://spoonacular.com/recipeImages/98668-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 3
}, {
	"id": 99314,
	"title": "Squashed Burgers and Chips",
	"image": "https://spoonacular.com/recipeImages/99314-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 2
}, {
	"id": 887036,
	"title": "Trailblazer Burger",
	"image": "https://spoonacular.com/recipeImages/887036-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 1
}, {
	"id": 149115,
	"title": "Surf N Turf Burger (Grilled Burger with Lobster and Bacon)",
	"image": "https://spoonacular.com/recipeImages/149115-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 1
}, {
	"id": 1022983,
	"title": "Chivito (Uruguayan Steak and Egg Sandwich)",
	"image": "https://spoonacular.com/recipeImages/1022983-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 1
}, {
	"id": 21771,
	"title": "Grilled Chicken and Club Sandwich with Avocado and Chipotle Caramelized Onions",
	"image": "https://spoonacular.com/recipeImages/21771-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 0
}, {
	"id": 98684,
	"title": "Chivito",
	"image": "https://spoonacular.com/recipeImages/98684-312x231.png",
	"imageType": "png",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 0
}, {
	"id": 370750,
	"title": "Grilled Pepper Jack Chicken Sandwiches",
	"image": "https://spoonacular.com/recipeImages/370750-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 0
}, {
	"id": 372148,
	"title": "Grilled Chicken Club Pitas",
	"image": "https://spoonacular.com/recipeImages/372148-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 0
}, {
	"id": 401265,
	"title": "Deluxe Bacon Burgers",
	"image": "https://spoonacular.com/recipeImages/401265-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 0
}, {
	"id": 424584,
	"title": "Western Range Sandwiches",
	"image": "https://spoonacular.com/recipeImages/424584-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 0
}, {
	"id": 168171,
	"title": "Chicken Salad Club Sandwich Stackers",
	"image": "https://spoonacular.com/recipeImages/168171-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 0
}, {
	"id": 198678,
	"title": "Open-Faced Apricot-Chipotle Chicken Club",
	"image": "https://spoonacular.com/recipeImages/198678-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 5,
	"likes": 0
}, {
	"id": 801607,
	"title": "PB&J Sliders",
	"image": "https://spoonacular.com/recipeImages/801607-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 6,
	"likes": 9
}, {
	"id": 287299,
	"title": "Jack\'s Brunswick Stew",
	"image": "https://spoonacular.com/recipeImages/287299-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 6,
	"likes": 9
}, {
	"id": 526303,
	"title": "Grilled Bacon Jack Chicken Sandwich",
	"image": "https://spoonacular.com/recipeImages/526303-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 6,
	"likes": 2
}, {
	"id": 289406,
	"title": "Chicken and Sausage Sandwiches with Sauteed Bell Peppers and German Potato Salad",
	"image": "https://spoonacular.com/recipeImages/289406-312x231.jpeg",
	"imageType": "jpeg",
	"usedIngredientCount": 4, 
	"missedIngredientCount": 6,
	"likes": 0
}, {
	"id": 296927,
	"title": "Chicken-Avocado Club Sandwiches",
	"image": "https://spoonacular.com/recipeImages/296927-312x231.jpg",
	"imageType": "jpg",
	"usedIngredientCount": 4,
	"missedIngredientCount": 6,
	"likes": 0
}]';

$data = json_decode($json,true);$output = [];

//function that takes one parameter , parses the information and inserts it into the database
function insertToDataBase($result);
for($i=0 ; $i<count((array)$result) ; $i++){
	$data[$i]['title'] = mysqli_real_escape_string($conn, $data[$i]['title']);
	$query = "REPLACE INTO `recipes`(`recipe_id`, `recipe_name`, `recipe_img`)VALUES({$data[$i]['id']},'{$data[$i]['title']}','{$data[$i]['image']}')";
	$result = mysqli_query($conn, $query);
	if (mysqli_errno($conn)){
		print(mysqli_error($conn).': ');
		print($query);
	}
	$row = mysqli_affected_rows($conn); 
}