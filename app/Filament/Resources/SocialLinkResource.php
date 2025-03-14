<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialLinkResource\Pages;
use App\Filament\Resources\SocialLinkResource\RelationManagers;
use App\Models\SocialLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
class SocialLinkResource extends Resource
{
    protected static ?string $model = SocialLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('icon')
                ->label('Icon')
                ->options([
                    'bx bxl-facebook' => 'Facebook',
                    'bx bxl-twitter' => 'Twitter',
                    'bx bxl-instagram' => 'Instagram',
                    'bx bxl-linkedin' => 'LinkedIn',
                    'bx bxl-github' => 'GitHub',
                    'bi bi-facebook' => 'Facebook with bg',
                    'bi bi-twitter' => 'Twitter with bg',
                    'bi bi-instagram' => 'Instagram with bg',
                    'bi bi-linkedin' => 'LinkedIn with bg',
                    'bi bi-github' => 'GitHub with bg',
                ])
                ->searchable()
                ->required(),
            TextInput::make('name')
                ->label('Platform Name')
                ->required()
                ->maxLength(255),
            TextInput::make('url')
                ->label('URL')
                ->url()
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('icon')
                ->label('Icon')
                ->size('lg')
                ->getStateUsing(fn ($record) => "<i class='{$record->icon}'></i>")
                ,
            TextColumn::make('name')
                ->label('Platform'),
            TextColumn::make('url')
                ->label('Link')
                ->url(fn ($record) => $record->url)
                ->openUrlInNewTab(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSocialLinks::route('/'),
            'create' => Pages\CreateSocialLink::route('/create'),
            'edit' => Pages\EditSocialLink::route('/{record}/edit'),
        ];
    }
}
