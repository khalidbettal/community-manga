<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReplyResource\Pages;
use App\Filament\Resources\ReplyResource\RelationManagers;
use App\Models\Reply;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReplyResource extends Resource
{
    protected static ?string $model = Reply::class;

    protected static ?string $navigationIcon = 'heroicon-o-reply';
    protected static ?string $navigationGroup = 'Chat';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('comment_id')
                    ->required(),
                Forms\Components\TextInput::make('user_id')
                    ->required(),
                Forms\Components\TextInput::make('respond')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('comment_id'),
                // Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('respond'),
                // Tables\Columns\TextColumn::make('created_at')
                    // ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                    // ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageReplies::route('/'),
        ];
    }
}
