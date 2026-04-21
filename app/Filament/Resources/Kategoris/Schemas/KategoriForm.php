<?php

namespace App\Filament\Resources\Kategoris\Schemas;

use Filament\Schemas\Schema;

class KategoriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('kategori_kode')
                    ->label('Kode Kategori')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('kategori_nama')
                    ->label('Nama Kategori')
                    ->required(),
            ]);
    }
}
