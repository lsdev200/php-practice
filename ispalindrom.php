<?php

function isPalindrome($str) {
  $revstr = strrev($str); 
  
  if ($str == $revstr) {
    return true;
  }
  return false;
}

$str = "madam";
if(isPalindrome($str)) {
  echo "$str is a Palindrome";
}
else {
  echo "$str is not a Palindrome";
}
