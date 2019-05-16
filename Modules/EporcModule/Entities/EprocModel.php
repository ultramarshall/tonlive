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
                                  c.kode_rup,
                                  c.nama_paket,
                                  c.sumber_dana,
                                  (SELECT COUNT(id) FROM merging_vendor_project WHERE planning_id=a.id) as count_participants
                           FROM planning as a 
                           LEFT JOIN rup as c ON a.rup_id = c.id
                           WHERE a.id=?',[$id]);

    }

    public static function classifications() {
        return DB::table('tender_category')->get();
    }

	public static function peserta_tender($id) {
		return DB::table('merging_vendor_project as a')
                ->join('user_vendor as b', 'a.user_vendor_id', '=', 'b.id')
                ->join('user_vendor_type as c', 'b.user_vendor_type_id', '=', 'c.id')
                ->where('planning_id', '=', $id)
                ->get([
                    'b.company_name',
                    'c.name as type_vendor'
                ]);

	}
}
