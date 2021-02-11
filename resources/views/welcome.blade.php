@extends('layouts.backend.master')

@section('title','Dashboard')

@section('content')
    
    <p style="text-align: center">Welcome <a>{{ Auth::user()->name }}</a></p>
    
@endsection

@section('custom_footer_js')
    <script>

        $('#data_table_1').DataTable({
            "pageLength": 50
        });

        $('#data_table_2').DataTable({
            "pageLength": 50
        });

        $('#data_table_3').DataTable({
            "pageLength": 50
        });

        $('#sidebar_dashboard').addClass('current_section');
        // load parsley config (altair_admin_common.js)
        altair_forms.parsley_validation_config();
    </script>
    <script src="bower_components/parsleyjs/dist/parsley.min.js"></script>
    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
@endsection

