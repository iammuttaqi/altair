@extends('layouts.backend.master')

@section('title', 'Input Field')

@section('content')
    @include('layouts.backend.includes.notice')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-10-10">
                    <div class="md-card">

                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Input Field List</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-overflow-container uk-margin-bottom">
                                <table class="uk-table" cellspacing="0" width="100%" id="data_table" >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Input Field Name</th>
                                        <th>Code</th>
                                        <th>Slug Name</th>
                                        <th>Type</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Input Field Name</th>
                                        <th>Code</th>
                                        <th>Slug Name</th>
                                        <th>Type</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach($input_fields as $input_field)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $input_field->name }}</td>
                                                <td>{{ $input_field->code }}</td>
                                                <td>{{ $input_field->slug_name }}</td>
                                                <td>{{ $input_field->type == 1 ? 'File' : '' }}</td>
                                                <td class="uk-text-center">
                                                    <a href="{!! route('inputfield_edit', $input_field->id) !!}" class="batch-edit"><i title="Edit" class=" material-icons">&#xE254;</i></a>
                                                    <a onclick="deleterow(this);return false;" href="{{ route('inputfield_delete', $input_field->id) }}">
                                                        <i data-uk-tooltip="{pos:'top'}" title="Delete" class="material-icons">&#xE872;</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Add branch plus sign -->

                            <div class="md-fab-wrapper branch-create">
                                <a id="add_branch_button" href="{!! route('inputfield_create') !!}" class="md-fab md-fab-accent branch-create">
                                    <i class="material-icons">&#xE145;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload =  function (ev) {
            $("#sidebar_input_field").addClass('current_section');
        }

        function deleterow(link) {

            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }

        $('#sidebar_input_field').addClass('current_section');

    </script>

@endsection

@section('custom_footer_js')
    <script type="text/javascript">
        $('#data_table').DataTable({
            "pageLength": 50
        });
    </script>
@endsection
