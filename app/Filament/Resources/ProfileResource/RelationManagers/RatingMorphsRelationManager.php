<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\ProfileResource\RelationManagers;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class RatingMorphsRelationManager extends RelationManager
{
    // protected static string $relationship = 'ratings';
    protected static string $relationship = 'ratingMorphs';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                // Tables\Columns\TextColumn::make('id'),
                TextColumn::make('rating.title'),
                // Tables\Columns\TextColumn::make('pivot.user.name'),
                /*
                Tables\Columns\TextColumn::make('user.name')->default(function($record){
                    dddx($record);
                    if($record->pivot->user_id==null){
                        return null;
                    }
                    return $record->pivot->user->name;
                }),
                //*/
                TextColumn::make('value'),
                TextColumn::make('is_winner'),
                TextColumn::make('reward'),
                TextColumn::make('updated_at'),
            ])
            ->filters([
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
