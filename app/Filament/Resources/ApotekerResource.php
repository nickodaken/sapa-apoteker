<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApotekerResource\Pages;
use App\Filament\Resources\ApotekerResource\RelationManagers;
use App\Models\Apoteker;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApotekerResource extends Resource
{
    protected static ?string $model = Apoteker::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Nama Apoteker')
                    ->searchable()
                    ->options(User::whereHas('roles', function ($role) {
                        $role->where('id', 2);
                    })->pluck('name', 'id'))
                    ->required()
                    ->live(),
                TextInput::make('stra_no')
                    ->label('Nomor STRA')
                    ->required(),
                Select::make('category')
                    ->label('Ketegori')
                    ->preload()
                    ->options([
                        'Apoteker' => 'Apoteker',
                        'Assistant Apoteker' => 'Assistant Apoteker',
                    ]),
                TextInput::make('alumni')
                    ->required(),
                TextInput::make('experience')
                    ->label('Pengalaman (tahun)')
                    ->numeric()
                    ->required(),
                TextInput::make('practice')
                    ->label('Tempat Praktik')
                    ->nullable(),
                FileUpload::make('image')
                    ->label('Foto Diri')
                    ->disk('public')
                    ->directory('apoteker')
                    ->columnSpanFull()
                    ->required(),
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto Diri')
                    ->circular(),
                TextColumn::make('user.name')
                    ->label('Nama Apoteker')
                    ->searchable(),
                TextColumn::make('stra_no')
                    ->label('Nomor STRA')
                    ->sortable(),
                TextColumn::make('category')
                    ->label('Kategori')
                    ->sortable(),
                TextColumn::make('alumni')
                    ->sortable(),
                TextColumn::make('experience')
                    ->label('Pengalaman')
                    ->suffix(' Tahun')
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Harga')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->sortable(),
                ToggleColumn::make('is_active'),
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
            'index' => Pages\ListApotekers::route('/'),
            'create' => Pages\CreateApoteker::route('/create'),
            'edit' => Pages\EditApoteker::route('/{record}/edit'),
        ];
    }
}
