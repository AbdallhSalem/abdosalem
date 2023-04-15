<?php
namespace App\Models;

class student {
    public static function all(){
        $arr=[
            [
                "id" =>1 ,
                "name"=>'Abdallah'
            ],
            [

                'id'=> 2,
                'name'=>'Adel'
            ],
            [
                "id" =>3 ,
                "name"=>'Basuni'
            ],
            [
                "id" =>4 ,
                "name"=>'mohamed'
            ],
            [
            "id" =>5 ,
            "name"=>'Abosalem'
            ],
    

        ];
        return $arr;
       
    }

}