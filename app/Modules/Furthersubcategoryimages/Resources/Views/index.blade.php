@extends('layouts.backend.master')

@section('title', 'Further Sub Category Images')

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
                                <h2 class="heading_b"><span class="uk-text-truncate">Further Sub Category Images List</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-overflow-container uk-margin-bottom">
                                <div style="padding: 5px;margin-bottom: 10px;" class="dt_colVis_buttons"></div>
                                <table class="uk-table" cellspacing="0" width="100%" id="data_table" >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Further Sub Category Name</th>
                                        <th>Image</th>
                                        <th>Note</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Further Sub Category Name</th>
                                        <th>Image</th>
                                        <th>Note</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1; ?>
                                    @foreach($furthersubcategoryimagess as $key => $furthersubcategoryimages)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $furthersubcategoryimages->furtherSubCategoryImagesName->name }}</td>
                                            <td>
                                                <img src="{{ asset($furthersubcategoryimages['image_url']) }}" width="60" height="50" >
                                            </td>

                                            <td>
                                                {{ $furthersubcategoryimages['note'] }}
                                            </td>
                                        
                                            <td class="uk-text-center">
                                                <a href="{!! route('further_subcategory_images_cedit',$furthersubcategoryimages['id']) !!}" class="batch-edit"><i title="Edit" class=" material-icons">&#xE254;</i></a>
                                                <a onclick="deleterow(this);return false;" href="{{ route('further_subcategory_images_delete',$furthersubcategoryimages['id']) }}"><i data-uk-tooltip="{pos:'top'}" title="Delete" class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Add branch plus sign -->

                            <div class="md-fab-wrapper branch-create">
                                <a id="add_branch_button" href="{!! route('further_subcategory_images_create') !!}" class="md-fab md-fab-accent branch-create">
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
            $("#sidebar_furthersubcategory").addClass('current_section');
        }

        function deleterow(link) {

            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }
        $('#sidebar_furthersubcategory').addClass('current_section');

    </script>
@endsection

@section('custom_footer_js')

    <script type="text/javascript">
        $('#data_table').DataTable({
            "pageLength": 50
        });
    </script>
@endsection

