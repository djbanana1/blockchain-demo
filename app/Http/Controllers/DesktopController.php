<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesktopController extends Controller
{
    /**
     * @param DesktopRequest $request
     * @return Redirector
     */
    public function index(DesktopRequest $request)
    {
        print_r('asdf');exit();
        $message = new Message();
        $message->message = $request->message;
        $message->save();
        return redirect(route('desktop.index'))->withSuccess(__('form.successfully-stored'));
    }
}
