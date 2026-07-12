<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tour;
use App\Models\Package;

class CatalogSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Tours
        Tour::updateOrCreate(
            ['name' => 'Goa Beach Tour'],
            [
                'description' => 'A wonderful relaxing holiday on the sandy beaches of Goa. Enjoy water sports, nightlife, and sea food.',
                'places_covered' => 'Panaji, Calangute, Baga, Anjuna',
                'price' => 5000,
                'image' => 'img-1.jpg',
            ]
        );

        Tour::updateOrCreate(
            ['name' => 'Shimla Hill Station Tour'],
            [
                'description' => 'Experience the beautiful cold hills of Shimla. Ideal for families and couples seeking nature views.',
                'places_covered' => 'Shimla Mall Road, Kufri, Jakhoo Temple',
                'price' => 8500,
                'image' => 'img-2.jpg',
            ]
        );

        Tour::updateOrCreate(
            ['name' => 'Manali Adventure Escape'],
            [
                'description' => 'An adventure filled tour in Manali. Enjoy paragliding, skiing, and trekking in the Solang Valley.',
                'places_covered' => 'Manali, Solang Valley, Rohtang Pass',
                'price' => 12000,
                'image' => 'img-3.jpg',
            ]
        );

        Tour::updateOrCreate(
            ['name' => 'Kashmir Paradise Tour'],
            [
                'description' => 'Explore the paradise on Earth. Stay in a traditional houseboat and enjoy Shikara rides on Dal Lake.',
                'places_covered' => 'Srinagar, Gulmarg, Pahalgam, Sonamarg',
                'price' => 15000,
                'image' => 'img-4.jpg',
            ]
        );

        // Seed Packages
        Package::updateOrCreate(
            ['name' => 'Golden Triangle Special'],
            [
                'description' => 'Discover the rich heritage of India. Visit the historical monuments of Delhi, Agra, and Jaipur.',
                'places_covered' => 'Delhi, Agra Taj Mahal, Jaipur Hawa Mahal',
                'price' => 18000,
                'image' => 'img-1.jpg',
            ]
        );

        Package::updateOrCreate(
            ['name' => 'Kerala Backwaters Premium'],
            [
                'description' => 'Relax in the serene backwaters of Kerala in a luxury houseboat. Enjoy scenic beauty and Ayurveda.',
                'places_covered' => 'Cochin, Munnar, Alleppey Houseboat, Kovalam',
                'price' => 22000,
                'image' => 'img-2.jpg',
            ]
        );

        Package::updateOrCreate(
            ['name' => 'South India Temple Package'],
            [
                'description' => 'A spiritual journey through the magnificent Dravidian architecture temples of South India.',
                'places_covered' => 'Madurai, Rameshwaram, Kanyakumari',
                'price' => 14500,
                'image' => 'img-3.jpg',
            ]
        );
    }
}
