@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashaboard.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.open-modal').on('click', function() {
                // var memberId = $(this).data('member-id');
                $('#update-member-slide').modal('show');
            });
        });
    </script>
@endsection

@section('content')
    @include('components.dashboard.admindashboard.dashboard-admin')
@endsection
