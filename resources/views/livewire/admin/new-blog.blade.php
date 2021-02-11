<div>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!--Admin header-->
        <livewire:admin-header />
        <!-- /Admin header-->

        <!-- Admin siebar-->
        <x-admin_sidebar />
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Add Blog</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index_admin.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- Add details -->
                                <div class="row">
                                    <div class="col-12 blog-details">
                                        <x-alert />
                                        <form action="{{route('blog.save')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Blog Title</label>
                                                <input class="form-control" name="title" value="{{old('title')}}" type="text" placeholder="Title of the post">
                                                @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Blog Image(Landscape)</label>
                                                <div>
                                                    <input class="form-control" wire:model="image" name="image" type="file">
                                                    @if($image)
                                                        <img src="{{$image->temporaryUrl()}}" class="img-fluid" >
                                                    @endif
                                                    <small class="form-text text-muted">Max. file size: 3MB. Allowed images: jpg, gif, png.</small>
                                                    @error('image') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <small wire:loading wire:target="image" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>


                                            </div>
                                            <div class="row" >
                                                <div class="col-md-12" >
                                                    <div class="form-group">
                                                        <label>Blog Category</label>
                                                        <select class="form-control" name="category" wire:model.lazy="category">
                                                            <option value="">Select Category</option>
                                                            <option value="Software_development">Software Development</option>
                                                            <option value="Entrepreneurship">Entrepreneurship</option>
                                                            <option value="Seminars">Seminars</option>
                                                            <option value="Collaboration">Collaboration</option>
                                                            <option value="Marketing">Marketing</option>
                                                            <option value="E-learning">E-learning</option>
                                                            <option value="Freelancing">Freelancing</option>
                                                            <option value="Business">Business</option>
                                                        </select>
                                                        @error('category') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"  wire:ignore>
                                                <label>Content</label>
                                                <textarea  cols="30" name="main_content"   id="mytextarea" rows="6" class="form-control" placeholder="First section of the content.">{{old('main_content')}}</textarea>
&nbsp;  &nbsp;                                            @error('main_content') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

                                                </div>




                                            <div class="form-group">
                                                <h2 style="color: #420175">Add Image to content</h2>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label>Image(1)(Landscape)</label>
                                                <div>
                                                    <input class="form-control" wire:model="continue_image_1" name="continue_image_1" type="file">
                                                    @if($continue_image_1)
                                                        <img src="{{$continue_image_1->temporaryUrl()}}" class="img-fluid" >
                                                    @endif
                                                    <small class="form-text text-muted">Max. file size: 3MB. Allowed images: jpg, gif, png.</small>
                                                    @error('continue_image_1') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <small wire:loading wire:target="continue_image_1" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>
                                            </div>
                                            <div class="form-group" wire:ignore>
                                                    <label>Content Continue(1) </label>
                                                    <textarea cols="30" wire:model.lazy="continue_1"  name="continue_1" id="mytextarea_1" rows="6" class="form-control" placeholder="Content continues here...">{{old('continue_1')}}</textarea>
                                                    @error('continue_1') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                            </div>


                                            <br>
                                            <div class="form-group">
                                                <h2 style="color: #420175">Add Image to content</h2>
                                                <hr>
                                            </div>

                                                <div class="form-group">
                                                    <label>Image(2)(Landscape)</label>
                                                    <div>
                                                        <input class="form-control" wire:model="continue_image_2" name="continue_image_2" type="file">
                                                        @if($continue_image_2)
                                                            <img src="{{$continue_image_2->temporaryUrl()}}" class="img-fluid" >
                                                        @endif
                                                        <small class="form-text text-muted">Max. file size: 3MB. Allowed images: jpg, gif, png.</small>
                                                        @error('continue_image_2') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                    </div>
                                                    <small wire:loading wire:target="continue_image_2" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>
                                                </div>



                                                <div class="form-group" wire:ignore>
                                                    <label>Continue Content(2)</label>
                                                    <textarea cols="30" wire:model.lazy="continue_2" name="continue_2" id="mytextarea_2" rows="6" class="form-control" placeholder="Content continues here...">{{old('continue_2')}}</textarea>
                                                    @error('continue_2') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                              <br>

                                            <div class="form-group">
                                                <h2 style="color: #420175">Add Image to content</h2>
                                                <hr>
                                            </div>

                                                <div class="form-group">
                                                    <label>Image(3)(Landscape)</label>
                                                    <div>
                                                        <input class="form-control" wire:model="continue_image_3" name="continue_image_3" type="file">
                                                        @if($continue_image_3)
                                                            <img src="{{$continue_image_3->temporaryUrl()}}" class="img-fluid" >
                                                        @endif
                                                        <small class="form-text text-muted">Max. file size: 3MB. Allowed images: jpg, gif, png.</small>
                                                        @error('continue_image_3') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                    </div>
                                                    <small wire:loading wire:target="continue_image_3" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>
                                                </div>



                                                <div class="form-group" wire:ignore>
                                                    <label>Continue Content(3)</label>
                                                    <textarea cols="30" wire:model.lazy="continue_3" name="continue_3" id="mytextarea_3" rows="6" class="form-control" placeholder="Content continues here...">{{old('continue_3')}}</textarea>
                                                    @error('continue_3') <span class=" text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>



{{--                                        @if($continue_2_image || $continue_2_input)--}}
{{--                                                <div class="form-group">--}}
{{--                                                     <small wire:click="showContinue_2" class="text-muted"  style="cursor: pointer;"><li class="fa fa-plus"></li> Add Final Content</small> &nbsp;  &nbsp;  &nbsp;--}}
{{--                                                     <small class="text-muted" wire:click="showContinueImage_2" style="cursor: pointer;"><li class="fa fa-crosshairs"></li> Add Final Image</small>--}}
{{--                                                </div>--}}
{{--                                        @endif--}}



                                            <div class="form-group">
                                                <label class="display-block w-100">Blog Status</label>
                                                <div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input class="custom-control-input" id="active" name="status" wire:model.lazy="status" value="Active" type="radio" checked="">
                                                        <label class="custom-control-label" for="active">Active</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input class="custom-control-input" id="inactive" name="status" wire:model.lazy="status" value="Inactive" type="radio">
                                                        <label class="custom-control-label" for="inactive">Inactive</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-t-20 text-center">
                                                <button style="border-color: #420175; background-color: #420175;" type="submit" wire:loading wire:target="newBlog" class="btn btn-primary btn-lg"><i class="fa fa-spinner fa-spin"></i> Processing update..</button>
                                                <button class="btn btn-primary btn-lg" wire:loading.remove wire:target="newBlog" style="background-color: #420175; border-color: #420175;">Publish Blog</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Add details -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
</div>

