<div>

    <div class="row">

        <!-- Profile Sidebar -->
        <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

            <!-- Sidebar -->
            <div class="profile-sidebar">
                <div class="user-widget">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <div class="change-avatar" style=" width: 40%; margin: auto;  text-align: center;">
                                @if($image)
                                    <div class="profile-img" >
                                        <img src="{{ $image->temporaryUrl()}}" style="border-radius: 50px;" alt="User Image">
                                    </div>
                                @else
                                    <div class="profile-img">
                                        <img src="{{$user->ImagePath}}" style="border-radius: 50px;" alt="User Image">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="user-info-cont">
                        <h4 class="usr-name">{{$user->name}}</h4>
                        <p class="mentor-type">{{$user->email}}</p>
                    </div>
                </div>

                @if(Auth::user()->hasRole('mentor'))
                    @livewire('mentor-sidebar', ['user' => $user])
                @endif
                @if(Auth::user()->hasRole('mentee'))
                    @livewire('mentee-sidebar', ['user' => $user])
                @endif
            </div>
            <!-- /Sidebar -->

        </div>
        <!-- /Profile Sidebar -->

        <div class="col-md-7 col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-body">
                    <x-alert />
                    <!-- Profile Settings Form -->
                    <form wire:submit.prevent="updateProfile">
                        <div class="row form-row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <div class="change-avatar">
                                        @if($image)
                                            <div class="profile-img">
                                                <img src="{{ $image->temporaryUrl()}}" style="border-radius: 50px;" alt="User Image">
                                            </div>
                                        @else
                                            <div class="profile-img">

                                            </div>
                                        @endif
                                        <div class="upload-img">
                                            <div class="change-photo-btn" style="background-color: #420175;">
                                                <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                <input type="file" wire:model="image"  class="upload">
                                            </div>
                                            <small wire:loading wire:target="image" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>
                                            <small wire:loading.remove wire:target="image" class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                            @error('image') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" wire:model.lazy = "firstname" class="form-control {{$errors->has('firstname')? 'is-invalid' : '' }}" placeholder="First Name">
                                    @error('firstname') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" wire:model.lazy = "lastname" class="form-control {{$errors->has('lastname')? 'is-invalid' : '' }}" PLACEHOLDER="Last Name">
                                    @error('lastname') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker {{$errors->has('date_of_birth')? 'is-invalid' : '' }}" wire:model.lazy="date_of_birth" placeholder="Date of birth">
                                        @error('date_of_birth') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" wire:model.lazy="phone" placeholder="Phone Number" class="form-control {{$errors->has('phone')? 'is-invalid' : '' }}">
                                    @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control {{$errors->has('gender')? 'is-invalid' : '' }}" wire:model.lazy="gender" name="language">
                                        <option value="">Select gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    @error('gender') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" wire:model.lazy="address" placeholder="Your Address" class="form-control {{$errors->has('address')? 'is-invalid' : '' }}">
                                    @error('address') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Address 2</label>
                                    <input type="text" wire:model.lazy="address_2" placeholder="Your second Address" class="form-control {{$errors->has('address_2')? 'is-invalid' : '' }}">
                                    @error('address_2') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" wire:model.lazy="city" placeholder="City" class="form-control {{$errors->has('city')? 'is-invalid' : '' }}">
                                    @error('city') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" wire:model.lazy="state" placeholder="State" class="form-control {{$errors->has('state')? 'is-invalid' : '' }}">
                                    @error('state') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input type="text" wire:model.lazy="zipcode" placeholder="Zip Code" class="form-control {{$errors->has('zipcode')? 'is-invalid' : '' }}">
                                    @error('zipcode') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" wire:model.lazy="country" placeholder="Nationality" class="form-control {{$errors->has('country')? 'is-invalid' : '' }}" >
                                    @error('country') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button type="submit" wire:loading.remove wire:target="updateProfile"  class="btn btn-primary btn-block" style="border-color: #420175; background-color: #420175;">Save Changes</button>
                            <button style="border-color: #420175; background-color: #420175;" type="submit" wire:loading wire:target="updateProfile" class="btn btn-primary btn-block"><i class="fa fa-spinner fa-spin"></i> Processing update...</button>

                        </div>
                    </form>
                    <!-- /Profile Settings Form -->

                </div>
            </div>
        </div>
    </div>

    <!-- Edit Details Modal -->
    <div class="modal fade"wire:ignore.self tabindex="-1" id="edit_personal_details" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Personal Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="Allen">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text"  class="form-control" value="Davis">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control" value="24-07-1983">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input type="email" class="form-control" value="allendavis@example.com">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" value="+1 202-555-0125" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="form-title"><span>Address</span></h5>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" value="4663 Agriculture Lane">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" value="Miami">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" value="Florida">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" value="22434">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" value="United States">
                                </div>
                            </div>
                        </div>


                        <button type="submit"  class="btn btn-primary btn-block" style="border-color: #9A4EAE;">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Details Modal -->
    <!-- /Edit Details Modal -->
</div>

