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
        return DB::select('SELECT a.tender_name,
                                  a.id,
                                  a.tender_name,
                                  a.value,
                                  a.instansi,
                                  a.satuan_kerja,
                                  a.nilai_pagu_paket,
                                  a.value as hps,
                                  a.cara_pembayaran,
                                  a.lokasi_pekerjaan,
                                  a.qualification_terms,
                                  a.create_date,
                                  (SELECT COUNT(id) FROM merging_vendor_project WHERE planning_id=a.id) as count_participants
                           FROM planning as a WHERE a.id=?',[$id]);

    }

    public static function classifications() {
        return DB::table('tender_category')->get();
    }

	public static function peserta_tender($id) {
		return DB::table('merging_vendor_project')
                ->where('planning_id', '=', $id)
                ->get();

	}
}
