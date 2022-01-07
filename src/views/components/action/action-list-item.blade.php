@if ($type=='show')
    <a href="{{ $url }}" class="dropdown-item"><i class="fas fa-eye"></i> {{ $slot->isNotEmpty() ? $slot : 'Show' }}</a>
@elseif ($type=='edit')
    <a href="{{ $url }}" class="dropdown-item"><i class="fas fa-pencil-alt"></i> {{ $slot->isNotEmpty() ? $slot : 'Edit' }}</a>
@elseif ($type=='destroy')
    <a href="javascript:" onclick="deleted('{{$url}}')" class="dropdown-item text-danger"><i class="fas fa-trash"></i> {{ $slot->isNotEmpty() ? $slot : 'Delete' }}</a>
@elseif ($type=='media')
    <a href="{{ $url }}" class="dropdown-item"><i class="fas fa-upload"></i> {{ $slot->isNotEmpty() ? $slot : 'Media Upload' }}</a>
@elseif ($type=='activity')
    @if ($activityStatus==2 || $activityStatus==0)
        <a href="javascript:" onclick="activity('{{ $url }}/1')" class="dropdown-item"><i class="fas fa-check-square-o"></i> {{ $slot->isNotEmpty() ? $slot : 'Active' }}</a>
    @elseif ($activityStatus==1 || $activityStatus==0)
        <a href="javascript:" onclick="activity('{{ $url }}/2')" class="dropdown-item"><i class="fas fa-ban"></i> {{ $slot->isNotEmpty() ? $slot : 'Inactive' }}</a>
    @endif
@else
    <a {{ $attributes }} class="dropdown-item">{{ $slot }}</a>
@endif
