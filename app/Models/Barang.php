<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';
    protected $fillable = ['kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual'];

    public function kategori()
    {
        return $this->belongsTo(m_kategori::class, 'kategori_id', 'kategori_id');
    }

    public function stoks()
    {
        return $this->hasMany(t_stok::class, 'barang_id', 'barang_id');
    }

    public function penjualanDetails()
    {
        return $this->hasMany(t_penjualan_detail::class, 'barang_id', 'barang_id');
    }
}
