@if ($message = session('success'))
<flash-message :msg="{{ json_encode(['type' => 'success', 'text' => $message])}}"></flash-message>
@elseif ($message = session('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@elseif ($message = session('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@elseif ($message = session('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@else
<flash-message></flash-message>
@endif
