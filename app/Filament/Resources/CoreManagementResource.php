<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\CoreManagement;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CoreManagementResource\Pages;
use App\Filament\Resources\CoreManagementResource\RelationManagers;

class CoreManagementResource extends Resource
{
    protected static ?string $model = CoreManagement::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Name'),

                FileUpload::make('photo')
                    ->required()
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('1:1')
                    ->directory('core-management-photos')
                    ->label('Photo'),

                Select::make('position')
                    ->options([
                        'Ketua' => 'Ketua',
                        'Wakil' => 'Wakil',
                        'Sekretaris Jenderal' => 'Sekretaris Jenderal',
                        'Bendahara 1' => 'Bendahara 1',
                        'Bendahara 2' => 'Bendahara 2',
                    ])
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->label('Position'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->circular()
                    ->label('Photo'),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Name'),

                TextColumn::make('position')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Ketua' => 'success',
                        'Wakil' => 'primary',
                        'Sekretaris Jenderal' => 'info',
                        'Bendahara 1', 'Bendahara 2' => 'warning',
                        default => 'gray',
                    })
                    ->sortable()
                    ->label('Position'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (CoreManagement $record) {
                    if ($record->photo) {
                        Storage::disk('public')->delete($record->photo);
                    }
                }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(function (Collection $records) {
                    foreach ($records as $record) {
                        if ($record->photo) {
                            Storage::disk('public')->delete($record->photo);
                        }
                    }
                }),
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
            'index' => Pages\ListCoreManagement::route('/'),
            'create' => Pages\CreateCoreManagement::route('/create'),
            'edit' => Pages\EditCoreManagement::route('/{record}/edit'),
        ];
    }
}
