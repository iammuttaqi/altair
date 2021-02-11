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
                                <div class="col-md-12">
                                    
                                      <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h3>{{ $getProjectRegistration->categoryId->name }}</h5>
                                        </div>
                                      </div>
                                
                                      <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="reg_name"><b>Name: </b></label>
                                          <span>{{ $getProjectRegistration['reg_name'] }}</span>
                                          
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="reg_email"><b>Email: </b></label>
                                          <span>{{ $getProjectRegistration['reg_email'] }}</span>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="reg_phone"><b>Phone: </b></label>
                                          <span>{{ $getProjectRegistration['reg_phone'] }}</span>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12 mb-3">
                                          <label for="validationCustom04"><b>Message: </b></label>
                                          <span>{{ $getProjectRegistration['reg_message'] }}</span>
                                        </div>
                                      </div>

                                </div>
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
            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }

    </script>


@endsection
