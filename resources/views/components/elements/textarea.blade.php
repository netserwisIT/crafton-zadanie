<div class="mt-2">
    <textarea 
        name="{{ $name ?? '' }}" 
        id="{{ $id ?? '' }}" 
        class="block min-w-0 grow p-2 text-body-base rounded-lg bg-white dark:bg-dark min-h-[50px] dark:text-text-on-dark border border-stroke-base placeholder:text-text dark:placeholder:text-text-on-dark focus:outline-none focus:border-primary user-invalid:border-[#B3261E] user-invalid:bg-[#f3eae8] user-invalid:text-[#B3261E] user-invalid:placeholder:text-[#B3261E] {{ $class ?? '' }}" 
        placeholder="{{ $placeholder ?? '' }}"
        {{ $attributes->merge(['required' => $required ?? false]) }}
        @if(isset($value)) rows="{{ $rows ?? 3 }}" @endif
    >@if(isset($value)){{ $value }}@endif</textarea>
</div>