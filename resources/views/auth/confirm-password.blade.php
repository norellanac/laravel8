@extends('layouts.guest')
@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
            {{ $error }}.
        </div>
    @endforeach
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <!-- Password -->
        <div>
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />
        </div>

        <div class="flex justify-end mt-4">
            <x-button>
                {{ __('Confirm') }}
            </x-button>
        </div>
    </form>
@endsection
