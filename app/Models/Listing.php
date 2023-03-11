<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "title" => "listing one",
                "description" => "listing description lorem ipsum doler sit amet"
            ],
            [
                "id" => 2,
                "title" => "listing two",
                "description" => "listing description lorem ipsum doler sit amet"
            ],
            [
                "id" => 3,
                "title" => "listing three",
                "description" => "listing description lorem ipsum doler sit amet"
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();
        foreach ($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
        return [];
    }
}
