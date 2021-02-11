@extends('layouts.backend.master')

@section('title', 'Sub Category ')

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
                                <h2 class="heading_b"><span class="uk-text-truncate">Sub Category List</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-overflow-container uk-margin-bottom">
                                <div style="padding: 5px;margin-bottom: 10px;" class="dt_colVis_buttons"></div>
                                <table class="uk-table" cellspacing="0" width="100%" id="data_table" >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Sub Category Name</th>
                                        <th>Category Name</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Sub Category Name</th>
                                        <th>Category Name</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($sub_categories as $key => $sub_category)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $sub_category->name }}</td>
                                            <td>{{ $sub_category->categoryId->name }}</td>
                                            <td>{{ $sub_category->created_at }}</td>
                                            <td>{{ $sub_category->updated_at }}</td>
                                            <td class="uk-text-center">
                                                <a href="{!! route('sub_category_edit',['module_id'=>$module_id,'category_id' => $sub_category->category_id , 'sub_category_id'=>$sub_category->id]) !!}" class="batch-edit"><i title="Edit" class=" material-icons">&#xE254;</i></a>

                                                @if ($sub_category->id != 65 && $sub_category->id != 66)
                                                    <a onclick="deleterow(this);return false;" href="{{ route('sub_category_delete',['module_id'=>$module_id, 'sub_category_id'=>$sub_category->id]) }}"><i data-uk-tooltip="{pos:'top'}" title="Delete" class="material-icons">&#xE872;</i></a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Add branch plus sign -->

                            <div class="md-fab-wrapper branch-create">
                                <a id="add_branch_button" href="{!! route('sub_category_create', ['module_id'=>$module_id]) !!}" class="md-fab md-fab-accent branch-create">
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
        function deleterow(link) {

            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }
    </script>
@endsection

@section('custom_footer_js')
<script type="text/javascript">
    $('#data_table').DataTable({
        "pageLength": 50
    });

    $('#{{ $module->slug."_".$module->id }}').addClass('current_section');
    $('#sidebar_dashboard_sub_category_{{ $module->id }}').addClass('act_item');

</script>
@endsection

