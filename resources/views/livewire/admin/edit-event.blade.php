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
                            <h3 class="page-title">Edit Event</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit Event</li>
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
                                        <form wire:submit.prevent="publish">
                                            <div class="form-group">
                                                <label>Theme</label>
                                                <input class="form-control  {{$errors->has('theme')? 'is-invalid' : '' }}" wire:model.lazy="theme" type="text" placeholder="Theme of the event">
                                                @error('theme') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Image(Landscape)</label>
                                                <div>
                                                    <input class="form-control  {{$errors->has('image')? 'is-invalid' : '' }}" wire:model="image" type="file">
                                                    @if($image)
                                                        <img src="{{$image->temporaryUrl()}}" class="img-fluid" >
                                                    @endif
                                                    <img src="{{$old_image}}" class="img-fluid" >
                                                    <small class="form-text text-muted">Max. file size: 3MB. Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                                                    @error('image') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                                <small wire:loading wire:target="image" class="form-text text-muted"><i class="fa fa-spin"><i class="fa fa-spinner"></i></i>&nbsp;&nbsp; Please wait...</small>


                                            </div>

                                            <div class="form-group"

                                            <div class="form-group">
                                                <label>Location</label>
                                                <input class="form-control  {{$errors->has('location')? 'is-invalid' : '' }}" wire:model.lazy="location" type="text" placeholder="Venue of the event">
                                                @error('location') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                            </div>



                                            <div class="col-12">
                                                <h5 class="form-title"><span>Starting Time</span></h5>
                                            </div>

                                            <div class="col-12 ">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Hour(12hrs format).</small>
                                                    <select class="form-control {{$errors->has('start_hour')? 'is-invalid' : '' }}" wire:model.lazy="start_hour">
                                                        <option value="">Select hour</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="3">05</option>
                                                        <option value="3">06</option>
                                                        <option value="3">07</option>
                                                        <option value="3">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                    @error('start_hour') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Minute.</small>
                                                    <select class="form-control {{$errors->has('start_minute')? 'is-invalid' : '' }}" wire:model.lazy="start_minute" >
                                                        <option value="">Select Minute</option>
                                                        <option value="00">00</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option>
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="59">59</option>
                                                    </select>
                                                    @error('start_minute') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Meridian</small>
                                                    <select class="form-control {{$errors->has('start_meridian')? 'is-invalid' : '' }}" wire:model.lazy="start_meridian" name="language">
                                                        <option value="">Select Meridian</option>
                                                        <option value="AM">AM</option>
                                                        <option value="PM">PM</option>
                                                    </select>
                                                    @error('start_meridian') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Time Zone</small>
                                                    <select class="form-control {{$errors->has('start_time_zone')? 'is-invalid' : '' }}" wire:model.lazy="start_time_zone" name="language">
                                                        <option value="">Select Timezone</option>
                                                        <option value="UTC">UTC</option>
                                                    </select>
                                                    @error('start_time_zone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Date</small>
                                                    <input wire:model.lazy="start_date" type="date" class="form-control  {{$errors->has('start_date')? 'is-invalid' : '' }}">
                                                    @error('start_date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <h5 class="form-title"><span>Ending Time</span></h5>
                                            </div>

                                            <div class="col-12 ">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Hour(12hrs format).</small>
                                                    <select class="form-control {{$errors->has('end_hour')? 'is-invalid' : '' }}" wire:model.lazy="end_hour">
                                                        <option value="">Select hour</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="3">05</option>
                                                        <option value="3">06</option>
                                                        <option value="3">07</option>
                                                        <option value="3">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                    @error('end_hour') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Minute.</small>
                                                    <select class="form-control {{$errors->has('end_minute')? 'is-invalid' : '' }}" wire:model.lazy="end_minute" >
                                                        <option value="">Select Minute</option>
                                                        <option value="00">00</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option>
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="59">59</option>
                                                    </select>
                                                    @error('end_minute') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Meridian</small>
                                                    <select class="form-control {{$errors->has('end_meridian')? 'is-invalid' : '' }}" wire:model.lazy="end_meridian" name="language">
                                                        <option value="">Select Meridian</option>
                                                        <option value="AM">AM</option>
                                                        <option value="PM">PM</option>
                                                    </select>
                                                    @error('end_meridian') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Date</small>
                                                    <input type="date" wire:model.lazy="end_date" class="form-control  {{$errors->has('end_date')? 'is-invalid' : '' }}">
                                                    @error('end_date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label>Details</label>
                                                <textarea cols="30" wire:model.lazy="details" rows="6" class="form-control  {{$errors->has('details')? 'is-invalid' : '' }}" placeholder="Details of the event..."></textarea>
                                                @error('details') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="display-block w-100">Event Status</label>
                                                <div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input class="custom-control-input" id="active" name="active-blog" wire:model="status" value="Active" type="radio" checked="">
                                                        <label class="custom-control-label" for="active">Active</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input class="custom-control-input" id="inactive" name="active-blog" wire:model="status" value="Suspended" type="radio">
                                                        <label class="custom-control-label" for="inactive">Inactive</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input class="custom-control-input" id="past" name="active-blog" wire:model="status" value="Past" type="radio">
                                                        <label class="custom-control-label" for="past">Past</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-t-20 text-center">
                                                <button style="border-color: #420175; background-color: #420175;" type="submit" wire:loading wire:target="publish" class="btn btn-primary btn-lg"><i class="fa fa-spinner fa-spin"></i> Processing update..</button>
                                                <button class="btn btn-primary btn-lg" wire:loading.remove wire:target="publish" style="background-color: #420175; border-color: #420175;">Update Event</button>
                                                <a href="/event/{{$event_id}}/subscribers" class="btn btn-primary btn-lg" style="color: white;" type="button">Subscribers</a>
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

