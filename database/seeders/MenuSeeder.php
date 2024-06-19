<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'Fish N Chip',
                'type_menu_id' => 1,
                'material' => json_encode(['fish', 'potato', 'oil']),
                'image' => 'http://127.0.0.1:8000/img/fish_n_chip.jpg',
                'detail' => 'Delicious fish and chips dish.',
                'price' => 12.99,
                'cal' => 450.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Steak',
                'type_menu_id' => 2,
                'material' => json_encode(['beef', 'potato', 'vegetables']),
                'image' => 'http://127.0.0.1:8000/img/steak.jpg',
                'detail' => 'Juicy steak served with vegetables.',
                'price' => 24.99,
                'cal' => 600.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Corn Soup',
                'type_menu_id' => 3,
                'material' => json_encode(['corn', 'cream', 'butter']),
                'image' => 'http://127.0.0.1:8000/img/corn_soup.jpg',
                'detail' => 'Creamy corn soup.',
                'price' => 8.99,
                'cal' => 300.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Salad',
                'type_menu_id' => 4,
                'material' => json_encode(['chicken', 'lettuce', 'tomato', 'carrot']),
                'image' => 'http://127.0.0.1:8000/img/chicken_salad.jpg',
                'detail' => 'Healthy chicken salad with fresh vegetables.',
                'price' => 10.99,
                'cal' => 350.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Spaghetti Bolognese',
                'type_menu_id' => 5,
                'material' => json_encode(['beef', 'tomato', 'onion', 'garlic', 'pasta']),
                'image' => 'http://127.0.0.1:8000/img/spaghetti_bolognese.jpg',
                'detail' => 'Classic Italian pasta dish with rich meat sauce.',
                'price' => 14.99,
                'cal' => 550.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BBQ Ribs',
                'type_menu_id' => 6,
                'material' => json_encode(['pork', 'bbq sauce', 'salt', 'pepper']),
                'image' => 'http://127.0.0.1:8000/img/bbq_ribs.jpg',
                'detail' => 'Tender BBQ ribs with a smoky flavor.',
                'price' => 18.99,
                'cal' => 700.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vegetable Stir Fry',
                'type_menu_id' => 7,
                'material' => json_encode(['carrot', 'onion', 'chili', 'garlic', 'broccoli']),
                'image' => 'http://127.0.0.1:8000/img/vegetable_stir_fry.jpg',
                'detail' => 'Fresh vegetables stir-fried with a hint of garlic.',
                'price' => 9.99,
                'cal' => 250.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cheeseburger',
                'type_menu_id' => 8,
                'material' => json_encode(['beef', 'bread', 'cheese', 'lettuce', 'tomato']),
                'image' => 'http://127.0.0.1:8000/img/cheeseburger.jpg',
                'detail' => 'Classic cheeseburger with all the trimmings.',
                'price' => 11.99,
                'cal' => 500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pancakes',
                'type_menu_id' => 9,
                'material' => json_encode(['flour', 'egg', 'milk', 'butter']),
                'image' => 'http://127.0.0.1:8000/img/pancakes.jpg',
                'detail' => 'Fluffy pancakes served with syrup.',
                'price' => 7.99,
                'cal' => 400.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Grilled Cheese Sandwich',
                'type_menu_id' => 10,
                'material' => json_encode(['bread', 'cheese', 'butter']),
                'image' => 'http://127.0.0.1:8000/img/grilled_cheese.jpg',
                'detail' => 'Golden grilled cheese sandwich.',
                'price' => 5.99,
                'cal' => 350.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Taco',
                'type_menu_id' => 11,
                'material' => json_encode(['beef', 'cheese', 'lettuce', 'tomato', 'tortilla']),
                'image' => 'http://127.0.0.1:8000/img/taco.jpg',
                'detail' => 'Mexican taco with beef and fresh toppings.',
                'price' => 3.99,
                'cal' => 200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Curry',
                'type_menu_id' => 12,
                'material' => json_encode(['chicken', 'onion', 'garlic', 'curry powder', 'cream']),
                'image' => 'http://127.0.0.1:8000/img/chicken_curry.jpg',
                'detail' => 'Spicy chicken curry with creamy sauce.',
                'price' => 13.99,
                'cal' => 600.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Caesar Salad',
                'type_menu_id' => 13,
                'material' => json_encode(['lettuce', 'cheese', 'croutons', 'chicken', 'caesar dressing']),
                'image' => 'http://127.0.0.1:8000/img/caesar_salad.jpg',
                'detail' => 'Classic Caesar salad with grilled chicken.',
                'price' => 9.99,
                'cal' => 400.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tomato Soup',
                'type_menu_id' => 14,
                'material' => json_encode(['tomato', 'onion', 'garlic', 'cream']),
                'image' => 'http://127.0.0.1:8000/img/tomato_soup.jpg',
                'detail' => 'Rich and creamy tomato soup.',
                'price' => 6.99,
                'cal' => 250.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'French Fries',
                'type_menu_id' => 15,
                'material' => json_encode(['potato', 'oil', 'salt']),
                'image' => 'http://127.0.0.1:8000/img/french_fries.jpg',
                'detail' => 'Crispy golden French fries.',
                'price' => 3.99,
                'cal' => 300.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bacon and Eggs',
                'type_menu_id' => 16,
                'material' => json_encode(['bacon', 'egg', 'salt', 'pepper']),
                'image' => 'http://127.0.0.1:8000/img/bacon_eggs.jpg',
                'detail' => 'Classic breakfast with bacon and eggs.',
                'price' => 8.99,
                'cal' => 400.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shrimp Scampi',
                'type_menu_id' => 17,
                'material' => json_encode(['shrimp', 'garlic', 'butter', 'lemon']),
                'image' => 'http://127.0.0.1:8000/img/shrimp_scampi.jpg',
                'detail' => 'Succulent shrimp scampi with garlic butter sauce.',
                'price' => 15.99,
                'cal' => 450.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Veggie Burger',
                'type_menu_id' => 18,
                'material' => json_encode(['bread', 'lettuce', 'tomato', 'veggie patty']),
                'image' => 'http://127.0.0.1:8000/img/veggie_burger.jpg',
                'detail' => 'Healthy veggie burger with fresh toppings.',
                'price' => 9.99,
                'cal' => 350.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beef Tacos',
                'type_menu_id' => 11,
                'material' => json_encode(['beef', 'tortilla', 'lettuce', 'cheese', 'salsa']),
                'image' => 'http://127.0.0.1:8000/img/beef_tacos.jpg',
                'detail' => 'Delicious beef tacos with cheese and salsa.',
                'price' => 11.99,
                'cal' => 550.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chocolate Cake',
                'type_menu_id' => 19,
                'material' => json_encode(['flour', 'cocoa', 'sugar', 'egg', 'butter']),
                'image' => 'http://127.0.0.1:8000/img/chocolate_cake.jpg',
                'detail' => 'Rich and moist chocolate cake.',
                'price' => 6.99,
                'cal' => 400.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
