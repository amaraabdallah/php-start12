<?php
function do_login(string $username, string $password): bool {
  $allowedUsername = "JeanJean";
  // $allowedPassword = "password";
  $allowedAdmin = "moiMoi";

  $hashedAllowedPassword = '$2y$12$ay7Qi9Lho.UXs4W65..8fOTNwvDyGXnNsKYwHgwnOq6EgJ.VGTC8O';

  if($username === $allowedUsername && 
     password_verify($password, $hashedAllowedPassword)){
    return true;}
  else if($username === $allowedAdmin && 
     password_verify($password, $hashedAllowedPassword)){
    return true;
   
  }

  return false;
}