<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistanceProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "DROP FUNCTION IF EXISTS geoDistance;
        CREATE FUNCTION geoDistance(lat1 DECIMAL(10,7), lon1 DECIMAL(10,7), lat2 DECIMAL(10,7), lon2 DECIMAL(10,7) )
        RETURNS DECIMAL(10,7)
        BEGIN
        RETURN (6371 * acos(cos(radians(lat2)) * cos(radians(lat1)) * cos(radians(lon1)-radians(lon2)) + sin(radians(lat2)) * sin(radians(lat1))));
        END;";
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = "DROP FUNCTION IF EXISTS geoDistance";
        DB::connection()->getPdo()->exec($sql);
    }
}
