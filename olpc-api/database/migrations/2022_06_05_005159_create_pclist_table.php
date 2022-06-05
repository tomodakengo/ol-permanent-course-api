
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreatePclistTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("pclist", function (Blueprint $table) {

						$table->increments('id');
						$table->text('name'); //Course Name
						$table->text('prefecture'); //Prefecture Name
						$table->integer('managementNo')->nullable(); //Management Number by prefecture
						$table->integer('licenseNo'); //License Number by JOA
						$table->text('startPosition')->nullable(); //Start Position
						$table->double('latitude')->nullable();
						$table->double('longitude')->nullable();
						$table->text('whereToGet')->nullable();
						$table->double('distance')->nullable(); //Distance of course
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
                Schema::dropIfExists("pclist");
            }
        }
    