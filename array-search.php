<?php
echo " <h1 style='color:red'>Array Search </h1> ";


echo " <h4 style='color:red'>in_array </h4> ";

// The in_array() function searches an array for a specific value.

// Note: If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.



$people = array("Peter", "Joe", "Glenn", "Cleveland", 23);

if (in_array("23", $people, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }


if (in_array("Glenn",$people, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }


if (in_array(23,$people, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }


  echo " <h4 style='color:red'>array_search </h4> ";

//   The array_search() function search an array for a value and returns the key/index.

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
?>