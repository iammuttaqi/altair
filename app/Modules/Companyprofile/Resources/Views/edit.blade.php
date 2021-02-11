@extends('layouts.backend.master')

@section('title', 'Company Profile ')

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
            {!! Form::open(['url' => route("update-profile",$profileById->id), 'method' => 'POST', 'class' => 'user_edit_form', 'name'=>'editProfileForm', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']) !!}
            
            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Create New Profile</span></h2>
                                <div class="uk-width-medium-1-3">
                                    {{--<div class="md-btn-group">--}}
                                    {{--<a href="{{ route('manpower_service_document_index') }}" class="md-btn md-btn-small md-btn-primary md-btn-wave">All</a>--}}
                                    {{--<a href="{{ route('manpower_service_document_create') }}" class="md-btn md-btn-small md-btn-primary md-btn-wave">Add</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="user_content">
                            <div class="uk-margin-top">
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="company_name">Company Name</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="company_name">Company Name</label>
                                        <input class="md-input" type="text" id="company_name" name="company_name" value="{{ $profileById->company_name }}">
                                        <input class="md-input" type="hidden" id="company_id" name="company_id" value="{{ $profileById->id }}">
                                        @if($errors->has('company_name'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('company_name')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="company_address">Company Address</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="company_address">Company Address</label>
                                        <input class="md-input" type="text" id="company_address" name="company_address" value="{{ $profileById->company_address }}">
                                        @if($errors->has('company_address'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('company_address')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="company_email">Company Email</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="company_email">Company Email</label>
                                        <input class="md-input" type="text" id="company_email" name="company_email" value="{{ $profileById->company_email }}">
                                        @if($errors->has('company_email'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('company_email')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="company_phone">Company Phone</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="company_email">Company Phone</label>
                                        <input class="md-input" type="text" id="company_phone" name="company_phone" value="{{ $profileById->company_phone }}">
                                        @if($errors->has('company_phone'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('company_phone')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="company_phone_2">Company Phone 2</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="company_email">Company Phone 2</label>
                                        <input class="md-input" type="text" id="company_phone_2" name="company_phone_2" value="{{ $profileById->company_phone_2 }}">
                                        @if($errors->has('company_phone_2'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('company_phone_2')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="google_map">Google Map</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="company_email">Google Map</label>
                                        <input class="md-input" type="text" id="google_map" name="google_map" value="{{ $profileById->google_map }}">
                                        @if($errors->has('google_map'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('google_map')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <!--<div class="uk-grid" data-uk-grid-margin>-->
                                <!--    <div class="uk-width-medium-1-5  uk-vertical-align">-->
                                <!--        <label class="uk-vertical-align-middle" for="company_slogan">Company Slogan</label>-->
                                <!--    </div>-->
                                <!--    <div class="uk-width-medium-2-5">-->
                                <!--        <label for="company_slogan">Company Slogan</label>-->
                                <!--        <input class="md-input" type="text" id="company_slogan" name="company_slogan" value="{{ $profileById->company_slogan }}">-->
                                <!--        @if($errors->has('company_slogan'))-->
                                <!--            <br/>-->
                                <!--            <span style="color:orangered;">{!!$errors->first('company_slogan')!!}</span>-->
                                <!--        @endif-->
                                <!--    </div>-->
                                <!--</div>-->

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="publication_status">Publication Status</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="publication_status"></label>
                                        <select class="md-input" name="publication_status" id="publication_status" class="form-control">
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('status')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="company_logo">Previous Logo</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <img src="{{ url('public/'.$profileById->company_logo) }}" width="100" height="80" >
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="company_logo">Update Logo</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <input class="md-file" type="file" id="company_logo" name="company_logo" accept="image/*" required>
                                        @if($errors->has('company_logo'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('company_logo')!!}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="logo">Previous Right Logo</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <img src="{{ url('public/'.$profileById->logo) }}" width="100" height="80" >
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="logo">Update Right Logo</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <input class="md-file" type="file" id="logo" name="logo" accept="image/*" required>
                                        @if($errors->has('logo'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('logo')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="logo">Previous Fav Icon</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <img src="{{ url('public/'.$profileById->fav_icon) }}" width="100" height="80" >
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="favicon">Update Fav Icon</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <input class="md-file" type="file" id="favicon" name="fav_icon" accept="image/*" required>
                                        @if($errors->has('fav_icon'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('fav_icon')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="">Previous Header Image</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <img src="{{ url('public/'.$profileById->header_image) }}" width="100" height="80" >
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="header_image">Update Header Image</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <input class="md-file" type="file" id="header_image" name="header_image" accept="image/*" required>
                                        @if($errors->has('header_image'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('header_image')!!}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="facebook">Facebook</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="facebook">Facebook</label>
                                        <input class="md-input" type="text" id="facebook" name="facebook" value="{{ $profileById->facebook }}">
                                        @if($errors->has('facebook'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('facebook')!!}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="twitter">Instagram</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="twitter">Instagram</label>
                                        <input class="md-input" type="text" id="twitter" name="twitter" value="{{ $profileById->twitter }}">
                                        @if($errors->has('twitter'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('twitter')!!}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="linkedin">Linked In</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="linkedin">Linked In</label>
                                        <input class="md-input" type="text" id="linkedin" name="linkedin" value="{{ $profileById->linkedin }}">
                                        @if($errors->has('linkedin'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('linkedin')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="youtube">Youtube</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="youtube">Youtube</label>
                                        <input class="md-input" type="text" id="youtube" name="youtube" value="{{ $profileById->youtube }}">
                                        @if($errors->has('youtube'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('youtube')!!}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="navber_text">Navbar Text</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="navber_text">Navbar Text</label>
                                        <input class="md-input" type="text" id="navber_text" name="navber_text" value="{{ $profileById->navber_text }}">
                                        @if($errors->has('navber_text'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('navber_text')!!}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <hr/>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="about_keyword">About us Keyword</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="about_keyword">About us Keyword</label>
                                        <input class="md-input" type="text" id="about_keyword" name="about_keyword" value="{{ $profileById->about_keyword }}">
                                        @if($errors->has('about_keyword'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('about_keyword')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="about_description">About us Description</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="about_description">About us Description</label>
                                        <input class="md-input" type="text" id="about_description" name="about_description" value="{{ $profileById->about_description }}">
                                        @if($errors->has('about_description'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('about_description')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="team_keyword">Team Keyword</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="team_keyword">Team Keyword</label>
                                        <input class="md-input" type="text" id="team_keyword" name="team_keyword" value="{{ $profileById->team_keyword }}">
                                        @if($errors->has('team_keyword'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('team_keyword')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="team_description">Team Description</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="team_description">Team Description</label>
                                        <input class="md-input" type="text" id="team_description" name="team_description" value="{{ $profileById->team_description }}">
                                        @if($errors->has('team_description'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('team_description')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="gallery_keyword">Gallery Keyword</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="gallery_keyword">Gallery Keyword</label>
                                        <input class="md-input" type="text" id="gallery_keyword" name="gallery_keyword" value="{{ $profileById->gallery_keyword }}">
                                        @if($errors->has('gallery_keyword'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('gallery_keyword')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="gallery_description">Gallery Description</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="gallery_description">Gallery Description</label>
                                        <input class="md-input" type="text" id="gallery_description" name="gallery_description" value="{{ $profileById->gallery_description }}">
                                        @if($errors->has('gallery_description'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('gallery_description')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="service_keyword">Service Keyword</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="service_keyword">Service Keyword</label>
                                        <input class="md-input" type="text" id="service_keyword" name="service_keyword" value="{{ $profileById->service_keyword }}">
                                        @if($errors->has('service_keyword'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('service_keyword')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="service_description">Service Description</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="service_description">Service Description</label>
                                        <input class="md-input" type="text" id="service_description" name="service_description" value="{{ $profileById->service_description }}">
                                        @if($errors->has('service_description'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('service_description')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="payment_keyword">Payment Keyword</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="payment_keyword">Payment Keyword</label>
                                        <input class="md-input" type="text" id="payment_keyword" name="payment_keyword" value="{{ $profileById->payment_keyword }}">
                                        @if($errors->has('payment_keyword'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('payment_keyword')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="payment_description">Payment Description</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="payment_description">Payment Description</label>
                                        <input class="md-input" type="text" id="payment_description" name="payment_description" value="{{ $profileById->payment_description }}">
                                        @if($errors->has('payment_description'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('payment_description')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="category_keyword">Category Keyword</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="category_keyword">Category Keyword</label>
                                        <input class="md-input" type="text" id="category_keyword" name="category_keyword" value="{{ $profileById->category_keyword }}">
                                        @if($errors->has('category_keyword'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('category_keyword')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="category_description">Category Description</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="category_description">Category Description</label>
                                        <input class="md-input" type="text" id="category_description" name="category_description" value="{{ $profileById->category_description }}">
                                        @if($errors->has('category_description'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('category_description')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="visa_keyword">Visa Keyword</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="visa_keyword">Visa Keyword</label>
                                        <input class="md-input" type="text" id="visa_keyword" name="visa_keyword" value="{{ $profileById->visa_keyword }}">
                                        @if($errors->has('visa_keyword'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('visa_keyword')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="visa_description">Visa Description</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="visa_description">Visa Description</label>
                                        <input class="md-input" type="text" id="visa_description" name="visa_description" value="{{ $profileById->visa_description }}">
                                        @if($errors->has('visa_description'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('visa_description')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="contact_keyword">Contact Keyword</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="contact_keyword">Contact Keyword</label>
                                        <input class="md-input" type="text" id="contact_keyword" name="contact_keyword" value="{{ $profileById->contact_keyword }}">
                                        @if($errors->has('contact_keyword'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('contact_keyword')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="contact_description">Contact Description</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="contact_description">Contact Description</label>
                                        <input class="md-input" type="text" id="contact_description" name="contact_description" value="{{ $profileById->contact_description }}">
                                        @if($errors->has('contact_description'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('contact_description')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="blog_keyword">blog Keyword</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="blog_keyword">blog Keyword</label>
                                        <input class="md-input" type="text" id="blog_keyword" name="blog_keyword" value="{{ $profileById->blog_keyword }}">
                                        @if($errors->has('blog_keyword'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('blog_keyword')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="blog_description">blog Description</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="blog_description">blog Description</label>
                                        <input class="md-input" type="text" id="blog_description" name="blog_description" value="{{ $profileById->blog_description }}">
                                        @if($errors->has('blog_description'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('blog_description')!!}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>

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
        $('#sidebar_profile').addClass('current_section');
    </script>

    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>

    <script>
        document.forms['editProfileForm'].elements['publication_status'].value = '{{ $profileById->publication_status }}';
    </script>
@endsection

