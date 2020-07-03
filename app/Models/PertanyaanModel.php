<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


class PertanyaanModel {
    public static function get_all() {
        $data = DB::table('pertanyaan')->get();
        return $data;
    }

    public static function save($data) {
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }

    public static function update($id, $data) {
        $update_pertanyaan = DB::table('pertanyaan')
                                        ->where('id', $id)
                                        ->update($data);
        return $update_pertanyaan;
    }

    public static function delete($id) {
        $delete_pertanyaan = DB::table('pertanyaan')
                                ->where('id', $id)
                                ->delete();
        return $delete_pertanyaan;
    }
}

?>