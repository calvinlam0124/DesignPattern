<?php


class User{
  private static $localInstance;
  protected function __construct(){ /* protected */ }
  public static function getLocalInstance(){
    if(!self::$localInstance){
     self::$localInstance = new static;
    }
    return self::$localInstance;
  }
}
