<?php

namespace App\Http\Controllers\Auth;

use App\Helper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /*
     *
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));


        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect('/login')->with('success_message','you are register wait the admin confirmation');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        Validator::make($data, [
            'type' => ['required', 'in:1,2'],]
        )->validate();
        switch ($data['type']) {
            case 1:
                return Validator::make($data, [
                    'name' => ['required', 'string', 'max:255'],
                    'second_name' => ['max:255'],
                    'lastname' => ['required', 'string', 'max:255'],
                    'birth_date' => ['required', 'date'],
                    'school' => ['required', 'string', 'max:255'],
                    'level' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'phone' => ['required', 'numeric'],
                    'password' => ['required', 'string', 'min:6', 'confirmed'],
                    'id_carte' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
                ]);
                break;
            case 2:
                return Validator::make($data, [
                    'name' => ['required', 'string', 'max:255'],
                    'second_name' => ['max:255'],
                    'lastname' => ['required', 'string', 'max:255'],
                    'birth_date' => ['required', 'date'],
                    'job' => ['required', 'string', 'max:255'],
                    'work_place' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'phone' => ['required', 'numeric'],
                    'password' => ['required', 'string', 'min:6', 'confirmed'],
                    'id_carte' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
                ]);
                break;
        }

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        switch ($data['type']) {
            case 1:
                $user =  User::create([
                    'name' => $data['name'],
                    'lastname' => $data['lastname'],
                    'second_name' => $data['second_name'],
                    'school' => $data['school'],
                    'level' => $data['level'],
                    'birth_date' => $data['birth_date'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'password' => Hash::make($data['password']),
                    'id_carte' => $this->uploadImagesArray($data['id_carte'],'users/student/id_carte/'),
                    'avatar' => 'avatar1.svg'
                ]);
                $user->assignRole('student');
                return $user;
                break;
            case 2:
                $user =  User::create([
                    'name' => $data['name'],
                    'lastname' => $data['lastname'],
                    'second_name' => $data['second_name'],
                    'job' => $data['job'],
                    'work_place' => $data['work_place'],
                    'birth_date' => $data['birth_date'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'password' => Hash::make($data['password']),
                    'role' => 'coach',
                    'id_carte' => $this->uploadImagesArray($data['id_carte'],'users/coach/id_carte/'),
                    'avatar' => ''
                ]);
                $user->assignRole('coach');
                return $user;
                break;

        }

    }

    private function uploadImagesArray( $image, string $directory)
    {
      // check
        $extension = $image->getClientOriginalName();
        $name = time() . '.' . $extension;
        $image->move('storage/'.$directory.'/', $name);
        return  $name;
    }

}
