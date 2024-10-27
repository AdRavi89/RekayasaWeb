<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DataWarga;
class DataWargaController extends Controller
{
 public function showAll()
 {
 return response()->json(DataWarga::all());
 }
 public function showOne($id)
 {
 return response()->json(DataWarga::find($id));
 }
 public function create(Request $request)
 {
 $DataWarga = DataWarga::create($request->all());
 return response()->json($DataWarga, 201);
 }
 public function update($id, Request $request)
 {
 $DataWarga = DataWarga::findOrFail($id);
 $DataWarga->update($request->all());
 return response()->json($DataWarga, 200);
 }
 public function delete($id)
 {
 DataWarga::findOrFail($id)->delete();
 return response('Deleted Successfully', 200);
 }
}