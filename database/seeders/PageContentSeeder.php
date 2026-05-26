<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            [
                'page_slug' => 'about',
                'section_key' => 'history',
                'title' => 'Our Rich History',
                'body' => 'Founded in the tradition of the Claretian Missionaries, SAMCC has been a beacon of Catholic education in Quezon City for over two decades...',
                'sort_order' => 1,
            ],
            [
                'page_slug' => 'home',
                'section_key' => 'welcome',
                'title' => 'A Tradition of Catholic Excellence',
                'body' => 'St. Anthony Mary Claret College is committed to forming holistically developed individuals who are academically excellent and spiritually grounded.',
                'sort_order' => 1,
            ],
            [
                'page_slug' => 'admissions',
                'section_key' => 'intro',
                'title' => 'Join the SAMCC Community',
                'body' => 'We welcome students from all walks of life who seek quality Catholic education and values-based formation.',
                'sort_order' => 1,
            ],
        ];

        foreach ($contents as $content) {
            PageContent::updateOrCreate(
                ['page_slug' => $content['page_slug'], 'section_key' => $content['section_key']],
                $content
            );
        }

        $this->command->info('Page content seeded successfully!');
    }
}
