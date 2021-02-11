@inject('helper', 'App\Lib\Helpers')
@extends('layouts.backend.master')

@section('title', 'Sub Category Edit')

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

            {!! Form::open(['url' => route("sub_category_update", $sub_category->id), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']) !!}

                @if(isset($module_id))
                    <input type="hidden" name="module_id" value="{{ $module_id }}" />
                @endif
                @if(isset($module_id))
                    <input type="hidden" name="category_id" value="{{ $category_id }}" />
                @endif

                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                    <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading">
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate">Update Sub Category</span></h2>
                                    <div class="uk-width-medium-1-3">

                                    </div>
                                </div>
                            </div>
                            <div class="user_content">
                                <div class="uk-margin-top">

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-5  uk-vertical-align">
                                            <label class="uk-vertical-align-middle" for="category_id">Category Name<span style="color: red;" class="asterisc">*</span></label>
                                        </div>
                                        <div class="uk-width-medium-2-5">
                                            <select class="md-input" name="category_id" id="category_id" class="form-control" disabled>
                                                <option value="{{ $category->id }}"  selected >{{ $category->name }}</option>
                                            </select>
                                            @if($errors->has('category_id'))
                                                <br/>
                                                <span style="color:orangered;">{!!$errors->first('category_id')!!}</span>
                                            @endif
                                        </div>
                                        <input type="hidden" name="category_id" id="category_id" value="{{ $sub_category->category_id }}">
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-5  uk-vertical-align">
                                            <label class="uk-vertical-align-middle" for="sub_category_name">Sub Category Name<span style="color: red;" class="asterisc">*</span></label>
                                        </div>
                                        <div class="uk-width-medium-2-5">
                                            <label for="name">Sub Category Name</label>
                                            <input class="md-input" type="text" id="sub_category_name" name="sub_category_name" value="{{ $sub_category->name }}" required="required" {{ $sub_category->id == 65 ? 'readonly' : ($sub_category->id == 66 ? 'readonly' : '') }}>
                                            @if($errors->has('sub_category_name'))
                                                <br/>
                                                <span style="color:orangered;">{!!$errors->first('sub_category_name')!!}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-5-5">
                                            <table class="uk-table">
                                                <thead>
                                                <tr>
                                                    <th colspan="3">Sub Category Values Input Fields</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($sub_category_input_values as $key => $sub_category_input_value)
                                                    <tr>
                                                        <td>{{ $sub_category_input_value->sub_cat_input_name }}</td>
                                                        <td>{!! $helper->setForSubCategoryValues($sub_category['id'], $sub_category_input_value['input_fields_id']) !!}</td>
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
                                                    <th colspan="3">All Further Sub Category Input Value Fields</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($input_fields as $key => $input_field)
                                                    <tr>
                                                        <td>{{ $input_field->name }}</td>
                                                        <td><input type="checkbox" name="input_fields_id[{{ $input_field->id }}]" id="input_fields_id_{{ $input_field->id }}" value="{{ $input_field->id }}" {{ (isset($furtherSubCatInputField[$input_field->id]) ? 'checked' : '') }} data-md-icheck/> </td>
                                                        <td><input class="md-input" type="text" name="further_sub_cat_input_name[{{ $input_field->id }}]" id="further_sub_cat_input_name{{ $input_field->id }}" value="{{ (isset($furtherSubCatInputField[$input_field->id]) ? $furtherSubCatInputField[$input_field->id] : '') }}"/> </td>
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
        $('#sidebar_dashboard_sub_category_{{ $module->id }}').addClass('act_item');
    </script>

    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }} "></script>
@endsection

