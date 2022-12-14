@extends('front.templates.aron.master')

@section('maincontent')

    {{$slot}}



@endsection

@section('masterscript')
    {{ $script ?? '' }}
@endsection

@section('classTopMenu')
    {{ $classTopMenu ?? 'fixed-top' }}
@endsection


@section('topcss')

    {{$topcss ?? ''}}
@endsection
