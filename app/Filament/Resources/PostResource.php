<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\Grid;

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
                    Forms\Components\TextInput::make('title')->required()->label('عنوان'),
                    Forms\Components\TextInput::make('slug')->required()->label('آدرس')->regex('/^[a-z0-9]+(?:-[a-z0-9]+)*$/i'),
                    Forms\Components\Select::make('user_id')->relationship('user', 'name')->label('کاربر')->hiddenOn('edit'),
                    SpatieMediaLibraryFileUpload::make("cover")->collection('covers')->responsiveImages()->label('عکس'),
                    TiptapEditor::make('content')->required()->label('مطلب')->profile('default')->extraInputAttributes(['style' => 'min-height: 250px;']),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('cover')->collection('covers')->label('عکس'),
                Columns\TextColumn::make('title')->searchable()->label('عنوان'),
                Columns\TextColumn::make('slug')->searchable()->label('آدرس'),
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
