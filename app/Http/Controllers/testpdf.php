<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class testpdf extends Controller
{
    
  
    public function pdf(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
        $pdf = PDF::loadView('mypdf',$data);
        return $pdf->download ('test.pdf');
       
    }
    public function pdf1(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
        $pdf = PDF::loadView('yazokulu',$data);
        return $pdf->download ('test.pdf');
       
    }
    public function pdf2(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
        $pdf = PDF::loadView('dersin',$data);
        return $pdf->download ('test.pdf');
       
    }
    public function index(){
        return view('mypdf');
    }
    public function pdf3(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
        $pdf = PDF::loadView('dgs',$data);
        return $pdf->download ('test.pdf');
       
    }
    public function pdf4(){
        $data=[
            'title'=>'Kocaeli Üniversitesi'
        
        ];
        $pdf = PDF::loadView('yatay',$data);
        return $pdf->download ('test.pdf');
       
    }
}
