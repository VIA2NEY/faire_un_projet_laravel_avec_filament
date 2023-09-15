<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// Pour le filtre
use Filament\Tables\Filters\Filter;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // les champs du formulaire de creation 
                Forms\Components\TextInput::make('nom')->required(),
                Forms\Components\TextInput::make('prenom')->required(),
                Forms\Components\TextInput::make('Societe')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //qu'est ce que on affiche dans le tableau cree automatiquement
                Tables\Columns\TextColumn::make('nom')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('prenom'),
                Tables\Columns\TextColumn::make('Societe'),

            ])
            ->filters([
                //
                // Filter::make('nom')
                //     ->label('Trier par nom')
                //     ->options([
                //         'asc' => 'Croissant',
                //         'desc' => 'Décroissant',
                //     ])
                //     ->default('asc'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }    
}
