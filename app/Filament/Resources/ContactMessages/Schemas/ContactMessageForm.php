<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Pengirim')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->disabled(),

                        TextInput::make('company')
                            ->label('Instansi / Perusahaan')
                            ->disabled(),

                        TextInput::make('email')
                            ->label('Email')
                            ->disabled(),

                        TextInput::make('phone')
                            ->label('No. Telepon / WhatsApp')
                            ->disabled(),

                        TextInput::make('service')
                            ->label('Layanan')
                            ->disabled(),

                        Textarea::make('message')
                            ->label('Pesan')
                            ->rows(8)
                            ->disabled()
                            ->columnSpanFull(),

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'new' => 'Baru',
                                'read' => 'Sudah Dibaca',
                                'replied' => 'Sudah Dibalas',
                                'archived' => 'Diarsipkan',
                            ])
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }
}