@extends('master.master')


@section('title')

 Ghumantey | Guide
    @endsection

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/visit2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">List of Guide you searched</h1>
                </div>
            </div>
        </div>
    </div>
     <div class="container">
         <table class="table table-hover">
             <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Language</th>
                <th>Hire / fire</th>
             </tr>
             @foreach($msg as  $m)
             <tr>
                 <td>1</td>
                 <td>{{$m->name}}</td>
                 <td>{{$m->language}}</td>
                 <td>    <i class="fas fa-thumbs-up"></i> </td>

             </tr>
                 @endforeach
         </table>
     </div>

    @endsection