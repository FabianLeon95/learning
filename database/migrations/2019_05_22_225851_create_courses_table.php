<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Course;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('level_id');
            $table->string('name');
            $table->text('description');
            $table->string('slug');
            $table->string('picture');
            $table->enum('status', [Course::PUBLISHED, Course::PENDING, Course::REJECTED])->default(Course::PENDING);
            $table->boolean('previous_approved')->default(false);
            $table->boolean('previous_rejected')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('instructor_id')->references('id')->on('instructors');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('level_id')->references('id')->on('levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
