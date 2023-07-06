@extends('layouts.app')

@section('content')
    <x-index.main-hero />
    <x-index.brands />
    <x-index.showcase />
    <x-index.latest-products :products="$products" />
@endsection
