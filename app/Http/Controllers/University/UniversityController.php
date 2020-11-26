<?php

namespace App\Http\Controllers\University;

    use App\Http\Requests\CreateUniversityRequest;
    use App\Http\Requests\UpdateUniversityRequest;
    use App\Repositories\UniversityRepository;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Flash;
    use Response;
    use App\University ;
    use App\Department;
    use App\Advisor;
    use App\Role;

    class UniversityController extends Controller
    {
        /** @var  UniversityRepository */
        // private $universityRepository;

        public function __construct()
        {
            
            $this->middleware('auth');
            $this->middleware('admin');
            $this->middleware('prevent-back-history');
            
        }

        public function index(Request $request)
        {
            $universities = University::all();

            return view('universities.index')->with('universities', $universities);
        }
      
        public function create()
        {   $role =Role::orderBy('name')->get(); 
            $university = University::orderBy('created_at','asc')->get();
            return view('universities.create')->with('roles',$role)->with('universities',$university);
        }

        public function store(CreateUniversityRequest $request)
        {
            $data= request()->validate([
                "name"=>["required","unique:universities"], 
                "address"=>"required",
                ]);
    
            // $input = $request->all();

            University::create($data);

            Flash::success('University saved successfully.');
            $university = University::orderBy('created_at')->get();
        return view('universities.coordinator.create')->with('universities',$university);

            // return redirect(route('universities.index'));
        }


        public function show($id)
        {
    
            $university = University::find($id);

            return view('universities.show')->with('university', $university);
        }

        public function edit($id)
        {
            $university = University::find($id);
            return view('universities.edit')->with('university', $university);
        }

        public function update($id, UpdateUniversityRequest $request)
        {
            $university = $this->universityRepository->find($id);

            if (empty($university)) {
                Flash::error('University not found');

                return redirect(route('universities.index'));
            }

            $university = $this->universityRepository->update($request->all(), $id);

            Flash::success('University updated successfully.');

            return redirect(route('universities.index'));
        }

    
        public function destroy($id)
        {
            $university =University::find($id);
            $university->delete();
            //Flash::success('University deleted successfully.');
            return redirect(route('universities.index'));
        }
    }
