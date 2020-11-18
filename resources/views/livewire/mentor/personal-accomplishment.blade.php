
<div>
    <div class="row">

        <!-- Profile Sidebar -->
        <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

            <!-- Sidebar -->
            <div class="profile-sidebar">
                <div class="user-widget">
                    <div class="user-info-cont">
                        <h4 class="usr-name">Professional Accomplishments</h4>
                        <p class="mentor-type">Any Achievement so far.</p>
                    </div>
                </div>
                <div class="progress-bar-custom">
                    {{--                    <h6>Professional details</h6>--}}
                    {{--                    <div class="pro-progress" >--}}
                    {{--                        <div class="tooltip-toggle" style="background-color: #9A4EAE;" tabindex="0"></div>--}}
                    {{--                        <div class="tooltip">50%</div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <!-- /Sidebar -->

        </div>
        <!-- /Profile Sidebar -->

        <div class="col-md-7 col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-body">

                    <!-- Profile Settings Form -->
                    <form wire:submit.prevent="updateProfile">
                        <div class="row form-row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <div class="change-avatar">
                                        <div class="upload-img">
                                            <h4>Company's Achievements</h4>
                                            <small class="form-text text-muted">Tell your apprentice about your company's achievements your personal interest, if there's any.</small>
                                            <hr>
                                            <small>None of the field in this section is mandatory but we highly recommend you supply all for prospective apprentices to know
                                            more about your company's accomplishment and things you're interested in.</small>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Professional accomplishment</label>
                                    <input type="text" class="form-control {{$errors->has('accomplish')? 'is-invalid' : '' }}" wire:model.lazy="accomplish">
                                    @error('accomplish') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                        <label>Personal Interest.</label>
                                    <select class="form-control {{$errors->has('interest')? 'is-invalid' : '' }}" wire:model.lazy="interest" name="interest">
                                        <option value="">Select Interest</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Fashion">Fashion</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Agriculture">Agriculture</option>
                                    </select>
                                    @error('interest') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <span class="or-line"></span>
                                <br>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>What you're interested in <i wire:loading wire:target="removeInterest" class="fa fa-spinner fa-spin"></i>
                                        <i wire:loading wire:target="insertOtherInterest" class="fa fa-spinner fa-spin"></i></label><br>
                                    @if($old_interests)
                                        <small>Click on any of the interest(s) to remove from list</small>
                                        <ul>
                                            @foreach($old_interests as $interest)
                                                <li wire:click="removeInterest({{$interest->id}})" style="cursor: pointer;" > <small>{{$interest->interest}} </small></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <small style="cursor: pointer;" wire:click="showInterestForm" class="form-text text-muted"><li class="fa fa-plus"></li> Add Interest</small>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Your accomplishents <i wire:loading wire:target="removeAccomplish" class="fa fa-spinner fa-spin"></i>
                                        <i wire:loading wire:target="insertOtherAccomplish" class="fa fa-spinner fa-spin"></i></label><br>
                                    @if($old_accomplishes)
                                        <small>Click on any of the accomplishment(s) to remove from list</small>
                                        <ul>
                                            @foreach($old_accomplishes as $accomplish)
                                                <li wire:click="removeAccomplish({{$accomplish->id}})" style="cursor: pointer;" > <small>{{$accomplish->accomplishment}} </small></li>
                                            @endforeach
                                        </ul>

                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <small style="cursor: pointer;" wire:click="showAccomplishForm" class="form-text text-muted"><li class="fa fa-plus"></li> Add Accomplishment</small>
                                </div>
                            </div>


                            @if($showInterestForm == true)
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Add other interest. <li wire:click="hideInterestForm" style="cursor: pointer;" class="fa fa-minus-circle"></li></label>
                                        <select class="form-control {{$errors->has('other_interest')? 'is-invalid' : '' }}" wire:model="other_interest" name="interest">
                                            <option value="">Select Interest</option>
                                            <option value="Technology">Technology</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Agriculture">Agriculture</option>
                                        </select>
                                        @error('other_interest') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <small style="cursor: pointer;" wire:click="insertOtherInterest" class="form-text text-muted"><li class="fa fa-check"></li> Save Interest</small>
                                    </div>
                                </div>
                            @endif

                            @if($showAccomplishForm == true)
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Add other Accomplishment. <li wire:click="hideAccomplishForm" style="cursor: pointer;" class="fa fa-minus-circle"></li></label>
                                        <input type="text" class="form-control {{$errors->has('other_accomplish')? 'is-invalid' : '' }}" wire:model="other_accomplish">
                                        @error('other_accomplish') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <small style="cursor: pointer;" wire:click="insertOtherAccomplish" class="form-text text-muted"><li class="fa fa-check"></li> Save Accomplishment</small>
                                    </div>
                                </div>
                            @endif
                            <div class="col-12">
                                <span class="or-line"></span>
                                <br>
                            </div>

                        </div>
                        <div class="submit-section">
                            <button type="submit" wire:loading.remove wire:target="updateProfile" class="btn btn-primary submit-btn"  style="border-color: #420175; background-color: #420175;">Save Profile</button>
                            <button  style="border-color: #420175; background-color: #420175;" type="submit" wire:loading wire:target="updateProfile" class="btn btn-primary submit-btn"><i class="fa fa-spinner fa-spin"></i> Processing update..</button>
                        </div>
                    </form>
                    <!-- /Profile Settings Form -->

                </div>
            </div>
        </div>
    </div>
</div>
