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

    public function create(Request $request)
    {
        $event = new Events();

        $event->Ten_Events = $request->Ten_Events;
        $event->Anh_Events = $request->Anh_Events;

        $data = $event->save();
        if ($data) {
            return response()->json([
                // 'error' => 400,
                // 'message' => 'something'
                $event
            ]);
        } else {
            return response()->json([
                // 'status' => 200,
                // 'message' => 'data success saved'
                $event
            ]);
        }
    }

    public function updateBtid(Request $request, $id)
    {
        $event = Events::findOrFail($id);

        $validatedData = $request->validate([
            'Ten_Events' => 'required|string|max:255',
            'Anh_Events' => 'required|string|max:255',
        ]);

        $event->update($validatedData);

        return response()->json([
            'status' => 200,
            'message' => 'Event updated successfully',
            'data' => $event
        ]);
    }
    public function deleteBtid($id)
    {
        $event = Events::findOrFail($id);

        if ($event->delete()) {
            return response()->json([
                'status' => 200,
                'message' => 'Đã xóa xong'
            ]);
        } else {
            return response()->json([
                'error' => 400,
                'message' => 'Chưa xóa được'
            ]);
        }
    }
}
