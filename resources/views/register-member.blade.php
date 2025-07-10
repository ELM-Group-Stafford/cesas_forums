@extends('layouts.app')

@section('title', 'Register')

@section('header')
    {{--<h2>This is the header</h2>--}}
    @include('layouts.partials.header')
@endsection

@section('content')

<main class="bg-gradient-primary pad-v-m">
    <div class="container">
        <form method="POST" action="{{ route('register.store') }}">
            <div class="card">
                <h1>{{ trans('register.header.heading') }}</h1>

                Please select on which forums you would like to be registered.<br /><br />

                <div class="grid-container">                    
                    <div class="grid-item-register inline-checkbox">
                        <label for="imid_select">IMID Forum</label>
                        <input type="checkbox" id="imid_select" name="imid_select" value="imid">                        
                    </div>

                    <div class="grid-item-register inline-checkbox">
                        <label for="lupus_select">Lupus Forum</label>
                        <input type="checkbox" id="lupus_select" name="lupus_select" value="lupus">
                    </div>

                    <div class="grid-item-register inline-checkbox">
                        <label for="scleroderma_select">Scleroderma Forum</label>
                        <input type="checkbox" id="scleroderma_select" name="scleroderma_select" value="scleroderma">
                    </div>
                </div>


            </div><br />

            <div class="card">
            
                @csrf
                <x-honeypot />
                <input type="hidden" name="a" value="">
                <input type="hidden" name="b" value="{{ time() }}">
                <input type="hidden" name="c" value="32491655339144968535">

                @include('partials.validation-errors')

                <div class="grid grid-2 grid-single-column-at-s">
                    <label for="first_name" class="grid-item m-t-sm">
                        <span class="field-label">{{ trans('forms.first_name') }} <x-required/></span>
                        <input
                            type="text"
                            id="first_name"
                            name="first_name"
                            class="field-text"
                            placeholder="{{ trans('forms.first_name_placeholder') }}"
                            value="{{ old('first_name') }}"
                            required
                            autocomplete="first_name"
                            @testhook('field-first-name') />
                    </label>

                    <label for="last_name" class="grid-item m-t-sm">
                        <span class="field-label">{{ trans('forms.last_name') }} <x-required/></span>
                        <input
                            type="text"
                            id="last_name"
                            name="last_name"
                            class="field-text"
                            placeholder="{{ trans('forms.last_name_placeholder') }}"
                            value="{{ old('last_name') }}"
                            required
                            autocomplete="last_name"
                            @testhook('field-last-name') />
                    </label>

                    <label for="email" class="grid-item m-t-sm">
                        <span class="field-label">{{ trans('forms.email') }} <x-required/></span>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="field-text"
                            placeholder="{{ trans('forms.email_placeholder') }}"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            @testhook('field-email') />
                    </label>

                    <label for="country" class="grid-item m-t-sm">
                        <span class="field-label">{{ trans('forms.country') }} <x-required/></span>
                        <x-country-select
                            id="country"
                            name="country"
                            class="field-text"
                            :placeholder="trans('forms.country_placeholder')"
                            required
                            :value="old('country')" />
                    </label>

                    <label for="institution" class="grid-item m-t-sm">
                        <span class="field-label">{{ trans('forms.institution') }}</span>
                        <input type="text"
                            id="institution"
                            name="institution"
                            class="field-text"
                            value="{{ old('institution') }}"
                            placeholder="{{ trans('forms.institution_placeholder') }}"
                            autocomplete="organization"
                            @testhook('field-institution') />
                    </label>

                    <label for="department" class="grid-item m-t-sm">
                        <span class="field-label">{{ trans('forms.department') }}</span>
                        <input type="text"
                            id="department"
                            name="department"
                            class="field-text"
                            value="{{ old('department') }}"
                            placeholder="{{ trans('forms.department_placeholder') }}"
                            autocomplete="organization"
                            @testhook('field-department') />
                    </label>
                    
                     <label for="user_speciality_id" class="grid-item m-t-sm">
                        <span class="field-label">{{ trans('forms.speciality') }} <x-required/></span>
                        <x-user-speciality-select
                            id="user_speciality_id"
                            name="user_speciality_id"
                            class="field-text"
                            onChange="toggleSpeciality()"
                            :placeholder="trans('forms.speciality_placeholder')"
                            required
                            :value="old('user_speciality_id')" />

                            <input
                            type="text"
                            id="speciality"
                            name="speciality"
                            value="{{ old('speciality') }}"
                            placeholder="{{ trans('forms.speciality_other') }}"
                            class="field-text"
                            style="display:none">
                    </label>                    

                    <label for="profession_id" class="grid-item m-t-sm">
                        <span class="field-label">{{ trans('forms.profession') }} <x-required/></span>
                        <x-profession-select
                            id="profession_id"
                            name="profession_id"
                            class="field-text"
                            :placeholder="trans('forms.profession_placeholder')"
                            required
                            :value="old('profession_id')" />
                    </label>                       

                    <label for="password" class="grid-item  m-t-sm">
                        <span class="field-label">{{ trans('forms.password') }} <x-required/></span>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="field-text"
                            placeholder=" "
                            required
                            autocomplete="new-password"
                            @testhook('field-password') />
                    </label>

                    <label for="password_confirmation" class="grid-item m-t-sm">
                        <span class="field-label">{{ trans('forms.password_confirmation') }} <x-required/></span>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="field-text"
                            placeholder=" "
                            required
                            autocomplete="new-password"
                            @testhook('field-password-confirmation') />
                    </label>
                    
                    <x-speciality-filter-register />

                    <div class="grid-item m-t-sm form-group" style="display:flex;">
                        <div class="label form-control-checkbox">
                            <div class="form-control-label-text m-l-s-2 cursor-default">
                                <span>
                                    {{ trans('forms.display_in_directory') }}
                                    <span aria-hidden class="deemphasis"><x-required/>
                                    <br>

                                    <label
                                        for="display-my-information-yes"
                                        class="inline-block"
                                    ><input
                                        type="radio"
                                        name="display-my-information"
                                        id="display-my-information-yes"
                                        value="1"                
                                        required
                                        class="m-t-s-3 m-l-0"
                                        @testhook('field-display-my-information-yes')
                                    /> {{ trans('forms.yes') }}</label>
                                    <label
                                        for="display-my-information-no"
                                        class="inline-block"
                                    ><input
                                        type="radio"
                                        name="display-my-information"
                                        id="display-my-information-no"
                                        value=0
                                        required
                                        class="m-l-lg"
                                        @testhook('field-display-my-information-no')
                                    /> {{ trans('forms.no') }}</label>
                                </span>
                            </div>
                        </div>    
                    </div> 
                        
                    <div class="grid-item  m-t-sm form-group" style="display:flex;">
                        <label for="content_update_frequency" class="form-control-checkbox">
                            <div class="form-control-label-text m-l-s-2 cursor-default">
                                <span>
                                    {{ trans('forms.content_update_frequency') }}
                                    <x-required />
                                    <br>

                                    <div class="m-t-xs m-b-0 w-98">
                                        <x-content-update-frequency-select
                                            id="content_update_frequency"
                                            name="content_update_frequency"
                                            class="field-text"
                                            required
                                            :value="old('content_update_frequency')" />
                                    </div>
                                </span>
                            </div>
                        </label>
                    </div>

                     <div class="grid-item m-t-sm form-group">
                        <div class="label form-control-checkbox">
                            <div class="form-control-label-text m-l-s-2 cursor-default">
                                <span>
                                    {{ trans('forms.accepts_marketing', ['site' => env('APP_NAME')]) }} <x-required/>
                                    <br>
                                    <label for="marketing-messages-by-email-yes" class="inline-block"><input style="margin-top: 14px; margin-left:0;" type="radio" name="marketing_preferences" id="marketing-messages-by-email-yes" value="yes" required> Yes</label>
                                    <label for="marketing-messages-by-email-no" class="inline-block"><input style="margin-left: 24px;" type="radio" name="marketing_preferences" id="marketing-messages-by-email-no" value="no" required> No</label>
                                </span>
                            </div>
                        </div>
                    </div>        

                </div>

                <x-required-key></x-required-key>

                <p>By creating accounts, you are agreeing to the <a href="{{ route('legal.legal') }}">terms and conditions</a> of this site.</p>

                <div class="actions pad-b-0 pad-b-s-sm">
                    <span class="action-flexible-space"></span>
                    <button
                        type="submit"
                        class="btn btn-primary action"
                        @testhook('register-form-submit')>{{ trans('register.submit') }}</button>
                </div>

            </div>
        </form>
    </div>
</main>  

@endsection

@section('footer')
    <h2>This is the footer</h2>
@endsection