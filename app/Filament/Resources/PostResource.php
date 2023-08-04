<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Archilex\StackedImageColumn\Columns\StackedImageColumn;
use Filament\GlobalSearch\Actions\Action;
use Illuminate\Database\Eloquent\Model;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'content';
    public static function getGloballySearchableAttributes(): array
    {
        return ['title'];
    }

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                    Forms\Components\Grid::make()
                    ->schema([

                        Forms\Components\Select::make('category_id')
                        ->options(
                            \App\Models\Category::all()->pluck('categoryName', 'id')
                        )
                        ->required()
                        ->label('Category'),
                        Forms\Components\Select::make('genres')
                        ->multiple()
                        ->relationship('genres', 'genreName'),




                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->reactive()
                        ->maxLength(100)
                        ->afterStateUpdated(function(Closure $set, $state){
                            $set('slug',Str::slug($state));
                        }),

                    Forms\Components\FileUpload::make('image')
                    ->disk('posts')
                   ,

                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(100),

                    ])->columns(2),
                    Forms\Components\Textarea::make('description')
                        ->required()
                        ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->disk('posts')
                ->circular(),
                Tables\Columns\TextColumn::make('title'),
                // Tables\Columns\TextColumn::make('description')
                // ->limit(50),

                

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                ,
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getGlobalSearchResultActions(Model $record): array
{
    return [
        Action::make('edit')
            ->iconButton()
            ->icon('heroicon-s-pencil')
            ->url(static::getUrl('edit', ['record' => $record])),
    ];
}
}
