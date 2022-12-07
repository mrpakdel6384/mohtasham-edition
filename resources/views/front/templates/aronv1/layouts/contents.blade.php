@extends('front.templates.aronv1.master')

@section('maincontent')

    {{$slot}}



@endsection

@section('mstscript')
    {{ $topscript ?? '' }}
@endsection

@section('classTopMenu')
    {{ $classTopMenu ?? 'navbar-dark navbar-floating navbar-sticky' }}
@endsection


@section('topcss')

    {{$css ?? ''}}
@endsection

@section('bottomscript')

    {{$bottomscript ?? ''}}
@endsection
