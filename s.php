<?php

/**
 * Single responsibility
 * The Single Responsibility Principle states: “Every entity should have one single responsibility.”
 * In this example, I have created three classes for working with orders
 * According to the principle of Single Responsibility(S), each class is responsible for a single task.
 * In theory, we can make one single class - Order, but if we want to make changes to the printing or storage methods, we change the order class itself, which may lead to its malfunction.
 * To solve this problem, it is worth dividing this class into 3 separate classes, each of which will deal with its own task
 */


 // Order Content Management
 class Order {
    
    public function getItem() {
        // ... 
    }

    public function addItem() {
        // ...
    }

    public function deleteItem() {
        // ...
    }

    public function calculateTotalSumOfItems() {
        // ...
    }

 }

// Order management in the database
 class OrderData {

    public function load($id) {
        // ...
    } 

    public function save($order) {
        // ...
    }

    public function update($order) {
        // ...
    }

    public function delete(int $id) {
        // ...
    }

 }

 // Order display
 class OrderDisplay {
    public function show($id) {
        // ...
    }
 }