<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\BookingTestDrive;



class BookingTestDriveController extends Controller
{


    public function index()
    {

        $booking = BookingTestDrive::latest()->get();


        return view(
            'admin.testdrive.index',
            compact('booking')
        );

    }




    public function destroy($id)
    {

        $booking = BookingTestDrive::findOrFail($id);


        $booking->delete();


        return back()->with(
            'success',
            'Booking berhasil dihapus'
        );

    }



}