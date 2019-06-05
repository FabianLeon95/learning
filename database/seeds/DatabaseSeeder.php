<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        factory(\App\Role::class, 1)->create(['name'=>'admin']);
        factory(\App\Role::class, 1)->create(['name'=>'instructor']);
        factory(\App\Role::class, 1)->create(['name'=>'student']);

        factory(\App\User::class, 1)->create([
            'name'=>'Admin',
            'email'=>'admin@email.com',
            'password' => bcrypt('admin'),
            'role_id' => \App\Role::ADMIN
        ])->each(function (\App\User $u){
            factory(\App\Student::class, 1)->create(['user_id'=>$u->id]);
        });

        factory(\App\User::class, 50)->create()
            ->each(function (\App\User $u){
                factory(\App\Student::class, 1)->create(['user_id'=>$u->id]);
            });

        factory(\App\User::class, 10)->create()
            ->each(function (\App\User $u){
                factory(\App\Student::class, 1)->create(['user_id'=>$u->id]);
                factory(\App\Instructor::class, 1)->create(['user_id'=>$u->id]);
            });

        factory(\App\Level::class, 1)->create(['name'=>'Beginner']);
        factory(\App\Level::class, 1)->create(['name'=>'Intermediate']);
        factory(\App\Level::class, 1)->create(['name'=>'Advanced']);
        factory(\App\Category::class, 5)->create();

        factory(\App\Course::class, 50)->create()
            ->each(function (\App\Course $c){
                $c->goals()->saveMany(factory(\App\Goals::class, 4)->create());
                $c->requirements()->saveMany(factory(\App\Requirements::class, 4)->create());
            });
    }
}
