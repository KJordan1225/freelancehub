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
        Schema::table('my_jobs', function (Blueprint $table) {
            $table->string('job_experience');
            $table->string('job_pay_type');
            $table->string('job_duration');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('my_jobs', function (Blueprint $table) {
            if (Schema::hasColumn('my_jobs', 'job_experience')){
                $table->dropColumn('job_experience');	
            }
            if (Schema::hasColumn('my_jobs', 'job_pay_type')){
                $table->dropColumn('job_pay_type');	
            }
            if (Schema::hasColumn('my_jobs', 'job_duration')){
                $table->dropColumn('job_duration');	
            }
            if (Schema::hasColumn('my_jobs', 'user_id')){
                $table->dropColumn('user_id');	
            }
        });
    }
};
