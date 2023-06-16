<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\Grid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $modelLabel = 'مطلب';

    protected static ?string $pluralModelLabel = 'مطالب';


    protected static ?string $navigationLabel = 'مطالب';

    public static function form(Form $form): Form
    {
        return $form::make()->schema([
            Grid::make(2)
                ->schema([
                    Forms\Components\TextInput::make('title')->required()->unique()->name('عنوان'),
                    Forms\Components\TextInput::make('slug')->required()->unique()->name('آدرس')->regex('/^[a-z0-9]+(?:-[a-z0-9]+)*$/i'),
                    Forms\Components\Select::make('user_id')->relationship('user', 'name')->name('کاربر')->hiddenOn('edit'),
                    TiptapEditor::make('content')->required()->name('مطلب')->profile('default')->extraInputAttributes(['style' => 'min-height: 250px;']),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('title'),
                Columns\TextColumn::make('slug'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
