<div>
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Create an account for a business owner</h4>
        </div>
        <div class="card-body pt-1">
            <!-- form -->
            <form class="validate-form" method="POST" wire:submit.prevent="savebusiness">
                @csrf

                <div class="row">
                    <div class="col-12 col-sm-4 mb-1">
                        <label class="form-label" for="account-retype-new-password">Full Names</label>
                        <div class="input-group form-password-toggle input-group-merge">
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror"
                                id="account-retype-new-password" wire:model="full_name" placeholder="" />
                        </div>
                        @error('full_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-4 mb-1">
                        <label class="form-label" for="account-retype-new-password">Phone Number</label>
                        <div class="input-group form-password-toggle input-group-merge">
                            <input type="number"
                                class="form-control @error('phone_number') is-invalid @enderror"
                                id="account-retype-new-password" wire:model="phone_number" placeholder="" />
                        </div>
                        @error('phone_number')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-4 mb-1">
                        <label class="form-label" for="account-retype-new-password">Email Address</label>
                        <div class="input-group form-password-toggle input-group-merge">
                            <input type="number"
                                class="form-control @error('email') is-invalid @enderror"
                                id="account-retype-new-password" wire:model="email" placeholder="" />
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-4 mb-1">
                        <label class="form-label" for="account-retype-new-password">Shop Name</label>
                        <div class="input-group form-password-toggle input-group-merge">
                            <input type="text"
                                class="form-control @error('shop_name') is-invalid @enderror"
                                id="account-retype-new-password" wire:model="shop_name" placeholder="" />
                        </div>
                        @error('shop_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-8 mb-1">
                        <label class="form-label" for="email">Shop Location Address</label>
                            <input type="text" id="address-input" witre:model="address_address"
                                class="form-control map-input form-control-solid @error('address_address') is-invalid @enderror">
                            <input type="hidden" wire:model="address_latitude" id="address-latitude" value="0" />
                            <input type="hidden" wire:model="address_longitude" id="address-longitude" value="0" />

                            <div id="address-map-container" style="width:100%;height:400px; ">
                                <div style="width: 100%; height: 100%" id="address-map"></div>
                            </div>

                        @error('address_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary me-1 mt-1">Upload Quiz</button>
                        <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
                    </div>
                </div>
            </form>
            <!--/ form -->
        </div>
    </div>
    @section('scripts')
    @parent
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize"
        async defer></script>
    <script src="{{ asset('app-assets/js/mapInput.js') }}"></script>
@stop

</div>
