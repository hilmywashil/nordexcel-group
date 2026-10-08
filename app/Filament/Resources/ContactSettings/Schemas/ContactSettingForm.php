<?php

namespace App\Filament\Resources\ContactSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Kontak Website')
                    ->description('Informasi ini akan digunakan pada halaman kontak, footer, dan bagian website lainnya.')
                    ->schema([
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(150)
                            ->placeholder('contoh@email.com'),

                        TextInput::make('whatsapp')
                            ->label('WhatsApp')
                            ->maxLength(30)
                            ->placeholder('+62 838 5337 1584')
                            ->helperText('Gunakan format nomor yang dapat digunakan untuk WhatsApp.'),

                        TextInput::make('location')
                            ->label('Lokasi')
                            ->maxLength(255)
                            ->placeholder('Bandung, Jawa Barat, Indonesia')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}