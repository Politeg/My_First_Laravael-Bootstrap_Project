<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'=>'admin',
            'login'=>'admin',
            'surname'=>'admin',
            'email'=>'admin@mail.ru',
            'password'=>Hash::make('admin11'),
            'isAdmin'=>1,
        ]);
        User::insert([
            'name'=>'Максим',
            'login'=>'pon',
            'surname'=>'Севастьянов',
            'email'=>'w@mail.ru',
            'password'=>Hash::make('123123123'),
            'isAdmin'=>0,
        ]);
        Category::insert([
           'category_name'=>'Цветы'
        ]);

        Category::insert([
            'category_name'=>'Дополнительная'
        ]);
        Product::insert([
            'product_name'=>'Роза',
            'product_country'=>'РОССИЙСКАЯ ИМПЕРИЯ',
            'product_count'=>'20',
            'category_id'=>'1',
            'product_photo'=>'6MHRB5j6YeOUaKovmHWAmBz1nLAJBKqdzWSZcRhS.jpg',
            'product_price'=>'1000',
            'product_description'=>'Описание для описания, но где же описание?',
        ]);
        Product::insert([
            'product_name'=>'Ваза',
            'product_country'=>'РОССИЙСКАЯ ИМПЕРИЯ',
            'product_count'=>'20',
            'category_id'=>'2',
            'product_photo'=>'6MHRB5j6YeOUaKovmHWAmBz1nLAJBKqdzWSZcRhS.jpg',
            'product_price'=>'1300',
            'product_description'=>'Описание для описания, но где же описание?',
        ]);
        Product::insert([
            'product_name'=>'КРАСНАЯ роза',
            'product_country'=>'РОССИЙСКАЯ ИМПЕРИЯ',
            'product_count'=>'10',
            'category_id'=>'1',
            'product_photo'=>'6MHRB5j6YeOUaKovmHWAmBz1nLAJBKqdzWSZcRhS.jpg',
            'product_price'=>'1500',
            'product_description'=>'Описание для описания, но где же описание?',
        ]);
        Product::insert([
            'product_name'=>'КРАСНАЯ роза Но краснее Красной рохы',
            'product_country'=>'РОССИЙСКАЯ ИМПЕРИЯ',
            'product_count'=>'30',
            'category_id'=>'1',
            'product_photo'=>'6MHRB5j6YeOUaKovmHWAmBz1nLAJBKqdzWSZcRhS.jpg',
            'product_price'=>'1800',
            'product_description'=>'Описание для описания, но где же описание?',
        ]);
        Product::insert([
            'product_name'=>'КРАСНАЯ роза Но менее красная чем Красная роза',
            'product_country'=>'РОССИЙСКАЯ ИМПЕРИЯ',
            'product_count'=>'40',
            'category_id'=>'2',
            'product_photo'=>'6MHRB5j6YeOUaKovmHWAmBz1nLAJBKqdzWSZcRhS.jpg',
            'product_price'=>'1400',
            'product_description'=>'Описание для описания, но где же описание?',
        ]);
        Status::insert([
            'status_name' => 'В обработке'
        ]);
        Status::insert([
            'status_name' => 'Подтверждение'
        ]);
        Status::insert([
            'status_name' => 'Отменен'
        ]);
    }
}
