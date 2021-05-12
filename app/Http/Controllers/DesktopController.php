<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImmutableMessage;
use Illuminate\Support\Facades\DB;

class DesktopController extends Controller
{
    /**
     * @param Request $request
     * @return Redirector
     */
    public function store(Request $request)
    {
        $message = $request->all()['name'];
        $model = new ImmutableMessage();
        $model->message = $message;
        $model->save();
        return redirect('/blockchain');
    }



    /**
     * @return Redirector
     */
    public function checkData()
    {
        print_r(ImmutableMessage::validateData());exit();
        return redirect('/blockchain');
    }



    /**
     * @param DesktopRequest $request
     * @return Redirector
     */
    public function view()
    {
        $messages = DB::table('log')->get();
        $file_content = '';
        foreach ($messages as $message) {
            $file_content .= '<p>'.$message->message.'</p>';
        }
        return view('welcome', ['messages' => $file_content]);
    }
}
