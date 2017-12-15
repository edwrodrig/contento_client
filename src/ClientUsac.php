<?php

namespace edwrodrig\contento\client;

trait ClientUsac {

public $username;
public $session;

public function login($user, $pass) {
  $r = $this->request(['action' => 'user_login', 'username' => $user, 'password' => $pass]);
  $this->username = $r['username'];
  $this->session = $r['session'];
}

}
