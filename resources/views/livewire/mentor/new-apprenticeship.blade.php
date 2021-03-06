<div>
    <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Post new Apprenticeship</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-header">
            <p style="text-align: center;"> <small>Note: Apprenticeship programs will be posted based on your business profile, Make sure your profile is up to date. Feel free to post apprenticeships as many as possible..
                GOOD LUCK!</small></p>
        </div>

        <div class="modal-body">
            <form wire:submit.prevent="newApprenticeship">
                <div class="row form-row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Available Apprenticeships</label>
                            <small class="form-text text-muted">Preferred apprenticeship.</small>
                            <select class="form-control {{$errors->has('title')? 'is-invalid' : '' }}" wire:model.lazy="title" name="language">
                                <option value="">Select Apprenticeship</option>
                                @foreach($apprenticeships as $apr)
                                <option value="{{$apr->duty}}">{{$apr->duty}}</option>
                                @endforeach
                            </select>
                            @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Start Month</label>
                            <small class="form-text text-muted">Preferred start Month.</small>
                            <select class="form-control {{$errors->has('start_month')? 'is-invalid' : '' }}" wire:model.lazy="start_month" name="language">
                                <option value="">Select month</option>
                                <option value="January">January</option>
                                <option value="Febuary">Febuary</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            @error('start_month') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Start Year</label>
                            <small class="form-text text-muted">Preferred start year.</small>
                            <select class="form-control {{$errors->has('start_year')? 'is-invalid' : '' }}" wire:model.lazy="start_year" name="language">
                                <option value="">Select year</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                            </select>
                            @error('start_year') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>End Month</label>
                            <small class="form-text text-muted">Preferred end Month.</small>
                            <select class="form-control {{$errors->has('end_month')? 'is-invalid' : '' }}" wire:model.lazy="end_month" name="language">
                                <option value="">Select month</option>
                                <option value="January">January</option>
                                <option value="Febuary">Febuary</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            @error('end_month') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>End Year</label>
                            <small class="form-text text-muted">Preferred end year.</small>
                            <select class="form-control {{$errors->has('end_year')? 'is-invalid' : '' }}" wire:model.lazy="end_year" name="language">
                                <option value="">Select year</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                            @error('end_year') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Description</label>
                            <div class="form-group">
                                <textarea class="form-control {{$errors->has('details')? 'is-invalid' : '' }}" wire:model.lazy="details" placeholder="Describe what the apprenticeship program is all about.."></textarea>
                                @error('details') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-12">
                        <h5 class="form-title"><span>Service exchange details</span></h5>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Mentorship period(hrs/week)</label>
                            <select class="form-control {{$errors->has('mentorship_period')? 'is-invalid' : '' }}" wire:model.lazy="mentorship_period" name="language">
                                <option value="">Select Period</option>
                                <option value="5">10</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="35">35</option>
                                <option value="40">40</option>
                                <option value="45">45</option>
                                <option value="50">50</option>
                            </select>
                            @error('mentorship_period') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Apprentice period(hrs/week)</label>
                            <select class="form-control {{$errors->has('apprentice_period')? 'is-invalid' : '' }}" wire:model.lazy="apprentice_period" name="language">
                                <option value="">Select Period</option>
                                <option value="5">10</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="35">35</option>
                                <option value="40">40</option>
                                <option value="45">45</option>
                                <option value="50">50</option>
                            </select>
                            @error('apprentice_period') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                </div>
                <button type="submit" wire:loading.remove wire:target="newApprenticeship"  class="btn btn-primary btn-block" style="background-color: #420175; border-color: #420175;">Post Apprenticeship</button>
                <button type="submit" wire:loading wire:target="newApprenticeship"  class="btn btn-primary btn-block" style="background-color: #420175; border-color: #420175;"><i class="fa fa-spinner fa-spin"></i>  Processing request...</button>
            </form>
        </div>
    </div>
</div>
</div>
