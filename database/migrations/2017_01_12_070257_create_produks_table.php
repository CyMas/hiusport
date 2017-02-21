<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Produk;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode')->unique();
            $table->string('nama_produk');
            $table->text('deskripsi');
            $table->string('foto');
            $table->integer('stok');
            $table->integer('harga');
            $table->timestamps();
        });

        $produk = new Produk;
        $produk->kode = '1001';
        $produk->nama_produk = 'Fairing fiber movi star';
        $produk->deskripsi = "*Full set";
        $produk->foto = 'material/images/1487290505-16708193_1930245033862439_3029038963618690630_n.jpg';
        $produk->stok = '5';
        $produk->harga = '1200000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1002';
        $produk->nama_produk = 'Cover tangki vixion';
        $produk->deskripsi = "*Bahan plastik";
        $produk->foto = 'material/images/1487292834-16711565_1930244667195809_3343410289942994008_n.jpg';
        $produk->stok = '9';
        $produk->harga = '470000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1003';
        $produk->nama_produk = 'Cover tangki vixion model R6';
        $produk->deskripsi = "*Bahan plastik";
        $produk->foto = 'material/images/1487561721-16730337_1930244483862494_7379157269741997731_n.jpg';
        $produk->stok = '10';
        $produk->harga = '480000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1004';
        $produk->nama_produk = 'Cover tangki vixion model R1';
        $produk->deskripsi = "*Old";
        $produk->foto = 'material/images/1487562091-16708427_1930244103862532_5448693593378439603_n.jpg';
        $produk->stok = '15';
        $produk->harga = '520000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1005';
        $produk->nama_produk = 'Tabung shock yamaha vixion';
        $produk->deskripsi = "*Kiri & Kanan";
        $produk->foto = 'material/images/1487562440-16681704_1930242787195997_7261094023122249335_n.jpg';
        $produk->stok = '8';
        $produk->harga = '450000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1006';
        $produk->nama_produk = 'Tabung shock yamaha R15';
        $produk->deskripsi = "*Kiri & Kanan";
        $produk->foto = 'material/images/1487562721-16708261_1930242313862711_76888818397716244_n.jpg';
        $produk->stok = '8';
        $produk->harga = '700000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1007';
        $produk->nama_produk = 'Body yamaha MX KING';
        $produk->deskripsi = "";
        $produk->foto = 'material/images/1487564182-16708483_1930242137196062_7757316261593197838_n.jpg';
        $produk->stok = '8';
        $produk->harga = '750000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1008';
        $produk->nama_produk = 'Cover tangki yamaha R25';
        $produk->deskripsi = "";
        $produk->foto = 'material/images/1487564462-16684025_1930241810529428_6256052599339112169_n.jpg';
        $produk->stok = '4';
        $produk->harga = '350000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1009';
        $produk->nama_produk = 'Cover tangki new vixion';
        $produk->deskripsi = "";
        $produk->foto = 'material/images/1487564610-16665377_1930240650529544_8739435217417236681_o.jpg';
        $produk->stok = '3';
        $produk->harga = '580000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1010';
        $produk->nama_produk = 'Cover tangki yamaha R15';
        $produk->deskripsi = "";
        $produk->foto = 'material/images/1487564782-16681812_1930240287196247_7895318394544689060_n.jpg';
        $produk->stok = '4';
        $produk->harga = '350000';
        $produk->save();

        $produk = new Produk;
        $produk->kode = '1011';
        $produk->nama_produk = 'Cover arm vixion';
        $produk->deskripsi = "";
        $produk->foto = 'material/images/1487564995-16728994_1930239807196295_6766663005626379090_n.jpg';
        $produk->stok = '3';
        $produk->harga = '200000';
        $produk->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produks');
    }
}
