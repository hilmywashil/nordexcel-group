<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Testimonial')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(100),

                        TextInput::make('company')
                            ->label('Perusahaan')
                            ->maxLength(150),

                        TextInput::make('position')
                            ->label('Jabatan')
                            ->maxLength(100),

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('testimonials')
                            ->visibility('public')
                            ->maxSize(5120),

                        Textarea::make('content')
                            ->label('Testimonial')
                            ->required()
                            ->rows(6)
                            ->maxLength(1000)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Pengaturan')
                    ->schema([
                        Select::make('rating')
                            ->label('Rating')
                            ->options([
                                5 => '5 Bintang',
                                4 => '4 Bintang',
                                3 => '3 Bintang',
                                2 => '2 Bintang',
                                1 => '1 Bintang',
                            ])
                            ->default(5)
                            ->required(),

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'published' => 'Published',
                                'draft' => 'Draft',
                            ])
                            ->default('published')
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }
}