<x-button red label="Approve" href="{{ route('approval.approve', ['id' => $row->id]) }}" target="_self"/>
<x-button gray label="Decline" href="{{ route('approval.decline', ['id' => $row->id]) }}" target="_self"/>

