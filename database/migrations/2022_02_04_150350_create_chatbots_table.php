<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatbotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatbots', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('keyword')->unique()->comment('word or sentence for start an specific chat');
            $table->softDeletes()->comment('delete record from sistem, not from database');  
            $table->timestamps();
        });

        Schema::create('chatbots_questions', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('description')->comment('text to ask something to user');
            $table->softDeletes()->comment('delete record from sistem, not from database');  
            $table->timestamps();

            /****************************/
            $table->unsignedBigInteger('chatbot_id')->nullable();
            $table->foreign('chatbot_id')->references('id')->on('chatbots');
            /****************************/
        });

        Schema::create('chatbots_answers', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('keyword')->unique()->comment('expected reply from user');
            $table->string('description')->comment('answer or say to user');
            $table->softDeletes()->comment('delete record from sistem, not from database'); 
            $table->string('url_image')->nullable()->comment('image url attachet to a answer'); 
            $table->string('label_image')->nullable()->comment('image url attachet to a answer');
            $table->string('url_video')->nullable()->comment('video url attachet to a answer'); 
            $table->string('label_video')->nullable()->comment('video url attachet to a answer');
            $table->string('url_file')->nullable()->comment('file url attachet to a answer'); 
            $table->string('label_file')->nullable()->comment('file url attachet to a answer');
            $table->timestamps();

            /****************************/
            $table->unsignedBigInteger('chatbots_question_id')->nullable();
            $table->foreign('chatbots_question_id')->references('id')->on('chatbots_questions');
            /****************************/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatbots_answers');
        Schema::dropIfExists('chatbots_questions');
        Schema::dropIfExists('chatbots');
    }
}
