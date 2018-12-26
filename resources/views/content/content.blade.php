@extends('main')
@section('content')
  <template v-if="menu == 0">
    <example></example>
  </template>
  
  <template v-if="menu == 1">
    <h1>Contenido menu 1</h1>
  </template>

  <template v-if="menu == 2">
    <h1>Contenido menu 2</h1>
  </template>

  <template v-if="menu == 3">
    <h1>Contenido menu 3</h1>
  </template>
@endsection