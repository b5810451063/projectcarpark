<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new App\User;
      $admin ->name ='admin';
      $admin ->lastname ='JAYNAJA';
      $admin->email = 'parkservice1@hotmail.com';
      $admin ->password=bcrypt('aadmin');
      $admin->level='admin';
      $admin->type='none';
      // $admin->start_date_package='';
      // $admin->end_date_package='';
      $admin->remember_token= str_random(64);
      $admin->is_enabled=true;
      $admin->avatar='';
      $admin->save();
    }
}
