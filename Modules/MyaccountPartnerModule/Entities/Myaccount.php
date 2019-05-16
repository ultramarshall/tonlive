<?php

namespace Modules\MyaccountPartnerModule\Entities;

use Illuminate\Database\Eloquent\Model;
use DB;
use User;
class Myaccount extends Model
{
	public static function get_identitas() {
		return DB::table('user_vendor as a')
                 ->join('bussiness_type as b', 'b.id', '=', 'a.bussiness_type_id')
                 ->join('user_vendor_type as c', 'c.id', '=', 'a.user_vendor_type_id')
                 ->where('a.id',  User::info()->id)->first([
                    'a.id as id',
                    'a.company_name',
                    'a.address',
                    'a.postal_code',
                    'a.npwp',
                    'a.email',
                    'a.phone',
                    'a.fax',
                    'a.office_number',
                    'a.website',
                    'a.user_vendor_type_id as company_type',
                 ]);
	}

	public static function company_type() {
		return DB::table('user_vendor_type')->get(['id', 'name']);
	}

	public static function set_identitas($data) {
		$information = [
            "user_vendor_type_id" => $data->company_type,
            "company_name" => $data->company_name,
            "address" => $data->address,
            "postal_code" => $data->postal_code,
            "province" => $data->province,
            "regencies" => $data->regencies,
            "districts" => $data->districts,
            "npwp" => $data->npwp,
            "email" => $data->email,
            "office_number" => $data->office_number,
            "fax" => $data->fax,
            "phone" => $data->phone,
            "website" => $data->website
        ];
        return DB::table('user_vendor')->where('id', $data->id)->update($information);
	}

	public static function get_akta() {
		$akta = DB::table('user_vendor')->where('id', User::info('id'))->first(['akta_company']);
		return json_decode($akta->akta_company);
	}
	public static function set_akta($data) {
		$information = [
			"acta_no" => $data->acta_no,
			"acta_date" => $data->acta_date,
			"acta_notaris" => $data->acta_notaris,
			"acta_document" => $data->acta_document
        ];
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['akta_company'=>json_encode($information)]);
	}
	
	public static function get_pemilik() {
		$akta = DB::table('user_vendor')->where('id', User::info('id'))->first(['pemilik']);
		return json_decode($akta->pemilik);
	}
	public static function set_pemilik($data) {
		$information = [
			"nama" => $data->nama,
			"ktp" => $data->ktp,
			"alamat" => $data->alamat,
			"saham" => $data->saham
        ];
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['pemilik'=>json_encode($information)]);
	}

	public static function get_peralatan() {
		$akta = DB::table('user_vendor')->where('id', User::info('id'))->first(['peralatan']);
		return json_decode($akta->peralatan);
	}
	public static function set_peralatan($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
		$new_asset = [
			"bukti_kepemilikan" => $data->bukti_kepemilikan,
			"jumlah" => $data->jumlah,
			"kapasitas" => $data->kapasitas,
			"keterangan" => $data->keterangan,
			"kondisi" => $data->kondisi,
			"lokasi_sekarang" => $data->lokasi_sekarang,
			"merk" => $data->merk,
			"nama_alat" => $data->nama_alat,
			"tahun_pembuatan" => $data->tahun_pembuatan
        ];
        array_push($assets, (object)$new_asset);
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['peralatan'=>json_encode($assets)]);
	}
}
