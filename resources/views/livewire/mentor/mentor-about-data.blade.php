<div>
    <div class="row">

        <!-- Profile Sidebar -->
        <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

            <!-- Sidebar -->
            <div class="profile-sidebar">
                <div class="user-widget">
                    <div class="user-info-cont">
                        <h4 class="usr-name">About your company</h4>
                        <p class="mentor-type">Say something about your company.</p>
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
                                            <h2>About</h2>
                                            <small class="form-text text-muted">Tell your apprentice about your company and what you're looking to get from an apprentice.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Biography (Max: 1000 chars)</label>
                                    <textarea  wire:model="biography" class="form-control" placeholder="Write a short bio..."></textarea>
                                    @error('biography') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Looking for apprentiship in</label><br>
                                    <small>What will your apprentice learn and work on?</small>
                                    <input type="text"  class="form-control" wire:model="apprenticeship"  placeholder="Tell your apprentice what they'll learn...">
                                    @error('apprenticeship') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Interested Field</label><br>
                                    <small>Looking for help with?</small>
                                    <select class="form-control" wire:model="help" name="language">
                                        <option value="">Select Industry</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Fashion">Fashion</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Agriculture">Agriculture</option>
                                    </select>
                                    @error('field') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="or-line"></span>
                                <br>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Looking for Apprenticeship  in: <i wire:loading wire:target="removeApprenticeship" class="fa fa-spinner fa-spin"></i>
                                    </label><br>
                                    @if($c_apprenticeships)
                                        <small>Click on any of the apprenticeship to remove from list</small>
                                        <ul>
                                            @foreach($c_apprenticeships as $apprenticeship)
                                                <li wire:click="removeApprenticeship({{$apprenticeship->id}})" style="cursor: pointer; max-width: 200px;" > <small>{{$apprenticeship->duty}} </small></li>
                                            @endforeach
                                        </ul>

                                    @endif
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Field interested in: <i wire:loading wire:target="removeHelp" class="fa fa-spinner fa-spin"></i>
                                    </label><br>
                                    @if($c_helps)
                                        <small>Click on any of the fields to remove.</small>
                                        <ul>
                                            @foreach($c_helps as $help)
                                                <li wire:click="removeHelp({{$help->id}})" style="cursor: pointer; max-width: 200px;" > <small>{{$help->help}} </small></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="submit-section">
                            <button type="submit" wire:loading.remove wire:target="updateAbout" class="btn btn-primary submit-btn"  style="border-color: #420175; background-color: #420175;">Save Profile</button>
                            <button  style="border-color: #420175; background-color: #420175;" type="submit" wire:loading wire:target="updateAbout" class="btn btn-primary submit-btn"><i class="fa fa-spinner fa-spin"></i> Processing update..</button>
                        </div>
                    </form>
                    <!-- /Profile Settings Form -->

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    import Input from "../../../js/Jetstream/Input";
    export default {
        components: {Input}
    }
</script>
