<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Hiển thị danh sách sự kiện.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        return response()->json($events);
    }

    /**
     * Hiển thị thông tin của một sự kiện cụ thể.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Events::findOrFail($id);
        return response()->json($event);
    }

    /**
     * Tạo sự kiện mới.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Events();
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->save();
        return response()->json($event, 201);
    }

    /**
     * Cập nhật thông tin của một sự kiện.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Events::findOrFail($id);
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->save();
        return response()->json($event);
    }

    /**
     * Xóa một sự kiện.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Events::findOrFail($id);
        $event->delete();
        return response()->json(null, 204);
    }
}
