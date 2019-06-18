@if ($message = session('success'))
<flash-message :msg="{{ json_encode(['type' => 'success', 'text' => $message])}}"></flash-message>
@elseif ($message = session('error'))
<flash-message :msg="{{ json_encode(['type' => 'error', 'text' => $message])}}"></flash-message>
@else
<flash-message></flash-message>
@endif
