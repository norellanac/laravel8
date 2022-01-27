@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Oops! Something went wrong.'))
@section('color', __('danger'))
