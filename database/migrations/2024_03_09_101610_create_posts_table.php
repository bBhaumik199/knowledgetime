<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `banner_image`, `creation_date`, `first_para`, `bold_text`, `downloadable_file_name`, `modification_time`, `author_id`) VALUES ('1', NULL, NULL, 'How to get rid of that annoying screen lock in windows 10?', 'a1i1.jpg', '2024-03-16 06:57:57.000000', 'When we come back to our desk and see that computer is locked, we need to usually click on the screen somewhere or press “Enter” to get to the screen that shows the password field and unlock it. Sometimes the screen gets stuck and you’ll have to wait for\r\n\r\n', 'Now Let\'s work towards getting rid of that lock screen in windows 10 system. Windows vs Humans. Let\'s go.\r\n', 'LockScreenBehaviour.bat', '2024-03-16 06:57:57.000000', '1');
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title");
            $table->string("banner_image");
            $table->dateTime("creation_date");
            $table->string("first_para");
            $table->string("bold_text");
            $table->string("downloadable_file_name");
            $table->dateTime("modification_time");
            $table->integer("author_id");
            $table->foreign("author_id")->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
