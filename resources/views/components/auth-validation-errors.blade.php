@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div style="color: red" class="font-medium">
            {{ __('Yahh, Sepertinya ada error nih !') }}
        </div>

        <ul style="color: red; list-style-type: none;" class="mt-1 list-disc list-inside text-sm ">
            @foreach ($errors->all() as $error)
                @if (count($errors) > 1)
                    <li>{{ $error }}</li>
                @else
                    <li>Ternyata, {{ $error }}</li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
