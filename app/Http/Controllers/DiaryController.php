<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//↑require_once(別ファイル);のイケてる版

class DiaryController extends Controller
{
     public function index() {
     		// dd('Hello Laravel'); :die関数　それ以下の処理は取り消される
     		//dump and die関数というLaravelに用意された関数
     		//ver_dumpとdieを組み合わせたもの
     		//Larabel開発の必衰ツールです
     		return view('diaries.index');
     		//view関数はresourses/views/内にあるファイルを取得する関数
     		//view('ファイル名')もしくは
     		//view('フォルダ名.ファイル名')にように記述する
     		//例）view('welcome')
     		//例）view('diaries.edit')
     		//*ファイル名は.bladeの前のみs
     }

     public function create() {
     		return view('diaries.create');
     }
}
