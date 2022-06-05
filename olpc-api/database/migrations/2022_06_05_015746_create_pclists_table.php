
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreatePclistsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("pclists", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name'); //Course Name
						$table->string('prefecture'); //Prefecture Name
						$table->integer('managementNo')->nullable(); //Management Number by prefecture
						$table->integer('licenseNo'); //License Number by JOA
						$table->string('startPosition')->nullable(); //Start Position
						$table->double('latitude')->nullable();
						$table->double('longitude')->nullable();
						$table->string('whereToGet')->nullable();
						$table->double('distance')->nullable(); //Distance of course

                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("pclists");
            }
        }
    