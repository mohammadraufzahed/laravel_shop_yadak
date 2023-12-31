<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieMediaLibraryMultipleFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $modelLabel = 'محصول';

    protected static ?string $pluralModelLabel = 'محصولات';


    protected static ?string $navigationLabel = 'محصولات';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)->schema([
                    Forms\Components\TextInput::make('title')->required()->label('عنوان'),
                    Forms\Components\TextInput::make('slug')->required()->regex('/^[a-z0-9]+(?:-[a-z0-9]+)*$/i')->label('آدرس'),
                    Forms\Components\TextInput::make('price')->numeric()->minValue(0)->required()->label('قیمت'),
                    Forms\Components\TextInput::make('summery')->required()->label('خلاصه'),
                    SpatieMediaLibraryFileUpload::make('image')->collection('images')->enableReordering()->multiple()->responsiveImages()->label('عکس ها'),
                    Forms\Components\Select::make('category_id')->relationship('category', 'title')->label('دسته بندی'),
                    Forms\Components\Select::make('user_id')->relationship('user', 'name')->label('کاربر')->hiddenOn('edit'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->label('ایدی'),
                SpatieMediaLibraryImageColumn::make('image')->collection('images')->toggleable()->label('عکس ها'),
                Tables\Columns\TextColumn::make('title')->searchable()->label('عنوان'),
                Tables\Columns\TextColumn::make('slug')->searchable()->label('آدرس'),
                Tables\Columns\TextColumn::make('price')->sortable()->label('قیمت')
            ])
            ->filters([
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
