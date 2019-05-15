<?php

namespace Modules\EporcModule\Entities;

use Illuminate\Database\Eloquent\Model;
use DB;
use Request;

class EprocModel extends Model
{
	public static function tender() {
		return DB::table('planning as a')
                  ->join('tender_category as c', 'c.id', '=', 'a.tender_category_id')
                  ->get([
                      'a.id',
                      'a.tender_name',
                      'a.value',
                      'a.tender_category_id',
                      'c.name',
                  ]);

	}

    public static function tender_detail($id) {
        
        return DB::table('planning as a')
                  ->where('a.id', '=', $id)
                  ->first([
                      'a.id',
                      'a.tender_name',
                      'a.value',
                      'a.instansi',
                      'a.satuan_kerja',
                      'a.nilai_pagu_paket',
                      'a.value as hps',
                      'a.cara_pembayaran',
                      'a.lokasi_pekerjaan',
                      'a.kualifikasi_usaha',
                      'a.create_date',
                  ]);

    }

	public static function classifications() {
		
		return DB::table('tender_category')->get();

	}
}