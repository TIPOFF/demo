@extends ('layouts.app')

@section ('content')

<div class="flex justify-center">
    <div class="w-1/2">
        @livewire ('addresses::get-phone')
    </div>
</div>

@endsection