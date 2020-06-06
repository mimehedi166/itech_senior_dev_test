<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Buyers extends Model
{
    //
    public function findSecondBuyer()
    {
        $sql = DB::raw(
            "SELECT
                b.id,
                b.name,
                (SELECT
                        SUM(amount)
                    FROM
                        diary_taken
                    WHERE
                        buyer_id = b.id) AS diary,
                (SELECT
                        SUM(amount)
                    FROM
                        eraser_taken
                    WHERE
                        buyer_id = b.id) AS eraser,
                (SELECT
                        SUM(amount)
                    FROM
                        pen_taken
                    WHERE
                        buyer_id = b.id) AS pen,
                (SELECT SUM(diary + eraser + pen)) AS total_amount
            FROM
                buyers AS b
            GROUP BY b.id ORDER BY total_amount DESC LIMIT 1,1;"
        );
        return DB::select($sql);
    }
    public function findPurchaseList()
    {
        $sql = DB::raw(
            "SELECT
                b.id,
                b.name,
                (SELECT
                        COALESCE(SUM(amount),0)
                    FROM
                        diary_taken
                    WHERE
                        buyer_id = b.id) AS diary,
                (SELECT
                        COALESCE(SUM(amount),0)
                    FROM
                        eraser_taken
                    WHERE
                        buyer_id = b.id) AS eraser,
                (SELECT
                        COALESCE(SUM(amount),0)
                    FROM
                        pen_taken
                    WHERE
                        buyer_id = b.id) AS pen,
                (SELECT COALESCE (SUM(diary + eraser + pen), 0)) AS total_amount
            FROM
                buyers AS b
            GROUP BY b.id ORDER BY total_amount ASC;"
        );
        return DB::select($sql);
    }
}
