@extends('layouts.backend.master')

@section('title', 'Module Edit')

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

            {!! Form::open(['url' => route("module_update", $module->id), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']) !!}

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                    <div class="md-card">

                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Update Module</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-margin-top">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="module_name">Module Name<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="module_name">Module Name</label>
                                        <input class="md-input" type="text" id="module_name" name="module_name" value="{{ $module->name }}" required readonly="">
                                        @if($errors->has('module_name'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('module_name')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="icon_code">Module Icon<span style="color: red;" class="asterisc"></span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="icon_code">Module Icon</label>
                                        <input class="md-input" type="text" id="icon_code" name="icon_code" value="{{ $module->icon_code }}" required>
                                        @if($errors->has('icon_code'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('icon_code')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="name">Show on Expand<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <p>
                                            <input type="checkbox" name="category" id="category" @if($module->category == 1) checked @endif value="1" data-md-icheck/>
                                            <label for="category" class="inline-label">Category</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" name="sub_category" id="sub_category" @if($module->sub_category == 1) checked @endif value="1" data-md-icheck/>
                                            <label for="sub_category" class="inline-label">Sub Category</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" name="further_sub_category" id="further_sub_category" @if($module->further_sub_category == 1) checked @endif value="1" data-md-icheck/>
                                            <label for="further_sub_category" class="inline-label">Further Sub Category</label>
                                        </p>
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle">All Input Fields<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <table class="uk-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="3">All Input Fields</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach($input_fields as $key => $input_field)
                                                    <tr>
                                                        <td>{{ $input_field->name }}</td>
                                                        <td><input type="checkbox" name="input_fields_id[{{ $input_field->id }}]" id="input_fields_id_{{ $input_field->id }}" value="{{ $input_field->id }}" {{ (isset($category_input_value[$input_field->id]) ? 'checked' : '') }} data-md-icheck/> </td>
                                                        <td><input class="md-input" type="text" name="name[{{ $input_field->id }}]" id="_cat_input_name{{ $input_field->id }}" value="{{ (isset($category_input_value[$input_field->id]) ? $category_input_value[$input_field->id] : '') }}"/> </td>
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
        $('#sidebar_module').addClass('current_section');
    </script>

    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }} "></script>
@endsection

