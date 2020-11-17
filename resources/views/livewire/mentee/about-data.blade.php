<div>
    <div class="row">

        <!-- Profile Sidebar -->
        <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

            <!-- Sidebar -->
            <div class="profile-sidebar">
                <div class="user-widget">
                    <div class="user-info-cont">
                        <h4 class="usr-name">About</h4>
                        <p class="mentor-type">Say something about yourself.</p>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

        </div>
        <!-- /Profile Sidebar -->

        <div class="col-md-7 col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-body">

                    <!-- Profile Settings Form -->
                    <form wire:submit.prevent="updateAbout">
                        <div class="row form-row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <div class="change-avatar">
                                        <div class="upload-img">
                                            <h4>About</h4>
                                            <small class="form-text text-muted">Tell your mentor about yourself and what you're looking to learn from an apprenticeship.</small>
                                            <hr>
                                            <small>None of the field in this section is required for this form
                                                to be processed, but we strongly advice you to supply them, they are necessary in order for your profile to be attractive to mentors.
                                            The information supplied will also be used to match you with suitable mentors that corresponds with your profile. </small>
                                        <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Biography (Max: 1000 chars)</label>
                                    <textarea  wire:model.lazy="biography" class="form-control {{$errors->has('biography')? 'is-invalid' : '' }}" placeholder="Write a short bio"></textarea>
                                    @error('biography') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Looking for experience in</label>
                                    <select class="form-control" wire:model.lazy="experience" name="language">
                                        <option value="Null">Select Skill</option>
                                        <option value="Fishery">Fishery</option>
                                        <option value="Poultry">Poultry</option>
                                        <option value="Computer Engineering">Computer Engineering</option>
                                        <option value="Programming">Programming</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Industries I'm interested in</label>
                                    <select class="form-control" wire:model.lazy="industry" name="language">
                                        <option value="Null">Select Industry</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Fashion">Fashion</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Agriculture">Agriculture</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Personal interests</label>
                                    <small class="form-text text-muted">Personal interests help mentors learn a bit more about you.</small>
                                    <select class="form-control {{$errors->has('interest')? 'is-invalid' : '' }}" wire:model.lazy="interest" name="language">
                                        <option value="Null">Select Interest</option>
                                        <option value="Football">Football</option>
                                        <option value="Music">Music</option>
                                        <option value="Politics">Politics</option>
                                    </select>
                                    @error('interest') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Familiar tools</label>
                                    <small class="form-text text-muted">Share what tools you're familiar with.</small>
                                    <select class="form-control" wire:model.lazy="tool" name="language">
                                        <option value="Null">Select Tool</option>
                                        <option value="Adobe photosho">Adobe photoshop</option>
                                        <option value="Washing mashing">Washing mashing</option>
                                        <option value="Illustrator">Illustrator</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-12">
                                <span class="or-line"></span>
                                <br>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Looking for experience in: <i wire:loading wire:target="removeExperience" class="fa fa-spinner fa-spin"></i>
                                    </label><br>
                                    @if($c_neededExperiences)
                                        <small>Click on any of the experience(s) to remove from list</small>
                                        <ul>
                                            @foreach($c_neededExperiences as $experience)
                                                <li wire:click="removeExperience({{$experience->id}})" style="cursor: pointer; max-width: 200px;" > <small>{{$experience->experience}} </small></li>
                                            @endforeach
                                        </ul>

                                    @endif
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Industries interested in: <i wire:loading wire:target="removeIndustry" class="fa fa-spinner fa-spin"></i>
                                    </label><br>
                                    @if($c_industries)
                                        <small>Click on any of the industries to remove.</small>
                                        <ul>
                                            @foreach($c_industries as $industry)
                                                <li wire:click="removeIndustry({{$industry->id}})" style="cursor: pointer; max-width: 200px;" > <small>{{$industry->industry}} </small></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="or-line"></span>
                                <br>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Personal Interests: <i wire:loading wire:target="removeInterest" class="fa fa-spinner fa-spin"></i>
                                    </label><br>
                                    @if($c_interests)
                                        <small>Click on any  interest to remove from list.</small>
                                        <ul>
                                            @foreach($c_interests as $interest)
                                                <li wire:click="removeInterest({{$interest->id}})" style="cursor: pointer; max-width: 200px;" > <small>{{$interest->interest}} </small></li>
                                            @endforeach
                                        </ul>

                                    @endif
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Familar tools: <i wire:loading wire:target="removeTool" class="fa fa-spinner fa-spin"></i>
                                    </label><br>
                                    @if($c_tools)
                                        <small>Click on any tool to remove.</small>
                                        <ul>
                                            @foreach($c_tools as $tool)
                                                <li wire:click="removeTool({{$tool->id}})" style="cursor: pointer; max-width: 200px;" > <small>{{$tool->tool}} </small></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="submit-section">
                            <button style="border-color: #420175; background-color: #420175;" type="submit" wire:loading.remove wire:target="updateAbout" class="btn btn-primary submit-btn" style="border-color: #9A4EAE;">Save Profile</button>
                            <button style="border-color: #420175; background-color: #420175;" type="submit" wire:loading wire:target="updateAbout" class="btn btn-primary submit-btn"><i class="fa fa-spinner fa-spin"></i> Processing update..</button>
                        </div>
                    </form>
                    <!-- /Profile Settings Form -->

                </div>
            </div>
        </div>
    </div>
</div>
