@if ($errors->{ $bag ?? 'default' }->any())
<ul class="field mt-6">
    @foreach ($errors->{ $bag ?? 'default' }->all() as $error)
    <li class="text-sm text-red-600">{{ $error }}</li>
    @endforeach
</ul>
@endif