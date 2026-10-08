<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Project')
                    ->schema([
                        TextInput::make('title')
                            ->label('Nama Project')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('slug', Str::slug($state));
                            }),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'Company Profile' => 'Company Profile',
                                'E-Commerce' => 'E-Commerce',
                                'Landing Page' => 'Landing Page',
                                'Admin System' => 'Admin System',
                                'Web Application' => 'Web Application',
                                'Maintenance' => 'Maintenance',
                            ])
                            ->searchable()
                            ->required(),

                        TextInput::make('client')
                            ->label('Client')
                            ->maxLength(150),

                        TextInput::make('year')
                            ->label('Tahun')
                            ->numeric()
                            ->minValue(2000)
                            ->maxValue(2100),

                        TextInput::make('project_url')
                            ->label('URL Project')
                            ->url()
                            ->maxLength(255),

                        FileUpload::make('thumbnail')
                            ->label('Thumbnail')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('portfolios')
                            ->visibility('public')
                            ->maxSize(5120)
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->required()
                            ->rows(6)
                            ->maxLength(2000)
                            ->columnSpanFull(),

                        Textarea::make('technologies')
                            ->label('Technologies')
                            ->rows(3)
                            ->maxLength(500)
                            ->helperText('Pisahkan teknologi dengan koma. Contoh: Laravel, Tailwind CSS, MySQL.')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Pengaturan')
                    ->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'published' => 'Published',
                                'draft' => 'Draft',
                            ])
                            ->default('published')
                            ->required(),

                        Toggle::make('featured')
                            ->label('Featured Project')
                            ->default(false)
                            ->helperText('Project akan ditampilkan sebagai project unggulan.'),
                    ])
                    ->columns(2),
            ]);
    }
}