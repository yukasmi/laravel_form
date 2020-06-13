<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
			$table->bigIncrements('id');
			// 氏名、メールアドレス、url、性別、年齢、お問い合わせ内容
			$table->string('name', 100);
			$table->string('email', 255);
			$table->longText('url')->nullable($values = true);
			$table->boolean('gender')->unsigned(); //"-"のない数字
			$table->tinyInteger('age');
			$table->string('contact', 200);

			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_forms');
    }
}
