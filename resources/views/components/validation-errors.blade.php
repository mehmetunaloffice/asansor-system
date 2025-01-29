@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium fw-bold pt-5 pb-5 p-4">
            
           @lang('auth.someSomethingwar')
    </div>

        <ul class="mt-3 list-disc list-inside text-sm text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
