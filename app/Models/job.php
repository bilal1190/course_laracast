<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


// the first 1 create a class and declers it 
class job 

{
        public  static function all(): array
        {
           return  [
                [
                    'id' => 1,
                    'title' => 'Developer',
                    'salary' => '$60,000',
                    'age' => '29'
            
                ],
                [
                    'id' => 2,
                    'title' => 'Manager',
                    'salary' => '$100,000',
                    'age' => '59'
            
                ],
                [
                    'id' => 3,
                    'title' => 'Stuff',
                    'salary' => '$10,000',
                    'age' => '20'
            
                ],
            ];
    
        }
        public static function find (int $id):array
        {

            $job  = Arr::first(static::all(), fn($job) => $job['id'] == $id);     

            if(! $job){
                abort(404);
            }
            return $job;    
        }
}
