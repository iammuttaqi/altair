@extends('layouts.backend.master')

@section('title', 'Project Register')

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
                                <h2 class="heading_b"><span class="uk-text-truncate">Project Register List</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-overflow-container uk-margin-bottom">
                                <table class="uk-table" cellspacing="0" width="100%" id="data_table" >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1;?>
                                        @foreach($allProjectRegistration as $key => $getSingleProjectRegister)
                                        <tr>
                                           <td>{{ $i++ }}</td>
                                           <td>{{ $getSingleProjectRegister['reg_name'] }}</td>
                                           <td>{{ $getSingleProjectRegister['reg_email'] }}</td>
                                           <td>{{ $getSingleProjectRegister['reg_phone'] }}</td>
                                           <td class="uk-text-center">
                                                <a href="{!! route('project_registration_view', ['id'=>$getSingleProjectRegister->id]) !!}" class="batch-eye"><i title="View" class=" material-icons">&#xE254;</i></a>
                                                <a onclick="deleterow(this);return false;" href="{{ route('project_registration_delete',$getSingleProjectRegister->id) }}"><i data-uk-tooltip="{pos:'top'}" title="Delete" class="material-icons">&#xE872;</i></a>    
                                           </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Add branch plus sign -->

                            <div class="md-fab-wrapper branch-create">
                                <a id="add_branch_button" href="" class="md-fab md-fab-accent branch-create">
                                    <i class="material-icons">&#xE145;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom_footer_js')
    <script type="text/javascript">
        $('#data_table').DataTable({
            "pageLength": 50
        });
    </script>

    <script>


        function deleterow(link) {
            console.log(link);
            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }

    </script>


@endsection
