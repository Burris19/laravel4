<?php

class Usuario extends Eloquent { 

  public function SetPasswordAttribute($password) {
    $this->attributes['password'] = Hash::make($password);
  }

}
