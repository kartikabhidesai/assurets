<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Excel;
use Illuminate\Http\Request;
use Session;
class ExcelController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function createSheet()
    {
        Excel::create('test', function($excel) {

            // Set the title
            $excel->setTitle('Our new awesome title');

            // Chain the setters
            $excel->setCreator('Maatwebsite')
                  ->setCompany('Maatwebsite');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');
            
            $excel->sheet('Sheetname', function($sheet) {
                $sheet->mergeCells('A1:E1');
                
                $sheet->cell('A1', function($cell) {

                    // manipulate the cell
                    $cell->setValue('Tarak Mehta');

                });

            });
        })->export('xlsx');
    }
    public function createSheetView(Request $request)
    {
        

          Session::push('reportdata', $request->input());

                
                // print_r($sessiondata);die;
          Excel::create('test', function($excel) {
            
            // Set the title
            $excel->setTitle('Our new awesome title');

            // Chain the setters
            $excel->setCreator('Maatwebsite')
                  ->setCompany('Maatwebsite');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');
            
            $excel->sheet('Sheetname', function($sheet) {
             
              $sessiondata=session()->all();
               $data['reportdata']=$sessiondata['reportdata'][0];
                 $sheet->loadView('report')->with($data);
                 $sheet->setAllBorders('thin');
            });
        })->export('xlsx');
          Session::forget('reportdata');
    }
}