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
                            <h3 class="page-title">Edit Blog</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index_admin.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit Blog</li>
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
                                        <form method="post" enctype="multipart/form-data" action="/blog/{{$blog->id}}/update">
                                            @csrf
                                            @method('patch')
                                            <div class="form-group">
                                                <label>Blog Title</label>
                                                <input class="form-control" wire:model.lazy="title" type="text" name="title" placeholder="Title of the post">
                                                @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Blog Image(Landscape)</label>
                                                <div>
                                                    <input class="form-control" wire:model="image" name="image" type="file">
                                                    @if($image)
                                                        <img src="{{$image->temporaryUrl()}}" class="img-fluid" />
                                                    @else
                                                        <img src="{{$blog->ImagePath}}" class="img-fluid" />
                                                    @endif
{{--                                                    @if($new_image)--}}
{{--                                                       --}}
{{--                                                    @else--}}


                                                    <small class="form-text text-muted">Max. file size: 3MB. Allowed images: jpg, gif, png.</small>
                                                    @error('image') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <small wire:loading wire:target="image" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Blog Category</label>
                                                        <select class="form-control" wire:model.lazy="category" name="category" tabindex="-1" aria-hidden="true">
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
                                            <div class="form-group" wire:ignore>
                                                <label>Content</label>
                                                <textarea cols="30" wire:model.lazy="content" id="mytextarea"  name="main_content" rows="6" class="form-control" placeholder="First section of the content."></textarea>
                                                @error('main_content') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                            </div>

                                            <br>
                                            <div class="form-group">
                                                <h2 style="color: #420175">First image within content</h2>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label>Image(1)(Landscape)</label>
                                                <div>
                                                    <input class="form-control" wire:model="continue_image_1" name="continue_image_1" type="file">
                                                    @if($continue_image_1)
                                                        <img src="{{$continue_image_1->temporaryUrl()}}" class="img-fluid" />
                                                    @else
                                                        @if($blog->continue_image_1)
                                                            <img src="{{$blog->Continue1ImagePath}}" class="img-fluid" />
                                                            <small class="text-muted" wire:click="removeContinue1Image" style="cursor: pointer;"><li class="fa fa-crosshairs"></li> Remove Image</small>
                                                        @endif

                                                         @endif

                                                    <small class="form-text text-muted">Max. file size: 3MB. Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                                                    @error('continue_image_1') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <small wire:loading wire:target="continue_image_1" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>

                                            </div>
                                            <div class="form-group" wire:ignore>
                                                <label>Content Continue(1)</label>
                                                <textarea cols="30" wire:model.lazy="continue_1" id="mytextarea_1"  name="continue_1" rows="6" class="form-control" placeholder="Second section of the content."></textarea>
                                                @error('continue_1') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                            </div>

                                            <br>
                                            <div class="form-group">
                                                <h2 style="color: #420175">Second Image within content</h2>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label>Image(2)(Landscape)</label>
                                                <div>
                                                    <input class="form-control" wire:model="continue_image_2" name="continue_image_2" type="file">
                                                    @if($continue_image_2)
                                                        <img src="{{$continue_image_2->temporaryUrl()}}" class="img-fluid" />
                                                    @else
                                                        @if($blog->continue_image_2)
                                                            <img src="{{$blog->Continue2ImagePath}}" class="img-fluid" />
                                                            <small class="text-muted" wire:click="removeContinue2Image" style="cursor: pointer;"><li class="fa fa-crosshairs"></li> Remove Image</small>
                                                        @endif
                                                    @endif
                                                    <small class="form-text text-muted">Max. file size: 3MB. Allowed images: jpg, gif, png. </small>
                                                    @error('continue_image_2') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <small wire:loading wire:target="continue_image_2" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>

                                            </div>

                                            <div class="form-group" wire:ignore>
                                                <label>Continue Content(2)</label>
                                                <textarea cols="30" wire:model.lazy="continue_2" id="mytextarea_2"  name="continue_2" rows="6" class="form-control" placeholder="Final section of the content."></textarea>
                                                @error('continue_2') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

                                            </div>


                                            <br>
                                            <div class="form-group">
                                                <h2 style="color: #420175">Third image within content</h2>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label>Image(3)(Landscape)</label>
                                                <div>
                                                    <input class="form-control" wire:model="continue_image_3"  name="continue_image_3" type="file">
                                                    @if($continue_image_3)
                                                        <img src="{{$continue_image_3->temporaryUrl()}}" class="img-fluid" />
                                                    @else
                                                        @if($blog->continue_image_3)
                                                            <img src="{{$blog->Continue3ImagePath}}" class="img-fluid" />
                                                            <small class="text-muted" wire:click="removeContinue3Image" style="cursor: pointer;"><li class="fa fa-crosshairs"></li> Remove Image</small>
                                                        @endif
                                                    @endif
                                                    <small class="form-text text-muted">Max. file size: 3MB. Allowed images: jpg, gif, png. </small>
                                                    @error('continue_image_3') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <small wire:loading wire:target="continue_image_3" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>

                                            </div>

                                            <div class="form-group" wire:ignore>
                                                <label>Continue Content(3)</label>
                                                <textarea cols="30" wire:model.lazy="continue_3" id="mytextarea_3"  name="continue_3" rows="6" class="form-control" placeholder="Final section of the content."></textarea>
                                                @error('continue_3') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

                                            </div>


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
                                                <button style="border-color: #420175; background-color: #420175;" type="submit" wire:loading wire:target="updateBlog" class="btn btn-primary btn-lg"><i class="fa fa-spinner fa-spin"></i> Processing update..</button>
                                                <button class="btn btn-primary btn-lg" wire:loading.remove wire:target="updateBlog" style="background-color: #420175; border-color: #420175;">Update Blog</button>
                                                <a href="/blog/{{$blog->slug}}" target="_blank" class="btn btn-outline-primary" >View post</a>                                            </div>
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

