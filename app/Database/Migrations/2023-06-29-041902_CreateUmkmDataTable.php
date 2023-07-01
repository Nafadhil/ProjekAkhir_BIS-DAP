<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUmkmDataTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true,
            ],
            'tanggal' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            "nama" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "kelamin" => [
                "type" => "VARCHAR",
                "constraint" => "10",
            ],
            "alamat" => [
                "type" => "VARCHAR",
                "constraint" => "10000",
            ],
            "kecamatan" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "produk1" => [
                "type" => "VARCHAR",
                "constraint" => "1000",
            ],
            "produk2" => [
                "type" => "VARCHAR",
                "constraint" => "1000",
            ],
            "produk3" => [
                "type" => "VARCHAR",
                "constraint" => "1000",
            ],
            "produk4" => [
                "type" => "VARCHAR",
                "constraint" => "1000",
            ],
            "kategori" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('umkmdata', true); //If NOT EXISTS create table umkmdata
    }

    public function down()
    {
        $this->forge->dropTable('umkmdata', true); //If Exists drop table umkmdata
    }
}