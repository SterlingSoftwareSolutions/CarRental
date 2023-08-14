<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Attach an image to a user
        DB::table('attachments')->insert([
            'referenceId' => 1, // Assuming user with ID 1
            'file_path' => 'public/user_images/sample_image.jpg', // Replace with the actual file path
            'attachment_type' => 'User Image',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
