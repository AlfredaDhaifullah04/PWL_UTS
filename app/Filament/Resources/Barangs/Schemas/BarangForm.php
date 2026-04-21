<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Schemas\Schema;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'kategori_nama')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('barang_kode')
                    ->label('Kode Barang')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('barang_nama')
                    ->label('Nama Barang')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('harga_beli')
                    ->label('Harga Beli')
                    ->numeric()
                    ->required(),
                \Filament\Forms\Components\TextInput::make('harga_jual')
                    ->label('Harga Jual')
                    ->numeric()
                    ->required(),
            ]);
    }
}
