@extends('layouts.backend.master')

@section('title', 'Profile ')

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
                                <h2 class="heading_b"><span class="uk-text-truncate"> Profile List</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-overflow-container uk-margin-bottom">
                                <div style="padding: 5px;margin-bottom: 10px;" class="dt_colVis_buttons"></div>
                                <table class="uk-table" cellspacing="0" width="100%" id="data_table" >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Company Name</th>
                                        <!--<th>Company Address</th>-->
                                        <th>Company Email</th>
                                        <th>Company Phone</th>
                                        <!--<th>Company Slogan</th>-->
                                        <th>Publication Status</th>
                                        <th>Company Logo</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Company Name</th>
                                        <!--<th>Company Address</th>-->
                                        <th>Company Email</th>
                                        <th>Company Phone</th>
                                        <th>Company Slogan</th>
                                        <th>Publication Status</th>
                                        <!--<th>Company Logo</th>-->
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1; ?>
                                    @foreach($profiles as $profile)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $profile->company_name }}</td>
                                            <!--<td>{{ $profile->company_address }}</td>-->
                                            <td>{{ $profile->company_email }}</td>
                                            <td>{{ $profile->company_phone }}</td>
                                            <!--<td>{{ $profile->company_slogan }}</td>-->
                                            <td>{{ $profile->publication_status == '1' ? 'Published' : 'Unpublished'  }}</td>
                                            <td><img src="{{ url('public/'.$profile->company_logo) }}" width="60" height="50" > </td>
                                            <td class="uk-text-center">
                                                <a href="{!! route('edit-profile',$profile->id) !!}" class="batch-edit"><i title="Edit" class=" material-icons">&#xE254;</i></a>
                                                <a onclick="deleterow(this);return false;" href="{{ route('delete-profile',$profile->id) }}"><i data-uk-tooltip="{pos:'top'}" title="Delete" class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Add branch plus sign -->

                            <!--<div class="md-fab-wrapper branch-create">-->
                            <!--    <a id="add_branch_button" href="{!! route('add-profile') !!}" class="md-fab md-fab-accent branch-create">-->
                            <!--        <i class="material-icons">&#xE145;</i>-->
                            <!--    </a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload =  function (ev) {
            $("#sidebar_profile").addClass('current_section');
        }

        function deleterow(link) {

            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }
        $('#sidebar_profile').addClass('current_section');



    </script>
@endsection

@section('custom_footer_js')
<script type="text/javascript">
    $('#data_table').DataTable({
        "pageLength": 50
    });
</script>
@endsection

