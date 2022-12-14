@extends('front.templates.royal.master')

@section('maincontent')

    {{$slot}}



@endsection

@section('masterscript')
    {{ $script ?? '' }}
@endsection
