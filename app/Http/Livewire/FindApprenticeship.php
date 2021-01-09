<?php

namespace App\Http\Livewire;

use App\Models\Apprenticeship;
use Livewire\Component;
use Livewire\WithPagination;

class FindApprenticeship extends Component
{
    use WithPagination;
    public $user;
    public $apps_no;

    public $appTitle;

    public $filter;

    public $company;
    public $course;
    public $mentor;

    public $companies;
    public $courses;
    public $mentors;

    public function mount($user)
    {
        $this->user = $user;
        $this->fetchDefaultApp();
        $this->fetchCompanies();
        $this->fetchCourses();
        $this->fetchMentors();
    }

    //For real time sorting


    public function fetchDefaultApp()
    {
       $this->apps_no =  Apprenticeship::orderBy('created_at', 'ASC')->count();

    }


    public function filterResult()
    {
        //If the company is supplied
        if(!empty($this->company)){
            $this->filter = Apprenticeship::orderBy('id', 'DESC')->where([
                ['title', '==', $this->course],
                ['company', '==', $this->company],
                ['mentor_name',  '==', $this->mentor]
            ]);

        }else{
            //If the company in not supplied
            $this->filter = Apprenticeship::orderBy('id', 'DESC')->where([
                ['title', '==', $this->course],
                ['mentor_name',  '==', $this->mentor]
            ]);
        }

    }

    public function fetchCompanies()
    {
        $this->companies = Apprenticeship::where('status', 'Active')->groupBy('company')->get('company');
    }

    public function fetchCourses()
    {
        $this->courses = Apprenticeship::where('status', 'Active')->groupBy('title')->get('title');
    }

    public function fetchMentors()
    {
        $this->mentors = Apprenticeship::where('status', 'Active')->groupBy('mentor_name')->get('mentor_name');
    }

    public function render()
    {

        //If view is being sorted
        if($this->appTitle)
        {
            $this->apps_no = Apprenticeship::where('title', 'like', '%' . $this->appTitle. '%')->count();
            return view('livewire.mentee.find-apprenticeship',
                [
                    'apps' => Apprenticeship::where('title', 'like', '%' . $this->appTitle. '%')->orderBy('created_at', 'DESC')->paginate(10),
                ]);
        }

        return view('livewire.mentee.find-apprenticeship',
        [
            'apps' => Apprenticeship::orderBy('created_at', 'DESC')->paginate(10),
        ]);

    }
}
