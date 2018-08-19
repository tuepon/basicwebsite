@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam sapiente atque nemo autem? Asperiores, totam facilis! Neque ex alias maiores earum quas, dicta cum adipisci iste aspernatur tenetur eum recusandae?</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection