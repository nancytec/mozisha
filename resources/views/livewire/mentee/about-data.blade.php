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
                                        <option value="Accounting">Accounting</option>
                                        <option value="Airlines/Aviation">Airlines/Aviation</option>
                                        <option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
                                        <option value="Alternative Medicine">Alternative Medicine</option>
                                        <option value="Animation">Animation</option>
                                        <option value="Apparel/Fashion">Apparel/Fashion</option>
                                        <option value="Architecture/Planning">Architecture/Planning</option>
                                        <option value="Arts/Crafts">Arts/Crafts</option>
                                        <option value="Automotive">Automotive</option>
                                        <option value="Aviation/Aerospace">Aviation/Aerospace</option>
                                        <option value="Banking/Mortgage">Banking/Mortgage</option>
                                        <option value="Biotechnology/Greentech">Biotechnology/Greentech</option>
                                        <option value="Broadcast Media">Broadcast Media</option>
                                        <option value="Building Materials">Building Materials</option>
                                        <option value="Business Supplies/Equipment">Business Supplies/Equipment</option>
                                        <option value="Capital Markets/Hedge Fund/Private Equity">Capital Markets/Hedge Fund/Private Equity</option>
                                        <option value="Chemicals">Chemicals</option>
                                        <option value="Civic/Social Organization">Civic/Social Organization</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Commercial Real Estate">Commercial Real Estate</option>
                                        <option value="Computer Games">Computer Games</option>
                                        <option value="Computer Hardware">Computer Hardware</option>
                                        <option value="Computer Networking">Computer Networking</option>
                                        <option value="Computer Software/Engineering">Computer Software/Engineering</option>
                                        <option value="Computer/Network Security">Computer/Network Security</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Consumer Electronics">Consumer Electronics</option>
                                        <option value="Consumer Goods">Consumer Goods</option>
                                        <option value="Consumer Services">Consumer Services</option>
                                        <option value="Cosmetics">Cosmetics</option>
                                        <option value="Dairy">Dairy</option>
                                        <option value="Defense/Space">Defense/Space</option>
                                        <option value="Design">Design</option>
                                        <option value="E-Learning">E-Learning</option>
                                        <option value="Education Management">Education Management</option>
                                        <option value="Electrical/Electronic Manufacturing">Electrical/Electronic Manufacturing</option>
                                        <option value="Entertainment/Movie Production">Entertainment/Movie Production</option>
                                        <option value="Environmental Services">Environmental Services</option>
                                        <option value="Events Services">Events Services</option>
                                        <option value="Executive Office">Executive Office</option>
                                        <option value="Facilities Services">Facilities Services</option>
                                        <option value="Farming">Farming</option>
                                        <option value="Financial Services">Financial Services</option>
                                        <option value="Fine Art">Fine Art</option>
                                        <option value="Fishery">Fishery</option>
                                        <option value="Food Production">Food Production</option>
                                        <option value="Food/Beverages">Food/Beverages</option>
                                        <option value="Fundraising">Fundraising</option>
                                        <option value="Furniture">Furniture</option>
                                        <option value="Gambling/Casinos">Gambling/Casinos</option>
                                        <option value="Glass/Ceramics/Concrete">Glass/Ceramics/Concrete</option>
                                        <option value="Government Administration">Government Administration</option>
                                        <option value="Government Relations">Government Relations</option>
                                        <option value="Graphic Design/Web Design">Graphic Design/Web Design</option>
                                        <option value="Health/Fitness">Health/Fitness</option>
                                        <option value="Higher Education/Acadamia">Higher Education/Acadamia</option>
                                        <option value="Hospital/Health Care">Hospital/Health Care</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Human Resources/HR">Human Resources/HR</option>
                                        <option value="Import/Export">Import/Export</option>
                                        <option value="Individual/Family Services">Individual/Family Services</option>
                                        <option value="Industrial Automation">Industrial Automation</option>
                                        <option value="Information Services">Information Services</option>
                                        <option value="Information Technology/IT">Information Technology/IT</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="International Affairs">International Affairs</option>
                                        <option value="International Trade/Development">International Trade/Development</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Investment Banking/Venture">Investment Banking/Venture</option>
                                        <option value="Investment Management/Hedge Fund/Private Equity">Investment Management/Hedge Fund/Private Equity</option>
                                        <option value="Judiciary">Judiciary</option>
                                        <option value="Law Enforcement">Law Enforcement</option>
                                        <option value="Law Practice/Law Firms">Law Practice/Law Firms</option>
                                        <option value="Legal Services">Legal Services</option>
                                        <option value="Legislative Office">Legislative Office</option>
                                        <option value="Leisure/Travel">Leisure/Travel</option>
                                        <option value="Library">Library</option>
                                        <option value="Logistics/Procurement">Logistics/Procurement</option>
                                        <option value="Luxury Goods/Jewelry">Luxury Goods/Jewelry</option>
                                        <option value="Machinery">Machinery</option>
                                        <option value="Management Consulting">Management Consulting</option>
                                        <option value="Maritime">Maritime</option>
                                        <option value="Market Research">Market Research</option>
                                        <option value="Marketing/Advertising/Sales">Marketing/Advertising/Sales</option>
                                        <option value="Mechanical or Industrial Engineering">Mechanical or Industrial Engineering</option>
                                        <option value="Media Production">Media Production</option>
                                        <option value="Medical Equipment">Medical Equipment</option>
                                        <option value="Medical Practice">Medical Practice</option>
                                        <option value="Mental Health Care">Mental Health Care</option>
                                        <option value="Military Industry">Military Industry</option>
                                        <option value="Mining/Metals">Mining/Metals</option>
                                        <option value="Motion Pictures/Film">Motion Pictures/Film</option>
                                        <option value="Museums/Institutions">Museums/Institutions</option>
                                        <option value="Music">Music</option>
                                        <option value="Nanotechnology">Nanotechnology</option>
                                        <option value="Newspapers/Journalism">Newspapers/Journalism</option>
                                        <option value="Non-Profit/Volunteering">Non-Profit/Volunteering</option>
                                        <option value="Oil/Energy/Solar/Greentech">Oil/Energy/Solar/Greentech</option>
                                        <option value="Online Publishing">Online Publishing</option>
                                        <option value="Other Industry">Other Industry</option>
                                        <option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
                                        <option value="Package/Freight Delivery">Package/Freight Delivery</option>
                                        <option value="Packaging/Containers">Packaging/Containers</option>
                                        <option value="Paper/Forest Products">Paper/Forest Products</option>
                                        <option value="Performing Arts">Performing Arts</option>
                                        <option value="Pharmaceuticals">Pharmaceuticals</option>
                                        <option value="Philanthropy">Philanthropy</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Plastics">Plastics</option>
                                        <option value="Political Organization">Political Organization</option>
                                        <option value="Primary/Secondary Education">Primary/Secondary Education</option>
                                        <option value="Printing">Printing</option>
                                        <option value="Professional Training">Professional Training</option>
                                        <option value="Program Development">Program Development</option>
                                        <option value="Public Relations/PR">Public Relations/PR</option>
                                        <option value="Public Safety">Public Safety</option>
                                        <option value="Publishing Industry">Publishing Industry</option>
                                        <option value="Railroad Manufacture">Railroad Manufacture</option>
                                        <option value="Ranching">Ranching</option>
                                        <option value="Real Estate/Mortgage">Real Estate/Mortgage</option>
                                        <option value="Recreational Facilities/Services">Recreational Facilities/Services</option>
                                        <option value="Religious Institutions">Religious Institutions</option>
                                        <option value="Renewables/Environment">Renewables/Environment</option>
                                        <option value="Research Industry">Research Industry</option>
                                        <option value="Restaurants">Restaurants</option>
                                        <option value="Retail Industry">Retail Industry</option>
                                        <option value="Security/Investigations">Security/Investigations</option>
                                        <option value="Semiconductors">Semiconductors</option>
                                        <option value="Shipbuilding">Shipbuilding</option>
                                        <option value="Sporting Goods">Sporting Goods</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Staffing/Recruiting">Staffing/Recruiting</option>
                                        <option value="Supermarkets">Supermarkets</option>
                                        <option value="Telecommunications">Telecommunications</option>
                                        <option value="Textiles">Textiles</option>
                                        <option value="Think Tanks">Think Tanks</option>
                                        <option value="Tobacco">Tobacco</option>
                                        <option value="Translation/Localization">Translation/Localization</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Utilities">Utilities</option>
                                        <option value="Venture Capital/VC">Venture Capital/VC</option>
                                        <option value="Veterinary">Veterinary</option>
                                        <option value="Warehousing">Warehousing</option>
                                        <option value="Wholesale">Wholesale</option>
                                        <option value="Wine/Spirits">Wine/Spirits</option>
                                        <option value="Wireless">Wireless</option>
                                        <option value="Writing/Editing">Writing/Editing</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Industries I'm interested in</label>
                                    <select class="form-control" wire:model.lazy="industry" name="language">
                                        <option value="Null">Select Industry</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Airlines/Aviation">Airlines/Aviation</option>
                                        <option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
                                        <option value="Alternative Medicine">Alternative Medicine</option>
                                        <option value="Animation">Animation</option>
                                        <option value="Apparel/Fashion">Apparel/Fashion</option>
                                        <option value="Architecture/Planning">Architecture/Planning</option>
                                        <option value="Arts/Crafts">Arts/Crafts</option>
                                        <option value="Automotive">Automotive</option>
                                        <option value="Aviation/Aerospace">Aviation/Aerospace</option>
                                        <option value="Banking/Mortgage">Banking/Mortgage</option>
                                        <option value="Biotechnology/Greentech">Biotechnology/Greentech</option>
                                        <option value="Broadcast Media">Broadcast Media</option>
                                        <option value="Building Materials">Building Materials</option>
                                        <option value="Business Supplies/Equipment">Business Supplies/Equipment</option>
                                        <option value="Capital Markets/Hedge Fund/Private Equity">Capital Markets/Hedge Fund/Private Equity</option>
                                        <option value="Chemicals">Chemicals</option>
                                        <option value="Civic/Social Organization">Civic/Social Organization</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Commercial Real Estate">Commercial Real Estate</option>
                                        <option value="Computer Games">Computer Games</option>
                                        <option value="Computer Hardware">Computer Hardware</option>
                                        <option value="Computer Networking">Computer Networking</option>
                                        <option value="Computer Software/Engineering">Computer Software/Engineering</option>
                                        <option value="Computer/Network Security">Computer/Network Security</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Consumer Electronics">Consumer Electronics</option>
                                        <option value="Consumer Goods">Consumer Goods</option>
                                        <option value="Consumer Services">Consumer Services</option>
                                        <option value="Cosmetics">Cosmetics</option>
                                        <option value="Dairy">Dairy</option>
                                        <option value="Defense/Space">Defense/Space</option>
                                        <option value="Design">Design</option>
                                        <option value="E-Learning">E-Learning</option>
                                        <option value="Education Management">Education Management</option>
                                        <option value="Electrical/Electronic Manufacturing">Electrical/Electronic Manufacturing</option>
                                        <option value="Entertainment/Movie Production">Entertainment/Movie Production</option>
                                        <option value="Environmental Services">Environmental Services</option>
                                        <option value="Events Services">Events Services</option>
                                        <option value="Executive Office">Executive Office</option>
                                        <option value="Facilities Services">Facilities Services</option>
                                        <option value="Farming">Farming</option>
                                        <option value="Financial Services">Financial Services</option>
                                        <option value="Fine Art">Fine Art</option>
                                        <option value="Fishery">Fishery</option>
                                        <option value="Food Production">Food Production</option>
                                        <option value="Food/Beverages">Food/Beverages</option>
                                        <option value="Fundraising">Fundraising</option>
                                        <option value="Furniture">Furniture</option>
                                        <option value="Gambling/Casinos">Gambling/Casinos</option>
                                        <option value="Glass/Ceramics/Concrete">Glass/Ceramics/Concrete</option>
                                        <option value="Government Administration">Government Administration</option>
                                        <option value="Government Relations">Government Relations</option>
                                        <option value="Graphic Design/Web Design">Graphic Design/Web Design</option>
                                        <option value="Health/Fitness">Health/Fitness</option>
                                        <option value="Higher Education/Acadamia">Higher Education/Acadamia</option>
                                        <option value="Hospital/Health Care">Hospital/Health Care</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Human Resources/HR">Human Resources/HR</option>
                                        <option value="Import/Export">Import/Export</option>
                                        <option value="Individual/Family Services">Individual/Family Services</option>
                                        <option value="Industrial Automation">Industrial Automation</option>
                                        <option value="Information Services">Information Services</option>
                                        <option value="Information Technology/IT">Information Technology/IT</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="International Affairs">International Affairs</option>
                                        <option value="International Trade/Development">International Trade/Development</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Investment Banking/Venture">Investment Banking/Venture</option>
                                        <option value="Investment Management/Hedge Fund/Private Equity">Investment Management/Hedge Fund/Private Equity</option>
                                        <option value="Judiciary">Judiciary</option>
                                        <option value="Law Enforcement">Law Enforcement</option>
                                        <option value="Law Practice/Law Firms">Law Practice/Law Firms</option>
                                        <option value="Legal Services">Legal Services</option>
                                        <option value="Legislative Office">Legislative Office</option>
                                        <option value="Leisure/Travel">Leisure/Travel</option>
                                        <option value="Library">Library</option>
                                        <option value="Logistics/Procurement">Logistics/Procurement</option>
                                        <option value="Luxury Goods/Jewelry">Luxury Goods/Jewelry</option>
                                        <option value="Machinery">Machinery</option>
                                        <option value="Management Consulting">Management Consulting</option>
                                        <option value="Maritime">Maritime</option>
                                        <option value="Market Research">Market Research</option>
                                        <option value="Marketing/Advertising/Sales">Marketing/Advertising/Sales</option>
                                        <option value="Mechanical or Industrial Engineering">Mechanical or Industrial Engineering</option>
                                        <option value="Media Production">Media Production</option>
                                        <option value="Medical Equipment">Medical Equipment</option>
                                        <option value="Medical Practice">Medical Practice</option>
                                        <option value="Mental Health Care">Mental Health Care</option>
                                        <option value="Military Industry">Military Industry</option>
                                        <option value="Mining/Metals">Mining/Metals</option>
                                        <option value="Motion Pictures/Film">Motion Pictures/Film</option>
                                        <option value="Museums/Institutions">Museums/Institutions</option>
                                        <option value="Music">Music</option>
                                        <option value="Nanotechnology">Nanotechnology</option>
                                        <option value="Newspapers/Journalism">Newspapers/Journalism</option>
                                        <option value="Non-Profit/Volunteering">Non-Profit/Volunteering</option>
                                        <option value="Oil/Energy/Solar/Greentech">Oil/Energy/Solar/Greentech</option>
                                        <option value="Online Publishing">Online Publishing</option>
                                        <option value="Other Industry">Other Industry</option>
                                        <option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
                                        <option value="Package/Freight Delivery">Package/Freight Delivery</option>
                                        <option value="Packaging/Containers">Packaging/Containers</option>
                                        <option value="Paper/Forest Products">Paper/Forest Products</option>
                                        <option value="Performing Arts">Performing Arts</option>
                                        <option value="Pharmaceuticals">Pharmaceuticals</option>
                                        <option value="Philanthropy">Philanthropy</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Plastics">Plastics</option>
                                        <option value="Political Organization">Political Organization</option>
                                        <option value="Primary/Secondary Education">Primary/Secondary Education</option>
                                        <option value="Printing">Printing</option>
                                        <option value="Professional Training">Professional Training</option>
                                        <option value="Program Development">Program Development</option>
                                        <option value="Public Relations/PR">Public Relations/PR</option>
                                        <option value="Public Safety">Public Safety</option>
                                        <option value="Publishing Industry">Publishing Industry</option>
                                        <option value="Railroad Manufacture">Railroad Manufacture</option>
                                        <option value="Ranching">Ranching</option>
                                        <option value="Real Estate/Mortgage">Real Estate/Mortgage</option>
                                        <option value="Recreational Facilities/Services">Recreational Facilities/Services</option>
                                        <option value="Religious Institutions">Religious Institutions</option>
                                        <option value="Renewables/Environment">Renewables/Environment</option>
                                        <option value="Research Industry">Research Industry</option>
                                        <option value="Restaurants">Restaurants</option>
                                        <option value="Retail Industry">Retail Industry</option>
                                        <option value="Security/Investigations">Security/Investigations</option>
                                        <option value="Semiconductors">Semiconductors</option>
                                        <option value="Shipbuilding">Shipbuilding</option>
                                        <option value="Sporting Goods">Sporting Goods</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Staffing/Recruiting">Staffing/Recruiting</option>
                                        <option value="Supermarkets">Supermarkets</option>
                                        <option value="Telecommunications">Telecommunications</option>
                                        <option value="Textiles">Textiles</option>
                                        <option value="Think Tanks">Think Tanks</option>
                                        <option value="Tobacco">Tobacco</option>
                                        <option value="Translation/Localization">Translation/Localization</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Utilities">Utilities</option>
                                        <option value="Venture Capital/VC">Venture Capital/VC</option>
                                        <option value="Veterinary">Veterinary</option>
                                        <option value="Warehousing">Warehousing</option>
                                        <option value="Wholesale">Wholesale</option>
                                        <option value="Wine/Spirits">Wine/Spirits</option>
                                        <option value="Wireless">Wireless</option>
                                        <option value="Writing/Editing">Writing/Editing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Personal interests</label>
                                    <small class="form-text text-muted">Personal interests help mentors learn a bit more about you.</small>
                                    <select class="form-control {{$errors->has('interest')? 'is-invalid' : '' }}" wire:model.lazy="interest" name="language">
                                        <option value="Null">Select Interest</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Airlines/Aviation">Airlines/Aviation</option>
                                        <option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
                                        <option value="Alternative Medicine">Alternative Medicine</option>
                                        <option value="Animation">Animation</option>
                                        <option value="Apparel/Fashion">Apparel/Fashion</option>
                                        <option value="Architecture/Planning">Architecture/Planning</option>
                                        <option value="Arts/Crafts">Arts/Crafts</option>
                                        <option value="Automotive">Automotive</option>
                                        <option value="Aviation/Aerospace">Aviation/Aerospace</option>
                                        <option value="Banking/Mortgage">Banking/Mortgage</option>
                                        <option value="Biotechnology/Greentech">Biotechnology/Greentech</option>
                                        <option value="Broadcast Media">Broadcast Media</option>
                                        <option value="Building Materials">Building Materials</option>
                                        <option value="Business Supplies/Equipment">Business Supplies/Equipment</option>
                                        <option value="Capital Markets/Hedge Fund/Private Equity">Capital Markets/Hedge Fund/Private Equity</option>
                                        <option value="Chemicals">Chemicals</option>
                                        <option value="Civic/Social Organization">Civic/Social Organization</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Commercial Real Estate">Commercial Real Estate</option>
                                        <option value="Computer Games">Computer Games</option>
                                        <option value="Computer Hardware">Computer Hardware</option>
                                        <option value="Computer Networking">Computer Networking</option>
                                        <option value="Computer Software/Engineering">Computer Software/Engineering</option>
                                        <option value="Computer/Network Security">Computer/Network Security</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Consumer Electronics">Consumer Electronics</option>
                                        <option value="Consumer Goods">Consumer Goods</option>
                                        <option value="Consumer Services">Consumer Services</option>
                                        <option value="Cosmetics">Cosmetics</option>
                                        <option value="Dairy">Dairy</option>
                                        <option value="Defense/Space">Defense/Space</option>
                                        <option value="Design">Design</option>
                                        <option value="E-Learning">E-Learning</option>
                                        <option value="Education Management">Education Management</option>
                                        <option value="Electrical/Electronic Manufacturing">Electrical/Electronic Manufacturing</option>
                                        <option value="Entertainment/Movie Production">Entertainment/Movie Production</option>
                                        <option value="Environmental Services">Environmental Services</option>
                                        <option value="Events Services">Events Services</option>
                                        <option value="Executive Office">Executive Office</option>
                                        <option value="Facilities Services">Facilities Services</option>
                                        <option value="Farming">Farming</option>
                                        <option value="Financial Services">Financial Services</option>
                                        <option value="Fine Art">Fine Art</option>
                                        <option value="Fishery">Fishery</option>
                                        <option value="Food Production">Food Production</option>
                                        <option value="Food/Beverages">Food/Beverages</option>
                                        <option value="Fundraising">Fundraising</option>
                                        <option value="Furniture">Furniture</option>
                                        <option value="Gambling/Casinos">Gambling/Casinos</option>
                                        <option value="Glass/Ceramics/Concrete">Glass/Ceramics/Concrete</option>
                                        <option value="Government Administration">Government Administration</option>
                                        <option value="Government Relations">Government Relations</option>
                                        <option value="Graphic Design/Web Design">Graphic Design/Web Design</option>
                                        <option value="Health/Fitness">Health/Fitness</option>
                                        <option value="Higher Education/Acadamia">Higher Education/Acadamia</option>
                                        <option value="Hospital/Health Care">Hospital/Health Care</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Human Resources/HR">Human Resources/HR</option>
                                        <option value="Import/Export">Import/Export</option>
                                        <option value="Individual/Family Services">Individual/Family Services</option>
                                        <option value="Industrial Automation">Industrial Automation</option>
                                        <option value="Information Services">Information Services</option>
                                        <option value="Information Technology/IT">Information Technology/IT</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="International Affairs">International Affairs</option>
                                        <option value="International Trade/Development">International Trade/Development</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Investment Banking/Venture">Investment Banking/Venture</option>
                                        <option value="Investment Management/Hedge Fund/Private Equity">Investment Management/Hedge Fund/Private Equity</option>
                                        <option value="Judiciary">Judiciary</option>
                                        <option value="Law Enforcement">Law Enforcement</option>
                                        <option value="Law Practice/Law Firms">Law Practice/Law Firms</option>
                                        <option value="Legal Services">Legal Services</option>
                                        <option value="Legislative Office">Legislative Office</option>
                                        <option value="Leisure/Travel">Leisure/Travel</option>
                                        <option value="Library">Library</option>
                                        <option value="Logistics/Procurement">Logistics/Procurement</option>
                                        <option value="Luxury Goods/Jewelry">Luxury Goods/Jewelry</option>
                                        <option value="Machinery">Machinery</option>
                                        <option value="Management Consulting">Management Consulting</option>
                                        <option value="Maritime">Maritime</option>
                                        <option value="Market Research">Market Research</option>
                                        <option value="Marketing/Advertising/Sales">Marketing/Advertising/Sales</option>
                                        <option value="Mechanical or Industrial Engineering">Mechanical or Industrial Engineering</option>
                                        <option value="Media Production">Media Production</option>
                                        <option value="Medical Equipment">Medical Equipment</option>
                                        <option value="Medical Practice">Medical Practice</option>
                                        <option value="Mental Health Care">Mental Health Care</option>
                                        <option value="Military Industry">Military Industry</option>
                                        <option value="Mining/Metals">Mining/Metals</option>
                                        <option value="Motion Pictures/Film">Motion Pictures/Film</option>
                                        <option value="Museums/Institutions">Museums/Institutions</option>
                                        <option value="Music">Music</option>
                                        <option value="Nanotechnology">Nanotechnology</option>
                                        <option value="Newspapers/Journalism">Newspapers/Journalism</option>
                                        <option value="Non-Profit/Volunteering">Non-Profit/Volunteering</option>
                                        <option value="Oil/Energy/Solar/Greentech">Oil/Energy/Solar/Greentech</option>
                                        <option value="Online Publishing">Online Publishing</option>
                                        <option value="Other Industry">Other Industry</option>
                                        <option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
                                        <option value="Package/Freight Delivery">Package/Freight Delivery</option>
                                        <option value="Packaging/Containers">Packaging/Containers</option>
                                        <option value="Paper/Forest Products">Paper/Forest Products</option>
                                        <option value="Performing Arts">Performing Arts</option>
                                        <option value="Pharmaceuticals">Pharmaceuticals</option>
                                        <option value="Philanthropy">Philanthropy</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Plastics">Plastics</option>
                                        <option value="Political Organization">Political Organization</option>
                                        <option value="Primary/Secondary Education">Primary/Secondary Education</option>
                                        <option value="Printing">Printing</option>
                                        <option value="Professional Training">Professional Training</option>
                                        <option value="Program Development">Program Development</option>
                                        <option value="Public Relations/PR">Public Relations/PR</option>
                                        <option value="Public Safety">Public Safety</option>
                                        <option value="Publishing Industry">Publishing Industry</option>
                                        <option value="Railroad Manufacture">Railroad Manufacture</option>
                                        <option value="Ranching">Ranching</option>
                                        <option value="Real Estate/Mortgage">Real Estate/Mortgage</option>
                                        <option value="Recreational Facilities/Services">Recreational Facilities/Services</option>
                                        <option value="Religious Institutions">Religious Institutions</option>
                                        <option value="Renewables/Environment">Renewables/Environment</option>
                                        <option value="Research Industry">Research Industry</option>
                                        <option value="Restaurants">Restaurants</option>
                                        <option value="Retail Industry">Retail Industry</option>
                                        <option value="Security/Investigations">Security/Investigations</option>
                                        <option value="Semiconductors">Semiconductors</option>
                                        <option value="Shipbuilding">Shipbuilding</option>
                                        <option value="Sporting Goods">Sporting Goods</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Staffing/Recruiting">Staffing/Recruiting</option>
                                        <option value="Supermarkets">Supermarkets</option>
                                        <option value="Telecommunications">Telecommunications</option>
                                        <option value="Textiles">Textiles</option>
                                        <option value="Think Tanks">Think Tanks</option>
                                        <option value="Tobacco">Tobacco</option>
                                        <option value="Translation/Localization">Translation/Localization</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Utilities">Utilities</option>
                                        <option value="Venture Capital/VC">Venture Capital/VC</option>
                                        <option value="Veterinary">Veterinary</option>
                                        <option value="Warehousing">Warehousing</option>
                                        <option value="Wholesale">Wholesale</option>
                                        <option value="Wine/Spirits">Wine/Spirits</option>
                                        <option value="Wireless">Wireless</option>
                                        <option value="Writing/Editing">Writing/Editing</option>
                                    </select>
                                    @error('interest') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Familiar tools</label>
                                    <small class="form-text text-muted">Share what tools you're familiar with.</small>
                                    <input type="text" class="form-control"  wire:model.lazy="tool" placeholder="Enter any familiar tool..">

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
