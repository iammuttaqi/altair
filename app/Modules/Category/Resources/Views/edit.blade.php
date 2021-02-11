@inject('helper', 'App\Lib\Helpers')
@extends('layouts.backend.master')

@section('title', 'Category Edit')

@section('content')
    @include('layouts.backend.includes.notice')
    <div class="uk-grid" ng-controller="InvoiceController">
        <div class="uk-width-large-10-10">
            @if(Session::has('msg'))
                <div class="uk-alert uk-alert-success" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    {!! Session::get('msg') !!}
                </div>
            @endif

            {!! Form::open(['url' => route("category_update",['category_id'=>$category->id, 'module_id'=>$module_id]), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']) !!}

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Update Category</span></h2>
                                <div class="uk-width-medium-1-3">

                                </div>
                            </div>
                        </div>
                        <div class="user_content">
                            <div class="uk-margin-top">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="modules_id">Module Name<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <select class="md-input" name="modules_id" id="modules_id" class="form-control" disabled>

                                            @foreach($modules as $modules)
                                                <option value="{{ $modules->id }}" @if($modules->id == $category->modules_id) selected readonly @endif>{{ $modules->name }}</option>
                                            @endforeach

                                        </select>
                                        @if($errors->has('modules_id'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('modules_id')!!}</span>
                                        @endif
                                    </div>
                                    <input type="hidden" name="modules_id" id="modules_id" value="{{ $category->modules_id }}" >
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="category_name">Category Name<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="name">Category Name</label>
                                        <input class="md-input" type="text" id="category_name" name="category_name" value="{{ $category->name }}" required="required" readonly>
                                        @if($errors->has('category_name'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('category_name')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-4-5">
                                        <table class="uk-table">
                                            <thead>
                                            <tr>
                                                <th colspan="3">Category Values Input Fields</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($category_input_values as $key => $category_input_value)
                                                <tr>
                                                    <td>{{ $category_input_value->name }}</td>
                                                    <td>{!! $helper->setForCategoryValues($category['id'], $category_input_value['input_fields_id']) !!}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-2-5">
                                        <table class="uk-table">
                                            <thead>
                                            <tr>
                                                <th colspan="3">All Sub Category Input Value Fields</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($input_fields as $input_field)
                                                <tr>
                                                    <td>{{ $input_field->name }}</td>
                                                    <td><input type="checkbox" name="input_fields_id[{{ $input_field->id }}]" id="input_fields_id_{{ $input_field->id }}" value="{{ $input_field->id }}" {{ (isset($sub_category_input_field[$input_field->id]) ? 'checked' : '') }} data-md-icheck/> </td>
                                                    <td><input class="md-input" type="text" name="sub_cat_input_name[{{ $input_field->id }}]" id="_cat_input_name{{ $input_field->id }}" value="{{ (isset($sub_category_input_field[$input_field->id]) ? $sub_category_input_field[$input_field->id] : '') }}"/> </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="uk-grid uk-ma" data-uk-grid-margin>
                                    <div class="uk-width-1-1 uk-float-left">
                                        <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('custom_footer_js')
    <script>
        $('#{{ $module->slug."_".$module->id }}').addClass('current_section');
        $('#sidebar_dashboard_category_{{ $module->id }}').addClass('act_item');
    </script>

    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }} "></script>
@endsection

