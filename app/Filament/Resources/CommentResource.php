<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-alt-2';


    protected static ?string $modelLabel = 'نظر';

    protected static ?string $pluralModelLabel = 'نظرات';


    protected static ?string $navigationLabel = 'نظرات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->disabled()->label('نام'),
                Forms\Components\TextInput::make('email')->disabled()->label('ایمیل'),
                Forms\Components\TextInput::make('rate')->disabled()->label('امتیاز'),
                Forms\Components\Textarea::make('content')->disabled()->label('نظر'),
                Forms\Components\Checkbox::make('show')->required()->label('نمایش')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->label('نام'),
                Tables\Columns\TextColumn::make('email')->searchable()->label('ایمیل'),
                Tables\Columns\TextColumn::make('rate')->sortable()->label('امتیاز'),
                Tables\Columns\TextColumn::make('content')->toggleable()->label('نظر'),
                Tables\Columns\IconColumn::make('show')->sortable()->trueIcon('heroicon-o-check')->falseIcon('heroicon-o-x')->label('نمایش'),
                Tables\Columns\TextColumn::make('post.title')->searchable()->label('پست مرتبط'),
                Tables\Columns\TextColumn::make('product.title')->searchable()->label('محصول مرتبط')
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return false;
    }

}
