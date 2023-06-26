<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(10)
            ->sequence(
                [
                    'title' => 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops',
                    'category_id' => 1,
                    'image' => 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg'
                ],
                [
                    'title' => 'Mens Casual Premium Slim Fit T-Shirts',
                    'category_id' => 1,
                    'image' => 'https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg'
                ],
                [
                    'title' => 'Mens Cotton Jacket',
                    'category_id' => 1,
                    'image' => 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg'
                ],
                [
                    'title' => 'Mens Casual Slim Fit',
                    'category_id' => 1,
                    'image' => 'https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg'
                ],
                [
                    'title' => 'John Hardy Women\'s Legends Naga Gold & Silver Dragon Station Chain Bracelet',
                    'category_id' => 3,
                    'image' => 'https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg'
                ],
                [
                    'title' => 'Solid Gold Petite Micropave',
                    'category_id' => 3,
                    'image' => 'https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg'
                ],
                [
                    'title' => 'WD 2TB Elements Portable External Hard Drive - USB 3.0',
                    'category_id' => 4,
                    'image' => 'https://fakestoreapi.com/img/61IBBVJvSDL._AC_SY879_.jpg'
                ],
                [
                    'title' => 'Lock and Love Women\'s Removable Hooded Faux Leather Moto Biker Jacket',
                    'category_id' => 2,
                    'image' => 'https://fakestoreapi.com/img/81XH0e8fefL._AC_UY879_.jpg'
                ],
                [
                    'title' => 'DANVOUY Womens T Shirt Casual Cotton Short',
                    'category_id' => 2,
                    'image' => 'https://fakestoreapi.com/img/61pHAEJ4NML._AC_UX679_.jpg'
                ],
                [
                    'title' => 'Samsung 49-Inch CHG90 144Hz Curved Gaming Monitor (LC49HG90DMNXZA) – Super Ultrawide Screen QLED',
                    'category_id' => 4,
                    'image' => 'https://fakestoreapi.com/img/81Zt42ioCgL._AC_SX679_.jpg'
                ],
            )
            ->create();
    }
}
