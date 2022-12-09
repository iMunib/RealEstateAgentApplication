<?php
include 'connection.php';
?>
<script>
function searchAgentsFunction() {
  // Declare variables
  var inputOfUser, filterInputToUpperCase, ul, li, valueOfLiElements, i, txtValue;
  inputOfUser = document.getElementById('search-input-box');
  filterInputToUpperCase = inputOfUser.value.toUpperCase();
  ul = document.getElementById("searchpage-ul");
  li = ul.getElementsByTagName('li');

//   looping through the list items
  for (i = 0; i < li.length; i++) {
    //  getting the text value of the list item to "valueOfLiElements"
    valueOfLiElements = li[i].getElementsByTagName("a")[0];
    // setting the inner text value of the list item and setting it to "txtValue"
    txtValue = valueOfLiElements.innerText;
    // checking if the text value of the list item does not match the search query, hide the list item
    if (txtValue.toUpperCase().indexOf(filterInputToUpperCase) > -1) {
        // if the text value of the list item does match the search query, show the list item
      li[i].style.display = "";
    // if the text value of the list item does not match the search query, hide the list item  
    } else {
      li[i].style.display = "none";
     }
  }
}
</script>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="./styles.css">
</head>


<body id="searchpagebody">
<header id="nav-header">
        <div class="container">
        </div>
        <nav id="main-navbar">
            <ul id="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="searchpage.php">Search</a></li>
                <li><a href="agentsDetails.php">Admin</a></li>
            </ul>
        </nav>
    </header>
    <div id="searchpage-main-div">
        <img id="search-image-top" src="./images/searchpageimg.jpg" alt="picture of a kitchen">
        <div id="search-outer-div">
            <input type="text" id="search-input-box" name="search" onkeyup="searchAgentsFunction()" placeholder="Search for agent..">
            <ul id="searchpage-ul">
                <li><a href="./agentsDetails.php">Test1 Test</a></li>
                <li><a href="./agentsDetails.php">Test2 Test</a></li>
                <li><a href="./agentsDetails.php">Test3 Test</a></li>
                <li><a href="./agentsDetails.php">Test4 Test</a></li>
                <li><a href="./agentsDetails.php">Test5 Test</a></li>
                <li><a href="./agentsDetails.php">Test6 Test</a></li>
                <li><a href="./agentsDetails.php">Test7 Test</a></li>
                <li><a href="./agentsDetails.php">Test8 Test</a></li>
            </ul>
        </div>
    </div>
</body>
</html>