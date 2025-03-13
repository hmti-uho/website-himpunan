<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Division;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DivisionMember;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DivisionMemberResource\Pages;
use App\Filament\Resources\DivisionMemberResource\RelationManagers;

class DivisionMemberResource extends Resource
{
    protected static ?string $model = DivisionMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('division_id')
                    ->label('Division')
                    ->options(Division::all()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),

                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('photo')
                    ->label('Photo')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('1:1')
                    ->directory('division-members-photos')
                    ->required(),

                Forms\Components\Select::make('position')
                    ->label('Position')
                    ->options([
                        'Ketua' => 'Ketua',
                        'Anggota' => 'Anggota',
                    ])
                    ->default('Anggota')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Photo')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('division.name')
                    ->label('Division')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('position')
                    ->label('Position')
                    ->colors([
                        'primary' => 'Anggota',
                        'success' => 'Ketua',
                    ]),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('division_id')
                    ->label('Divisi')
                    ->options(Division::all()->pluck('name', 'id')),

                Tables\Filters\SelectFilter::make('position')
                    ->label('Posisi')
                    ->options([
                        'Ketua' => 'Ketua',
                        'Anggota' => 'Anggota',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (DivisionMember $record) {
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
            'index' => Pages\ListDivisionMembers::route('/'),
            'create' => Pages\CreateDivisionMember::route('/create'),
            'edit' => Pages\EditDivisionMember::route('/{record}/edit'),
        ];
    }
}
