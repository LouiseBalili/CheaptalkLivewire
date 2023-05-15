<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'category' => 'Comedy',
                'remarks' => 'Offers a lighthearted escape from the seriousness of everyday life and provides a platform for social commentary and self-expression through laughter.'
            ],
            [
                'category' => 'Romance',
                'remarks' => 'Celebrates the exhilarating and often complicated aspects of love, and offers a captivating escape into the lives and relationships of its characters.'
            ],
            [
                'category' => 'Religion',
                'remarks' => 'Explores the beliefs, values, and practices of different faiths and offers insights into the spiritual and moral dimensions of human existence.'
            ],
            [
                'category' => 'Politics',
                'remarks' => 'Delves into the complex and often contentious world of governance, power, and public policy, providing insights into the workings of society and the challenges of leadership.'
            ],
            [
                'category' => 'Education',
                'remarks' => 'Provides a platform to explore the world of learning and the diverse experiences, perspectives, and challenges that shape the intellectual and personal growth of individuals and communities.'
            ],
            [
                'category' => 'Business',
                'remarks' => 'Offers insights into the dynamic and ever-changing world of commerce, entrepreneurship, and innovation, providing perspectives on the challenges and opportunities that shape our economy and society.'
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
