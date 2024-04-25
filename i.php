<?php

/**
 * Interface Segregation Principle
 * You cannot force a client to implement an interface that it does not use.
 * 
 */

 interface WorkAbleInterface {
     public  function work();
 }
 
 interface SleepAbleInterface {
     public  function  sleep();
 }
 
 class HumanWorker implements WorkAbleInterface, SleepAbleInterface {
    public  function work() {
        var_dump('works');
    }
     
    public  function  sleep() {
        var_dump('sleep');
    }
 }
 
 class RobotWorker implements WorkAbleInterface
 {
    public  function work() {
        var_dump('works');
    }
 }