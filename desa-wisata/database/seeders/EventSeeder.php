<?php

namespace Database\Seeders;

use App\Models\Event;
use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $imagePath = $faker->image('public/storage/gallery');
        $relativePath = str_replace('public/storage/', '', $imagePath);

        $eventData = [
            [
                'id' => 3,
                'admin_id' => 2,
                'image_url' => $relativePath,
                'name' => 'Hari lalampa',
                'description' => 'Hari dimana semuanya makan lalampa gratis.',
                'location' => 'Toboli',
                'gmaps_url' => 'https://maps.app.goo.gl/eDowv9N59yPRozto6',
                'start_date' => '2025-06-28 09:00:00',
                'end_date' => '2025-06-28 17:00:00',
                'slug' => 'festival-kebudayaan-1-' . Str::ulid(),
            ],
            [
                'id' => 4,
                'admin_id' => 2,
                'image_url' => $relativePath,
                'name' => 'Pesta Rakyat 2',
                'description' => 'Acara rakyat dengan berbagai hiburan dan kuliner lokal.',
                'location' => 'Lapangan Vatulemo',
                'gmaps_url' => 'https://maps.app.goo.gl/someurl1',
                'start_date' => '2025-07-01 10:00:00',
                'end_date' => '2025-07-01 18:00:00',
                'slug' => 'pesta-rakyat-2-' . Str::ulid(),
            ],
            [
                'id' => 5,
                'admin_id' => 2,
                'image_url' => $relativePath,
                'name' => 'Konser Musik Tradisional 3',
                'description' => 'Pesta Rakyat 3.',
                'location' => 'Dinas Pariwisata Sulawesi Tengah',
                'gmaps_url' => 'https://maps.app.goo.gl/someurl2',
                'start_date' => '2025-07-05 19:00:00',
                'end_date' => '2025-07-05 22:00:00',
                'slug' => 'konser-musik-tradisional-3-' . Str::ulid(),
            ],
        ];

        foreach ($eventData as $data) {
            $event = new Event();
            $event->id = $data['id'];
            $event->admin_id = $data['admin_id'];
            $event->image_url = $data['image_url'];
            $event->name = $data['name'];
            $event->description = $data['description'];
            $event->location = $data['location'];
            $event->gmaps_url = $data['gmaps_url'];
            $event->start_date = $data['start_date'];
            $event->end_date = $data['end_date'];
            $event->slug = $data['slug'];
            $event->save();
        }
    }
}
