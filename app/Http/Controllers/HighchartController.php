<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reserva;

class HighchartController extends Controller
{
     public function handleChart()
    {
        $ReservasData = Reserva::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('fecha_reserva', date('Y'))
                    ->groupBy(\DB::raw("Month(fecha_reserva)"))
                    ->pluck('count');
		 
		 $userData = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
		 
		 $ReservasXUsersData = Reserva::select(\DB::raw("id_users, COUNT(id_users) as count"))
                    ->whereYear('fecha_reserva', date('Y'))
                    ->groupBy(\DB::raw("id_users"))
                    ->pluck('count');
		 
          
        return view('highChart.index', compact('userData', 'ReservasData', 'ReservasXUsersData'));
    }
}
