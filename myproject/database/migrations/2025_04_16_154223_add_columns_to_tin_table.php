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
         Schema::table('tin', function (Blueprint $table) {
             $table->string('tieuDe')->nullable();
             $table->text('tomTat')->nullable();
             $table->string('urlHinh')->nullable();
             $table->date('ngayDang')->nullable();
             $table->text('noiDung')->nullable();
             $table->integer('idLT')->nullable();
             $table->integer('xem')->default(0);
             $table->tinyInteger('noiBat')->default(0);
             $table->tinyInteger('anHien')->default(1);
             $table->string('tags', 2000)->nullable();
             $table->string('lang')->nullable();
         });
     }

     /**
      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::table('tin', function (Blueprint $table) {
             $table->dropColumn('tieuDe');
             $table->dropColumn('tomTat');
             $table->dropColumn('urlHinh');
             $table->dropColumn('ngayDang');
             $table->dropColumn('noiDung');
             $table->dropColumn('idLT');
             $table->dropColumn('xem');
             $table->dropColumn('noiBat');
             $table->dropColumn('anHien');
             $table->dropColumn('tags');
             $table->dropColumn('lang');
         });
     }
 };
