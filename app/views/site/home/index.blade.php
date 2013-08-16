@extends('site.layouts.default')

{{-- Content --}}
@section('content')
@if (Auth::check())
  @if (Auth::user()->hasRole('admin'))
    <div class="page-header">
    <h3>
      Welcome Admin
    
    </h3>
  </div>
  <div class="btn-group">
      <a href="{{{ URL::to('admin/users') }}}" class="btn">
          User Management
      </a>
    </div>
    
    <div class="btn-group">  
      <a href="#" class="btn">
          Hospital Management
      </a>
    </div>
  @elseif (Auth::user()->hasRole('hospital_admin'))
    Welcome Hospital Admin
    <br/><br/><br/>
    <div class="btn-group">
      <a href="#" class="btn">
          User Management
      </a>
    </div>
    
  @elseif (Auth::user()->hasRole('nursing_staff'))
    Welcome Nursing staff.
    <br/><br/><br/>
    <div class="btn-group">
      <button class="btn">Query Report</button>
  </div>
  
  @elseif (Auth::user()->hasRole('medical_officer'))
    Welcome Medical officer/ Duty doctor. 
    <br/><br/><br/>
    <div class="btn-group">
    <button class="btn">New MLC</button>
    <button class="btn">Main FMR</button>
    <button class="btn">Edit Report</button>
    <button class="btn">Final FMR</button>
    <button class="btn">Provisional Report</button>
    <button class="btn">Query Report</button>
  </div>

  <br/><br/><br/><br/>
  <div class="btn-group">
    <button class="btn">Weapon Report</button>
    <button class="btn">Forensic Sample Laboratory</button>
    <button class="btn">Non MLC</button>
    <button class="btn">FRM from Medical Records</button>
    <button class="btn">Polic Information</button>
  </div>

   @elseif (Auth::user()->hasRole('medio_legal'))
    Welcome Medio Legal Consultant/ Incharge Doctor.
    <br/><br/><br/> 
    <div class="btn-group">
      <button class="btn">New MLC</button>
      <button class="btn">Main FMR</button>
      <button class="btn">Edit Report</button>
      <button class="btn">Final FMR</button>
      <button class="btn">Provisional Report</button>
      <button class="btn">Query Report</button>
  </div>

  <br/><br/><br/><br/>
  <div class="btn-group">
     <button class="btn">Weapon Report</button>
     <button class="btn">Forensic Sample Laboratory</button>
     <button class="btn">Non MLC</button>
     <button class="btn">FRM from Medical Records</button>
     <button class="btn">Polic Information</button>
  </div>
  @else
      Welcome ..... 
@endif
@else
<header id="heading">
    <div class="container text-center">
        
    </div>
  @endif
</header>
<br /><br /><br /><br /><br /><br />
@stop
