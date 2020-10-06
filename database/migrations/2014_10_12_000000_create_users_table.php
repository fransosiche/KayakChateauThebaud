<?php

use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('is_admin')->default('0');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $New_User = new User();

        $New_User->name="François Biron";
        $New_User->email="francois.biron@viacesi.fr";
        $New_User->password=Hash::make("qovjei2qv");
        $New_User->is_admin="1";
        $New_User->save();

        $New_User = new User();

        $New_User->name="Valérie Sibioude";
        $New_User->email="valeriesibioude@hotmail.fr";
        $New_User->password=Hash::make("3ECDt7eS");
        $New_User->is_admin="1";
        $New_User->save();

        $New_User = new User();

        $New_User->name="Christian Moriceau";
        $New_User->email="moriceauchristian@orange.fr";
        $New_User->password=Hash::make("3ECDt7eS");
        $New_User->is_admin="1";
        $New_User->save();

        $New_User = new User();

        $New_User->name="Yoan Maillard";
        $New_User->email="yoansuaude@gmail.com";
        $New_User->password=Hash::make("2vePd7y7");
        $New_User->is_admin="1";
        $New_User->save();

        $New_User = new User();

        $New_User->name="Coline Belkheir";
        $New_User->email="colineblkhr@hotmail.com";
        $New_User->password=Hash::make("Eyz8We3b");
        $New_User->is_admin="1";
        $New_User->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
