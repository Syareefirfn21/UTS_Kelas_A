<?php
namespace Codecademy;

//Comparison Operators
//Rahmi Syafitri
function chooseCheckoutLane($items)
{
    if ($items <= 12){
    return "express lane";
  } else {
    return "regular lane";
  }
}
//Nim: 2255201006
function canIVote ($age) 
{
    if($age >= 18){
        return "yes";
       } else {
       return "no";
    }
 }
 //kelas A
echo chooseCheckoutLane(1);
echo "\n\n";
echo chooseCheckoutLane(13);
echo "\n\n";
echo canIVote(19);
echo "\n\n";
echo canIVote(13);
?>