<?php

/**
 * Liskov Substitution Principle
 * A subclass/derived class should be interchangeable with a base/parent class.
 */

interface LessonRepositoryInterface
{

    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {

        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        //return Lesson::all()->toArray();
    }
}