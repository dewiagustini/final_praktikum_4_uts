@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($Pelanggan)) ? route ('Pelanggan.update',$Pelanggan->id):route('Pelanggan.store')}}" method="post">
    @csrf
    @if(isset($Pelanggan))?@method('PUT')
    
    @endif
    <div class="panel-body">
	<div class="form-group">
		<label class="control-label col-lg-2">Nama Pelanggan</label>
		<div class="col-lg10">
			<input type="text" value="{{(isset($Pelanggan))?$Pelanggan->nama:old('nama')}}" name="nama" class="form-control">
            @error('nama')
                <small style="color:red">{{$message}}</small
            >@enderror
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-2">No Telpon</label>
		<div class="col-lg10">
			<input type="text" value="{{(isset($Pelanggan))?$Pelanggan->no_tlpn:old('no_tlpn')}}" name="no_tlpn" class="form-control">
            @error('no_tlpn')
                <small style="color:red">{{$message}}</small
            >@enderror
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-2">Status</label>
		<div class="col-lg10">
			<input type="text" value="{{(isset($Pelanggan))?$Pelanggan->status:old('status')}}" name="status" class="form-control">
            @error('status')
                <small style="color:red">{{$message}}</small
            >@enderror
		</div>
	</div>
	<div class="form-group">
	<button type="submit">SIMPAN</button>
    </div>
    </form>
    </div>
    </div>
</div> 
@endsection