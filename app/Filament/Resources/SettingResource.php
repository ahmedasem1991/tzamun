<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Checkbox;

use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Checkbox::make('show_analysis_section')
                ->label('Show Analysis Section')
                ->default(true),
                Checkbox::make('show_services_section')->label('Show Services Section')->default(true),
                Checkbox::make('show_about_us_section')->label('Show About Us Section')->default(true),
                Checkbox::make('show_partner_section')->label('Show Partner Section')->default(true),
                Checkbox::make('show_discuss_section')->label('Show Discuss Section')->default(true),
                Checkbox::make('show_contact_us_section')->label('Show Contact Us Section')->default(true),
                Checkbox::make('show_teams_section')->label('Show Teams Section')->default(true),

            ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\BooleanColumn::make('show_analysis_section')->label('Analysis'),
                Tables\Columns\BooleanColumn::make('show_services_section')->label('Services'),
                Tables\Columns\BooleanColumn::make('show_about_us_section')->label('About Us'),
                Tables\Columns\BooleanColumn::make('show_partner_section')->label('Partners'),
                Tables\Columns\BooleanColumn::make('show_discuss_section')->label('Discuss'),
                Tables\Columns\BooleanColumn::make('show_contact_us_section')->label('Contact Us'),
                Tables\Columns\BooleanColumn::make('show_teams_section')->label('Teams'),

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
            'index' => Pages\ListSettings::route('/'),
            // 'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel(): string
    {
        return 'اعداد';
    }

    public static function getPluralModelLabel(): string
    {
        return 'الاعدادات';
    }
}
