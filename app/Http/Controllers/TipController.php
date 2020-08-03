<?php

namespace App\Http\Controllers;

use App\Tip;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use DB;
use App\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = Tip::all();
        $date_monday = new Carbon('monday');
        
        return view('tip.index', [
            'tips' => $tips,
            'date_monday' => $date_monday
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
 
        $data = [];
            foreach($request->input('user_id') as $em){               
                $data[]= [
                    'date' => $request->date,
                    'day' => $request->dia,
                    'user_id' => $em,
                    'amount' => $request->amount / (count(array($request->user_id), COUNT_RECURSIVE)-1),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                    
                ]; 
            }  
           
            Tip::insert($data);
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function show(Tip $tip)
    {
        $from = new Carbon('monday');
        $from2 = new Carbon('monday');

        $to = $from2->addDay(6);
        $tips = Tip::whereBetween('date', [$from, $to])->get();    
        $total = 0;

        $sueldo =0; // y las otras variables que deseas que se sumen
        



        return view('tip.show', [
            'tips' => $tips,
            'from' => $from,
            'to' => $to,
            'sueldo' => $sueldo
            
        ]);
    }
   
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function edit(Tip $tip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tip $tip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tip $tip)
    {
        //
    }

    public function listar(Request $request, Tip $tip)
    {   
        $dato = trim($request->get('date'));
        $from = $tip->from;
        $to = date("Y-m-d", strtotime($dato."+ 6 days"));
        $tip = Tip::groupBy('user_id')
                ->where('date', '>=', $dato )
                ->where('date', '<=', $to) 
                ->selectRaw('sum(amount)')
                ->selectRaw('user_id')
                ->get();
     
        $users = User::all();
      
       
        return view('tip.listar', [     
            'from' => $from,
            'to' => $to,
            'dato' => $dato,
            'tip' => $tip,
            'users' => $users        
        ]);
    }
}