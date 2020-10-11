@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="row tile_count">
    <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-users"></i> Total Blogs</span>
      <div class="count">{{$total_blog}}</div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-briefcase"></i> Total Appointment</span>
      <div class="count">{{$total_appointment}}</div>
    </div>
  </div>
</div>
@endsection