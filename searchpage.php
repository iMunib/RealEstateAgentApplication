<?php
include 'connection.php';
?>
<script>
function searchAgentsFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('search-input-box');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

//   looping through the list items
  for (i = 0; i < li.length; i++) {
    //  setting the text value of the list item to "a"
    a = li[i].getElementsByTagName("a")[0];
    // setting the inner text value of the list item and setting it to "txtValue"
    txtValue = a.innerText;
    // checking if the text value of the list item does not match the search query, hide the list item
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
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
    <div id="searchpage-main-div">
        <img id="search-image-top" src="./images/searchpageimg.jpg" alt="picture of a kitchen">
        <div id="search-outer-div">
            <input type="text" id="search-input-box" name="search" onkeyup="searchAgentsFunction()" placeholder="Search for agent..">
            <ul id="myUL">
                <li><a href="#">Adele Brit</a></li>
                <li><a href="#">Agnes</a></li>
                <li><a href="#">Billy</a></li>
                <li><a href="#">Bob</a></li>
                <li><a href="#">Calvin</a></li>
                <li><a href="#">Christina</a></li>
                <li><a href="#">Cindy</a></li>
            </ul>
        </div>
    </div>
</body>
</html>