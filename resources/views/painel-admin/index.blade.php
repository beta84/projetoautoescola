@extends('template.painel-admin')
@section('content')



<?php 
@session_start();
if(@$_SESSION['nivel_usuario'] != 'admin'){ 
  echo "<script language='javascript'> window.location='./' </script>";
}

?>

Home do Admin
@endsection
