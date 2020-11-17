<div class="col-md-7 col-lg-8 col-xl-9">
    <!-- Cards -->
    <!--check for the typ efo view-->

    @if($showTasks)
        <section class="comp-section comp-cards">
            <div class="comp-header">
                <h3 class="comp-title">Tasks</h3>
                <div class="line"></div>
            </div>

            @if($tasks)

                <div class="row">
                    @foreach($tasks as $task)
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <div class="card flex-fill">
                                <img alt="Card Image" src="{{asset('user/img/img_moz.jpg')}}" class="card-img-top">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{{ Str::limit($task->title, $limit = 25, $end = '...') }}</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ Str::limit($task->details, $limit = 100, $end = '...') }}</p>
                                    <a class="card-link" href="#" wire:click="viewTask({{$task->id}})"><i wire:loading wire:target="viewTask" class="fa fa-spinner fa-spin"></i> view task</a>
                                    <a class="card-link" href="#">Remove</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            @endif
        </section>
    @endif
<!-- /Cards -->
    <style>
       .nav-link .active{
            background-color: #420175;
        }
    </style>
    @if($viewTask)
        <section class="comp-section" >
            <div class="comp-header">
                <h3 class="comp-title">Details</h3>
                <div class="line"></div>
            </div>
            <div class="row"  >
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Task description</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1"  data-toggle="tab">Description</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab">{{$task->type}}</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab">{{$task->created_at->diffForHumans()}}</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                        <h6 style="text-align: center;">{{$task->title}}</h6>
                                    </div>

                                    <hr>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <p>{{$task->details}}</p>
                                    </div>

                                    <hr>
                                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                        <p><a href="{{$task->link_1}}" target="_blank"> {{$task->link_1}}</a></p>
                                        <p><a href="{{$task->link_2}}" target="_blank">{{$task->link_2}}</a></p>
                                    </div>

                                    <hr>
                                    <p><b>Attachment</b></p>
                                    <p><a target="_blank" href="{{$task->FilePath}}"> {{$task->file_original_name}}</a></p>


                                </div>
                                <div class="tab-pane" id="solid-rounded-justified-tab2" wire:ignore.self>
                                    <!-- Profile Settings Form -->
                                    <form wire:submit.prevent="updateTask" >
                                        <div class="row form-row">
                                            <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                    <div class="change-avatar">
                                                        <div class="upload-img">
                                                            <h4>Update Task</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted"><b><i>{{$user->name}} will see this update.</i></b></small>
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
                                            <button  style="border-color: #420175; background-color: #420175;" type="submit" wire:loading.remove wire:target="updateTask" class="btn btn-primary submit-btn" style="border-color: #9A4EAE;">Update Task</button>
                                            <button  style="border-color: #420175; background-color: #420175;" type="submit" wire:loading wire:target="updateTask" class="btn btn-primary submit-btn"><i class="fa fa-spinner fa-spin"></i> Processing update..</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="solid-rounded-justified-tab3">
                                    Remove task
                                </div>
                                <a class="card-link" wire:click="backToList" href="#"><i wire:loading wire:target="backToList" class="fa fa-spinner fa-spin"></i>  <u><b>Back to tasks</b></u></a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Your response</h4>
                        </div>
                        <div class="card-body" wire:ignore.self>
                            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified" wire:ignore.self>
                                <li wire:ignore.self class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tb1" data-toggle="tab">Respond</a></li>
                                <li wire:ignore.self class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tb3" data-toggle="tab">Create/Edit</a></li>
                                <li wire:ignore.self class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tb2" data-toggle="tab">Comments</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="solid-rounded-justified-tb1" wire:ignore.self>
                                    @if($response)
                                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                            <h6 style="text-align: center;">{{$response->title}}</h6>
                                        </div>

                                        <hr>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <p>{{$response->details}}</p>
                                        </div>

                                        <hr>
                                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                            <p><a href="{{$response->link_1}}" target="_blank"> {{$response->link_1}}</a></p>
                                            <p><a href="{{$response->link_2}}" target="_blank">{{$response->link_2}}</a></p>
                                        </div>

                                        <hr>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <p><b>Attachment</b></p>
                                            <p><a href="{{$response->FilePath}}" target="_blank">{{$response->file_original_name}}</a></p>
                                        </div>

                                        @if($curr_rating)
                                            <div class="alert alert-secondary alert-dismissible fade show" role="alert" style="text-align: center;">
                                                <h5><u><b>Mentor's rating: </b></u></h5>
                                                @if($curr_rating->rating == "5")
                                                    <p>Excellent.</p>
                                                @endif
                                                @if($curr_rating->rating == "4")
                                                    <p>Very Good.</p>
                                                @endif
                                                @if($curr_rating->rating == "3")
                                                    <p>Good.</p>
                                                @endif
                                                @if($curr_rating->rating == "2")
                                                    <p>Fair.</p>
                                                @endif
                                                @if($curr_rating->rating == "1")
                                                    <p>Poor.</p>
                                                @endif
                                            </div>
                                        @else
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: center;">
                                                <p>You mentor has not accessed your solution yet.</p>
                                            </div>
                                        @endif
                                    @else
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: center;">
                                            <p>You have'nt provided any solution to this task.</p>
                                            <small>Your mentor would be expecting a solution from you soonest, take note this is a <b><i>{{$task->type}}</i></b> task and it
                                                was posted on <b><i>{{$task->created_at->format('d M Y')}}({{$task->created_at->diffForHumans()}})</i></b> at exactly <b><i>{{$task->created_at->format('h:iA')}}</i></b>.
                                            </small>
                                        </div>
                                    @endif


                                </div>

                                <div class="tab-pane" id="solid-rounded-justified-tb2" wire:ignore.self>


                                    <!-- Chat Right -->
                                    <!-- Chat Right -->
                                    <div class="chat-cont-right" style="min-width: 400px !important; ">
                                        <div class="chat-body">
                                            <div class="chat-scroll">
                                                <ul class="list-unstyled">

                                                    @if($replies)
                                                        @foreach($replies as $reply)
                                                            @if(Auth::user()->id == $reply->sender_id)
                                                                <li class="media sent" >
                                                                    <div class="media-body">
                                                                        <div class="msg-box" >
                                                                            <div  style="border-color: #420175; background-color: #420175;">
                                                                                <p>{{$reply->reply}}</p>
                                                                                <ul class="chat-msg-info" >
                                                                                    <li>
                                                                                        <div class="chat-time">
                                                                                            <span><small>{{$reply->created_at->diffForHumans()}}</small></span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @else

                                                                <li class="media received">

                                                                    <div class="media-body">
                                                                        <div class="msg-box">
                                                                            <div>
                                                                                <p>{{$reply->reply}}</p>
                                                                                <ul class="chat-msg-info">
                                                                                    <li>
                                                                                        <div class="chat-time">
                                                                                            <span><small>{{$reply->created_at->diffForHumans()}}</small></span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach


                                                    @else
                                                        <div class="alert alert-primary alert-dismissible fade show" role="alert" style="text-align: center;">
                                                            <p>No comments.</p>
                                                        </div>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        @if($response)
                                            <form wire:submit.prevent="sendReply">
                                                <div class="chat-footer">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            {{--                                                        <div class="btn-file btn">--}}
                                                            {{--                                                            <i class="fa fa-paperclip"></i>--}}
                                                            {{--                                                            <input type="file">--}}
                                                            {{--                                                        </div>--}}
                                                        </div>

                                                        <input type="text" wire:model="reply" class="input-msg-send form-control" placeholder="Type something">
                                                        <div class="input-group-append">
                                                            <button   style="border-color: #420175; background-color: #420175;" type="submit" class="btn msg-send-btn"> <i wire:loading wire:target="sendReply"  class="fa fa-spinner fa-spin"></i> Send</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endif

                                    </div>
                                    <!-- /Chat Right -->
                                    <!-- /Chat Right -->


                                </div>

                                <div class="tab-pane" id="solid-rounded-justified-tb3" wire:ignore.self>
                                    <form wire:submit.prevent="addResponse" >
                                        <div class="row form-row">
                                            <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                    <div class="change-avatar">
                                                        <div class="upload-img">
                                                            <h4>Submit your solution</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted"><b><i>{{$user->name}} will see this response.</i></b></small>
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

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" wire:model="title" class="form-control" placeholder="Example: To do this and that...">
                                                    @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Details of this solution</label>
                                                    <small class="form-text text-muted">A detailed explaination of the solution.</small>
                                                    <textarea rows="5" class="form-control" wire:model="details" placeholder="Share some information about this solution."></textarea>
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
                                            <button type="submit" wire:loading.remove wire:target="addResponse" class="btn btn-primary submit-btn" style="border-color: #9A4EAE;">Submit</button>
                                            <button type="submit" wire:loading wire:target="addResponse" class="btn btn-primary submit-btn"><i class="fa fa-spinner fa-spin"></i> Processing...</button>
                                        </div>
                                    </form>
                                </div>
                                {{--                                <a class="card-link" href="#">Back to tasks</a>--}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endif


</div>
