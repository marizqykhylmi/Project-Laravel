<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function saveDescription(Request $request)
{
    // Simpan perubahan deskripsi perusahaan ke database
    $description = $request->input('description');
    // Simpan ke model atau database sesuai kebutuhan
    return response()->json(['status' => 'success']);
}

}
