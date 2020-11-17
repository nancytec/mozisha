<div class="col-md-7 col-lg-8 col-xl-9">

 <div>
        <div class="card">
            <div class="card-body">


                <!-- Profile Settings Form -->
                <form wire:submit.prevent="setTask">
                    <div class="row form-row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <div class="change-avatar">
                                    <div class="upload-img">
                                        <h4>Upload a new Task</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Set a new task for {{$user->name}}</label>
                                <small class="form-text text-muted"><b><i>{{$user->name}} will see this task.</i></b></small>
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <div class="change-avatar">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Schedule</label>
                                <select class="form-control" wire:model="type">
                                    <option value="">Select schedule</option>
                                    <option value="Daily">Daily</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Monthly">Monthly</option>
                                </select>
                                @error('type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Task Title</label>
                                <input type="text" wire:model="title" class="form-control" placeholder="Example: To do this and that...">
                                @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Details of this task</label>
                                <small class="form-text text-muted">A detailed explaination of this task.</small>
                                <textarea rows="5" class="form-control" wire:model="details" placeholder="Share some information about this task."></textarea>
                                @error('details') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Resource link 1(Optional)</label>
                                <input type="text" wire:model="link_1" class="form-control" placeholder="Add link to a useful resource...">
                                @error('link_1') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Resource link 2(Optional)</label>
                                <input type="text" wire:model="link_2" class="form-control" placeholder="Add link to a useful resource...">
                                @error('link_2') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Attachment(Optional)</label>
                                <input type="file"  wire:model="attach" class="form-control">
                                @error('attach') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button type="submit" wire:loading.remove wire:target="setTask" class="btn btn-primary submit-btn"  style="border-color: #420175; background-color: #420175;">Upload Task</button>
                        <button  style="border-color: #420175; background-color: #420175;" type="submit" wire:loading wire:target="setTask" class="btn btn-primary submit-btn"><i class="fa fa-spinner fa-spin"></i> Processing update..</button>
                    </div>
                </form>



                <!-- /Profile Settings Form -->

            </div>
        </div>
    </div>

</div>
