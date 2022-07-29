<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sets', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->longText('pbid')->nullable();
            $table->longText('also_known_as')->nullable();
            $table->longText('description')->nullable();
            $table->longText('hq_email')->nullable();
            $table->longText('location_city')->nullable();
            $table->longText('location_country')->nullable();
            $table->longText('active_management')->nullable();
            $table->longText('active_board_members')->nullable();
            $table->longText('year_founded')->nullable();
            $table->longText('website')->nullable();
            $table->longText('company_financial_status')->nullable();
            $table->longText('bussiness_status')->nullable();
            $table->longText('ownership_status')->nullable();
            $table->longText('universe')->nullable();
            $table->longText('employees')->nullable();
            $table->longText('most_recent_raised_to_date')->nullable();
            $table->longText('most_recent_financing_status_note')->nullable();
            $table->longText('most_recent_financing_status_date')->nullable();
            $table->longText('active_investorrs_names')->nullable();
            $table->longText('active_investorrs_id')->nullable();
            $table->longText('active_investors')->nullable();
            $table->longText('deal_count')->nullable();
            $table->longText('most_recent_deal_id')->nullable();
            $table->longText('deal_type_1')->nullable();
            $table->longText('deal_type_2')->nullable();
            $table->longText('deal_type_3')->nullable();
            $table->longText('most_recent_deal_type')->nullable();
            $table->longText('most_recent_deal_type_2')->nullable();
            $table->longText('most_recent_deal_type_3')->nullable();
            $table->longText('most_recent_deal_date')->nullable();
            $table->longText('most_recent_deal_size')->nullable();
            $table->longText('most_recent_deal_native_currency')->nullable();
            $table->longText('most_recent_pre_valuation')->nullable();
            $table->longText('most_recent_post_valuation')->nullable();
            $table->longText('ptdr')->nullable();
            $table->longText('ld_ac_ad')->nullable();
            $table->longText('classification')->nullable();
            $table->longText('domain')->nullable();
            $table->longText('category_1')->nullable();
            $table->longText('comments')->nullable();
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
        Schema::dropIfExists('data_sets');
    }
}
