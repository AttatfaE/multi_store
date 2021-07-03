<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 40)->create([
            'parentId'=>$this->getRandomParentId()
        ]);
    }

    private function getRandomParentId()
    {
        $parentId = Category::inRandomOrder()->first();
        return $parentId;
    }

}
