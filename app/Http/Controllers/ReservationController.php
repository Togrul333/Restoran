<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function createReservation(Request $request)
    {
        $reservation = new Reservation();
        $reservation->date = $request->date;
        $reservation->adam_sayisi = $request->yer_sayisi;
        $reservation->filial = $request->filial;
        $reservation->phone = $request->phone;
        $reservation->elave_serh = $request->message;
        $reservation->save();
        return redirect()->back()->with('success','Telebiniz bize iletildi ');

    }
}
