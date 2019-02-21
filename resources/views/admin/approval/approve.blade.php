@extends('layouts.app')

<script type="text/javascript">
    function confirm_delete() {
        return confirm('are you sure?');
    }
</script>

@section('content')

{{$user->name}}

<a href="{{ route('admin.approval.approve', $user->id) }}"
   class="btn btn-primary btn-sm" onclick="confirm_delete()">Approve</a>

@endsection
