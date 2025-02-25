<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Filament\Resources\AboutUsResource\RelationManagers;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('header_en')->label('Section Header (English)')->required(),
                Textarea::make('header_ar')->label('Section Header (Arabic)')->required(),
                TextInput::make('vision_en')->label('Vision (English)')->required(),
                TextInput::make('vision_ar')->label('Vision (Arabic)')->required(),
                Textarea::make('vision_description_en')->label('Vision Description (English)')->required(),
                Textarea::make('vision_description_ar')->label('Vision Description (Arabic)')->required(),
                TextInput::make('mission_en')->label('Mission (English)')->required(),
                TextInput::make('mission_ar')->label('Mission (Arabic)')->required(),
                Textarea::make('mission_description_en')->label('Mission Description (English)')->required(),
                Textarea::make('mission_description_ar')->label('Mission Description (Arabic)')->required(),
                FileUpload::make('logo')
                    ->label('About Us Logo')
                    ->image()
                    ->directory('about-logos') // Store in storage/app/public/about-logos
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('vision_en')->label('Vision (English)'),
                TextColumn::make('mission_en')->label('Mission (English)'),
                ImageColumn::make('logo')->label('Logo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
