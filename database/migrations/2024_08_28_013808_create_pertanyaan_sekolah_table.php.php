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
        Schema::create('pertanyaansekolahs', function (Blueprint $table) {
            $table->id();

            //I.	INFORMASI RESPONDEN
            $table->string('pertanyaan1', 30);
            $table->string('pertanyaan2', 10);
            $table->date('pertanyaan3');


            //II.	INFORMASI SEKOLAH
            $table->string('pertanyaan4', 40);
            $table->string('pertanyaan5', 15);
            $table->string('pertanyaan6', 8);
            $table->string('pertanyaan7', 40);
            $table->string('pertanyaan8', 15);
            $table->string('pertanyaan9', 10);
            $table->string('pertanyaan10', 19);
            $table->string('pertanyaan11', 19);
            $table->string('pertanyaan12', 18);
            $table->string('pertanyaan13', 18);
            $table->string('pertanyaan14', 25);
            $table->string('pertanyaan15', 40);


            //III.	KETERANGAN SEKOLAH
            //pertanyaan no.16
            $table->integer('pertanyaan16a');
            $table->integer('pertanyaan16b');

            //pertanyaan no.17
            $table->integer('pertanyaan17a');
            $table->integer('pertanyaan17b');

            //pertanyaan no.18
            $table->integer('pertanyaan18a');
            $table->integer('pertanyaan18b'); 

            //pertanyaan no.19
            $table->integer('pertanyaan19a'); 
            $table->integer('pertanyaan19b'); 

            $table->string('pertanyaan20', 30);
            $table->string('pertanyaan21', 45);
            $table->string('pertanyaan22', 15);
            $table->string('pertanyaan23', 19);
            $table->string('pertanyaan24', 65);
            $table->string('pertanyaan25', 65);
            $table->string('pertanyaan26', 9);
            $table->string('pertanyaan27', 9);


            // IV. KEBIJAKAN KESIAPSIAGAAN BENCANA 
            $table->string('pertanyaan28', 9);
            $table->string('pertanyaan29', 9);

            //pertanyaan no.30
            $table->string('pertanyaan30a', 9);
            $table->string('pertanyaan30b', 9);
            $table->string('pertanyaan30c', 9);
            $table->string('pertanyaan30d', 9);
            $table->string('pertanyaan30e', 9);
            $table->string('pertanyaan30f', 9);

            $table->string('pertanyaan31', 9);
            $table->string('pertanyaan32', 9);
            $table->string('pertanyaan33', 9);
            $table->string('pertanyaan34', 9);

            //pertanyaan no.35
            $table->string('pertanyaan35a', 9);
            $table->string('pertanyaan35b', 9);
            $table->string('pertanyaan35c', 9);
            $table->string('pertanyaan35d', 9);
            $table->string('pertanyaan35e', 9);

            $table->string('pertanyaan36', 9);
            $table->string('pertanyaan37', 9);

            //V. RENCANA KESIAPSIAGAAN DAN TANGGAP DARURAT (PREP)
            $table->string('pertanyaan38', 9);
            $table->string('pertanyaan39', 9);
            $table->string('pertanyaan40', 9);

            //pertanyaan no.41
            $table->string('pertanyaan41a', 9);
            $table->string('pertanyaan41b', 9);
            $table->string('pertanyaan41c', 9);
            $table->string('pertanyaan41d', 9);
            $table->string('pertanyaan41e', 9);

            $table->string('pertanyaan42', 9);
            $table->string('pertanyaan43', 9);

            //pertanyaan no.44
            $table->string('pertanyaan44a', 9);
            $table->string('pertanyaan44b', 9);
            $table->string('pertanyaan44c', 9);
            $table->string('pertanyaan44d', 9);
            $table->string('pertanyaan44e', 9);

            $table->string('pertanyaan45', 9);

            //pertanyaan no.46
            $table->string('pertanyaan46a', 9);
            $table->string('pertanyaan46b', 9);
            $table->string('pertanyaan46c', 9);
            $table->string('pertanyaan46d', 9);
            $table->string('pertanyaan46e', 9);


            // VI. SISTEM PERINGATAN DINI (EWS)
            $table->string('pertanyaan47', 9);
            $table->string('pertanyaan48', 9);
            $table->string('pertanyaan49', 9);
            $table->string('pertanyaan50', 9);
            $table->string('pertanyaan51', 9);
            $table->string('pertanyaan52', 9);
            $table->string('pertanyaan53', 9);
            $table->string('pertanyaan54', 9);
            $table->string('pertanyaan55', 9);

            //pertanyaan no.56
            $table->string('pertanyaan56a', 9);
            $table->string('pertanyaan56b', 9);
            $table->string('pertanyaan56c', 9);

            $table->string('pertanyaan57', 9);

            //pertanyaan no.58
            $table->string('pertanyaan58a', 9);
            $table->string('pertanyaan58b', 9);
            $table->string('pertanyaan58c', 9);
            $table->string('pertanyaan58d', 9);
            $table->string('pertanyaan58e', 9);

            //pertanyaan no.59
            $table->string('pertanyaan59a', 9);
            $table->string('pertanyaan59b', 9);

            $table->string('pertanyaan60', 9);

            //pertanyaan no.61
            $table->string('pertanyaan61a', 9);
            $table->string('pertanyaan61b', 9);
            $table->string('pertanyaan61c', 9);
            $table->string('pertanyaan61d', 9);
            $table->string('pertanyaan61e', 9);
            $table->string('pertanyaan61f', 9);


            //pertanyaan no.62
            $table->string('pertanyaan62a', 9);
            $table->string('pertanyaan62b', 9);
            $table->string('pertanyaan62c', 9);
            $table->string('pertanyaan62d', 9);
            $table->string('pertanyaan62e', 9);
            $table->string('pertanyaan62f', 9);


            $table->string('pertanyaan63', 9);
            $table->string('pertanyaan64', 9);
            $table->string('pertanyaan65', 9);

            //pertanyaan no.66
            $table->string('pertanyaan66a', 9);
            $table->string('pertanyaan66b', 9);
            $table->string('pertanyaan66c', 9);
            $table->string('pertanyaan66d', 9);
            $table->string('pertanyaan66e', 9);

            //pertanyaan no.67
            $table->string('pertanyaan67a', 9);
            $table->string('pertanyaan67b', 9);
            $table->string('pertanyaan67c', 9);
            $table->string('pertanyaan67d', 9);
            $table->string('pertanyaan67e', 9);

            //pertanyaan no.68
            $table->string('pertanyaan68a', 9);
            $table->string('pertanyaan68b', 9);
            $table->string('pertanyaan68c', 9);
            $table->string('pertanyaan68d', 9);
            $table->string('pertanyaan68e', 9);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaans');
    }
};
