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
	public static function edit_peralatan($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['peralatan'=>json_encode($assets)]);
	}

	public static function get_pengalaman() {
		$result = DB::table('user_vendor')->where('id', User::info('id'))->first(['pengalaman']);
		return json_decode($result->pengalaman);
	}
	public static function set_pengalaman($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
		$new_asset = [
			"pekerjaan" => $data->pekerjaan,
			"lokasi" => $data->lokasi,
			"instansi" => $data->instansi,
			"alamat" => $data->alamat,
			"tanggal_kontrak" => $data->tanggal_kontrak,
			"selesai_kontrak" => $data->selesai_kontrak,
			"nilai_kontrak" => $data->nilai_kontrak,
			"jenis_kontrak" => $data->jenis_kontrak
        ];
        array_push($assets, (object)$new_asset);
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['pengalaman'=>json_encode($assets)]);
	}
	public static function edit_pengalaman($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['pengalaman'=>json_encode($assets)]);
	}

	public static function get_tenaga_ahli() {
		$result = DB::table('user_vendor')->where('id', User::info('id'))->first(['tenaga_ahli']);
		return json_decode($result->tenaga_ahli);
	}
	public static function set_tenaga_ahli($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
		$new_asset = [
			"nama" => $data->nama,
			"tgl_lahir" => $data->tgl_lahir,
			"pendidikan" => $data->pendidikan,
			"pengalaman" => $data->pengalaman,
			"keahlian" => $data->keahlian,
        ];
        array_push($assets, (object)$new_asset);
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['tenaga_ahli'=>json_encode($assets)]);
	}
	public static function edit_tenaga_ahli($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['tenaga_ahli'=>json_encode($assets)]);
	}

	public static function get_pengurus() {
		$result = DB::table('user_vendor')->where('id', User::info('id'))->first(['pengurus']);
		return json_decode($result->pengurus);
	}
	public static function set_pengurus($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
		$new_asset = [
			"nama" => $data->nama,
			"no_ktp" => $data->no_ktp,
			"alamat" => $data->alamat,
			"jabatan" => $data->jabatan,
			"mulai" => $data->mulai,
			"sampai" => $data->sampai
        ];
        array_push($assets, (object)$new_asset);
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['pengurus'=>json_encode($assets)]);
	}
	public static function edit_pengurus($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['pengurus'=>json_encode($assets)]);
	}

	public static function get_izin() {
		$result = DB::table('user_vendor')->where('id', User::info('id'))->first(['izin']);
		return json_decode($result->izin);
	}
	public static function set_izin($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
		$new_asset = [
			"izin_usaha" => $data->izin_usaha,
			"no_surat" => $data->no_surat,
			"berlaku_sampai" => $data->berlaku_sampai,
			"instansi" => $data->instansi,
			"kualifikasi" => $data->kualifikasi,
        ];
        array_push($assets, (object)$new_asset);
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['izin'=>json_encode($assets)]);
	}
	public static function edit_izin($data) {
		$assets = [];
		$old_data = json_decode($data->old_data);
		if ( $old_data != null ){
			foreach ($old_data as $i => $od) {
				array_push($assets, $od);
			}
		}
        return DB::table('user_vendor')->where('id', User::info('id'))->update(['izin'=>json_encode($assets)]);
	}

}
