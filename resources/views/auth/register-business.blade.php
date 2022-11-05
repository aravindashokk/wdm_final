@extends('layouts.app')
@section('title', 'Create Business Account')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Create an account for a business owner</h4>
                </div>
                <div class="card-body pt-1">
                    <!-- form -->
                    <form class="validate-form" method="POST" action="{{ route('storebusinessaccount') }}">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="account-retype-new-password">Full Names</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name') }}"
                                        id="account-retype-new-password" name="full_name" placeholder="" />
                                </div>
                                @error('full_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="account-retype-new-password">Phone Number</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <input type="number"
                                        class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}"
                                        id="account-retype-new-password" name="phone_number" placeholder="" />
                                </div>
                                @error('phone_number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="account-retype-new-password">Email Address</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <input type="text"
                                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                        id="account-retype-new-password" name="email" placeholder="" />
                                </div>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="account-retype-new-password">Shop Name</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <input type="text"
                                        class="form-control @error('shop_name') is-invalid @enderror" value="{{ old('shop_name') }}"
                                        id="account-retype-new-password" name="shop_name" placeholder="" />
                                </div>
                                @error('shop_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-12 mb-1">
                                <label class="form-label" for="email">Shop Location Address</label>
                                    <input type="text" id="address-input" name="address_address" value="{{ old('address_address') }}"
                                        class="form-control map-input form-control-solid @error('address_address') is-invalid @enderror">
                                        @error('address_address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                    <input type="hidden" name="address_longitude" id="address-longitude" value="0" />

                                    <div id="address-map-container" style="width:100%;height:400px; ">
                                        <div style="width: 100%; height: 100%" id="address-map"></div>
                                    </div>


                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1 mt-1">Register Business</button>
                                <button type="reset" class="btn btn-outline-secondary mt-1">Reset</button>
                            </div>
                            <br>
                                <div class="col-12">
                                    <a href="{{ route('schoolaccount') }}" >Create School Account</a>
                                    <a href="{{ route('register') }}" >Create Student Account</a>
                                </div>
                        </div>
                    </form>
                    <!--/ form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize"
    async defer></script>
<script src="{{ asset('app-assets/js/mapInput.js') }}"></script>
@stop
