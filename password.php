<?php

  function regexPassword($password) {
    $regexp = '/^[a-zA-Z0-9@!#$*]+$/i';

    if (!preg_match($regexp, $password)) {
      return substr($password, 0, -1);
    }

    return $password;
  }