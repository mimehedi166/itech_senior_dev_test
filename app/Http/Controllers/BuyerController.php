<?php

namespace App\Http\Controllers;

use App\Buyers;
use App\Records;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    //
    public  function findSecondBuyer()
    {
        $buyer = new Buyers();
        $results = $buyer->findSecondBuyer();
        return view('second-buyer',compact('results'));
//        print_r($result);
    }

    public  function findPurchaseList()
    {
        $buyer = new Buyers();
        $results = $buyer->findPurchaseList();
        return view('purchase-lists',compact('results'));
//        print_r($results);
    }

    public function recordTransfer()
    {
        $path = storage_path()."/app/public/records.json";
        $json_file = json_decode(file_get_contents($path), true);
        if (!empty($json_file)){
            echo "Record is transferring. Please wait for a while ...";
            foreach ($json_file['RECORDS'] as $data)
            {
                $record = new Records();
                $record->id = $data['id'];
                $record->from_statement = $data['from_statement'];
                $record->financial_instrument_code = $data['financial_instrument_code'];
                $record->action = $data['action'];
                $record->entry_price = $data['entry_price'];
                $record->closed_price = $data['closed_price'];
                $record->take_profit_1 = $data['take_profit_1'];
                $record->stop_loss_1 = $data['stop_loss_1'];
                $record->signal_result = $data['signal_result'];
                $record->status = $data['status'];
                $record->statement_batch = $data['statement_batch'];
                $record->closed_on = $data['closed_on'];
                $record->save();
            }
            echo "<br> Record transferred successfully.";
            echo "Hint: The best way to insert record from file to using queue job.";
        }
//        print_r($json_file);exit();

    }

    public function sortJs()
    {
        $s = 1;
        return view('example',compact('s'));
    }

    public function foreachJs()
    {
        $s = 2;
        return view('example',compact('s'));
    }

    public function filterJs()
    {
        $s = 3;
        return view('example',compact('s'));
    }

    public function mapJs()
    {
        $s = 4;
        return view('example',compact('s'));
    }

    public function reduceJs()
    {
        $s = 5;
        return view('example',compact('s'));
    }

    public function funnyRiddle()
    {
        return view('riddles');
    }

    public function defineCallback()
    {
        return view('define-callback');
    }
}
